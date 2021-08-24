<?php
include 'datafile.php';
$room_id = $_GET["room_id"];
$room_details = $resObj->reserveAgain($room_id);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>reservation form</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
          <form action="datafile.php" method="POST">
            <input type="hidden" name="user_id" value="<?php echo $room_id; ?>">
            <label for="">Number of people</label>
            <input type="number" name="people" class="form-control" required>
            
            <label for="">Number of Rooms</label>
            <input type="number" name="num_rooms" id="num_rooms" class="form-control" required>

            <label for="">Room Type</label>
            <select name="room_type" id="rooms" class="form-control" required>
                <?php echo "<option vlaue='".$room_details["room_id"]."' price='".$room_details["room_price"]."'>".$room_details["room_name"]."</option>" ?>
            </select>

            <label for="">Check in date</label>
            <input type="date" name="check_in" id="check_in" class="form-control" resuired>
            <label for="">Check out date</label>
            <input type="date" name="check_out" id="check_out" class="form-control" required>

            <input type="number" hidden name="total_price" id="total_price">
            <div class="form-check">
                <input type="radio" name="agree" id="agree" required>
                <label for="agree">I agree in the terms and conditions</label>
            </div>
            <div id="total_price_display" class="text-end">
                <div class="card-body">
                  <h3 id="total_price_heading"></h3>
                  <p class="text-muted fst-italic fw-light" id="calc"></p>
                </div>
            </div>
            <input type="submit" name="reserve" value="RESERVE" class="btn btn-primary"> 
          </form>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  
    <script>
      var price = 0;
      var checkin = 0;
      var checkout = 0;
      var days = 0;
      var numberOfRooms = 0;
      var optionSelected = "";

      $('select#rooms').on('change', function(e)
      {
        optionSelected = $(this).find("option:selected");
        var valueSelected = optionSelected.val();
        price = optionSelected.attr('price');
        console.log(price);
        totalPrice();
      });
      
      $('input#num_rooms').bind('click keyup', function()
      {
        numberOfRooms = $(this).val();
        console.log(numberOfRooms);
        totalPrice();

      });

      $('input#check_in').on('change', function(e)
      {
        checkin = $(this).val();
        console.log(checkin);
        totalPrice();
      });
      
      $('input#check_out').on('change', function(e){
        checkout = $(this).val();
        console.log(checkout);
        totalPrice();
      });

      function getDays()
      {
        var diffInMs = new Date(checkout) - new Date(checkin);
        days = diffInMs / (1000 * 60 * 60 * 24);
      }

      function totalPrice()
      {
        getDays();
        if(price != 0 && numberOfRooms != 0 && days != 0 && checkin != 0 && checkout != 0)
        {
          var total_price = price * numberOfRooms * days;

          $('input#total_price').val(total_price);
          $('h3#total_price_heading').text(parseFloat(total_price).toFixed(2));
          $('p#calc').text(optionSelected.text()+"("+price+") × "+numberOfRooms+" rooms × "+days+" days");

          console.log(optionSelected.text()+"("+price+") × "+numberOfRooms+" rooms × "+days+" days");
          $('div#total_price_display').addClass("card");
        }
      }
    </script>
  </body>
</html>