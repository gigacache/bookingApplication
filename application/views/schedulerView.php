<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">
   <div class="row">
     <h1>Create a Booking request</h1>
     <p>Simply select a service, date and anytimes you would like to have your appiontment, then hit submit request</p>
     <hr/>
       <form method="post" action=<?php echo site_url('Booking_Controller/createSchedule')?>>
         <select class="selectpicker" name="service" data-width="100%" data-dropup-auto="false">
           <option value="1">One</option>
           <option value="2">Two</option>
           <option value="3">Three</option>
         </select>
         <button type="submit" class="btn btn-primary btn-lg btn-block">createSchedule</button>
       </form>

       <table class="table">
         <thead class="thead-dark">
           <tr>
             <th scope="col">Date</th>
             <th scope="col">startTime</th>
             <th scope="col">endTime</th>
             <th scope="col">Service</th>
             <th scope="col">Status</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         <tbody>
           <?php foreach ($schedulerData->result() as $row) {?>
           <tr>
             <td><?php echo $row->bookingDate;?></td>
             <td><?php echo $row->startTime;?></td>
             <td><?php echo $row->endTime;?></td>
             <td><?php echo $row->service;?></td>
             <td><?php echo $row->status;?></td>
             <td>
             <form method="post" action=<?php echo site_url('Booking_Controller/cancelBooking')?>>
                 <input value="<?php echo $row->scheduleID;?>" name="bookingID" style="display:none;">
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
</div>
