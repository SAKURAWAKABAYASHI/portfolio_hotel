<?php
include 'datafile.php';
$room_id =1;
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

  </head>
  <body>
<div class="container">
    <form action="datafile.php" method="POST"> 
      <input type="hidden" name="room_id" value="<?php echo $room_id; ?>"> 
        <div class="row">
            <div class="col-md-3">

              </div>
              <div class="col-md-9">
                <img src="images/room1.png" alt="room1">
                <h1> Fugi</h1>
                <p>concept:...</p>

                <h5>Total number of rooms</h5>
                <p>30 rooms</p>

                <h5>Parking</h5>
                <p>free(outdoor)</p>

                <h5>Transfer</h5>
                <p>Shuttle bus from the south exit of Kyoto Station</p>

                <h5>Pet acceptance</h5>
                <p>Yes(paid/limited)</p>

                <h5>Room capacity</h5>
                <p>2-4 people</p>

                <h5>Main facilities</h5>
                <ul>
                    <li>Restaurant</li>
                    <li>Spa massage</li>
                    <li>Hot spring</li>
                    <li>Cafe/Lounge</li>
                    <li>Pool</li>
                </ul>

                <h5>Stock of rooms</h5>
                <p></p>
                <a href="reservation_form.php">Go to reservation form</a>
            </div>
        </div>
    </form>
</div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>