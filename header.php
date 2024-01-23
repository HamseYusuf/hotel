<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Atu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Students </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">log out  </a>
        </li>
      </ul>
      <form action="search.php" method="get">
          <div class="input-group">
            <input type="text" name="query" placeholder="Search by name" class="form-control">
          </div>
          <div class="input-group-append">
            <button class=" btn btn-primary btn-sm " type="submit">Search</button>
          </div>
        </form>
    </div>
  </div>
</nav>