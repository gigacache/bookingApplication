<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!-- Welcom Page for users to login in or register to make an appiontment -->
<div class="container my-5 mx-5">
	<div class="row">
		<div class="col-sm-6">
			<div class="row">
				<h1>Book Online</h1>
				<p class="smallText">in three easy step</p>
				<p>typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div>
			<div class="row banner">
				<div class="col-sm-4 px-4">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
			  	<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
			  	<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
				</svg><p>Register</p>
				</div>
				<div class="col-sm-4 px-4">
				<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-calendar-check-fill" viewBox="0 0 16 16">
			  	<path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-5.146-5.146-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708.708z"/>
				</svg><p>Book</p>
				</div>
				<div class="col-sm-4 px-4">
					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-check-circle" viewBox="0 0 16 16">
			  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
			  <path d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z"/>
			</svg><p>Confirmation</p>
				</div>
			</div>
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
