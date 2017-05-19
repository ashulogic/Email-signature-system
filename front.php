<!DOCTYPE html>
<html>
	<head>
		<title> Create your singature</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
    </head>
<body>
<div id="header">
	<h1>Create Your Signature</h1>
</div>
<form action = "<?php $_PHP_SELF ?>" method = "post"  enctype="multipart/form-data">
	<div id="main-wrap">
		<div id="sidebar">	
			Select image to upload:
			<input type="file" name="imagefile" />
			<input type="submit" name="submitimage" value="upload image"/><br/>
			<label for="fname">First Name</label>
			<input type="text" name="firstname" id="txtbox" placeholder="Your first name..">

			<label for="lname">Last Name</label>
			<input type="text"  name="lastname" id="txtbox" placeholder="Your last name..">
				
			<label for="oname">Oragnization Name</label>
			<input type="text" name="oragnizationname" id="txtbox" placeholder="Your Oranginzation name..">
			
			<label for="postname">Post Name</label>
			<input type="text"  name="postname" id="txtbox"placeholder="Your post name ..">
		  
			<label for="Address">Address</label>
			<input type="text"  name="address" id="txtbox" placeholder=" Your Address..">
					
			<label for="Email">Email</label>
			<input type="text"  name="email" id="txtbox" placeholder=" Your Email..">
							
			<label for="Website">Website</label>
			<input type="text" name="website" id="txtbox" placeholder=" Your Website..">
		  
			<label for="Contact">Contact</label>
			<input type="text" name="contact" id="txtbox" placeholder=" Your Contact">
						  
			<label for="Working Days">Working Hours</label></br>
			<label for="monday">Monday:</label>
			<input type="text" name="tm" id="txtboxs" placeholder="1">
			<label for="TO">To</label>
			<input type="text" name="tm1" id="txtboxs" placeholder="1">
			&nbsp; &nbsp;
			
			<label for="Tuesday">Tuesday:</label>
			<input type="text" name="tues" id="txtboxs" placeholder="1">
			<label for="TO">To</label>
			<input type="text" name="tues1" id="txtboxs" placeholder="1">
			
			</br>
			<label for="wed">Wednesday:</label>
			<input type="text" name="w" id="txtboxs" placeholder="1">	
			<label for="TO">To</label>
			<input type="text" name="w1" id="txtboxs" placeholder="1">
			
			&nbsp; &nbsp;
			
			<label for="thus">Thusday:</label>
			<input type="text" name="thus" id="txtboxs" placeholder="1">
			<label for="TO">To</label>
			<input type="text" name="thus1" id="txtboxs" placeholder="1">
			
			</br>
			<label for="fri">Friday:</label>
			<input type="text" name="fri" id="txtboxs" placeholder="1">
			<label for="TO">To</label>
			<input type="text" name="fri1" id="txtboxs" placeholder="1">
			
			&nbsp; &nbsp;
			<label for="sat">Saturday:</label>
			<input type="text" name="sat" id="txtboxs" placeholder="1">
			<label for="TO">To</label>
			<input type="text" name="sat1" id="txtboxs" placeholder="1">
				
			</br>
			<label for="fri">Sunday:</label>
			<input type="text" name="sun" id="txtboxs" placeholder="1">
			<label for="TO">To</label>
			<input type="text" name="sun1" id="txtboxs" placeholder="1">
				
			</br>
			<input type="submit" name="submit" value="Create Your Signature">
		</div>	
	<div id="content-wrap">
	<?php
		require('upload.php'); 
		$firstname = "First";
		$lastname= "Last";
		$post="CEO";
		$oragnizationname = "Linkjet Technologies";
		$address = "T-5 NSB Canada Corner Nashik 5";
		$email = "hello@linkjet.io";
		$website = "http://linkjet.io";	
		$contact = "+91 7410020011";
		$tm="9:30am";
		$tm1="6:30pm";
		$tues="9:30am";
		$tues1="6:30pm";
		$w="9:30am";
		$w1="6:30pm";
		$thus="9:30am";
		$thus1="6:30pm";
		$fri="9:30am";
		$fri1="6:30pm";
		$sat="Closed";
		$sat1="Closed";
		$sun="Closed";
		$sun1="Closed";  
		if (isset($_POST['submit'])) {
			$firstname = $_POST['firstname'];
			$lastname= $_POST['lastname'];
			$post=$_POST['postname'];
			$oragnizationname = $_POST['oragnizationname'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$website = $_POST['website'];	
			$contact = $_POST['contact'];	 
			$tm=$_POST['tm'];
			$tm1=$_POST['tm1'];
			$tues=$_POST['tues'];
			$tues1=$_POST['tues1'];
			$w=$_POST['w'];
			$w1=$_POST['w1'];
			$thus=$_POST['thus'];
			$thus1=$_POST['thus1'];
			$fri=$_POST['fri'];
			$fri1=$_POST['fri1'];
			$sat=$_POST['sat'];
			$sat1=$_POST['sat1'];
			$sun=$_POST['sun'];
			$sun1=$_POST['sun1'];     
		}
		
		echo  $firstname; 
		echo "\n\n";
		echo  $lastname. "<br />"; 
		echo $post."<br/>";
		echo $oragnizationname. "<br />";
		echo  $address. "<br />";
		echo "Email &nbsp  &nbsp :&nbsp ".$email. "<br />";
		echo "Website &nbsp : &nbsp ".$website. "<br />";
		echo  "Contact &nbsp :&nbsp ".$contact. "<br /> <br/>"; 
		echo "Monday &nbsp &nbsp &nbsp:&nbsp &nbsp".$tm."&nbsp To &nbsp".$tm1. "<br />";
		echo "Tuesday &nbsp &nbsp &nbsp:&nbsp &nbsp".$tues."&nbsp To &nbsp".$tues1."<br />";
		echo "Wednesday &nbsp:&nbsp &nbsp".$w."&nbsp To &nbsp".$w1. "<br />";
		echo "Thusday  &nbsp  &nbsp &nbsp:&nbsp &nbsp".$thus."&nbsp To &nbsp".$thus1."<br />";
		echo "Friday \t &nbsp &nbsp &nbsp&nbsp &nbsp:&nbsp &nbsp".$fri."&nbsp To &nbsp".$fri1. "<br />";
		echo "Saturday &nbsp &nbsp &nbsp:&nbsp &nbsp".$sat."&nbsp To &nbsp".$sat1."<br/>";
		echo "Sunday &nbsp &nbsp &nbsp &nbsp:&nbsp &nbsp".$sun."&nbsp To &nbsp".$sun1;
	?>
	</div>
</div>	
</form>
</body>
</html>







