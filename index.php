<!doctype html>
 
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>yaod</title>
		<link rel="stylesheet" href="css/yaod.css" />
	</head>
	<body>
		<div id="droparea">
			<div class="groupTitle"><span contenteditable="false">Home</span></div>
			<ul class="sortable droptrue">
				<li data-sizex="2" data-sizey="1" class="tile blueishgreen"></li>
				<li data-sizex="2" data-sizey="1" class="tile darkPink"></li>
				<li data-sizex="1" data-sizey="1" class="tile purple textSnippet">
                    <span class="tileType"><img src="images/textSnippetIcon.png" /></span>
                    <img class="tileIcon" src="images/textSnippetIcon.png" />
                    <p>yaod(yet another online dashboard) is yet another online dashboard for saving text-snippets, images, files and many more. You can drag tiles, drop them, rearrange them. Also they automatically update so you always get the latest information.</p>
                </li>
				<li data-sizex="2" data-sizey="1" class="tile darkBlue"></li>
				<li data-sizex="1" data-sizey="1" class="tile blue clock">
                    <span class="tileType"><img src="images/clockIcon.png" /></span>
                    <img class="tileIcon" src="images/clockIcon.png" />
                    <div id="clockWrapper"><h2></h2></div>
                </li>
				<li data-sizex="2" data-sizey="1" class="tile purple calendar">
					<span class="tileType"><img src="images/calendarIcon.png" /></span>
					<h1></h1>
					<h3></h3>
					<img class="tileIcon" src="images/calendarIcon.png" />
					<p class="event" id="1">Work on yaod<br />project<br /><span class="timeDue">5:30PM - 6:00PM</span></p>
                    <p class="event" id="2">Fork yaod on<br />Github<br /><span class="timeDue">Tommorow</span></p>
                    <p class="event" id="3">Update git on<br />local computer<br /><span class="timeDue">All Day</span></p>
				</li>
				<li data-sizex="1" data-sizey="1" class="tile orange todo">
					<span class="tileType"><img src="images/todoIcon.png" /></span>
					<img class="tileIcon" src="images/todoIcon.png" />
					<!--<div id="todoWrapper">
						<h3>Github</h3>
						<table border="0">
							<tr>
								<td><input class="todoCheck" type="checkbox" /></td>
								<td>row 1</td>
							</tr>
							<tr>
								<td><input class="todoCheck" type="checkbox" /></td>
								<td>row 2</td>
							</tr>
							<tr>
								<td><input class="todoCheck" type="checkbox" /></td>
								<td>row 3</td>
							</tr>
						</table>
					</div>-->
				</li>
				<li data-sizex="2" data-sizey="1" class="tile green"></li>
				<li data-sizex="1" data-sizey="1" class="tile green image">
					<span class="tileType"><img src="images/photoIcon.png" /></span>
					<img class="tileIcon" src="images/photoIcon.png" />
				</li>
				<li data-sizex="1" data-sizey="1" class="tile orange"></li>
			</ul>
			<div class="groupTitle"><span contenteditable="false">Group 2</span></div>
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
        <script src="js/tileUpdater.js" type="text/javascript"></script>
	</body>
</html>
