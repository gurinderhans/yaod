/*
*
*
*I am hoping to properly comment this very soon. Thanks :)
*
*/

$(".sortable").height($('.tile').height()+"px");
/*Row 1 width*/
var row1Width = 0;
var numTilesInRow1 = $("#row1 div").length;
$("#row1 div").each(function(index){
	row1Width = $(this).width() * numTilesInRow1+100;
});
$("#row1").width(row1Width+"px");
/*Row 2 width*/
var row2Width = 0;
var numTilesInRow2 = $("#row2 div").length;
$("#row2 div").each(function(index){
	row2Width = $(this).width() * numTilesInRow2+100;
});
$("#row2").width(row2Width+"px");
/*Row 3 width*/
var row3Width = 0;
var numTilesInRow3 = $("#row3 div").length;
$("#row3 div").each(function(index){
	row3Width = $(this).width() * numTilesInRow3+100;
});
$("#row3").width(row3Width+"px");


$(function() {
	$( ".sortable" ).sortable({
		revert: 400,
		scroll: true,
		connectWith: ".sortable",
		change: function( event, ui ) {
			/*Row 1 width*/
			var row1Width = 0;
			var numTilesInRow1 = $("#row1 div").length;
			$("#row1 div").each(function(index){
				row1Width = $(this).width() * numTilesInRow1+100;
			});
			$("#row1").width(row1Width+"px");
			/*Row 2 width*/
			var row2Width = 0;
			var numTilesInRow2 = $("#row2 div").length;
			$("#row2 div").each(function(index){
				row2Width = $(this).width() * numTilesInRow2+100;
			});
			$("#row2").width(row2Width+"px");
			/*Row 3 width*/
			var row3Width = 0;
			var numTilesInRow3 = $("#row3 div").length;
			$("#row3 div").each(function(index){
				row3Width = $(this).width() * numTilesInRow3+100;
			});
			$("#row3").width(row3Width+"px");
		},
		stop: function( event, ui ) {
			/*Row 1 width*/
			var row1Width = 0;
			var numTilesInRow1 = $("#row1 div").length;
			$("#row1 div").each(function(index){
				row1Width = $(this).width() * numTilesInRow1+100;
			});
			$("#row1").width(row1Width+"px");
			/*Row 2 width*/
			var row2Width = 0;
			var numTilesInRow2 = $("#row2 div").length;
			$("#row2 div").each(function(index){
				row2Width = $(this).width() * numTilesInRow2+100;
			});
			$("#row2").width(row2Width+"px");
			/*Row 3 width*/
			var row3Width = 0;
			var numTilesInRow3 = $("#row3 div").length;
			$("#row3 div").each(function(index){
				row3Width = $(this).width() * numTilesInRow3+100;
			});
			$("#row3").width(row3Width+"px");
		}
	});
	$( ".sortable" ).disableSelection();
});
