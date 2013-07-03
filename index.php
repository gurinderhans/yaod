<!DOCTYPE html>
	<html>
		<head>
			<title>Drag and Drop File Upload</title>
			<link type="text/css" rel="stylesheet" href="css/yaod.css" />
			<script type="text/javascript" src="js/fileUpload.js"></script>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		</head>
		<body>
			<div id="droparea">
				<header id='header'>
					<div>
						<h1>YAOD</h1>
						<form action="" method="post" enctype="multipart/form-data">
							<input id="uploadFile" type="file" name="file[]"  multiple />
						</form>
					</div>
				</header>
				<section id="body" align="center">
					<div id="message"></div>
				</section>
			</div>
		</body>
	</html>
