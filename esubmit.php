<?php
//echo 'hello jii';

if (isset($_POST['submit'])) {
  //    echo 'haa bhai ave ';

  $un = $_POST['username'];
  $pas = $_POST['password'];


  $lh = 'localhost';
  $uname = 'root';
  $pass = '';
  $db = 'practice';

  $con = new mysqli($lh, $uname, $pass, $db);

  if ($con) {

    $query = "SELECT * FROM emp2 WHERE username='$un' AND `password`='$pas'";

    $res = mysqli_query($con, $query);

    $rs = mysqli_fetch_assoc($res);

    if ($rs) {

      session_start();
      $sess_id = $rs['id'];
      $_SESSION['id'] = $sess_id;
      header("location:dashboard.php");
    } else {
      echo 'wrong username or pass';
    }
  }
}

?>