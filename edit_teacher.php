<?php
include("connection.php");
$query = "update teachers set ID='$_POST[ID]' s_no='$_POST[s_no]',name='$_POST[name]',
email='$_POST[email]',password='$_POST[password]',subject='$_POST[subject]',contact_no='$_POST[contact_no]',address='$_POST[address]' where ID = '$_POST[ID]'";
$query_run = mysqli_query($conn, $query);
?>
<script type="text/javascript">
alert("Edited Sucessfully");
window.location.href = "admin_dashboard.php";
</script>