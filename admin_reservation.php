<?php
include 'datafile.php0;'
?>
<!doctype html>
<html lang="en">
  <head>
    <title>admin reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <h3>Reservation Status</h3>
        <table class="table">
            <thead class="table table-dark">
                <tr>
                    <th>Room ID</th>
                    <th>Room Name</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
              <?php
                 $res_status= $resObj->reservationStatus($resrevation_id);
                 
                 if($res_status == false){
              ?>
                  <tr>
                    <td colspan="2" class="text-center text-danger"></td>
                  </tr>
              <?php   
                 }else{
                   foreach($res_status as $res){

              ?>
                <tr>
                    <td><?php echo $res["room_id"]; ?></td>
                    <td><?php echo $res["room_name"]; ?></td>
                    <td><?php echo $res["room_stock"]; ?></td>
                </tr>
              <?php
                   }
                 }
              ?>
            </tbody>
        </table>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>