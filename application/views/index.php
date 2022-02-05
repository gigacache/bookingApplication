<?php defined('BASEPATH') or exit('No direct script access allowed');
if($this->session->login==TRUE){redirect('dashboard');}?>
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
  <nav class="navbar bg-dark">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0 px-5" href="<?php echo base_url();?>">
      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-journal-code" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z"/>
        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
      </svg>
      SmartBook</a>
    <ul class="navbar-nav px-3 nav nav-tabs"  role="tablist">
      <li class="nav-item px-3">
        <a class="nav-link p-0"data-toggle="tab" href="#Login">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-speedometer" viewBox="0 0 16 16">
            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
          </svg>
        </a>
      </li>
      <li class="nav-item px-3">
      <a class="nav-link p-0" data-toggle="tab" href="#Register">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#fff" class="bi bi-calendar3" viewBox="0 0 16 16">
        <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
        <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
        </svg>
      </a>
      </li>
    </ul>
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
