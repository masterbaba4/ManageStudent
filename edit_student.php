<?php
include("connection.php");
$query = "UPDATE students SET s_no='$_POST[s_no]', name='$_POST[name]', fathers_name='$_POST[fathers_name]',
email='$_POST[email]', password='$_POST[password]', class='$_POST[class]' WHERE roll_no='$_POST[roll_no]'";
$query_run = mysqli_query($conn, $query);
?>

<script type="text/javascript">
alert("Edited Sucessfully");
window.location.href = "admin_dashboard.php";
</script>

