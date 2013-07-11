$(function(){
	$( "ul.droptrue" ).sortable({
		connectWith: "ul.sortable",
		revert:200
	});
	$( "ul.dropfalse" ).sortable({
		connectWith: "ul",
		dropOnEmpty: false
	});
	$( ".sortable" ).disableSelection();
});
