$(function(){
	$(".action-btn").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 800);
    });
    $("#gmail-btn").click(function() {
    	$(".email-box").slideToggle(200);
    });
    $("#tele-btn").click(function() {
    	$(".tele-box").slideToggle(200);
    });
	$(".works-categories").find(".category").click(function(){
		var activeCategory = $(".active");
		$(activeCategory).removeClass("active");
		$(this).addClass("active")
	});
	$(".category:nth-child(1)").click(function(){
		$(".portfolio-box").fadeOut(200);
		$(".landings").fadeIn(200);
	});
	$(".category:nth-child(2)").click(function(){
		$(".portfolio-box").fadeOut(200);
		$(".corps").fadeIn(200);
	});
	$(".category:nth-child(3)").click(function(){
		$(".portfolio-box").fadeOut(200);
		$(".shops").fadeIn(200);
	});
	$(".p-item-overlay").hover(function(){
		$(this).toggleClass("p-item-ovelay_hover");
	});
	$(".modal-box .close-btn").click(function(){
		$(".modal").fadeOut(300);
		$("body").css("overflow-y", "auto")
	});
	$(".close-area").click(function(){
		$(".modal").fadeOut(300);
		$("body").css("overflow-y", "auto")
	});
	$(".p-item-overlay #btg-btn").click(function(){
		$("#modal-btg").fadeIn(300);
		$("body").css("overflow-y", "hidden")
	});
	$(".p-item-overlay #dbk-btn").click(function(){
		$("#modal-dbk").fadeIn(300);
		$("body").css("overflow-y", "hidden")
	});
	$(".p-item-overlay #vr-btn").click(function(){
		$("#modal-vr").fadeIn(300);
		$("body").css("overflow-y", "hidden")
	});
	$(".p-item-overlay #ovk-btn").click(function(){
		$("#modal-ovk").fadeIn(300);
		$("body").css("overflow-y", "hidden")
	});
	$("#modal-dbk .mini-pictures__picture:nth-child(1)").click(function() {
		$("#modal-dbk .big-picture").css("background-image", "url(img/modal-dbk/first-img.png)");
	});
	$("#modal-dbk .mini-pictures__picture:nth-child(2)").click(function() {
		$("#modal-dbk .big-picture").css("background-image", "url(img/modal-dbk/second-img.jpg)");
	});
	$("#modal-dbk .mini-pictures__picture:nth-child(3)").click(function() {
		$("#modal-dbk .big-picture").css("background-image", "url(img/modal-dbk/third-img.jpg)");
	});
	$("#modal-dbk .mini-pictures__picture:nth-child(4)").click(function() {
		$("#modal-dbk .big-picture").css("background-image", "url(img/modal-dbk/fourth-img.jpg)");
	});
	$("#modal-btg .mini-pictures__picture:nth-child(1)").click(function() {
		$("#modal-btg .big-picture").css("background-image", "url(img/modal-btg/first-img.png)");
	});
	$("#modal-btg .mini-pictures__picture:nth-child(2)").click(function() {
		$("#modal-btg .big-picture").css("background-image", "url(img/modal-btg/second-img.jpg)");
	});
	$("#modal-btg .mini-pictures__picture:nth-child(3)").click(function() {
		$("#modal-btg .big-picture").css("background-image", "url(img/modal-btg/third-img.jpg)");
	});
	$("#modal-btg .mini-pictures__picture:nth-child(4)").click(function() {
		$("#modal-btg .big-picture").css("background-image", "url(img/modal-btg/fourth-img.jpg)");
	});
	$("#modal-vr .mini-pictures__picture:nth-child(1)").click(function() {
		$("#modal-vr .big-picture").css("background-image", "url(img/modal-vr/first-img.jpg)");
	});
	$("#modal-vr .mini-pictures__picture:nth-child(2)").click(function() {
		$("#modal-vr .big-picture").css("background-image", "url(img/modal-vr/second-img.jpg)");
	});
	$("#modal-vr .mini-pictures__picture:nth-child(3)").click(function() {
		$("#modal-vr .big-picture").css("background-image", "url(img/modal-vr/third-img.jpg)");
	});
	$("#modal-vr .mini-pictures__picture:nth-child(4)").click(function() {
		$("#modal-vr .big-picture").css("background-image", "url(img/modal-vr/fourth-img.jpg)");
	});
	$("#modal-ovk .mini-pictures__picture:nth-child(1)").click(function() {
		$("#modal-ovk .big-picture").css("background-image", "url(img/modal-ovk/first-img.jpg)");
	});
	$("#modal-ovk .mini-pictures__picture:nth-child(2)").click(function() {
		$("#modal-ovk .big-picture").css("background-image", "url(img/modal-ovk/second-img.jpg)");
	});
	$("#modal-ovk .mini-pictures__picture:nth-child(3)").click(function() {
		$("#modal-ovk .big-picture").css("background-image", "url(img/modal-ovk/third-img.jpg)");
	});
	$("#modal-ovk .mini-pictures__picture:nth-child(4)").click(function() {
		$("#modal-ovk .big-picture").css("background-image", "url(img/modal-ovk/fourth-img.jpg)");
	});
});