<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<div class="container">

     <div class="row">
       <div class="col-sm-6 shadow-lg mb-5 bg-body rounded largeCustomHeight py-2 px-5">
        <h1>Profile Overview</h1>
        <?php if($this->session->flashdata('susMessage')==""){}else{
          echo "<div class='alert alert-success' role='alert'>";
          echo $this->session->flashdata('susMessage') ;
          echo "</div>" ;}?>
         <form method="post" action=<?php echo site_url('User_Controller/updateUserDetails')?>>
          <?php foreach ($userDetails->result() as $row) {?>
         <div class="form-group">
           <label for="staticEmail"> Email</label>
             <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $row->email;?>">
         </div>
         <div class="form-group">
           <label for="inputPassword">Password</label>
             <input type="password" class="form-control" id="inputPassword" placeholder="*********" name="password">
         </div>
         <div class="form-group">
           <label for="name" class="col-sm-2 col-form-label">Name</label>
             <input type="text" class="form-control" id="name" value='<?php echo $row->name;?>' name="name">
         </div>
         <div class="form-group">
           <label for="address" >Address</label>
             <input type="text" class="form-control" id="address" value="<?php echo $row->address;?>" name="address">
         </div>
         <div class="form-group">
           <label for="postcode" class="col-sm-2 col-form-label">Postcode</label>
             <input type="text" class="form-control" id="postcode" value="<?php echo $row->postcode;?>" name="postcode">
         </div>
       <?php }?>
       <br/>
       <button type="submit" class="btn btn-primary btn-lg w-50">Update</button>
       </form>
     </div>
     <div class="col-sm-6">

     </div>
 </div>
  </div>
