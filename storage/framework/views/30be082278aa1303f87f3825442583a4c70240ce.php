<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Akagari</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../../css/app.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
    height: 10px;
    margin-left: 0%;
    float: left;
}
/*.................search box............*/
/* search button 4 */
.search {
   width: 800px;
   height: 40px;

   -webkit-transition: all .5s ease;
   -moz-transition: all .5s ease;
   transition: all .5s ease;
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
   width: 80%;
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
    </head>
    <body>
        <!-- <div class="container">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>
                        <a href="<?php echo e(route('register')); ?>">Register</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?> -->

            <section>
            <div style=" background: url(images/logo1.png) no-repeat;" class="img-akgl-wrapper"">
                <div class="overlay" style="opacity: 0.5">
                    <div class="front-container">
                        <div class="akgl-jumbotron" style="opacity: 1">
                            <div class="col-xs-12" >
                                <center>
                                    <h3 style="color:#fff; ">GIRA URUHARE MU BIGUKORERWA!</h3>
                                </center>
                            </div>
                        </div>
                            <div class="user-settings-wrapper">
                                    <ul class="nav">
                                        <div id="akagali-nav" class="collapse navbar-collapse" >
                                            <ul class="nav navbar-nav navbar-right" style=" width:auto;background:#fff;">
                                                <!-- Authentication Links -->
                                                <?php if(auth()->guard()->guest()): ?>
                                                    <li><a href="<?php echo e(route('login')); ?>" style="color: #fff; width:auto;background:#079c0d; " title="Kwinjira bigufasha kuba waganira n'abandi." >Kwinjira</a></li>
                                                    <li><a href="<?php echo e(route('register')); ?>" style="color:#fff; width:auto;background:#079c0d;margin-left: 2px" title="Kwiyandikisha bituma abo muri kuganira bamenya uwo uri we.">Kwiyandkisha</a></li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </ul>
                                </div>
                       
                    
                    </div>

                    <div class="col-lg-12" style="opacity: 15">
                        
                    </div>
                </div>
                <form action="/search" style="padding-left:300px;padding-top:0px" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <input type="search" name="search" class="search" placeholder="Search cell by name" />
                            <input type="submit" class="submit_search" value="Search" />
                        </form>
            </div>
            <div id="front-container" class="tbk-content">
                <div class="container">
                    <div class="clearfix"></div>
                    <div class="col-xs-6">
                        <div class="col-xs-10">
                            <div class="tbk-title">
                            <h3>NATIONAL FLAG</h3>
                            <hr />
                        </div>
                        <div class="front-description">
                            <img src="images/r_flag.png" class="img-responsive" style="width: 30%;height: auto;">
                        </div>
                             <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="tbk-title">
                            <h3>Ikirango cy'Igihugu</h3>
                            <hr />
                        </div>
                        <div class="front-description"  style="width: 20%;height: auto;">
                            <img src="images/Rwanda.png" class="img-responsive">
                        </div>
                    </div>
                    <div class="col-xs-2">
                            
                    </div>
                    </div>
                    <div class="col-xs-6">
                       <div class="col-xs-2"></div>
                       <div class="col-xs-10">
                             <div class="tbk-title">
                            <strong><u>Indirimbo yubahiriza igihugu</u></strong>
                            
                        </div>
                        <div class="front-description"  style="width: 100%;height: auto;float: right;">
                            <div class="panel-body">
                                <video width="320" height="240" controls>
                                        <source src="video/hymne.mp4" type="video/mp4">
                                        <source src="video/hymne.mp4" type="video/mp4">
                                        Your browser does not support the video tag.
                                </video>
                                <hr />
                                <!-- a href="#" class="btn btn-warning"><i class="fa fa-play-circle "></i> play anthem</a>&nbsp;
                                <a href="#" class="btn btn-success"><i class="fa fa-download"></i> download </a-->
                            </div>                  
                        </div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="clearfix"></div>
                        <div class="tbk-title">
                            <strong><u>Gahunda y'igihugu mu myaka 7</u></strong>
                        </div>
                        <div class="front-description"  style="width: 100%;height: auto; float: right;">
                            <div class="front-description"  style="width: 100%;height: auto;float: right;"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                                <div class="panel-body">
                                    <object width="320" height="240"  data="doc/academic.pdf">
                                     </object>
                                    
                                    <a href="#" class="btn btn-primary"><i class="fa fa-eye "></i> Read document</a>&nbsp;
                                    <a href="#" class="btn btn-success"><i class="fa fa-download"></i> download </a>
                                </div>                  
                            </div>
                        </div>
                       </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
        
            </div>
        </section>
        </div>
    </body>
</html>
