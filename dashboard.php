<?php
session_start();

if (!isset($_SESSION['id'])) {
  header("location:emplog.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .mega {
      background-color: rgb(13, 191, 28);
      text-align: center;
      margin-top: 20px;
      padding: 20px 30%;
    }

    a {
      color: black;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="mega" style="display: flex; justify-content: space-between;">
    <div class="one">
      <a href="eaddemp.php"> ADD EMPLOYEE </a>
    </div>
    <div class="one">
      <a href="empdisplay.php`"> ALL EMPLOYEES </a>
    </div>
    <div class="one">
      <a href="logout.php">LOG OUT </a>
    </div>
    <div class="one">
      <a href="abus.php">ABOUT US</a>
    </div>
  </div>
</body>

</html>