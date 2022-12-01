<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center><br>
        <h2>Student management system</h2><br>
        <form action="" method="POST">
            <input type="submit" name="admin_login" value="Admin Login">
            <input type="submit" name="student_login" value="Student Login">

        </form>
        <?php
        if(isset($_POST['admin_login'])){
            header("Location: admin_login.php");
        }
        if(isset($_POST['student_login'])){
            header("Location: student_login.php");
        }
        ?>
    </center>
</body>
</html>