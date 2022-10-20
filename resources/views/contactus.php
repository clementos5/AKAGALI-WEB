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
                  <h1 style="color: green;">Iterambere Ni Iryacu Twese</h1>
                  <hr class="dotted">
                  <p>
                    Twiyubakire igihugu duhuriza hamwe ibitekerezo byubaka, tugira uruhare mu bidukorerwa.
                  </p>
                  <p style="color: #ff04ac;">
                    Tanga igitekerezo cyawe ufatanye n'abandi kubaka igihugu.
                  </p>
                  <form action="#" method="post">
                    <label>Name</label> 
                    <input type="text" value="" name="name">
                    <label>Email Address</label>
                    <input type="text" value="" name="email">
                    <label>Contact Number</label>
                    <input type="text" value="">
                    <label>Message</label>
                    <textarea name="message"></textarea>
                    <input type="submit" value="Send Message" class="btn1">
                  </form>
                </div>
                  <div class="contact-us-right-side">
                    <img src="images/bgmg.jpg" alt="Img">
                    <div style="margin-top: 5%;">
                      <center>
                      <p>
                        In case of urgent; call executive secretary of AKAGALI
                         <b>+250788888888</b>  Or just Email him ot her instead at: <b class="email">akagali@akagali.gov.rw</b>
                      </p>
                      </center>
                    </div>
                  </div>

</div>

<?php include 'includes/footer.php' ?>

</body>
</html>