(function($) {
 $(document).ready(function () {
  var body = $( 'body' );
  
  $(".button_sliding_bg").click(function(){
	$name=$(this).attr('id').substr(4,20);
    $('html, body').animate({
        scrollTop: $("#" + $name).offset().top
    }, 2000);
    return false;
 })
})
}(jQuery));
/* REFERENCE:http://24ways.org/2010/intro-to-css-3d-transforms/ by David DeSandro*/
var init = function() {
	var box = document.querySelector('.box')
	,      showPanelButtons = document.querySelectorAll('ul#options li button')
	,      panelClassName = 'show-front'
	,      onButtonClick = function( event ){
			box.className = "box " + event.target.className;
	//			box.removeClassName( panelClassName );
	//			panelClassName = event.target.className;
	//			box.addClassName( panelClassName );
	};
	for (var i=0, len = showPanelButtons.length; i < len; i++) {
		showPanelButtons[i].addEventListener( 'click', onButtonClick, false);
	}    
//	document.getElementById('toggle-backface-visibility').addEventListener( 'click', function(){
//		box.toggleClassName('panels-backface-invisible');
//	}, false);  
};
window.addEventListener( 'DOMContentLoaded', init, false);
						
//Only to Demo$('button').click(function(){  $('ul#options li button').removeClass('current');  $(this).addClass('current');});
setTimeout(boxTimer, 3000);
var timeteller =0;

function boxTimer() {
    timeteller++;
	var box = document.querySelector('.box');
	if (timeteller==1) {
    	box.className = "box show-bottom";
	}
    else if (timeteller==2) {
    	box.className = "box show-back";
	} 	
    else if (timeteller==3) {
    	box.className = "box show-top";
	} 	
	else {
    	box.className = "box show-front";
		timeteller=0;
	} 	
    setTimeout(boxTimer, 3000);
}