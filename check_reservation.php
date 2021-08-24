<?php
include 'datafile.php';
$reservation_id = $_GET["reservation_id"];
$res_details = $resObj->checkReservation($reservation_id);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>check reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <h1>THANK YOU FOR BOOKING</h1>
          <!-- user information -->
          <div class="row">
              <div class="col-md-4">
                  Full Name:
              </div>
              <div class="col-md-4">
                <?php echo $res_details["first_name"]." ".$res_details["last_name"] ?>
              </div>
          </div>
          <!-- information of booking -->
          <div class="row">
              <div class="col-md-4">
                  Number of people:
              </div>
              <div class="col-md-4">
                <?php echo $res_details["number_people"] ?>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  Number of rooms:
              </div>
              <div class="col-md-4">
                <?php echo $res_details["number_rooms"] ?>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                 Room Type:
              </div>
              <div class="col-md-4">
                <?php echo $res_details["room_name"]  ?>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  Check in date:
              </div>
              <div class="col-md-4">
                <?php echo $res_details["check_in"] ?>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  Check out date:
              </div>
              <div class="col-md-4">
                <?php echo $res_details["check_out"]  ?>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                 Room Price:
              </div>
              <div class="col-md-4">
                <?php echo $res_details["room_price"] ?>
              </div>
          </div>
          <div class="row">
              <div class="col-md-4">
                  Room Capacity:
              </div>
              <div class="col-md-4">
                <?php echo $res_details["room_capacity"] ?>
              </div>
          <div class="row">
            <div class="col-md-4">
                Total price:
            </div>
            <div class="col-md-4">
                <?php echo $res_details["total_price"]   ?>
            </div>
          </div>
              
          </div>
          <a href="user_dashboard.php">Go to Home</a>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>