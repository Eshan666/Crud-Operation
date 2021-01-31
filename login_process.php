<?php
include("database.php");
?>

<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
   // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    echo $num;

    if ($num == 1) {
        while($row = mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){

            session_start();
            $_SESSION['loggedIn'] = true;
            $_SESSION['username'] = $username;

            header("location:index.php");
            }

            else{
                header("location:login.php");

            }
        }
    } 
    else {

        session_start();
        $_SESSION['error'] = true;
        header("location:login.php");
        
    }
}

?>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>


