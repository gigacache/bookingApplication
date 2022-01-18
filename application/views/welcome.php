<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Welcom Page for users to login in or register to make an appiontment -->
<div class="container my-5 mx-5">
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
					 <form action="#">
					 	  <div class="form-group">
					 	    <label for="Email">Email address</label>
					 	    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="example@email.com">
					 	  </div>
					 	  <div class="form-group">
					 	    <label for="exampleInputPassword1">Password</label>
					 	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
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
