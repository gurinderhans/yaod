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