<?php defined('BASEPATH') or exit('No direct script access allowed');?>
  <div class="row">
    <div class="col-md-6 my-3">
      <div class="card">
        <h5 class="card-header">Appointment Overview</h5>
        <div class="card-body">
          <div id="chartWrapper">
          <div id="chart"></div>
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 my-3">
      <div class="card">
        <h5 class="card-header">Customer List</h5>
        <div class="card-body">
          <p class="card-text">Increase or Decrease customers score to prioritise customer within scheduling sequencing. Highter the score - Highter the priority. </p>
          <div class="table-responsive">
          <table class="table">
            <thead class="thead-dark">
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th></th>
              <th>Score</th>
              <th></th>
            </tr>
          </thead>
        <tbody>
          <?php  foreach ($customerData->result() as $row) {?>
            <tr>
              <td><?php echo $row->name;?></td>
              <td><?php echo $row->email;?></td>
              <td>
                <form method="post" action=<?php echo site_url('User_Controller/minusUserScore')?>>
                  <input value="<?php echo $row->userID;?>" name="userID" style="display:none;">
                  <button type="submit" class="btn btn-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
    </svg></button>
              </form>
            </td>
            <td class="text-center"><?php echo $row->score;?></td>
            <td>
            <form method="post" action=<?php echo site_url('User_Controller/addUserScore')?>>
              <input value="<?php echo $row->userID;?>" name="userID" style="display:none;">
              <button type="submit" class="btn btn-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
    </svg></button>
          </form>
        </td>
          </tr>
        <?php }?>
      </tbody>
        </table>
      </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
  google.charts.load('current', {packages: ['corechart', 'bar']});
  google.charts.setOnLoadCallback(drawBasic);

  function drawBasic() {
    var data = google.visualization.arrayToDataTable([
    ['', 'Appointments',],
    ['Pending', <?php echo $pendingData ?>],
    ['Cancelled', <?php echo $cancelledData ?>],
    ['Rejected', <?php echo $rejectedData ?>],
    ['Scheduled', <?php echo $scheduledData ?>],
  ]);

  var options = {
    hAxis: {
      title: 'Appointments',
      minValue: 0
    },
    vAxis: {
      title: 'Status'
    }
  };

  var chart = new google.visualization.BarChart(document.getElementById('chart'));

  chart.draw(data, options);
}
  </script>
