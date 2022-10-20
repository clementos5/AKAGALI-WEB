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
        'top': '60px'
      });
    else
      $cache.css({
        'position': 'relative',
        'top': 'auto',
        'z-index':'1'
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
          <div class="panel-body">
              <div class="tab-content">

                <!-- Home -->
                  
                        <div class="akagali-content-left">
                          <center><strong>AMATANGAZO Y'AKAGALI</strong></center>
                          <div class="amatangazo">
                          
                                <p style="font-family: Verdana,verdana;font-size:13px;line-height:16px; margin-left: 10px;">
                                    <a href="uploads/pdfile.pdf" title="Gahunda y'ibikowa by'akagali.">Gahunda y'ibikowa by'akagali.</a></p>
                                    <span style="font-size:12px;color:#E09812;margin-left:10px;">Published on:  20.01.2017</span>
                          </div>
                        </div>

                        <div class="akagali-content-right">

                        <div class="col-sm-12">
                            <h4><strong>RECENT POSTS</strong></h4>
                            <hr class="dotted">
                            <h2>GUKORA UMUHANDA</h2>
                            <h5><span class="glyphicon glyphicon-time"></span> Post by Cyusa Hadman, Executive Secretary of Mugina Cell. </h5>
                            <h5><span class="label label-primary">Saturday</span> <span class="label label-primary">Dec 21, 2017</span></h5><br>
                            <p>Ubuyobozo bw'akagali mu nama yabaye kuwa gatatu kuwa 18 ukwakira 2017, hemejwe ko hagiye gukorwa umuhanda uhuza umudugudu wa KOMBE na KAMBU ushamikiye ku muhanda ujya i Ngoma, ukanyuzwa haruguru yo kwa Kalisa ukambuka ugaca hepfo yo kwa Kalisiti, ugakata ugaruka ku kagali ka Mugina. Ibi bizakorwa mu rwego rwo kwimura uriya wo hepfo uhora uteza ucika. Murakoze tubashimiye uruhare rwanyu mu iterambere</p>
                            <p><hr class="dashed">

                              <a href="Comments.php"><button type="button" class="btn btn-default btn-sm"> <span class="glyphicon glyphicon-comment"></span> Comment </button></a>
                              <a href="Comments.php"><button type="button" class="btn btn-default btn-sm color-primary "> Read More >> </button></a>
                            </p>
                        </div>                                                  
                        </div>
                  
              </div>
          </div>
        </div>             

<!--footer-->

<?php include 'includes/footer.php' ?>


</body>
</html>