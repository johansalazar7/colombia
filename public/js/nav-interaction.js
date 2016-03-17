// nav interaction
"use strict";
$(document).ready(function() {
	var menu = $('#main');
	var menu_ofsset = menu.offset();
	var logo = document.getElementById('logo');
	$(window).on('scroll', function() {
		
		//Al cumplirse la condicion.
		if($('body').scrollTop() > menu_ofsset.top) {
			/*Ocultar logo*/
			logo.setAttribute("class","logo-fixed");
			menu.addClass('fixed');
		}else {
			
			menu.removeClass('fixed');
			logo.setAttribute("class","logo");
		}
	});
	
	//data ifx 
	$(document).load(function() {
	   var operator = document.getElementsByClassName('tabla-indicadores_ind_todos');
	   //set class
	   operator[0].setAttribute("class","dataifxmod");
        
    });
	
		
		
	
    
});