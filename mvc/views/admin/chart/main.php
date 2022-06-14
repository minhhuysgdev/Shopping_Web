<div class="content-wrapper" style="min-height: 195px;">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 style="font-weight: 900; color:orange !important" class="m-0 text-dark">  STATISTICS</h1>
        </div>
        <div class="col-sm-6">
        </div>
      </div>
    </div>
  </div>
  <!-- TODO:Statistics -->

  <!-- TODO:  THỐNG KÊ TỔNG SẢN PHẨM , SỐ HÓA ĐƠN , TỔNG USER, TỔNG DOANH THU  -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 col-6">
          <div class="small-box ">
            <div class="inner">
              <h3><?php echo $data['countProduct'][0]['COUNT(*)'] ?></h3>
              <p>Tổng sản phẩm</p>
            </div>
            <div class="icon">
              <i style="color: orange;" class="ion ion-bag"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box ">
            <div class="inner">
              <h3><?php echo $data['countbill'][0]["count(*)"] ?></sup></h3>
              <p>Tổng số hóa đơn</p>
            </div>
            <div class="icon">
              <i style="color: orange;" class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box ">
            <div class="inner">
              <h3><?php echo $data['countuser'][0]["count(*)"] ?></h3>
              <p>Tổng số User</p>
            </div>
            <div class="icon">
              <i style="color: orange;" class="ion ion-person-add"></i>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-6">
          <div class="small-box ">
            <div class="inner">
              <h3><?php
              $formattedNum = number_format($data['sumbill'][0]["SUM(trigia)"] , 0, ',', '.') . 'đ';
              
              echo   $formattedNum;
              
              ?></h3>
              <p>Tổng doanh thu</p>
            </div>
            <div class="icon">
              <i style="color: orange;" class="ion ion-pie-graph"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- KẾT THÚC  -->

  <!-- TODO:  THỐNG KÊ ĐÁNH GIÁ SAO , TỔNG SẢN PHẨM ĐÃ BÁN , LƯỢT ĐÁNH GIÁ TÔT ,SỐ LƯỢNG KHÁCH HÀNG  -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">số lượng comment</span>
              <span class="info-box-number">
               <?php
             if(isset( $data['comment'])){
               echo $data['comment'][0]['binhluan'];
             }
             else{
               echo "không có bình luận";
             }
               ?>
                <small>Comment</small>
              </span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number"><?php echo  $data['likes']['soluotlike'] ?></span>
            </div>
          </div>
        </div>

        <div class="clearfix hidden-md-up"></div>

        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Đã Bán</span>
              <span class="info-box-number"><?php echo $data['countsales'][0]['count(*)']; ?></span>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-3">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1"><i style="color: #fff;" class="fas fa-users"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Khách hàng thành viên</span>
              <span class="info-box-number"><?php echo $data['allcustomer'][0]['count(*)']; ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 ">
        
        </div>

      </div>
    </div>

  </section>


  <section class="content">
    <div class="container-fluid">
      <div class="row">
        
             <!-- BIỂU ĐỒ THỂ HIỆN DOANH THU CỦA CÁC NGÀY TRONG THÁNG  -->
          <script src="<?php echo URL_ADMIN ?>plugins/chart.js/Chart.min.js"></script>
          <!-- PAGE SCRIPTS -->
          <script src="<?php echo URL_ADMIN ?>dist/js/pages/dashboard2.js"></script>
          <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
          <script type="text/javascript">
            google.charts.load('current', {
              'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
              var data = google.visualization.arrayToDataTable([
                ['DATE', 'Số lượng hóa đơn ', 'Doanh thu'],
                <?php
                foreach ($data['chart'] as $value) {
                  $cutngay = explode(' ', $value['ngayhoadon']);
                  $ngay = $cutngay[0];
                  $soluong = $value['soluonghd'];
                  $tong = $value['tongtien'];
                ?>['<?php echo $ngay ?>', <?php echo $soluong; ?>, <?php echo $tong; ?>],
                <?php
                }
                ?>
              ]);
              var options = {
                title: 'BIỂU ĐỒ DOANH THU CỦA CÁC NGÀY TRONG THÁNG  (THỐNG KÊ NGÀY CÓ DOANH THU CAO NHẤT VÀ THẤP NHẤT)',
                curveType: 'function',
                legend: {
                  position: 'bottom'
                }
              };
              var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));
              chart.draw(data, options);
            }
          </script>

      </div>
      <div class="row">
      <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          <?php
                foreach ($data['phantramdanhgia'] as $value) {
                 
                  $rating = $value['star_rating'].'⭐️' ;
                  $phantram = $value['rating'];
                ?>['<?php echo $rating ?>', <?php echo $phantram; ?>],
                <?php
                }
                ?>
        ]);

        // Set chart options
        var options = {'title':'TỶ LỆ KHÁCH HÀNG ĐÁNH GIÁ SẢN PHẨM SAU KHI MUA',
                       'width':400,
                       'height':500};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>

 <div class="text-center stylechart">
 <div id="curve_chart" style="width: 700px; height: 400px"></div>
 <div id="chart_div" style="width: 400px; height: 400px">
 
 </div>

 </div>
      </div>
    </div>
  </section>

</div>