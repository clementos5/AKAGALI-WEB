<!DOCTYPE html>
<html>

<head>
  <title>ikaze ku kagali iwacu</title>

  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
    <!-- link rel="stylesheet" type="text/css" href="css/sle.css"/-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/myjs.js"></script>
    <script src="js/drpdwnleft.js"></script>
    <style type="text/css">
        
        #getFixed {
          color: #c00;
          font: bold 15px arial;  
          width: 100%;
        }
       
    </style>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        jQuery(function($) {
        function fixDiv() {
        var $cache = $('#getFixed');
        if ($(window).scrollTop() > 150)
      $cache.css({
        'position': 'fixed',
        'top': '60px',
        'z-index':'1'
      });
    else
      $cache.css({
        'position': 'relative',
        'top': 'auto'
      });
    }
    $(window).scroll(fixDiv);
    fixDiv();
    });
    </script>
</head>

<body style="background: #f5f5f5;" >

<div class="akgl-body">
<?php include 'includes/header.php' ?>

<div class="akagali-main"> 

          
          <div class="row">
            <center><h1>Akagali Services</h1></center>
              <div class="col-md-12">

                   <div class="services-per-day">
                      <div class="service-per-day-title">
                        Monday
                      </div>
                      MOnday
                    </div>
                    <div class="services-per-day">
                      <div class="service-per-day-title">
                        Tuesday
                      </div>
                      Tuesday
                    </div>
                    <div class="services-per-day">
                      <div class="service-per-day-title">
                        Wednesday
                      </div>
                      Wednesday
                    </div>
                    <div class="services-per-day">
                      <div class="service-per-day-title">
                        Thursday
                      </div>
                      Thursday
                    </div>
                    <div class="services-per-day">
                      <div class="service-per-day-title">
                        Friday
                      </div>
                      Friday
                    </div>
                   

                      </div></div></div>

                      <?php include 'includes/footer.php' ?>

      </body>
</html>