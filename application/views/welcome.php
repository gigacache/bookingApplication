<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Welcom Page for users to login in or register to make an appiontment -->
<div class="container my-5 mx-5">
	<div class="row">
		<div class="col-sm-6">
				<img src="./public/images/booking.svg"/ class="largeImage">
		</div>
		<div class="col-sm-6">
			<ul class="nav nav-tabs" id="nav-tab" role="tablist">
				<li><a href="#Login" data-toggle="tab" class="nav-link active">Login</a></li>
				<li><a href="#Register" data-toggle="tab" class="nav-link ">Register</a></li>
			</ul>
			<div class="tab-content">
			   <div class="tab-pane active py-3" id="Login">
					 <form action="#">
					 	  <div class="form-group">
					 	    <label for="Email">Email address</label>
					 	    <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
					 	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					 	  </div>
					 	  <div class="form-group">
					 	    <label for="exampleInputPassword1">Password</label>
					 	    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
					 	  </div>
					 	  <button type="submit" class="btn btn-primary">Login</button>
					 	</form>
				 </div>
				 <div class="tab-pane py-3" id="Register">
					 <form action="#">
						 <div class="form-group">
							 <label for="Email">Email address</label>
							 <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="exampleInputPassword1">Password</label>
							 <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="Address">Address</label>
							 <input type="text" class="form-control" id="Adress" aria-describedby="AdressHelp" placeholder="Enter Adress">
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="Email">PostCode</label>
							 <input type="email" class="form-control" id="Email" aria-describedby="Help" placeholder="Enter Post Code">
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <div class="form-group">
							 <label for="Email">PostCode</label>
							 <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
							 <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						 </div>
						 <button type="submit" class="btn btn-primary">Login</button>
					 </form>
				 </div>
			 </div>
		 </div>
	 </div>
	</div>
