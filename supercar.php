<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Drivetrain</title>
<link href="Drivetrain.css" rel="stylesheet" type="text/css" />



</head>

<body>
<div style="width:100%;">
<!--Header-->
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
			<!--Header end-->
			<!--Main body-->
			<p style="text-transform:; font-size:24px; font-weight:bold;font-family:'Lucida Sans', Arial, sans-serif;">
				Drivetrain|Bangladesh is the first Importer company in bangladesh that solely imports Supercars.These cars are the finest of its kind and the Automotive companies who builds them are the finest in the World.
			</p>
			<P style="font-family:'Franklin Gothic Book',Arial; font-size:20px; text-align:center;">
			<u>Click on the images below</u> to browse into your desired car company and find yourself a car that suits your attitude.
			</p>
			<div>
			<a href="ferrari.php"><img style="margin-left:59px;" width="400"height="260" src="project/Ferrari Logo.jpg"/></a>
			<a href="lamborghini.php"><img style="" width="400"height="260" src="project/Lamborghini.jpg"/></a>
			<a href="pagani.php"><img style="" width="400"height="260" src="project/Pagani.jpg"/></a>
			<a href="audi.php"><img style="margin-left:59px" width="400"height="260" src="project/audi.jpg"/></a>
			<a href="Aston martin.php"><img style="" width="400"height="260" src="project/Aston martin.jpg"/></a>
			<a href="mclaren.php"><img style="" width="400"height="260" src="project/Mclaren.jpg"/></a>
			</div>
			<!--main body end-->
			<!--Footer-->
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
									<a href="admin.php"><p style="margin-left:800px;color:white"><u>Admin</u></p></a>
                                    <p>©copyright2010-2014<br />www.drivetrainbd.com</p>
                            </div>
                    </div>
	
				
			
			
	</div>
</body>
</html>