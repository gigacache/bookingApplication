<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="conatainer shadow-lg p-3 mb-5 bg-body rounded customHeight">
  <div class="row">
    <form method="post" action=<?php echo site_url('schedule')?>>
      <div class="row">
        <div class="col-sm-8">
          <select class="selectpicker w-50"  data-width="100%" data-dropup-auto="false" name="date">
            <option value="Select A Date" selected disabled>Select a date to view or create a Schedule </option>
            <?php foreach($requestDates->result() as $row){?>
              <option value="<?php echo $row->bookingDate; ?>"> <?php echo$row->bookingDate; ?></option>
            <?php }?>
          </select>
          <button type="submit" class="btn btn-primary btn-lg w-40 mx-1">createSchedule</button>
        </div>
        <div class="col-sm-4 align">
          <button type="submit" class="btn btn-primary btn-lg w-40">Add Request</button>
        </div>
      </div>
    </form>
  </div>
  <div class="row">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Time</th>
            <th scope="col">Service</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
      <tbody>
<?php
          foreach ($data->result() as $row) {?>
        <tr>
          <th scope="row"><?php echo $row->startTime?></th>
          <td><?php echo $row->service;?></td>
          <td><?php echo $row->bookingDate;?></td>
          <td><?php echo $row->startTime?></td>
          <td><?php echo $row->endTime?></td>
          <td><?php echo $row->status;?></td>
          <td>
          </td>
          <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal-<?php echo $row->scheduleID;?>">
              Details
            </button>
          </td>
        </tr>
      <!-- Modal -->
      <div class="modal fade" id="Modal-<?php echo $row->scheduleID;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo $row->service;?>
              <?php echo $row->email;?>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <form method="post" action=<?php echo site_url('Booking_Controller/cancelBooking')?>>
                  <input value="<?php echo $row->scheduleID;?>" name="bookingID" style="display:none;">
                  <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x" viewBox="0 0 16 16">
                  <path d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                Cancel</button>
              </form>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    <?php }?>
  </tbody>
  </table>
  </div>
    </div>
