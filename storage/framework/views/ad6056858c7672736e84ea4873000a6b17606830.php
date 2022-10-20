<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Akagari</title>

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/fontawesome.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/bootstrap-theme.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/elegant-icons-style.css')); ?>" rel="stylesheet">
    <!-- <link href="<?php echo e(asset('css/mystyles.css')); ?>" rel="stylesheet"> -->
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet">
    <!-- <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet"> -->
<style type="text/css">
#getFixed {
          color: #c00;
          font: bold 15px arial;  
          width: 100%;
        }
        .akgl-wrapper{margin-top:60px;}

#akgl-container{
    width: 100%;
}
.clearfix{
    width: 100%;
    padding: 2% 0px;
}
.overlay{
    background-color: rgba(0, 0, 0, .75);
    min-height: 400px;
}
.img-akgl-wrapper{
    background-position: center center !important;
    background-size: 100% auto !important;
    border-bottom: 2px solid #31b0d5;
    min-height: 450px;
}
.akgl-jumbotron{
    width: 40%;
    margin-left: 30%;
    float: left;
    background: white;

}
/*.................search box............*/
/* search button 4 */
.search {
   width: 500px;
   height: 40px;
   border: 0;
    color: #000;
    font: 16px 'Raleway', sans-serif;
    height: 40px;
    outline: none;
    padding-left: 20px;
    /* Rounded Corners */
    border-radius: 10px; 
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
   
}
.search:focus {
   -webkit-transition: all .5s ease;
   -moz-transition: all .5s ease;
   transition: all .5s ease;
}


