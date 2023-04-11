$(document).ready(function() {

	//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
	$('.accordionButton').click(function() {

		//REMOVE THE ON CLASS FROM ALL BUTTONS
		$('.accordionButton').removeClass('on');
		  
		//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
	 	$('.accordionContent').slideUp('normal');
   
		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
		if($(this).next().is(':hidden') == true) {
			
			//ADD THE ON CLASS TO THE BUTTON
			$(this).addClass('on');
			  
			//OPEN THE SLIDE
			$(this).next().slideDown('normal');
		 } 
		  
	 });
	  
	
	/*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	//ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER 
	$('.accordionButton').mouseover(function() {
		$(this).addClass('over');
		
	//ON MOUSEOUT REMOVE THE OVER CLASS
	}).mouseout(function() {
		$(this).removeClass('over');										
	});
	
	/*** END REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	
	/********************************************************************************************************************
	CLOSES ALL S ON PAGE LOAD
	********************************************************************************************************************/	
	
	   
	function adjustStyle(width) {
    width = parseInt(width);
    if (width >= 767) {
        $('.accordionContent').show();
    }  else {
      $('.accordionContent').hide();
    }
}

$(function() {
    adjustStyle($(this).width());
    $(window).resize(function() {
        adjustStyle($(this).width());
    });
});


$('.fxhover').hover(
		function(){
			
			$(this).find('.txt_noti').animate({top:"-90px"}, 300);			
		}, 
		function(){
							
			$(this).find('.txt_noti').animate({top:"0"}, 100);
		}
	 );
	 
	 
	  if ($("div.col-der").height() > $("div.box-col").height()) {
            $("div.box-col").height($("div.col-der").height())
        }else{
            $("div.col-der").height($("div.box-col").height())
        }

});
