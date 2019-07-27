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
	
	<h1 style="color: blue; font-size: 50px; margin-left: 11%;" align="center">New Invoice Form</h1>
	
	
	<div class="container" style="float: left; margin-left: 32%; margin-top: 5%;">
<form  method="post" action="Invoices.html" autocomplete ="on" >  

  <label>
  <h2 style="font-size= 16"><b>Product Name</b>
  <input name="ProductName" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Name of product" style="margin-left: 10%;">
  </label>
  </h2>
 
  <label>
  <h2 style="font-size= 16"><b>Description</b>
  <input name="Description" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Description" style="margin-left: 13.5%;"  >
  </label>
  </h2>
	  
	 <label>
  <h2 style="font-size= 16"><b>Quantity</b>
  <input name="Quantity" type="text" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Quantity of Products bought"  style="margin-left: 16.6%;" >
  </label>
  </h2>
	  
	 
	 
 <label>
  <h2 style="font-size= 16"><b>Cost</b>
  <input name="Cost" type="decimal" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Cost of product"style="margin-left: 22.1%;" >
  </label>
  </h2>
  
   <label>
  <h2 style="font-size= 16"><b>Taxes</b>
  <input name="Taxes" type="decimal" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="taxes" style="margin-left: 20.4%;">
  </label>
  </h2>
  
  
   <label>
  <h2 style="font-size= 16"><b>Total Cost</b>
  <input name="TotalCost" type="decimal" size="25" maxlength="30"  autofocus  autocomplete="on" 
  placeholder="Total cost" style="margin-left: 14%;">
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

 $tablename = "invoices";
  $col2 = "ProductName";
  $col3 = "Description";
  $col4 = "Quantity";
  $col5 = "Cost";
  $col6 = "Taxes";
  $col7 = "TotalCost";
  $name = isset($_POST["ProductName"]);
  $description = isset($_POST["Description"]);
  $quantity = isset($_POST["Quantity"]);
  $cost  = isset($_POST["Cost"]);
  $taxes = isset($_POST["Taxes"]);
  $totalcost = isset($_POST["TotalCost"]);
 
  $postQuery = "INSERT INTO invoices (ProductName, Description, Quantity, Cost, Taxes, TotalCost )
        VALUES ('$name', '$description', ' $quantity', '$cost', '$taxes', '$totalcost')";
		
		
		
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












	
</div>
</body>
</html>