(function ($) {
	var storage = window.localStorage;
	//little local storage check
	if(window.localStorage){
		//if available do nothing
	} else{
		console.log("not available");
	}
	//save local storge function
	function saveToLocalStorage(nameOfStorage, dataToSave){
    	storage.setItem(nameOfStorage, dataToSave);
    }


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
					$(this).css({
						margin: "0",
						width: "100%",
						height: "100%"
					});
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

	/*updating file tile Icon*/
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
			if(fileName.length > 16){
				var fileNameI = fileName.substring(0,7);
				var fileNameF = fileName.slice(-7);
				//console.log(fileNameF);
				$(".file > .fileInfoWrapper > div.right").children("h3").text(fileNameI+".."+fileNameF);
				
			} else{
				//changing info
				$(".file > .fileInfoWrapper > div.left, .file > .fileInfoWrapper > div.right").fadeOut('fast', function(){
					$(".file > .fileInfoWrapper > div.left").children("img").attr("src", fileImageUrl);
					$(".file > .fileInfoWrapper > div.right").children("h3").text(fileName);
					$(".file > .fileInfoWrapper > div.right").children("p").find(".size").text(fileSize);
					$(".file > .fileInfoWrapper > div.right").children("p").find(".uploaded").text(fileLastChanged);
				});
			}
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
	
	//Weather tile update
	getLocation();
	function getLocation(){
		if (navigator.geolocation){
			navigator.geolocation.getCurrentPosition(get_api_data);
		} else{
			alert("Geolocation is not supported by this browser.");
		}
	}

	function get_api_data(position){
		try{
			var DEG = 'c';//units of temp
			var d = new Date();//this variable is defined in other functions too. ***GLOABLIZE IT***
			//get the cached data
			var cache = JSON.parse(storage.getItem('weather'));
		    console.log(cache);
		    //api gives temp in kelvin
		    function convertTemperature(kelvin){
		    	// Convert the temperature to either Celsius or Fahrenheit:
		    	return Math.round(DEG == 'c' ? (kelvin - 273.15) : (kelvin*9/5 - 459.67));
		    }
		    //If cache isn't old for more than    \\//30 minutes//\\         than display cache
			if(cache && cache.timestamp && cache.timestamp > d.getTime() - 30*60*1000){
				var city = cache.data.city.name;
				var country = cache.data.city.country;
				var temp = new Array();
				var weatherIcon = new Array();
				var condition = new Array();
				var i =0;
				//iterate over all list objects
				$.each(cache.data.list, function(){
					condition[i] = this.weather[0].main;
					weatherIcon[i] = this.weather[0].icon;
					temp[i] = this.main.temp;
					i++;
				});
				/*console.log(convertTemperature(minTemp[0])+"° / "+convertTemperature(maxTemp[0])+"°");
				console.log(condition[0]);
				console.log(weatherIcon[0]);*/
				$(".weather img").attr("src", "images/icons/weatherIcons/"+weatherIcon[0]+".png");
				$(".weather p").html(convertTemperature(temp[0])+"°C");
				$(".weather h2").html(city+", "+country);
				/*console.log(city+", "+country);
				console.log("not old");
				console.log(cache.timestamp);
				console.log(cache.timestamp-(d.getTime() - 30*60*1000));
				console.log(d.getTime() - 30*60*1000);*/
				//getWeatherFromLocalstorage();
			} else{//else get new data and overwrite the previous cache if any
				console.log('Old, lets refresh');
				var weatherAPI = 'http://api.openweathermap.org/data/2.5/forecast?lat='+position.coords.latitude+'&lon='+position.coords.longitude+'&callback=?';
				//var cache = localStorage.weatherCache && JSON.parse(localStorage.weatherCache);
				var weatherCache;
				//save cache with time stamp for later use purposes
				$.getJSON(weatherAPI, function(response){
					weatherCache = JSON.stringify({
						timestamp:((new Date()).getTime()),	// getTime() returns milliseconds
						data: response
					});
					saveToLocalStorage("weather", weatherCache);
		        });
		        //call the main funcion again
		        //get_api_data(position);
			}
			
		} catch(e){
			console.log("Error. We can't find information about your city!");
			console.log(e);
		}

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
			//console.log(splitPara(textInP));
		
		}
	}
	/*
	var i = 0;
	
	function splitPara(text){
		var splittedNewText = text.split(" ");
		var textArrayLen = splittedNewText.length;
		var newStringI = splittedNewText.slice(0,textArrayLen);
		var newStringF
		return textArrayLen;
	}*/

	/*Localstorage Get todoData*/
	getTodoFromlocalstorage = function() {
        if (localStorage.getItem('todoData')) {
            list.innerHTML = localStorage.getItem('todoData');
        } else{
        	$("#list p").prepend("<span class='checkbox unchecked'>&#9744;</span>");
        }
    };
    /* Clear and save to localstorage the todoData*/
    /*saveTolocalstorage = function() {
        localStorage.clear();
        console.log('cleared ');
        localStorage.setItem('todoData', list.innerHTML);
        console.log(list.innerHTML);
    };*/
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
		getTodoFromlocalstorage(); //call the information
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
		    //save to local storage using function below with two parameters
		    saveToLocalStorage("todoData", list.innerHTML);
		});
	}
	//run the todos update function above
	todosUpdate();
	
	
})(jQuery)
