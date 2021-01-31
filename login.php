<?php
    include("process/nav.php");
    ?>
    <?php
    /*session_start();
    //isset($_SESSION['error']) && 
    if($_SESSION['error'] == true){
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Login Failed!.</strong>Please try again.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
   }*/
    ?>
    

    <form method="post" action="login_process.php">
    <div class="container my-4">
        <h1>Login Here</h1>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>



