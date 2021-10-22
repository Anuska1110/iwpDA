<?php
include 'connection.php';
$sql= "select bug_comment from qa where bug_name='".$_POST['bug_name']."'";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
       if ($row["bug_comment"]==$_POST['bug_comment']){
           header("Location:qa.php");
       }
       else{
           echo "<script language=\"JavaScript\">
           alert('bug_comment was incorrect!');
           window.location='qalogin.php';
           </script>";
       }

   }
}else {
    echo "<script language=\"JavaScript\">
    alert('bug_name was incorrect!');
    window.location='qalogin.php';
    </script>";
}
?>
