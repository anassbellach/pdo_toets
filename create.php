<?php
ob_start();
$servername ="localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets";



try {

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// prepare and bind
$stmt = $conn->prepare("INSERT INTO pdo_toets (id, size, saus, topping, kruide) 
VALUES (:id, :firstname, :infix, :lastname)");
$stmt->bindParam(':id',$id);
$stmt->bindParam(':size',$size);
$stmt->bindParam(':saus',$saus);
$stmt->bindParam(':topping',$topping);
$stmt->bindParam(':kruiden',$kruide);

//insert a row
$id = NULL;
$size = $_POST["size"];
$saus = $_POST["Saus"];
$topping = $_POST["topping"];
$kruiden = $_POST["kruide"];

$stmt->execute();

echo "New records created successfully";
header("Refresh:3; ./read.php");
} catch(PDOException $e){
    echo $e->getMessage();
    header("Location: ./index.php");
}
$conn = null;



?>