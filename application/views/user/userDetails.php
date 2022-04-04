<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">
   <div class="row">
     <h1>Profile Overview</h1>
     <p>Update and delete your account details here </p>
     <hr/>
     <div class="row">
       <div class="col-sm-6">
       <form>
          <?php foreach ($userDetails->result() as $row) {?>
         <div class="form-group row">
           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
           <div class="col-sm-10">
             <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row->email;?>" name="email">
           </div>
         </div>
         <div class="form-group row">
           <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
           <div class="col-sm-10">
             <input type="password" class="form-control" id="inputPassword" placeholder="*********" name="password">
           </div>
         </div>
         <div class="form-group row">
           <label for="name" class="col-sm-2 col-form-label">Name</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="name" placeholder="<?php echo $row->name;?>" name="name">
           </div>
         </div>
         <div class="form-group row">
           <label for="adress" class="col-sm-2 col-form-label">Address</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="adress" placeholder="<?php echo $row->address;?>" name="Address">
           </div>
         </div>
         <div class="form-group row">
           <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="postcode" placeholder="<?php echo $row->postcode;?>" name="postcode">
           </div>
         </div>
       <?php }?>
       <button type="submit" class="btn btn-primary btn-lg">Update</button>
       </form>
     </div>
     </div>
   </div>
 </div>
