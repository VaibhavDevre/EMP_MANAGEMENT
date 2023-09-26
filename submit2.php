<?php
    // echo "hello world !"

   if(isset($_POST['submit'])){
    // echo "clicked";

    $user=$_POST['username'];
    $pass=$_POST['password'];

    // echo $user ;
    // echo $pass ;

    $lh='localhost';
    $us='root';
    $ps='';
    $db='practice';
    
    $con = new mysqli ($lh,$us,$ps,$db);
    
    if($con){
       // echo 'connection successfull !';
       $query = "INSERT INTO demo2(username,password) VALUES ('$user','$pass')";

       $result = mysqli_query($con,$query);

       if($result){
            echo 'Data Inserted Successfully !';
       }
       else {
        echo "Something is Wrong !";
        die($con);
       }
    }

    }

   else{
        echo "not connected";
   }

?>