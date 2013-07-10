/*
*
*
*I am hoping to properly comment this very soon. Thanks :)
*
*/

$(".sortable").height($('.tile').height()+"px");
var i = 0;
var rowWidthArr = new Array();
/*Row 1 width*/
var row1Width = 0;
$("#row1 div").each(function(index){
	rowWidthArr[i] = $(this).width();
	row1Width += rowWidthArr[i]+33;
	i++;
});
$("#row1").width(row1Width+"px");
/*Row 2 width*/
var row2Width = 0;
$("#row2 div").each(function(index){
	rowWidthArr[i] = $(this).width();
	row2Width += rowWidthArr[i]+33;
	i++;
});
$("#row2").width(row2Width+"px");
/*Row 3 width*/
var row3Width = 0;
$("#row3 div").each(function(index){
	rowWidthArr[i] = $(this).width();
	row3Width += rowWidthArr[i]+33;
	i++;
});
$("#row3").width(row3Width+"px");


$(function() {
	$( ".sortable" ).sortable({
		revert: 400,
		scroll: 1000,
		opacity: 0.9,
		connectWith: ".sortable",
		change: function( event, ui ) {
			/*Row 1 width*/
			var row1Width = 0;
			$("#row1 div").each(function(index){
				rowWidthArr[i] = $(this).width();
				row1Width += rowWidthArr[i]+33;
				i++;
			});
			$("#row1").width(row1Width+"px");
			/*Row 2 width*/
			var row2Width = 0;
			$("#row2 div").each(function(index){
				rowWidthArr[i] = $(this).width();
				row2Width += rowWidthArr[i]+33;
				i++;
			});
			$("#row2").width(row2Width+"px");
			/*Row 3 width*/
			var row3Width = 0;
			$("#row3 div").each(function(index){
				rowWidthArr[i] = $(this).width();
				row3Width += rowWidthArr[i]+33;
				i++;
			});
			$("#row3").width(row3Width+"px");
		},
		stop: function( event, ui ) {
			/*Row 1 width*/
			var row1Width = 0;
			$("#row1 div").each(function(index){
				rowWidthArr[i] = $(this).width();
				row1Width += rowWidthArr[i]+33;
				i++;
			});
			$("#row1").width(row1Width+"px");
			/*Row 2 width*/
			var row2Width = 0;
			$("#row2 div").each(function(index){
				rowWidthArr[i] = $(this).width();
				row2Width += rowWidthArr[i]+33;
				i++;
			});
			$("#row2").width(row2Width+"px");
			/*Row 3 width*/
			var row3Width = 0;
			$("#row3 div").each(function(index){
				rowWidthArr[i] = $(this).width();
				row3Width += rowWidthArr[i]+33;
				i++;
			});
			$("#row3").width(row3Width+"px");
		}
	});
	$( ".sortable" ).disableSelection();
});
