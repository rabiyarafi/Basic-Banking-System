<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Banking</title>
  <?php require 'assets/autoloader.php'; ?>
  <?php require 'assets/mcdb.php'; ?>
  <?php require 'assets/function.php'; ?>
  
</head>
<body style="background: url(images/index.jpg);background-size: 100%" >
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
 <a class="navbar-brand" href="#">
    <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
 <?php echo bankname; ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">  <a class="nav-link" href="accounts.php">Accounts</a></li>
      <li class="nav-item ">  <a class="nav-link" href="allaccount.php">All Account</a></li>
     <li class="nav-item ">  <a class="nav-link" href="newaccount.php">Add New Account</a></li>


    </ul>
    <?php include 'sideButton.php'; ?>
    
  </div>
</nav><br><br><br>
<div >
  <div class="col" style="padding: 22px;padding-top: 0">
    
  <span style="color:white;"><h1 class="display-5">Welcome to Toucan Bank</h1></span>
</div>
<div class="col">
    <div class="row" style="padding: 22px;padding-top: 0">
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="images/account.jpg" style="max-height: 155px;min-height: 200px" alt="Card image cap">
          <div class="card-body">
            <a href="accounts.php" class="btn btn-outline-success btn-block">Account Detail</a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadowBlack ">
          <img class="card-img-top" src="images/trans.jpg" alt="Card image cap" style="max-height: 155px;min-height: 200px";>
        <div class="card-body">
          <a href="transfer.php" class="btn btn-outline-success btn-block">Transfer Money</a>
         </div>
        </div>
      </div>
    </div>
      
    </div>
  </div>
</div>
</body>
</html>