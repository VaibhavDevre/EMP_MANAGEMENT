<?php

if (isset($_POST['submit'])) {

  //echo "connection succesfully !";

  // echo "<pre>";
  // print_r($_FILES['img']);
  // echo "</pre>"; 

  $ename = $_POST['empname'];
  $ephone = $_POST['empphone'];
  $esalary = $_POST['esalary'];
  $email = $_POST['empemail'];
  $edpt = $_POST['empldpt'];
  // $eimg=$_POST['image'];

  $img_name = $_FILES['image']['name'];
  $extension = $_FILES['image']['type'];
  $tmp_name = $_FILES['image']['tmp_name'];
  $error = $_FILES['image']['error'];
  $size = $_FILES['image']['size'];

  $lh = "localhost";
  $un = "root";
  $ps = '';
  $db = 'practice';

  $conn = new mysqli($lh, $un, $ps, $db);

  if ($conn) {
   // echo "database";

    if ($error === 0) {
      if ($size > 12500000) 
      {
        $err = "Img size should be less than 1.25 MB";
        header("location:dashboard.php?$err");
      }
       else {
        $allowed_extention = array('png', 'jpg', 'jpeg');
        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);

        // echo $img_ex;
        if (in_array($img_ex, $allowed_extention)) 
        {
          $new_img_name = uniqid('IMG-', true) . '.' . $img_ex;
          $path = 'upload/' . $new_img_name;
          move_uploaded_file($tmp_name, $path);
          $query = "INSERT INTO emp3(ename,ephone,esalary,email,edpt, eimg) VALUES ('$ename','$ephone','$esalary','$email','$edpt','$new_img_name')";
          $result = mysqli_query($conn, $query);
          // echo " values inserted";

          if ($result)
           {
            header("location:empdisplay.php");
          }
        } 
        else 
        {
          $err = "Img extension should be either png or jpg or jpeg";
        }

      }

    } 
   
    else {
      $err = "something went wrong while uploading !";
      header("location:dashboard.php?error=$err");
    }

  }
   else {
    echo "Something went wrong";
  }
} 
else {
  die($conn);
}


?>