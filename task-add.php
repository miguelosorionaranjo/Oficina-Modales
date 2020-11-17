<?php
  include('database.php');
if(isset($_POST['clicencia'])) {
 
  $task_clicencia = $_POST['clicencia'];
  $task_csoat = $_POST['csoat'];
  $task_crtm = $_POST['crtm'];
  $task_crc = $_POST['crc'];
  $task_o_documentos = $_POST['o_documentos'];
  $task_cdelanteras = $_POST['cdelanteras'];
  $task_ctraseras = $_POST['ctraseras'];
  $task_o_direccionales = $_POST['o_direccionales'];
  $task_caltass = $_POST['caltass'];
  $task_cbajass = $_POST['cbajass'];
  $task_cstop = $_POST['cstop'];
  $task_creversa = $_POST['creversa'];
  $task_cparqueo = $_POST['cparqueo'];
  $task_o_luces = $_POST['o_luces'];
  $task_cdia = $_POST['cdia'];
  $task_o_limpiabrisas = $_POST['o_limpiabrisas'];
  $task_cprincipal = $_POST['cprincipal'];
  $task_cemergencia = $_POST['cemergencia'];
  $task_o_frenos = $_POST['o_frenos'];
  $task_cddelanteras = $_POST['cddelanteras'];
  $task_cttraseras = $_POST['cttraseras'];
  $task_crepuesto = $_POST['crepuesto'];
  $task_o_llantas = $_POST['o_llantas'];
  $task_cderecho = $_POST['cderecho'];
  $task_cizquierdo = $_POST['cizquierdo'];
  $task_cretrovisor = $_POST['cretrovisor'];
  $task_o_espejos = $_POST['o_espejos'];
  $task_cbocina = $_POST['cbocina'];
  $task_o_bocina = $_POST['o_bocina'];
  $task_cfrenos = $_POST['cfrenos'];
  $task_caceite = $_POST['caceite'];
  $task_crefrigerante = $_POST['crefrigerante'];
  $task_o_nf = $_POST['o_nf'];
  $task_cdelan = $_POST['cdelan'];
  $task_ctras = $_POST['ctras'];
  $task_o_apoya = $_POST['o_apoya'];
  $task_ccinturones = $_POST['ccinturones'];
  $task_o_cs = $_POST['o_cs'];
  $task_ca = $_POST['ca'];
  $task_sincronizacion = $_POST['sincronizacion'];
  $task_ab = $_POST['ab'];
  $task_cll = $_POST['cll'];
  $task_o_fm = $_POST['o_fm'];
  $task_rtmecanica = $_POST['rtmecanica'];
  $task_casoat = $_POST['casoat'];
  $task_o_fv = $_POST['o_fv'];
  $task_fv = $_POST['fv'];
  $task_ecapacidad = $_POST['ecapacidad'];
  $task_o_ext = $_POST['o_ext'];
  $task_calicates = $_POST['calicates'];
  $task_cdestorni = $_POST['cdestorni'];
  $task_cle = $_POST['cle'];
  $task_clf = $_POST['clf'];
  $task_o_herr = $_POST['o_herr'];
  $task_ccruceta = $_POST['ccruceta'];
  $task_o_cru = $_POST['o_cru'];
  $task_cgh = $_POST['cgh'];
  $task_o_gh = $_POST['o_gh'];
  $task_ctaco = $_POST['ctaco'];
  $task_o_taco = $_POST['o_taco'];
  $task_csenal = $_POST['csenal'];
  $task_o_senal = $_POST['o_senal'];
  $task_cchaleco = $_POST['cchaleco'];
  $task_o_cr = $_POST['o_cr'];
  $task_cbotiquin = $_POST['cbotiquin'];
  $task_o_boti = $_POST['o_boti'];
  $task_o_general = $_POST['o_general'];
  $query = "INSERT into pesv (
                              clicencia, 
                              csoat, 
                              crtm, 
                              crc, 
                              o_documentos,
                              cdelanteras, 
                              ctraseras, 
                              o_direccionales,
                              caltass, 
                              cbajass, 
                              cstop,
                              creversa, 
                              cparqueo, 
                              o_luces,
                              cdia, 
                              o_limpiabrisas,
                              cprincipal, 
                              cemergencia, 
                              o_frenos,
                              cddelanteras, 
                              cttraseras,
                              crepuesto, 
                              o_llantas,
                              cderecho, 
                              cizquierdo, 
                              cretrovisor, 
                              o_espejos,
                              cbocina, 
                              o_bocina,
                              cfrenos, 
                              caceite,
                              crefrigerante, 
                              o_nf,
                              cdelan, 
                              ctras, 
                              o_apoya,
                              ccinturones, 
                              o_cs,
                              ca, 
                              sincronizacion, 
                              ab, 
                              cll,
                              o_fm,
                              rtmecanica, 
                              casoat, 
                              o_fv,
                              fv, 
                              ecapacidad, 
                              o_ext,
                              calicates, 
                              cdestorni, 
                              cle, 
                              clf, 
                              o_herr,
                              ccruceta,
                              o_cru,
                              cgh, 
                              o_gh,
                              ctaco, 
                              o_taco,
                              csenal, 
                              o_senal,
                              cchaleco,
                              o_cr, 
                              cbotiquin,
                              o_boti,
                              o_general) 
                              VALUES 
                              (
                              '$task_clicencia',
                              '$task_csoat', 
                              '$task_crtm', 
                              '$task_crc', 
                              '$task_o_documentos', 
                              '$task_cdelanteras', 
                              '$task_ctraseras', 
                              '$task_o_direccionales',
                              '$task_caltass', 
                              '$task_cbajass',  
                              '$task_cstop', 
                              '$task_creversa', 
                              '$task_cparqueo', 
                              '$task_o_luces',
                              '$task_cdia', 
                              '$task_o_limpiabrisas',
                              '$task_cprincipal', 
                              '$task_cemergencia', 
                              '$task_o_frenos',
                              '$task_cddelanteras', 
                              '$task_cttraseras', 
                              '$task_crepuesto',
                              '$task_o_llantas',
                              '$task_cderecho',
                              '$task_cizquierdo',
                              '$task_cretrovisor',
                              '$task_o_espejos',
                              '$task_cbocina',
                              '$task_o_bocina',
                              '$task_cfrenos',
                              '$task_caceite',
                              '$task_crefrigerante', 
                              '$task_o_nf',
                              '$task_cdelan',
                              '$task_ctras',
                              '$task_o_apoya',
                              '$task_ccinturones', 
                              '$task_o_cs',
                              '$task_ca', 
                              '$task_sincronizacion',
                              '$task_ab',
                              '$task_cll',
                              '$task_o_fm',
                              '$task_rtmecanica', 
                              '$task_casoat',
                              '$task_o_fv',
                              '$task_fv',
                              '$task_ecapacidad',
                              '$task_o_ext', 
                              '$task_calicates',
                              '$task_cdestorni',
                              '$task_cle',
                              '$task_clf', 
                              '$task_o_herr',
                              '$task_ccruceta', 
                              '$task_o_cru',
                              '$task_cgh',
                              '$task_o_gh',
                              '$task_ctaco',
                              '$task_o_taco',
                             '$task_csenal',
                             '$task_o_senal',
                             '$task_cchaleco',
                             '$task_o_cr',
                             '$task_cbotiquin',
                             '$task_o_boti',
                             '$task_o_general')";
  $result = mysqli_query($connection, $query);
  
  if (!$result) {
    die('Query Failed.');
  }
  echo "Registrado con Éxito";  

}    

?>