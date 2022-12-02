<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center><br>
        <h2>Student management system</h2><br>
        <form action="" method="POST">
            <input type="submit" name="admin_login" value="Admin Login">
            <input type="submit" name="student_login" value="Student Login">
            <input type="submit" name="teacher_login" value="Teacher Login">
<br><br><br>
            <input type="submit" name="student_reg" value="New Student Registration">
            <input type="submit" name="teacher_reg" value="New Teacher Registration">
        </form>
        <?php
        if(isset($_POST['admin_login'])){
            header("Location: admin_login.php");
        }
        if(isset($_POST['student_login'])){
            header("Location: student_login.php");
        }
        if(isset($_POST['teacher_login'])){
            header("Location: teacher_login.php");
        }
        if(isset($_POST['student_reg'])){
            header("Location: student_reg_form.php");
        }
        if(isset($_POST['teacher_reg'])){
            header("Location: teacher_reg_form.php");
        }
        ?>
    </center>
</body>
</html>