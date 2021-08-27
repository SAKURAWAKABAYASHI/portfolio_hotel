<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body class="container-fluid">
	<?php
    include 'datafile.php';

		echo "<h3>Display ALL PICTURES FROM DATATASE</h3><br>";
		$result = $resObj->showAllImages();
	?>
	<div class="row">
		<?php
			foreach($result as $row){
				$image = $row["pic_image"];
				?>
				<div class="col-6">
					<?php echo "<img src='upload/$image' class='mx-auto d-block img-fluid w-50'>"; ?>
				</div>
				<?php
			}
		?>
	</div>

	<?php
		echo "<hr>";

		echo "<h3>Display SPECIFIC PICTURE </h3> <br>";
		//im going to use ID #2
		$id = 1;
		$result2 = $resObj->searchSpecificImage($id);
		$image = $result2['pic_image'];
		echo "<img src='upload/$image'>";
		

	?>
</body>
</html>
