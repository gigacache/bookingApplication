<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">
   <div class="row">
     <h1>Booking Overview</h1>
     <p>Simply select a service, date and anytimes you would like to have your appiontment, then hit submit request</p>
     <hr/>
       <div class="container">
         <div class="row">
         <div class="col-sm-6 shadow-lg p-3 mb-5 bg-body rounded">
           <div class="tab-content">
              <div class="tab-pane active py-3" id="confirmed">
                <h3>Comfirmed Bookings</h3>
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Service</th>
                      <th scope="col">Date</th>
                      <th scope="col">Time</th>
                      <th scope="col">Status</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                      <td><button type="button" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x" viewBox="0 0 16 16">
                          <path d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        Cancel</button></td>



                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane py-3" id="requested">
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

          <div class="col-sm-6 py-5 px-5">
          <ul class="nav nav-tabs" id="customTab" role="tablist">
            <li><a href="#confirmed" data-toggle="tab" class="nav-link active">Confirmed</a></li>
            <li><a href="#requested" data-toggle="tab" class="nav-link">Requested</a></li>
            <li><a href="" class="nav-link">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-plus" viewBox="0 0 16 16">
                <path d="M8 7a.5.5 0 0 1 .5.5V9H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V10H6a.5.5 0 0 1 0-1h1.5V7.5A.5.5 0 0 1 8 7z"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
              </svg>
              Create a Booking</a></li>
          </ul>
        </div>


       </div>
     </div>
   </div>
 </div>
