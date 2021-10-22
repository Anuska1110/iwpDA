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
			<strong><h1>Developer</h1></strong>
			<a href="home.html" >Home</a></br><br>
		</div>
	</center><br>
	<br>
	<center>
		<div class="box" style="height: 400px;padding-left: 20px;padding-top: 40px;">
			<h2>Log In</h2><hr width="50%" style="border-style: solid;bordercolor: #fff; border-width: 2px; color: #fff;"><br>
			<form action="developer_retrive.php" method="post">
				<label>Username: </label><input type="text"
				name="username" id="username"><br>
				<label>Password: </label><input type="password"
				name="password" id="password"><br>
				<br>
				<input type="submit" name="submit" id="submit">
			</form>
		</div>
	</center>
</body>
</html>
