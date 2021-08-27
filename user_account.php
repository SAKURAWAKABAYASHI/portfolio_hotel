<?php
include 'datafile.php';
$user_id = $_SESSION["user_id"];
// $res_history = $resObj->reservationHistory($user_id);
$user_info = $resObj->userInformation($user_id);
// $reservation_id = $_GET["reservation_id"];
// $res_details = $resObj->checkReservation($reservation_id);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>user account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style/user_account.css">
  </head>
  <body>
      <!-- <div class="container"> -->
          <div class="row">
              <div class="col-md-2">
              <nav>
      <ul>
        <li><a href="user_dashboard.php"><i class="fas fa-home"></i><span>Home</span></a></li>
        <li><a href="user_account.php"><i class="fas fa-user"></i><span>Users</span></a></li>
        <li><a href="reservation.php"><i class="fas fa-hotel"></i><span>Reservation</span></a></li>
        <li><a href="goods.php"><i class="fas fa-gifts"></i><span>Goods</span></a></li>
        <li><a href="#"><i class="fas fa-question"></i><span>FAQ</span></a></li>
        <li><a href=""><i class="fas fa-map-marked-alt"></i><span>access/inquiries</span></a></li>
      </ul>
    </nav>
              </div>
            <!-- <div class="col-md-1"></div> -->
          <div class="col-md-9 mt-3">
          <h3 class="text-center">History of Reservation</h3>
          <table class="table">
              <thead class="table table-dark text-center"> 
                  <tr>
                      <th>Check in date</th>
                      <th>Check out date</th>
                      <th>Room Name</th>
                      <th>Number of People</th>
                      <th>Number of Rooms</th>
                      <th>Total Price</th>
                      <th>Reservation Status</th>
                      <th colspan="2"></th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                    $res_info = $resObj->reservationHistory($user_id);

                    if($res_info == false){
                   ?>
                   
                        <tr>
                            <td colspan="6" class="text-danger text-center"></td>
                        </tr>
                    <?php
                    }else{
                        
                        foreach($res_info as $res){
                    
                    ?>
                        <tr>
                            <td class="text-center"><?php echo $res["check_in"];  ?></td>
                            <td class="text-center"><?php echo $res["check_out"];  ?></td>
                            <td class="text-center"><?php echo $res["room_name"];  ?></td>
                            <td class="text-center"><?php echo $res["number_people"];  ?></td>
                            <td class="text-center"><?php echo $res["number_rooms"];  ?></td>
                            <td class="text-center"><?php echo $res["total_price"];  ?></td>
                            <td class="text-center"><?php echo $res["reservation_status"] ?></td>
                            <td class="text-center">
                    <?php
                                $today = new DateTime();
                                if($res["check_in"] <= $today->format('Y-m-d') ){

                                }else{
                                    if($res["reservation_status"] === 'upcoming'){
                    ?>
                     <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cancelModal<?php echo $res["reservation_id"];?>">
                     CANCEL
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="cancelModal<?php echo $res["reservation_id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Do you really want to cancel this reservation?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="datafile.php" method="post">
                                <input type="hidden" name="reservation_id" value="<?php echo $res["reservation_id"];?>">
                                    <div class="row">
                                        <div class="col-md-5">
                                            Check-in date:
                                        </div>
                                        <div class="col-md-5">
                                        <?php echo $res["check_in"];  ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Check-out date:
                                        </div>
                                        <div class="col-md-5">
                                        <?php echo $res["check_out"];  ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Number of people:
                                        </div>
                                        <div class="col-md-5">
                                        <?php echo $res["number_people"];  ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Number of rooms:
                                        </div>
                                        <div class="col-md-5">
                                        <?php echo $res["number_rooms"];  ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Room Type:
                                        </div>
                                        <div class="col-md-5">
                                        <?php echo $res["room_name"];  ?> 
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Room price:
                                        </div>
                                        <div class="col-md-5">
                                        <?php echo $res["room_price"];  ?>  
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-5">
                                            Total price:
                                        </div>
                                        <div class="col-md-5">
                                        <?php echo $res["total_price"];  ?>
                                        </div>
                                    </div>
                                   
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="delete_res" value="CANCEL" class="btn btn-danger">
                            </div>
                            </div>
                            
                            </form>
                            </div>
                        </div>
                        </div>
                <?php

                                }else{
                                    
                                }        
                            }       
                ?>                
                        </td>
                        </tr>
                <?php
                        }
                    }
                ?>
                 
              </tbody>

          </table>
        
          <h3 class="mt-5 text-center">Account Setting</h3>
          <form action="datafile.php" method="POST" class="text-center">

          <table class="table w-50 mx-auto">
              <tbody>
                  <tr>
                      <td class="text-muted">First Name</td>
                      <td><?php echo $user_info["first_name"]?></td>
                  </tr>
                  <tr>
                      <td class="text-muted">Last Name</td>
                      <td><?php echo $user_info["last_name"]?></td>
                  </tr>
                  <tr>
                      <td class="text-muted">Address</td>
                      <td><?php echo $user_info["address"]?></td>
                  </tr>
                  <tr>
                      <td class="text-muted">Contact Number</td>
                      <td><?php echo $user_info["contact_number"]?></td>
                  </tr>
                  <tr>
                      <td class="text-muted">E-Mail</td>
                      <td><?php echo $user_info["email"]?></td>
                  </tr>
                  <tr>
                      <td class="text-muted">User Name</td>
                      <td><?php echo $user_info["username"]?></td>
                  </tr>
                  <!-- <tr>
                      <td class="text-muted">Password</td>
                      <td></td>
                  </tr> -->
                  <tr class="mt-3">
                      <td colspan="2"><a href="update_userinformation.php" class="btn btn-warning form-control">UPDATE</a></td>
                      <td></td>
                  </tr>
                 
                  <tr class="mt-3">
                      <td colspan="2">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-danger form-control" data-bs-toggle="modal" data-bs-target="#logoutModal<?php echo $res["reservation_id"];?>">
                     LOGOUT
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="logoutModal<?php echo $user_info["user_id"]?>" tabindex="-1" aria-labelledby="logoutModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id=logoutModalLabel">Do you really want to logout from this account?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="datafile.php" method="post">
                                <input type="hidden" name="user_id" value="<?php echo $user_info["user_id"];?>">
                                    <div class="row">                                      
                                        <div class="col-md-5">
                                            <?php echo $user_info["first_name"]." ".$user_info["last_name"];  ?>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="logout" value="LOGOUT" class="btn btn-danger">
                            </div>
                            </div>
                        </td>
                        <td></td>
                    </tr>
              </tbody>

          </table>
                
            
                </div>
            </div>
          </form>
          </div>
          </div>
      <!-- </div> -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/8600ae953f.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>