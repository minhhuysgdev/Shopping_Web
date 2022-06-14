<?php 

class Connect{
	function call_views($path,$data){
		require_once'./mvc/views/'.$path.'.php';
	}
	function call_models($path){
		require_once'./mvc/models/'.$path.'.php';
	}
}

 ?>