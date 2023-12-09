<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../components/common/header.php') ?>
  <title>Menu</title>
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
    <!--content here-->
    <section id="menu" class="menu bg-dark">
      <div class="container" data-aos="fade-up">

        <div class="section-header d-flex align-items-center justify-content-center menu-topic">
          <h2>Our Menu</h2>
          <p><span></span></p>
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <p class="menu-topic-color">Cafe.Eversoft</p>
              <h3>Starters</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item bg-gradient rounded p-3">
                <a href="/assets/img/menu/menu-item-1.png" class="glightbox"><img src="/assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                <h4 class="menu-topic-color">Savory Sunrise Omelette</h4>
                <p class="ingredients">
                  A three-egg omelette filled with a medley of sautéed mushrooms, spinach, and feta cheese. Served with a side of golden hash browns and freshly toasted whole-grain bread.
                </p>
                <p class="price menu-price">
                  Price: LKR 820.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item bg-gradient rounded p-3">
                <a href="/assets/img/menu/menu-item-2.png" class="glightbox"><img src="/assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                <h4 class="menu-topic-color">Mediterranean Avocado Toast</h4>
                <p class="ingredients">
                  Sliced avocado on a bed of artisanal multigrain toast, topped with cherry tomatoes, feta cheese crumbles, and a sprinkle of za'atar seasoning. Drizzled with extra virgin olive oil.
                </p>
                <p class="price menu-price">
                  Price: LKR 690.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item bg-gradient rounded p-3">
                <a href="/assets/img/menu/menu-item-3.png" class="glightbox"><img src="/assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                <h4 class="menu-topic-color">Asian Fusion Chicken Noodle Bowl</h4>
                <p class="ingredients">
                  Tender slices of grilled chicken breast served on a bed of rice noodles, accompanied by crisp vegetables, and bathed in a flavorful soy-ginger broth. Garnished with green onions and sesame seeds.
                </p>
                <p class="price menu-price">
                  Price: LKR 890
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item bg-gradient rounded p-3">
                <a href="/assets/img/menu/menu-item-4.png" class="glightbox"><img src="/assets/img/menu/menu-item-4.png" class="menu-img img-fluid" alt=""></a>
                <h4 class="menu-topic-color">Harvest Quinoa Salad</h4>
                <p class="ingredients">
                  A hearty salad featuring a mix of quinoa, roasted butternut squash, kale, dried cranberries, and toasted almonds. Tossed in a zesty lemon vinaigrette.
                </p>
                <p class="price menu-price">
                  Price: LKR 780.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item bg-gradient rounded p-3">
                <a href="/assets/img/menu/menu-item-5.png" class="glightbox"><img src="/assets/img/menu/menu-item-5.png" class="menu-img img-fluid" alt=""></a>
                <h4 class="menu-topic-color">Cheesy Spinach and Artichoke Panini</h4>
                <p class="ingredients">
                  Grilled panini filled with a luscious blend of melted mozzarella, creamy spinach, and artichoke hearts. Served with a side of sweet potato fries.
                </p>
                <p class="price menu-price">
                  Price: LKR 950.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item bg-gradient rounded p-3">
                <a href="/assets/img/menu/menu-item-6.png" class="glightbox"><img src="/assets/img/menu/menu-item-6.png" class="menu-img img-fluid" alt=""></a>
                <h4 class="menu-topic-color">Decadent Chocolate Hazelnut Waffle</h4>
                <p class="ingredients">
                  Crispy waffle topped with a rich chocolate-hazelnut spread, fresh strawberries, and a dusting of powdered sugar. Finished with a scoop of vanilla bean ice cream.
                </p>
                <p class="price menu-price">
                  Price: LKR 1100.00
                </p>
              </div><!-- Menu Item -->

            </div>
          </div>

        </div>
      </div>
      </div>

      </div>
    </section>




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
      <script>
       async function SetMenu(){
            const response = await useFetch("/get-menu.php",'GET');null
        }
        () => {
          console.log('data');
        }

      </script>
</body>

</html>