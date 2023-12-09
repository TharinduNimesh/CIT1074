<!DOCTYPE html>
<html lang="en">

<head>
  <?php include_once('../components/common/header.php') ?>
  <title>Menu</title>
</head>

<body onload="setMenu()">
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

            <div class="row gy-5" id="menu-container">

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
    async function setMenu() {
      const response = await useFetch("/get-menu.php", 'GET', null, data => {
        console.log(data);
        if (!Array.isArray(data?.data)) {
          iziToast.error({
            title: 'Error',
            message: data.message,
            position: 'topRight'
          });
          return;
        }
        try {
          const items = data.data;
          items.forEach(food => {
            const container = document.getElementById('menu-container');

            const menuItem = document.createElement('div');
            menuItem.className = 'col-lg-4 menu-item bg-gradient rounded p-3';

            const imgLink = document.createElement('a');
            imgLink.href = '/assets/img/menu/menu-item-1.png';
            imgLink.className = 'glightbox';

            const img = document.createElement('img');
            img.src = '/assets/img/menu/menu-item-1.png';
            img.className = 'menu-img img-fluid';
            img.alt = '';

            const h4 = document.createElement('h4');
            h4.className = 'menu-topic-color';
            h4.textContent = food.name;

            const pIngredients = document.createElement('p');
            pIngredients.className = 'ingredients';
            pIngredients.textContent = food.description;

            const pPrice = document.createElement('p');
            pPrice.className = 'price menu-price';
            pPrice.textContent = `Rs. ${food.price}`;

            // Appending child elements
            imgLink.appendChild(img);
            menuItem.appendChild(imgLink);
            menuItem.appendChild(h4);
            menuItem.appendChild(pIngredients);
            menuItem.appendChild(pPrice);

            container.appendChild(menuItem);
          });
        } catch (error) {
          iziToast.error({
            title: 'Error',
            message: "Error While Loading Data : " + error,
          });
        }
      });
    }
  </script>
</body>

</html>