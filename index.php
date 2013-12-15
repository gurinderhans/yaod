<!doctype html>
 
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>yaod (yet another online dashboard)</title>
		<link rel="stylesheet" href="css/yaod.css" />
	</head>
	<body>
		<div id="droparea">
			<div class="groupTitle"><span>Home</span></div>
			<ul class="sortable droptrue">
				<li data-sizex="3" data-sizey="2" class="tile blueishgreen"></li>
				<li data-sizex="2" data-sizey="2" class="tile darkPink"></li>
				<li data-sizex="1" data-sizey="1" class="tile purple textSnippet">
                    <span class="tileType"><img src="images/icons/tileIcons/textSnippetIcon.png" /></span>
                    <img class="tileIcon" src="images/icons/tileIcons/textSnippetIcon.png" />
                    <p>yaod(yet another online dashboard) is yet another online dashboard for saving text-snippets, images, files and many more. You can drag tiles, drop them, rearrange them. Also they automatically update so you always get the latest information.</p>
                </li>
                <li data-sizex="1" data-sizey="1" class="tile orange todo">
					<span class="tileType"><img src="images/icons/tileIcons/todoIcon.png" /></span>
					<img class="tileIcon" src="images/icons/tileIcons/todoIcon.png" />
					<!--start-->
					<div id="list">
						<p><span class="todoName">Some Work</span></p>
						<p><span class="todoName">Other Work 2</span></p>
						<p><span class="todoName">Added Work 3</span></p>
						<p><span class="todoName">Finish other work</span></p>
						<p><span class="todoName">Plus Work 4</span></p>
					</div>
				</li>
				<li data-sizex="1" data-sizey="1" class="tile blue"></li>
				<li data-sizex="2" data-sizey="1" class="tile darkBlue"></li>
				<li data-sizex="1" data-sizey="1" class="tile blue clock">
                    <span class="tileType"><img src="images/icons/tileIcons/clockIcon.png" /></span>
                    <img class="tileIcon" src="images/icons/tileIcons/clockIcon.png" />
                    <div id="clockWrapper"><h1></h1></div>
                </li>
				<li data-sizex="2" data-sizey="1" class="tile purple calendar">
					<span class="tileType"><img src="images/icons/tileIcons/calendarIcon.png" /></span>
					<h1></h1>
					<h3></h3>
					<img class="tileIcon" src="images/icons/tileIcons/calendarIcon.png" /><!--make this like image Tile all dynamic and stuff-->
					<p class="event" id="1">Work on yaod<br />project<br /><span class="timeDue">5:30PM - 6:00PM</span></p>
                    <p class="event" id="2">Fork yaod on<br />Github<br /><span class="timeDue">Tommorow</span></p>
                    <p class="event" id="3">Update git on<br />local computer<br /><span class="timeDue">All Day</span></p>
				</li>
				<li data-sizex="2" data-sizey="1" class="tile green"></li>
				<li data-sizex="1" data-sizey="1" class="tile green image">
					<span class="tileType"><img src="images/icons/tileIcons/photoIcon.png" /></span>
					<img class="tileIcon" src="images/icons/tileIcons/photoIcon.png" />
				</li>
				<li data-sizex="1" data-sizey="1" class="tile orange"></li>
				<li data-sizex="2" data-sizey="1" class="tile red"></li>
			</ul>
			
			
			
			<div class="groupTitle"><span>Documents</span></div>
			<ul class="sortable droptrue">
				<li data-sizex="2" data-sizey="1" class="tile orange word"></li>
				<li data-sizex="1" data-sizey="1" class="tile blueishgreen"><!--
					<div class="fileInfoWrapper">
						<img class="fileIcon" src="images/icons/fileIcons/documentIcon.png" />	
						<h3>document.odt</h3>
					</div>
				--></li>
				<li data-sizex="1" data-sizey="1" class="tile green"><!--
					<div class="fileInfoWrapper">
						<img class="fileIcon" src="images/icons/fileIcons/excelIcon.png" />	
						<h3>stuff.ods</h3>
					</div>
				--></li>
				<li data-sizex="2" data-sizey="1" class="tile green"></li>
				<li data-sizex="2" data-sizey="1" class="tile red file">
					<div class="fileInfoWrapper">
						<div class="left"><img src="images/icons/fileIcons/powerpointIcon.png" /></div>
						<div class="right">
							<h3>slides.odp</h3>
							<p>Size: <span class="size">2.5 KB</span></p>
							<p>Uploaded: <span class="uploaded">July 13, 2013</span></p>
						</div>
					</div>
				</li>
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
        <script src="js/tileUpdater.js" type="text/javascript"></script>
	</body>
</html>
