<?php
	require('upload.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title> Create your singature</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<meta name="robots" content="noindex, nofollow"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <meta name="robots" content="noindex, nofollow"> 
		<script src="social.js"></script> 
	</head>
<body>
<div id="header">
	<h1>Create Your Signature</h1>
</div>
<form action = "<?php $_PHP_SELF ?>" method = "post"  enctype="multipart/form-data">
<div id="main-wrap">
	<div id="sidebar">
	<div class="table-responsive">          
	<table class="table">
	<thead>
		<tr>
       		<th><input type="text" name="firstname"  onkeyUp="document.getElementById('fname').innerHTML = this.value"  placeholder="First Name..">
			</th>
			<th><input type="text"  name="lastname"  onkeyUp="document.getElementById('lname').innerHTML = this.value"  placeholder="Last Name.."></br>
			</th>
        </tr>
    </thead>
 		<tr>
			<td><input type="text"  name="postname"  onkeyUp="document.getElementById('pname').innerHTML = this.value" placeholder="Desgination.."><br/>
			</td>
			<td><input type="text" name="oragnizationname"  onkeyUp="document.getElementById('oname').innerHTML = this.value"  placeholder="Oranginzation Name..">
			</td>          
        </tr>
	    <tr>
			<td colspan="2"><input type="text"  name="address1"  onkeyUp="document.getElementById('add1').innerHTML = this.value" placeholder="Address Line1..">
			</td>
		</tr>
	    <tr>
			<td colspan="2"><input type="text"  name="address2"  onkeyUp="document.getElementById('add2').innerHTML = this.value"  placeholder="Address Line2">
     		</td>
		</tr>		  
        <tr>
            <td><input type="text"  name="city" onkeyUp="document.getElementById('city').innerHTML = this.value"  placeholder="City(Ex:Pune)">
			</td>
			<td><input type="text"  name="pin"  onkeyUp="document.getElementById('pin').innerHTML = this.value"  placeholder="Pincode(Ex:422005)"></br>
			</td>      
        </tr>    
        <tr>
			<td><input type="text"  name="state" onkeyUp="document.getElementById('state').innerHTML = this.value"  placeholder=" State(Ex:Maharastra)">
			</td>
			<td><input type="text"  name="country"  onkeyUp="document.getElementById('country').innerHTML = this.value"  placeholder=" Country(Ex:India)"><br/>
			</td>        
  		</tr>
        <tr>
			<td><input type="text"  name="email"  onkeyUp="document.getElementById('email').innerHTML = this.value"  placeholder="Email(Ex:abc@example.com)"></td>
			<td><input type="text" name="website"  onkeyUp="document.getElementById('web').innerHTML = this.value"  placeholder="Website(Ex:http://www.abc.io)">
    		</td>      
        </tr>
        <tr>
			<td><input type="text"  name="contact"  onkeyUp="document.getElementById('contact').innerHTML = this.value"  placeholder="Mobile(Ex:9685421370">
			</td>
			<td><input type="text"  name="on"  onkeyUp="document.getElementById('ocontact').innerHTML = this.value" placeholder="Landline(Ex:0253 4587452">
			</td>        
		</tr>
	    <tr>
			<td colspan="2">
			<label>Working Hours</label>
			</td>
		</tr>
		<tr>	
			<td>
			<label>Days</label>
			</td>	
			<td><label>Time</label></td>			
		</tr>
		<tr>	  
            <td><input type="text" name="day1" onkeyUp="document.getElementById('day1').innerHTML = this.value" placeholder="Monday to Sataurday" >
			</td>
			<td><input type="text" name="time1" onkeyUp="document.getElementById('time1').innerHTML = this.value" placeholder="9:30am to 10:30pm" >
			</td>      
		</tr>
		<tr>
		</tr>				
		<tr>
			<td colspan="2">
			<label>Facebook URL</label>
			</td>
		</tr>
		<tr> 
			<td colspan="2"><input id="facebook" type="text" name="facebook" placeholder="https://www.facebook.com/profile.php?id=1000" onKeyup="addfacebook()">
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<label>Twitter URL</label>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input  id="twitter" type="text" name="twitter" placeholder="https://www.twitter.com/profile" onKeyup="addtwitter()" href="#"></br></br>
			</td>
		</tr>		
		<tr>
			<td colspan="2">
			<label>Google URL</label>
			</td>
		</tr>
		<tr>
			<td colspan="2"><input  id="google" type="text" name="google" placeholder="https://www.google.com/profile.php?id=1000" onKeyup="addgoogle()">
			</td>
		</tr>	
   		<tr>
			<td colspan="2">
			<label>Linkdin URL</label>	
			</td>
		</tr>
		<tr>
			<td colspan="2"><input  id="link" type="text" name="link" placeholder="https://www.linkdin.com/profile.php?id=1000" onKeyup="addlink()">
			</td>
		</tr>	
		<tr>
			<td colspan="2">
			<label>Instragram URL</label>
			</td>
		</tr>
		<tr> 
			<td colspan="2"><input  id="instra" type="text" name="instra" placeholder="https://www.instragram.com/profile.php?id=1000" onKeyup="addinstra()">
			</td>
		</tr>
		<tr>
			<td><input type="file" name="imagefile" />
			</td>
			<td><input type="submit" name="submitimage" value="upload image"/>
			</td>
		</tr>		
		<tr>
			<td colspan="2"><input type="submit"  name="submit" value="Create Your Signature">
			</td>	
		</tr>
	</table>			
	</div>
	</div>
	<?php
		$firstname = "";
		$lastname= "";
		$post="";
		$oragnizationname = "";
		$address1 = "";
		$address2 ="";
		$city = "";
		$pin="";
		$state="";
		$country="";
		$email = ""; 
		$website = "";
		$contact = "";
		$on="";
		$day1="";
		$time1="";
		$facebook="";
		$twitter="";
		$google="";
		$instra="";
		$link="";
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
			$country=$_POST['country'];
			$email = $_POST['email'];
			$website = $_POST['website'];	
			$contact = $_POST['contact'];
			$on=$_POST['on'];			
			$day1=$_POST['day1'];
			$time1=$_POST['time1'];
			$facebook=$_POST['facebook'];
			$twitter=$_POST['twitter'];
			$google=$_POST['google'];
			$link=$_POST['link'];
			$instra=$_POST['instra'];
		}
	?>
	<div id="content-wrap">
    <div id="left_col">
        <div class="center">
			<?php 
				echo "<img src='logo.png' height=100px; width=150px;><br/><br/>";
			?>
			<?php
			if($facebook !== '') {
				echo '<a id="fb" href="'.$facebook.'">
				<img id="fbimg" width="40px" style="margin-bottom:5px; border:none;" height="40px"  src="/Myemail/fb.png" alt="Facebook"></a></br>';
			}
			if($twitter !==''){
		    echo '<a id="tw" href="'.$twitter.'"><img id="twimg" width="40px" style="margin-bottom:2px; border:none; " height="40px" src="/Myemail/tw.png" alt="twitter"></a>';
			}
			if($google !==''){	
			echo '<a id="g" href="'.$google.'"><img id="gimg" width="40px" style="margin-bottom:2px; border:none; " height="40px" src="/Myemail/g.png" alt="google"></a>';
			}
			if($link !=='')	{
			echo '<a id="l" href="'.$link.'"><img id="limg" width="40px" style="margin-bottom:2px; border:none; " height="40px" src="/Myemail/link.png" alt="link"></a>';
			}
			if($instra !==''){
				echo '<a id="in" href= "'.$instra.'"><img id="inimg" width="40px" style="margin-bottom:2px; border:none; " height="40px" src="/Myemail/in.png" alt="instra"></a>';
			}?>
			<?php echo '<a id="fb" href=""><img id="fbimg" width="40px" style="margin-bottom:5px; border:none; display:none" height="40px"  src="/Myemail/fb.png" alt="Facebook"></a></br>';?>
			<?php
			echo '<a id="tw" href=""><img id="twimg" width="40px" style="margin-bottom:2px; border:none; display:none;" height="40px" src="/Myemail/tw.png" alt="twitter"></a>';
			echo '<a id="g" href=""><img id="gimg" width="40px" style="margin-bottom:2px; border:none; display:none;" height="40px" src="/Myemail/g.png" alt="google"></a>';
			echo '<a id="l" href=""><img id="limg" width="40px" style="margin-bottom:2px; border:none; display:none;" height="40px" src="/Myemail/link.png" alt="link"></a>';
			echo '<a id="in" href= ""><img id="inimg" width="40px" style="margin-bottom:2px; border:none; display:none;" height="40px" src="/Myemail/in.png" alt="instra"></a>';
			?>
		</div>
	</div>   
    <div id="right_col">  
		<p>
			<span style= "color:#4B0082;">
			<span id="fname"></span><?php echo $firstname; ?>
			<span id="lname"></span><?php echo $lastname;  ?>
			</span>
		</p>
		<h4>
			<span id="pname"></span><?php echo $post;?></br>
			<span id="oname"></span><?php echo  $oragnizationname;?></br>
			<span id="add1"></span><?php echo $address1. "</br>";?>
			<span id="add2"></span><?php echo $address2. "</br>";?>
			<span id="city"></span><?php echo $city. "</br>"; ?>
			<span id="pin"></span><?php echo $pin. "</br>";?>
			<span id="state"></span><?php echo $state. "</br>";?>
			<span id="country"></span><?php echo $country. "</br>";?>
			<span id="email"></span><?php echo $email. "</br>";?>
			<span id='web'></span><?php echo $website. "</br>";?>
			<span id='contact'></span><?php echo $contact. "</br>";?>
			<span id='ocontact'></span><?php echo $on."</br></br>";?>
			<span id="day1"></span><?php echo $day1;echo "</br>";?>
			<span id="time1"></span><?php echo $time1.'';?>
		</h4>	
	</div>
</div>	
</form>
</body>
</html>









