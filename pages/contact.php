<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../components/common/header.php') ?>
  <title>Contact Us</title>
</head>

<body>
  <main id="main">
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

    <!-- Contact Section -->
    <section id="contact" class="contact bg-dark pt-5 pb-5">
      <div data-aos="fade-up" class="pt-5">
        <iframe style="border:0; width: 100%; height: 350px;"
          src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
          frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Kelaniya Biyagama RD,Sri Lanka</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Open Hours:</h4>
                <p>
                  Monday-Saturday:<br>
                  9:00 AM - 11:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+94 70 532 1516</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="8" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" class="btn btn-primary">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->

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