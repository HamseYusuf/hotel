<html>
    <head>
        <title>
            php form
        </title>
    </head>
    <body>
    <?php include('base.php'); ?>
    <?php include('header.php');
          include("db.php");
    
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        

        if(empty($name) || empty($phone) || empty($date)) {
            header("Location : form.php");
        } elseif (!filter_var($name ,  FILTER_VALIDATE_INT) && filter_var($phone ,FILTER_VALIDATE_INT) && 
        !filter_var($date , FILTER_VALIDATE_INT)){

            $sql = " INSERT INTO booking (name , phone , date) VALUES (:name , :phone , :date)" ;
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(":name" , $name);
            $stmt->bindParam(":phone" , $phone);
            $stmt->bindParam(":date" , $date);
            $stmt->execute();
            header("Location: index.php");

        } else{
            header("Location:form.php");
        }
    }

    ?>
      <div class="container">
        <div class="display-6 mt-4 text-center ">New Booking </div>
        <div class="row mt-5 flex justify-content-center ">
            <div class="col-4">
            <form class="form-group" action="form.php" method="post">
            <label class="form-label" for="name"> Name</label>
            <input class="form-control " type="text" name="name" placeholder="enter your name ">
            <label class="form-label" for="last_name"> phone </label>
            <input class="form-control" type="text" name="phone" placeholder="Phone Number">
            <label for="" class="form label">Date </label>
            <input type="date" class="form-control" name="date">
            <input class="btn btn-info mt-3" type="submit" value="submit">
        </form>
            </div>
        </div>
      </div>
    </body>
</html>