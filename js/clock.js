var myVar=setInterval(function(){myTimer()},1000);
$("#clockWrapper h2").html("<img src='http://gurinderhans.kd.io/yaod/images/483.gif' />");
$("#clockWrapper").css("background","#fff");
function myTimer(){
    var d=new Date();
    var t=d.toLocaleTimeString("en-US");
    $("#clockWrapper h2").html(t);
    $("#clockWrapper").css("background","none");
}
