<?php
    //echo 'hello jii';
    
    if(isset($_POST['submit'])){
   //     echo 'haa bhai ave ';

      $un=$_POST['username'];
      $pas=$_POST['password'];
      $em=$_POST['email'];
      $phn=$_POST['cnumber'];
      // echo  $un;
      // echo  $pas;
      // echo  $em;
      // echo $phn;

      $lh='localhost';
      $uname='root';
      $pass='';
      $db='practice';

      $con = new mysqli ($lh,$uname,$pass,$db);


        if($con){
        //  echo 'connection succesfull !';
        //  $query = "INSERT INTO emp2(username,password,email,phone) VALUES ('$un','$pas','$em','$phn')";

          $query2 ="SELECT * FROM emp2 WHERE email='$em'";

          $res2 =mysqli_query($con,$query2);

          $fatch=mysqli_fetch_assoc($res2);

          if($fatch){
            echo "YOU ALREADY HAVE AN ACCCOUNT !";
          }
          
          else{
             $query = "INSERT INTO emp2(username,password,email,phone) VALUES ('$un','$pas','$em','$phn')";
             header("location:emplog.php");
          }
        }

    }
    else {
      echo "na bhai ";
    }
?>