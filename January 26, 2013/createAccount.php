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

      <div>
		<a class="btn btn-info" href="#createAccount" data-toggle="modal">Create Account</a>
	  </div>

	  <!-- Modal -->
	  <div class="modal fade" id="createAccount" tabindex="-1" role="dialog" aria-labelledby="createAccountLabel" aria-hidden="true">
	    <div class="modal-dialog">
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	          <h4 class="modal-title">Create Account</h4>
	        </div>
	        <div class="modal-body">
	          <form method="post" role="form">
	          	<div class="form-group">	
	          		<div class="row">
						<div class="col-xs-4">
							<input type="text" class="form-control" name="firstName" placeholder="First Name" >
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="midName" placeholder="Middle Name">
						</div>
						<div class="col-xs-4">
							<input type="text" class="form-control" name="lastName" placeholder="Last Name" > 
						</div>
					</div><br/>
					<input type="text" class="form-control" name= "uName" placeholder="Username" > <br/>
					<input type="password" class="form-control" name="password" placeholder="Password" > <br/>
					<input type="text" class="form-control" name="collAdd" placeholder="College Address" > <br/>
					<input type="text" class="form-control" name="contactNo" placeholder="Contact Number" > <br/>
				</div>
					<label class="radio">
						<input type="radio" name="type" value="A">  Administrator<br/>
						<input type="radio" name="type" value="S"> Student <br/>
						<input type="radio" name="type" value="F">  Faculty<br/> 
						<input type="radio" name="type" value="L"> Librarian <br/><br/>
					</label>
					
			   </form>	
	        </div>
	        <div class="modal-footer">
	          <button class="btn btn-primary" name="login">Create Account</button>
	        </div>
	      </div><!-- /.modal-content -->
	    </div><!-- /.modal-dialog -->
	  </div><!-- /.modal -->

    <!--div class="span3 offset8">
		<a class="btn btn-info" href="#createAccount" data-toggle="modal">Create Account</a>
		
	</div>

    <div id="createAccount" class="modal hide fade" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
			<i class="icon-remove"></i>
			</button>
			<h3 id="modalLabel">Create Account</h3>
		</div>

	<div class="modal-body">
		<form method="post">
			<input type="text" name= "uName" class="input-xlarge" placeholder="Username" > <br/>
			<input type="password" name= "password" class="input-xlarge" placeholder="Password" > <br/>
			<input type="text" name="firstName" class="input-medium" placeholder="First Name" >
			<input type="text" name= "midName" class="input-small" placeholder="Middle Name">
			<input type="text" name= "lastName" class="input-medium" placeholder="Last Name" > <br/>
			<input type="text" name= "collAdd" class="input-xlarge" placeholder="College Address" > <br/>
			<input type="text" name= "contactNo" class="input-xlarge" placeholder="Contact Number" > <br/>

			<label class="radio">
				<input type="radio" name="type" value="A">  Administrator<br/>
				<input type="radio" name="type" value="S"> Student <br/>
				<input type="radio" name="type" value="F">  Faculty<br/> 
				<input type="radio" name="type" value="L"> Librarian <br/><br/>
			</label>
			<button class="btn btn-primary" name="login">Create Account</button>
		</form>	
	</div--> 

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
