<?php
  
  if(isset($_POST['submit'])){
        
        echo "connection succesfully !";

        $usname=$_POST['username'];
        $uclg=$_POST['college'];
        // echo ' ';
        // echo $usname;
        // echo ' ';
        // echo $uclg;

        $lh="localhost";
        $un= "root";
        $ps='';
        $db='practice';

        $conn = new mysqli ($lh,$un,$ps,$db);
        
        if($conn){
            //echo "database";

            $query="INSERT INTO demo() VALUES ('$usname','$uclg')" ;

            $result =mysqli_query($conn,$query);

            if($result)
            {
                echo " values inserted";
            }
            else{
                echo "Something went wrong";
            }

        }
        else{
            die($con);
        }
  }
  else{
    echo 'connection not established';
  }

?>