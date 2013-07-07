<!DOCTYPE html>
	<html>
		<head>
			<title>yaod</title>
			<link type="text/css" rel="stylesheet" href="css/yaod.css" />
		</head>
		<body>
			<div id="droparea">
				<div class="row" id="row1">
					<div class="wideTile"></div>
					<div class="smallTile"></div>
					<div class="smallTile"></div>
					<div class="wideTile"></div>
				</div>
				<div class="row" id="row2">
					<div class="wideTile"></div>
					<div class="wideTile"></div>
					<div class="wideTile"></div>
				</div>
				<div class="row" id="row3">
					<div class="smallTile"></div>
					<div class="smallTile"></div>
					<div class="wideTile"></div>
				</div>
				<div id="message"></div>
			</div>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script><!--Normal jQuery-->
			<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script><!--jQuery UI-->
			<script type="text/javascript" src="js/fileUpload.js"></script>
			<script type="text/javascript" src="js/dashboard.js"></script>
			<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
			<script>/*
			var mouseWheelEvt = function (e){
				var event = e || window.event;
				if (document.body.doScroll){
					document.body.doScroll(event.wheelDelta>0?"left":"right");
				} else if ((event.wheelDelta || event.detail) > 0){
					document.body.scrollLeft -= 110;
				} else{
					document.body.scrollLeft += 110;
				}
				return false;
			}
			if ("onmousewheel" in document.body){
				document.body.onmousewheel = mouseWheelEvt;
			} else{
				document.body.addEventListener("DOMMouseScroll", mouseWheelEvt);
			}*/
			$(function(){
				$("body").mousewheel(function(event, delta) {
					this.scrollLeft -= (delta * 120);
					event.preventDefault();
				});  
			});
			</script>
		</body>
	</html>
