<?php
require 'db.php';

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id = :id";

$statement = $connection -> execute();

if($statement -> execute([':id -> $id'])){
  header('location: /shop/index.php');
}
 ?>
