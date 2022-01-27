<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">
   <div class="row">


     <!-- (B) THE HTML  -->
     <input type="text" id="input-inline" placeholder="Inline"/>
     <div id="pick-inline"></div>
     <div class="input-group">
    <label>Actors</label>
    <select id="ob" class="selectpicker" multiple name="actors">
      <option  value="Tim Robbins">Tim Robbins</option>

    </select>
  </div>
     <!-- (C) ATTACH DATE PICKER ON LOAD -->
     <script>
     window.addEventListener("load", () => {
       picker.attach({
         target: "input-inline",
         container: "pick-inline"
       });
     });

var x = 15; //minutes interval
var times = []; // time array
var tt = 0; // start time
var ap = ['AM', 'PM']; // AM-PM
let ob =  document.getElementById('ob');
//loop to increment the time and push results in array
for (var i=0;tt<24*60; i++) {
  var hh = Math.floor(tt/60); // getting hours of day in 0-24 format
  var mm = (tt%60); // getting minutes of the hour in 0-55 format
  times[i] = ("0" + (hh % 12)).slice(-2) + ':' + ("0" + mm).slice(-2) + ap[Math.floor(hh/12)]; // pushing data in array in [00:00 - 12:00 AM/PM format]
  ob.innerHTML = times[i];
  tt = tt + x;
}

console.log(times);
     </script>
 </div>
   </div>
   </div>
</div>
