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
        <div class="col-sm-offset-1 col-sm-10" style="border-left: 5px solid pink">
            
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

            <div class="row paso1">
              <div class="col-sm-12">
                  <h3>Persona de Enlace <small>Paso 1 de 3</small></h3>
                  <hr>
                  <div class="alert alert-info" role="alert">
                    Por favor proporcione los siguientes datos suyos, como <strong>Enlace de la Empresa</strong> para la cual trabaja.
                  </div>
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
                      <label for="txtNombre">Es</label>
                      <div class="row">
                        <div class="col-sm-6">
                          <input type="radio" name="optionsSexo" id="optionsSexo1" value="1"> Hombre
                        </div>
                        <div class="col-sm-6">
                          <input type="radio" name="optionsSexo" id="optionsSexo2" value="2"> Mujer
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtNombrePostulante">Proporcione su Nombre Completo</label>
                      <input type="text" class="form-control" id="txtNombrePostulante" name="txtNombrePostulante" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtPuesto">¿Cuál es el Nombre de su Puesto de Trabajo?</label>
                      <input type="text" class="form-control" id="txtPuesto" name="txtPuesto" placeholder="Puesto de trabajo">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtNivel">¿De qué nivel es?</label>
                      <input type="text" class="form-control" id="txtNivel" name="txtNivel" placeholder="Nivel">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtArea">¿A qué Área pertenece?</label>
                      <input type="text" class="form-control" id="txtArea" name="txtArea" placeholder="Área">
                    </div>
                    <div class="form-group col-sm-12">
                      <label for="txtEmailPostulante">Deje un Teléfono de la Empresa al cual podemos comunicarnos con usted Diretamente</label>
                      <div class="row">
                        <div class="form-group col-sm-4">
                          <label for="txtTelefonoDirecto">Teléfono</label>
                          <input type="text" class="form-control" id="txtTelefonoDirecto" name="txtTelefonoDirecto" placeholder="Telefono">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="txtExtencion">Extención</label>
                          <input type="text" class="form-control" id="txtExtencion" name="txtExtencion" placeholder="Extención">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="na">N/A</label>
                          <input type="checkbox" class="form-control" id="na" name="na" value="1">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtEmailPostulante">Escriba su E-mail de Trabajo</label>
                      <input type="text" class="form-control" id="txtEmailPostulante" name="txtEmailPostulante" placeholder="E-mail">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtEmailPostulante">Finalmente, proporcione su E-mail Personal</label>
                      <input type="text" class="form-control" id="txtEmailPostulante" name="txtEmailPostulante" placeholder="E-mail">
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
                  <h3>Datos de la autoridad <small>Paso 2 de 3</small></h3>
                  <hr>
                  <div class="alert alert-info" role="alert">
                    Ahora por favor, proporcione los siguientes de la persona con el nivel de autoridad suficiente para decidir sobre la participación de la Empresa en el <strong>Premio FEM labora</strong>.
                  </div>
                  <br>
                  <div class="row">
                    <div class="form-group col-sm-6">
                      <label for="txtNombreAutoridad">¿Cuál es el Nombre Completo de la Persona con Autoridad?</label>
                      <input type="text" class="form-control" id="txtNombreAutoridad" name="txtNombreAutoridad" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtNombre">Es</label>
                      <div class="row">
                        <div class="form-group col-sm-6">
                          <input type="radio" name="optionsSexo" id="optionsSexo1" value="1"> Hombre
                        </div>
                        <div class="form-group col-sm-6">
                          <input type="radio" name="optionsSexo" id="optionsSexo2" value="2"> Mujer
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="txtCargoAutoridad">¿Cuál es el Nombre del Cargo?</label>
                      <input type="text" class="form-control" id="txtCargoAutoridad" name="txtCargoAutoridad" placeholder="Cargo">
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="txtNivelAutoridad">¿De qué nivel es?</label>
                      <input type="text" class="form-control" id="txtNivelAutoridad" name="txtNivelAutoridad" placeholder="Nivel">
                    </div>
                    <div class="form-group col-sm-4">
                      <label for="txtAreaAutoridad">¿A que Área pertenece?</label>
                      <input type="text" class="form-control" id="txtAreaAutoridad" name="txtAreaAutoridad" placeholder="Área">
                    </div>
                    <div class="form-group col-sm-12">
                      <label for="">¿En caso de comunicarnos con esta Persona, a qué Teléfono de la Empresa lo haríamos?</label>
                      <div class="row">
                        <div class="form-group col-sm-4">
                          <label for="txtTelefonoEmpresa">Teléfono</label>
                          <input type="text" class="form-control" id="txtTelefonoEmpresa" name="txtTelefonoEmpresa" placeholder="Telefono">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="txtExtencionEmpresa">Extención</label>
                          <input type="text" class="form-control" id="txtExtencionEmpresa" name="txtExtencionEmpresa" placeholder="Extención">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="naEmpresa">N/A</label>
                          <input type="checkbox" class="form-control" id="naEmpresa" name="naEmpresa" value="1">
                        </div>
                      </div>
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
                  <h3>Sobre la Empresa <small>Paso 3 de 3</small></h3>
                  <hr>
                  <div class="alert alert-info" role="alert">
                    Finalmente le pedimos sea tan amable de proporcionarnos información básica de su <strong>Empresa</strong>, para participar en el <strong>Premio FEM labora</strong>.
                  </div>
                  <br>
                  <div class="row">
                    <div class="form-group col-sm-12">
                      <label for="txtNombreEmpresa">Nombre de la empresa que representa</label>
                      <input type="text" class="form-control" id="txtNombreEmpresa" name="txtNombreEmpresa" placeholder="Nombre de la empresa">
                    </div>
                    <div class="form-group col-sm-12">
                      <label for="">Especifique la Dirección de la Empresa</label>
                      <div class="row">
                        <div class="form-group col-sm-4">
                          <label for="txtCalleEmpresa">Calle y número</label>
                          <input type="text" class="form-control" id="txtCalleEmpresa" name="txtCalleEmpresa" placeholder="Calle y número">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="txtColoniaEmpresa">Colonia</label>
                          <input type="text" class="form-control" id="txtColoniaEmpresa" name="txtColoniaEmpresa" placeholder"Colonia">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="txtCpEmpresa">C.P.</label>
                          <input type="text" class="form-control" id="txtCpEmpresa" name="txtCpEmpresa">
                        </div>
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
                    <div class="form-group col-sm-12">
                      <label for="">Proporcione el número del Conmutador de la Empresa</label>
                      <div class="row">
                        <div class="form-group col-sm-4">
                          <label for="txtTelefonoConmutador">Teléfono</label>
                          <input type="text" class="form-control" id="txtTelefonoConmutador" name="txtTelefonoConmutador" placeholder="Telefono">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="txtExtencionConmutador">Extención</label>
                          <input type="text" class="form-control" id="txtExtencionConmutador" name="txtExtencionConmutador" placeholder="Extención">
                        </div>
                        <div class="form-group col-sm-4">
                          <label for="naConmutador">N/A</label>
                          <input type="checkbox" class="form-control" id="naConmutador" name="naConmutador" value="1">
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtGiroEmpresa">¿Cuál es el Giro de la Empresa?</label>
                      <input type="text" class="form-control" id="txtGiroEmpresa" name="txtGiroEmpresa" placeholder="Giro de la empresa">
                    </div>
                    <div class="form-group col-sm-6">
                      <label for="txtTamanoEmpresa">¿Cuál es el Tamaño de la Empresa en México?</label>
                      <input type="text" class="form-control" id="txtTamanoEmpresa" name="txtTamanoEmpresa" placeholder="Tamaño de la empresa">
                    </div>
                    <div class="form-group col-sm-10">
                      <label for="txtPorcentajeEmpresa">Del total de la plantilla del Personal de la Empresa en México, ¿Qué proporción son Mejeres?</label>
                    </div>
                    <div class="form-group col-sm-2">
                      <div class="input-group">
                        <input type="text" class="form-control" id="txtPorcentajeEmpresa" name="txtPorcentajeEmpresa" placeholder="Porcentaje">
                        <span class="input-group-addon" id="basic-addon1">%</span>
                      </div>
                    </div>
                    <div class="form-group col-sm-10">
                      <label for="txtSucursalesEmpresa">¿Cuál es el número de Filiales, Plantas, Sucursales o Unidades Administrativas que tiene la Empresa en México?</label>
                    </div>
                    <div class="form-group col-sm-2">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon2">#</span>
                        <input type="text" class="form-control" id="txtSucursalesEmpresa" name="txtSucursalesEmpresa" placeholder="Número">
                      </div>
                    </div>
                    <div class="form-group col-sm-10">
                      <label for="txtParticipanEmpresa">¿Cuántas de estas, considera que participen en el Premio FEM labora?</label>
                    </div>
                    <div class="form-group col-sm-2">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">#</span>
                        <input type="text" class="form-control" id="txtParticipanEmpresa" name="txtParticipanEmpresa" placeholder="Número">
                      </div>
                    </div>
                    <div class="form-group col-sm-8">
                      <label for="txtNivelesEmpresa">¿En cuáles Niveles Jerárquicos de la Empresa pretende participar en el Premio FEM labora?</label>
                    </div>
                    <div class="form-group col-sm-4">
                        <input type="text" class="form-control" id="txtNivelesEmpresa" name="txtNivelesEmpresa" placeholder="Niveles">
                    </div>
                    <div class="form-group col-sm-10">
                      <label for="txtAproximadoEmpresa">Aproximadamente ¿Cuántas Mujeres participarían en el Premio FEM labora?</label>
                    </div>
                    <div class="form-group col-sm-2">
                      <div class="input-group">
                        <span class="input-group-addon" id="basic-addon3">#</span>
                        <input type="text" class="form-control" id="txtAproximadoEmpresa" name="txtAproximadoEmpresa" placeholder="Número">
                      </div>
                    </div>
                    <div class="form-group col-sm-offset-5 col-sm-2 text-center">
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