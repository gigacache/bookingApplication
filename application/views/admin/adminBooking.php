<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">
   <div class="row">
     <h1>Booking Overview</h1>
     <p>Simply select a service, date and anytimes you would like to have your appiontment, then hit submit request</p>
     <hr/>
    <div class="container">
         <div class="row">
         <div class="col-sm-8 shadow-lg p-3 mb-5 bg-body rounded customHeight">
           <div class="tab-content">
              <div class="tab-pane active py-3" id="bookings">
                <h3>Bookings</h3>
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
                    <?php foreach ($allBookingData->result() as $row) {?>
                    <tr>
                      <td><?php echo $row->service;?></td>
                      <td><?php echo $row->bookingDate;?></td>
                      <td><?php
                      if(substr_count($row->bookingTimes, ",") > 0) {
                        echo "Not finalised";
                      }else{ echo $row->bookingTimes;}?></td>
                      <td><?php echo $row->status;?></td>
                      <td>
                      <form method="post" action=<?php echo site_url('Booking_Controller/cancelBooking')?>>
                          <input value="<?php echo $row->bookingID;?>" name="bookingID" style="display:none;">
                          <button type="submit" class="btn btn-danger">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x" viewBox="0 0 16 16">
                          <path d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                          <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>
                        Cancel</button>
                      </form>

                      </td>
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane py-3" id="request">
                  <form method="post" action=<?php echo site_url('Booking_Controller/addBooking')?>>
                    <div class="input-group">
                      <h4>Select a service</h4>
                      <select class="selectpicker" name="service" data-width="100%" data-dropup-auto="false">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                     <h4>Select a date</h4>
                    <div id="pick-inline"></div>
                      <input type="text" id="input-inline" placeholder="Selected Date" name="date">
                      <div class="input-group">
                         <h4>Select upto four times</h4>
                        <select id="timeLoop" class="selectpicker" multiple name="times[]" data-width="100%" data-max-options="4" ></select>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Submit Booking Request</button>
                    </form>
                  </div>
                </div>
              </div>
        <div class="col-sm-4 py-5 px-5">
          <ul class="nav nav-tabs" id="customTab" role="tablist">
            <li><a href="#bookings" data-toggle="tab" class="nav-link active">Bookings</a></li>
            <li><a href="#request" data-toggle="tab" class="nav-link">Create a Booking</a></li>
          </ul>
          <?php if($this->session->flashdata('susMessage')==""){}else{
            echo "<div class='alert alert-success my-5' role='alert'>";
            echo $this->session->flashdata('susMessage') ;
            echo "</div>" ;}?>
        </div>


       </div>
     </div>
   </div>
 </div>

 <script>
 window.addEventListener("load", () => {
   picker.attach({
     target: "input-inline",
     container: "pick-inline"
   });
 });
 </script>
