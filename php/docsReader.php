<?php
$fileRequested = $_POST["fileReqed"];
$fileRequested = 0;
//fileSize function
function formatBytes($bytes, $precision = 2) {
	$units = array('B', 'KB', 'MB', 'GB', 'TB');
	$bytes = max($bytes, 0);
	$pow = floor(($bytes ? log($bytes) : 0) / log(1024));
	$pow = min($pow, count($units) - 1);
	$bytes /= pow(1024, $pow);
	return round($bytes, $precision) . ' ' . $units[$pow]; 
}
$i=0;
$fileNameArray = array();
$fileSizeArray = array();
$filePathArray = array();
//document type files array
$docsArray = array('txt', 'rtf', 'doc', 'pdf', 'docx', 'xlsx', 'ppt', 'ods', 'odp', 'odt');
//Open directory for reading
$docsDir = opendir("../files/documents/");
//LOOP through the files to read
while (($file = readdir($docsDir)) !== false){
	//get the file ext
	$pathParts = pathinfo("../files/documents/".$file);
	$ext = $pathParts['extension'];
	//do a check to see if file is doc and remvoe '.', '..' files
	if($file != '.' && $file != '..' && in_array($ext,$docsArray) == true){
		$toFile = "../files/documents/" . $file;
		$filePathfromIndex = "files/documents/" . $file;
		$size = formatBytes(filesize($toFile));
		$fileNameArray[$i] = $file;
		$fileSizeArray[$i] = $size;
		$filePathArray[$i] = $filePathfromIndex;
		$i++;
	}
}

echo $fileNameArray[$fileRequested] . ":,:" . $fileSizeArray[$fileRequested] . ":,:" . $filePathArray[$fileRequested];







closedir($docsDir);//in the end close dir
?>
