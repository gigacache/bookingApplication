<?php defined('BASEPATH') or exit('No direct script access allowed');?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
  <div class="row">
    <div class="col-md-6 my-3">
      <div class="card">
        <h5 class="card-header text-white bg-warning">Pending Requests</h5>
        <div class="card-body text-center">
        <h2 class="number"><?php echo $pendingData?></h2>
        </div>
      </div>
    </div>
    <div class="col-md-6 my-3">
      <div class="card">
        <h5 class="card-header text-white bg-success">Scheduled Requests</h5>
        <div class="card-body text-center">
        <h2 class="number"><?php echo $scheduledData?></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 my-3">
      <div class="card">
        <h5 class="card-header text-white bg-secondary ">Rejected Requests</h5>
        <div class="card-body text-center">
        <h2 class="number"><?php echo $rejectedData?></h2>
        </div>
      </div>
    </div>
    <div class="col-md-6 my-3">
      <div class="card">
        <h5 class="card-header text-white bg-danger">Cancelled Requests</h5>
        <div class="card-body text-center">
        <h2 class="number"><?php echo $cancelledData?></h2>
        </div>
      </div>
    </div>
  </div>
</main>
      </div>
    </div>
