<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
   <!-- Links -->
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.83.1">
		<title>Booking Application</title>
    <link  rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
    <link  rel="stylesheet" href="<?php echo base_url();?>public/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-select.min.css">
    <meta charset="utf-8">
  </head>
<body>
  <nav class="border-bottom">
		<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
  		<path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
		<svg>
		<h1 class="brand">Smart Booking System</h1>
	</nav>
<!-- Welcom Page for users to login in or register to make an appiontment -->
<div class="container my-4 mx-5">
	<?php if($this->session->flashdata('susMessage')==""){}else{
		echo "<div class='alert alert-success' role='alert'>";
		echo $this->session->flashdata('susMessage') ;
		echo "</div>" ;}?>
		<?php if($this->session->flashdata('eroMessage')==""){}else{
			echo "<div class='alert alert-danger' role='alert'>";
			echo $this->session->flashdata('eroMessage') ;
			echo "</div>" ;}?>
	<div class="row">
		<div class="col-md-7">
				<img src="./public/images/booking.svg"/ class="largeImage">
		</div>
		<div class="col-md-5 .visible-sm-block, hidden-sm)">
			<ul class="nav nav-tabs" id="nav-tab" role="tablist">
				<li><a href="#Login" data-toggle="tab" class="nav-link active">Login</a></li>
				<li><a href="#Register" data-toggle="tab" class="nav-link ">Register</a></li>
			</ul>
			<div class="tab-content">
			   <div class="tab-pane active py-3" id="Login">
					 <form  method="POST" action=<?php echo site_url('Welcome/verify')?>>
					 	  <div class="form-group">
					 	    <label for="Email">Email address</label>
					 	    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="example@email.com" name="email">
					 	  </div>
					 	  <div class="form-group">
					 	    <label for="exampleInputPassword1">Password</label>
					 	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
							</div>
					 	  <button type="submit" class="btn btn-primary">Login</button>
					 	</form>
				 </div>
				 <div class="tab-pane py-3" id="Register">
					   <form method="post" action=<?php echo site_url('Welcome/registerUser')?>>
							 <div class="form-group">
								 <label for="name">Name</label>
								 <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="John Doe" name="name">
								 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							 </div>
						 <div class="form-group">
							 <label for="Email">Email address</label>
							 <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="password">Password</label>
							 <input type="password" class="form-control" id="password" placeholder="*********" name="password">
							 <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="address">Address</label>
							 <input type="text" class="form-control" id="adress" aria-describedby="adress" placeholder="All Saints, All Saints Building, Manchester" name="address">
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="post">Postcode</label>
							 <input type="text" class="form-control" id="post" aria-describedby="post" placeholder="M1 6AA" name=postcode>
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <button type="submit" class="btn btn-primary">Login</button>
					 </form>
				 </div>
			 </div>
		 </div>
	 </div>
	</div>


	</body>


	  <script src="<?php echo base_url("public/js/jquery-3.3.1.slim.min.js");?>"></script>
	  <script src="<?php echo base_url("public/js/main.js");?>"></script>
	  <script src="<?php echo base_url("public/js/popper.min.js")?>"></script>
	  <script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
	  <script src="<?php echo base_url("public/js/bootstrap-select.min.js")?>"></script>

	</html>
