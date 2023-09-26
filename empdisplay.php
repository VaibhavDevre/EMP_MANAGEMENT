<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>DATA OF ALL EMPLOYEE</h1>
    <table border="1">
        <tr>
            <th>id</th>
            <th>employee name</th>
            <th>employee phone</th>
            <th>employee salary</th>
            <th>employee email</th>
            <th>employee department</th>
            <th>employee images</th>
        </tr>
        <?php
        $lh = 'localhost';
        $uname = 'root';
        $pass = '';
        $db = 'practice';

        $con = new mysqli($lh, $uname, $pass, $db);

        if ($con) {
            $query = "SELECT * FROM emp3 ";
            $result = mysqli_query($con, $query);

            if ($result)
                while ($raw = mysqli_fetch_assoc($result)) {
                    $d1 = $raw['id'];
                    $d2 = $raw['ename'];
                    $d3 = $raw['ephone'];
                    $d4 = $raw['esalary'];
                    $d5 = $raw['email'];
                    $d6 = $raw['edpt'];

                    echo '
                        <tr>
                            <td>' . $d1 . '</td>
                            <td>' . $d2 . '</td>
                            <td>' . $d3 . '</td>
                            <td>' . $d4 . '</td>
                            <td>' . $d5 . '</td>
                            <td>' . $d6 . '</td>'; ?>

                    <td>
                        <img src="upload/<?= $raw['eimg'] ?>" alt="" height="100" width="100">
                    </td>

                    <?php

                    echo '</tr>';

                }
        }







        ?>
        </tr>
    </table>
</body>

</html>