<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP To-do List App</title>
  <?php include("./partials/head.php") ?>
</head>
<body class="d-flex flex-column vh-100">
  <?php include("./partials/navbar.php") ?>
  <main class="container py-4">
    <h1>Welcome to your To-do List</h1>
    <p>
      Welcome to our PHP To-do list web app! Links to reset the list or to go back
      to the homepage are on the navbar above.
      Use the form below to add items to the To-Do list!
    </p>

    <form class="row g-3 align-items-end py-4" action="" method="POST">
      <div class="col-md-9">
        <label for="todo" class="form-label">To-do Item</label>
        <input type="text" class="form-control" id="todo" name="todo" required>
      </div>
      <div class="col-md-3">
        <button class="btn btn-primary w-100" type="submit">Save To-do</button>
      </div>
    </form>

    <?php if($_SERVER["REQUEST_METHOD"] === "POST") : ?>
      <?php include("./partials/save-todo.php") ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>To-do item "<?= $_POST["todo"] ?>" saved!</strong> Feel free to add as many as you want.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif ?>

    <h2 class="py-4">To-do List</h2>
    <?php include("./partials/list-todos.php") ?>
  </main>
  <?php include("./partials/footer.php") ?>
</body>
</html>
