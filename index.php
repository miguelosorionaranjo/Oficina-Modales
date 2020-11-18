<!doctype html>
<html lang="en">
  <style>
   
body {
  height: 100%;
  margin: 0;
  font-family: Lato, sans-serif;
  background-color: #E1E2E1;  
}
header{
background: #f12711;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #f5af19, #f12711);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #f5af19, #f12711); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
    form {
/* Centrar el formulario en la página */
margin: 0 auto;
width: 450px;
/* Esquema del formulario */
padding: 1em;
border: 1px solid #CCC;
border-radius: 1em;
color:black;
}

ul {
list-style: none;
padding: 0;
margin: 0;
}
form li + li {
margin-top: 1em;
}
label {
/* Tamaño y alineación uniforme */
display: inline-block;
width: 90px;
text-align: right;
}
input, 
textarea {
/* Para asegurarse de que todos los campos de texto tienen la misma configuración de letra
 Por defecto, las áreas de texto tienen un tipo de letra monoespaciada */
font: 1em sans-serif;
/* Tamaño uniforme del campo de texto */
width: 300px;
box-sizing: border-box;
/* Hacer coincidir los bordes del campo del formulario */
border: 1px solid #999;
}
input:focus, 
textarea:focus {
/* Destacado adicional para elementos que tienen el cursor */
border-color: #000;
}
textarea {
/* Alinear los campos de texto multilínea con sus etiquetas */
vertical-align: top;
/* Proporcionar espacio para escribir texto */
height: 5em;
}
.borderojo {
outline: none;
border: 1px solid #f00;
}
.bordegris { border: 1px solid #d4d4d; }

.button {
/* Alinear los botones con los campos de texto */
padding-left: 90px; /* mismo tamaño que los elementos de la etiqueta */
}
button {
/* Este margen adicional representa aproximadamente el mismo espacio que el espacio
 entre las etiquetas y sus campos de texto */
margin-left: .5em;
}
.Table
{
display: table;
align: center; 
width: 1200px;
}
.Heading
{
display: table-row;
font-weight: bold;
text-align: center;
}
.Row
{
display: table-row;
}
.Cell
{
display: table-cell;
border: solid;
border-width: thin;
padding-left: 5px;
padding-right: 5px;
width: 550px;
}
.obs
{
display: table-cell;
border: solid;
border-width: thin;
width: 30px;
}
.radio
{
    display: table-cell;
    border: solid;
    border-width: thin;
    width: 20px;
   
}
.com
{
min-width: 100px;
width: 100%;
height: 40px;
}
.calen
{
width: 40%;
}
.alto
{
display: table-cell;
border: solid;
border-width: thin;
padding-left: 5px;
padding-right: 5px;
height: 60px;
}
.check
{
display: table-cell;
border: solid;
border-width: thin;
width: 3%;
}
.caja
{
position:relative;
top:0px;
bottom: 100px ;
right: 0px;
left: 10px;
}
.titulo
{
position:relative;
top:0px;
bottom: 100px ;
right: 0px;
left: 70px;
}
.capacidad
{
width: 50%;
}
.Celle
{
display: table-cell;
border: solid;
border-width: thin;
padding-left: 5px;
padding-right: 5px;
width: 550px;
}
input:invalid {
  box-shadow: 0 0 3px 1px red;
  
}
input:focus:invalid {
  box-shadow: none;
}
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      .themed-grid-col {
  padding-top: 15px;
  padding-bottom: 15px;
  background-color: rgba(86, 61, 124, .15);
  border: 1px solid rgba(86, 61, 124, .2);
}
.themed-container {
  padding: 10px;
  margin-bottom: 0px;
  background-color: rgba(77, 85, 94, 0.15);
  border: 1px solid rgba(20, 20, 20, 0.2);
}
.formulario {
  width: 100%;
}
.ventanas {
  width: 100%;
}
#regiration_form fieldset:not(:first-of-type) {
		display: none;
  }
  input[type=button], input[type=submit], input[type=reset] {
  background-color: #17a2f3;
  border: none;
  color: #CCC;
  padding: 16px 25px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  width: 30%;
  height: 10%;
}
.formularioss {
  width: 100%;
}
#regiration_form fieldset:not(:first-of-type) {
		display: none;
  }

  .error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
