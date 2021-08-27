<?php
include 'datafile.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <title>admin dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style/admin_dashboard.css">
    

  </head>
  <body> 
  <nav>
      <ul>
        <li><a href="admin_dashboard.php"><i class="fas fa-home"></i><span>Home</span></a></li>
        <li><a href="admin_account.php"><i class="fas fa-user"></i><span>Admin</span></a></li>
        <li><a href="admin_reservation.php"><i class="fas fa-hotel"></i><span>Reservation</span></a></li>
        <li><a href="goods.php"><i class="fas fa-gifts"></i><span>Goods</span></a></li>
        <li><a href="#"><i class="fas fa-question"></i><span>FAQ</span></a></li>
        <li><a href=""><i class="fas fa-map-marked-alt"></i><span>access</span></a></li>
      </ul>
    </nav>
      <div class="home_menu">
        <aside>
          <div class="reser">
            <div class="overlay">
                 <h4>RESERVATION</h4>
                <a href="admin_edit_resPhoto.php" class="btn btn-primary btn btn-primary text-center mx-auto">EDIT</a>
            </div>
          </div>
        </aside>
        <aside>
       <div class="foods">
         <div class="overlay-2">
          <h4>FOODS</h4> 
          <br>
                <a href="edit_fods.php" class="btn btn-primary btn btn-primary text-center mx-auto">EDIT</a>
         </div>
                
       </div>
      </aside>
      
     <aside>
       <div class="goods">
          <div class="overlay-3">
           <h4>GOODS</h4> 
            <a href=""  class="btn btn-primary btn btn-primary text-center mx-auto">EDIT</a>
          </div>
        </div>
       
     </aside>   
      <aside>
        <div class="hot">
          <div class="overlay-4">
            
           <h4>HOT SPRING</h4>
            <a href="" class="btn btn-primary btn btn-primary text-center mx-auto">EDIT</a>
          </div> 
        </div>
      </aside>  
       <h1>SAKURA HOTEL</h1>
      </div>
    <!--  Bootstrap JavaScript Libraries -->
    <script src="https://kit.fontawesome.com/8600ae953f.js" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script> --> -->
  </body>
</html>