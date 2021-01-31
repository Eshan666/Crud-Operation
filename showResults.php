<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Project PHP-CRUD</title>
   
     <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link rel='stylesheet' type='text/css' href='style.php' />
</head>
<body>
<?php
$sql = "SELECT * FROM notes";
$result = mysqli_query($conn,$sql);
echo'<table class="table" id="myTable">';
echo"<thead>";
    echo"<tr>";
        echo'<th scope="col">Serial</th>';
        echo'<th scope="col">Title</th>';
        echo'<th scope="col">Description</th>';
        echo'<th scope="col">Date</th>';

   echo" </tr>";
echo"</thead>";
$no=0;

while($row = mysqli_fetch_assoc($result)){

  $no = $no+1;
   
   echo" <tbody>";
        echo"<tr>";
        echo"<td>";
        echo $no;
        echo"</td>";
        echo"<td>";
        echo $row['title'];
        echo"</td>";
            echo"<td>";
        echo $row['description'];
          echo  "</td>";
            echo"<td>";
            echo $row['date'];
            echo"</td>";
       echo" </tr>";
   echo" </tbody>";

   


}
echo"</table>";
?>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


    
</body>
</html>





