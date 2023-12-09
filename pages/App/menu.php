<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../../components/common/header.php') ?>
  <title>Menu</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">EversoftCafe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="/pages/App/menu.php">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/pages/App/orders.php">Order</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container mt-4 bg-light p-3">
    <form>
      <div class="mb-3">
        <label for="name" class="form-label text-dark">Name</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label text-dark">Price</label>
        <input type="number" class="form-control" id="price">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label text-dark">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <!-- Content End -->

  <?php include_once('../../components/common/js.php') ?>
  <!-- Bootstrap JS (optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
