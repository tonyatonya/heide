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
$(window).scroll(function (event) {
    if($(window).scrollTop() > ($("header").height()*0.1)) {
	    $(".wrapper").addClass("header-small");
	}else{
		$(".wrapper").removeClass("header-small");
	}
});



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