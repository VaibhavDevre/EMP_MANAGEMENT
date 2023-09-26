<?php
        $ud=$_GET['uid'];

        $lh = 'localhost';
        $ps = '';
        $un = 'root';
        $db = 'practice';

        $con = new mysqli($lh, $un, $ps, $db);  
        if($con){

            echo "aaltu thayu"; 
         
            $query="DELETE FROM demo2 WHERE id='$ud'";

            $r=mysqli_query($con,$query);

            if($query){
                    header("location:show.php");
            }
            else{
                echo 'be yarr';
            }
        }

?>