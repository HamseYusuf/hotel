<?php 
include('db.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = " DELETE FROM booking WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id" , $id);
    $stmt->execute();
    header("Location: index.php");
}
?>