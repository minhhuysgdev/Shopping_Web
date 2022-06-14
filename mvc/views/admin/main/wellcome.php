

<div class="content-wrapper">
<div class="content">
              <div class="card bg-light" style="line-height: 50px;">
                <div class="card-header text-muted border-bottom-0" style="font-size: 30px;color:orange !important">
                <?php
                if($data['user']['level']==1){
                    echo "store manager CARONO";
                }
                else{
                    echo "store staff CARONO";   
                }
                ?>
                </div>
                <div class="card-body pt-0" style="font-size: 20px;">
                  <div class="row">
                    <div class="col-7">
                      <h2 class="lead"><b style="color: orange;">MAIL: </b><b><?php echo $data['user']['username']?></b></h2>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: university of information technology</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center" style="padding-bottom: 50px;">
                      <img style="width: 200px;height:200px;" src="<?php echo URL_LAYOUT.'img/user/'.$data['user']['image']?>" alt="" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right" style="margin-right: 35px;" >
                  
                    <a href=" <?php
                if($data['user']['level']==1){
                    echo URL.'chart/index';
                }
                else{
                    echo URL.'product/index/1';
                }
                ?>" style="background-color: orange;font-weight:700; outline:none" class="btn btn-md  btn_admin ">
                     
                <?php
                if($data['user']['level']==1){
                    echo "Kiểm tra số liệu thống kê của shop nào";
                }
                else{
                    echo "Bắt đầu công việc quản lý sản phẩm nào ";   
                }
                ?>
                    </a>
                  </div>
                </div>
              </div>
            </div>




</div>
