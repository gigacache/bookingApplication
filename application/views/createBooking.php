<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">
   <div class="row">
     <h1>Create a Booking request</h1>
     <p>Simply select a date and anytimes you would like to have your appiontment, then hit book now</p>
     <hr/>
     <div class="input-group">
       <h3>Service</h3>
       <select class="selectpicker" name"service" data-width="100%;">
         <option value="1">One</option>
         <option value="2">Two</option>
         <option value="3">Three</option>
       </select>
     </div>
     <div class="col-sm-6">
       <h3>Date</h3>
       <input type="text" id="input-inline" placeholder="Select a date" name="date">
       <div id="pick-inline"></div>
     </div>
     <div class="col-sm-6">
       <div class="input-group">
          <h3>Times</h3>
         <select id="timeLoop" class="selectpicker" multiple name="times" data-width="100%"></select>
       </div>
     </div>
       <button class="btn btn-primary" type="button">Button</button>


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
</div>
