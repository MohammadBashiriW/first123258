$(document).ready(function(){
	$("#demo").carousel({interval:3500});


$("#item1").click(function(){
	$("#demo").carousel(0);
});
$("#item2").click(function(){
	$("#demo").carousel(1);
});
$("#item3").click(function(){
	$("#demo").carousel(2);
});

$(".carousel-control-next").click(function(){
	$("#demo").carousel("next");
});
$(".carousel-control-prev").click(function(){
	$("#demo").carousel("prev");
});


});






