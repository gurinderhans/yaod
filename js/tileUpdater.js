(function ($) {
	/*Updating the image Tile*/
	//fire the image update function
	var b=setInterval(function(){updateImage()},20100);
	var imageToRequest = 0;
	updateImage();
	function updateImage(){
		var numImagesTotal = 0;//reason for creating -> console gives error beacuse this variable gets a value after the function is run and when request is completed
		$.post("../php/imageReader.php",{ imageReq: imageToRequest }, function(data) {
			if(data != ''){
				var splittedData = data.split(",");
				numImagesTotal = splittedData[0];//gets the value here when request is complete
				var imageURL = splittedData[1];
				$(".image > .tileIcon").delay(4000).fadeOut('fast', function() {
					// Animation complete.
					$(".image > .tileType").fadeIn();
					$(this).attr("src",imageURL);
					$(this).css("margin","0");
				}).delay(100).fadeIn();
				if(imageToRequest == (numImagesTotal-1)){
					imageToRequest = 0;
				} else{
					imageToRequest++;
				}
			} else{
				alert("Failed to get images. LOL");
			}
		});
	}

	/*updating file Icon*/
	var f=setInterval(function(){updateFile()},10100);
	var fileToRequest = 0;
	function updateFile(){
		var numDocFiles = 0;//created for same reason as in image update function
		var fileImageUrl;
		$.post("../php/docsReader.php", {fileReqed: fileToRequest}, function(data){
			var splittedData = data.split(":,:");
			var fileName = splittedData[0];
			var fileSize = splittedData[1];
			var fileLastChanged = splittedData[3];
			var fileType = splittedData[4];
			//["wordDocument.odt", "8.86 KB", "files/wordDocument.odt", "August 19 2013 14:43:47.", "wordFile", "4"] 
			if(fileType == "wordFile"){
				//iamges url = word file
				fileImageUrl = "images/icons/fileIcons/documentIcon.png";
			} else if(fileType == "excelFile"){
				fileImageUrl = "images/icons/fileIcons/excelIcon.png";
			} else if(fileType == "presFile"){
				fileImageUrl = "images/icons/fileIcons/powerpointIcon.png";
			} else if(fileType == "unknown"){
				//unknown file img url
				fileImageUrl = "images/icons/fileIcons/txtIcon.png";
			}
			numDocFiles = splittedData[5];
			if(fileToRequest == (numDocFiles-1)){//fix the 2
				fileToRequest = 0;
			} else{
				fileToRequest++;
			}
			//changing info
			$(".file > .fileInfoWrapper > div.left, .file > .fileInfoWrapper > div.right").fadeOut('fast', function(){
				$(".file > .fileInfoWrapper > div.left").children("img").attr("src", fileImageUrl);
				$(".file > .fileInfoWrapper > div.right").children("h3").text(fileName);
				$(".file > .fileInfoWrapper > div.right").children("p").find(".size").text(fileSize);
				$(".file > .fileInfoWrapper > div.right").children("p").find(".uploaded").text(fileLastChanged);
			});
			$(".file > .fileInfoWrapper > div.left, .file > .fileInfoWrapper > div.right").delay(100).fadeIn();
		});
	}
	/*Updating the calendar*/
	//get the day
	var d = new Date();
	function updateDay(){
		var weekday=new Array(7);
		weekday[0]="Sunday";
		weekday[1]="Monday";
		weekday[2]="Tuesday";
		weekday[3]="Wednesday";
		weekday[4]="Thursday";
		weekday[5]="Friday";
		weekday[6]="Saturday";
		$(".calendar h3").html(weekday[d.getDay()]);
	}
	function updateDate(){
		var date = d.getDate();
		if(date < 10){
		    date = "0" + date;
		} else{
		    date = date;
		}
		$(".calendar h1").html(date);
	}
	updateDate();
	updateDay();
	var numCalendarEvents = $(".calendar p").size();
	var nextEvent = 2;
	var dirShow = "";
	var dirHide = "";
	if(numCalendarEvents > 0){
		$(".calendar .tileIcon").delay(2000).hide("slide", { direction: "left" }, 200, function(){
			$(".calendar > .tileType").fadeIn();
			startCalendarUpdate();
		});
	}
	function startCalendarUpdate(){
		$(".calendar > #1").show("slide", { direction: "right" }, 200).delay(12000).hide("slide", { direction: "left" }, 200);
		var a=setInterval(function(){
			updateCalendar();
		},12400);
	}
	function updateCalendar(){
		var randomNum = Math.floor(Math.random()*2);
		if(randomNum === 1){/*this is to..*/
		    dirShow = "left";
		    dirHide = "right";
		} else if(randomNum === 0){
		    dirShow = "right";
		    dirHide = "left";
		}/*... randomize the direction to hide and show*/
		if(nextEvent > numCalendarEvents){
		    nextEvent = 1;
		}/*reset if number greater than calendar events. I am doing this for a non-rememberable reason at the moment but its important*/
		$(".calendar > #"+nextEvent).show("slide", { direction: ""+dirShow+"" }, 200).delay(12000).hide("slide", { direction: ""+dirHide+"" }, 200);
		if(nextEvent == numCalendarEvents){/*Doing the same thing*/
		    nextEvent = 1;
		} else{
		    nextEvent = nextEvent + 1;//if not greater than increment it
		}
	}



	/*Running the clock */
	var c=setInterval(function(){myTimer()},1000);
	function myTimer(){
		$(".clock > .tileType").fadeIn();
		$(".clock > .tileIcon").fadeOut("fast", function(){
			var d=new Date();
			var t=d.toLocaleTimeString("en-US");
			t=t.split(":");
			var hour = t[0];
			var minute = t[1];
			$("#clockWrapper h1").html('<span id="hour">'+hour+'</span><span id="minute">:'+minute+'</span>');
		});
	}


	/*Small Text Tile Update */
	updateTextSnippet();
	var d=setInterval(function(){updateTextSnippet()},20000);
	function updateTextSnippet(){
		//get the text seperate into arrays only if longer than suppose to be :)
		//but first check if there is any text LOL
		var textIs = $(".textSnippet p").size();
		var textInP = $(".textSnippet p").text();
		if(textIs > 0 && textInP != null){//there is text
			//newText
			var newText = textInP.substring(0,123)+"...";
			$(".textSnippet > img").delay(2700).fadeOut("fast", function(){
				$(".textSnippet p").html(newText).show("slide", { direction: "left" }, 200);
				$(".textSnippet .tileType").fadeIn();
			});
		
		}
	}
	
	/*Localstorage Get todoData*/
	getFromlocalstorage = function() {
        if (localStorage.getItem('todoData')) {
            list.innerHTML = localStorage.getItem('todoData');
        } else{
        	$("#list p").prepend("<span class='checkbox unchecked'>&#9744;</span>");
        }
    };
    /* Clear and save to localstorage the todoData*/
    saveTolocalstorage = function() {
        localStorage.clear();
        console.log('cleared ');
        localStorage.setItem('todoData', list.innerHTML);
        console.log(list.innerHTML);
    };
	/*todo Tile NOT UPDATE JUST GET*/
	var e = setTimeout(function(){getToDos()},3000);/*Ignoring this for now*/
	function getToDos(){
		$(".todo > .tileIcon").fadeOut();
		$(".todo > .tileType").fadeIn(function(){
			$("#list").fadeIn();
		});
	}
	function todosUpdate(){
		var list = document.getElementById('list');
		getFromlocalstorage(); //call the information
		/*ToDo Tile Update Items when done*/
		$(".checkbox").click(function(){
			$(this).toggleClass('checked unchecked');
			if ($(this).hasClass('checked')) {
		        $(this).html("&#9745;");
		        $(this).siblings(".todoName").css({"text-decoration": "line-through", "color":"rgb(223, 223, 223)"});
		    } else {
		    	$(this).siblings(".todoName").css({"text-decoration": "none", "color":"#fff"});
		        $(this).html("&#9744;");
		    }
		    saveTolocalstorage();
		});
	}
	//run the todos update function above
	todosUpdate();
	
	
})(jQuery)
