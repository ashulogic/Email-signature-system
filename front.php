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
	</head>
<body>
<div id="header">
	<h1>Create Your Signature</h1>
</div>
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
	function addgoogle(){ 
		var google = document.getElementById("g");
		var s =google.value;
		document.getElementById("g").style.display= "inline";
		document.getElementById("g").href=s;
    }  
	function addlink(){ 
		var link = document.getElementById("l");
		var s =link.value;
		document.getElementById("l").style.display= "inline";
		document.getElementById("l").href=s;
    }  
    function addinstra(){ 
		var instra = document.getElementById("in");
		var s =instra.value;
		document.getElementById("in").style.display= "inline";
		document.getElementById("in").href=s;
    }  
</script>
<form action = "<?php $_PHP_SELF ?>" method = "post"  enctype="multipart/form-data">
<div id="main-wrap">
	<div id="sidebar">
	<div class="table-responsive">          
	<table class="table">
	<thead>
		<tr>
       		<th><input type="text" name="firstname"  onkeyUp="document.getElementById('fname').outerHTML = this.value"  placeholder="First Name..">
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
			<td><input type="text"  name="con"  onkeyUp="document.getElementById('con').innerHTML = this.value"  placeholder=" Country(Ex:India)"><br/>
			</td>        
  		</tr>
        <tr>
			<td><input type="text"  name="email"  onkeyUp="document.getElementById('email').innerHTML = this.value"  placeholder="Email(Ex:abc@example.com)"></td>
			<td><input type="text" name="website"  onkeyUp="document.getElementById('web').innerHTML = this.value"  placeholder="Website(Ex:http://www.abc.io)">
    		</td>      
        </tr>
        <tr>
			<td><input type="text"  name="contact"  onkeyUp="document.getElementById('con').innerHTML = this.value"  placeholder="Mobile(Ex:9685421370">
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
			<td colspan="2">
			<label>Days</label>
			</td>	
		</tr>
		<tr>	  
            <td><input type="text" name="day1" onkeyUp="document.getElementById('day1').innerHTML = this.value" placeholder="Monday" >
			</td>
			<td><input type="text" name="day2" onkeyUp="document.getElementById('day2').innerHTML = this.value" placeholder="Saturday" >
			</td>      
		</tr>
		<tr>
			<td colspan="2">
			<label>Time</label>
			</td>
		</tr>
		<tr>	 
            <td><input type="text" name="time1" onkeyUp="document.getElementById('time1').innerHTML = this.value" placeholder="9:30" >
			</td>
			<td><input type="text" name="time2" onkeyUp="document.getElementById('time2').innerHTML = this.value"  placeholder="6:30" >
			</td>        
		</tr>
		<tr>
			<td colspan="2">
			<label>Facebook URL</label>
			</td>
		</tr>
		<tr> 
			<td colspan="2"><input  id="facebook" type="text" name="facebook" placeholder="https://www.facebook.com/profile.php?id=1000" onKeyup="addfacebook()">
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
	<div id="content-wrap">
    <div id="left_col">
        <?php		
		require('upload.php');
		echo "<center><img src='logo.png' height=100px width=150px /></center><br/><br/>";
		echo '<center><img src="fbimg" width="45px" style="margin-bottom:5px; border:none; display:none;" height="40px"  src="/Myemail/fb.png" alt="Facebook">&nbsp</center></br>'; 
		echo '<center>&nbsp;&nbsp;<img id="twimg" width="45px" style="margin-bottom:2px; border:none; display:none;" height="40px" src="/Myemail/tw.png" alt="twitter">';
		echo '&nbsp;&nbsp;<img id="g" width="45px" style="margin-bottom:2px; border:none; display:none;" height="40px" src="/Myemail/g.png" alt="google">';
		echo '&nbsp;&nbsp;<img id="l" width="45px" style="margin-bottom:2px; border:none; display:none;" height="40px" src="/Myemail/link.png" alt="link">';
		echo '&nbsp;&nbsp;<img id="in" width="45px" style="margin-bottom:2px; border:none; display:none;" height="40px" src="/Myemail/in.png" alt="instra"></center>';
		?>  
    </div>
    <div id="right_col">
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
		$con="";
		$email = ""; 
		$website = "";
		$contact = "";
		$on="";
		$day1="";
		$day2="";
		$time1="";
		$time2="";
		$facebook="";
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
			$facebook=$_POST['facebook'];
		}
		echo '<span id="fname"></span>'.$firstname;
	    echo"\n\n";
		echo  '<span id="lname"></span>'.$lastname. '</br>'; 		
		echo '<span id="pname"></span>'.$post."</br>";
		echo '<span id="oname"></span>'. $oragnizationname. "</br>";
		echo '<span id="add1"></span>'.$address1. "</br>";
		echo '<span id="add2"></span>'.$address2. "</br>";
		echo '<td><span id="city"></span>'.$city. "</br>";
		echo '<span id="pin"></span>'.$pin. "</br>";
		echo '<span id="state"></span>'.$state. "</br>";
		echo '<span id="con"></span>'.$con. "</td></tr>";
		echo '<span id="email"></span>' .$email. "</br>";
		echo "<span id='web'></span>".$website. "</br>";
		echo "<span id='contact'></span>".$contact. "</br>"; 
		echo "<span id='ocontact'></span>".$on."</br>";
		echo '<span id="day1"></span>'.$day1."<span id='day2'></span>".$day2."</br>";
		echo '<span id="time1"></span>'.$time1."<span id='time2'></span>".$time2;
	?>
    </div>
</div>	
</form>
</body>
</html>









