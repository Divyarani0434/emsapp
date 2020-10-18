<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Stylesheet css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Log in</title>
  </head>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-lg-4 col-md-4">
          <div class="card card-border">
            <div class="card-body">
            <div class="card-title">
              <h4>Register</h4>
              <p class="card-text small text-muted">Register with your Email</p>
              <form action="" method="POST">
                <div class="mb-3">
                    <input type="email" class="form-control form-control-sm" name="u_email" placeholder="Email"required>
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control form-control-sm" name="u_name" placeholder="Username" required>
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control form-control-sm" name="u_pass" placeholder="Password"required>
                </div>
                <div class="mb-3">
                  <input type="submit" class="btn btn-sm btn-success btn-block" name="u_reg" value="Register">
                  <!-- <a href="index.html" class="btn btn-sm btn-success btn-block">Register</a> -->
                </div>
                <div class="mb-3">
                    <!-- <input href="dashboard.html" type="submit" class="btn btn-sm btn-success btn-block" value="Sign in"> -->
                    <a>Already have an account?</a><a href="index.html" class="btn btn-sm btn-info ml-3">Login</a>
                  </div>
            </div>
         </div>
        </div>
      </div>
    </div>
    <?php
    if(isset($_POST['u_reg'])){
        $u_email=$_POST['u_email'];
        $u_name=$_POST['u_name'];
        $u_pass=md5($_POST['u_pass']);
        
    }
    ?>
    
  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>