</style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	         
    <link rel="stylesheet" href="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.css"> 
     
    <title>Formularios</title>  
  </head>
  <!--Inicio del Código     -->
  <body ng-app="validationApp" ng-controller="mainController as m" ng-app="">
      <div style="height: 50px;"></div>
      <main role="main" class="container">
        <div class="jumbotron">
          
          <form action="." oninput="range_control_value.value = range_control.valueAsNumber" class="formulario" name="formValidation">
         
          <h1 class="text-center text-black"><span ">Inspección Antes de Marcha</span></h1> <br>
          <h3 class="text-left text-light"><span class="badge badge-dark">Datos Básicos</span></h3> 
          <div class="row">
            <div class="col-md-5 mb-3">
              <label for="country">Vehículo:</label>
            <select class="custom-select d-block w-100" id="activo" required>
              <option value="">Opciones...</option>
              <option>Moto 1</option>
              <option>Moto 2</option>
            </select>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">Conductor</label>
              <select class="custom-select d-block w-100" id="state" required>
                <option value="">Opciones...</option>
                <option>California</option>
              </select>
            </div>
            <div class="col-md-4 mb-3">
              <button type="submit"  class="btn btn-primary">Buscar </button>
            </div>
          </div>
          <!--Final      -->
          </form>
          <br>

          <div class="container">
            <h1 align="center">Registro del PESV paso a paso</h1>
            <div class="progress">
              <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
          <form class="formularioss" id="task-form" method="post" class="needs-validation" novalidate >

          <h3 class="text-left text-light"><span class="badge badge-dark">Revisión General</span></h3> <br>
          <!--Documentos      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Documentos</div>
            <div class="col-6 themed-container">
              <div class="container"  >
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" >Entrar</button>
                </div>
            </div>
          </div>
<!--Direccionales      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Direccionales</div>
            <div class="col-6 themed-container">
              <div class="container"  >
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2" >Entrar</button>
                </div>
            </div>
          </div>
<!--Luces      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Luces</div>
            <div class="col-6 themed-container">
              <div class="container"  >
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3" >Entrar</button>
                </div>
            </div>
          </div>
<!--Limpiabrisas      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Limpiabrisas</div>
            <div class="col-6 themed-container">
              <div class="container" align="center" >
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal4" >Entrar</button>
                </div>
            </div>
          </div>
<!--Frenos      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Frenos</div>
            <div class="col-6 themed-container">
              <div class="container" align="center" >
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal5" >Entrar</button>
                </div>
            </div>
          </div>
<!--Llantas      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Llantas</div>
            <div class="col-6 themed-container">
<div class="container" align="center" >
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal6" >Entrar</button>
  </div>
            </div>
          </div>
          <!--Espejos      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Espejos</div>
            <div class="col-6 themed-container">
              <div class="container"  >
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal7" >Entrar</button>
                </div>
            </div>
          </div>
          <!--Bocina      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Bocina</div>
            <div class="col-6 themed-container">
              <div class="container"  >
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal8" >Entrar</button>
                </div>
            </div>
          </div>
          <!--Niveles de Fluidos     -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Niveles de Fluidos</div>
            <div class="col-6 themed-container">
              <div class="container"  >
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal9" >Entrar</button>
                </div>
            </div>
          </div>
          <!--Apoyacabezas      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Apoyacabezas</div>
            <div class="col-6 themed-container">   
              <div class="container" >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal11" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Cinturones de Seguridad      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Cinturones de Seguridad</div>
            <div class="col-6 themed-container">  
              <div class="container"  >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal12" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Última Fecha de Mantenimiento      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Última Fecha de Mantenimiento </div>
            <div class="col-6 themed-container">   
              <div class="container"  >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal13" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Fecha de Vencimiento      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Fecha de Vencimiento</div>
            <div class="col-6 themed-container">   
              <div class="container"  >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal14" >Entrar</button>
              </div>
            </div>
          </div>
  <!--Sistema de Seguridad      -->
          <h3 class="text-left text-light"><span class="badge badge-dark">Sistema de Seguridad</span></h3> <br>
          <!--Extintor      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Extintor</div>
            <div class="col-6 themed-container">
              <div class="container"  >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal20" >Entrar</button>
              </div>
            </div>
          </div>
