<?php
  include('database.php');
if(isset($_POST['clicencia'])) {
  $task_clicencia = $_POST['clicencia'];
  $task_csoat = $_POST['csoat'];
  $task_crtm = $_POST['crtm'];
  $task_crc = $_POST['crc'];
  $task_cdelanteras = $_POST['cdelanteras'];
  $task_ctraseras = $_POST['ctraseras'];
  $task_caltass = $_POST['caltass'];
  $task_cbajass = $_POST['cbajass'];
  $task_cstop = $_POST['cstop'];
  $task_creversa = $_POST['creversa'];
  $task_cparqueo = $_POST['cparqueo'];
  $task_cdia = $_POST['cdia'];
  $task_cprincipal = $_POST['cprincipal'];
  $task_cemergencia = $_POST['cemergencia'];
  $task_cddelanteras = $_POST['cddelanteras'];
  $task_cttraseras = $_POST['cttraseras'];
  $task_crepuesto = $_POST['crepuesto'];
  $task_cderecho = $_POST['cderecho'];
  $task_cizquierdo = $_POST['cizquierdo'];
  $task_cretrovisor = $_POST['cretrovisor'];
  $task_cbocina = $_POST['cbocina'];
  $task_cfrenos = $_POST['cfrenos'];
  $task_caceite = $_POST['caceite'];
  $task_crefrigerante = $_POST['crefrigerante'];
  $task_cdelan = $_POST['cdelan'];
  $task_ctras = $_POST['ctras'];
  $task_ccinturones = $_POST['ccinturones'];
  $task_ca = $_POST['ca'];
  $task_sincronizacion = $_POST['sincronizacion'];
  $task_ab = $_POST['ab'];
  $task_cll = $_POST['cll'];
  $task_rtmecanica = $_POST['rtmecanica'];
  $task_casoat = $_POST['casoat'];
  $task_fv = $_POST['fv'];
  $task_ecapacidad = $_POST['ecapacidad'];
  $task_calicates = $_POST['calicates'];
  $task_cdestorni = $_POST['cdestorni'];
  $task_cle = $_POST['cle'];
  $task_clf = $_POST['clf'];
  $task_ccruceta = $_POST['ccruceta'];
  $task_cgh = $_POST['cgh'];
  $task_ctaco = $_POST['ctaco'];
  $task_csenal = $_POST['csenal'];
  $task_cchaleco = $_POST['cchaleco'];
  $task_cbotiquin = $_POST['cbotiquin'];
  $query = "INSERT into pesv (clicencia, 
                              csoat, 
                              crtm, 
                              crc, 
                              cdelanteras, 
                              ctraseras, 
                              caltass, 
                              cbajass, 
                              cstop,
                              creversa, 
                              cparqueo, 
                              cdia, 
                              cprincipal, 
                              cemergencia, 
                              cddelanteras, 
                              cttraseras,
                              crepuesto, 
                              cderecho, 
                              cizquierdo, 
                              cretrovisor, 
                              cbocina, 
                              cfrenos, 
                              caceite,
                              crefrigerante, 
                              cdelan, 
                              ctras, 
                              ccinturones, 
                              ca, 
                              sincronizacion, 
                              ab, 
                              cll,
                              rtmecanica, 
                              casoat, 
                              fv, 
                              ecapacidad, 
                              calicates, 
                              cdestorni, 
                              cle, 
                              clf, 
                              ccruceta,
                              cgh, 
                              ctaco, 
                              csenal, 
                              cchaleco, 
                              cbotiquin) 
                              VALUES 
                              (
                              '$task_clicencia',
                              '$task_csoat', 
                              '$task_crtm', 
                              '$task_crc', 
                              '$task_cdelanteras', 
                              '$task_ctraseras', 
                              '$task_caltass', 
                              '$task_cbajass',  
                              '$task_cstop', 
                              '$task_creversa', 
                              '$task_cparqueo', 
                              '$task_cdia', 
                              '$task_cprincipal', 
                              '$task_cemergencia', 
                              '$task_cddelanteras', 
                              '$task_cttraseras', 
                              '$task_crepuesto',
                              '$task_cderecho',
                              '$task_cizquierdo',
                              '$task_cretrovisor',
                              '$task_cbocina',
                              '$task_cfrenos',
                              '$task_caceite',
                              '$task_crefrigerante', 
                              '$task_cdelan',
                              '$task_ctras',
                              '$task_ccinturones', 
                              '$task_ca', 
                              '$task_sincronizacion',
                              '$task_ab',
                              '$task_cll',
                              '$task_rtmecanica', 
                              '$task_casoat',
                              '$task_fv',
                              '$task_ecapacidad', 
                              '$task_calicates',
                              '$task_cdestorni',
                              '$task_cle',
                              '$task_clf', 
                              '$task_ccruceta', 
                              '$task_cgh',
                              '$task_ctaco',
                             '$task_csenal',
                             '$task_cchaleco',
                             '$task_cbotiquin',)";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query Failed.');
  }
  echo "Registrado con Éxito";  

}
?>