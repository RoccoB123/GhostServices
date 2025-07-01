<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home - 6 Card Layout</title>
  <link rel="stylesheet" href="home.css">
</head>
<body>

  <h1 class="page-title">Ghost Services</h1>

  <div class="container">
    <div class="card">
  <img src="ghostvpn.png" alt="VPN Image">
  <div class="card-content">
    <h3>VPN</h3>
    <p>Access your virtual private network</p>
  </div>
 
  <button><a href="dashboard.php">Click here</a></button>

</div>

<div class="card">
  <img src="images/location.png" alt="Location Image">
  <div class="card-content">
    <h3>Card2</h3>
    <p>...</p>
  </div>
  <button>...</button>
</div>

<div class="card">
  <img src="images/location.png" alt="Location Image">
  <div class="card-content">
    <h3>Card3</h3>
    <p>...</p>
  </div>
  <button>...</button>
</div>
<div class="card">
  <img src="images/location.png" alt="Location Image">
  <div class="card-content">
    <h3>Card4</h3>
    <p>...</p>
  </div>
  <button>...</button>
</div>
<div class="card">
  <img src="images/location.png" alt="Location Image">
  <div class="card-content">
    <h3>Card5</h3>
    <p>...</p>
  </div>
  <button>...</button>
</div>
<div class="card">
  <img src="images/location.png" alt="Location Image">
  <div class="card-content">
    <h3>Card6</h3>
    <p>...</p>
  </div>
  <button>...</button>
</div>
  </div>

</body>
</html>
