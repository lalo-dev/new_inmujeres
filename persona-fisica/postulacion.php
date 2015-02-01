<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INMUJERES | POSTULAR</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../favicon.ico">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" style="margin-top: 50px;">
      <div class="row">
        <div class="col-sm-offset-1 col-sm-10">
            
            <div class="header">
              <img src="../img/top_inicio.jpg" alt="Mujeres" style="width:100%">
            </div>

            <br>
            <br>
            <div class="row">
              <div class="col-sm-12">
                <h2>REGISTRO DE MUJER</h2>
              </div>
            </div>

            <div class="row paso1" style="border: solid 1px #000">
              <div class="col-sm-12">
                  <h3>Persona que Propone <small>Paso 1 de 3</small></h3>
                  <hr>
                  <br>
                  <div class="row">
                    <div class="form-group col-sm-8">
                      <label for="slcEnteraste">¿Cómo te enteraste del Premio FEM labora?</label>
                      <select name="slcEnteraste" id="slcEnteraste" class="form-control">
                        <option value="0">Selecciona</option>
                        <option value="1">Navegando en Internet</option>
                        <option value="2">En Redes Sociales o Laborales</option>
                        <option value="3">Me llegó un E-mail</option>
                        <option value="4">Por el Periódico</option>
                        <option value="5">En una Revista</option>
                        <option value="6">Escuchando la Radio</option>
                        <option value="7">Lo vi en Televisión</option>
                        <option value="8">Me dijo una Persona</option>
                        <option value="9">Por una Institución Aliada del Premio</option>
                        <option value="10">Invitación Directa del Premio</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="txtNombre">Eres</label>
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="radio" name="optionsSexo" id="optionsSexo1" value="1"> Hombre
                        </div>
                        <div class="col-sm-6">
                          <input type="radio" name="optionsSexo" id="optionsSexo2" value="2"> Mujer
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-12">
                      <label for="txtNombre">¿Dinos Quién Eres?</label>
                      <div class="row">
                        <div class="form-group col-sm-4">
                          <label for="txtNombrePostulante">Nombre</label>
                          <input type="text" class="form-control" id="txtNombrePostulante" name="txtNombrePostulante" placeholder="Nombre">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="txtApPostulante">Apellido Paterno</label>
                          <input type="text" class="form-control" id="txtApPostulante" name="txtApPostulante" placeholder="Apellido Paterno">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="txtAmPostulante">Apellido Materno</label>
                          <input type="text" class="form-control" id="txtAmPostulante" name="txtAmPostulante" placeholder="Apellido Materno">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtEmailPostulante">¿Cuál es tu E-mail para mantenerte informado?</label>
                      <input type="text" class="form-control" id="txtEmailPostulante" name="txtEmailPostulante" placeholder="E-mail">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtTelefonoPostulante">¿A qué número de Teléfono Fijo podemos hablarte?</label>
                      <input type="text" class="form-control" id="txtTelefonoPostulante" name="txtTelefonoPostulante" placeholder="Telefono local">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtCelPostulante">¿En qué número de Teléfono Móvil te localizamos?</label>
                      <input type="text" class="form-control" id="txtCelPostulante" name="txtCelPostulante" placeholder="Telefono movil">
                    </div>
                    <div class="form-group col-sm-3">
                      <label for="txtCpPostulante">Tu Código Postal es:</label>
                      <input type="text" class="form-control" id="txtCpPostulante" name="txtCpPostulante" placeholder="Codigo Postal">
                      <input type="hidden" id="hdnX" value="0">
                      <input type="hidden" id="hdnY" value="0">
                    </div>
                  </div>
                  <br>

                  <div class="mapa text-center">
                    <img src="../img/mapa.png" alt="mapa" style="width: 60%">
                  </div>
                  <br>
                  <br>
                  <p class="text-center">
                    <button type="button" class="btn btn-primary" onclick="mostrarPaso2()">SIGUIENTE</button>
                  </p>
              </div>
            </div>

            <div class="row paso2" style="border: solid 1px #000">
              <div class="col-sm-12">
                  <h3>Mujer que se va a Postular <small>Paso 2 de 3</small></h3>
                  <hr>
                  <br>
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <label for="txtMujer">¿A qué Mujer deseas Proponer al Premio FEM labora?</label>
                      <input type="text" class="form-control" id="txtMujer" name="txtMujer" placeholder="Descripción">
                    </div>
                    <div class="form-group col-sm-3">
                      <label for="">Es: Mujer</label>
                      <br>
                      <input type="checkbox" id="optionMujer"> Soy la Misma que Propone
                    </div>
                    <div class="form-group col-sm-3">
                      <label for="txtNombrePostulada">Nombre</label>
                      <input type="text" class="form-control" id="txtNombrePostulada" name="txtNombrePostulada" placeholder="Nombre">
                    </div>
                    <div class="form-group col-sm-3">
                      <label for="txtApPostulada">Apellido Paterno</label>
                      <input type="text" class="form-control" id="txtApPostulada" name="txtApPostulada" placeholder="Apellido Paterno">
                    </div>
                    <div class="form-group col-sm-3">
                      <label for="txtAmPostulada">Apellido Materno</label>
                      <input type="text" class="form-control" id="txtAmPostulada" name="txtAmPostulada" placeholder="Apellido Materno">
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="txtEmailPostulada">¿Proporciona su Dirección de Correo Electrónico para informarle?</label>
                      <input type="text" class="form-control" id="txtEmailPostulada" name="txtEmailPostulada" placeholder="E-mail">
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="txtTelefonoPostulada">¿Danos su Teléfono Fijo para comunicarnos con ella?</label>
                      <input type="text" class="form-control" id="txtTelefonoPostulada" name="txtTelefonoPostulada" placeholder="Telefono local">
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="txtCelPostulada">¿Cuál es su número de Teléfono Móvil para localizarla?</label>
                      <input type="text" class="form-control" id="txtCelPostulada" name="txtCelPostulada" placeholder="Telefono movil">
                    </div>
                    <div class="form-group col-sm-12">
                      <label for="">¿Dónde Radica Actualmente ella?</label>
                      <div class="row">
                        <div class="form-group col-sm-4">
                          <label for="slcEstadoPostulada">Estado</label>
                          <select name="slcEstadoPostulada" id="slcEstadoPostulada" class="form-control">
                            <option value="0">Selecciona</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="slcMunicipioPostulada">Municipio o Delegación</label>
                          <select name="slcMunicipioPostulada" id="slcMunicipioPostulada" class="form-control">
                            <option value="0">Selecciona</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="slcCiudadPostulada">Ciudad</label>
                          <select name="slcCiudadPostulada" id="slcCiudadPostulada" class="form-control">
                            <option value="0">Selecciona</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="slcRelacion">¿Cuál es tu relación con la Mujer que Postulaste?</label>
                      <select name="slcRelacion" id="slcRelacion" class="form-control">
                        <option value="0">Selecciona</option>
                        <option value="1">Conocida</option>
                        <option value="2">Amiga</option>
                        <option value="3">Familiar</option>
                        <option value="4">Hermana</option>
                        <option value="5">Hija</option>
                        <option value="6">Esposa</option>
                        <option value="7">Misma</option>
                        <option value="8">Mamá</option>
                        <option value="9">Compañera de Trabajo</option>
                        <option value="10">Colaboradora</option>
                        <option value="11">Jefa</option>
                        <option value="12">Colega de la Empresa</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <br>
                  <p class="text-center">
                    <button type="button" class="btn btn-primary" onclick="mostrarPaso1()">ANTERIOR</button>
                    <button type="button" class="btn btn-primary" onclick="mostrarPaso3()">SIGUIENTE</button>
                  </p>
              </div>
            </div>

            <div class="row paso3" style="border: solid 1px #000">
              <div class="col-sm-12">
                  <h3>Sobre el Trabajo de la Mujer Aspirante <small>Paso 3 de 3</small></h3>
                  <hr>
                  <div class="alert alert-info" role="alert">
                    Nos gustaría nos proporcionara mayor información del trabajo de <strong>LA ASPIRANTE</strong> que está proponiendo.
                  </div>
                  <br>
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <label for="txtNombre">¿A qué Premios FEM labora deseas postularla?</label>
                      <div class="row">
                        <div class="col-sm-4">
                          <input type="checkbox" id="premio1"> Desempeño Laboral
                        </div>
                        <div class="col-sm-4">
                          <input type="checkbox" id="premio2"> Contribución a la Organización
                        </div>
                        <div class="col-sm-4">
                          <input type="checkbox" id="premio3"> Logros en su Puesto o Área
                        </div>
                        <div class="col-sm-4">
                          <input type="checkbox" id="premio4"> Liderazgo con la Gente
                        </div>
                        <div class="col-sm-4">
                          <input type="checkbox" id="premio5"> Compromiso con el Trabajo
                        </div>
                        <div class="col-sm-4">
                          <input type="checkbox" id="premio6"> Conciliación de Vida Labora y Familiar
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="slcNivel">¿Cuál es el Nivel de Puesto de su trabajo?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                      <select name="slcNivel" id="slcNivel" class="form-control">
                        <option value="0">Seleccione</option>
                        <option value="1">Operativo</option>
                        <option value="2">Administrativo</option>
                        <option value="3">Mandos medios</option>
                        <option value="4">Directivo</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="slcAntiguedad">¿Cuántos Años de Antigüedad tiene trabajando en la empresa?</label>
                      <select name="slcAntiguedad" id="slcAntiguedad" class="form-control">
                        <option value="0">Seleccione</option>
                        <option value="1">1 año o menos</option>
                        <option value="2">2 o 3 años</option>
                        <option value="3">4 a 6 años</option>
                        <option value="4">7 o más años</option>
                      </select>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="txtNombreEmpresa">¿Cuál es el Nombre de la Empresa donde ella trabaja?</label>
                      <input type="text" class="form-control" id="txtNombreEmpresa" name="txtNombreEmpresa" placeholder="Nombre de la empresa">
                    </div>
                    <div class="form-group col-sm-12">
                      <label for="">¿Dónde está la empresa en la que ella trabaja?</label>
                      <div class="row">
                        <div class="form-group col-sm-4">
                          <label for="slcEstadoEmpresa">Estado</label>
                          <select name="slcEstadoEmpresa" id="slcEstadoEmpresa" class="form-control">
                            <option value="0">Selecciona</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="slcMunicipioEmpresa">Municipio o Delegación</label>
                          <select name="slcMunicipioEmpresa" id="slcMunicipioEmpresa" class="form-control">
                            <option value="0">Selecciona</option>
                          </select>
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="slcCiudadEmpresa">Ciudad</label>
                          <select name="slcCiudadEmpresa" id="slcCiudadEmpresa" class="form-control">
                            <option value="0">Selecciona</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-8">
                      <label for="txtTelefonoEmpresa">Proporciona un Teléfono de la empresa en donde trabaja ella</label>
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="txtTelefonoEmpresa" name="txtTelefonoEmpresa" placeholder="Telefono de la empresa">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="aviso"><a href="#">Aviso de privacidad</a></label>
                      <div class="checkbox">
                        <label>
                          <input type="checkbox" name="aviso" id="aviso">
                          Aceptar
                        </label>
                      </div>
                    </div>
                  </div>
                  <br>
                  <br>
                  <p class="text-center">
                    <button type="button" class="btn btn-primary" onclick="mostrarPaso2()">ANTERIOR</button>
                    <button type="button" class="btn btn-success" onclick="finalizar()">FINALIZAR</button>
                  </p>
              </div>
            </div>
          
        </div>
      </div>

    </div>

    <!-- JS section -->
    <script src="../js/jquery-2.1.3.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/postulacionFisica.js"></script>
  </body>
</html>