<!--Herramientas      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Herramientas</div>
            <div class="col-6 themed-container"> 
              <div class="container"  >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal21" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Cruceta      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Cruceta</div>
            <div class="col-6 themed-container">   
              <div class="container"  >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal22" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Gato Hidráulico      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Gato Hidráulico</div>
            <div class="col-6 themed-container">   
              <div class="container"  >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal23" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Taco      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Taco</div>
            <div class="col-6 themed-container">   
              <div class="container"  >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal24" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Señales      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Señales</div>
            <div class="col-6 themed-container">   
              <div class="container" align="center" >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal25" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Chaleco Reflectivo      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Chaleco Reflectivo</div>
            <div class="col-6 themed-container">  
              <div class="container" align="center" >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal26" >Entrar</button>
              </div>
            </div>
          </div>
          <!--Botiquin      -->
          <div class="row mb-3" align="center">
            <div class="col-6 themed-container">Botiquín</div>
            <div class="col-6 themed-container">   
              <div class="container" align="center" >
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal27" >Entrar</button>
              </div>
            </div>
          </div>
<!--Fin      -->






<?php
			$task_clicencia = "";
			$task_csoat = "";
			$task_crtm = "";
      $task_crc = "";

      $task_cdelanteras = "";
      $task_ctraseras = "";

      $task_caltass = "";
      $task_cbajass = "";
      $task_cstop = "";
      $task_creversa = "";
      $task_cparqueo = "";

      $task_cdia = "";

      $task_cprincipal = "";
      $task_cemergencia = "";

      $task_cddelanteras = "";
      $task_cttraseras = "";
      $task_crepuesto = "";

      $task_cderecho = "";
      $task_cizquierdo = "";
      $task_cretrovisor = "";

      $task_cbocina = "";

      $task_cfrenos = "";
      $task_caceite = "";
      $task_crefrigerante = "";

      $task_cdelan = "";
      $task_ctras = "";

      $task_ccinturones = "";

      $task_calicates = "";
      $task_cdestorni = "";
      $task_cle = "";
      $task_clf = "";
      $task_ccruceta = "";

      $task_cgh = "";

      $task_ctaco = "";

      $task_csenal = "";

      $task_cchaleco = "";
      
      $task_cbotiquin = "";
			
			// TODO (1) declarar variable como arreglo
			$lenguajes = array();
			
			if(isset($_POST['clicencia'])){
				$task_clicencia = $_POST['clicencia'];
				$task_csoat = $_POST['csoat'];
				$task_crtm = $_POST['crtm'];
				$task_crc = $_POST['crc'];
				
				if(isset($_POST['clicencia'])){
					$task_clicencia = $_POST['clicencia'];
				}else{
					$task_clicencia = "";
        }
        
        if(isset($_POST['csoat'])){
					$task_csoat = $_POST['csoat'];
				}else{
					$task_csoat = "";
        }
        
        if(isset($_POST['crtm'])){
					$task_crtm = $_POST['crtm'];
				}else{
					$task_crtm = "";
        }
        
        if(isset($_POST['crc'])){
					$task_crc = $_POST['crc'];
				}else{
					$task_rc = "";
				}

				// TODO (2) Validar que existe variable nivel
				if(isset($_POST['lenguajes'])){
					$lenguajes = $_POST['lenguajes'];
				}else{
					$lenguajes = [];
				}
				

				$radio = array();

				if($task_clicencia == ""){
					array_push($radio, "Selecciona una opción.");
        }
        
        if($task_csoat == ""){
					array_push($radio, "Selecciona una opcióno.");
        }
        
        if($task_crtm == ""){
					array_push($radio, "Selecciona una opción.");
        }
        
        if($task_crc == ""){
					array_push($radio, "Selecciona una opción.");
				}
				// TODO (3) Validar que el campo no esté vacío
				if($lenguajes == "" || count($lenguajes) < 2){
					array_push($radio, "Selecciona al menos dos lenguajes de programación.");
				}

				if(count($radio) > 0){
					echo "<div class='error'>";
					for($i = 0; $i < count($radio); $i++){
						echo "<li>".$radio[$i]."</i>";
					}
				}else{
					echo "<div class='correcto'>
							Datos correctos";
				}
				echo "</div>";
			}
		?>












<!--Documentos      -->
<br>  

