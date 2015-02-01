<?php
	include_once("../php/ConexionBD.php");

	$vConn = new ConexionBD();

	if(isset($_POST[acc])){
		
		$vAcc = $_POST[acc];
		
		switch($vAcc)
		{
			case "guardarPostulacion":
					guardarPostulacion();
				break;
		}
	}


	function guardarPostulacion(){
		global $vConn;

		$medio              = $_POST[medio];
		$sexo               = $_POST[sexo];
		$nombrePropone      = $_POST[nombrePropone];
		$apPropone          = $_POST[apPropone];
		$amPropone          = $_POST[amPropone];
		$emailPropone       = $_POST[emailPropone];
		$telefonoPropone    = $_POST[telefonoPropone];
		$movilPropone       = $_POST[movilPropone];
		$cpPropone          = $_POST[cpPropone];
		$x                  = $_POST[xPropone];
		$y                  = $_POST[yPropone];
		$descripcionMujer   = $_POST[descripcionMujer];
		$misma              = $_POST[misma];
		$nombrePostulada    = $_POST[nombrePostulada];
		$apPostulada        = $_POST[apPostulada];
		$amPostulada        = $_POST[amPostulada];
		$emailPostulada     = $_POST[emailPostulada];
		$telefonoPostulada  = $_POST[telefonoPostulada];
		$movilPostulada     = $_POST[movilPostulada];
		$estadoPostulada    = $_POST[estadoPostulada];
		$municipioPostulada = $_POST[estadoPostulada];
		$ciudadPostulada    = $_POST[ciudadPostulada];
		$relacionPostulada  = $_POST[relacionPostulada];
		$premios            = $_POST[premios];
		$nivel              = $_POST[nivel];
		$antiguedad         = $_POST[antiguedad];
		$nombreEmpresa      = $_POST[nombreEmpresa];
		$estadoEmpresa      = $_POST[estadoEmpresa];
		$municipioEmpresa   = $_POST[municipioEmpresa];
		$ciudadEmpresa      = $_POST[ciudadEmpresa];
		$telefonoEmpresa    = $_POST[telefonoEmpresa];
		$aviso              = $_POST[aviso];

		$vQuery = "";
		$vQuery = " 
			INSERT INTO registropersonafisica (`idMedioDifucion`, `sexoPropone`, `nombrePropone`, `apPropone`, `amPropone`, `emailPropone`, `telefonoPropone`, 
				`movilPropone`, `cpPropone`, `xPropone`, `yPropone`, `descripcionMujer`, `misma`, `nombrePostula`, `apPostula`, `amPostula`, `emailPostula`, 
				`telefonoPostula`, `movilPostula`, `estadoPostula`, `municipioPostula`, `ciudadPostula`, `idRelacion`, `premios`, `idPuesto`, `idAntiguedad`, 
				`nombreEmpresa`, `estadoEmpresa`, `municipioEmpresa`, `ciudadEmpresa`, `telefonoEmpresa`, `aviso`) 
			VALUES (
				'".$medio."',
				'".$sexo."',
				'".$nombrePropone."',
				'".$apPropone."',
				'".$amPropone."',
				'".$emailPropone."',
				'".$telefonoPropone."',
				'".$movilPropone."',
				'".$cpPropone."',
				'".$x."',
				'".$y."',
				'".$descripcionMujer."',
				'".$misma."',
				'".$nombrePostulada."',
				'".$apPostulada."',
				'".$amPostulada."',
				'".$emailPostulada."',
				'".$telefonoPostulada."',
				'".$movilPostulada."',
				'".$estadoPostulada."',
				'".$municipioPostulada."',
				'".$ciudadPostulada."',
				'".$relacionPostulada."',
				'".$premios."',
				'".$nivel."',
				'".$antiguedad."',
				'".$nombreEmpresa."',
				'".$estadoEmpresa."',
				'".$municipioEmpresa."',
				'".$ciudadEmpresa."',
				'".$telefonoEmpresa."',
				'".$aviso."'
			)";

		//Insertando
		$vConn->ExecuteWithoutReturn($vQuery);	

		echo 'Se guardo correctamente la postulación';
	}
?>