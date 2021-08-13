<!doctype html>
<html lang="en">
  <head>
    <title>login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="style/login.css">

  </head>
  <body>

  <div class="row">

  
  <div class="nav col-3">
    <!-- <span>Welcome Sakura Wakabayashi</span>  -->
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="reservation.php">Reservation</a></li>
        <li><a href="goods.php">Goods</a></li>
        <li><a href="#">FAQ</a></li>
        <li><a href="">access/inquiries</a></li>
      </ul>
  </div> 
      <div class="container col-7">
          <form action="datafile.php" method="post">
            <input type="hidden">
              <div class="card mt-5">
                  <div class="card-header">
                    <h2 class="text-center">LOGIN</h2>
                  </div>
                  <div class="card-body">
                      <label for="">User Name</label>
                        <input type="text" name="fname" class="form-control" placeholder="First Name">

                        <label for="" class="mt-2">Password(You should use more than 8 digits in length and contain both letters and numbers)</label>
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        
                        <input type="submit" name="login" value="Login" class="btn btn-success form-control mt-3">
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