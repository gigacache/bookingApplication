<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">

     <div class="row">
       <div class="col-sm-6 shadow-lg mb-5 bg-body rounded largeCustomHeight py-2 px-5">
        <h1>Profile Overview</h1>
         <form method="post" action=<?php echo site_url('User_Controller/updateUserDetails')?>>
          <?php foreach ($userDetails->result() as $row) {?>
         <div class="form-group row">
           <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
           <div class="col-sm-10">
             <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row->email;?>">
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
             <input type="text" class="form-control" id="name" value='<?php echo $row->name;?>' name="name">
           </div>
         </div>
         <div class="form-group row">
           <label for="adress" class="col-sm-2 col-form-label">Address</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="address" value="<?php echo $row->address;?>" name="address">
           </div>
         </div>
         <div class="form-group row">
           <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
           <div class="col-sm-10">
             <input type="text" class="form-control" id="postcode" value="<?php echo $row->postcode;?>" name="postcode">
           </div>
         </div>
       <?php }?>
       <br/>
       <button type="submit" class="btn btn-primary btn-lg w-50">Update</button>
       </form>
     </div>
     </div>
 </div>
