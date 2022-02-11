<?php 

	if (isset($_POST['submit'])) {
		require "connection.php";
		$size = $_POST["size"];
		$saus = $_POST["saus"];
		$topping = $_POST["topping"];
		$kruide = $_POST["kruide"];


		$sql = $conn->prepare('INSERT INTO pdo_toets (size, saus, topping, kruide) VALUES (?,?,?,?)');
		$sql->bind_param('ssss', $size, $saus, $toppings, $kruide);
		$sql->execute();
	
		
	
	}

 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>maakjepizza.org</title>
  </head>
  <body>
    <h1 class="text-center">maak je eigen pizza</h1>

	<form class="mt-5" action="create.php" method="post">
		
    <label for="exampleFormControlSelect1">Formaten</label>
    <select class="form-control" id="Bodemformaat" placeholder="Maak je keuze">
      <option>20 cm</option>
      <option>25 cm</option>
      <option>30 cm</option>
      <option>35 cm</option>
      <option>40 cm</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Saus</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Tomatensaus</option>
      <option>Extra tomatensaus</option>
      <option>Spicy tomatensaus</option>
      <option>BBQ saus</option>
      <option>Crème fraiche</option>
    </select>
  </div>

    <h6>Pizzatoppings</h6>

  <div class="form-check">
    <input type="radio" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Vegan</label>
  </div>

  <div class="form-check">
    <input type="radio" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">vegetarisch</label>
  </div>

  <div class="form-check">
    <input type="radio" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">vlees</label>
  </div>

  <h6>kruiden</h6>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">peterselie</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Oregano</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Chili flakes</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Zwarte peper</label>
  </div>

  <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit">Bestel</button>

  </form>
			<a href="./view.php"><button class="btn btn-block btn-info" name="submit">View</button></a>
 			</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>