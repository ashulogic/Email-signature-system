<?php
	if(isset($_POST['submitimage'])) {		
		$imagefile = $_FILES['imagefile'];
		$fileName = $_FILES['imagefile']['name'];
		$fileTmpName = $_FILES['imagefile']['tmp_name'];
		$fileSize = $_FILES['imagefile']['size'];
		$fileError = $_FILES['imagefile']['error'];
		$fileType = $_FILES['imagefile']['type'];
		$fileExt = explode('.',$fileName);
		$fileActualExt = strtolower(end($fileExt));
		echo $fileActualExt;
		$allowed = array('jpg','jpeg','png','pdf');		
		if(in_array($fileActualExt,$allowed)) {
			if($fileError === 0) {
				if($fileSize < 1000000) {
					$fileDestination='logo.png';
					move_uploaded_file($fileTmpName,$fileDestination);
					header("location:front.php");
				} 
				else {
					echo '<span style="color:red;">your file is too big!</span>';
					
				}
			}
			else {
				echo '<span style="color:red">There was an error uploading your file!</span>';
			}
		}		
		else {
			echo '<span style="color:red">Error: You cannot upload this file.</span>';
		}
	}
	
?>