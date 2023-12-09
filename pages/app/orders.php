<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../../components/common/header.php') ?>
  <title>Orders</title>
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
        <label for="name" class="form-label text-dark">Name :</label>
        <label for="name" class="form-label text-dark">Name Here</label>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label text-dark">Number :</label>
        <label for="name" class="form-label text-dark">Number Here</label>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label text-dark">Address :</label>
        <label for="name" class="form-label text-dark">Address Here</label>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label text-dark">Food :</label>
        <label for="name" class="form-label text-dark">Food Here</label>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label text-dark">Quantity :</label>
        <label for="name" class="form-label text-dark">Quantity Here</label>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label text-dark">Total :</label>
        <label for="name" class="form-label text-dark">Total Here</label>
      </div>
      <button type="submit" class="btn btn-primary">Mark as Read</button>
    </form>
  </div>
  <!-- Content End -->
  <?php include_once('../../components/common/js.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>