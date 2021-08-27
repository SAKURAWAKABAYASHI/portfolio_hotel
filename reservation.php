<?php
include 'datafile.php';
 $room_info = $resObj->roomInfo();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/reservation.css">
  </head>
  <body>
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
      <!-- <div class="container"> -->
        <div class="display">
        <?php 
          foreach ($room_info as $room) 
          {
        ?>
        <div class="row mt-4">
          <div class="col-md-1">

          </div>
          <div class="img-1 col-md-5">
              <img src="images/home_spa1.png" alt="img1">
          </div>
          <div class="col-md-4">
              <span><?php echo $room["discription"];  ?></span>
              <br>
              <a href="room_1.php?room_id=<?php  echo $room["room_id"]; ?>" class="btn text-primary text-center ms-5">Details</a>
          </div>
        </div>
        <?php 
          }
        ?>
        </div>
      <!-- </div> -->
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/8600ae953f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>