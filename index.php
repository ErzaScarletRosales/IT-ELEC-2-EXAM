<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>apple</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Erza_Scarlet</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <form class="d-flex">
      <div class="mx-auto" style="width: 200px;">
             <button class="btn btn-outline-success" type="submit">Login</button>
     
             <button class="btn btn-outline-success" type="submit">Title</button>
    </div>
  
</div>
       
    </div>
  </div>
</nav>

<div class="container mt-3 ">
 <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal ">
  Register
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <form action="code.php" method="POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">First Name</label>
        <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Last Name</label>
        <input type="text" name="lastname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="text" name="email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        <label for="exampleInputPassword1" class="form-label"> Confirm Password</label>
        <input type="cpassword" name="cpassword" class="form-control" id="exampleInputPassword1">
      </div>
    
      <button type="submit" name="registerbtn" class="btn btn-primary">Register</button>
    </form>
      </div>
   
    </div>
    
  </div>
</div>




  <table class="table">
    <thead>
      <tr>
        <th>FIRSTNAME</th>
        <th>LASTNAME</th>
        <th>EMAIL</th>
        <th>PASSWORD</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Erza </td>
        <td> Scarlet</td>
        <td>Erza@gmail.com</td>
        <td>Erza123</td>
       
      </tr>
      <tr>
        <td>Lucy </td>
        <td>Heartfillia</td>
        <td>LHeartfillia@gmail.com</td>
        <td>Lucy456</td>
        
      </tr>
      <tr>
        <td>Gray</td>
        <td> Fullbuster</td>
        <td>FullbusterG@gmail.com</td>
        <td>Gray12345</td>
        
      </tr>
      
    </tbody><?php


