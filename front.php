<!DOCTYPE html>
<html>
	<head>
		<title> Create your singature</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<meta name="robots" content="noindex, nofollow"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
<body>
<script>
    function addfacebook(){ 
		var facebook = document.getElementById("facebook");
		var s =facebook.value;
		document.getElementById("fbimg").style.display= "inline";
		document.getElementById("fb").href= s;
    }	  
	function addtwitter(){ 
		var twitter = document.getElementById("twitter");
		var s =twitter.value;
		document.getElementById("twimg").style.display= "inline";
		document.getElementById("tw").href=s;
    }  
</script>
<form action = "<?php $_PHP_SELF ?>" method = "post"  enctype="multipart/form-data">
<div id="main-wrap">
	<div id="sidebar">
		Select image to upload:
		<input type="file" name="imagefile" />
		<input type="submit" name="submitimage" value="upload image"/><br/>
			
		<label>First Name</label>
		<input type="text" name="firstname" id="txtbox1"  onkeyUp="document.getElementById('fname').innerHTML = this.value"  placeholder="Your first name..">
		
		<label>Last Name</label>
		<input type="text"  name="lastname" id="txtbox1" onkeyUp="document.getElementById('lname').innerHTML = this.value"  placeholder="Your last name.."></br>
		
		<label>Post Name</label>
		<input type="text"  name="postname" id="txtbox1" onkeyUp="document.getElementById('pname').innerHTML = this.value" placeholder="Your post name .."><br/>
		
		<label for="oname">Oragnization Name</label>
		<input type="text" name="oragnizationname" id="txtbox" onkeyUp="document.getElementById('oname').innerHTML = this.value"  placeholder="Your Oranginzation name..">
						
		<label for="Address1">Address Line1</label>
		<input type="text"  name="address1" id="txtbox" onkeyUp="document.getElementById('add1').innerHTML = this.value" placeholder=" Your Address..">
				
		<label for="Address2">Address Line2</label>
		<input type="text"  name="address2" id="txtbox" onkeyUp="document.getElementById('add2').innerHTML = this.value"  placeholder=" Your Address..">
			
		<label>City</label>
		<input type="text"  name="city" id="txtbox1" onkeyUp="document.getElementById('city').innerHTML = this.value"  placeholder="ex:pune..">
			
		<label>Pincode</label>
		<input type="text"  name="pin" id="txtbox1" onkeyUp="document.getElementById('pin').innerHTML = this.value"  placeholder=" Ex:422005."></br>
		
		<label>State</label>
		<input type="text"  name="state" id="txtbox1"onkeyUp="document.getElementById('state').innerHTML = this.value"  placeholder=" ex:Maharastra..">
			
		<label>Country</label>
		<input type="text"  name="con" id="txtbox1" onkeyUp="document.getElementById('con').innerHTML = this.value"  placeholder=" ex:india.."><br/>
					
		<label>Email</label>
		<input type="text"  name="email" id="txtbox" onkeyUp="document.getElementById('email').innerHTML = this.value"  placeholder="(ex:abc@example.com)">
							
		<label>Website </label>
		<input type="text" name="website" id="txtbox" onkeyUp="document.getElementById('web').innerHTML = this.value"  placeholder="(ex:http://www.abc.io)"><br/>
			
		<label>Contact</label>
		<input type="text" name="contact" id="txtbox1" onkeyUp="document.getElementById('contact').innerHTML = this.value"  placeholder=" +91 9865214780">
			
		<label>Office No</label>
		<input type="text"  name="on" id="txtbox1" onkeyUp="document.getElementById('ocontact').innerHTML = this.value" placeholder=" Your Contact.."><br/>
			
		<label for="Working Days">Working Hours</label></br>
		<label for="day">Day:<label>
		<input type="text" name="day1" id="txtboxs"onkeyUp="document.getElementById('day1').innerHTML = this.value"  >
		<label for="TO">To</label>
		<input type="text" name="day2" id="txtboxs" onkeyUp="document.getElementById('day2').innerHTML = this.value" >&nbsp; &nbsp;
				
		<label for="Tuesday">Time:</label>
		<input type="text" name="time1" onkeyUp="document.getElementById('time1').innerHTML = this.value" id="txtboxs" >
		<label for="TO">To</label>
		<input type="text" name="time2" onkeyUp="document.getElementById('time2').innerHTML = this.value"  id="txtboxs" ></br></br>
			
		<label>Facebook Profile Url</label>
		<input class="inline" id="facebook" type="text" name="facebook" placeholder="https://www.facebook.com/profile.php?id=1000" onKeyup="addfacebook()">
 
		<label>Twitter Profile Url</label>
		<input class="inline" id="twitter" type="text" name="twitter" placeholder="https://www.twitter.com/profile" onKeyup="addtwitter()" href="#"></br></br>
		
		<a class="button"  name="submit" href="#popup1">Create Your Signature</a>
		<div id="popup1" class="overlay">
			<div class="popup">
				<a class="close" href="#">×</a>
				<div class="content">
				</div>	
		</div>
	</div>		
