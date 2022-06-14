<div class="content-wrapper">

    <div class="card">

        <div class="card-header">

            <a href="<?php echo URL . "bill/allbill/1" ?>"> <input class="btn_admin" type="submit" value="All Bill" class="btn btn-success float-left px-5 py-3"></a>
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
                      
                        <!-- TODO: phần thông tin khách hàng -->


                        <!-- Profile Image -->

                        <div class="card card-primary card-outline col-12 col-sm-6 col-md-6 d-flex ">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img style="width: 100px !important;
    height: 100px !important;" class="profile-user-img img-fluid img-circle" src="<?php echo URL_LAYOUT . 'img/cus/' . $data['chitiethoadon'][0]['image'] ?>" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">Thông tin khách hàng </h3>

                                <p class="text-muted text-center">customer info</p>

                                <ul class="list-group list-group-unbordered mb-3">

                                    <li class="list-group-item">
                                        <b>Tên khách hàng : </b> <a class="float-right"><?php echo $data['chitiethoadon'][0]['ho'] . ' ' . $data['chitiethoadon'][0]['ten'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Số điện thoại : </b> <a class="float-right"><?php echo $data['chitiethoadon'][0]['sodienthoai'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Địa chỉ nhận hàng : </b> <a class="float-right"><?php echo $data['chitiethoadon'][0]['diachi'] ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Ghi chú : </b> <a class="float-right"><?php 
                                        if($data['chitiethoadon'][0]['note'] != null){
                                            echo $data['chitiethoadon'][0]['note'];
                                        }
                                        else{
                                            echo "Khách hàng không có lưu ý ";
                                        }
                                        
                                        ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Ngày đặt :</b> <a class="float-right"><?php

                                                                                    $cut = explode(' ', $data['chitiethoadon'][0]['ngay_themvao']);
                                                                                    echo $cut[0];

                                                                                    ?></a>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Tình trạng :</b> <a class="float-right"><?php
                                                                                    if ($data['chitiethoadon'][0]['status'] == 0) {
                                                                                    ?>
                                                Chưa xử lý
                                            <?php
                                                                                    } else if ($data['chitiethoadon'][0]['status'] == 1) {
                                            ?>
                                                Đã xử lý
                                            <?php
                                                                                    } else if ($data['chitiethoadon'][0]['status'] == 2) {
                                            ?>
                                                Đang giao hàng
                                            <?php
                                                                                    } else if ($data['chitiethoadon'][0]['status'] == 3) {
                                            ?>
                                                Hoàn thành
                                            <?php
                                                                                    } else {
                                            ?>
                                                Hủy đơn
                                            <?php
                                                                                    }
                                            ?></a>
                                    </li>
                                </ul>

                            </div>


                        </div>
                        <!-- TODO: kết thúc phần thông tin khách hàng -->

                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">SHD</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">ID SP</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TÊN SP</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">ẢNH SP</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">GIÁ SP</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">SỐ LƯỢNG </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($data['chitiethoadon'] as $key => $value) {
                            $total += $value['giasanpham'];
                        ?>
                            <tr role="row" class="odd">
                                <td><?php echo $value['id'] ?></td>
                                <td><?php echo $value['sohoadon'] ?></td>
                                <td><?php echo $value['id_sanpham'] ?></td>
                                <td><?php echo $value['tensanpham'] ?></td>
                                <td><img width="50px" src="<?php echo URL . 'public/layout/img/product/' . $value['anhsanpham'] ?>" alt="<?php echo $value['tensanpham'] ?>"></td>

                                <td><?php echo $value['giasanpham'] ?></td>
                                <td><?php echo $value['soluongdat'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TỔNG TIỀN : </th>
                            <th colspan="4" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"><?php echo  number_format($total, 0, ',', '.').' đ'; ?></th>
                            <th colspan="2" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
                                <form action="<?php echo URL . 'bill/updatetinhtrang' ?>" method="post" class="form-inline" role="form">
                                    <div>
                                        <label for="" class="sr-only">Trạng thái</label>
                                        <select name="datatinhtrang" id="input" class="form-control" required="required">
                                            <option value="0">Chưa xử lý</option>
                                            <option value="1">Đã xử lý</option>
                                            <option value="2">Đang Giao hàng</option>
                                            <option value="3">Hoàn thành</option>

                                        </select>
                                        <input type="hidden" name="sohoadontinhtrang" value="<?php echo $data['chitiethoadon'][0]['sohoadon'] ?>">
                                        <button style="border: none;
    border-radius: 28px;
    margin-left: 13px;
    padding: 9px 17px;
    " type="submit" name="tinhtrang" class="btn_admin">Cập Nhập</button>
                                    </div>
                                </form>
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>

    </div>
</div>
<!-- /.card-body -->
</div>
</div>