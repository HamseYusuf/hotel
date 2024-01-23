<html>
    <?php include("db.php");
          include("base.php");
          if($_SERVER['REQUEST_METHOD'] == "POST") {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            if(empty($username) || empty($email) || empty($password)) {
                header("Location: signup.php");
            } else {
                $sql = "INSERT INTO users (username , email, password) VALUES (:username , :email, :password)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(":username" , $username);
                $stmt->bindParam(":email" , $email);
                $stmt->bindParam(":password" , $password);
                $stmt->execute();
                header("Location: login.php");
            }
          }
    ?>
    <body>
        <div class="container mt-5 ">
            <div class="row flex justify-content-center mt-4">
                <div class="display-6 text-center">Sign Up </div>
               <div class="col-6">
               <form action="singup.php" method="post" class="form-group">
                    <label for="" class="form-label"> Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter Username">
                    <label for="" class="form-label"> Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                    <label for="" class="form-label"> Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                    <button class="btn btn-info mt-2 " type="submit">Sign up </button>
                </form>
               </div>
            </div>
        </div>
    </body>
</html>