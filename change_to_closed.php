<?php
include 'connection.php';
$id=$_GET['id'];
$sql='update bug_list set status=1 where id="'.$id.'"';
if (mysqli_query($conn, $sql)) {
echo "Closing";
 $temp=0;
}
else {
$temp=0;
}
mysqli_close($conn);
header("Location:developer.php");
?>