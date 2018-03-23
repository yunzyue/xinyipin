 onload = function(){
 	var times = 6;
 	var out = setInterval(function jian(){
 		--times;
 		console.log(times)
 		if(times<=0){
 			out = undefined;
 			window.location.href = "./login"
 		}
 	},1000)
 }