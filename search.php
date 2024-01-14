<!DOCTYPE html>
<html lang="en">
<?php include('base.php'); ?>
<body>
<?php include('header.php');
       include('db.php');

       if($_SERVER['REQUEST_METHOD'] == 'GET') {
        $query = $_GET['query'];
        if(empty($query)) {
             header("Location: index.php");
        }
       }
?>


    <div class="display-6 text-center mt-5 "> Studens List </div>
    <a href="form.php" class="btn btn-sm btn-primary m-1"> Add Booking </a>
    <table class="table m-5  table-hover table-striped  ">
        <thead>
            <tr>
                <th> id </th>
                <th> name </th>
                <th> phone </th>
                <th> Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <?php

                $stmt= $conn->prepare( "SELECT * FROM booking WHERE name LIKE :query ");
                $stmt->bindParam(":query" , $query);
                $stmt->execute();
                $bookings= $stmt->fetchAll(PDO::FETCH_ASSOC);

            if($bookings) {
                foreach($bookings as $booking ) { ?>

                    <tr>
                    
                        <td> <?php echo $booking['id'];?></td>
                        <td> <?php echo $booking['name'];?></td>
                        <td> <?php echo $booking['phone'];?></td>
                        <td> <?php echo $booking['date'];?></td>
                        <td>
                            <a class="btn btn-info btn-sm " href="update.php?id=<?php echo $booking['id'] ?>"> update </a>
                            <a class="btn btn-danger btn-sm  " href="delete.php?id=<?php echo $booking['id'] ?>"> Delete </a>
                    </td>
                    </tr>
                        
                   <?php } 

            } else {
                echo "Not Found";
            }
               
               ?>

               
            
        </tbody>
    </table>

</body>
</html>