<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
<link href="Drivetrain.css" rel="stylesheet" type="text/css" />
<style>
h1
{

color:gray;
text-align:center;
background-color:;
text-decoration:underline;
font-size:20px;
font-family:lucida sans;
}

div.ex
{
background-color:;
width:400px;

border:2px solid black;
margin:10px 450px;
}


</style>
</head>

<body background="project/purple_texture-wallpaper-1366x768.jpg">
<div style="width:100%;">

<div class="header">
    	<div class="header_logo">
    		<img style ="margin:15px 15px;"width="300" height="70" src="image/Drivetrainbd.jpg"/>
        </div>
   	  <div class="header_nav">
            	<div class="header_nav_bar1">
                	<a href="supercar.php"><img style="margin:20px 20px;" src="image/home.fw.png" /></a>
        		</div>
                
                <div class="header_nav_bar5">
                	<a href="cart.php"><img style="margin:20px 20px;" src="image/cart.fw.png" /></a>
                </div>
				<div class="header_nav_bar4">
                	<a href="comingsoon.html"><img style="margin:8px 8px;"width="73"height="73" src="project/coming-soon.png" /></a>
                </div>
		</div>
        	<div class="header_nav_search">
        	<input type="search"/>
			
            </div>
			</div>
			<table align="center" cellpadding="0" bgcolor="White" width="800" border="0">
  <tr>
    <td><h1 align="center" class="heading"><img src="purple_texture-wallpaper-1366x768.jpg" width="747" height="58" alt="Registration" /></h1>
  <p align="center">
    <?php 
	 $name=$_REQUEST['name'];
	 $address=$_REQUEST['Address']; 
	 $contact=$_REQUEST['Contact'];
	 $email=$_REQUEST['Email'];
	 $nid=$_REQUEST['nID'];
	 
	 $link=mysqli_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="INSERT INTO customer (Name, Address, C_Number, Email, n_ID) values('".$name."', '".$address."', '".$contact."', '".$email."', '".$nid."')";
		
		  if(!mysqli_query($link,$query))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 {
		  echo "Your record saved successfully!";}
		  $query="SELECT * FROM customer ";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"left\" border=\"2\" width=\"70%\">
		<tr>
		<td><b>Customer Name</b></td> <td><b>Address</b></td> <td><b>Contact</b></td><td><b>Email</b></td><td><b>National ID</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td></tr>";
	} echo "</table>";
	 
	 $cname=$_REQUEST['c_name']; 
	 $cno=$_REQUEST['c_number'];
	 
	 $link=mysqli_connect("localhost","root","") or die("Cannot Connect to the database!");
	
	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="INSERT INTO payment_system (cardName,cardNo) values('".$cname."', '".$cno."')";
		
		  if(!mysqli_query($link,$query))
		  {die ("An unexpected error occured while saving the record, Please try again!");}
		  else
		 
		  $query="SELECT * FROM payment_system ";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"left\" border=\"2\" width=\"70%\">
		<tr>
		<td><b>Card Number</b></td> <td><b>Card Name</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td></tr>";
	} echo "</table>";
	 ?>

      </p>
			
			</body>
			</html>