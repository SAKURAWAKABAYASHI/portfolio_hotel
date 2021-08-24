<?php
include 'datafile.php';
$user_id = $_SESSION["user_id"];
$user_info = $resObj->userInformation($user_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <div class="row">
      <div class="container col-10">
            <form action="" method="post">
              <h1 class="text-center">UPDATE ACCOUNT SETTING</h1>
              <div class="row mb-2">
                <div class="col-md-6">
                    <input type="hidden" name="account_id" value="<?php echo $user_info["account_id"]  ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user_info["user_id"] ?>">
                  <label for="">First Name</label>
                  <input type="text" name="new_fname" value="<?php echo $user_info["first_name"]  ?>" placeholder="First Name" class="form-control"> 
               </div>
                <div class="col-md-6">
                  <label for="">Last Name</label>
                  <input type="text" name="new_lname" value="<?php echo $user_info["last_name"]  ?>" placeholder="Last Name" class="form-control">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <label for="">Address</label>
                  <input type="address" name="new_address" value="<?php echo $user_info["address"]  ?>" placeholder="Address" class="form-control">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <label for="">Contact Number</label>
                  <input type="number" name="new_contact_number" value="<?php echo $user_info["contact_number"]  ?>" placeholder="Contact Number" class="form-control">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <label for="">E-Mail</label>
                  <input type="email" name="new_email" value="<?php echo $user_info["email"]  ?>" placeholder="E-Mail" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="">User Name</label>
                  <input type="text" name="new_username" value="<?php echo $user_info["username"]  ?>" placeholder="User Name" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="">Password</label>
                  <input type="password" name="new_password" value="<?php echo $user_info["password"]  ?>" placeholder="Password" class="form-control">
                </div>
                <div class="col-md-6">
                  <label for="">Confirm Password</label>
                  <input type="password" name="new_con_password" value="<?php echo $user_info["password"]  ?>" placeholder="Confirm Password" class="form-control">
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <input type="submit" value="UPDATE" name="update_userinfo" class="btn btn-warning form-control mt-3" >
                </div>
              </div>   
            </form>
        </div>
    </div>
  
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>