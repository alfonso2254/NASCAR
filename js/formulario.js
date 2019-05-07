$('.toggle').click(function(){
	$('.formulario').animate({
		height: "toggle",
		'padding-top': 'toggle',
		'padding-bottom': 'toggle',
		opacity: 'toggle'
	}, "slow")

});
$('.toggle1').click(function(){
	$('.formulario_perfil').animate({
		height: "toggle",
		'padding-top': 'toggle',
		'padding-bottom': 'toggle',
		opacity: 'toggle'
	}, "slow")

});
$('.toggle2').click(function(){
	$('.formulario_seguridad').animate({
		height: "toggle",
		'padding-top': 'toggle',
		'padding-bottom': 'toggle',
		opacity: 'toggle'
	}, "slow")

});

function quitar(){
	document.getElementById("negro").style.display="none";
	document.getElementById("dialogo").style.display="none";
	document.getElementById("boton").style.display="none";
}

function quitarr_fomr1(){
	document.getElementById("formulario1").style.display="none";
}

function quitarr_fomr2(){
	document.getElementById("formulario2").style.display="none";
}

function cambiar(){
	document.getElementById("boton_cambiar_imagen").style.display="block";
}