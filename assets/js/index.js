
//inicialização
$(document).ready(function(){
	$("#corpo").hide();
	//meio li imagens
	$("#um").css("background-image","url('assets/midia/img/social.png')");
	$("#dois").css("background-image","url('assets/midia/img/noticias2.jpg')");
	$("#treis").css("background-image","url('assets/midia/img/sustentabilidade3.jpg')");
	$("#quatro").css("background-image","url('assets/midia/img/programas3.jpg')");
	$("#cinco").css("background-image","url('assets/midia/img/leilao.jpg')");
	$("#seis").css("background-image","url('assets/midia/img/poster1.jpg')");
	$("#sete").css("background-image","url('assets/midia/img/sl1.jpg')");
	$("#oito").css("background-image","url('assets/midia/img/vida-financeira.jpg')");
});
//apos carregar a pagina
$(window).on('load',function(){
	$("body").css("background-image","url('assets/midia/img/sl1.jpg')");
	$("#loadIcon")
		.hide()
		.fadeOut("slow");
	$("#corpo").fadeIn("slow");
	//altera a posição inicial do plano de fundo de acordo com o tamanho da navbar
	var navbar = $(".nav-item").css("height");
	var footer = $(".if-facebook").css("height");

			
	$(".img-header").css("height",navbar);
	function ajustarBack(navbar,footer){
		$("body").css("background-position","0px "+navbar);
		$("footer").css("background-position","0px "+footer);
	}

	
	ajustarBack(navbar,footer);
	setInterval(carosel,6000);
	//slide de fundo
	function carosel(){
		var fundo = $("body").attr("id");
		switch(fundo) {
		    case "uno":
		        $("body").css("background-image","url('assets/midia/img/sl2.jpg')");
		        $("body").attr("id","dos");
		        break;
		    case "dos":
		        $("body").css("background-image","url('assets/midia/img/sl3.jpg')");
		        $("body").attr("id","trece");
		        break;
		    default:
		        $("body").css("background-image","url('assets/midia/img/sl1.jpg')");
		        $("body").attr("id","uno");
		}
		
	}	
	
});

	


//passar imagens para o lado no meio
function mudardiv(){

	if ($("#segundo").css("display")=="none") {
		$("#primeiro").hide();
		$("#segundo").fadeIn("slow");	 
	}else{
		$("#segundo").hide();
		$("#primeiro").fadeIn("slow"); 
	}		
}

	
