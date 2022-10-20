<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>:.Akagari</title>
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- @todo: fill with your company info or remove -->
        <meta name="description" content="">
        <meta name="author" content="Themelize.me">
    
        <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->
        <!-- Theme style <link href="css/theme-style.min.css" rel="stylesheet"-->
        <!-- Your custom override -->
        <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/mystyles.css') }}" rel="stylesheet">
         <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
          <!-- Iconset: Font Awesome 4.7.0 via CDN -->
        <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
        <!-- Iconset: flag icons - http://lipis.github.io/flag-icon-css/ -->
        <link href="css/flag-icon.min.css" rel="stylesheet">
        <!-- Iconset: ionicons - http://ionicons.com/ -->
        <link href="css/ionicons.min.css" rel="stylesheet">
        <!-- Iconset: Linearicons - https://linearicons.com/free -->
        <link href="css/icon-font.min.css" rel="stylesheet">
            <!-- Bootstrap v4.0.0-beta CSS via CDN -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <style type="text/css">
          
        </style>
        <script type="text/javascript">
          
        </script>
    </head>

    <!-- ======== @Region: body ======== -->
    <body>
        <!-- ======== @Region: #highlighted ======== -->
        <div id="highlighted">

          <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-color ">
                <a class="navbar-brand" href="#">Akagari</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#00afff !important;cursor: pointer;">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="Register.html" target="_blank"><span class="fa fa-user"></span>&nbsp; Register</a></li>
                          <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="fa fa-sign-in" ></span>&nbsp;Login</a></li>
                    </ul>
                </div>
                
            </nav>


              <!-- background and search engine -->
            <div class="bg-white overlay overlay-gradient-flip overlay-op-8 text-center text-lg-left py-5 py-lg-10 flex-valign"
                    data-bg-img="img/backgrounds/bgnd_image.jpg"
                    data-css='{"background-position": "center top","background-attachment": "fixed"}' data-toggle="full-height" data-breakpoint="992">
                
                <div data-toggle="sticky" data-css='{"margin-left":"10%","margin-top":"15%"}' data-settings='{"persist":true, "mind":"#header", "breakpoint":992}' data-scroll="scrollax">
                    <div class="container pt-6">
                        <h2 class="display-4 text-white mb-3" data-animate="fadeIn" data-animate-delay="0.2">
                          Shakisha <span class="font-weight-bold">Akagali!</span>
                        </h2>
                          <form class="row mb-2 w-auto w-lg-80 pos-relative align-items-center" data-animate="fadeIn" data-animate-delay="0.4">
                              <div class="col-lg-9 mb-4">
                                  <!-- <i class="fa fa-search text-white icon-2x pos-absolute pos-l mt-2 ml-3 d-none d-lg-block"></i> -->
                                  </span>
                                  <input class="form-control form-control-lg form-control-transparent form-control-dark text-center text-lg-left pl-lg-5" type="text" placeholder="Andika izina ry'akagari ubone amakuru ajyanye nako">
                                  
                              </div>
                              <div class="col-lg-2">
                                  <a href="#content" class="btn  btn-inversebtn-rounded btn-lg px-3 py-lg-2 px-lg-3 d-lg-block"
                                   style="margin:-24px 0px 0px -30px !important;background: #007bff;color:white;"><span class="fa fa-search"></span><span></span>Shakisha</a>
                              </div>
                              <hr class="hr-inverse hr-lg mx-auto mt-1 mb-0" />
                          </form>
                    </div>
                  </div>
            </div>
        </div>

        <!-- ======== @Region: #content ======== -->
        <div id="content" class="pt-5 pb-6 bg-white pos-relative pos-zindex-10">
          <!-- Promo -->
          <div class="container pb-6">
            <h3 class="text-left text-uppercase mt-0 mb-3" style="text-align: center;">
              Recent visited cell <span class="font-weight-bold">...</span>
            </h3>
            <div class="row text-left">
              <ol>
                <li><a href="">kicukiro</a></li>
                <li><a href="">Ngoma</a></li>
              </0l>
            </div>
          </div>
        <div class="container">
          <div class="row">
            <!-- Sidebar content -->
            <div class="col-lg-3 order-lg-2 mb-4 mb-lg-0">
              <div data-toggle="sticky" data-settings='{"parent":"#content","mind":"#header", "top":10, "breakpoint":480}'>
                <hr class="my-3">
                <div class="p-3 bg-faded">
                  <h3 class="text-uppercase mb-3">
                  iMIHIGO
                </h2>
                  <hr class="my-3">
                  <h4>
                    Categories
                  </h4>
                  <div class="checkboxes">
                    <div class="form-check">
                      <label class="form-check-label">
                        <a href="">Ibikorwa Remezo </a>
                      </label>

                    </div>
                    <div class="form-check">
                      <label class="form-check-label"> 
                      <a href="">Kirazira</a>  
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                       <a href=""> Servisi mu baturage </a>
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                       <a href=""> Ibyagezweho </a>
                      </label>
                    </div>
                  </div>
                  <hr class="my-3">
                  <a href="#" class="btn btn-primary btn-block btn-rounded"><span class="d-block d-md-inline"><i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download document</span></a> 
                </div>
              </div>
            </div>
                        <!-- Main content -->
            <div class="col-lg-9 pull-lg-3 mb-3">  
                 @yield('content')
            </div>
        </div>
    </div>
 </div>

