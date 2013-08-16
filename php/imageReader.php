<?php
$imageRequested = $_POST['imageReq'];
//initiator
$i = 0;
//Open directory for reading
$imageDir = opendir("../files/images/");
//array for types of images
$imagesArray = array("jpg", "jpeg", "png", "gif", "bmp");
//sds
$displayImages = array();
//LOOP through the files to read
while (($file = readdir($imageDir)) !== false){

	//get the file ext
	$pathParts = pathinfo("../files/images/".$file);
	$ext = $pathParts['extension'];
	//do a check to see if file is image and remvoe '.', '..' files
	if($file != '.' && $file != '..' && in_array($ext,$imagesArray) == true){
		$displayImages[$i] = "files/images/".$file."";
		$i++;
	}

}
echo $displayImages[$imageRequested];









closedir($imageDir);//in the end close dir
?>
