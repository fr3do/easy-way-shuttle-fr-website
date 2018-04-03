$(function(){

   $('.sticky').each(function(){
      var parent = $(this).parent();
	  var dTop = $(this).offset().top;
	  var elem = $(this);
	  parent.css('position','relative');
	  elem.css('position','absolute');
	  $(window).scroll(function(){
         if(scrollY()>dTop){
		  elem.stop().animate({top:scrollY()-parent.offset().top+20},500)
	    }else{ 
		  elem.stop().animate({top:dTop-parent.offset().top},500)
		
	  }
	  
	  });

        if(scrollY()>dTop){
		  elem.stop().animate({top:scrollY()-parent.offset().top+20},500)
	    }   
   
   });

});

/**
return the position of the top
**/

function scrollY(){
	scrOfY=0;
	if (typeof(window.pageYOffset) == 'number'){
		//Netscape compliant
		scrOfY = window.pageYOffset;
	}else if(document.body&&(document.body.scrollTop)){
		//DOM compliant
		scrOfY = document.body.scrollTop;
	}else if(document.documentElement&&(document.documentElement.scrollTop)){
		//IE6 standars compliant mode
		scrOfY = document.documentElement.scrollTop;
	}
	return scrOfY;
}