<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../components/common/header.php') ?>
  <title>Orders</title>

  <style>
    .card {

      background-color: #fff;
      margin-top: 80px;
      padding: 15px;
      border: none;
    }

    .input-box {
      position: relative;
    }

    .input-box i {
      position: absolute;
      right: 13px;
      top: 15px;
      color: #ced4da;

    }

    .form-control {

      height: 50px;
      background-color: #eeeeee69;
    }

    .form-control:focus {
      background-color: #eeeeee69;
      box-shadow: none;
      border-color: #eee;
    }


    .list {

      padding-top: 20px;
      padding-bottom: 10px;
      display: flex;
      align-items: center;

    }

    .border-bottom {

      border-bottom: 2px solid #eee;
    }

    .list i {
      font-size: 19px;
      color: red;
    }

    .list small {

      color: #dedddd;
    }
  </style>
</head>

<body>
  <!-- nav bar -->
  <header class="header fixed-top d-flex align-items-center justify-content-center rounded">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0 m-0 p-0">
        <a href="/" class="logo d-flex align-items-center me-auto me-lg-0">
          <h1>CAFE<span>Eversoft</span>.</h1>
        </a>
      </h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/pages/about.php">About</a></li>
          <li><a href="/pages/menu.php">Menu</a></li>
          <li><a href="/pages/order.php">Orders</a></li>
          <li><a href="/pages/contact.php">Contact</a></li>
        </ul>
      </nav>
      <a class="btn-menu" href="/pages/login.php">Login Here</a>
    </div>
  </header>
  <!-- End navbar -->

  <main>
    <!-- Order Section -->
    <section id="contact" class="contact bg-dark pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 bg-white rounded shadow-sm mb-5">
            <div class="card">
              <div class="input-box">
                <input type="text" placeholder="Search for here" class="form-control">
                <i class="fa fa-search"></i>
              </div>
              <div class="list border-bottom d-flex align-items-center">
                <i class="fa fa-fire"></i>
                <div class="d-flex flex-column ml-3">
                  <span>Item</span>
                  <small>$29</small>
                </div>
              </div>
              <div class="list border-bottom d-flex align-items-center">
                <i class="fa fa-yelp"></i>
                <div class="d-flex flex-column ml-3">
                  <span>Item</span>
                  <small>$36</small>
                </div>
                <!-- Add checkbox here if needed -->
              </div>
              <div class="list border-bottom d-flex align-items-center">
                <i class="fa fa-fire"></i>
                <div class="d-flex flex-column ml-3">
                  <span>Item</span>
                  <small>$25</small>
                </div>
                <!-- Add checkbox here if needed -->
              </div>
              <div class="list d-flex align-items-center">
                <i class="fa fa-weibo"></i>
                <div class="d-flex flex-column ml-3">
                  <span>Item</span>
                  <small>$29</small>
                </div>
                <!-- Add checkbox here if needed -->
              </div>
            </div>
            <div class="text-center mb-5"><button type="submit" class="btn btn-dark">Add to Cart</button></div>
          </div>

          <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
            <!-- Shopping cart table -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" class="border-0 bg-light">
                      <div class="p-2 px-3 text-uppercase">Product</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Price</div>
                    </th>
                    <th scope="col" class="border-0 bg-light">
                      <div class="py-2 text-uppercase">Quantity</div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="border-0">
                      <div class="p-2">
                        <img src="/assets/img/menu/menu-item-1.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block align-middle">Timex Unisex
                              Originals</a></h5>
                        </div>
                      </div>
                    </th>
                    <td class="border-0 align-middle"><strong>$79.00</strong></td>
                    <td class="border-0 align-middle"><strong>3</strong></td>
                    <td class="border-0 align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="p-2">
                        <img src="/assets/img/menu/menu-item-2.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"><a href="#" class="text-dark d-inline-block">Lumix camera lense</a></h5>
                        </div>
                      </div>
                    </th>
                    <td class="align-middle"><strong>$79.00</strong></td>
                    <td class="align-middle"><strong>3</strong></td>
                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">
                      <div class="p-2">
                        <img src="/assets/img/menu/menu-item-3.png" alt="" width="70" class="img-fluid rounded shadow-sm">
                        <div class="ml-3 d-inline-block align-middle">
                          <h5 class="mb-0"> <a href="#" class="text-dark d-inline-block">Gray Nike running shoe</a>
                        </div>
                      </div>
                    <td class="align-middle"><strong>$79.00</strong></td>
                    <td class="align-middle"><strong>3</strong></td>
                    <td class="align-middle"><a href="#" class="text-dark"><i class="fa fa-trash"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- End -->
          </div>
        </div>

        <div class="row py-5 p-4 bg-white rounded shadow-sm">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="number" class="form-control" name="number" id="number" placeholder="Your Number" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="Address" id="Address" placeholder="Address" required>
            </div>
            <div class="text-center mt-5"><button type="submit" class="btn btn-dark">Process</button></div>
          </form>
        </div>
      </div>
      </div>
    </section>
    <!-- End order Section -->


    <!-- Footer Section -->
    <footer id="footer" class="footer">
      <div class="container pt-5 bg-dark">
        <div class="row gy-2">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
                Kelaniya <br>
                Biyagama RD,Sri Lanka<br>
              </p>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservations</h4>
              <p>
                <strong>Phone:</strong> +94 77 111 222 <br>
                <strong>Email:</strong> info@example.com<br>
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat: 11AM</strong> - 23PM<br>
                Sunday: Closed
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Follow Us</h4>
            <div class="social-links d-flex">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Eversoft</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by <a href="">Rathanapala Thero</a>
        </div>
      </div>
    </footer>
    <!-- End Footer Section -->
  </main>

  <?php include_once('../components/common/js.php') ?>
</body>

</html>