<?php
require 'db.php';

$sql = 'SELECT * FROM user';

$statement = $connection->prepare($sql);

$statement->execute();

$users = $statement->fetchAll(PDO::FETCH_OBJ);
?>

  <div>
      <?php foreach($users as $user): ?>
      <p><?= $user->id; ?></p>
      <p><?= $user->name; ?></p>
      <p><?= $user->email; ?></p>
      <?php endforeach; ?>
  </div>
