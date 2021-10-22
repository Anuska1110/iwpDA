<?php
include 'connection.php';
$sql= "select password from developer where username='".$_POST['username']."'";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
   while($row = mysqli_fetch_assoc($result)) {
       if ($row["password"]==$_POST['password']){
           header("Location:developer.php");
       }
       else{
           echo "<script language=\"JavaScript\">
           alert('Password was incorrect!');
           window.location='developerlogin.php';
           </script>";
       }

   }
}else {
    echo "<script language=\"JavaScript\">
    alert('Username was incorrect!');
    window.location='developerlogin.php';
    </script>";
}
?>