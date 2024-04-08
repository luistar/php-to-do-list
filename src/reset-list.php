<?php
$db = new PDO('sqlite:todo.db'); //creates database if not exists
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//create todos table, if not exists
$db->exec("DROP TABLE IF EXISTS todos");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP To-do List App</title>
  <?php include("./partials/head.php") ?>
</head>
<body class="d-flex flex-column vh-100">
  <?php include("./partials/navbar.php") ?>
  <main class="container py-4">
    <h1>To-do list has been reset</h1>
    <p>The To-do list has been successfully reset and all items have been deleted.
      <a href="/todo.php">Go back to the list</a> to add new items.</p>
  </main>
  <?php include("./partials/footer.php") ?>
</body>
</html>
