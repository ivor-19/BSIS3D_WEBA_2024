<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>List Of Tasks Demo</title>
  <link rel = "stylesheet" href = "../css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php if (!empty($_SESSION['USER'])): ?>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="<?= ROOT ?>/tasks">Tasks</a>
                </li>
              <?php endif; ?>
             
        </ul>
            <div class = "d-flex align-items-center gap-3">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <div>
                <?php if (empty($_SESSION['USER'])): ?>

                    <a href="<?= ROOT ?>/login" class="btn btn-secondary">Login</a>
                    <?php else: ?>

                    <span class="me-1"><?= $_SESSION['USER']->name ?></span>
                    <a href="<?= ROOT ?>/logout" class="btn btn-secondary">Logout</a>

                  <?php endif; ?>
                </div>
               
            </div>
           
      </div>
    </div>
  </nav>