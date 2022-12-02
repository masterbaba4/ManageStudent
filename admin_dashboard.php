<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php
    session_start();
    ?>
</head>
<body>
    <div id = "header">
        <center><br><h1>Student Management system  </h1><br> <?php echo $_SESSION ['email']; ?> <br> Name:<?php echo $_SESSION ['name']; ?></center>
    </div>
    <div id="left_side">
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <input type="submit" name="search_student" value="Search student">
                      

                    </td>
                </tr>
                <tr>
                    <td>
                       
                        <input type="submit" name="edit_student" value="Edit student">
                       
                    </td>
                </tr>
                <tr>
                    <td>
                       
                        <input type="submit" name="create_student" value="Create student">
                       
                    </td>
                </tr>
                <tr>
                    <td>
                       
                        <input type="submit" name="delete_student" value="Delete student">
                        
                    </td>
                </tr>
            </table>
        </form>

    </div>
    <div id="right_side"></div>

</body>
</html>