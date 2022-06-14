<div class="content-wrapper">
    <?php
    //print_r($data['user']);
    ?>
    <div class="card">

        <div class="card-header">

            <a href="<?php echo URL . "product/store" ?>"> <input type="submit" value="Add Product" class="btn_admin float-left px-5 py-3"></a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">TÊN SP</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">IMG_1</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">IMG_2</th>
                                                                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">THƯƠNG HIỆU</th>

                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">GIA</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">SL</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">XUẤT XỨ</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">LOẠI SP</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">MIÊU TẢ SP</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">THÔNG TIN SP</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">KL</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">EDIT</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">DEL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data['producttrang'] as $value) {
                                ?>
                                    <tr role="row" class="odd">
                                        <td ><?php echo $value['id'] ?></td>
                                        <td><?php echo $value['tensanpham'] ?></td>
                                        <td><img style="border-radius: 10px" width="50px" src="<?php echo URL . 'public/layout/img/product/' . $value['image1'] ?>" alt="<?php echo "Chưa có ảnh" ?>"></td>
                                        <td><img style="border-radius: 10px" width="50px" src="<?php echo URL . 'public/layout/img/product/' . $value['image2'] ?>" alt="<?php echo "Chưa có ảnh" ?>"></td>
                                        <td><?php echo $value['thuonghieu'] ?></td>

                                        <td><?php echo $value['gia'] ?></td>
                                        <td><?php echo $value['soluong'] ?></td>
                                        <td><?php echo $value['xuatxu'] ?></td>
                                        <td><?php 
                                        if( $value['cate_ID']==1){
echo "Thời trang nam";
                                        }
                                        else if( $value['cate_ID']==2){
                                            echo "Thời trang nữ";

                                        }
                                        else if( $value['cate_ID']==3){
echo "Túi thời trang";
                                            
                                        }
                                        else if( $value['cate_ID']==4){
echo "Mũ thời trang";
                                            
                                        }
                                        
                                        ?></td>
                                        <td><?php echo $value['mieutasanpham'] ?></td>
                                        <td><?php echo $value['thongtinsanpham'] ?></td>
                                        <td><?php echo $value['cannang'] ?></td>
                                        <td><a href="<?php echo URL . "product/edit/${value['id']}/${data['trang']}"; ?>" style="color: orange;"><i class="fa fa-cog" aria-hidden="true"></i></a></td>
                                        <td><a href="<?php echo URL . "product/delete/${value['id']}/${data['trang']}"; ?>" style="color: orange;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
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
                               $product_count=count($data['product']);
                              $product_button=ceil($product_count/9);
                             for($i=1;$i<=$product_button;$i++){
                                ?>
                                <li class="paginate_button page-item "><a href="<?php echo URL.'product/index/'.$i?>" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $i?></a></li>
                           <?php
                             }
                           ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>