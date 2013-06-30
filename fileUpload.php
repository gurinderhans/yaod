<?php
if(isset($_FILES["file"])){
	$files = $_FILES["file"]["name"][0];
	move_uploaded_file($_FILES["file"]["tmp_name"][0], "files/".$files);
}
?>
