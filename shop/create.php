<?php
require 'db.php';

$message = '';

if(isset($_POST['name']) && isset($_POST['email']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];

  $sql = 'INSERT INTO user(name, email) VALUES (:name, :email)';
  $statement = $connection->prepare($sql);

  if ($statement->execute(['name' => $name, 'email' => $email]));{
    $message = "user add !";
  }
}
?>


<form method = "post">

  <div>
    <input type = "text" name = "name" id =" name">
  </div>

  <div>
    <input type = "text" name = "email" id =" email">
  </div>

   <div>
     <input type = "submit" value = "submit">
   </div>

</form>
