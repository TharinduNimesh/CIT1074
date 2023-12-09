<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../../components/common/header.php') ?>
  <title>Menu</title>
  <!-- Bootstrap CSS -->
</head>

<body class="bg-dark">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">EversoftCafe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
  <div class="container mt-4 bg-dark text-light p-3">
    <form>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="number" class="form-control" id="price">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button type="button" onclick="addFood();" class="btn btn-primary">Submit</button>
    </form>
  </div>
  <!-- Content End -->

  <?php include_once('../../components/common/js.php') ?>

  <script>
    function addFood() {
      const name = document.getElementById('name').value;
      const price = document.getElementById('price').value;
      const description = document.getElementById('exampleFormControlTextarea1').value;

      if (
        name === '' ||
        price === '' ||
        description === ''
      ) {
        iziToast.error({
          title: 'Error',
          message: 'Please fill all the fields',
        });
        return;
      }
      useFetch('/app/add-food.php', 'POST', {
        name,
        price,
        description,
        category: 1,
      }, () => {
        iziToast.success({
          title: 'Success',
          message: 'Food added successfully',
        });
      });
    }
  </script>
</body>

</html>