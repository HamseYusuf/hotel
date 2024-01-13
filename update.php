<?php 
include("db.php");

$id = $_GET['id'];
$sql = "SELECT * FROM booking WHERE id = :id ";

$stmt = $conn->prepare($sql);
$stmt->bindParam("id" , $id);
$stmt->execute();
$booking = $stmt->fetch(PDO::FETCH_ASSOC);

echo $booking['name'];
echo $booking['phone'];

?>