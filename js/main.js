$(document).ready(function(){
	$(".hamburger-bar").click(function(e){
		e.preventDefault();
		$(".wrapper").addClass("opensidebar");
	})
	$(".close-sidebar").click(function(e){
		e.preventDefault();
		$(".wrapper").removeClass("opensidebar");
	})

	$(".slide-up").click(function(e){
		e.preventDefault();
		$("body").stop().animate({scrollTop:0},500,'swing');
	})

})


$(function(){
	var currPos = $(window).scrollTop();
	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		if((scroll > currPos) && (scroll > 0) && (scroll < $(".wrapper").height())){
			/*
			if($(".wrapper").hasClass("header-small") == false){
				$(".wrapper").addClass("header-small");
			}
			*/

			$(".header-desktop .main-logo img").css({
				'transform':'scale(0.74)'
			})
			$(".header-desktop .section-menu").css({
				'transform':'scale(0,0)',
				'height': 0,
				'transform': 'translate(0,-100%)',
				'opacity': 0,
				'overflow': 'hidden'
			})

			$(".header-desktop .hamburger-bar").css({
				'opacity': 1
			})

			$(".header-desktop hr").css({
				'margin-top': 0,
				'opacity': 0,
			});

		}else{

			$(".header-desktop .main-logo img").css({
				'transform':'scale(1)'
			})

			$(".header-desktop .section-menu").css({
				'transform':'scale(1,1)',
				'height': 'auto',
				'transform': 'translate(0,0)',
				'opacity': 1,
				'overflow': 'visible'
			})
			$(".header-desktop .hamburger-bar").css({
				'opacity': 0
			})

			$(".header-desktop hr").css({
				'margin-top': 20,
				'opacity': 1,
			});


			/*
			if($(".wrapper").hasClass("header-small") == true){
				$(".wrapper").removeClass("header-small");
			}
			*/
		}
		currPos = scroll;


		//side Control
		if(($(window).scrollTop() + $(window).height() > $(document).height() * 0.7) && ($(window).scrollTop() > 1200) ) {
			//alert("show");
			$(".side-controler").fadeIn();
		}else{
			$(".side-controler").fadeOut();
		}


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