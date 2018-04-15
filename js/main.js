$(document).ready(function(){
	$(".hamburger-bar").click(function(e){
		e.preventDefault();
		$(".wrapper").addClass("opensidebar");
	})
	$(".close-sidebar").click(function(e){
		e.preventDefault();
		$(".wrapper").removeClass("opensidebar");
	})

})


$(function(){
	var currPos = $(window).scrollTop();
	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		if((scroll > currPos) && (scroll > 0) && (scroll < $(".wrapper").height())){
			$(".wrapper").addClass("header-small");
		}else{
			$(".wrapper").removeClass("header-small");
		}
		currPos = scroll;
	})
})

//Parallax
$(function(){
	if($("#skrollr-body").length > 0){
		if($(window).width()>1140){
			skrollr.init({
				smoothScrolling: false,
				forceHeight: false,
				mobileDeceleration: 0.004
			});
			setTimeout(function () {
			  skrollr.get().refresh();
			}, 0);
		}

		$(window).on('resize', function () {
			//console.log("width = ", $(window).width());
			if($(window).width()>1140){
				if ($(window).width() <= 1140) {
			    	skrollr.init().destroy(); // skrollr.init() returns the singleton created above
			    }else{
				    skrollr.init({
						smoothScrolling: false,
						forceHeight: false,
						mobileDeceleration: 0.004
					});
					setTimeout(function () {
					  skrollr.get().refresh();
					}, 0);
			    }
			}

		});
	}

})