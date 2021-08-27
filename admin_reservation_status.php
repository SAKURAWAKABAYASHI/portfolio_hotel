<?php
include 'datafile.php';
$room_id = $_GET["room_id"];
// $room_info = $resObj->checkReservation($room_id);
$room_info = $resObj->adminRoomInfo($room_id);
// var_dump($room_info);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>admin reservation status</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <form action="datafile.php">
            <input type="hidden" name="room_id" value="<?php echo $room_id;?>">
            <h2></h2>
            <table class="table text-center">
                <thead class="table table-dark">
                    <tr>
                        <th>Reservation ID</th>
                        <th>Full Name</th>
                        <th>Check-in Date</th>
                        <th>Check-out Date</th>
                        <th>Number Rooms</th>
                        <th>Number of People</th>
                        <th>Reservation Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    
                    // var_dump($room_info);

                    if($room_info == false){

                ?>
                    <tr>
                        <td colspan="6" class="text-center text-danger"></td>
                    </tr>
                <?php
                    }else{
                        foreach($room_info as $room){
                        // $reservation_id = $room['reservation_id'];
                        
                ?>
                    <tr>
                        <td><?php echo $room["reservation_id"]; ?></td>
                        <td><?php echo $room["first_name"]." ".$room["last_name"]; ?></td>
                        <td><?php echo $room["check_in"]; ?></td>
                        <td><?php echo $room["check_out"]; ?></td>
                        <td><?php echo $room["number_rooms"]; ?></td>
                        <td><?php echo $room["number_people"]; ?></td>
                        <td><?php echo $room["reservation_status"]; ?></td>
                    </tr>
                <?php
                // var_dump($room["reservation_id"]);
                // var_dump($room["reservaiton_id"\\;
                        }
                    }
                ?>
                </tbody>
            </table>
        </form>
      </div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>