<!doctype html>
 
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>yaod</title>
		<link rel="stylesheet" href="css/yaod.css" />
	</head>
	<body>
		<div id="droparea">
			<div class="groupTitle"><span>Home</span></div>
			<ul class="sortable droptrue">
				<li data-sizex="2" data-sizey="1" class="tile blueishgreen"></li>
				<li data-sizex="2" data-sizey="1" class="tile darkPink"></li>
				<li data-sizex="1" data-sizey="1" class="tile purple textSnippet">
                    <span class="tileType">Text</span>
                    <p class="smallTileP">yaod(yet another online dashboard) is yet another online dashboard for saving text-snippets, images, files and many more.</p>
                </li>
				<li data-sizex="1" data-sizey="1" class="tile green image">
                    <span class="tileType">Image</span>
                    <img class="smallTileImg" src="http://0.tqn.com/d/organicgardening/1/0/c/2/-/-/sunflower.jpg" />
                </li>
				<li data-sizex="2" data-sizey="1" class="tile darkBlue"></li>
				<li data-sizex="1" data-sizey="1" class="tile blue clock">
                    <span class="tileType">Clock</span>
                    <div id="clockWrapper"><h2></h2></div>
                </li>
				<li data-sizex="2" data-sizey="1" class="tile purple calendar">
					<span class="tileType">Calendar</span>
					<h1>07</h1>
					<h3>Wednesday</h3>
					<p>Finish yaod<br />project<br /><span class="timeDue">5:30-6:00PM</span></p><!--this should have a max char len = 35 -->
				</li>
				<li data-sizex="2" data-sizey="1" class="tile orange"></li>
				<li data-sizex="2" data-sizey="1" class="tile green"></li>
				<li data-sizex="1" data-sizey="1" class="tile orange"></li>
			</ul>
			<div class="groupTitle"><span>Group 2</span></div>
			<ul class="sortable droptrue">
				<li data-sizex="2" data-sizey="1" class="tile blueishgreen"></li>
				<li data-sizex="1" data-sizey="1" class="tile green"></li>
				<li data-sizex="2" data-sizey="1" class="tile orange"></li>
				<li data-sizex="2" data-sizey="1" class="tile green"></li>
				<li data-sizex="2" data-sizey="1" class="tile orange"></li>
				<li data-sizex="2" data-sizey="1" class="tile darkPink"></li>
				<li data-sizex="1" data-sizey="1" class="tile purple"></li>
				
			</ul>
			<br />
			<br />
		</div>
		<div id="message"></div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="js/dashboard.js" type="text/javascript"></script>
		<script src="js/fileUpload.js" type="text/javascript"></script>
        <script src="js/clock.js" type="text/javascript"></script>
	</body>
</html>
