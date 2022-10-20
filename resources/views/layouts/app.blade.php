<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Akagari</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elegant-icons-style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/mystyles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
<style type="text/css">
#getFixed {
          color: #c00;
          font: bold 15px arial;  
          width: 100%;
        }
        .akgl-wrapper{margin-top:0px;}

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
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/drpdwnleft.js') }}"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/myjs.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>

</body>
</html>
