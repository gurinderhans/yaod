<!DOCTYPE html>
	<html>
		<head>
			<title>Drag and Drop File Upload</title>
			<link type="text/css" rel="stylesheet" href="css/yaod.css" />
			<script type="text/javascript" src="js/fileUpload.js"></script>
		</head>
		<body>
			<div id="droparea">
				<h1 align="center">Drag & Drop File Upload<span style="font-size:19px;"> or you can Browse</span></h1>
				<div align="center">
					<form action="" method="post" enctype="multipart/form-data">
						<input id="uploadFile" type="file" name="file[]"  multiple />
					</form>
				</div>
				<div align="center" id="message"></div>
				
			</div>
		</body>
	</html>
