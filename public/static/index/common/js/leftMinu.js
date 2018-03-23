$(function(){
	var wHeight = $(window).height();
	$('.nav_menu').css('height',wHeight-90);
	$('.leftBar').css('height',wHeight-90);
	// console.log(wHeight-90)
	// $('.leftBar').mouseenter(function(){
	// 	$('.nav_menu').animate({left:0},500);
	// })
	// $('.nav_menu').mouseleave(function(){
	// 	$(this).animate({left:'-90px'},500);
	// })
        
    window.addEventListener("scroll",function(e){
    	var my_scroll = document.documentElement.scrollTop||document.body.scrollTop;
    	
    	if(my_scroll >= 90){
    		$('.nav_menu').css({
    			"height":wHeight,
    			"top":0
    		});
			$('.leftBar').css({
				'height':wHeight,
				"top":0
			});
			$('.nav_menu a').css({
				"margin-top":"100%"
			});
    	}else{
    		// console.log(my_scroll)
    		// console.log(wHeight-90)
			$('.nav_menu').css({
    			"height":wHeight-90+my_scroll,
    			"top":90-my_scroll+"px"
    		});
			$('.leftBar').css({
				'height':wHeight-90+my_scroll,
				"top":90-my_scroll+"px"
			});
			$('.nav_menu a').css({
				"margin-top":"90%"
			});
    	}
    })
})