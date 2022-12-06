<script type="text/javascript">
if(confirm("Do you want to delete ?")){
    <?php
include("connection.php");
$query = "delete from teachers where ID = '$_POST[ID]'";
$query_run = mysqli_query($conn, $query);
?>
window.location.href = "admin_dashboard.php";
}

else{
    window.location.href = "admin_dashboard.php";
}

</script>