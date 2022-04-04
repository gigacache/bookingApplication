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
      <li class="nav-item px-3 my-3">
        <a class="nav-link p-0 homeTab"data-toggle="tab" href="#Login">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"/>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
          </svg>
          <span>Login</span>
        </a>
      </li>
      <li class="nav-item px-3 my-3">
      <a class="nav-link p-0 homeTab" data-toggle="tab" href="#Register">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
          <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
      </svg>
        <span>Register</span>
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
			   <div class="tab-pane active py-3 px-3 shadow-lg mb-5 bg-body rounded" id="Login">
          <h2>Login</h2>
					 <form  method="POST" action=<?php echo site_url('User_Controller/verify')?>>
					 	  <div class="form-group">
					 	    <label for="Email">Email address</label>
					 	    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="example@email.com" name="email">
					 	  </div>
					 	  <div class="form-group">
					 	    <label for="exampleInputPassword1">Password</label>
					 	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password" name="password">
							</div>
              <br/>
					 	  <button type="submit" class="btn btn-primary btn-lg w-50">Login</button>
					 	</form>
				 </div>
				 <div class="tab-pane py-3 px-3 shadow-lg mb-5 bg-body rounded" id="Register">
          <h2>Register</h2>
					   <form method="post" action=<?php echo site_url('User_Controller/registerUser')?>>
							 <div class="form-group">
								 <label for="name">Name</label>
								 <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="John Doe" name="name" required>
								 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
							 </div>
						 <div class="form-group">
							 <label for="Email">Email address</label>
							 <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="password">Password</label>
							 <input type="password" class="form-control" id="password" placeholder="*********" name="password" required>
							 <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="address">Address</label>
							 <input type="text" class="form-control" id="adress" aria-describedby="adress" placeholder="All Saints, All Saints Building, Manchester" name="address" required>
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="post">Postcode</label>
							 <input type="text" class="form-control" id="post" aria-describedby="post" placeholder="M1 6AA" name=postcode required>
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
             <br/>
						 <button type="submit" class="btn btn-primary btn-lg w-50">Register</button>
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
