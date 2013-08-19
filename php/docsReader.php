<?php
$fileRequested = $_POST["fileReqed"];
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
$fileModedTimeArray = array();
$fileVarietyArray = array();
//document type files array
$docsArray = array('txt', 'rtf', 'doc', 'pdf', 'docx', 'xlsx', 'ppt', 'ods', 'odp', 'odt');
//Open directory for reading
$dir = opendir("../files/");
//LOOP through the files to read
while (($file = readdir($dir)) !== false){
	//get the file ext
	$pathParts = pathinfo("../files/".$file);
	$ext = $pathParts['extension'];
	//do a check to see if file is doc and remvoe '.', '..' files
	if($file != '.' && $file != '..' && in_array($ext,$docsArray) == true){
		$wordFilesArray = array('doc', 'docx', 'odt');
		$excelFilesArray = array('xlsx', 'ods', 'xls', 'xlt');
		$presFilesArray = array('ppt', 'pptx', 'odp');
		if(in_array($ext,$wordFilesArray) == true){
			$fileType = "wordFile";
		} elseif(in_array($ext,$excelFilesArray) == true){
			$fileType = "excelFile";
		} elseif(in_array($ext,$presFilesArray) == true){
			$fileType = "presFile";
		}
		$toFile = "../files/" . $file;
		$filePathfromIndex = "files/" . $file;
		$size = formatBytes(filesize($toFile));
		$dateModed = date("F d Y H:i:s.", filectime($toFile));
		$fileNameArray[$i] = $file;
		$fileSizeArray[$i] = $size;
		$filePathArray[$i] = $filePathfromIndex;
		$fileModedTimeArray[$i] = $dateModed;
		$fileVarietyArray[$i] = $fileType;
		$i++;
	}
}

echo $fileNameArray[$fileRequested] . ":,:" . $fileSizeArray[$fileRequested] . ":,:" . $filePathArray[$fileRequested] . ":,:" . $fileModedTimeArray[$fileRequested] . ":,:" . $fileVarietyArray[$fileRequested] . ":,:" . $i;







closedir($dir);//in the end close dir
?>
