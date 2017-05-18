<?php


	//muutujad $_POST'ist
	if (	(!empty($_POST['mudel'])) && (!empty($_POST['kiri']))	&&	(!empty($_POST['hind']))	&&	(!empty(basename($_FILES["fileToUpload"]["name"])))	) {
		$mudel=htmlspecialchars($_POST['mudel']);
		$kiri=htmlspecialchars($_POST['kiri']);
		$hind = htmlspecialchars($_POST['hind']);
		$pilt = "motopics/".htmlspecialchars(basename( $_FILES["fileToUpload"]["name"]));
	}

	$target_dir = "../motopics/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	// Check if image file is a actual image or fake image

	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	        echo "Sinu pilt ". basename( $_FILES["fileToUpload"]["name"]). " on salvestatud.";
	        


	        
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

//Lisame andmebaasi-algus
	$user = "root";
	$pass = "";
	$db = "test";
	$host = "localhost";
	$link = mysqli_connect($host, $user, $pass, $db) or die ("ei saa yhendada");
	if (isset($mudel)&&isset($kiri)&&isset($hind)&&isset($pilt)) {
		$sql = "INSERT INTO dlukas_moto (mudel, omadused, hind, pilt) VALUES  ('$mudel','$kiri','$hind','$pilt')";
			$result = mysqli_query($link, $sql) or die ("Eba6nestus".mysqli_error($link));
			if($result) {
				
				echo "Andmed salvestatud"."<br/>";
			}
		}
			
	

	


?>