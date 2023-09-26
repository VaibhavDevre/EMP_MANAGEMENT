<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">

        <th>username</th>
        <th>password</th>
        <th>Update/delete</th>
        <tbody>
            <?php
            $lh = 'localhost';
            $ps = '';
            $un = 'root';
            $db = 'practice';

            $con = new mysqli($lh, $un, $ps, $db);
            if ($con) {
                //   echo 'connection successful !';
                $query = "SELECT * FROM demo2";

                $result = mysqli_query($con, $query);
                if ($result) {

                    while ($rows = mysqli_fetch_assoc($result)) {

                        $id = $rows['id'];
                        $use = $rows['username'];
                        $pas = $rows['password'];
                        echo "
                             <tr>
                                 <td>" . $use . "</td>
                                 <td>" . $pas . "</td>
                                 <td><a href='update.php?uid=" . $id . "'>Update</a>
                                    <a href='delete.php?uid=".$id."'>Delete</a>
                                 </td>
                             </tr>
                         ";

                    }
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>