<!doctype html>
<html>

<head>
    <title>
        kucch bhi
    </title>
    
</head>

<body>
    <h1>ALL DATA</h1>
    <table BORDER="1">
        <TR>
            <TH>USERNAME</TH>
            <TH>COLLEGENAME</TH>
        </TR>
        <tbody>
            <?PHP
            $lh = "localhost";
            $ps = "";
            $un = "root";
            $db = "practice";

            $con = new mysqli($lh,$un, $ps, $db);

            if ($con) {
               // echo "connection successful !";

               $query = "SELECT * FROM demo";

               $result=mysqli_query($con,$query);

               if($result){
                   // echo "redy";
                    while($rows=mysqli_fetch_assoc($result)){
                        $username=$rows['NAME'];
                        $ps=$rows['PASSWORD'];

                        echo "
                            <tr>
                                <td>".$username."</td>
                                <td>".$ps."</td>
                            </tr>
                        ";

                    }

               }
            }
            
            else {
                echo "connection fail !";
                die($con);
            }
            ?>
        </tbody>
    </table>
</body>

</html>