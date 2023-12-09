<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../components/common/header.php') ?>
  <title>Login</title>
  <style>
    body {
      background-color: #f8f9fa;
      /* Set a light background color */
    }

    .card {
      background-color: #ffffff;
      /* Set card background color to white */
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      /* Add a light box shadow */
    }
  </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper bg-dark" id="main-wrapper" data-layout="vertical" data-navbarbg="light" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.php" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../assets/images/logos/light-logo.svg" width="180" alt="">
                </a>
                <h1 class="logo text-center align-content-center">
                  <span class="text-primary">Cafe</span>Eversoft
                  <p>Login</p>
                </h1>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Remember this Device
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.php">Forgot Password?</a>
                  </div>
                  <button class="btn btn-primary w-100 fs-4 mb-4 rounded-2" type="button" onclick="login()">Sign In</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('../components/common/js.php') ?>
  <script>
    async function login() {
      const email = document.getElementById('email').value;
      const password = document.getElementById('password').value;

      if (email === '' || password === '') {
        iziToast.error({
          title: 'Error',
          message: 'Please fill all the fields',
        });
      } else {
        const response = await useFetch("/login.php", 'POST', {
          email,
          password
        }, () => {
          iziToast.success({
            title: 'Success',
            message: 'Login Successful',
          });
          window.location.href = '/pages/app/menu.php';
        });
      }
    }
  </script>
</body>

</html>