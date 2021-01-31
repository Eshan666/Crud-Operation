<?php
include("database.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Sign Up</title>
</head>

<body>

<?php
    include("process/nav.php");
   ?>




    <?php

    

    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];

        $existingUser = "SELECT * FROM `users` WHERE username = '$username'";
        $userResult = mysqli_query($conn, $existingUser);
        //echo $userResult;
        $rows = mysqli_num_rows($userResult);
        //echo $rows;
        if ($rows >0) {
            echo '<div class="container alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> Account not created!.Please try a different username.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
            //header("Location:signup.php");
        } 
        else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$username','$hash')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                // setcookie("signupFlag", 1, time() + 5000000, "/");
                echo '<div class="container alert alert-success alert-dismissible fade show" role="alert">
               <strong>Holy guacamole!</strong> Account successfully created!
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>';
                 //header("Location:signup.php");
            } else {
                // setcookie("signupFlag", 0, time() + 5000000, "/");
                echo '<div class="container alert alert-warning alert-dismissible fade show" role="alert">
               <strong>Holy guacamole!</strong> Account not created.looollllllllllllll!.Please try a different username.
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>';
                //header("Location:signup.php");
            }
        }
    }

    ?>

    <?php
    /*
    if(isset($_COOKIE['signupFlag'])){
    $signup = $_COOKIE['signupFlag'];
    }
    if(isset($_COOKIE['userFlag'])){
    $userFlag = $_COOKIE['userFlag'];
    }
    */

    ?>



    <form method="post" action="signup.php">
        <div class="container my-4">
            <h1>Sign Up Here</h1>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>