</div>		
	<div id="content-wrap">
	<?php
		require('upload.php');  
		$firstname = "";
		$lastname= "";
		$post="";
		$oragnizationname = "";
		$address1 = "";
		$address2 ="";
		$city = "";
		$pin="";
		$state="";
		$con="";
		$email = ""; 
		$website = "";
		$contact = "";
		$on="";
		$day1="";
		$day2="";
		$time1="";
		$time2="";
		if (isset($_POST['submit'])) {
			$firstname = $_POST['firstname'];
			$lastname= $_POST['lastname'];
			$post=$_POST['postname'];
			$oragnizationname = $_POST['oragnizationname'];
			$address1 = $_POST['address1'];
			$address2 = $_POST['address2'];
			$city=$_POST['city'];
			$pin=$_POST['pin'];
			$state=$_POST['state'];
			$con=$_POST['con'];
			$on=$_POST['on'];
			$email = $_POST['email'];
			$website = $_POST['website'];	
			$contact = $_POST['contact'];	 
			$day1=$_POST['day1'];
			$day2=$_POST['day2'];
			$time1=$_POST['time1'];
			$time2=$_POST['time2'];
		}
		echo "<img src='logo.png' height=50px width=50px /><br/>";
		echo  '	<span id="fname"></span><span style= "color:green;">'.$firstname.'</span>'; 
		echo "\n\n";
		echo  '<span id="lname"></span><span style= "color:green;">'.$lastname. '</span></br>'; 
		echo '<span id="pname"></span>'.$post."<br/>";
		echo '<span id="oname"></span>'. $oragnizationname. "<br />";
		echo  '<span id="add1"></span>'.$address1. "<br />";
		echo  '<span id="add2"></span>'.$address2. "<br />";
		echo  '<span id="city"></span>'.$city. "<br />";
		echo  '	<span id="pin"></span>'.$pin. "<br />";
		echo  '	<span id="state"></span>'.$state. "<br />";
		echo  '<span id="con"></span>'.$con. "<br />";
		echo 'Email:&nbsp<span id="email"></span>' .$email. "<br />";
		echo "Website: &nbsp<span id='web'></span>".$website. "<br />";
		echo  "Contact:&nbsp <span id='contact'></span>".$contact. "<br />"; 
		echo  "Office:&nbsp<span id='ocontact'></span>".$on."<br/><br/>";
		echo '<span id="day1"></span>'.$day1."&nbsp To &nbsp<span id='day2'></span>".$day2."<br />";
		echo '<span id="time1"></span>'.$time1."&nbsp To &nbsp<span id='time2'></span>".$time2."<br /><br/>";
		echo '<img id="fbimg" width="16px" style="margin-bottom:2px; border:none; display:none;" height="16px" src="/Myemail/fb.png" alt="Facebook">';
		echo '&nbsp;<img id="twimg" width="16px" style="margin-bottom:2px; border:none; display:none;" height="16px" src="/Myemail/tw.png" alt="twitter">';
	?>
	</div> 
</div>	
</form>
</body>
</html>









