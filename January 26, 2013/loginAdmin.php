<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/bootstrap.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <!-- Navigation Bar-->
    <div class="navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><img src="logo.png" width="150" height="45"></a>
        </div>

      </br>
        <div class="pull-right1">
          <div class="navbar-collapse collapse">
            <ul class="nav nav-pills">
              <li class="active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> name_of_admin <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">View Profile</a></li>
                  <li><a href="#">Edit Profile</a></li>
                  <li><a href="#">View Accounts</a></li>
                  <li><a href="#">Add/Edit Accounts</a></li>
                  <li><a href="#">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
        <hr>
    </div> <!--end of navbar-fixed-top-->


    <!-- Main contents-->
    </br></br></br></br>
    <div class="col-sm-offset-1">

      <div class="col-sm-8">
        <form action="" method="">
          <input type="text" name="query" size="40" placeholder="User">
          <input type="submit" name="search2" class="btn btn-primary" value="Search"/>
          <input type="submit" name="aSearch" class="btn btn-primary" value="Advanced Search"/>
        </form>
      </div>
      
      <div class="col-sm-offset-6">
        <p>Announcements</p>
      </div>

    </div>

    

    <!--footer-->
    <div class="navbar-fixed-bottom">
     <hr> <div class="text-center"> ICS Library 2014. 
     <p class="pull-right"><u><a href="http://www.portnine.com" target="_blank">ABOUT US<u></a></p>
     <p class="pull-right1"><u><a href="http://www.portnine.com" target="_blank">FAQ<u></a></p> 
     
      </div>

    </div>
    
      

     <!-- scripts -->        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
