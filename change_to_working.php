<?php
include 'connection.php';
$id=$_GET['id'];
$sql='update bug_list set status=2 where id="'.$id.'"';
if (mysqli_query($conn, $sql)) {
    echo "Working";
    $temp=0;
}
else {
    $temp=0;
}
mysqli_close($conn);
header("Location:developer.php");
?>