<?php
include('database.php');
$search = $_POST['search'];
if(!empty($search)) {
  $query = "SELECT * FROM pesv WHERE name LIKE '$search%'";
  $result = mysqli_query($connection, $query);
  if(!$result) {
    die('Query Error' . mysqli_error($connection));
  }
  $json = array();
  while($row = mysqli_fetch_array($result)) {
    $json[] = array(
      'fuec' => $row['fuec'],
      'name' => $row['name'],
      'apellido' => $row['apellido'],
      'description' => $row['description'],
      'id' => $row['id']
    );
  }
  $jsonstring = json_encode($json);
  echo $jsonstring;
}
?>
