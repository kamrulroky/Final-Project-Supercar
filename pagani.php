<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pagani</title>
<link href="Drivetrain.css" rel="stylesheet" type="text/css" />
<style>
p{
float:right;
font-family:Calibri;
}
</style>
</Head>
<body>
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
		</div><br><br>
		
		<img style= width="450" height="290" src="pagani1/pagani-huayra-in-transformers-4-5.jpg"/>
		<img style= width="450" height="290" src="pagani1/Pagani_Huayra_Geneva2011Live_04.jpg"/>
		<p style=""><b>PAGANI HUAYRA</b></p>
		<!--Cars-->
		<?php
					
		 $link=mysqli_connect("localhost","root","");

	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="SELECT * FROM cars WHERE carmodelName='Pagani Huarya'";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"left\" border=\"2\" width=\"70%\">
		<tr>
		<td><b>Car Name</b></td> <td><b>Manufacturer</b></td> <td><b>Type</b></td><td><b>Price</b></td><td><b>Importer</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td></tr>";
	} echo "</table>";
	 ?>
		
		<?php
					
		 $link=mysqli_connect("localhost","root","");

	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="SELECT * FROM car_configuration WHERE car_configuration.carmodelName='Pagani Huarya'";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"left\" border=\"2\" width=\"70%\">
		<tr>
		<td><b>Engine type</b></td> <td><b>Cylinder</b></td><td><b>Top Speed</b></td><td><b>HP</b></td><td><b>Transmission System</b></td><td><b>Fuel Economy</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td><td>".$result[6]."</td></tr>";
	} echo "</table>";
	 ?><br><br><br><br><br><br><br><hr>
		
		
		<img style= width="400" height="290" src="pagani1/pagani tricolore.jpg"/>
		<img style= width="400" height="290" src="pagani1/tricolore back.jpg"/>
		<p style=""><b>PAGANI ZONDA TRICOLORE</b></p>
		<!--Cars-->
		<?php
					
		 $link=mysqli_connect("localhost","root","");

	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="SELECT * FROM cars WHERE carmodelName=' Zonda tricolor'";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"left\" border=\"2\" width=\"70%\">
		<tr>
		<td><b>Car Name</b></td> <td><b>Manufacturer</b></td> <td><b>Type</b></td><td><b>Price</b></td><td><b>Importer</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td></tr>";
	} echo "</table>";
	 ?>
		
		<?php
					
		 $link=mysqli_connect("localhost","root","");

	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="SELECT * FROM car_configuration WHERE car_configuration.carmodelName='Zonda tricolore'";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"left\" border=\"2\" width=\"70%\">
		<tr>
		<td><b>Engine type</b></td> <td><b>Cylinder</b></td><td><b>Top Speed</b></td><td><b>HP</b></td><td><b>Transmission System</b></td><td><b>Fuel Economy</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td><td>".$result[6]."</td></tr>";
	} echo "</table>";
	 ?><br><br><br><br><br><br><br><hr>
		
		
		
		<img style= width="400" height="290" src="pagani1/Pagani-Zonda_Cinque_Roadster_2010_1600x1200_wallpaper_01.jpg"/>
		<img style= width="400" height="290" src="pagani1/Pagani-Zonda_Cinque_Roadster_back_2010_1600x1200_wallpaper_02.jpg"/>
		<p style=""><b>PAGANI ZONDA CINQUE ROADSTER</b></p>
		<!--Cars-->
		<?php
					
		 $link=mysqli_connect("localhost","root","");

	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="SELECT * FROM cars WHERE carmodelName='Pagani zonda'";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"left\" border=\"2\" width=\"70%\">
		<tr>
		<td><b>Car Name</b></td> <td><b>Manufacturer</b></td> <td><b>Type</b></td><td><b>Price</b></td><td><b>Importer</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td></tr>";
	} echo "</table>";
	 ?>
		
		<?php
					
		 $link=mysqli_connect("localhost","root","");

	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="SELECT * FROM car_configuration WHERE car_configuration.carmodelName='Pagani zonda'";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"left\" border=\"2\" width=\"70%\">
		<tr>
		<td><b>Engine type</b></td> <td><b>Cylinder</b></td><td><b>Top Speed</b></td><td><b>HP</b></td><td><b>Transmission System</b></td><td><b>Fuel Economy</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[1]."</td><td>".$result[2]."</td><td>".$result[3]."</td><td>".$result[4]."</td><td>".$result[5]."</td><td>".$result[6]."</td></tr>";
	} echo "</table>";
	 ?><br><br><br><br><br><br><br><br>
		
		
		<div class="footer">
                    	<div class="footer_text">
                    	<p>Information Techonology has Advanced to a level where everything is now a click away.Buying cars from carshowroom is lengthy.even if you went to a Carshowroom you dont have enough liberty to search about that car but online car buying sites such as ours gives you the absolute information on the car we are selling and a link to prove our informations.Additionally You can purchase them online and we take all the hassle for you and make sure you get your car at exact date.</p>
                        </div>
						
										     <?php
		 $link=mysqli_connect("localhost","root","");

	 mysqli_select_db($link,"supercar") or die ("Cannot select the database!");
	 $query="SELECT * FROM importer";

		  $resource=mysqli_query($link,$query);
		  echo" <table align=\"right\" border=\"0\" width=\"70%\">
		<td><b>Importer Name</b></td><td><b>Importer Address</b></td>";
while($result=mysqli_fetch_array($resource))
	{
	echo "<tr><td>".$result[0]."</td><td>".$result[1]."</td></tr>";
	}
	echo "</table>";
	 ?>

						
                        	<div class="footer_end">
                            	<ul>
                                	<li><a href="#">Home</a></li>
                                    <li><a href="#">Support</a></li>
                                
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Copyrights</a></li>
                                    
                                    </ul><br />
									
                            </div>
                   
		
		
		
		
		
		</body>
		</html>
		