<!--Inicio Modales      -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="form-group">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
     <!-- <form   id="task-form" method="post" action="." oninput="range_control_value.value = range_control.valueAsNumber" class="ventanas" name="formValidation"> -->
      <fieldset>
      <div class="modal-body" width="200px" class="container">
          <div  align="center">
            <p>Documentos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="clicencia">Licencia de Conductor</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              
              <select name="clicencia" id="clicencia" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_clicencia == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_clicencia == "no") echo "selected" ?> >No</option>
      </select>

            </p>  
          <p class="caja">
              <label for="csoat"> SOAT</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="csoat" id="csoat" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_csoat == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_csoat == "no") echo "selected" ?> >No</option>
      </select>
            </p>  
          <p class="caja">
            
            <label for="crtm">RTM</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="ccrtm" id="crtm" required>
				<option value="" >Selecciona uno</option>
        <option value="si" <?php if($task_crtm == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_crtm == "no") echo "selected" ?> >No</option>
      </select>
          </p>  
          <p class="caja">
              <label for="crc">Seguro de Daños y RC</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="crc" id="crc" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_crc == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_crc == "no") echo "selected" ?> >No</option>
      </select>
            </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_documentos" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="doc(this);" maxlength="201" id="o_documentos"></textarea>
            <p id="doc">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
          <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" /> 
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>    
<!--Direccionales      -->
<br>  
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
     <div class="modal-body" width="200px">
        <div class="form-group" align="center">
            <p>Direccionales:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cdelanteras">Delanteras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cdelanteras" id="cdelanteras" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cdelanteras == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cdelanteras == "no") echo "selected" ?> >No</option>
      </select>
     </p>  
          <p class="caja">
              <label for="ctraseras"> Traseras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="ctraseras" id="ctraseras" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_ctraseras == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_ctraseras == "no") echo "selected" ?> >No</option>
      </select>
     </p>   
          </div>
          <div class="form-group" align="center">
            <label for="o_direccionales" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="dirr(this);" maxlength="201" id="o_direccionales"></textarea>
            <p id="dirr">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
           
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>    
<!--Luces     -->
<br>  
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
          <div class="form-group" align="center">
            <p>Luces:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="caltass">Altas</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="caltass" id="caltass" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_caltass == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_caltass == "no") echo "selected" ?> >No</option>
      </select>  
            </p>  
          <p class="caja">
              <label for="cbajass"> Bajas</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cbajass" id="cbajass" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cbajass == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cbajass == "no") echo "selected" ?> >No</option>
      </select> 
            </p>  
          <p class="caja">
            
            <label for="cstop">Stop</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="cstop" id="cstop" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cstop == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cstop == "no") echo "selected" ?> >No</option>
      </select>  
          </p>  
          <p class="caja">
              <label for="creversa">Reversa</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="creversa" id="creversa" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_creversa == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_creversa == "no") echo "selected" ?> >No</option>
      </select>
            </p>  
          <p class="caja">
            <label for="cparqueo">Parqueo</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="cparqueo" id="cparqueo" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cparqueo == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cparqueo == "no") echo "selected" ?> >No</option>
      </select>  
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_luces" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="luces(this);" maxlength="201" id="o_luces"></textarea>
            <p id="luces">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>       
<!--Limpiabrisas      -->
<br>  
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel4" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
          <div class="form-group" align="center">
            <p>Limpiabrisas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cdia">Derecha/Izquierda/<br>Atrás</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cdia" id="cdia" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cdia == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cdia == "no") echo "selected" ?> >No</option>
      </select>
            </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_limpiabrisas" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="lim(this);" maxlength="201" id="o_limpiabrisas"></textarea>
            <p id="lim">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
           
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>    
<!--Frenos      -->
<br>  
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
          <div class="form-group" align="center">
            <p>Frenos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cprincipal">Principal</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cprincipal" id="cprincipal" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cprincipal == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cprincipal == "no") echo "selected" ?> >No</option>
      </select>
            </p>  
          <p class="caja">
              <label for="cemergencia"> Emergencia</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cemergencia" id="cemergencia" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cemergencia == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cemergencia == "no") echo "selected" ?> >No</option>
      </select>
            </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_frenos" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="frenos(this);" maxlength="201" id="o_frenos"></textarea>
            <p id="frenos">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>   
