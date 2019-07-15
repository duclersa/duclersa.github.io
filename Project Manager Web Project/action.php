<!DOCTYPE html>
<html>
  <head>
	<meta charset="UTF-8"/>
	<title>Team results </title>
	<link href="WebStyle.css" rel="stylesheet" type="text/css" media="all" />
	</head>
<html>
<body>
<div style="height: 40%; width: 110%; background-color: Blue; color: white; margin-top: 0%;">
<h3 align="center">You Team Members</h3>
</div>
<div style="margin-left: 15%; margin-top: 15%; background-color: white; border: solid;">
Team Frist name <?php echo $_POST["fname"]; ?><br>
Team Last name <?php echo $_POST["lname"]; ?><br>
Current position <?php echo $_POST["position"]; ?><br>
Role in project <?php echo $_POST["position2"]; ?><br>
Your email address is <?php echo $_POST["email"]; ?>


</div>

</body>
</html>