(function ($) {
	/*Updating the image Tile*/
	//fire the image update function
	var b=setInterval(function(){updateImage()},20100);
	var imageToRequest = 0;
	updateImage();
	function updateImage(){
		var numImagesTotal = 0;//console gives error beacuse this variable gets a value after the function is run once when request is completed
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
			} else{
				alert("Failed to get images. Try refreshing the page and see if it helps otherwise contact support for assistance");
			}
		});
		if(imageToRequest > numImagesTotal){
			imageToRequest = 0;
		} else{
			imageToRequest++;
		}
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
			$("#clockWrapper h2").html(t);
			$("#clockWrapper").css("border","2px solid white");
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
	
	/*todo Tile NOT UPDATE JUST GET*/
	var e = setTimeout(function(){getToDos()},3000);
	function getToDos(){
		$(".todo > .tileIcon").fadeOut();
		$(".todo > .tileType").fadeIn();
	}
	/*ToDo Tile Update Items when done*/
	
	
})(jQuery)