<!--Llantas      -->
<br> 
<div class="modal fade" id="exampleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel6" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
        <div class="form-group" align="center">
            <p>Llantas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cddelanteras">Delanteras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cddelanteras" id="cddelanteras" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cddelanteras == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cddelanteras == "no") echo "selected" ?> >No</option>
      </select>
    </p>  
          <p class="caja">
              <label for="cttraseras"> Traseras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cttraseras" id="cttraseras" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cttraseras == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cttraseras == "no") echo "selected" ?> >No</option>
      </select>
     </p>  
          <p class="caja">
            <label for="crepuesto"> Repuesto</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="crepuesto" id="crepuesto" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_crepuesto == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_crepuesto == "no") echo "selected" ?> >No</option>
      </select>
     </p> 
          </div>
          <div class="form-group" align="center">
            <label for="o_llantas" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="llantas(this);" maxlength="201" id="o_llantas"></textarea>
            <p id="llantas">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>      
<!--Espejos      -->
<br>
<div class="modal fade" id="exampleModal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel7" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
         <div class="form-group" align="center">
            <p>Espejos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cderecho">Derecho</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cderecho" id="cderecho" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cderecho == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cderecho == "no") echo "selected" ?> >No</option>
      </select>
    </p>  
          <p class="caja">
              <label for="cizquierdo"> Izquierdo</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cizquierdo" id="cizquierdo" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cizquierdo == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cizquierdo == "no") echo "selected" ?> >No</option>
      </select>
     </p>  
          <p class="caja">
            <label for="cretrovisor"> Retrovisor</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="cretrovisor" id="cretrovisor" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cretrovisor == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cretrovisor == "no") echo "selected" ?> >No</option>
      </select>  
          </p> 
          </div>
          <div class="form-group" align="center">
            <label for="o_espejos" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="espejos(this);" maxlength="201" id="o_espejos"></textarea>
            <p id="espejos">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
           
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>      
<!--Bocina      -->
<br>  
<div class="modal fade" id="exampleModal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel8" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
        <div class="form-group" align="center">
            <p>Bocina:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
             
              <label for="cbocina">Bocina</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cbocina" id="cbocina" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cbocina == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cbocina == "no") echo "selected" ?> >No</option>
      </select>
     </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_bocina" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="bocina(this);" maxlength="201" id="o_bocina"></textarea>
            <p id="bocina">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </fieldset>
    </div>
  </div>
</div>
<!--Niveles de Fluidos      -->
<br>    
<div class="modal fade" id="exampleModal9" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel9" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
        <div class="form-group" align="center">
            <p>Niveles de Fluidos:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cfrenos">Frenos</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cfrenos" id="cfrenos" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cfrenos == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cfrenos == "no") echo "selected" ?> >No</option>
      </select>
     </p>  
          <p class="caja">
              <label for="caceite"> Aceite</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="caceite" id="caceite" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_caceite == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_caceite == "no") echo "selected" ?> >No</option>
      </select>
    </p>  
          <p class="caja">
            <label for="crefrigerante"> Refrigerante</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="crefrigerante" id="crefrigerante" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_crefrigerante == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_crefrigerante == "no") echo "selected" ?> >No</option>
      </select>
     </p> 
          </div>
          <div class="form-group" align="center">
            <label for="o_nf" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="nf(this);" maxlength="201" id="o_nf"></textarea>
            <p id="nf">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
     </fieldset>
    </div>
  </div>
</div>
<!--Apoyacabezas      -->
<br> 
<div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel11" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
          <div class="form-group" align="center">
            <p>Apoyacabezas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cdelan">Delanteras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cdelan" id="cdelan" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cdelan == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cdelan == "no") echo "selected" ?> >No</option>
      </select>
    </p>  
          <p class="caja">
              <label for="ctras"> Traseras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="ctras" id="ctras" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_ctras == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_ctras == "no") echo "selected" ?> >No</option>
      </select>
    </p>
          </div>
          <div class="form-group" align="center">
            <label for="o_apoya" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="apoya(this);" maxlength="201" id="o_apoya"></textarea>
            <p id="apoya">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>
<!--Cinturones de Seguridad      -->
<br>  
<div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel12" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
        <div class="form-group" align="center">
            <p>Cinturones de Seguridad:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="ccinturones">Cinturones</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="ccinturones" id="ccinturones" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_ccinturones == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_ccinturones == "no") echo "selected" ?> >No</option>
      </select>
    </p>
          </div>
          <div class="form-group" align="center">
            <label for="o_cs" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="cs(this);" maxlength="201" id="o_cs"></textarea>
            <p id="cs">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>
