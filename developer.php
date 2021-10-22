<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Developer</title>
</head>
<style>
body{
	background-image: url('back.jpg');
    background-size: 100%;
    width: 100%;
    height: 100%;
}
h1{
	text-align: center;
	color: #fff;
}
.box{
	padding: 5px;
	/* background-color: #e1aaf0;border: solid darkmagenta; */
	border-width: 15px;
	font-family: monospace;
	font-size: 20px;
	width: 30%;
}
.bigbox{
	padding: 5px;
	/* background-color: #e1aaf0;border: solid darkmagenta; */
	border-width: 15px;
	font-family: monospace;
	font-size: 15px;
	width: 90%;
	margin-top: 20px;
}
a{
	text-decoration: underline;
	color: #fff;
}
hr{
	width: 50%;
	border-style: solid;
	border-color: #fff;
	border-width: 2px;
	color: #fff;
}
td{
	width: 150px;
	text-align: center;
}
th{
	padding-bottom: 15px;
	text-decoration: underline;
}
.complex {
	border: solid;
	border-radius: 4px;
	border-width: 1px;
	padding-top: 2px;
	padding-bottom: 2px;
	padding-right: 5px;
	padding-left: 5px;
	font-size: 12px;
	background-color: white;
}
</style>
<body>
	<center>
		<div class="box">
			<strong><h1>Developer Page</h1></strong>
			<a href="home.html" >Home</a></br><br>
		</div>
	</center>
	<center>
		<div class="bigbox">
			<h2>Bug List</h2><hr><br>
			<?php
			include 'connection.php';
			$sql = "SELECT * FROM bug_list";
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				echo '<table>
				<tr>
				<th>Bug ID</th>
				<th>Name</th>
				<th>Comment</th>
				<th>Status</th>
				<th colspan="2">Change
				Status</th>
				</tr>';
				while($row = $result->fetch_assoc()) {
					if ($row["comment"]==NULL){
						if($row["status"]==0)
						{
							echo '<tr>
							<td>'.$row["id"].' </td>
							<td>'.$row["name"].'</td>
							<td>'."NULL".'</td>
							<td>'."Open".'</td>
							<td><a href="change_to_working.php?id='.$row["id"].'"
							class="complex">Working</a></td>
							<td><a href="change_to_closed.php?id='.$row["id"].'"
							class="complex">Closed</a></td>
							</tr>';
							echo $row["id"];
						}
						elseif ($row["status"]==2) {
							echo '<tr>
							<td>'.$row["id"].' </td>
							<td>'.$row["name"].'</td>
							<td>'."NULL".'</td>
							<td>'."Working".'</td>
							<td></td>
							<td><a href="change_to_closed.php?id='.$row["id"].'"
							class="complex")">Closed</a></td>
							</tr>';
						}
						else{
							echo '<tr>
							<td>'.$row["id"].' </td>
							<td>'.$row["name"].'</td>
							<td>'."NULL".'</td>
							<td>'."Closed".'</td>
							<td><a href="change_to_working.php?id='.$row["id"].'"
							class="complex">Working</a></td>
							</tr>';
						}
					}
					else{
						if($row["status"]==0)
						{
							echo '<tr>
							<td>'.$row["id"].' </td>
							<td>'.$row["name"].'</td>
							<td>'.$row["comment"].'</td>
							<td>'."Open".'</td>
							<td><a href="change_to_working.php?id='.$row["id"].'"
							class="complex">Working</a></td>
							<td><a href="change_to_closed.php?id='.$row["id"].'"
							class="complex">Closed</a></td>
							</tr>';
						}
						elseif ($row["status"]==2) {
							echo '<tr>
							<td>'.$row["id"].' </td>
							<td>'.$row["name"].'</td>
							<td>'.$row["comment"].'</td>
							<td>'."Working".'</td>
							<td></td>
							<td><a href="change_to_closed.php?id='.$row["id"].'"
							class="complex">Closed</a></td>
							</tr>';
						}
						else{
							echo '<tr>
							<td>'.$row["id"].' </td>
							<td>'.$row["name"].'</td>
							<td>'.$row["comment"].'</td>
							<td>'."Closed".'</td>
							<td><a href="change_to_working.php?id='.$row["id"].'"
							class="complex">Working</a></td>
							</tr>';
						}
					}
				}
			}
			else {
				echo "0 results";
			}
			mysqli_close($conn);
			?>
		</table>
		<br>
		<br>
		<br>
	</div>
</center>
</body>
</html>
