<?php
include('database.php');
if(isset($_POST['id'])) {
  $id = $_POST['id'];
  $query = "DELETE FROM pesv WHERE id = $id";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query Failed.');
  }
  echo "Tarea Finalizada";  
}
?>
