$(function(){
	$( "ul.droptrue" ).sortable({
		connectWith: "ul.sortable",
		revert:200,
		tolerance: "pointer",
		opacity:0.85,
		start: function( event, ui ) {
		}
	});
	$( "ul.dropfalse" ).sortable({
		connectWith: "ul",
		dropOnEmpty: false
	});
	$( ".sortable" ).disableSelection();
	
	/*Adding an invisible layer on top of each tile*/
	$(".tile").prepend("<div class='invisible_cover'></div>");
	
	/*Tile Opening*/
	/*$(".tile").mouseup(function(){
		$(this).css({
			"z-index": "100000",
			"position": "absolute",
			"top": "11%",
			"left": "13%",
			"width": "950px",
			"height": "500px"
		});
		$(this).siblings().css("opacity", "0.4");
	});*/
	
	/*Notifications*/
});
