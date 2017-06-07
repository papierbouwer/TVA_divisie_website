$(document).ready(function(){
  "use strict";
  main();
});

function main()
{
	"use strict";
	var klik = false;
	$('.handle').click(function(){
		if(klik) klik = false; else klik = true;
		if(klik){
			$('nav ul').css({"display": "block"});
		} else{
			$('nav ul').css({"display": "none"});
		}
	});
	$(window).resize(function(){
		if($(window).width() > 800 || klik){ 
			$('nav ul').css({"display": "block"});
		} else{
			$('nav ul').css({"display": "none"});
		}
	});
}