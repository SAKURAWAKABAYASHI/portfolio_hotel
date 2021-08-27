<?php
include 'datafile.php';
$room_id =$_GET["room_id"];
$room_info = $resObj->getRoomsInfo($room_id);
// var_dump($resObj->getRoomsInfo($room_id));
$occupied_rooms = $resObj->getNumberoccupiedRooms($room_id);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>room 1</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/user_account.css">
  </head>
  <body>
<!-- <div class="container"> -->
  <nav>
      <ul>
        <li><a href="user_dashboard.php"><i class="fas fa-home"></i><span>Home</span></a></li>
        <li><a href="user_account.php"><i class="fas fa-user"></i><span>Users</span></a></li>
        <li><a href="reservation.php"><i class="fas fa-hotel"></i><span>Reservation</span></a></li>
        <li><a href="goods.php"><i class="fas fa-gifts"></i><span>Goods</span></a></li>
        <li><a href="#"><i class="fas fa-question"></i><span>FAQ</span></a></li>
        <li><a href=""><i class="fas fa-map-marked-alt"></i><span>access</span></a></li>
      </ul>
    </nav>
    <form action="datafile.php" method="POST"> 
      <input type="hidden" name="room_id" value="<?php echo $room_id; ?>"> 
        <div class="row">
            <div class="col-md-3">

              </div>
              <div class="col-md-9">
                <img src="images/room1.png" alt="room1">
                <h1><?php echo $room_info["room_name"];  ?></h1>
                <p><?php echo $room_info["discription"];  ?></p>

                <h5>Total number of rooms</h5>
                <p><?php echo $room_info["total_rooms"];  ?></p>

                <!-- <h5>Parking</h5>
                <p>free(outdoor)</p>

                <h5>Transfer</h5>
                <p>Shuttle bus from the south exit of Kyoto Station</p> -->

                <h5>Pet acceptance</h5>
                <p>Yes(paid/limited)</p>

                <h5>Room capacity</h5>
                <p><?php echo $room_info["room_capacity"];  ?></p>

                <h5>Main facilities</h5>
                <ul>
                    <li>Restaurant</li>
                    <li>Spa massage</li>
                    <li>Hot spring</li>
                    <li>Cafe/Lounge</li>
                    <li>Pool</li>
                </ul>

                <h5>Available of rooms</h5>
                <?php
                  $available_rooms  = $room_info['total_rooms']-$occupied_rooms['occupied_rooms'];
                  // var_dump($room_info["total_rooms"]);
                  // var_dump($occupied_rooms);
                 echo $available_rooms;
                ?>
                <p></p>
                <a href="reservation_form.php?room_id=<?php echo $room_info["room_id"]; ?>" class="btn btn-primary form-control">Go to reservation form</a>
            </div>
        </div>
    </form>
<!-- </div> -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/8600ae953f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>