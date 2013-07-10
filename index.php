<!DOCTYPE html>
	<html>
		<head>
			<title>yaod</title>
			<link type="text/css" rel="stylesheet" href="css/yaod.css" />
		</head>
		<body>
			<div id="droparea">
				<div id="group1">
					<div class="sortable" id="row1" style="min-width:1200px">
						<div data-sizex="2" data-sizey="1" class="tile blueishgreen"></div>
						<div data-sizex="2" data-sizey="1" class="tile purple"></div>
						<div data-sizex="1" data-sizey="1" class="tile blue"></div>
						<div data-sizex="1" data-sizey="1" class="tile green"></div>
					</div>
					<div class="sortable" id="row2" style="min-width:1200px">
						<div data-sizex="2" data-sizey="1" class="tile orange"></div>
						<div data-sizex="2" data-sizey="1" class="tile blueishgreen"></div>
						<div data-sizex="1" data-sizey="1" class="tile darkPink"></div>
						<div data-sizex="1" data-sizey="1" class="tile darkBlue"></div>
					</div>
					<div class="sortable" id="row3" style="min-width:1200px">
						<div data-sizex="1" data-sizey="1" class="tile lightBlue"></div>
						<div data-sizex="1" data-sizey="1" class="tile darkPink"></div>
						<div data-sizex="2" data-sizey="1" class="tile blue"></div>
						<div data-sizex="2" data-sizey="1" class="tile red"></div>
					</div>
				</div>
			</div>
			<div id="message"></div>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script><!--jQuery-->
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script><!--jQuery UI-->
			<!--<script type="text/javascript" src="js/fileUpload.js"></script>-->
			<script type="text/javascript" src="js/dashboard.js"></script>
			<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
			<script>
			$(document).ready(function() {
				$('html, body, *').mousewheel(function(e, delta) {
					this.scrollLeft -= (delta * 180);
					e.preventDefault();
				});
			});
			</script>
		</body>
	</html>
