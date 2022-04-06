<?php defined('BASEPATH') or exit('No direct script access allowed');?>

<div class="conatainer shadow-lg p-3 mb-5 bg-body rounded largeCustomHeight">
  <div class="row my-3 mx-1">
    <div class="col-sm-2">
      <a href="<?php echo site_url('adminbookings')?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
        </svg>
      </a>
    </div>
    <div class="col-sm-10">
      <h1>Schedule: <?php echo $date ?></h1>
    </div>
  </div>

  <div class="row my-5 mx-5">

    <table class="timeline">
      <tbody>
    <?php foreach ($data->result() as $row) {?>
      <tr>
        <th scope="row" class="hidden-xs"><?php echo $row->startTime?></th>
        <td style="border-left: 5px solid #000;">
      <a type="button"  style="width: 100%;" data-toggle="modal" data-target="#Modal-<?php echo $row->scheduleID;?>">
        <div class="card card text-white bg-success mb-3" style="width: 100%;">
          <div class="card-header"><strong><?php echo $row->startTime?> - <?php echo $row->endTime?></strong></div>
          <div class="card-body">
            <ul class="modalInfo">
              <li><strong>Service:</strong>  <?php echo $row->service;?></li>
              <li><strong>Customer:</strong>  <?php echo $row->name?></li>
              <li><strong>Location:</strong>  <?php echo $row->postcode;?></li>
              <li><strong>Booking ID:</strong>  <?php echo $row->scheduleID;?></li>
            </ul>
          </div>
        </div>
      </a>
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
              <h4>Appointment</h4>
              <ul class="modalInfo">
                <li><strong>Service:</strong>  <?php echo $row->service;?></li>
                <li><strong>Time:</strong>  <?php echo $row->startTime?> - <?php echo $row->endTime;?></li>
                <li><strong>Date:</strong>  <?php echo $row->bookingDate;?></li>
                <li><strong>Booking ID:</strong>  <?php echo $row->scheduleID;?></li>
              </ul>
              <hr/>
              <h4>Customer</h4>
              <ul class="modalInfo">
                <li><strong>Name:</strong> <?php echo $row->name;?></li>
                <li><strong>Email:</strong>  <?php echo $row->email?></li>
                <li><strong>Address: </strong> <?php echo $row->address;?></li>
                <li><strong>Postcode:</strong>  <?php echo $row->postcode;?></li>
              </ul>
            </div>
            <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              <form method="post" action=<?php echo site_url('Booking_Controller/cancelAppointment')?>>
                  <input value="<?php echo $row->requestID;?>" name="requestID" style="display:none;">
                  <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-x" viewBox="0 0 16 16">
                  <path d="M6.146 7.146a.5.5 0 0 1 .708 0L8 8.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 9l1.147 1.146a.5.5 0 0 1-.708.708L8 9.707l-1.146 1.147a.5.5 0 0 1-.708-.708L7.293 9 6.146 7.854a.5.5 0 0 1 0-.708z"/>
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                </svg>
                Cancel Appointment</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </td>
    </tr>
    <?php }?>
  </tbody>
</table>
  </div>
    </div>
