/*Updating the calendar*/

var a=setInterval(function(){updateCalendar()},1000);
$("#eventTwo").hide();
function updateCalendar(){
    $("#eventOne").delay(8000).hide("slide", { direction: "left" }, 300);
    $("#eventTwo").delay(8000).show("slide", { direction: "right" }, 300);
    
    
    $("#eventOne").delay(8000).show("slide", { direction: "left" }, 300);
    $("#eventTwo").delay(8000).hide("slide", { direction: "right" }, 300);
}