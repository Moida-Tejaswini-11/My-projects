<?php
include("../configASL.php");
include('update.php');
LabStatus($al);

$id1=$_GET['del1'];
mysqli_query($al,"delete from log where time='$id1'");
?>
<script type="text/javascript">
alert("Successfully deleted");
window.location='search.php';
</script>