<!--Última Fecha de Mantenimiento     -->
<br> 
<div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel13" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
       
        <div class="form-group" align="center">
            <p>Fecha de Mantenimiento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="ca">Cambio de Aceite</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="ca" class="form-control" nombre="data[ca]" min="2018-01-02"    required>
         
            </p>  
          <p class="caja">
              <label for="sincronizacion"> Sincronización</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="sincronizacion" class="form-control" nombre="data[sincronizacion]" min="2018-01-02"    required>
          </p>  
          <p class="caja">
            <label for="ab"> Alineación/<br>Balanceo</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="calen" type="date" id="ab" nombre="data[ab]" class="form-control" min="2018-01-02"    required>
        </p> 
        <p class="caja">
          <label for="cll"> Cambio de Llantas</label> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="cll" class="form-control" nombre="data[cll]" min="2018-01-02"    required>
      </p> 
          </div>
          <div class="form-group" align="center">
            <label for="o_fm" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="fm(this);" maxlength="201" id="o_fm"></textarea>
            <p id="fm">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>
<!--Fecha de Vencimiento      -->
<br> 
<div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel14" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
        <div class="form-group" align="center">
            <p>Fecha de Vencimiento:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="rtmecanica">Revisión Técnico Mecánica</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="rtmecanica" class="form-control" nombre="data[rtmecanica]" min="2018-01-02"    required>
          </p>  
          <p class="caja">
              <label for="casoat"> SOAT</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="casoat" class="form-control" nombre="data[casoat]" min="2018-01-02"    required>
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_fv" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="venci(this);" maxlength="201" id="o_fv"></textarea>
            <p id="venci">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>
<!--Sistema de Seguridad      -->
<!--Extintor     -->
<div class="modal fade" id="exampleModal20" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel20" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
       
        <div class="form-group" align="center">
            <p>Extintor:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="fv"> Fecha de Vencimiento</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="fv" class="form-control" nombre="data[fv]" min="2018-01-02"    required>
            </p>  
          <p class="caja">
              <label for="ecapacidad"> Capacidad</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input class="capacidad" nombre="data[ecapacidad]" id="ecapacidad" class="form-control" required type="number"   />
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_ext" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="ext(this);" maxlength="201" id="o_ext"></textarea>
            <p id="ext">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>     
<!--Herramientas     -->
<br> 
<div class="modal fade" id="exampleModal21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel21" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
      
          <div class="form-group" align="center">
            <p>Herramientas:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="calicates"> Alicates</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="calicates" id="calicates" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_calicates == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_calicates == "no") echo "selected" ?> >No</option>
      </select>
     </p>  
          <p class="caja">
              <label for="cdestorni"> Destornilladores</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cdestorni" id="cdestorni" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cdestorni == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cdestorni == "no") echo "selected" ?> >No</option>
      </select>
    </p>  
          <p class="caja">
             
            <label for="cle"> Llaves de Expansión</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select name="cle" id="cle" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cle == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cle == "no") echo "selected" ?> >No</option>
      </select>
    </p> 
        <p class="caja">
          <label for="clf"> Llaves Fijas</label> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <select name="clf" id="clf" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_clf == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_clf == "no") echo "selected" ?> >No</option>
      </select>
    </p> 
          </div>
          <div class="form-group" align="center">
            <label for="o_herr" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="herr(this);" maxlength="201" id="o_herr"></textarea>
            <p id="herr">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
         
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>     
<!--Cruceta      -->
<br> 
<div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel22" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
       
        <div class="form-group" align="center">
            <p>Cruceta:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="ccruceta">Cruceta</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="ccruceta" id="ccruceta" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_ccruceta == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_ccruceta == "no") echo "selected" ?> >No</option>
      </select>
    </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_cru" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="cru(this);" maxlength="201" id="o_cru"></textarea>
            <p id="cru">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>
