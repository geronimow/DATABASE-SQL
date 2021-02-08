<?php
require 'db.php';

$id = $_GET['id'];

$sql = 'SELECT * FROM user WHERE id = :id';

$statement = $connection -> prepare($sql);

$statement -> execute([:'id' -> $id]);

$user = $statement -> fetch(PDO::FETCH_OBJ);

if(isset($_POST['name']) && isset($_POST['email']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];

  $updateSql = 'UPDATE user SET name = :name, email = :email, WHERE id = :id';

  $statement = $connection -> prepare($updateSql);

  if($statement -> execute([:'id' -> $id, :'name' -> $name, :'email' -> $email])){

    if($statement -> execute([':id -> $id'])){
      header('location: /shop/index.php');
    }

  }

 ?>
