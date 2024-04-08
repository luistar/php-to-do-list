<?php
$db = new PDO('sqlite:todo.db'); //creates database if not exists
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//create todos table, if not exists
$db->exec("CREATE TABLE IF NOT EXISTS todos ( 
  todo TEXT, 
  creation_date TEXT)"
);

$result = $db->query('SELECT * FROM todos');
$isListEmpty = true
?>

<div class="list-group">
  <?php foreach($result as $record): ?>
    <a href="#" class="list-group-item list-group-item-action">
      <?= $record["todo"] ?> (<?= $record["creation_date"] ?>)
      <?php $isListEmpty = false ?>
    </a>
  <?php endforeach; ?>
  <?php if($isListEmpty): ?>
    <p class="text-danger">The To-do list is currently empty! Add the first item using the form above.</p>
  <?php endif; ?>
</div>