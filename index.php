<!doctype html>
 
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>yaod (yet another online dashboard)</title>
		<link rel="stylesheet" href="css/yaod.css" />
		<link rel="stylesheet" href="css/jquery.gridster.css" />
		<style type="text/css">
		
		</style>
	</head>
	<body>
		<div id="droparea">
		
			
			<div class="groupTitle"><span>Home</span></div>
			<div class="gridster" id="home"><!--id depends on tile area name-->
				<ul>
					<li data-row="1" data-col="1" data-sizex="1" data-sizey="1" class="lightBlue"></li>
					<li data-row="2" data-col="1" data-sizex="1" data-sizey="1" class="darkPink"></li>
					<li data-row="3" data-col="1" data-sizex="1" data-sizey="1" class="blueishgreen"></li>
			 
					<li data-row="1" data-col="2" data-sizex="2" data-sizey="1" class="purple calendar">
						<span class="tileType"><img src="images/icons/tileIcons/calendarIcon.png" /></span>
						<h1></h1>
						<h3></h3>
						<img class="tileIcon" src="images/icons/tileIcons/calendarIcon.png" /><!--tile should pull data off a databse not hardcoded data-->
						<p class="event" id="1">Work on yaod<br />project<br /><span class="timeDue">5:30PM - 6:00PM</span></p>
		                <p class="event" id="2">Fork yaod on<br />Github<br /><span class="timeDue">Tommorow</span></p>
		                <p class="event" id="3">Update git on<br />local computer<br /><span class="timeDue">All Day</span></p>
					</li>
					<li data-row="2" data-col="2" data-sizex="2" data-sizey="2" class="blue"></li>
			 
					<li data-row="1" data-col="4" data-sizex="1" data-sizey="1" class="blue clock">
						<span class="tileType"><img src="images/icons/tileIcons/clockIcon.png" /></span>
		                <img class="tileIcon" src="images/icons/tileIcons/clockIcon.png" />
		                <div id="clockWrapper"><h1></h1></div>
					</li>
					<li data-row="2" data-col="4" data-sizex="2" data-sizey="1" class="red file">
						<div class="fileInfoWrapper">
							<div class="left"><img src="images/icons/fileIcons/powerpointIcon.png" /></div>
							<div class="right">
								<h3>slides.odp</h3>
								<p>Size: <span class="size">2.5 KB</span></p>
								<p>Uploaded: <span class="uploaded">July 13, 2013</span></p>
							</div>
						</div>
					</li>
					<li data-row="3" data-col="4" data-sizex="1" data-sizey="1" class="darkPink"></li>
			 
					<li data-row="1" data-col="5" data-sizex="1" data-sizey="1" class="green image">
						<span class="tileType"><img src="images/icons/tileIcons/photoIcon.png" /></span>
						<img class="tileIcon" src="images/icons/tileIcons/photoIcon.png" />
					</li>
					<li data-row="3" data-col="5" data-sizex="1" data-sizey="1" class="darkBlue"></li>
			 
					<li data-row="1" data-col="6" data-sizex="1" data-sizey="1" class="purple textSnippet">
						<span class="tileType"><img src="images/icons/tileIcons/textSnippetIcon.png" /></span>
		                <img class="tileIcon" src="images/icons/tileIcons/textSnippetIcon.png" />
		                <p>yaod(yet another online dashboard) is yet another online dashboard for saving text-snippets, images, files and many more. You can drag tiles, drop them, rearrange them. Also they automatically update so you always get the latest information.</p>
					</li>
					<li data-row="2" data-col="6" data-sizex="1" data-sizey="2" class="orange todo">
						<span class="tileType"><img src="images/icons/tileIcons/todoIcon.png" /></span>
						<img class="tileIcon" src="images/icons/tileIcons/todoIcon.png" />
						<!--start-->

						<div id="list">
							<p><span class="todoName">Some Work</span></p>
							<p><span class="todoName">Other Work 2</span></p>
							<p><span class="todoName">Added Work 3</span></p>

							<p><span class="todoName">Finish other work</span></p>
							<p><span class="todoName">Plus Work 4</span></p>
							<p><span class="todoName">Plus Work 4</span></p>
							
							<p><span class="todoName">Plus Work 4</span></p>
							<p><span class="todoName">Plus Work 4</span></p>
							<p><span class="todoName">Plus Work 4</span></p>
							
							<p><span class="todoName">And few more...</span></p>
						</div>
					</li>
				</ul>
			</div>
			
			
			
			<div class="groupTitle"><span>Second Grid</span></div>
			<div class="gridster" id="second_grid"><!-- ID depends on tilegroup name-->
				<ul>
					<li data-row="1" data-col="1" data-sizex="1" data-sizey="1" class="blueishgreen"></li>
					<li data-row="2" data-col="1" data-sizex="1" data-sizey="1" class="orange"></li>
					<li data-row="3" data-col="1" data-sizex="1" data-sizey="1" class="lightBlue"></li>
			 
					<li data-row="1" data-col="2" data-sizex="2" data-sizey="1" class="purple"></li>
					<li data-row="2" data-col="2" data-sizex="2" data-sizey="2" class="darkPink"></li>
			 
					<li data-row="1" data-col="4" data-sizex="1" data-sizey="1" class="blue"></li>
					
					<li data-row="2" data-col="4" data-sizex="1" data-sizey="1" class="green"></li>
					<li data-row="3" data-col="4" data-sizex="1" data-sizey="1" class="lightBlue"></li>
			 
					<li data-row="1" data-col="5" data-sizex="1" data-sizey="1" class="darkBlue"></li>
					<li data-row="3" data-col="5" data-sizex="2" data-sizey="1" class="red"></li>
			 
					<li data-row="1" data-col="6" data-sizex="1" data-sizey="1" class="purple"></li>
					<li data-row="2" data-col="6" data-sizex="1" data-sizey="2" class="orange"></li>
				</ul>
			</div>
			
			
			
			
			<!--<div class="groupTitle"><span>Home</span></div>
			<ul class="sortable droptrue">
				<li data-sizex="2" data-sizey="2" class="tile darkPink"></li>
				<li data-sizex="3" data-sizey="2" class="tile blue weather">
					<img />
					<p></p>
					<h2></h2>
				</li>
				<li data-sizex="1" data-sizey="1" class="tile purple textSnippet">
                    <span class="tileType"><img src="images/icons/tileIcons/textSnippetIcon.png" /></span>
                    <img class="tileIcon" src="images/icons/tileIcons/textSnippetIcon.png" />
                    <p>yaod(yet another online dashboard) is yet another online dashboard for saving text-snippets, images, files and many more. You can drag tiles, drop them, rearrange them. Also they automatically update so you always get the latest information.</p>
                </li>
                <li data-sizex="1" data-sizey="1" class="tile orange todo">
					<span class="tileType"><img src="images/icons/tileIcons/todoIcon.png" /></span>
					<img class="tileIcon" src="images/icons/tileIcons/todoIcon.png" />
					<!--start---
					<div id="list">
						<p><span class="todoName">Some Work</span></p>
						<p><span class="todoName">Other Work 2</span></p>
						<p><span class="todoName">Added Work 3</span></p>
						<p><span class="todoName">Finish other work</span></p>
						<p><span class="todoName">Plus Work 4</span></p>
					</div>
				</li>
				<li data-sizex="1" data-sizey="1" class="tile blueishgreen"></li>
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
					<img class="tileIcon" src="images/icons/tileIcons/calendarIcon.png" /><!--make this like image Tile all dynamic and stuff->
					<p class="event" id="1">Work on yaod<br />project<br /><span class="timeDue">5:30PM - 6:00PM</span></p>
                    <p class="event" id="2">Fork yaod on<br />Github<br /><span class="timeDue">Tommorow</span></p>
                    <p class="event" id="3">Update git on<br />local computer<br /><span class="timeDue">All Day</span></p>
				</li>
				<li data-sizex="2" data-sizey="1" class="tile green"></li>
				<li data-sizex="1" data-sizey="1" class="tile green image">
					
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
				-></li>
				<li data-sizex="1" data-sizey="1" class="tile green"><!--
					<div class="fileInfoWrapper">
						<img class="fileIcon" src="images/icons/fileIcons/excelIcon.png" />	
						<h3>stuff.ods</h3>
					</div>
				-></li>
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
			</ul>-->
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
		</div>
		<div id="message"></div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script src="js/dashboard.js" type="text/javascript"></script>
		<script src="js/fileUpload.js" type="text/javascript"></script>
        <script src="js/tileUpdater.js" type="text/javascript"></script>
        <script src="js/jquery.gridster.js" type="text/javascript"></script>
		<script type="text/javascript">
			var gridster = [];
			$(function(){ //DOM Ready
				//instance one of gridster
				gridster[0] = $("#home ul").gridster({
					namespace: '#home',
					widget_margins: [10, 10],
					widget_base_dimensions: [170, 170],
					max_cols:6,
					resize: {
						enabled:false
					}
				}).data('gridster');
				
				//instance two of gridster
				gridster[1] = $("#second_grid ul").gridster({
					namespace: '#second_grid',
					widget_margins: [10, 10],
					widget_base_dimensions: [170, 170],
					max_cols:6,
					resize: {
						enabled:false
					}
				}).data('gridster');
				
			});
		</script>
	</body>
</html>
