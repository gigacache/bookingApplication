<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">
   <div class="row">
     <h1>Create a Booking request</h1>
     <p>Simply select a service, date and anytimes you would like to have your appiontment, then hit submit request</p>
     <hr/>
     <div class="col-sm-6 my-4">
       <div class="input-group">
         <h3>Service</h3>
         <select class="selectpicker" name="service" data-width="100%" data-dropup-auto="false">
           <option value="1">One</option>
           <option value="2">Two</option>
           <option value="3">Three</option>
         </select>
       </div>
       <br/>
       <h3>Select Date</h3>
          <div id="pick-inline" class="my-4"></div>
          <input type="text" id="input-inline" placeholder="Selected Date" name="date">

     </div>

     <div class="col-sm-6 my-4">
       <div class="input-group">
          <h3>Times</h3>
         <select id="timeLoop" class="selectpicker" multiple name="times" data-width="100%" data-max-options="4" ></select>
       </div>

    </div>
     <button type="button" class="btn btn-primary btn-lg btn-block">Submit Request</button>
 </div>

     <script>
     window.addEventListener("load", () => {
       picker.attach({
         target: "input-inline",
         container: "pick-inline"
       });
     });
     </script>

   </div>
   </div>
</div>
