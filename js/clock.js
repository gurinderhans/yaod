var myVar=setInterval(function(){myTimer()},1000);
$("#clockWrapper h2").html("<img src='https://themes.svn.wordpress.org/presswork/0.9/admin/images/loader.gif' />");
function myTimer(){
    var d=new Date();
    var t=d.toLocaleTimeString("en-US");
    $("#clockWrapper h2").html(t);
}