<!DOCTYPE html>
<html>

<head>
  <title>ikaze ku kagali iwacu</title>

  <link rel="stylesheet" type="text/css" href="css/custom.css"/>
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
    <!-- <script src="js/jquery.min.js"></script> -->
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
<div class="header">
<header>
    <div class="akagali-navbar">
        <nav class="navbar navbar-inverse navbar-akagali navbar-fixed-top">
           <div class="akagali-container">
                <div class="navbar-header">
                    <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#akagali-nav">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="images/flag_logo.gif" />
                    </a>
                </div>
                <div class="left-div">
                    <div class="user-settings-wrapper">
                        <ul class="nav">
                            <div id="akagali-nav" class="collapse navbar-collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="../akagali/login.html">Log In</a></li>
                                    <li><a href="../akagali/register.html">Sign Up</a></li>
                                </ul>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>  
        </nav>
    </div>
    <!-- LOGO HEADER END-->
</header>
<div>&nbsp</div><div>&nbsp</div><div>&nbsp</div>
            <div id="example1" style="width:100%; height:150px;" >   
               <div style="width:50%;z-index: 99; margin-left: 25%;">
                  <ul class="breadcrumb">
                     <li ><i class="fa fa-home"></i><a href="index.php">akarere</a></li>
                     <li><i class="fa fa-laptop"></i><a href="index.php">umurenge</a></li> 
                     <li><i class="fa fa-laptop"></i><a href="index.php">akagali</a></li>
                  </ul> 
              </div>
              <div class="col-lg-12">
                       <!-- search form 4 -->
<form style="float: right;margin-top: 45px;">
<input type="text" class="search" placeholder=" shakisha akagari; umurenge; akarere kawe......................." />
<input type="submit" class="submit_search" value="Search" />
</form>
              </div>
            </div>
<!--overview start-->
    <div id="getFixed">
      <section class="panel">
          <header class="panel-heading tab-bg-primary ">
              <ul class="nav nav-tabs">
                  <li class="">
                      <a href="index.php">Home</a>
                  </li>
                  <li class="">
                      <a href="aboutUS.php">About Us</a>
                  </li>
                  <li class="">
                      <a href="contactus.php">Provide Idea </a>
                  </li>
                  <li class="">
                      <a href="services.php">Services</a>
                  </li>

              </ul>
          </header>

      </section>
        </div>


</div>
</div>