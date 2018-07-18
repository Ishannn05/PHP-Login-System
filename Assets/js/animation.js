$(document).ready(function(){
	$("#td1").fadeIn(2500).css("display", "block");
	setTimeout(function(){
		$("#td2").fadeIn(2500).css("display", "block");
		setTimeout(function(){
			$("#td1").slideUp(2500);
			$("#td2").slideUp(2500);
		},32500);
	},5500);
	setInterval(function(){
	$("#td1").fadeIn(2500).css("display", "block");
	setTimeout(function(){
		$("#td2").fadeIn(2500).css("display", "block");
		setTimeout(function(){
			$("#td1").slideUp(2500);
			$("#td2").slideUp(2500);
		},32500);
	},5500);
	},40000);
});	