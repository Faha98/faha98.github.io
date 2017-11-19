//Tab JS
var typed = new Typed("#typed", {
  strings: ["Corporate websites.", "Web applications.", 'Telegram bots.'],
    typeSpeed: 50,
    backSpeed: 30,
    backDelay: 1000,
    startDelay: 800,
    loop: true
});
//Responsive main menu
function respon() {
    var x = $("#topNav");
    if (x[0].className === "menu") {
        x[0].className += " responsive";
    } else {
        x[0].className = "menu";
    }
}

//PROGRESSBAR JS
var attr = {
	strokeWidth: 3,
	easing: "easeInOut",
	duration: 1800,
	color: "#2ecc71",
	trailColor: "#e2e2e2",
	trailWidth: 3,
	svgStyle: {width: "100%", height: "100%"},
	text: {
	  style: {
	    color: "#333",
	    right: "0",
	    top: "30px",
	    padding: 0,
	    margin: 0,
	    transform: null
	  },
	  autoStyleContainer: false
	},
	step: (state, bar) => {
    bar.setText(Math.round(bar.value() * 100) + ' %');
  }
}

var designUX = new ProgressBar.Line("#design-ux", attr);

attr.color ="#3498db";
var cmsBar = new ProgressBar.Line("#cms", attr);

attr.color = "#34495e";
var phpBar = new ProgressBar.Line("#php", attr);

attr.color = "#9b59b6";
var hcBar = new ProgressBar.Line("#html-css", attr);

//WoW js for progress Bar
var wow = new WOW(
  {
    boxClass:     "wow",
    animateClass: "animated",
    offset:       90,          
    mobile:       true,       
    live:         true,       
    callback:     function(box) {
   	  designUX.animate(0.7)
      hcBar.animate(0.9);
      cmsBar.animate(0.8);
      phpBar.animate(0.65);
    },
    scrollContainer: null
  }
);
wow.init();

$(window).bind("scroll", function () {
	var height = $(".header-wrap").height() - 10;
    if ($(window).scrollTop() > height || (location.href.split("#"))[1] == "sec-4-r" ) {
        $("header").addClass("fixed animated fadeIn");
        $(".logo").addClass("anImg");
        $(".menu")[0].style.margin = "15px 0 0 0";
        $(".menu li a").each(function(ind, val) {
        	val.style.fontSize = "13px";
        });
    } else {
    	$(".logo").removeClass("anImg");
        $('header').removeClass("fixed fixed animated fadeIn");
        $(".menu")[0].style.margin = "35px 0 0 0";
        $(".menu li a").each(function(ind, val) {
        	val.style.fontSize = "15px";
        });
    }
});
//PageScroll Menu
$("#moreBtn").click(function() {
    $("html, body").animate({
        scrollTop: $("#sec-2").offset().top
    }, 1400);
});

$("#hire-me").click(function() {
    $("html, body").animate({
        scrollTop: $("#sec-4").offset().top
    }, 1400);
});

$("a[rel='m_PageScroll2id']").mPageScroll2id({
	highlightClass:"link-highlight",
	forceSingleHighlight:true
});


//validate forms
$("#phone").bind("keyup blur", function () {
	var node = $(this);
	node.val(node.val().replace(/[^0-9]/g,'') );
});
$('#name').bind('keyup blur',function(){ 
   var node = $(this);
   node.val(node.val().replace(/([^a-zA-Z\u0400-\u04FF ])/g,'') ); 
});

$('#email').bind('keyup blur',function(){ 
   var node = $(this);
   node.val(node.val().replace(/([^a-zA-Z\u0400-\u04FF@.0-9_-])/g,'') ); 
});

if((location.href.split("#"))[1] == "sec-4-r"){
    $("#name")[0].style.borderColor = "#FF3123";
    $("#email")[0].style.borderColor = "#FF3123";
    $("#message")[0].style.borderColor = "#FF3123";
}

$("#message").bind("keypress blur", function() {
    $("#countChar").html(500 - $("#message").val().length);
})