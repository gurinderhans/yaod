<!DOCTYPE html>
	<html>
		<head>
			<title>yaod</title>
			<link type="text/css" rel="stylesheet" href="css/yaod.css" />
		</head>
		<body>
			<div id="droparea">
				<div class="sortable" id="row1">
					<div data-sizex="2" data-sizey="1" class="tile red"></div>
					<div data-sizex="2" data-sizey="1" class="tile blue"></div>
					<div data-sizex="2" data-sizey="1" class="tile green"></div>
				</div>
				<div class="sortable" id="row2">
					<div data-sizex="2" data-sizey="1" class="tile red"></div>
					<div data-sizex="2" data-sizey="1" class="tile blue"></div>
					<div data-sizex="2" data-sizey="1" class="tile green"></div>
				</div>
				<div class="sortable" id="row3">
					<div data-sizex="2" data-sizey="1" class="tile red"></div>
					<div data-sizex="2" data-sizey="1" class="tile blue"></div>
					<div data-sizex="2" data-sizey="1" class="tile green"></div>
				</div>
			</div>
			<div id="message"></div>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script><!--jQuery-->
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script><!--jQuery UI-->
			<script type="text/javascript" src="js/fileUpload.js"></script>
			<script type="text/javascript" src="js/dashboard.js"></script>
			<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
			<script>
			$(function(){
				$("body").mousewheel(function(event, delta) {
					this.scrollLeft -= (delta * 120);
					event.preventDefault();
				});  
			});
			</script>
		</body>
	</html>
