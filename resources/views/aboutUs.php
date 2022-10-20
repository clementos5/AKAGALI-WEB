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


 <div class="contact-us-left-side">
          <h1>About Us</h1>
          <h4>Who we are.</h4>
          <p>
            akagali was founded in 2017 under Tonda Investiment Company, where the purpose was to make people contribute in the development of the country.
          </p>
          <h4>Who we are.</h4>
          <p>
            akagali was founded in 2017 under Tonda Investiment Company, where the purpose was to make people contribute in the development of the country.
          </p>
          <h4>Who we are.</h4>
          <p>
            akagali was founded in 2017 under Tonda Investiment Company, where the purpose was to make people contribute in the development of the country.
          </p>
          <h4>Who we are.</h4>
          <p>
            akagali was founded in 2017 under Tonda Investiment Company, where the purpose was to make people contribute in the development of the country.
          </p>
          <h4>Who we are.</h4>
          <p>
            akagali was founded in 2017 under Tonda Investiment Company, where the purpose was to make people contribute in the development of the country.
          </p>
          

</div>
<div class="contact-us-right-side">
  <img src="images/bgmg.jpg" alt="Img">
  <div style="margin-top: 5%;">
    <center>
    <p>
      Call executive secretary of AKAGALI
       <b>+250788888888</b>  Or just Email him ot her instead at: <b class="email">akagali@akagali.gov.rw</b>
    </p>
    </center>
  </div>
</div>





</div>

        <?php include 'includes/footer.php' ?>

</body>
</html>