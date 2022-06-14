


//Đối tượng validator
function Validator(options) {
	
	var selectorRule={};

	//hàm thực hiện validate
	function Validate(inputElement,rule)
	{
		var errorElement=inputElement.parentElement.querySelector(options.errorSelector);
		var errorMessage;
		//lấy ra các rules của selector
		var rules=selectorRule[rule.selector];
		//lặp ra từng rule và kiểm tra 
		for(var i=0;i<rules.length;++i)
		{
			errorMessage=rules[i](inputElement.value);
			if(errorMessage) break;
		}
			if(errorMessage)
				{
					errorElement.innerText= errorMessage;
					inputElement.parentElement.classList.add('invalid');

				}else
				{
					errorElement.innerText='';
					inputElement.parentElement.classList.remove('invalid');
				}
			return !errorMessage;
		}
	
	var formElement=document.querySelector(options.form);

	if(formElement){

		options.rules.forEach(function (rule) {
			//khi submit form 
			formElement.onsubmit=function (e)
			{
				e.preventDefault();
				//lặp qua từng rules và validate
				var isFormValid=true;
				options.rules.forEach(function (rule)
				{
					var inputElement=formElement.querySelector(rule.selector);
					var isValid=Validate(inputElement,rule);
					if(!isValid)
					{
						isFormValid= false;
					}
				});
			
				
					if(isFormValid)
					{	
						
						if(typeof options.onSubmit === 'function')
						{	

						var enableInputs=formElement.querySelectorAll('[name]:not([disabled])');
						var formValues=Array.from(enableInputs).reduce( function(values,input)
						{
					return (values[input.name] =input.value) && values;
				},{});
								options.onSubmit(formValues);
						}
						else
						{
							formElement.submit();
						}
					}
			}

			//xử lý lặp qua mỗi rule(lắng nghe sự kiện,blur)


			if(Array.isArray(selectorRule[rule.selector]))
			{
				selectorRule[rule.selector].push(rule.test);
			}else{
				selectorRule[rule.selector]=[rule.test];
			}
			var inputElement= formElement.querySelector(rule.selector);
			
			if(inputElement){
				//xử lý trường hợp blur khỏi input
				inputElement.onblur= function () {
				
				Validate(inputElement,rule);	
				}
				//xử lý khi đang nhập
				inputElement.oninput= function (){
					var errorElement=inputElement.parentElement.querySelector(options.errorSelector);	
					errorElement.innerText='';
					inputElement.parentElement.classList.remove('invalid');
				}
			}
		});
		
	}
}


	//ĐỊnh nghĩa rules
Validator.isRequired= function (selector,message){
 	return {
 		selector:selector,
 		test: function (value) {
 			return value.trim() ? undefined :message||'Vui lòng nhập trường này';
 		}
 	};
 }
	

Validator.isEmail=function(selector){
	return {
 		selector:selector,
 		test: function (value) {
 			var regex=/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
 			return regex.test(value) ? undefined : 'Vui lòng nhập email';
 		}
 	};
}
Validator.minLength= function (selector,min){
	return {
 		selector:selector,
 		test: function (value) {
 			return value.length >=min ? undefined : `Vui lòng nhập ít nhất ${min} kí tự`;
 		}
 	};
}
Validator.isConfirmed= function (selector,getConfirmValue,message){
	return {
 		selector:selector,
 		test: function (value) {
 			return value===getConfirmValue() ? undefined :message||'Giá trị nhập vào không chính xác';
 		}
 	};
}

