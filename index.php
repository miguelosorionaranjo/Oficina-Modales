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
              <label for="country">Activo:</label>
            <select class="custom-select d-block w-100" id="activo" required>
              <option value="">Opciones...</option>
              <option>Moto 1</option>
              <option>Moto 2</option>
            </select>
            </div>
            <div class="col-md-4 mb-3">
              <label for="state">Actor Vial</label>
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
              <input class="radio" type="radio" id="clicencia"  class="form-control" name="data[clicencia]" value="si" required  >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="clicencia" class="form-control" name="data[clicencia]" value="no" required >
          </p>  
          <p class="caja">
              <label for="csoat"> SOAT</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="csoat" class="form-control" name="data[csoat]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="csoat" class="form-control" name="data[csoat]" value="no" required >
          </p>  
          <p class="caja">
            
            <label for="crtm">RTM</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="crtm" class="form-control" name="data[crtm]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="crtm" class="form-control" name="data[crtm]" value="no"required >
          </p>  
          <p class="caja">
              <label for="crc">Seguro de Daños y RC</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="crc" class="form-control" name="data[crc]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="crc" class="form-control" name="data[crc]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
          <input type="button" name="next" class="next btn btn-info" value="Siguiente" /> 
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
              <input class="radio" type="radio" id="cdelanteras" class="form-control" name="data[cdelanteras]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cdelanteras" class="form-control" name="data[cdelanteras]" value="no" required >
          </p>  
          <p class="caja">
              <label for="ctraseras"> Traseras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="ctraseras" class="form-control" name="data[ctraseras]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="ctraseras" class="form-control" name="data[ctraseras]" value="no" required >
          </p>   
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="caltass" class="form-control" name="data[caltass]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="caltass" class="form-control" name="data[caltass]" value="no" required >
          </p>  
          <p class="caja">
              <label for="cbajass"> Bajas</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cbajass" class="form-control" name="data[cbajass]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cbajass" class="form-control" name="data[cbajass]" value="no" required >
          </p>  
          <p class="caja">
            
            <label for="cstop">Stop</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="cstop" class="form-control" name="data[cstop]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="cstop" class="form-control" name="data[cstop]" value="no"required >
          </p>  
          <p class="caja">
              <label for="creversa">Reversa</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="creversa" class="form-control" name="data[creversa]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="creversa" class="form-control" name="data[creversa]" value="no" required >
          </p>  
          <p class="caja">
            <label for="cparqueo">Parqueo</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="cparqueo" class="form-control" name="data[cparqueo]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="cparqueo" class="form-control" name="data[cparqueo]" value="no" required >
        </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="cdia" class="form-control" name="data[cdia]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cdia" class="form-control" name="data[cdia]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="cprincipal" class="form-control" name="data[cprincipal]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cprincipal" class="form-control" name="data[cprincipal]" value="no" required >
          </p>  
          <p class="caja">
              <label for="cemergencia"> Emergencia</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cemergencia" class="form-control" name="data[cemergencia]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cemergencia" class="form-control" name="data[cemergencia]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="cddelanteras" class="form-control" name="data[cddelanteras]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cddelanteras" class="form-control" name="data[cddelanteras]" value="no" required >
          </p>  
          <p class="caja">
              <label for="cttraseras"> Traseras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input class="radio" type="radio" id="cttraseras" class="form-control" name="data[cttraseras]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cttraseras" class="form-control" name="data[cttraseras]" value="no" required >
          </p>  
          <p class="caja">
            <label for="crepuesto"> Repuesto</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="crepuesto" class="form-control" name="data[crepuesto]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="crepuesto" class="form-control" name="data[crepuesto]" value="no" required >
        </p> 
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
               <input class="radio" type="radio" id="cderecho" class="form-control" name="data[cderecho]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cderecho" class="form-control" name="data[cderecho]" value="no" required >
          </p>  
          <p class="caja">
              <label for="cizquierdo"> Izquierdo</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cizquierdo" class="form-control" name="data[cizquierdo]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cizquierdo" class="form-control" name="data[cizquierdo]" value="no" required >
          </p>  
          <p class="caja">
            <label for="cretrovisor"> Retrovisor</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="cretrovisor" class="form-control" name="data[cretrovisor]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="cretrovisor" class="form-control" name="data[cretrovisor]" value="no" required >
        </p> 
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="cbocina" class="form-control" name="data[cbocina]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cbocina" class="form-control"  name="data[cbocina]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="cfrenos" class="form-control" name="data[cfrenos]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cfrenos" class="form-control" name="data[cfrenos]" value="no" required >
          </p>  
          <p class="caja">
              <label for="caceite"> Aceite</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <input class="radio" type="radio" id="caceite" class="form-control" name="data[caceite]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="caceite" class="form-control" name="data[caceite]" value="no" required >
          </p>  
          <p class="caja">
            <label for="crefrigerante"> Refrigerante</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="crefrigerante" class="form-control" name="data[crefrigerante]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="crefrigerante" class="form-control" name="data[crefrigerante]" value="no" required >
        </p> 
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="cdelan" class="form-control" name="data[cdelan]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cdelan" class="form-control" name="data[cdelan]" value="no" required >
          </p>  
          <p class="caja">
              <label for="ctras"> Traseras</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio"  id="ctras" class="form-control" name="data[ctras]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="ctras" class="form-control" name="data[ctras]" value="no" required >
          </p>
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="ccinturones" class="form-control"  name="data[ccinturones]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="ccinturones" class="form-control" name="data[ccinturones]" value="no" required >
          </p>
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="calen" type="date" id="ca" class="form-control" nombre="data[ca]" min="2018-01-02"   value="2020-12-31" required>
         
            </p>  
          <p class="caja">
              <label for="sincronizacion"> Sincronización</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="sincronizacion" class="form-control" nombre="data[sincronizacion]" min="2018-01-02"   value="2020-12-31" required>
          </p>  
          <p class="caja">
            <label for="ab"> Alineación/<br>Balanceo</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="calen" type="date" id="ab" nombre="data[ab]" class="form-control" min="2018-01-02"   value="2020-12-31" required>
        </p> 
        <p class="caja">
          <label for="cll"> Cambio de Llantas</label> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="cll" class="form-control" nombre="data[cll]" min="2018-01-02"   value="2020-12-31" required>
      </p> 
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="calen" type="date" id="rtmecanica" class="form-control" nombre="data[rtmecanica]" min="2018-01-02"   value="2020-12-31" required>
          </p>  
          <p class="caja">
              <label for="casoat"> SOAT</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="calen" type="date" id="casoat" class="form-control" nombre="data[casoat]" min="2018-01-02"   value="2020-12-31" required>
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="calen" type="date" id="fv" class="form-control" nombre="data[fv]" min="2018-01-02"   value="2020-12-31" required>
            </p>  
          <p class="caja">
              <label for="ecapacidad"> Capacidad</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;
              <input class="capacidad" nombre="data[ecapacidad]" id="ecapacidad" class="form-control" required type="number"   />
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="calicates" class="form-control" name="data[calicates]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="calicates" class="form-control" name="data[calicates]" value="no" required >
          </p>  
          <p class="caja">
              <label for="cdestorni"> Destornilladores</label> 
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cdestorni" class="form-control" name="data[cdestorni]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cdestorni" class="form-control" name="data[cdestorni]" value="no" required >
          </p>  
          <p class="caja">
             
            <label for="cle"> Llaves de Expansión</label> 
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="cle" class="form-control" name="data[cle]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input class="radio" type="radio" id="cle" class="form-control" name="data[cle]" value="no" required >
        </p> 
        <p class="caja">
          <label for="clf"> Llaves Fijas</label> 
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="clf" class="form-control" name="data[clf]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="clf" class="form-control" name="data[clf]" value="no" required >
      </p> 
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
         
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
              <input class="radio" type="radio" id="ccruceta" class="form-control" name="data[ccruceta]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="ccruceta" class="form-control" name="data[ccruceta]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="cgh" class="form-control" name="data[cgh]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cgh" class="form-control" name="data[cgh]" value="no" required >
          </p> 
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="ctaco" class="form-control" name="data[ctaco]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="ctaco" class="form-control" name="data[ctaco]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="csenal" class="form-control" name="data[csenal]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="csenal" class="form-control" name="data[csenal]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio"  id="cchaleco" class="form-control" name="data[cchaleco]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cchaleco" class="form-control" name="data[cchaleco]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <div  class="form-group" align="center" >
            <input type="button" name="previous" class="previous btn btn-default" value="Previo" />
            <input type="button" name="next" class="next btn btn-info" value="Siguiente" />
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
              <input class="radio" type="radio" id="cbotiquin" class="form-control" name="data[cbotiquin]" value="si" required >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input class="radio" type="radio" id="cbotiquin" class="form-control" name="data[cbotiquin]" value="no" required >
          </p>  
          </div>
          <div class="form-group" align="center">
            <label for="message-text" class="col-form-label">Observaciones:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
          <br>
          <div  class="form-group" align="center"  >

            <input type="hidden" id="taskId">
                  <button  type="submit" class="btn btn-secondary btn-block text-center " >
                  Aceptar
                  </button>
                  
           
          </div>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
      </fieldset>
    </div>
  </div>
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