<!--Gato Hidràulico      -->
<br> 
<div class="modal fade" id="exampleModal23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel23" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
       
        <div class="form-group" align="center">
            <p>Gato Hidráulico:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cgh">Gato Hidráulico</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cgh" id="cgh" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cgh == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cgh == "no") echo "selected" ?> >No</option>
      </select>
            </p> 
          </div>
          <div class="form-group" align="center">
            <label for="o_gh" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="gh(this);" maxlength="201" id="o_gh"></textarea>
            <p id="gh">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>
<!--Taco      -->
<br> 
<div class="modal fade" id="exampleModal24" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel24" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
      
        <div class="form-group" align="center">
            <p>Taco:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="ctaco">Taco</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="ctaco" id="ctaco" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_ctaco == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_ctaco == "no") echo "selected" ?> >No</option>
      </select>
    </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_taco" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="taco(this);" maxlength="201" id="o_taco"></textarea>
            <p id="taco">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
     </fieldset>
    </div>
  </div>
</div>
<!--Señales      -->
<br> 
<div class="modal fade" id="exampleModal25" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel25" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
        
        <div class="form-group" align="center">
            <p>Señales:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="csenal">Señales</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="csenal" id="csenal" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_csenal == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_csenal == "no") echo "selected" ?> >No</option>
      </select>
     </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_senal" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="senal(this);" maxlength="201" id="o_senal"></textarea>
            <p id="senal">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>
<!--Chaleco Reflectivo      -->
<br>  
<div class="modal fade" id="exampleModal26" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel26" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
       
        <div class="form-group" align="center">
            <p>Cruceta:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
              <label for="cchaleco">Chaleco Reflectivo</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cchaleco" id="cchaleco" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cchaleco == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cchaleco == "no") echo "selected" ?> >No</option>
      </select>
     </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_cr" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="cr(this);" maxlength="201" id="o_cr"></textarea>
            <p id="cr">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>
<!--Botiquín      -->
<br> 
<div class="modal fade" id="exampleModal27" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel27" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" >
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <fieldset>
      <div class="modal-body" width="200px">
        
        <div class="form-group" align="center">
            <p>Botiquín:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Conforme  /  No Conforme</p> 
            <p class="caja">
             
              <label for="cbotiquin" class="form-group">Botiquín</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select name="cbotiquin" id="cbotiquin" required>
				<option value="">Selecciona uno</option>
        <option value="si" <?php if($task_cbotiquin == "si") echo "selected" ?> >Si</option>
        <option value="no" <?php if($task_cbotiquin == "no") echo "selected" ?> >No</option>
      </select>
    </p>  
          </div>
          <div class="form-group" align="center">
            <label for="o_boti" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" onkeyup="botiquin(this);" maxlength="201" id="o_boti"></textarea>
            <p id="char">200 caracteres restantes</p>
          </div>
          <br>
          <div  class="form-group" align="center" >
            <input type="button" name="next" class="next btn btn-info" data-dismiss="modal" value="Siguiente" />
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
</div>



<div class="form-group" align="center">
            <p for="o_general"> Observaciones Generales: </p>
            <textarea class="form-control" onkeyup="botiqui(this);" id="o_general" maxlength="201"></textarea>
            <p id="charm">200 caracteres restantes</p>
          </div>
          <div  class="form-group" align="center"  >

            <input type="hidden" id="taskId">
                  <button  type="submit" class="btn btn-secondary btn-block text-center " >
                  Aceptar
                  </button>
          </div>
</form>
<!--Final  Modales     -->
  </div>
</main>	  
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>	 	
<script src="popper/popper.min.js"></script>	 	 	
<script src="bootstrap4/js/bootstrap.min.js"></script>   	
<script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  

<script src="codigo.js"></script> 	
<!--Final      -->
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    var current = 1,current_step,next_step,steps;
    steps = $("fieldset").length;
    $(".next").click(function(){
      current_step = $(this).parent();
      next_step = $(this).parent().next();
      next_step.show();
      current_step.hide();
      setProgressBar(++current);
    });
    $(".previous").click(function(){
      current_step = $(this).parent();
      next_step = $(this).parent().prev();
      next_step.show();
      current_step.hide();
      setProgressBar(--current);
    });
    setProgressBar(current);
    // Change progress bar action
    function setProgressBar(curStep){
      var percent = parseFloat(100 / steps) * curStep;
      percent = percent.toFixed();
      $(".progress-bar")
        .css("width",percent+"%")
        .html(percent+"%");		
    }
  });
  </script>