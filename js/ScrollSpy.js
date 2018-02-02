//Jquery to be loaded when nav links are clicked..they should be able to display the content required

/*
 *enabling or trigger tooltip
 */
$(function () { $("[data-toggle='tooltip']").tooltip(); });


$(document).ready(function(){
	$('.col-ahover').css("display","none");
});

$(document).ready(function(){
	$('#menu-button').hover(function(){
		$('#aside').show('slow');
	},
	function(){
		// $('#aside').hide('slow');
	}
	);
});

$(document).ready(function(){
	$('.col-fill-static').hover(function(){
		$('#aside').hide('slow');
	});
});
	
//creating a box to display logout and user id
$(document).ready(function(){
	$('boxer').click(function(){
		alert("You clicked me");
		// $('mybox').removeAttr("display");
	});
});