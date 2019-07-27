<!DOCTYPE html>
<html>
  <head>
	<meta charset="UTF-8"/>
	<title>Project Portal</title>
	<link href="WebStyle.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<style>
	
div.container {
      width: 50%;
      text-align: left;
	  color: black;
	  font-weight: bold;
	  background-color: Royalblue;
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

  
 h2 {
 font-size: 18px;
 color: white;
 
 } 
	
	</style>
<body>
	
	
	<h1 style="color: blue; font-size: 50px; margin-left: 11%;" align="center">New Team Member Form</h1>
	
	<div class="container" style="float: left; margin-left: 32%; margin-top: 5%;">
<form  method="post" action="TeamRoles.html" autocomplete ="on">  

  <label>
  <h2 style="font-size= 16"><b>First Name</b>
  <input name="FirstName" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="First Name of new member"style="margin-left: 22%;" >
  </label>
  </h2>
 
  <label>
  <h2 style="font-size= 16"><b>Last Name</b>
  <input name="LastName" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Last Name oof new member"style="margin-left: 22.6%;" >
  </label>
  </h2>
	  
	 <label>
  <h2 style="font-size= 16"><b>Occupation</b>
  <input name="Occupation" type="text" size="22" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Team meber's regular occupation"style="margin-left: 21.6%;" >
  </label>
  </h2>
	  
	 
	 
 <label>
  <h2 style="font-size= 16"><b>department</b>
  <input name="department" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="department member works in" style="margin-left: 21.6%;">
  </label>
  </h2>
  
   <label>
  <h2 style="font-size= 16"><b>Group Role</b>
  <input name="GroupRole" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Member's role on the Team"style="margin-left: 21.6%;" >
  </label>
  </h2>
 
   <label>
  <h2 style="font-size= 16"><b>Email</b>
  <input name="Email" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Email of new member"style="margin-left: 29.1%;" >
  </label>
  </h2>
  
  <label>
  <h2 style="font-size= 16"><b>Phone number</b>
  <input name="Phone" type="tel" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Phone number of new member"style="margin-left: 17%;" >
  </label>
  </h2>
  
  <label>
  <h2 style="font-size= 16"><b>Address</b>
  <input name="Address" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Address of new member" style="margin-left: 25.6%;">
  </label>
  </h2>
  
  <label>
  <h2 style="font-size= 16"><b>City</b>
  <input name="City" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="city of new member"style="margin-left: 31.3%;" >
  </label>
  </h2>
  
   <label>
  <h2 style="font-size= 16"><b>State</b>
  <input name="State" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="State of new member"style="margin-left: 30.3%;" >
  </label>
  </h2>
  
  
  
	         <input value="Add New Member" type="submit" style="height: 10%; width: 25%; background-color: black; color: white;">
	         <input value="Clear" type="reset"  style="height: 10%; width: 20%; background-color: black; color: white;">
			 
		</form>
 <?php
 $servername = "localhost";
$username = "root";
$password = "";
$dbname = "project manager";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
 
 
  if(isset($_POST['submit'])) {
	  
  $firstname = $_POST['FirstName'];
  $lastname = $_POST['LastName'];
  $occupation = $_POST['Occupation'];
  $depart = $_POST['department'];
  $grouprole  = $_POST['GroupRole'];
  $email = $_POST['Email'];
  $phone = $_POST['Phone'];
  $address = $_POST['Addres'];
  $city = $_POST['City'];
  $state = $_POST['State'];
  
  $postQuery = "INSERT INTO teammembers (FirstName, LastName, Occupation, department, GroupRole, Email, Phone, Address, City, State)
        VALUES ('$firstname', '$lastname', '$occupation', '$depart', '$grouprole', '$email', '$phone', '$address', '$city', '$state')";
  
		//echo $testQuery;//
		if ($conn->query($postQuery) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $postQuery . "<br>" . $conn->error;
}$conn->close();
  } 
		
   ?>
 
 
</div>	
	
	</body>
	</html>