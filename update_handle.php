<?php
include("db.php");
$id= $_GET['id'];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['booking_name'];
    $phone = $_POST['phone'];
    $date = $_POST['booking_date'];
        $sql = " UPDATE booking SET name = :name , phone = :phone , date = :date WHERE id = $id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":name" , $name);
        $stmt->bindParam(":phone" , $phone);
        $stmt->bindParam(":date" , $date);
        $stmt->execute();
        header("Location: index.php");

    } else{
        header("Location:form.php");
    }

?>