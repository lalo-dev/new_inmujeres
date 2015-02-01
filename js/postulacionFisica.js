$(document).ready(function(){
	$('.paso2,.paso3').hide();
});

function mostrarPaso1(){
	$('.paso2,.paso3').hide();
	$('.paso1').show();
}

function mostrarPaso2(){
	$('.paso1,.paso3').hide();
	$('.paso2').show();
}

function mostrarPaso3(){
	$('.paso1,.paso2').hide();
	$('.paso3').show();
}

function finalizar(){
	if (confirm('¿Estas seguro de finalizar la postulación?')) {
		guardarPostulacion();
	}
}

function guardarPostulacion(){
	console.log('Inicia guardado de informacion');

	var medio              = $('#slcEnteraste :selected').val();
	var sexo               = $('input[name=optionsSexo]:checked').val();
	var nombrePropone      = $('#txtNombrePostulante').val();
	var apPropone          = $('#txtApPostulante').val();
	var amPropone          = $('#txtAmPostulante').val();
	var emailPropone       = $('#txtEmailPostulante').val();
	var telefonoPropone    = $('#txtTelefonoPostulante').val();
	var movilPropone       = $('#txtCelPostulante').val();
	var cpPropone          = $('#txtCpPostulante').val();
	var xPropone           = $('#hdnX').val();
	var yPropone           = $('#hdnY').val();
	//------------------------------------------------------------------------
	var descripcionMujer   = $('#txtMujer').val();
	var misma              = $('#optionMujer').is(':checked') ? '1':'0';
	var nombrePostulada    = $('#txtNombrePostulada').val();
	var apPostulada        = $('#txtApPostulada').val();
	var amPostulada        = $('#txtAmPostulada').val();
	var emailPostulada     = $('#txtEmailPostulada').val();
	var telefonoPostulada  = $('#txtTelefonoPostulada').val();
	var movilPostulada     = $('#txtCelPostulada').val();
	var estadoPostulada    = $('#slcEstadoPostulada :selected').val();
	var municipioPostulada = $('#slcMunicipioPostulada :selected').val();
	var ciudadPostulada    = $('#slcCiudadPostulada :selected').val();
	var relacionPostulada  = $('#slcRelacion :selected').val();
	//------------------------------------------------------------------------
	var premios            = $('#premio1').is(':checked') ? '1':'';
	premios                += $('#premio2').is(':checked') ? '-2':'';
	premios                += $('#premio3').is(':checked') ? '-3':'';
	premios                += $('#premio4').is(':checked') ? '-4':'';
	premios                += $('#premio5').is(':checked') ? '-5':'';
	premios                += $('#premio6').is(':checked') ? '-6':'';
	var nivel              = $('#slcNivel :selected').val();
	var antiguedad         = $('#slcAntiguedad :selected').val();
	var nombreEmpresa      = $('#txtNombreEmpresa').val();
	var estadoEmpresa      = $('#slcEstadoEmpresa :selected').val();
	var municipioEmpresa   = $('#slcMunicipioEmpresa :selected').val();
	var ciudadEmpresa      = $('#slcCiudadEmpresa :selected').val();
	var telefonoEmpresa    = $('#txtTelefonoEmpresa').val();
	var aviso              = $('#aviso').is(':checked') ? '1':'0';

	$.post("../php/postulacionFisica.php", { 
		acc:"guardarPostulacion",
		medio:medio,
		sexo:sexo,
		nombrePropone:nombrePropone,
		apPropone:apPropone,
		amPropone:amPropone,
		emailPropone:emailPropone,
		telefonoPropone:telefonoPropone,
		movilPropone:movilPropone,
		cpPropone:cpPropone,
		xPropone:xPropone,
		yPropone:yPropone,
		descripcionMujer:descripcionMujer,
		misma:misma,
		nombrePostulada:nombrePostulada,
		apPostulada:apPostulada,
		amPostulada:amPostulada,
		emailPostulada:emailPostulada,
		telefonoPostulada:telefonoPostulada,
		movilPostulada:movilPostulada,
		estadoPostulada:estadoPostulada,
		municipioPostulada:estadoPostulada,
		ciudadPostulada:ciudadPostulada,
		relacionPostulada:relacionPostulada,
		premios:premios,
		nivel:nivel,
		antiguedad:antiguedad,
		nombreEmpresa:nombreEmpresa,
		estadoEmpresa:estadoEmpresa,
		municipioEmpresa:municipioEmpresa,
		ciudadEmpresa:ciudadEmpresa,
		telefonoEmpresa:telefonoEmpresa,
		aviso:aviso
	}, function(data) {
		alert(data);
	});
}