<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Bugs</title>
</head>
<style type="text/css">
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

	border-width: 15px;
	font-family: monospace;
	font-size: 20px;
	width: 30%;
}
a{
	text-decoration: underline;
	color: #fff;
}
</style>
<body>
	<center>
		<div class="box">
			<strong><h1>Add Bugs</h1></strong>
			<a href="qa.php">Back</a></br><br>
		</div>
	</center>
	<br>
	<br>
	<center>
		<div class="box" style="height: 200px;padding-left: 20px;padding-top: 40px;">
			<form method="post" action="retrieve_admin.php">
				<label>Bug_Name : <input type="text" name="bug_name"
					id="bug_name"></label><br><br>
					<label>Comment : <input type="text" name="bug_comment"
						id="bug_comment" > </label><br><br>
						<button id="sub1">Submit</button>
					</form>
				</div>
			</center>
		</body>
		</html>
