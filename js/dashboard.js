var windowHeight = $(window).height();
var middleSpace = (1/111) * windowHeight;
var row1Top = (1/12) * windowHeight;
var rowHeight = (windowHeight - ((row1Top*2)+(middleSpace*2)))/3;
$(".row").height(rowHeight+"px");
$("#row1").css("top",row1Top+"px");
var row2Top = row1Top + middleSpace;
$("#row2").css("top",row2Top+"px");
var row3Top = row2Top + middleSpace;
$("#row3").css("top",row3Top+"px");
$("#droparea").click(function(e){
	alert("clicked");
});
