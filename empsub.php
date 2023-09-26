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

          $query = "INSERT INTO emp2(username,password,email,phone) VALUES ('$un','$pas','$em','$phn')";

          $res =mysqli_query($con,$query);

          if($res){
              echo 'values added';
          }
          else 
          {
              echo 'values not inserted';
          }
        }

    }
    else {
      echo "na bhai ";
    }
?>