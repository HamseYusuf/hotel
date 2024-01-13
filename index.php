<!DOCTYPE html>
<html lang="en">
<?php include('base.php'); ?>
<body>
<?php include('header.php');
       include('db.php');
?>


    <div class="display-6 text-center mt-5 "> Studens List </div>
    <a href="form.php" class="btn btn-sm btn-primary m-1"> Add Student </a>
    <table class="table m-5  table-hover table-striped  ">
        <thead>
            <tr>
                <th> id </th>
                <th> name </th>
                <th> phone </th>
                <th> Date</th>
            </tr>
        </thead>
        <tbody>
        <?php

                $stmt= $conn->prepare(' SELECT * FROM booking');
                $stmt->execute();
                $bookings= $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach($bookings as $booking ) { ?>

                <tr>
                
                    <td> <?php echo $booking['id'];?></td>
                    <td> <?php echo $booking['name'];?></td>
                    <td> <?php echo $booking['phone'];?></td>
                    <td> <?php echo $booking['date'];?></td>
                </tr>
                    
               <?php } ?>

        ?>
               
            
        </tbody>
    </table>

</body>
</html>