<html>
    <?php include("db.php");
          include("base.php");
          include("header.php");
         
           if(isset($_GET['id'])) {
            $id = $_GET['id'];
            echo " we have got the id $id";
           $stmt = $conn->prepare(" SELECT * FROM booking WHERE id=$id");
           $stmt->execute();
           $booking = $stmt->fetch(PDO::FETCH_ASSOC);
           
           }
    ?>

    <body>
        <div class="container">
            <div class="row flex justify-content-center">
                <div class="display-6 text-center mb-2  "> Update Form</div>
                <div class="col-5">
                <form action="update_handle.php?id=<?php echo $id ?>"  method="post" class="form-group">
                    <label for="" class="form-label"> Name</label>
                    <input type="text" name="booking_name" value="<?php echo $booking['name'] ?>" class="form-control">
                    <label for="" class="form-label"> Phone</label>
                    <input type="text" name="phone" value="<?php echo $booking['phone'] ?>" class="form-control">
                    <label for="" class="form-label"> Date</label>
                    <input type="date" name="booking_date" value="<?php echo $booking['date'] ?>" class="form-control">
                    <input type="submit" value="submit" class="form-control btn btn-info mt-2 ">
                </form>
                </div>
            </div>
        </div>
    </body>
</html>