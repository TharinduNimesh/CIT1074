<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('./components/common/header.php') ?>
  <title>Document</title>
</head>

<body class="bg-dark">
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

  <main id="main">
    <!-- home section -->
    <section class="details">
      <div class="home-bg-img">
        <div class="layer"></div>

        <div class="slogun d-flex justify-content-center align-items-center bg-gradient">
          <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
            <div class="row">
              <div class="col-6">
                <h1 class="text-warning">
                  Welcome to <span class="text-danger">Cafe Eversoft...</span>
                </h1>
                <h2 class="text-light">
                  Cafe Eversoft: A Symphony of Taste and Comfort.
                </h2>
                <div class="d-flex gap-5 p-3">
                  <button type="button" class="btn btn-outline-warning btn-menu animated fadeInUp scrollto">
                    <a href="/pages/menu.php">Our Menu</a>
                  </button>
                  <button type="button" class="btn btn-outline-warning btn-menu animated fadeInUp scrollto">
                    <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Place a Order</a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End home section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">
        <div class="section-title pt-5">
          <h1 class="menu-topic-color">Chefs</h1>
          <p>Our Proffesional Chefs</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 rounded">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs-1.jpg" class="img-fluid rounded" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Walter White</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 rounded">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs-2.jpg" class="img-fluid rounded" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Jhonson</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 rounded">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs-3.jpg" class="img-fluid rounded" alt="" />
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Anderson</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Chefs Section -->

    <!-- comment section -->
    <section>
      <div class="container pt-5 comment-color"></div>
    </section>

    <!-- comment section ends -->

    <!-- Footer Section -->
    <footer id="footer" class="footer">
      <div class="container pt-5 bg-dark">
        <div class="row gy-2">
          <div class="col-lg-3 col-md-6 d-flex">
            <i class="bi bi-geo-alt icon"></i>
            <div>
              <h4>Address</h4>
              <p>
                Kelaniya <br />
                Biyagama RD,Sri Lanka<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-telephone icon"></i>
            <div>
              <h4>Reservations</h4>
              <p>
                <strong>Phone:</strong> +94 77 111 222 <br />
                <strong>Email:</strong> info@example.com<br />
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 footer-links d-flex">
            <i class="bi bi-clock icon"></i>
            <div>
              <h4>Opening Hours</h4>
              <p>
                <strong>Mon-Sat: 11AM</strong> - 23PM<br />
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

  <?php include_once('./components/common/js.php') ?>
</body>

</html>