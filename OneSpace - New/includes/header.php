<?php 
include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/2ad88e3db9.js" crossorigin="anonymous"></script>
    <Title>OneSpace</Title>
</head>


<body>    
     
  <nav class="navbar navbar-expand-md custom-navbar navbar-dark fixed-top transparent" id="navbar-holder">
    <div class="logo">
        <img id="logo" src="img/onespace_logo.png" alt="Logo">
        <h4 id="company_name"><a href="/index.php">OneSpace</a></h4>
    </div>
    <button class="navbar-toggler ml-auto" style="border: none;" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <div class="hamburger" id="hamburger" onclick="toggleNav();myFunction(this);" >
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav ml-auto ">
            <?php include('includes/nav.php'); ?>
        </ul>
    </div> 
    <ul class="collapsed navbar-collapsed" id="mb-nav" style="display: none;">
        <?php include('includes/nav.php'); ?>   
    </ul>
  </nav>