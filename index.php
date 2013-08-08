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
				<li data-sizex="2" data-sizey="1" class="tile blueishgreen">
                    <span class="wideTileTypeText">Website</span>
                    <img class="wideTileImg" src="http://piwik.org/wp-content/uploads/2013/03/GooglePlus-Logo-02-400x400.png" />
                    <p class="wideTilePWithImage">Google+ is a multilingual social networking and identity service owned and operated by Google Inc.</p>
                </li>
				<li data-sizex="2" data-sizey="1" class="tile darkPink">
                    <span class="wideTileTypeText">Text</span>
                    <h1 class="wideTileh1">Hupcake ipsum!</h1>
                    <p class="wideTileP">Donut chocolate cake oat cake. Candy capie unersfar.com cookie jujubes donut chocolate bar macaroon.</p>
                </li>
				<li data-sizex="1" data-sizey="1" class="tile purple">
                    <span class="smallTileTypeText">Text</span>
                    <p class="smallTileP">yaod(yet another online dashboard) is yet another online dashboard for saving text-snippets, images, files and many more.</p>
                </li>
				<li data-sizex="1" data-sizey="1" class="tile green">
                    <span class="smallTileTypeText">Image</span>
                    <img class="smallTileImg" src="http://sr.photos3.fotosearch.com/bthumb/CSP/CSP990/k11355725.jpg" />
                </li>
				<li data-sizex="2" data-sizey="1" class="tile darkBlue">
                    <span class="wideTileTypeText">Tile</span>
                    <img class="wideTileImg" src="http://sr.photos3.fotosearch.com/bthumb/CSP/CSP990/k11355725.jpg" />
                    <p class="wideTilePWithImage">Cupcake ipsum dolor sit amet danish. Dragée toffee cake gingerbread jujubes sweet. Liquorice biscuit cotton candy.</p>
                </li>
				<li data-sizex="1" data-sizey="1" class="tile blue">
                    <span class="smallTileTypeText">Clock</span>
                    <div id="clockWrapper"><h2></h2></div>
                </li>
				<li data-sizex="2" data-sizey="1" class="tile green">
                    <span class="wideTileTypeText">File</span>
                    <img class="wideTileImg" src="https://cdn1.iconfinder.com/data/icons/devine_icons/512/PNG/File%20Types/Defult-Doc.png" />
                    <h1 class="wideTileH1WithImage">yaod.docx</h1>
                </li>
				<li data-sizex="2" data-sizey="1" class="tile orange"></li>
				<li data-sizex="2" data-sizey="1" class="tile green"></li>
				<li data-sizex="1" data-sizey="1" class="tile orange">
                    <table border="1">
                        <tr>
                            <th>To</th>
                            <th>Do</th>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td>Create</td>
                        </tr>
                    </table>
                </li>
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
