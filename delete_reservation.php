<?php
include 'datafile.php';
$reservation_id = $_GET["reservation_id"];
$res_details = $resObj->deleteReservation($reservation_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>delete reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <h2>Do you really want to cancel your reservation?</h2>  
        <h3>Your Reservation information</h3>

        <form action="datafile.php" method="post">
            <input type="hidden" name="reservation_id" value="<?php echo $reservation_id  ?>">
            <div class="row">
                <div class="col-md-5">
                    Check-in date:
                </div>
                <div class="col-md-5">

                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    Check-out date:
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    Number of people:
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    Number of rooms:
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    Room Type:
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    Room price:
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    Total price:
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="submit" name="delete_res" value="DELETE" class="btn btn-danger form-control">
                </div>
                
            </div>
        </form>
      </div>
    


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>