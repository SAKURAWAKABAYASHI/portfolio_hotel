<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="btn"> <span class="fas fa-bars"></span> </div>
<nav class="sidebar">
    <div class="text"> BBBootstrap.com </div>
    <ul class="main_side">
        <li class="active"><a href="#">Dashboard</a></li>
        <li> <a href="#" id="1">Pages <span class="fas fa-caret-down"></span> </a>
            <ul class="item-show-1">
                <li><a href="#">Contact us</a></li>
                <li><a href="#">Our Team</a></li>
            </ul>
        </li>
        <li> <a href="#" id="2">Services <span class="fas fa-caret-down"></span> </a>
            <ul class="item-show-2">
                <li><a href="#">App Design</a></li>
                <li><a href="#">Web Design</a></li>
            </ul>
        </li>
        <li><a href="#">Users</a></li>
        <li><a href="#">Message</a></li>
        <li><a href="#">Bookmark</a></li>
        <li><a href="#">Files</a></li>
    </ul>
</nav>
<div class="content">
    <div class="header"> Main content goes here </div>
</div>
<script>
    $('.btn').click(function(){
$(this).toggleClass("click");
$('.sidebar').toggleClass("show");
});


$('.sidebar ul li a').click(function(){
var id = $(this).attr('id');
$('nav ul li ul.item-show-'+id).toggleClass("show");
$('nav ul li #'+id+' span').toggleClass("rotate");

});

$('nav ul li').click(function(){
$(this).addClass("active").siblings().removeClass("active");
});
</script>
<!-- fontawesome -->
<script src="https://kit.fontawesome.com/8600ae953f.js" crossorigin="anonymous"></script>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
