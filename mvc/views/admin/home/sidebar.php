<aside style="background-color: #000;" class="main-sidebar  elevation-4">
    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image"  >
          <img style="height: 3rem; width: 3rem" src="<?php echo URL.'public/layout/img/user/'.$_SESSION['image'] ?>"  class="img-circle elevation-2"  >
        </div>
        <div class="info">
          <a style="color:#66c8bf; padding-top:5px !important" href="" class="d-block"> <?php
            if (isset($_SESSION['username'])) {
            echo $_SESSION['username'];
            } else {
            echo URL."login";
            }
            ?></a>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item has-treeview menu-open">
            <a href="<?php  echo URL.'chart/index';?>" class="nav-link actives" style="padding-left: 23px;">
            <i style="color: #ff9d00;" class="fa fa-pie-chart" aria-hidden="true"></i>
              <p style="    margin-left: 5px;">
                Statictis

              </p>
            </a>
          </li>
         
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link actives">
              <i class="nav-icon fa fa-user-circle"></i>
              <p>
                User
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                <a href="<?php  echo URL.'user/index/1';?>" class="nav-link ">
                  <i class="fa fa-spinner nav-icon"></i>
                  <p>All User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php  echo URL.'user/store';?>" class="nav-link">
                  <i class="fa fa-spinner nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link actives">
              <i class="nav-icon fa fa-book"></i>
              <p>
                product
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                <a href="<?php echo URL.'product/index/1';?>" class="nav-link ">
                  <i class="fa fa-spinner nav-icon"></i>
                  <p>All product</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo URL.'product/store';?>" class="nav-link">
                  <i class="fa fa-spinner nav-icon"></i>
                  <p>Add product</p>
                </a>
              </li>
           
            </ul>
          </li>
         
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link actives">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Orders
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                <a href="<?php echo URL.'bill/allbill/1';?>" class="nav-link ">
                  <i class="fa fa-spinner nav-icon"></i>
                  <p>All bill</p>
                </a>
              </li>
             
           
            </ul>
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link actives">
              <i class="nav-icon fa fa-book"></i>
              <p>
                control
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                <a href="<?php echo URL."layout"?>" class="nav-link ">
                <i class="fa fa-spinner nav-icon"></i>
                  <p> Layout</p>
                </a>
              </li>
             
           
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">

                <a href="<?php echo URL."login/logout"?>" class="nav-link ">
                
                <i style="margin-left: 5px;" class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                  <p style="padding-left: 9px;"> sign out</p>
                  
                </a>
              </li>
             
           
            </ul>
          </li>

       
        </ul>
      </nav>
    </div>
  </aside>