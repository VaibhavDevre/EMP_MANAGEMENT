<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="empall.php" method="POST" enctype="multipart/form-data">
       
        <b>employee name: </b><input type="text" name="empname"><br>
       
        <b>employee phone: </b><input type="text" name="empphone"><br>

        <b>employee salary:</b><input type="text" name="esalary"><br>

        <b> employee email:</b><input type="text" name="empemail"><br>

        <b> employee department:</b><input type="text" name="empldpt"><br>
        
        <b> upload image:</b><input type="file" name="image" ><br>

        <input type="submit" name="submit"><br>      
       
        <a href="empdisplay.php">display the data</a><br>
    </form>
</body>
</html>