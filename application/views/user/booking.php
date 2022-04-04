<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="conatainer shadow-lg mb-5 bg-body rounded largeCustomHeight">
  <div class="row">
    <div class="col-sm-6 px-4 py-3 largeCustomHeight">
      <div class="row">
        <h2 class="text-center">Booking Requests</h2>
          <div class="row text-center">
          <ul class="nav nav-tabs my-2 mx-2" role="tablist">
            <li class="w-50"><a href="#pending" data-toggle="tab" class="nav-link active mx-1 my-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
              </svg>
              Pending</a></li>
            <li class="w-50"><a href="#rejected" data-toggle="tab" class="nav-link mx-1 my-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-range" viewBox="0 0 16 16">
              <path d="M9 7a1 1 0 0 1 1-1h5v2h-5a1 1 0 0 1-1-1zM1 9h4a1 1 0 0 1 0 2H1V9z"/>
              <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
            </svg>
              Rejected</a></li>
              <li class="w-50"><a href="#cancelled" data-toggle="tab" class="nav-link mx-1 my-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x" viewBox="0 0 16 16">
                  <path d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                Cancelled</a></li>
                <li class="w-50"><a href="#scheduled" data-toggle="tab" class="nav-link mx-1 my-1">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                    <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                  </svg>
                  Scheduled</a></li>
                </ul>
              </div>
              <div class="tab-content">
                <div class="tab-pane active py-3" id="pending">
                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Slot</th>
                        <th scope="col">Service</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                  <tbody>
                  <?php foreach ($bookingData->result() as $row) {?>
                  <?php if($row->status == 'pending'){?>
                    <tr>
                        <td><?php echo $row->bookingDate;?></td>
                        <td><?php echo $row->timeOfDay;?></td>
                        <td><?php echo $row->service;?></td>
                        <td><?php echo $row->status;?></td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal-<?php echo $row->requestID;?>">
                          Details
                          </button>
                        </td>
                      </tr>
                    <?php }}?>
                  </tbody>
                </table>
              </div>
              <div class="tab-pane py-3" id="rejected">
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Date</th>
                      <th scope="col">Slot</th>
                      <th scope="col">Service</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                <tbody>
                <?php
                 foreach ($bookingData->result() as $row) {?>
                  <?php if($row->status == 'rejected'){ ?>
                    <tr>
                      <td><?php echo $row->bookingDate;?></td>
                      <td><?php echo $row->timeOfDay;?></td>
                      <td><?php echo $row->service;?></td>
                      <td><?php echo $row->status;?></td>
                    </tr>
                <?php }}?>
              </tbody>
            </table>
            </div>
            <div class="tab-pane py-3" id="cancelled">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Slot</th>
                    <th scope="col">Service</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
              <tbody>
              <?php
               foreach ($bookingData->result() as $row) {?>
                <?php if($row->status == 'cancelled'){ ?>
                    <tr>
                      <td><?php echo $row->bookingDate;?></td>
                      <td><?php echo $row->timeOfDay;?></td>
                      <td><?php echo $row->service;?></td>
                      <td><?php echo $row->status;?></td>
                    </tr>
              <?php }}?>
            </tbody>
          </table>
          </div>
          <div class="tab-pane py-3" id="scheduled">
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Date</th>
                  <th scope="col">Service</th>
                  <th scope="col">Time</th>
                  <th scope="col">Status</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
            <tbody>
            <?php
             foreach ($scheduleData->result() as $row) {?>
              <?php if($row->status == 'scheduled'){ ?>
                <tr>
                  <td><?php echo $row->bookingDate;?></td>
                  <td><?php echo $row->service;?></td>
                  <td><?php echo $row->startTime;?></td>
                  <td><?php echo $row->status;?></td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal-<?php echo $row->scheduleID;?>">
                      Details
                    </button>
                  </td>
                </tr>
            <?php }}?>
          </tbody>
        </table>
        </div>
              </div>
              <?php foreach ($bookingData->result() as $row) {?>
          <!-- Modal -->
          <div class="modal fade" id="Modal-<?php echo $row->requestID;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Booking Request Details</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h4>Request</h4>
                  <ul class="modalInfo">
                    <li><strong>Service:</strong>  <?php echo $row->service;?></li>
                    <li><strong>Slot:</strong>  <?php echo $row->timeOfDay?></li>
                    <li><strong>Date:</strong>  <?php echo $row->bookingDate;?></li>
                    <li><strong>Request ID:</strong>  <?php echo $row->requestID;?></li>
                  </ul>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <form method="post" action=<?php echo site_url('Booking_Controller/cancelBooking')?>>
                      <input value="<?php echo $row->requestID;?>" name="requestID" style="display:none;">
                      <button type="submit" class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x" viewBox="0 0 16 16">
                      <path d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                      <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>
                    Cancel</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
        <?php foreach ($scheduleData->result() as $row) {?>
      <!-- Modal -->
      <div class="modal fade" id="Modal-<?php echo $row->scheduleID;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Appointment Details</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <h4>Appoinment</h4>
            <ul class="modalInfo">
              <li><strong>Date:</strong>  <?php echo $row->bookingDate;?></li>
              <li><strong>Time:</strong>  <?php echo $row->startTime?></li>
              <li><strong>Service:</strong>  <?php echo $row->service;?></li>
              <li><strong>Schedule ID:</strong>  <?php echo $row->scheduleID;?></li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form method="post" action=<?php echo site_url('Booking_Controller/cancelBooking')?>>
                <input value="<?php echo $row->requestID;?>" name="requestID" style="display:none;">
                <button type="submit" class="btn btn-danger">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x" viewBox="0 0 16 16">
                <path d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
              </svg>
              Cancel</button>
            </form>
          </div>
        </div>
      </div>
      </div>
      <?php }?>
      </div>
    </div>
    <div class="col-sm-6 px-3 py-3" style="background-color:#eee;">
      <h2 class="text-center">Submit Request</h2>
      <div class="row">
        <form method="post" action=<?php echo site_url('Booking_Controller/addBooking')?>>
          <div class="input-group">
            <h4>Select a service</h4>
            <select class="selectpicker" name="service" data-width="100%" data-dropup-auto="false">
              <option value="Servie One">Service One (30 minutes)</option>
              <option value="Service Two">Service Two (45 minutes)</option>
              <option value="Service Three">Service Three (60 minutes)</option>
            </select>
          </div>
          <div class="input-group">
            <h4>Select a time of day</h4>
            <select class="selectpicker" name="timeOfDay" data-width="100%" data-dropup-auto="false">
              <option value="Morning">Morning</option>
              <option value="Afternoon">Afternoon</option>
            </select>
          </div>
           <h4>Select a date</h4>
           <input type="date" id="date" min="<?php echo date("Y-m-d"); ?>" max="2022-12-31" name="date">
           <input value="<?php print_r($this->session->userID);?>" style="display:none;">
           <br/>
            <button type="submit" class="btn btn-primary btn-lg btn-block text-center">Submit Booking Request</button>
          </form>
        </div>
      </div>
    </div>
  </div>
