<?php
// echo "Update Form";

$uid = $_GET['uid'];


$lh = 'localhost';
$us = 'root';
$ps = '';
$db = 'practice';

$con = new mysqli($lh, $us, $ps, $db);


if ($con) {
    $query = "SELECT * FROM demo2 WHERE id=$uid";
    
    $result = mysqli_query($con, $query);

    $data = mysqli_fetch_assoc($result);
    
    $usr = $data['username'];
    $ps = $data['password'];
}

if (isset($_POST['update'])) {
    $un = $_POST['username'];
    $psw = $_POST['password'];

    $query1 = "UPDATE demo2 SET username='$un',password='$psw' WHERE id='$uid'";

    $res = mysqli_query($con, $query1);

    if ($res) {
        header("location:show.php");
    }

    else
    {
        echo 'err';
    }
}

// echo $uid;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <h3>Update Data</h3>
        <b>Name: </b><input type="text" name="username" value="<?php echo $usr ?>"><br>
        <b>password: </b><input type="text" name="password" value="<?php echo $ps ?>"><br>
        <input type="submit" name="update" value="Update">
    </form>
    <a href="show.php">see your data</a>
</body>

</html>