<?php
include 'datafile.php';
$pic_id = $_GET["pic_id"];
?>
<!doctype html>
<html lang="en">
  <head>
    <title>admin edit reservation photo</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style/user_account.css">
  </head>
  <body>
    <form action="datafile.php" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-md-3">
      <nav>
      <ul>
        <li><a href="admin_dashboard.php"><i class="fas fa-home"></i><span>Home</span></a></li>
        <li><a href="admin_account.php"><i class="fas fa-user"></i><span>Admin</span></a></li>
        <li><a href="admin_reservation.php"><i class="fas fa-hotel"></i><span>Reservation</span></a></li>
        <li><a href="goods.php"><i class="fas fa-gifts"></i><span>Goods</span></a></li>
        <li><a href="#"><i class="fas fa-question"></i><span>FAQ</span></a></li>
        <li><a href="#"><i class="fas fa-map-marked-alt"></i><span>access</span></a></li>
      </ul>
    </nav>
      </div>
      <div class="col-md-9">
          <input type="text" name="photo_name" placeholder="Please enter your name" class="form-control w-50"><br>
            <input type="hidden" name="pic_id" value="<?php echo $pic_id;  ?>">
            <input type="file" name="photo" class="form-control w-50"><br>
    
            <input type="submit" value="Upload" name="upload" class="btn btn-primary btn-block w-50">
      </div>
    </div>
      </form>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/8600ae953f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>