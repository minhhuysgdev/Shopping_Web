<div class="content-wrapper">
    <?php
    //print_r($data['user']);
    ?>
    <div class="card">


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
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">SHD</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">DATE_ADD</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TÊN KH</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TRỊ GIÁ </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">ĐỊA CHỈ </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">LƯU Ý </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">TRẠNG THÁI </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">CHI TIẾT </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">DELETE </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data['allhoadon'] as $key => $value) {

                                ?>
                                    <tr role="row" class="odd">
                                        <td><?php echo $value['sohoadon'] ?></td>
                                        <td><?php echo $value['ngayhoadon'] ?></td>
                                        <td><?php echo $value['ten'] ?></td>
                                        <td><?php echo $value['trigia'] ?></td>
                                        <td><?php echo $value['diachi'] ?></td>
                                        <td><?php echo $value['note'] ?></td>
                                        <td>
                                            <?php

                                            if ($value['status'] == 0) {
                                            ?>
                                                <span style="color: #bf0000;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-tasks"></i></span>
                                            <?php
                                            } else if ($value['status'] == 1) {
                                            ?>
                                                <span style="color: #ad81a4;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-edit"></i></span>
                                            <?php
                                            } else if ($value['status'] == 2) {
                                            ?>
                                                <span style="color: #0f5e7c;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-shipping-fast"></i></span>
                                            <?php
                                            } else if ($value['status'] == 3) {
                                            ?>
                                                <span style="color: green;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-check"></i></span>
                                            <?php
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="<?php echo URL . 'bill/billdetail/' . $value['sohoadon'] ?>">
                                            <span style="color: orange;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fas fa-calendar-week"></i></span>
                                            </a>
                                            
                                        </td>
                                        <td>
                                        <a href="<?php echo URL . 'bill/deletehoadon/' . $value['sohoadon'] ?>">
                                            <span style="color: orange;" class="labl text-center"><i style="font-size: 20px;width: 100%;font-weight: 600;" class="fa fa-trash"></i></span>
                                            </a>
                                        </td>
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
                                $bill_count = count($data['hoadon']);

                                $bill_button = ceil($bill_count / 9);
                                for ($i = 1; $i <= $bill_button; $i++) {
                                ?>
                                    <li class="paginate_button page-item "><a href="<?php echo URL . 'bill/allbill/' . $i ?>" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link"><?php echo $i ?></a></li>
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