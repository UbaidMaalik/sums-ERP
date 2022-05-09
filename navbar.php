<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap --->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./index.css" />
  <script src="./index.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Sums ERP....</title>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand homebanner" href="./home.php">
          <img src="./images/sumserp.png" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa-solid fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-mega position-static">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">FEATURES</a>
              <div class="dropdown-menu shadow">
                <div class="container p-0 py-0">
                  <?php require_once "banner/banner3.php"; ?>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown dropdown-mega position-static">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">DOCS</a>
              <div class="dropdown-menu shadow">
                <div class="container p-0 py-0">
                  <?php require_once "banner/banner2.php"; ?>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./company.php">COMPANY</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./pricing.php">PRICING</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./how.php">HOW TO</a>
            </li>
          </ul>
          <a href="#" class="btn">DEMO</a>
        </div>
      </div>
    </nav>
  </div>

</body>

</html>