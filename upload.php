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
					$fileNameNew=uniqid('',true).".".$fileActualExt;
					$fileDestination='images/'.$fileNameNew;
					move_uploaded_file($fileTmpName,$fileDestination);
					header("location:front.php");
				} 
				else {
					echo "your file is too big!";
				}
			}
			else {
				echo "There was an error uploading your file!";
			}
		}		
		else {
			echo"Error: You cannot upload this file.";
		}
	}
	
?>