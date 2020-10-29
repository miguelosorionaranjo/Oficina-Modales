<?php
include('database.php');
if(isset($_POST['id'])) {
  $id = mysqli_real_escape_string($connection, $_POST['id']);
  $query = "SELECT * from pesv WHERE id = {$id}";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Failed'. mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'clicencia' => $row['clicencia'],
      'csoat' => $row['csoat'],
      'crtm' => $row['crtm'],
      'crc' => $row['crc'],
      'cdelanteras' => $row['cdelanteras'],
      'ctraseras' => $row['ctraseras'],
      'caltass' => $row['caltass'],
      'cbajass' => $row['cbajass'],
      'cstop' => $row['cstop'],
      'creversa' => $row['creversa'],
      'cparque' => $row['cparque'],
      'cdia' => $row['cdia'],
      'cprincipal' => $row['cprincipal'],
      'cemergencia' => $row['cemergencia'],
      'cddelanteras' => $row['cddelanteras'],
      'cttraseras' => $row['cttraseras'],
      'crepuesto' => $row['crepuesto'],
      'cderecho' => $row['cderecho'],
      'cizquierdo' => $row['cizquierdo'],
      'cretrovisor' => $row['cretrovisor'],
      'cbocina' => $row['cbocina'],
      'cfrenos' => $row['cfrenos'],
      'caceite' => $row['caceite'],
      'crefrigerante' => $row['crefrigerante'],
      'cdelan' => $row['cdelan'],
      'ctras' => $row['ctras'],
      'ccinturones' => $row['ccinturones'],
      'ca' => $row['ca'],
      'sincronizacion' => $row['sincronizacion'],
      'cab' => $row['cab'],
      'cll' => $row['cll'],
      'rtmecanica' => $row['rtmecanica'],
      'casoat' => $row['casoat'],
      'fv' => $row['fv'],
      'ecapacidad' => $row['ecapacidad'],
      'calicates' => $row['calicates'],
      'cdestorni' => $row['cdestorni'],
      'cle' => $row['cle'],
      'clf' => $row['clf'],
      'ccruceta' => $row['ccruceta'],
      'cgh' => $row['cgh'],
      'ctaco' => $row['ctaco'],
      'csenal' => $row['csenal'],
      'cchaleco' => $row['cchaleco'],
      'cbotiquin' => $row['cbotiquin'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json[0]);
  echo $jsonstring;
}
?>
