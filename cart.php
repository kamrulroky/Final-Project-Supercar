<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cart</title>
<link href="Drivetrain.css" rel="stylesheet" type="text/css" />
<style>
h1
{

color:white;
text-align:center;
background-color:;
text-decoration:underline;
font-size:20px;
font-family:Franklin Gothic Book;
}

div.ex
{
background-color:;
width:400px;

border:1px Solid black;
margin:10px 450px;
}
.labelClass {

                display: inline-block;
                width: 40px;
                margin-right: 88px;
                margin-top: 5px;

            }

                
            

</style>
</head>

<body background="project/very-dark-pattern.jpg">
<div style="width:100%;">
<div id="wrapper">

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
			
			<div class="ex">
			<h1>Customer info</h1>
			<form id="form1" name="form1" method="get" action="cart2.php">
			<p style="font-family:Calibiri; font-size:17px; text-align:; color:white"><label class="labelClass"><b>Name:</b></label><input type="text" name="name"><br></p>
			<p style="font-family:Calibiri; font-size:17px; text-align:left; color:white"><label class="labelClass"><b>Address:</b></label><input type="text" name="Address"><br></p>
			<p style="font-family:Calibiri; font-size:17px; text-align:left; color:white"><b><label class="labelClass">Contact number:</label></b><input type="text" name="Contact"><br></p>
			<p style="font-family:Calibiri; font-size:17px; text-align:left; color:white"><label class="labelClass"><b>Email:</b></label><input type="text" name="Email"><br></p>
			<p style="font-family:Calibiri; font-size:17px; text-align:left; color:white"><label class="labelClass"><b>National ID:</b></label> <input type="text" name="nID"><br></p>
			<p style="text-align:center;"><input type="submit" value="Submit"></p>
			
			<p style="font-family:lucida console; font-size:10px; text-align:left; color:white">*Do not fullfil this info card if you are not from BANGLADESH</p>
			 <p style="font-family:lucida console; font-size:10px; text-align:left; color:white">*There will be a background check on you</p>
			</div>
			
			<div class="ex">
			<h1>Purchase info</h1>
		
			<p style="font-family:Arial; font-size:17px; text-align:left; color:white"><label class="labelClass">Card Name:</label><input type="text" name="c_name"><br></p>
			<p style="font-family:Arial; font-size:17px; text-align:left; color:white"><label class="labelClass">Card Number:</label><input type="text" name="c_number"><br></p>
			 <p style="text-align:center;"><input type="submit" value="Submit"></p>
			 <p style="font-family:lucida console; font-size:10px; text-align:left; color:white">*Do not fullfil this info card if you are not from BANGLADESH</p>
			 <p style="font-family:lucida console; font-size:10px; text-align:left; color:white">*There will be a background check on you</p>
	
			</div>
			
			</form>
			</div>
			</body>
			</html>
