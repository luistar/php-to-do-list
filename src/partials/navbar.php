<nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">PHP ToDo List</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link 
            <?= str_contains($_SERVER["DOCUMENT_URI"], "index.php") ? "active" : "" ?>" 
            aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= str_contains($_SERVER["DOCUMENT_URI"], "todo.php") ? "active" : "" ?>" href="/todo.php">To-do List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= str_contains($_SERVER["DOCUMENT_URI"], "reset-list.php") ? "active" : "" ?>" href="/reset-list.php">Reset List</a>
        </li>
      </ul>
    </div>
  </div>
</nav>