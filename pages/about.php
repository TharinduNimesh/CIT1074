<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once("../components/common/header.php") ?>
  <title>About Us</title>
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
    <!-- about section -->
    <section id="about" class="about bg-dark">
  <div class="container" data-aos="fade-up">
    <div class="section-header text-center mb-4">
      <div class="about-font">
        <h2 class="menu-topic-color">About Us</h2>
        <p>Learn More <span>About Us</span></p>
      </div>
    </div>

    <div class="row gy-4">
      <div class="col-lg-7 position-relative about-img p-3" style="background-image: url(/assets/img/about.jpg);"
        data-aos="fade-up" data-aos-delay="150">
        <div class="call-us position-absolute">
          <h4>Cafe Eversoft: A Symphony of Taste and Comfort.</h4>
          <p>+94 77 111 222</p>
        </div>
        <div>
          <h2 class="aboutUs-font2">Welcome to CAFE.Eversoft...</h2>
          <p class="aboutUs-font3">Cafe Eversoft is dedicated to minimizing our environmental footprint. From
            eco-friendly packaging to energy-efficient practices, we are constantly exploring ways to reduce our
            impact on the environment. Join us in our commitment to a greener future as we strive to make each cup and
            every dish not only delicious but also environmentally conscious.</p>
        </div>
      </div>

      <div class="col-lg-5 d-flex align-items-end" data-aos="fade-up" data-aos-delay="300">
        <div class="content ps-0 ps-lg-5">
          <p class="fst-italic">
            Welcome to Cafe Eversoft, where every cup tells a story and every bite is a journey of flavors.
            Established in the heart of the city, Cafe Eversoft is more than just a place to grab a cup of coffee;
            it's a haven for those seeking a moment of respite, a burst of inspiration, and a celebration of the
            finer things in life.
          </p>
          <ul class="list-unstyled">
            <li><i class="bi bi-check2-all"></i>At Cafe Eversoft, we are committed to ethical sourcing. Our coffee
              beans are carefully selected from sustainable and fair-trade sources, ensuring that every cup you
              enjoy has a positive impact on both the environment and the communities involved in the coffee
              production process.</li>
            <li><i class="bi bi-check2-all"></i>Cafe Eversoft is dedicated to minimizing our environmental
              footprint. From eco-friendly packaging to energy-efficient practices, we are constantly exploring ways
              to reduce our impact on the environment. Join us in our commitment to a greener future as we strive to
              make each cup and every dish not only delicious but also environmentally conscious.</li>
          </ul>
          <p>
            Whether you're seeking a quiet corner for reflection, a vibrant space for catching up with friends, or
            simply a place to savor a delightful meal, Cafe Eversoft welcomes you. Our dedicated team is here to
            ensure that every visit is a memorable experience, filled with warmth, flavor, and a touch of Eversoft
            magic.
          </p>
        </div>
      </div>
    </div>

    <div class="row justify-content-center mt-4">
      <div class="col-lg-7 text-center">
        <img src="/assets/img/about-2.jpg" class="img-fluid" alt="">
      </div>
    </div>
  </div>
</section>

    <!-- about section end -->

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

  <?php include_once("../components/common/js.php") ?>
</body>

</html>