<?php
include 'datafile.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>admin account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <table class="table">
            <thead class="table table-dark">
                <tr>
                    <td>User ID</td>
                    <td>Full Name</td>
                    <td>Address</td>
                    <td>Contact Number</td>
                    <td>E-Mail</td>
                    <td>Status</td>
                    <td colspan="2"></td>
                </tr>
            </thead>
            <tbody>
            <?php
                $user_info = $resObj->userStatus();
                if($user_info == false){
            ?>
                <tr>
                    <td colspan="6" class="text-danger text-center"></td>
                </tr>
            <?php
                                
            }else{
                            
                foreach($user_info as $user){
                        
            ?>
                <tr>
                    <td><?php echo $user["user_id"]; ?></td>
                    <td><?php echo $user["first_name"]." ".$user["last_name"]; ?></td>
                    <td><?php echo $user["address"]; ?></td>
                    <td><?php echo $user["contact_number"]; ?></td>
                    <td><?php echo $user["email"]; ?></td>
                    <td><?php echo $user["status"]; ?></td>
                    <td><a href="update_adminaccount.php">UPDATE</a></td>
                    <td><a href="delete_adminaccount.php">DELETE</a></td>
                    
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