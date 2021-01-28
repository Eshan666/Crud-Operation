<?php
include "database.php";

if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "INSERT INTO `notes` (`title`, `description`) VALUES ('$title', '$description')";
    $result = mysqli_query($conn,$sql);

    if ($result){
        header("Location: index.php");
      
    }
    else{
        header("Location: index.php");
    }
    
    

}
?>
