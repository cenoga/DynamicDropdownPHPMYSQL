<?php
$con = mysqli_connect("localhost","root","","city");
if(!$con){
  die("Connection Failed:". mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dynamic Dropdown in PHP and MYSQL</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Dynamic Dropdown in PHP and MYSQL</h1>
      </div>
          <div class="card-body">
          <form>
            <label>City:</label>
            <select class="form-control"> 
              <option disabled selected>-- Select City --</option>
              <?php 
              $records = mysqli_query($con,"SELECT * FROM tblcity");
              while($data = mysqli_fetch_array($records)){
                  echo "<option value='".$data['city_name']."'>".$data['city_name']."</option>";
              }
              ?>
            </select>
          </form>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>