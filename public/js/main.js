$(document).ready(main);

function main(){

	$(window).scroll(function(){
		if ($(window).scrollTop() >= $(".logo").height()) { 	
			$(".mainmenu").addClass('fixed');					
		}else{
			$(".mainmenu").removeClass('fixed');			
		}		
	});	


	$('.resultados').on('click',function(){	
		$('#ModalResultados').modal('show'); 
	});
	$('#resultadosLineas').on('click',function(){	
		$('#ModalResultados').modal('show'); 
	});

	/*MODALES UNIDADES */
 $('#permisolv').on('click',function(){
        $('#ModalLV').modal('show'); 
    });

    $('#registrolv').on('click',function(){
        $('#ModalLVreg').modal('show'); 
    });

    $('#permisoeden').on('click',function(){
        $('#ModalEden').modal('show'); 
    });

    $('#permisoveracruz').on('click',function(){
        $('#ModalVeracruz').modal('show'); 
    });

    $('#licenciaveracruz').on('click',function(){
        $('#LicenciaVeracruz').modal('show'); 
    });    
 
 /* MODALES UNIDADES */
 		
	 $(window).scroll(function(){
        if ($(this).scrollTop() > 500) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });


	irA();

	
}

function irA(){
	$('nav li a').click(function(){
		var seccion = $(this).attr("href");
		$("body, html").animate({
			scrollTop: $(seccion).offset().top -50
		},1000);
	return false;
	});

	$('#secmap').click(function(){
		var seccion1 = $(this).attr("href");
		$("body, html").animate({
			scrollTop: $(seccion1).offset().top
		},1000);
	return false;
	});
}
