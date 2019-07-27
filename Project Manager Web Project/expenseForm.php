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
	
	<h1 style="color: blue; font-size: 50px; margin-left: 11%;" align="center">New Expense Info	Form</h1>
	
	
	<div class="container" style="float: left; margin-left: 32%; margin-top: 5%;">
<form  method="post" action="Expenses.html" autocomplete ="on" >  

  <label>
  <h2 style="font-size= 16"><b>Cost Name</b>
  <input name="Name" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Name of Expense" style="margin-left: 10%;">
  </label>
  </h2>
 
  <label>
  <h2 style="font-size= 16"><b>Description</b>
  <input name="Description" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Last Name oof new member" style="margin-left: 9.5%;">
  </label>
  </h2>
	  
	 <label>
  <h2 style="font-size= 16"><b>Task Name</b>
  <input name="TaskName" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Name of Task"style="margin-left: 10%;" >
  </label>
  </h2>
	  
	 
	 
 <label>
  <h2 style="font-size= 16"><b>Project ID</b>
  <input name="ProjectID" type="number" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="ID of Project"style="margin-left: 11%;" >
  </label>
  </h2>
  
   <label>
  <h2 style="font-size= 16"><b>Milestone ID</b>
  <input name="MilestoneID" type="numer" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="ID of milestone" style="margin-left: 7.1%;">
  </label>
  </h2>
  
  
   <label>
  <h2 style="font-size= 16"><b>Total Cost</b>
  <input name="TotalCost" type="decimal" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Total cost" style="margin-left: 10.1%;">
  </label>
  </h2>
  
  <label>
  <h2 style="font-size= 16"><b>Status</b>
  <input name="statusName" type="decimal" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Status name" style="margin-left: 15%;" >
  </label>
  </h2>
  
  
 
  
  
	         <input value="Create New Project" type="submit" style="height: 15%; width: 33%; background-color: black; color: white">
	         <input value="Clear" type="reset" style="height: 10%; width: 20%; background-color: black; color: white;">
			 
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

 $tablename = "expenses";
  $col2 = "Name";
  $col3 = "Description";
  $col4 = "TaskName";
  $col5 = "ProjectID";
  $col6 = "MilestoneID";
  $col7 = "TotalCost";
  $col8 = "statusName";
  
  $name = isset($_POST["Name"]);
  $description = isset($_POST["Description"]);
  $taskname = isset($_POST["TaskName"]);
  $projectid  = isset($_POST["ProjectID"]);
  $milestoneid = isset($_POST["MilestoneID"]);
  $totalcost = isset($_POST["TotalCost"]);
  $statusname = isset($_POST["statusName"]);
 
  $postQuery = "INSERT INTO espenses (Name, Description, TaskName, ProjectID, MilestoneID, TotalCost, statusName)
        VALUES ('$name', '$description', ' $taskname', '$projectid', '$milestoneid', '$totalcost', '$statusname')";
		
		
		//echo $testQuery;//
		if($name != "" ) {
			if($query1_run = mysqli_query($conn, $postQuery)){
				echo '<p>Successfully posted</p><br>';
			}
		    else {
				echo '<p>Failed to post</p><br>'; 
			} 
		} 
		
   ?>
 
 
 
 
 
 
 
 
</div>	  

 
	
	
	
	
	
	
	
	</body>
	</html>