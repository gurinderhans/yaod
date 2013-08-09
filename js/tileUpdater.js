/*Updating the calendar*/
var numCalendarEvents = $(".calendar p").size();
$(".calendar > #1").show().delay(8000).hide("slide", { direction: "left" }, 200);
var nextEvent = 2;
var dirShow = "";
var dirHide = "";
var randomNum;
var a=setInterval(function(){updateCalendar()},8400); 
function updateCalendar(){
    randomNum = Math.floor(Math.random()*2);
    if(randomNum === 1){
        dirShow = "left";
        dirHide = "right";
    } else if(randomNum === 0){
        dirShow = "right";
        dirHide = "left";
    }
    if(nextEvent > numCalendarEvents){
        nextEvent = 1;
    }
    $(".calendar > #"+nextEvent).show("slide", { direction: ""+dirShow+"" }, 200).delay(8000).hide("slide", { direction: ""+dirHide+"" }, 200);
    if(nextEvent == numCalendarEvents){
        nextEvent = 1;
    } else{
        nextEvent = nextEvent + 1;
    }
}