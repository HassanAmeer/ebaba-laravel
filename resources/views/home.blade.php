<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swag Tech - Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <!-- used in navbar for icons only -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

</head>






<body>

  <style>
    .textSlider {
      position: relative;
      height: 50px;
      /* Set the height of the textSlider */
      overflow: hidden;
      background-color: black;
      /* Background color */
      color: white;
      /* Text color */
    }

    .textSlider-content {
      position: absolute;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      /* Start hidden */
      transition: opacity 0.5s ease;
      /* Fade transition */
    }

    .active {
      opacity: 1;
      /* Show the active slide */
    }

    .navigation {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }
  </style>
  <div class="textSlider">
    <div class="textSlider-content active">Welcome to Our Website!</div>
    <div class="textSlider-content">Explore Our Products!</div>
    <div class="textSlider-content">Join Us Today!</div>
    <div class="navigation">
      <div id="prev" class="fas fa-chevron-left text-muted" style="scale: 1.5; padding: 3rem;"></div>
      <div id="next" class="fas fa-chevron-right text-muted" style="scale: 1.5; padding: 3rem;"></div>
    </div>
  </div>











  <style>
    /* ===== Google Font Import - Poppins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    /* * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
      transition: all 0.4s ease;
      ;
    } */


    /* ===== Colours ===== */
    :root {
      --body-color: F4F7F9;
      /* --body-color: #E4E9F7; */
      --nav-color: white;
      --side-nav: #010718;
      --text-color: black;
      --search-bar: black;
      --search-text: white;
    }

    body {
      height: 100vh;
      background-color: var(--body-color);
    }

    body.dark {
      --body-color: #18191A;
      --nav-color: #242526;
      --side-nav: #242526;
      --text-color: #CCC;
      --search-bar: #242526;
    }

    nav {
      position: relative;
      top: 0;
      left: 0;
      height: 70px;
      width: 100%;
      background-color: var(--nav-color);
      z-index: 1;
    }

    body.dark nav {
      border: 1px solid #393838;

    }

    nav .nav-bar {
      position: relative;
      height: 100%;
      max-width: 1000px;
      width: 100%;
      background-color: var(--nav-color);
      margin: 0 auto;
      padding: 0 30px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    nav .nav-bar .sidebarOpen {
      color: var(--text-color);
      font-size: 25px;
      padding: 5px;
      cursor: pointer;
      display: none;
    }

    nav .nav-bar .logo a {
      font-size: 25px;
      font-weight: 500;
      color: var(--text-color);
      text-decoration: none;
    }

    .menu .logo-toggle {
      display: none;
    }

    .nav-bar .nav-links {
      display: flex;
      align-items: center;
    }

    .nav-bar .nav-links li {
      margin: 0 5px;
      list-style: none;
    }

    .nav-links li a {
      position: relative;
      font-size: 17px;
      font-weight: 400;
      color: var(--text-color);
      text-decoration: none;
      padding: 10px;
    }

    .nav-links li a::before {
      content: '';
      position: absolute;
      left: 50%;
      bottom: 0;
      transform: translateX(-50%);
      height: 6px;
      width: 6px;
      border-radius: 50%;
      background-color: var(--text-color);
      opacity: 0;
      transition: all 0.3s ease;
    }

    .nav-links li:hover a::before {
      opacity: 1;
    }

    .nav-bar .darkLight-searchBox {
      display: flex;
      align-items: center;
    }

    .darkLight-searchBox .dark-light,
    .darkLight-searchBox .searchToggle {
      height: 40px;
      width: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 5px;
    }

    .dark-light i,
    .searchToggle i {
      position: absolute;
      color: var(--text-color);
      font-size: 22px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .dark-light i.sun {
      opacity: 0;
      pointer-events: none;
    }

    .dark-light.active i.sun {
      opacity: 1;
      pointer-events: auto;
    }

    .dark-light.active i.moon {
      opacity: 0;
      pointer-events: none;
    }

    .searchToggle i.cancel {
      opacity: 0;
      pointer-events: none;
    }

    .searchToggle.active i.cancel {
      opacity: 1;
      pointer-events: auto;
    }

    .searchToggle.active i.search {
      opacity: 0;
      pointer-events: none;
    }

    .searchBox {
      position: relative;
    }

    .searchBox .search-field {
      position: absolute;
      bottom: -85px;
      right: 5px;
      height: 50px;
      width: 300px;
      display: flex;
      align-items: center;
      background-color: var(--nav-color);
      padding: 3px;
      border-radius: 6px;
      box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
      opacity: 0;
      pointer-events: none;
      transition: all 0.3s ease;
    }

    .searchToggle.active~.search-field {
      bottom: -74px;
      opacity: 0.8;
      pointer-events: auto;
    }

    .search-field::before {
      content: '';
      position: absolute;
      right: 14px;
      top: -4px;
      height: 12px;
      width: 12px;
      background-color: var(--nav-color);
      transform: rotate(-45deg);
      z-index: -1;
    }

    .search-field input {
      height: 100%;
      width: 100%;
      padding: 0 45px 0 15px;
      outline: none;
      border: none;
      border-radius: 4px;
      font-size: 14px;
      font-weight: 400;
      color: var(--search-text);
      background-color: var(--search-bar);
    }

    body.dark .search-field input {
      color: var(--text-color);
    }

    .search-field i {
      position: absolute;
      color: var(--nav-color);
      right: 15px;
      font-size: 22px;
      cursor: pointer;
    }

    body.dark .search-field i {
      color: var(--text-color);
    }

    @media (max-width: 790px) {
      nav .nav-bar .sidebarOpen {
        display: block;
      }

      .menu {
        position: fixed;
        height: 100%;
        width: 320px;
        left: -100%;
        top: 0;
        padding: 20px;
        background-color: var(--side-nav);
        z-index: 100;
        transition: all 0.4s ease;
      }

      nav.active .menu {
        left: -0%;
      }

      nav.active .nav-bar .navLogo a {
        opacity: 0;
        transition: all 0.3s ease;
      }

      .menu .logo-toggle {
        display: block;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      .logo-toggle .siderbarClose {
        color: var(--text-color);
        font-size: 24px;
        cursor: pointer;
      }

      .nav-bar .nav-links {
        flex-direction: column;
        padding-top: 30px;
      }

      .nav-links li a {
        display: block;
        margin-top: 20px;
      }
    }
  </style>


  <nav>
    <div class="nav-bar">
      <i class='bx bx-menu sidebarOpen'></i>
      <span class="logo navLogo"><a href="#"> <img width="40rem"
            src="https://cdn-icons-png.freepik.com/256/16000/16000950.png" alt="" srcset=""> CodingLab</a></span>

      <div class="menu">
        <div class="logo-toggle">
          <span class="logo"><a href="#">CodingLab</a></span>
          <i class='bx bx-x siderbarClose'></i>
        </div>

        <ul class="nav-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Portfolio</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <div class="darkLight-searchBox">
        <!-- <div class="dark-light">
          <i class='bx bx-moon moon'></i>
          <i class='bx bx-sun sun'></i>
        </div> -->

        <div class="searchBox">
          <div class="searchToggle">
            <i class='bx bx-x cancel'></i>
            <i class='bx bx-search search'></i>
          </div>

          <div class="search-field">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search'></i>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <script>

    const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

    let getMode = localStorage.getItem("mode");
    if (getMode && getMode === "dark-mode") {
      body.classList.add("dark");
    }

    // js code to toggle dark and light mode
    modeToggle.addEventListener("click", () => {
      modeToggle.classList.toggle("active");
      body.classList.toggle("dark");

      // js code to keep user selected mode even page refresh or file reopen
      if (!body.classList.contains("dark")) {
        localStorage.setItem("mode", "light-mode");
      } else {
        localStorage.setItem("mode", "dark-mode");
      }
    });

    // js code to toggle search box
    searchToggle.addEventListener("click", () => {
      searchToggle.classList.toggle("active");
    });


    //   js code to toggle sidebar
    sidebarOpen.addEventListener("click", () => {
      nav.classList.add("active");
    });

    body.addEventListener("click", e => {
      let clickedElm = e.target;

      if (!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")) {
        nav.classList.remove("active");
      }
    });

  </script>

  <!-- imgSlides slides start -->
  <!-- <style>
    @media screen and (min-width: 600px) and (orientation: landscape) {
      .imgSlides {
        height: 80vh;
      }
    }

    @media screen and (max-width: 600px) {
      .imgSlides {
        height: 37vh;
      }
    }

    .imgSlides {
      position: relative;
      /* height: 80vh; */
      /* Set the height of the imgSlides */
      overflow: hidden;
      background-color: whitesmoke;
      /* Background color */
      color: white;
      /* Text color */
    }

    .imgSlides-content {
      position: absolute;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      /* Start hidden */
      transition: opacity 0.5s ease;
      /* Fade transition */
    }

    .active {
      opacity: 1;
    }

    .navigation {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }
  </style>
  <div class="imgSlides">
    <div class="imgSlides-content active"> <img
        src="https://static.vecteezy.com/system/resources/previews/006/795/097/non_2x/sale-banner-or-poster-with-realistic-podium-in-orange-and-blue-color-business-illustration-vector.jpg"
        class=" d-block w-100" alt="..."></div>
    <div class="imgSlides-content"> <img
        src="https://img.freepik.com/premium-vector/limited-time-offer-sale-poster-sale-banner-design-template-with-3d-editable-text-effect_535749-334.jpg"
        class=" d-block w-100" alt="..."></div>
    <div class="imgSlides-content"> <img
        src="https://static.vecteezy.com/system/resources/previews/006/795/097/non_2x/sale-banner-or-poster-with-realistic-podium-in-orange-and-blue-color-business-illustration-vector.jpg"
        class=" d-block w-100" alt="..."></div>
    <div class="navigation">
      <div id="prevImg" class="fas fa-chevron-left text-dark" style="scale: 2; padding: 3rem;"></div>
      <div id="nextImg" class="fas fa-chevron-right text-dark" style="scale:2; padding: 3rem;"></div>
    </div>
  </div> -->
  <!-- imgSlides slides end -->


  <!-- bannerSlides slides start -->
  <style>
    /* For large screens (e.g., desktops) */
    @media screen and (min-width: 1024px) {
      .bannerSlides {
        height: 85vh;
      }

      .banner-design-outer {
        width: 70%;
        min-height: 600px;
        min-width: 70rem;
      }

      .banner-design-inner {
        height: 350px;
        width: 30%;
        min-width: 25rem;
      }
    }

    /* For tablets or small landscape screens */
    @media screen and (min-width: 600px) and (max-width: 1024px) {
      .bannerSlides {
        height: 55vh;
      }

      .banner-design-outer {
        width: 80%;
        min-height: 400px;
        min-width: 45rem;
      }

      .banner-design-inner {
        height: 250px;
        width: 35%;
        min-width: 15rem;

      }
    }

    /* For mobile devices */
    @media screen and (max-width: 600px) {
      .bannerSlides {
        height: 40vh;
      }

      .banner-design-outer {
        width: 90%;

        min-width: 28rem;
        min-height: 300px;
      }

      .banner-design-inner {
        height: 150px;
        width: 45%;
        min-width: 10rem;
      }
    }

    .bannerSlides {
      position: relative;
      overflow: hidden;
      background-color: whitesmoke;
      color: white;
    }

    .bannerSlides-content {
      position: absolute;
      width: 100%;
      height: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transition: opacity 0.5s ease;
    }

    .active {
      opacity: 1;
    }

    .navigation {
      position: absolute;
      top: 50%;
      width: 100%;
      display: flex;
      justify-content: space-between;
      transform: translateY(-50%);
    }

    .bannerSlidesItem {
      position: relative;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .banner-design-outer {
      width: 80%;
      background-color: white;
      /* position: relative; */
      z-index: 0;
      display: flex;
      flex-direction: column;
      justify-content: center;
      /* box-shadow: 5px 5px 10px #CCC; */
    }

    .banner-design-inner {
      position: absolute;
      top: 25%;
      right: 2%;
      background-color: white;
      box-shadow: 5px 5px 10px #CCC;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 15;
      transform: translateY(0);
    }
  </style>

  <div class="bannerSlides">
    <div class="bannerSlides-content active">

      <div class="bannerSlidesItem">
        <center>
          <div class="banner-design-outer">

            <img
              src="https://static.vecteezy.com/system/resources/previews/006/795/097/non_2x/sale-banner-or-poster-with-realistic-podium-in-orange-and-blue-color-business-illustration-vector.jpg"
              class="w-100" alt="...">
            <div class="banner-design-inner">
              <h4 style="color: green;"> paksitan day offer </h4>

              <div id="nextBanner" class="fas fa-chevron-right text-dark"
                style="scale:1; padding: 1rem; border: 1px solid grey; border-radius: 30%;"></div>
            </div>

          </div>
        </center>
      </div>


    </div>
    <div class="bannerSlides-content"> <img
        src="https://static.vecteezy.com/system/resources/previews/006/795/097/non_2x/sale-banner-or-poster-with-realistic-podium-in-orange-and-blue-color-business-illustration-vector.jpg"
        class=" d-block w-100" alt="..."></div>
    <div class="navigation">
      <div id="prevBanner" class="fas fa-chevron-left text-dark" style="scale: 3; padding: 3rem;"></div>
      <!-- <div id="nextBanner" class="fas fa-chevron-right text-dark" style="scale:2; padding: 3rem;"></div> -->
    </div>
  </div>
  <!-- bannerSlides slides end -->

  <!-- Products Section -->

  <style>
    .product-card {
      position: relative;
      border: none;
      /* Remove shadow */
      transition: transform 0.2s;
      /* Add transition for hover effect */
    }

    .product-card:hover {
      transform: scale(1.05);
      /* Slightly enlarge on hover */
    }

    .card-body {
      text-align: center;
      /* Center the text */
    }

    .price-section {
      display: flex;
      /* Align prices in a row */
      justify-content: center;
      /* Center prices */
      margin: 10px 0;
      /* Add vertical spacing */
    }

    .sale-price {
      color: grey;
      /* Color for sale price */
      margin-right: 10px;
      /* Space between prices */
    }

    .actual-price {
      text-decoration: line-through;
      /* Strikethrough for actual price */
      color: black;
      /* Color for actual price */
    }

    .add-to-cart {
      display: none;
      margin-top: 10px;
      width: 100%;
    }

    .product-card:hover .price-section {
      display: none;
    }

    .product-card:hover .add-to-cart {
      display: block;
      /* Show button on hover */
    }
  </style>
  <section class="container my-5">
    <h2 class="text-center mb-4">Products</h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">
      <div class="col">
        <div class="card product-card">
          <img
            src="https://static.vecteezy.com/system/resources/previews/006/795/097/non_2x/sale-banner-or-poster-with-realistic-podium-in-orange-and-blue-color-business-illustration-vector.jpg"
            class="card-img-top" alt="Product Image">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Product Title</h5>
            <div class="price-section">
              <p class="sale-price">$24.99</p>
              <p class="actual-price">$39.99</p>
            </div>
            <div class="add-to-cart">
              <button class="btn btn-dark rounded-3 w-100">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card product-card">
          <img
            src="https://static.vecteezy.com/system/resources/previews/006/795/097/non_2x/sale-banner-or-poster-with-realistic-podium-in-orange-and-blue-color-business-illustration-vector.jpg"
            class="card-img-top" alt="Product Image">
          <div class="card-body d-flex flex-column align-items-center">
            <h5 class="card-title">Product Title</h5>
            <div class="price-section">
              <p class="sale-price">$24.99</p>
              <p class="actual-price">$39.99</p>
            </div>
            <div class="add-to-cart">
              <button class="btn btn-dark rounded-3 w-100">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>








  <style>
    .footer {
      background-color: black;
      padding: 20px 0;
    }

    .footer h5 {
      color: #fff;
      font-weight: bold;
    }

    .footer ul {
      list-style: none;
      padding: 0;
    }

    .footer ul li {
      margin-bottom: 10px;
    }

    .footer ul li a {
      color: whitesmoke;
      text-decoration: none;
    }

    .footer ul li a:hover {
      text-decoration: underline;
    }

    .footer form {
      display: flex;
      align-items: center;
    }

    .footer form input[type="email"] {
      padding: 5px;
      border: 1px solid #ccc;
      background-color: #333;
      color: #fff;
    }

    .footer form button {
      padding: 5px 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    .footer form button:hover {
      background-color: #0069d9;
    }

    .social-icons {
      list-style: none;
      padding: 0;
    }

    .social-icons li {
      display: inline-block;
      margin-right: 10px;
    }

    .social-icons li a {
      color: whitesmoke;
      font-size: 20px;
    }

    .social-icons li a:hover {
      color: greenyellow;
    }

    .footerSubtitleColor {
      color: aliceblue;
      opacity: 0.8;
    }

    @media only screen and (max-width: 600px) {
      .fotterInnerDiv {
        display: flex;
        flex-direction: row;
        width: 95%;
        justify-content: space-between;
        align-items: start;

      }
    }

    @media screen and (min-width: 600px) and (orientation: landscape) {
      .fotterInnerDiv {
        display: flex;
        flex-direction: row;
        width: 48%;
        justify-content: space-between;
        align-items: start;
      }
    }
  </style>
  <footer class="footer">
    <div class="container">
      <div class="d-flex" style="justify-content: space-between; display: flex; flex-wrap: wrap; overflow-wrap: unset;">
        <div class="fotterInnerDiv">
          <div class="col-md-6">
            <h5>Customer Care</h5>
            <ul>
              <li class="footerSubtitleColor"><a href="#">Search</a></li>
              <li class="footerSubtitleColor"><a href="#">Privacy Policy</a></li>
              <li class="footerSubtitleColor"><a href="#">Returns Policy</a></li>
              <li class="footerSubtitleColor"><a href="#">Shipping Policy</a></li>
              <li class="footerSubtitleColor"><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h5>Customer Service</h5>
            <ul>
              <li class="footerSubtitleColor"><a href="tel:0301">Phone: +92 300 5007805</a></li>
              <li class="footerSubtitleColor"><a href="mailto:officialswagtech@gmail.com">Email:
                  officialswagtech@gmail.com</a></li>
            </ul>
            <h5>Follow Us</h5>
            <ul class="social-icons">
              <li class="footerSubtitleColor"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="footerSubtitleColor"><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li class="footerSubtitleColor"><a href="#"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="fotterInnerDiv">
          <div class="col-md-6">
            <h5>Support</h5>
            <ul>
              <li class="footerSubtitleColor"><a href="#">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-6" style="margin-left: -2rem;">
            <!-- <h5> Powered By </h5> -->
            <h7 style="color: grey;"> Powered By </h7>
            <div>
              <B class=" text-light"><a href="tel:0301" style="font-size: 2rem; color: white;">Ebaba</a></B>

            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <script>
    const newsletterForm = document.querySelector('.footer form');

    newsletterForm.addEventListener('submit', (event) => {
      event.preventDefault();

      const emailInput = newsletterForm.querySelector('input[type="email"]');
      const email = emailInput.value;

      // Send the email to your server or perform other actions here
      console.log('Email:', email);

      // Reset the form
      emailInput.value = '';
    });
  </script>




  <!-- Footer -->
  <!-- <footer class="bg-light py-3">
    <div class="container text-center">
      <p>&copy; 2024 Swag Tech. All rights reserved.</p>
    </div>
  </footer> -->

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // textSlider start
    $(document).ready(function () {
      let currentIndex = 0;
      const items = $('.textSlider-content');
      const totalItems = items.length;

      function showSlide(index) {
        items.removeClass('active').css('opacity', 0); // Hide all slides
        items.eq(index).addClass('active').css('opacity', 1); // Show the current slide
      }

      function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems; // Loop back to the first slide
        showSlide(currentIndex);
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems; // Loop back to the last slide
        showSlide(currentIndex);
      }
      setInterval(nextSlide, 700);
      $('#next').click(nextSlide);
      $('#prev').click(prevSlide);
    });
    //  textSlider end 
  </script>
  <script>
    // imgSlides start
    $(document).ready(function () {
      let currentIndex = 0;
      const items = $('.imgSlides-content');
      const totalItems = items.length;

      function showSlide(index) {
        items.removeClass('active').css('opacity', 0); // Hide all slides
        items.eq(index).addClass('active').css('opacity', 1); // Show the current slide
      }

      function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems; // Loop back to the first slide
        showSlide(currentIndex);
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems; // Loop back to the last slide
        showSlide(currentIndex);
      }
      setInterval(nextSlide, 2000);
      $('#nextImg').click(nextSlide);
      $('#prevImg').click(prevSlide);
    });
    //  imgSlides end 
  </script>
  <script>
    // bannerSlides start
    $(document).ready(function () {
      let currentIndex = 0;
      const items = $('.bannerSlides-content');
      const totalItems = items.length;

      function showSlide(index) {
        items.removeClass('active').css('opacity', 0); // Hide all slides
        items.eq(index).addClass('active').css('opacity', 1); // Show the current slide
      }

      function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems; // Loop back to the first slide
        showSlide(currentIndex);
      }

      function prevSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems; // Loop back to the last slide
        showSlide(currentIndex);
      }
      setInterval(nextSlide, 20000);
      $('#nextBanner').click(nextSlide);
      $('#prevBanner').click(prevSlide);
    });
    //  bannerSlides end 
  </script>



</body>

</html>