<footer style="background-color: #007bff !important">
        <div class="container">

        <div class="row"> <!-- row -->

            <div class="col-lg-3 col-md-3"><!-- widgets column left -->
            <ul class="list-unstyled clear-margins"><!-- widgets -->
                    
                      <li class="widget-container widget_nav_menu"><!-- widgets list -->
                
                            <h5 class="title-widget">AKAGALI KAWE</h5>
                            
                            
                              <li><a  href="#"><i class="fa fa-angle-double-right"aria-hidden="true"></i> Akagali</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Menya Akagali</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Servisi</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Twandikire</a></li>

                            
                
                      </li>
                        
                    </ul>
                     
                  
            </div><!-- widgets column left end -->
            
            
            
            <div class="col-lg-3 col-md-3"><!-- widgets column left -->

            <ul class="list-unstyled clear-margins"><!-- widgets -->
                    
                      <li class="widget-container widget_nav_menu"><!-- widgets list -->
                
                            <h5 class="title-widget">INTARA</h5>
                            
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Uburengerazuba</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Amajyepho</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Uburasirazuba</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Amajyaruguru</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Umujyi wa kigali</a></li>
                        </li>            
            </ul>      
            </div><!-- widgets column left end -->
            
            <div class="col-lg-3 col-md-3"><!-- widgets column left -->

            <ul class="list-unstyled clear-margins"><!-- widgets -->
                    
                  <li class="widget-container widget_nav_menu"><!-- widgets list -->
            
                        <h5 class="title-widget">URUBUGA</h5>
                        
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Login </a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> register</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> Help</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i> ibitwerekeye</a></li>

                              
                  </li>
                        
                    </ul>
                     
                  
            </div><!-- widgets column left end -->

                    <div class="col-lg-3 col-md-3"><!-- widgets column center -->
                      <ul class="list-unstyled clear-margins"><!-- widgets -->
                        <li class="widget-container widget_recent_news"><!-- widgets list -->
                
                            <h5 class="title-widget">TUVUGISHE</h5>
                            
                            <div class="footerp"> 
                        
                            <p><b>Email id:</b> <a href="mailto:info@webenlance.com">akagali@akagali.com</a></p>
                            <p><b>Helpline Numbers </b>

                                <b style="color:#ffc106;">(8AM to 10PM):</b>  +91-8130890090, +91-8130190010  </p>
                               
                                <p><b>Tel: </b>+250786848506</p>
                            </div>
                            
                            <div class="social-icons">
                            
                              <ul class="nomargin">
                                
                                <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                                <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                                <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                                <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>
                                
                                </ul>
                            </div>
                          </li>
                      </ul>
                   </div>
            </div>
        </div>
        </footer>
        <!--header-->

        <div id="footer">

          <div class="container">

            <div class="row">

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div class="copyright">

                   Copyright © 2017 TIC All right reserved.

                </div>

              </div>

              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                <div class="design">

                   <a href="#">Rwanda </a> | | <a target="_blank" href="index.html">Kigali City</a>

                </div>

              </div>

            </div>

          </div>

        </div>
         
        <!--jQuery 3.2.1 via CDN -->
        <script src="js/jquery.min.js"></script>
        <!-- Popper 1.9.3 via CDN, needed for Bootstrap Tooltips & Popovers -->
        <script src="js/popper.min.js"></script>

        <!-- Bootstrap v4.0.0-beta JS via CDN -->
        <script src="js/bootstrap.min.js"></script>


        <!--Custom scripts & AppStrap API integration -->
        <script src="js/custom-script.js"></script>
        <!--AppStrap scripts mainly used to trigger libraries/plugins -->
        <script src="js/script.min.js"></script>
        <!--- modal for login-!>
           <!-- Button trigger modal -->
                
    <div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="">
          <h4><i class="fa fa-unlock-alt"></i> Injira</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="">
          <form role="form">
            <div class="row">
            <div class="form-group col-sm-6">
              <label for="usrname"><i class="fa fa-user"></i> E-mail yawe</label>
              <input type="text" class="form-control" id="usrname" placeholder="Andika E-mail yawe">
            </div>
            <div class="form-group col-sm-6">
              <label for="psw"><i class="fa fa-key"></i> Ijambo Ry'Ibanga</label>
              <input type="password" class="form-control" id="psw" placeholder="Andika Ijambo Ry'Ibanga">
            </div>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><i class="fa fa-thumbs-up"></i> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <div class="pull-left">Not a member? <a href="Register.html" target="_blank">Sign Up</a></div>
          <div class="pull-left">&nbsp;&nbsp;Forgot <a href="#">Password?</a></div>
        </div>
      </div>
      
    </div>
  </div> 
</div>
                  

    </body>
</html>



















































































































