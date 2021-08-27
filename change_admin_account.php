<?php
include 'datafile.php';
$user_id = $_GET["user_id"];
$user_status = $resObj->userStatus($user_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>change user status</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <form action="" method="post">
              <h1 class="text-center">User Information</h1>
              <div class="row mb-2">
                <div class="col-md-6">
                  <label for="">First Name</label>
                  <input type="text" name="fname" value="<?php echo $user_status["first_name"]  ?>" placeholder="First Name" class="form-control" readonly>
                </div>
                <div class="col-md-6">
                  <label for="">Last Name</label>
                  <input type="text" name="lname" placeholder="Last Name" class="form-control" readonly>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <label for="">Address</label>
                  <input type="address" name="address" placeholder="Address" class="form-control" readonly>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <label for="">Contact Number</label>
                  <input type="number" name="contact_number" placeholder="Contact Number" class="form-control" readonly>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <label for="">E-Mail</label>
                  <input type="email" name="email" placeholder="E-Mail" class="form-control" readonly>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="">User Name</label>
                  <input type="text" name="username" placeholder="User Name" class="form-control" readonly>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="">Password</label>
                  <input type="password" name="password" placeholder="Password" class="form-control" readonly>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <label for="">Status</label>
                      <input type="text" name="status" value="<?php  ?>">
                  </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <input type="submit" value="UPDATE" name="update_user_status" class="btn btn-primary form-control mt-3" >
                </div>
              </div>   
            </form>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>