/*** SEARCH BUTTON ***/
.submit_search{
    background: #31b0d5;/* Fallback color for non-css3 browsers */
      border: 0;
    color: #eee;
    cursor: pointer;
    font: 16px 'Raleway', sans-serif;
    height: 40px;
    text-shadow: 0 -1px 0 rgba(0, 168, 218, 0.5);;
    width: 100px;
    margin-left: -2px;
    outline: none;
    /* Rounded Corners */
    border-radius: 10px; 
    -webkit-border-radius: 10px;        
    -moz-border-radius: 10px;
    /* Shadows */
    box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.4);
    -moz-box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.2);
    -webkit-box-shadow: -1px -1px 1px rgba(255,255,255,.5), 1px 1px 0 rgba(0,0,0,.4);
}
/*** SEARCH BUTTON HOVER ***/
.submit_search:hover {
    background: white;
    color:#007aff;
    border: 0.5px solid #007aff; /* Fallback color for non-css3 browsers */
    /* Gradients */

}
.submit_search:active {
    background: #007aff; /* Fallback color for non-css3 browsers */
    /* Gradients */
}
    </style>
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
<body>
    <div id="app">

        <div class="header">
            <header>
                <div class="akagali-navbar">
                    <nav class="navbar navbar-inverse navbar-akagali navbar-fixed-top">
                       <div class="akagali-container">
                            <div class="navbar-header">
                                <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#akagali-nav">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!-- Branding Image -->
                                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                                    <img src="/images/flag_logo.gif" />
                                </a>
                            </div>
                            <div class="left-div">
                                <div class="user-settings-wrapper">
                                    <ul class="nav">
                                        <div id="akagali-nav" class="collapse navbar-collapse" >
                                            <ul class="nav navbar-nav navbar-right" style="width: 30%;">
                                                <!-- Authentication Links -->
                                                <?php if(auth()->guard()->guest()): ?>
                                                    <li><a href="<?php echo e(route('login')); ?>" >Injira</a></li>
                                                    <li><a href="<?php echo e(route('register')); ?>">Iyandikishe</a></li>
                                                <?php else: ?>
                                                <div class="dropdown">
   
                                                    <li class="dropdown" style="float: left;">
                                                      <?php echo e(Auth::user()->last_name); ?> 
                                                             
                                                        </a>
                                                         
                                                            <li>
                                                                <a href="<?php echo e(route('logout')); ?>"
                                                                    onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                    Logout
                                                                </a>
                                                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                                                    <?php echo e(csrf_field()); ?>

                                                                </form>
                                                            </li>
                                                        
                                                    </li>
                                                <?php endif; ?>
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
                    <div class="akgl-body"> 
                        <div id="example1" style="width:100%; height:150px; background-image:url(/images/logo2.png);" >   
                           <!-- <div style="width:50%;z-index: 99; margin-left: 25%;">
                              <ul class="breadcrumb">
                                 <li ><i class="fa fa-home"></i><a href="index.php">akarere</a></li>
                                 <li><i class="fa fa-laptop"></i><a href="index.php">umurenge</a></li> 
                                 <li><i class="fa fa-laptop"></i><a href="index.php">akagali</a></li 
                                 <?php if(Auth::user()): ?>
                                   <li><i class="fa fa-lock"></i>
                                      <a href="<?php echo e(route('logout')); ?>"
                                          onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          Logout
                                      </a>
                                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                          <?php echo e(csrf_field()); ?>

                                      </form>
                                   </li>
                                 <?php endif; ?>
                              </ul> 
                          </div>-->
                          <div class="col-lg-12">
                            <form style="float: right;margin-top: 45px;" action="/search" method="POST">
                              <?php echo e(csrf_field()); ?>

                            <input type="search" name="search" class="search" style="background: #fff;border: #000 solid 1px;" placeholder="Andikamo Izina ry'Akagali" value="<?php if(isset($_POST['search'])){echo $_POST['search']; }?>" />
                            <input type="submit" class="submit_search" value="Search" />
                            </form>
                          </div>
                        </div>
                    <!--overview start-->
            <?php if(Auth::user() AND Auth::user()->user_type == 'admin'): ?>
              <div id="getFixed">
                  <section class="panel">
                      <header class="panel-heading tab-bg-primary ">
                        <ul class="nav nav-tabs">
                            <li class="">
                                <a href="/">Home</a>
                            </li>
                            <li class="">
                                <a href="/topics">Topics </a>
                            </li>
                            <li class="">
                                <a href="/action_plans">Action plans </a>
                            </li>
                            <li class="">
                                <a href="/suggestions">Suggestions</a>
                            </li>
                            <li class="">
                                <a href="/services">Services</a>
                            </li>

                        </ul>
                      </header>
                  </section>
              </div>
            <?php endif; ?>
        
  
    <div class="akagali-main"> 
      <div class="panel-body">
          <div class="tab-content">

            <!-- Home -->
            <?php if(isset($cell_id)): ?>
              <div class="akagali-content-left">
                <div class="col-xs-12">
                </div>
                <center><strong style="font-family: 'Times New Roman', Times, serif;font-size: 150%;">GAHUNDA ZIGEZWEHO MU KAGALI</strong></center>
                <div class="amatangazo">
                    <div class="col-xs-12">
                      <table class="table">
                        <?php if(count($services) != 0): ?>
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <th ><?php echo e($service->name); ?></th>
                                <td><?php echo e($service->description); ?></td>
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                          <div style="color: red"> Mutwihanganire, Nta gahunda nshya zibashije kuboneka <a href="/suggestions/suggest/<?php echo e($cell_id); ?>">Kanda Hano Uduhe Igitekerezo</a></div>
                        <?php endif; ?>

                      </table>
                      
                    </div>
                </div>
                <div class="col-xs-12">
                  <hr class="dotted"/>
                </div>
                <center><strong style="font-family: 'Times New Roman', Times, serif;font-size: 150%;">IGENABIKORWA</strong></center>
                <hr>
                <div class="amatangazo">
                  <?php if(count($action_plans) != 0): ?>
                    <?php $__currentLoopData = $action_plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="col-xs-12">

                        <div class="col-md-12" style="padding-bottom: 5px;">
                          <?php echo e($plan->year); ?> | <a href="/<?php echo e($plan->plan_url); ?>">Kuyifungura/Kuyibika</a>
                        </div>
                        <div class="col-md-12" style="margin-top:5px;">
                          <b>Added on:</b> <?php echo e($plan->created_at); ?>

                        </div>
                      </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  <?php else: ?>
                    <div class="col-xs-12" style="color: red"> Mutwihanganire, Igenabikorwa riratangazwa bidatinze <a href="/suggestions/suggest/<?php echo e($cell_id); ?>">Kanda Hano Uduhe Igitekerezo</a></div>
                  <?php endif; ?>
                </div>
              </div>
            <?php endif; ?>
             <?php echo $__env->yieldContent('content'); ?>
          </div>
      </div>
