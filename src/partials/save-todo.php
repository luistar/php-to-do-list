<?php
$db = new PDO('sqlite:todo.db'); //creates database if not exists
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//create todos table, if not exists
$db->exec("CREATE TABLE IF NOT EXISTS todos ( 
  todo TEXT, 
  creation_date TEXT)"
);

//create insert statement
$insert_statement = $db->prepare(
  "INSERT INTO todos(todo, creation_date)
  VALUES (:todo, :creation_date)"
);

//bind parameters to statement
$insert_statement->bindParam(':todo', $_POST['todo']);
$current_date = date("d/m/Y");
$insert_statement->bindParam(':creation_date', $current_date);

$insert_statement->execute();
?>
