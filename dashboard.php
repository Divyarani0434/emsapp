<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!--Stylesheet css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--fontawesome-->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Dashboard</title>
  </head>
  <body>
    <!--nav-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dashboard.html">Hi , Divya</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="employees-list.html">Employees</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jobs-list.html">Jobs</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <div class="input-group">
  <input type="search" class="form-control" placeholder="Search.." aria-label="Search" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-sm btn-success" type="submit" id="button-addon2"><i class="fa fa-search"></i></button>
  </div>
    </div>
    </form>
    <a href="index.html" class="ml-3 btn btn-sm btn-warning">Log Out</a>
  </div>
</nav>
<!--nav-->
<!-- dashboard -->
<div class="container-fluid">
  <div class="row mt-5 justify-content-center">
  <div class="col-lg-3 col-md-3">
    <div class="card card-border">
      <div class="card-body">
        <h4 class="card-title">4<small class="text-muted">Employees</small></h4>
      </div>
      <div class="list-group list-group-flush">
          <a href="employees-list.html" class="list-group-item list-group-item-primary">View all</a>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-md-3">
    <div class="card card-border">
      <div class="card-body">
        <h4 class="card-title">3<small class="text-muted">Jobs</small></h4>
      </div>
      <div class="list-group list-group-flush">
          <a href="jobs-list.html" class="list-group-item list-group-item-primary">View all</a>
      </div>
    </div>    
  </div>
  </div>
  <div class="img justify-content-center">
    <center>
    <img class="image-rounded image justify-content-center" src="images/home-office.jpg">
    </center>
</div>
<!-- dashboard -->

  
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>