<footer class="akagali-bottom">
<div class="container">

<div class="row"><!-- row -->
    
        <div class="col-lg-3 col-md-3"><!-- widgets column left -->
        <ul class="list-unstyled clear-margins"><!-- widgets -->
                
                  <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
                        <h1 class="title-widget">INtara z'Urwanda</h1>
                        
                        <ul>
                          <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Amajyaruguru</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Amajyepho</a></li>

                        </ul>
            
      </li>
                    
                </ul>
                 
              
        </div><!-- widgets column left end -->
        
        
        
        <div class="col-lg-3 col-md-3"><!-- widgets column left -->
    
        <ul class="list-unstyled clear-margins"><!-- widgets -->
                
                  <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
                        <h1 class="title-widget">Intara z'Urwanda</h1>
                        
                        <ul>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Uburengerazuba</a></li>                          
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Uburasirazuba</a></li>
                            <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Umujyi wa kigali</a></li>
                            
                        </ul>
            
      </li>
                    
                </ul>
                 
              
        </div><!-- widgets column left end -->
        
        
        
        <div class="col-lg-3 col-md-3"><!-- widgets column left -->
    
        <ul class="list-unstyled clear-margins"><!-- widgets -->
                
                  <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
                        <h1 class="title-widget">Kwinjira / Kwiyandikisha</h1>
                        
                        <ul>


        <li><a href="/login"><i class="fa fa-angle-double-right"></i> Injira </a></li>
        <li><a href="/register"><i class="fa fa-angle-double-right"></i> Iyandikishe</a></li>
  

                        </ul>
            
      </li>
                    
                </ul>
                 
              
        </div><!-- widgets column left end -->
        
        
        <div class="col-lg-3 col-md-3"><!-- widgets column center -->
        
           
            
                <ul class="list-unstyled clear-margins"><!-- widgets -->
                
                  <li class="widget-container widget_recent_news"><!-- widgets list -->
            
                        <h1 class="title-widget">Social Medias </h1>
                        
                        <div class="footerp"> 
                    
                        
                        </div>
                        
                        <div class="social-icons">
                        
                          <ul class="nomargin">
                            
        <a href="https://www.facebook.com"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
      <a href="https://twitter.com/"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
      <a href="https://plus.google.com/"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
      <a href=""><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                            
                            </ul>
                        </div>
                </li>
                  </ul>
               </div>
        </div>
</div></div></div>
    </footer style="bottom: 0px">
    <!--header-->

    <div class="footer-bottom">

      <div class="container">

        <div class="row">

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="copyright">

               Copyright © 2017 TIC All right reserved.

            </div>

          </div>

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

            <div class="design">

               <a href="#">Rwanda </a> |  <a target="_blank" href="http://www.webenlance.com">Kigali City</a>

            </div>

          </div>

        </div>

      </div>

    </div>
    </div>  

</div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/drpdwnleft.js')); ?>"></script>
    <!-- <script src="<?php echo e(asset('js/jquery.js')); ?>"></script> -->
    <script src="<?php echo e(asset('js/jquery.nicescroll.js')); ?>"></script>
    <script src="<?php echo e(asset('js/jquery.scrollTo.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/myjs.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>

</body>
</html>
