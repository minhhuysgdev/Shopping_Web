<?php
//print_r($data['user']);
?>
<div class="content-wrapper">
    <div class="card-header">
        <h3 style="color: orange;font-weight:700" class="card-title">USER INFORMATION</h3>
    </div>
    <div class="card-header">
        <a href="<?php echo URL.'user/store'?>"> <input type="submit" value="Add User" class="btn_admin float-left px-5 py-3"></a>
    </div>
    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table text-center table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">IMAGE</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">USERNAME</th>

                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">PASSWORD</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">LEVEL</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">ID</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">EDIT</th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">DELETE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data['alluser'] as $key => $value) {
                            ?>
                                <tr role="row" class="odd">
                                <td><img style="border-radius: 10px" width="50px" src="<?php echo URL.'public/layout/img/user/'.$value['image'] ?>" alt="<?php echo $value['username'] ?>"></td>
                                    <td tabindex="0" class="sorting_1"><?php echo $value['username'] ?></td>
                                    <td><?php echo $value['password'] ?></td>
                                    <td><?php if ($value['level'] == 1) {
                                echo "Admin";
                            } else {
                                echo "Staff";
                            }
                            ?></td>
                                    <td><?php echo $value['id'] ?></td>
                                    <td><a href="<?php echo URL."user/edit/${value['id']}/${data['trang']}";?>" style="color: orange;"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                    <td><a href="<?php echo URL."user/delete/${value['id']}/${data['trang']}";?>" style="color: orange;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>

                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
            <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>

                                <?php 
                               $user_count=count($data['user']);
                              $user_button=ceil($user_count/4);
                             for($i=1;$i<=$user_button;$i++){
                                ?>
                                <li class="paginate_button page-item "><a href="<?php echo URL.'user/index/'.$i?>" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $i?></a></li>
                           <?php
                             }
                           ?>
                            </ul>
                        </div>
                    </div>
                </div>
        </div>
    </div>

</div>