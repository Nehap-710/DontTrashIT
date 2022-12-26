<?php
require('includes/db.php');
require('includes/function.php');
if(!isset($_SESSION['email'])){
  header('Location:./login.php');
}

$name=getName($db,$_SESSION['email']);
$id=getUserId($db,$name);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <title>User Blog Post Panel</title>

  <!-- Bootstrap CSS -->
  <link href="admin/css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="admin/css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="admin/css/elegant-icons-style.css" rel="stylesheet" />
  <link href="admin/css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="admin/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="admin/assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="admin/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="admin/css/fullcalendar.css">
  <link href="admin/css/widgets.css" rel="stylesheet">
  <link href="admin/css/style.css" rel="stylesheet">
  <link href="admin/css/style-responsive.css" rel="stylesheet" />
  <link href="admin/css/xcharts.min.css" rel=" stylesheet">
  <link href="admin/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
<?php
include_once("includes/navbar.php");
?>
 <div class="col-lg-12"  style="margin-top: 60px;">
                <section class="panel">
                  <header class="panel-heading">
                    Add Post
                  </header>
                  <div class="panel-body">
                    <div class="form">
                      <form action="./includes/addpost.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="form-group">
                      <div class="col-sm-12">
                        <label>Post Title</label>
                            <input type="text" class="form-control" name="post_title">
                          </div>
</div>
                        <div class="form-group">
                         
                          <div class="col-sm-12">
                          <label>Post Content</label>
                            <textarea class="form-control ckeditor" name="post_content" rows="6"></textarea>
                          </div>
                        </div>

<div class="row">
<div class="form-group col-sm-6">
                      <div class="col-sm-12">
                        <label>Upload Photos(max 5)</label>

                          <input type="file" class="form-control" name="post_image[]" accept="image/*" multiple/>
                          </div>
</div>
</div>
                        <input type="submit" name="addpost" class="btn btn-primary" value="Add Post">
                        <a href="index.php" style="text-decoration:none; color: white;"><input type="button" value="Go back" class="btn btn-primary"></a>
                      </form>
                    </div>
                  </div>
                </section>
              </div>
           
</div>

        </div>
       <?php
     
     ?>
        <!-- Today status end -->
        <!-- statics end -->
  <!-- container section start -->

  <!-- javascripts -->
  <script src="admin/js/jquery.js"></script>
  <script src="admin/js/jquery-ui-1.10.4.min.js"></script>
  <script src="admin/js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="admin/js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="admin/js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="admin/js/jquery.scrollTo.min.js"></script>
  <script src="admin/js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="admin/assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="admin/js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="admin/js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="admin/js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="admin/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="admin/js/calendar-custom.js"></script>
    <script src="admin/js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="admin/js/jquery.customSelect.min.js"></script>
    <script src="admin/assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="admin/js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="admin/js/sparkline-chart.js"></script>
    <script src="admin/js/easy-pie-chart.js"></script>
    <script src="admin/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="admin/js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/js/xcharts.min.js"></script>
    <script src="jadmin/s/jquery.autosize.min.js"></script>
    <script src="admin/js/jquery.placeholder.min.js"></script>
    <script src="admin/js/gdp-data.js"></script>
    <script src="admin/js/morris.min.js"></script>
    <script src="admin/js/sparklines.js"></script>
    <script src="admin/js/charts.js"></script>
    <script src="admin/js/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="admin/assets/ckeditor/ckeditor.js"></script>
  <!-- custom form component script for this page-->
  <script src="admin/js/form-component.js"></script>
  <script src="admin/js/scripts.js"></script>

    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
