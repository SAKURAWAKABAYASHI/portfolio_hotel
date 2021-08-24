<?php
include 'datafile.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toppage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style/toppage.css">
    
</head>
<body>
    <div class="img">
        <div class="menu">
            <h1>Welcome to SAKURA HOTEL</h1>
            <p>
                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#login" role="button" aria-expanded="false" aria-controls="login">Login</button>
                <button class="btn btn-danger" type="button" data-bs-toggle="collapse" data-bs-target="#registration" aria-expanded="false" aria-controls="registration">Registration</button>
            </p>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="collapse" id="login">
                            <div class="card">
                                <div class="card-body">
                                    <a href="login.php">Login</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="collapse" id="registration">
                            <div class="card">
                                <div class="card-body">
                                    <a href="register.php">Registration</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
</div>

    <!-- BOOTSTRAP JAVASCRIPT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    
</body>
</html>