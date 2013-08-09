/*Updating the calendar*/
var numCalendarEvents = $(".calendar p").size();
$(".calendar > #1").show().delay(8000).hide("slide", { direction: "left" }, 200);
var nextEvent = 2;
var direction;
var otherDirection;
var a=setInterval(function(){updateCalendar()},8400); 
function updateCalendar(){
    var randomNum = Math.random();
    if(randomNum > 0.5){
        directionID = 1;
    } else{
        directionID = 0;
    }
    if(directionID = 1){
        direction = "right";
    } else{
        direction = "left";
    }
    if(direction == "right"){
        otherDirection = "left";
    } else if(direction == "left"){
        otherDirection = 'right';
    }
    console.log(randomNum);
    if(nextEvent > numCalendarEvents){
        nextEvent = 1;
    }
    $(".calendar > #"+nextEvent).show("slide", { direction: ""+direction+"" }, 200).delay(8000).hide("slide", { direction: ""+otherDirection+"" }, 200);
    if(nextEvent == numCalendarEvents){
        nextEvent = 1;
    } else{
        nextEvent = nextEvent + 1;
    }
}