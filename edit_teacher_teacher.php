

<?php
include("connection.php");
$query = "UPDATE teachers SET ID='$_POST[ID]', s_no='$_POST[s_no]', name='$_POST[name]',
email='$_POST[email]', password='$_POST[password]', subject='$_POST[subject]', contact_no='$_POST[contact_no]', address='$_POST[address]' WHERE ID='$_POST[ID]'";
$query_run = mysqli_query($conn, $query);
?>

<script type="text/javascript">
alert("Updated Sucessfully");
window.location.href = "teacher_dashboard.php";
</script>

