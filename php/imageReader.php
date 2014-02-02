<?php
$imageRequested = $_POST['imageReq'];
//initiator
$i = 0;
//Open directory for reading
$dir = opendir("../files/");
//array for types of images
$imagesArray = array("jpg", "jpeg", "png", "gif", "bmp");
//sds
$displayImages = array();
//LOOP through the files to read
while (($file = readdir($dir)) !== false){

	//get the file ext
	$pathParts = pathinfo("../files/".$file);
	$ext = $pathParts['extension'];
	//do a check to see if file is image and remvoe '.', '..' files
	if($file != '.' && $file != '..' && in_array($ext,$imagesArray) == true){
		$displayImages[$i] = "files/".$file."";
		$i++;
	}

}
echo $i.",";
echo $displayImages[$imageRequested];









closedir($dir);//in the end close dir
?>
