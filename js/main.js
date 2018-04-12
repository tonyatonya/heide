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