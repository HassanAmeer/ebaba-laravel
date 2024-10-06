<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> E Baba Store </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel=icon href="{{ asset($baseUrl.'/uploads/'.$settingsData['webisteMiniLogo']) }}"
 sizes="32x32" type="image/png">

  <!-- used in navbar for icons only -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<!--  asset('assets/backtotop.png')  -->




<body>
<style>
.red-serif {
  font-family: "Times New Roman", Times, serif; 
            color: black; 
            text-shadow: 1px 1px 0 red, 
                         -1px -1px 0 red,
                         -1px 1px 0 red,
                         1px -1px 0 red; 
}

.colored-character {
            font-family: "Times New Roman", Times, serif;
            background: linear-gradient(to top, indigo 40%, black 50%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; 
        }
.shimmer {
            color: #333;
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .shimmer:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
            animation: shimmer 2s infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
                scale:0.5;
            }
            100% {
                left: 100%;
            }
        }
        /* animation 2 */
        .shimmerVibrate {
            color: #333;
            position: relative;
            overflow: hidden;
            display: inline-block;
            animation: vibrate 0.5s infinite; /* Vibrate effect */
        }

        .shimmerVibrate:before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 100%);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% {
                left: -100%;
            }
            100% {
                left: 100%;
            }
        }

        @keyframes vibrate {
            0% { transform: translate(0); }
            20% { transform: translate(-1px, 1px); }
            40% { transform: translate(-1px, -2px); }
            60% { transform: translate(2px, 0); }
            80% { transform: translate(1px, 2px); }
            100% { transform: translate(0); }
        }
        /* sacel animation */
        .scaleAnimation {
            animation: scaleUpDown 2s infinite; /* Apply animation */
        }

        @keyframes scaleUpDown {
            0%, 100% {
                transform: scale(0.97); /* Normal size */
            }
            50% {
                transform: scale(1); /* Scaled up */
            }
        }
</style>
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

    @media (max-width: 600px) {
      .textSliderPreBtn {
        padding: 1rem;
      }

      .textSliderNextBtn {
        padding: 1rem;
      }
    }

    @media (min-width: 601px) {
      .textSliderPreBtn {
        padding: 3rem;
      }

      .textSliderNextBtn {
        padding: 3rem;
      }
    }
  </style>
  <div class="textSlider" data-aos="fade-down" data-aos-duration="1500">
    @foreach($topSlideTextList as $key)
    @if( $key['showInSlider'] ==1)
    <div class="textSlider-content active" data-duration="{{ $key['duration'] }}">{{$key['showMessage']}}</div>
    @endif
    @endforeach
    <div class="navigation">
      <div id="prev" class="fas fa-chevron-left text-muted textSliderPreBtn" style="scale: 1.5;"></div>
      <div id="next" class="fas fa-chevron-right text-muted textSliderNextBtn" style="scale: 1.5;"></div>
    </div>
  </div>











  <style>
    /* ===== Google Font Import - Poppins ===== */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');

    * {
      /* font-family: 'Poppins', sans-serif; */
      transition: all 0.4s ease;
    }


    /* ===== Colours ===== */
    :root {
      --body-color: F4F7F9;
      /* --body-color: #E4E9F7; */
      --nav-color: white;
      /* --search-border: rgb(194, 215, 194); */
      --search-border: black;
      --search-text: black;
      --search-bg: black;
      --side-nav: black;
      --text-color: black;
      --search-bar: black;
      --search-text: white;
    }

    /* body {
      height: 100vh;
      background-color: var(--body-color);
    } */

    /* body.dark {
      --body-color: #18191A;
      --nav-color: #242526;
      --side-nav: #242526;
      --text-color: #CCC;
      --search-bar: #242526;
    } */

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
      align-items: start;
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
      background-color: var(--search-border);
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
      background-color: var(--search-border);
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
        height: 100;
        width: 200px;
        left: -100%;
        top: 0;
        background-color: var(--side-nav);
        z-index: 999;
        transition: all 0.4s ease;
      }

      nav.active .menu {
        left: 0%;
      }

      nav.active .nav-bar .navLogo a {
        opacity: 0;
        transition: all 0.3s ease;
      }

      .menu .logo-toggle {
        display: block;
        width: 100%;
        display: flex;
        align-items: start;
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
        color:white;
      }
    }
  </style>


  <nav data-aos="fade-down" data-aos-duration="1500">
    <div class="nav-bar">
      <i class='bx bx-menu sidebarOpen'></i>
      <span class="logo navLogo"><a href="{{$baseUrl}}"> <img width="40rem"
            src="{{ asset($baseUrl.'/uploads/'.$settingsData['websiteLogo']) }}" alt="" srcset=""> {{$settingsData['websiteName']}}</a></span>

      <div class="menu">
        <div class="logo-toggle">
          <span class="logo"><a href="{{$baseUrl}}">CodingLab</a></span>
          <i class='bx bx-x siderbarClose'></i>
        </div>

        <ul class="nav-links">
          <li><a href="{{$baseUrl}}">Home</a></li>
          <li><a href="{{ route('getAllProductsF') }}">All Products</a></li>
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
      // modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");

    // let getMode = localStorage.getItem("mode");
    // if (getMode && getMode === "dark-mode") {
    //   body.classList.add("dark");
    // }

    // // js code to toggle dark and light mode
    // modeToggle.addEventListener("click", () => {
    //   modeToggle.classList.toggle("active");
    //   body.classList.toggle("dark");

    //   // js code to keep user selected mode even page refresh or file reopen
    //   if (!body.classList.contains("dark")) {
    //     localStorage.setItem("mode", "light-mode");
    //   } else {
    //     localStorage.setItem("mode", "dark-mode");
    //   }
    // });

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



<div style="padding:5%; display:flex; flex-direction:column; jsutify-content:center; align-items:center;">
  <div>
  {!! $PagesDesign['contactUs'] !!}
  </div>
</div>












 



































  


 


  <!-- start cart -->

  <style>
    @media only screen and (max-width: 600px) {
      .custom-sidebar {
        width: 370px;
        right: -370px;
      }
    }

    @media screen and (min-width: 600px) and (orientation: landscape) {
      .custom-sidebar {
        width: 500px;
        right: -500px;
      }
    }

    .custom-sidebar {
      max-width: 100%;
      background-color: #f8f9fa;
      position: fixed;
      top: 0;
      height: 100%;
      transition: right 0.3s ease-in-out;
      z-index: 980;
    }

    .custom-sidebar.show {
      right: 0;
    }

    .custom-sidebar-header {
      display: flex;
      justify-content: space-between;
      padding: 1rem;
      border-bottom: 1px solid #dee2e6;
    }

    .custom-sidebar-body {
      padding: 1rem;
    }
  </style>


  <style>
    /* .custom-sidebar-body {
      background-color: white;
      max-height: 400px;
      overflow-y: auto;
      border-radius: 10px;
    } */
    .custom-sidebar-body {
      background-color: white;
      overflow-y: auto;
      max-height: calc(100% - 100px);
      /* Adjust for header and button */
    }

    .cart-item {
      padding: 10px 0;
    }

    .cart-items hr {
      border-color: #ccc;
    }

    .cart-items .quantity-decrease,
    .cart-items .quantity-increase {
      border: 1px solid #ddd;
      padding: 3px 8px;
    }

    .btn-close {
      font-size: 18px;
      border: none;
      background: transparent;
      cursor: pointer;
    }

    #order-now {
      position: absolute;
      bottom: 0;
      left: 0;
      width: 100%;
      padding: 15px;
      background-color: black;
      color: white;
      text-align: center;
    }
  </style>

  <div class="custom-sidebar" id="customSidebar">
    <div class="custom-sidebar-header">
      <h5>My Items</h5>
      <button id="closeSidebar" class="btn btn-close fa fa-close"></button>
    </div>

    <div class="custom-sidebar-body" id="cartItemsAreaInAlert">
      <div  class="cart-items p-3" style="min-height: 200px;">
        <!-- Cart items will be appended here -->
      </div>
      <button id="order-now" class="btn btn-dark w-100 mt-3">Order Now</button>
    </div>

    <div class="custom-sidebar-body d-none" id="checkout-form">
      <div class="backToCart" style="display: flex; flex-direction: row; justify-content: space-between;">
        <i class="fa fa-chevron-left" style="color: black; font-size: x-large;"></i>
        <b> Back </b>
      </div>
      <br>
      <h5>Checkout</h5>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" required>
      </div>
      <div class="mb-3">
        <label for="phone" class="form-label">Phone Number</label>
        <input type="text" class="form-control" id="phone" required>
      </div>
      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <textarea class="form-control" id="address" rows="3" required></textarea>
      </div>
      <button id="order-submit-now" class="btn btn-dark w-100 mt-3">Submit</button>
      <hr>
      <h5> My Products </h5>
    <!-- <div id="cartItemsOnFill" class="p-3"> </div> -->
    <div  class="cart-items p-3" style="min-height: 200px;">
        <!-- Cart items will be appended here -->
      </div>
    </div>
  
    <div class="custom-sidebar-body d-none" id="submission-confirmation">
      <h5>Order Submitted</h5>
      <p id="submitted-data"></p>
      <p style="color: green; opacity: 0.5;"> you can check your order status from orders panel or contact with us </p>
      <button class="backToCart btn btn-dark w-100 mt-3">Back to Cart</button>
    </div>
  </div>













  <style>
    .customGreenToast {
      position: fixed;
      left: 50%;
      bottom: 5%;
      transform: translateX(-50%);
      z-index: 910;
    }

    @media only screen and (max-width: 600px) {
      .toast-body {
        min-width: 14rem;
      }
    }

    @media screen and (min-width: 600px) and (orientation: landscape) {
      .toast-body {
        min-width: 20rem;
      }
    }
  </style>

  <div class="customGreenToast d-block shimmer" style="background-color: rgb(0, 67, 0); opacity: 0.8; border-radius: 30px;">
    <div
      style="display: flex; flex-direction: row; justify-content: space-between; align-items: center; padding-inline: 1rem;">
      <i class="spinner-grow text-light"></i>
      <div class="toast-body" style="background-color: rgb(0, 79, 0); color: white; border-radius: 100px;">
        My Order Status
      </div>
      <i class="fa fa-close text-light hideGreenToast" style="cursor: pointer; font-size: xx-large; padding:5px"></i>
    </div>
  </div>

















  <style>
    /* Sticky positioning for the button */
    .sticky-whatsapp-button {
      position: fixed;
      bottom: 10%;
      left: 1%;
      z-index: 800;
      width: 4.5rem;
      height: 4.5rem;
    }

    /* Button design and hover effects */
    .whatsapp-button {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Image styling */
    .whatsapp-button img {
      width: 5rem;
      height: 5rem;
      padding: 0rem;
      margin-top: 0rem;
    }

    /* Hover scale up effect */
    .whatsapp-button:hover img {
      transform: scale(1.2);
    }

    /* Animation for scaling up and down */
    @keyframes scale-animation {
      0% {
        transform: scale(0.9);
      }

      50% {
        transform: scale(0.7);
      }

      100% {
        transform: scale(1.2);
      }
    }

    /* Apply the scaling animation */
    .whatsapp-button {
      animation: scale-animation 2s infinite;
    }
  </style>
  @if($settingsData['showWhatsapp'] == 1)
  <div class="sticky-whatsapp-button" data-aos="fade-up" data-aos-duration="1500">
    <a href="https://wa.me/{{url($settingsData['whatsappNumber'])}}
    " target="_blank">
      <div class="whatsapp-button">
        <center>
          <img src="{{ asset('assets/wa.png') }}" alt="WhatsApp" />
        </center>
      </div>
    </a>
  </div>
@endif
  <style>
    /* Sticky positioning for the shopping cart button */
    .sticky-cart-button {
      position: fixed;
      bottom: 20%;
      left: 1%;
      z-index: 850;
      width: 4.5rem;
      height: 4.5rem;
    }

    /* Cart button design and hover effects */
    .cart-button {
      width: 100%;
      height: 100%;
      border-radius: 50%;
      box-shadow: 1px 1px 7px grey;
      background-color: white;
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    /* Image styling for the cart icon */
    .cart-button img {
      width: 3.5rem;
      height: 3rem;
      padding: 0.2rem;
      margin-top: 1rem;
    }

    /* Hover scale up effect for the cart */
    .cart-button:hover {
      transform: scale(1.2);
      box-shadow: 3px 3px 15px rgba(128, 128, 128, 0.7);
    }

    /* Animation for scaling up and down */
    @keyframes scale-animation {
      0% {
        transform: scale(1.2);
      }

      50% {
        transform: scale(1.1);
      }

      100% {
        transform: scale(1);
      }
    }

    /* Apply the scaling animation to the cart button */
    .cart-button {
      animation: scale-animation 2.2s infinite;
    }
  </style>
  <div class="sticky-cart-button toggleSidebarBtns" data-aos="fade-up" data-aos-duration="1500">
    <a>
      <div class="cart-button">
        <center>
          <img src="{{ asset('assets/cart.png') }}" alt="Shopping Cart" class="position-relative" />
          <span class="position-absolute translate-start badge bg-success text-light" id="itemInListIs"
            style="transform: translateX(-50%);"> 0
          </span>
        </center>
      </div>
    </a>
  </div>

  <style>
    /* Sticky positioning for the shopping cart button */
    .sticky-top-scroll-btn {
      position: sticky;
      bottom: 7%;
      right: 4%;
      z-index: 880;
      width: 2.5rem;
      height: 2.5rem;
    }
  </style>
  <div style="position: fixed;right: 4%; z-index: 890; bottom: 7%;">
    <div class="sticky-top-scroll-btn" data-aos="fade-up" data-aos-duration="2000">
      <a href="#">
        <img src="{{ asset('assets/backtotop.png') }}" alt="Shopping Cart" class="position-relative"
          style="width: 3rem; height: 3rem; opacity: 0.3; box-shadow: 1px 1px 5px grey; border-radius: 10rem; background-color: white;" />
      </a>
    </div>
  </div>



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
      scale:1.2;
    }

    .footer form {
      display: flex;
      align-items: center;
    }

    .footer form button {
      padding: 2px 5px;
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
      scale:1.2;
    }

    .footerSubtitleColor {
      color: aliceblue;
      opacity: 0.8;
    }

    @media only screen and (max-width: 600px) {
      .footerInnerDiv {
        display: flex;
        flex-direction: row;
        width: 95%;
        justify-content: space-between;
        align-items: start;

      }
    }

    @media screen and (min-width: 600px) and (orientation: landscape) {
      .footerInnerDiv {
        display: flex;
        flex-direction: row;
        width: 45%;
        justify-content: space-between;
        align-items: start;
      }
    }
  </style>
  <footer class="footer" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
      <div class="d-flex" style="justify-content: space-between; display: flex; flex-wrap: wrap; overflow-wrap: unset;">
        <div class="footerInnerDiv">
          <div class="col-md-6">
            <h5>Customer Care</h5>
            <ul>

              <li class="footerSubtitleColor"><a href="#">Search</a></li>
              @if($settingsData['showPrivacyPolicy'] == 1)
              <li class="footerSubtitleColor"><a href="{{ route('privacyPolicy') }}">Privacy Policy</a></li>
              @endif
              @if($settingsData['showShippingPolicy'] == 1)
              <li class="footerSubtitleColor"><a href="{{ route('shippingPolicy') }}">Shipping Policy</a></li>
              @endif
              @if($settingsData['showReturnRefundPolicy'] == 1)
              <li class="footerSubtitleColor"><a href="{{ route('returnPolicy') }}">Return Refund Policy</a></li>
              @endif
              @if($settingsData['showTermsCondition'] == 1)
              <li class="footerSubtitleColor"><a href="{{ route('termsCondition') }}">Terms of Service</a></li>
              @endif

            </ul>
          </div>
          <div class="col-md-6">
            <h5>Customer Service</h5>
            <ul>
              <li class="footerSubtitleColor"><a href="tel:{{$settingsData['phone']}}">Phone: {{$settingsData['phone']}}</a></li>
              <li class="footerSubtitleColor"><a href="mailto:{{$settingsData['email']}}" style="font-size: small;"> {{$settingsData['email']}}</a></li>
            </ul>
            <h5>Follow Us</h5>
            <ul class="social-icons">
              <li class="footerSubtitleColor"><a href="{{$settingsData['facebookLink']}}"><i class="fab fa-facebook-f"></i></a></li>
              <!-- <li class="footerSubtitleColor"><a href="#"><i class="fab fa-instagram"></i></a></li> -->
              <li class="footerSubtitleColor"><a href="https://wa.me/{{$settingsData['whatsappNumber']}}"><i class="fab fa-whatsapp"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="footerInnerDiv">
          <div class="col-md-6">
            <h5>Support</h5>
            <ul>
              <li class="footerSubtitleColor"><a href="{{ route('contactUs') }}">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-md-6" style="margin-left: 5%;">
            <!-- <h5> Powered By </h5> -->
            <h7 style="color: grey;"> Powered By </h7>
            <div>
              <B class=" text-light"><a href="/" style="font-size: 2rem; color: white;">{{$settingsData['websiteName']}}</a></B>

            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>


  <style>
    @media only screen and (max-width: 600px) {
      #sticyItemInner {
        width: 100%;
      }
    }

    @media screen and (min-width: 600px) and (orientation: landscape) {
      #sticyItemInner {
        width: 50%;
      }
    }

    #sticyItemInner {
      display: flex;
      flex-direction: row;
      justify-content: space-between;

      align-items: center;

    }

    .stickyItem {
      width: 100%;
      background-color: #242526;
      position: sticky;
      bottom: 0;
      z-index: 8;
    }
  .footeraddtocartbtn{
    color:white;
  }
  .footeraddtocartbtn:hover{
    color:black;
  }
  </style>

@if($settingsData['showItemInFooter'] == 1 || $settingsData['showOfferInFooter']  == 1)
  <div class="stickyItem" data-aos="zoom-out-up" data-aos-duration="1000">
    <center>
      <div id="sticyItemInner">
      @if($settingsData['showItemInFooter'] == 1)
      @if(!empty($productsList) && count($productsList) > 0 && isset($productsList[$settingsData['selectedItemIdForFooter'] - 1]))
             @php
             $filterdIdIs = $settingsData['selectedItemIdForFooter'];
             $filterItem = $productsList[$filterdIdIs-1];
             @endphp
            <div>
              <img src="{{asset($baseUrl.'/uploads/'.$filterItem['image']) }}" style="width: 4.5rem; height: 4rem;" alt="">
              <b class="text-light"> {{$filterItem['title']}}</b>
            </div>
            

            <div style="display: flex; flex-direction: row; justify-content: flex-start;">
              @if(!empty($filterItem->colorsVariationsF) && count($filterItem->colorsVariationsF) > 0 && $filterItem['showColorVariations'] == 1)
                  @foreach($filterItem->colorsVariationsF as $variation)
                      <div style="padding: 5px;">
                          <div class="productVariationsBoxBtn"
                              data-productid="{{ $filterItem['id'] }}"
                              data-productcolorcode="{{ $variation->productColorCode }}"
                              data-productimage="{{ asset($baseUrl.'/uploads/'.$variation->productImage) }}"
                              data-productprice="{{ $variation->productPrice }}"
                              style="border-radius: 10px; border: 1px solid silver; background-color: {{ $variation->productColorCode }};
                                    width: 2rem; height: 2rem; padding-right: 8px;">
                          </div>
                      </div>
                  @endforeach
              @endif
              @if(!empty($filterItem->sizeVariationsF) && count($filterItem->sizeVariationsF) > 0 && $filterItem['showSizeVariations'] == 1)
                  @foreach($filterItem->sizeVariationsF as $variation)
                      <div style="padding: 5px;">
                          <button class="productVariationsBoxBtn btn btn-sm btn-outline-secondary rounded-8"
                              data-productid="{{ $filterItem['id'] }}"
                              data-productsize="{{ $variation->productSize }}"
                              data-productprice="{{ $variation->productPrice }}"> {{ $variation->productSize }}
                          </button>
                      </div>
                  @endforeach
                  @endif
              </div>

            <div class="mb-0" style="display: flex; flex-direction: row; justify-content: start;align-items: center; center;
                 padding-left: 0.2rem;">
                <button class="btn btn-sm btn-dark quantityDecFromDetail" data-pid="{{$filterItem['id']}}" data-img="{{asset($baseUrl.'/uploads/'.$filterItem['image']) }}"
                data-title="{{$filterItem['title']}}" data-price="{{$filterItem['price']}}" data-freeitem="{{ $filterItem['isfreeAnyItemWithThis'] == 1 ? $filterItem['freeItem'] : ''}}">-</button>
                <b style="padding-left:1rem; padding-right:1rem; color:white;" class="globalItemQuantityIs"> 1 </b>
                <button class="btn btn-sm btn-dark quantityIncFromDetail" data-pid="{{$filterItem['id']}}" data-img="{{asset($baseUrl.'/uploads/'.$filterItem['image']) }}"
                data-title="{{$filterItem['title']}}" data-price="{{$filterItem['price']}}" data-freeitem="{{ $filterItem['isfreeAnyItemWithThis'] == 1 ? $filterItem['freeItem'] : ''}}">+</button>
                <button class="btn btn-outline-light addToCart toggleSidebarBtns shimmer footeraddtocartbtn" style="margin-left: 1rem; width: 100%; font-size: 0.6rem;" data-pid="{{$filterItem['id']}}" data-img="{{asset($baseUrl.'/uploads/'.$filterItem['image']) }}" data-title="{{$filterItem['title']}}" data-price="{{$filterItem['price']}}" data-freeitem="{{ $filterItem['isfreeAnyItemWithThis'] == 1 ? $filterItem['freeItem'] : ''}}"> Add </button>
            </div>
            @endif
        @elseif($settingsData['showOfferInFooter'] == 1)
           <div>{!! $settingsData['designOfferInFooter'] !!}</div>
        @endif
      </div>
    </center>
  </div>
@endif







  <!-- <div>
<marquee>
<blockquote>
<h2 style="font-style:italic;color:white;">&OElig; Baba buy now get <strong>1 free</strong></h2>
</blockquote>
<p>&nbsp;</p>
</marquee>
</div> -->


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
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script>
    function delay(ms) {
      return new Promise(resolve => setTimeout(resolve, ms));
    }
  </script>
  <script>
    AOS.init();
  </script>
  <script>
    // textSlider start
    $(document).ready(function () {
    let durationIsForTextSlide = 1000; 
    let currentIndex = 0;
    const items = $('.textSlider-content');
    const totalItems = items.length;
    let slideInterval;

    function showSlide(index) {
        items.removeClass('active').css('opacity', 0);
        items.eq(index).addClass('active').css('opacity', 1);
        
        durationIsForTextSlide = parseInt(items.eq(index).data('duration').toString(), 10);
        clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, durationIsForTextSlide);
    }

    function nextSlide() {
        currentIndex = (currentIndex + 1) % totalItems; 
        showSlide(currentIndex);
    }

    function prevSlide() {
        currentIndex = (currentIndex - 1 + totalItems) % totalItems; 
        showSlide(currentIndex);
    }

    slideInterval = setInterval(nextSlide, durationIsForTextSlide);
    
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
    let durationIsForTextSlide2 = 1000;
    let slideInterval2;
    let currentIndex = 0;
    const items = $('.bannerSlides-content');
    const totalItems = items.length;

    function showSlide(index) {
      items.removeClass('active').css('opacity', 0); 
      items.eq(index).addClass('active').css('opacity', 1);

      durationIsForTextSlide2 = parseInt(items.eq(index).data('duration').toString(), 10);
      clearInterval(slideInterval2); 
      slideInterval2 = setInterval(nextSlide, durationIsForTextSlide2);
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalItems;
      showSlide(currentIndex);
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalItems) % totalItems; 
      showSlide(currentIndex);
    }
    showSlide(currentIndex);
    $('.nextBanner').click(nextSlide);
    $('.prevBanner').click(prevSlide);
  });
  // bannerSlides end 
</script>


  <script>
    $(document).ready(function () {
      // Toggle sidebar visibility
      $('.toggleSidebarBtns').on('click', function () {
        $('#customSidebar').toggleClass('show');
      });

      // Close sidebar when close button is clicked
      $('#closeSidebar').on('click', function () {
        $('#customSidebar').removeClass('show');
      });

      // Hide sidebar when clicking outside, but exclude specific buttons
      $(document).on('click', function (e) {
        // Check if the click is outside the sidebar and not on specific elements
        if (!$(e.target).closest('#customSidebar, .toggleSidebarBtns, .quantity-increase, .quantity-decrease, .remove-item').length) {
          $('#customSidebar').removeClass('show');
        }
      });

    });
  </script>





  <script>
    $(document).ready(function () {
      try {
      let productid = "";
      let productcolorcode = "";
      let productsize = "";
      let productimage = "";
      let productprice = "";
      let variationsforcart = "";
 
      let cart = [];
      globalItemQuantityIs = 1;

      // Calculate total price
      function calculateTotal() {
        let total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        $('#order-now').text(`Order Now - ${total} Rs`);
        $('#itemInListIs').html(`${cart.length}`);
      }

      // Render cart
      function renderCart() {
        $('.cart-items').empty();
        if (cart.length === 0) {
          $('.cart-items').html('<p>Your cart is empty.</p>');
        } else {
          cart.forEach((item, index) => {
            $('.cart-items').append(`
            <div class="cart-item" data-index="${index}">

              <div style="display:flex; flex-direction:row; justify-content:space-between; align-items:end;">
                <h6 class="">${item.title}</h6>
                
                 <div style="display: flex; flex-direction: row; justify-content: flex-start;align-items:center;">
                       ${item.productcolorcode == "" || typeof item.productcolorcode == "undefined" ? '' :`
                      <div style="padding-right: 5px;">
                        <div style="border-radius: 5px; border: 1px solid silver; background-color: ${item.productcolorcode};
                                    width: 1.5rem; height: 1.5rem; padding-right: 8px;"> 
                        </div>
                      </div>`}

                    ${item.productsize == "" || typeof item.productsize == "undefined" ? '' : `
                      <div style="padding-left: 5px;">
                        <button class="btn btn-sm sizeBtn" style="scale:0.7;">${item.productsize}</button>
                      </div>`}
                </div>

                <img src="${item.img}" width="40" height="40" style="scale:1.3;transform:translateY(-7px); margin-top:0;" class="img-fluid">
                </div>
                <div style="display:flex; flex-direction:row; justify-content:space-between; padding-top:5px;">
                  <div class="mb-0">
                    <button class="btn btn-sm btn-light quantity-decrease">-</button>
                    <b style="padding-left:1rem; padding-right:1rem;">${item.quantity}</b>
                    <button class="btn btn-sm btn-light quantity-increase">+</button>
                    </div>
                    <p class="mb-0">${item.price} Rs</p>
                    <i class="remove-item fa-solid fa-trash" style="color:green; opacity:0.5; padding-right:1rem; font-size: x-large;"></i>
                    </div>
                      
                     ${item.freeitemhtml == "" || typeof item.freeitemhtml == "undefined" ? '' :`
                        <details style="padding-top:5px; color:silver;"> 
                        <summary>Free Item With This</summary>
                        ${item.freeitemhtml} 
                        </details>`}
                    <hr/>
                    </div>
                    `);
          });
        }
        calculateTotal(); // Update total price
      }

      $('.quantityIncFromDetail').on('click', function () {
        let item = {
          pid: $(this).data('pid'),
          img: $(this).data('img'),
          title: $(this).data('title'),
          price: $(this).data('price'),
          freeitemhtml: $(this).data('freeitem').toString(),
          quantity: 1,
        };
            if ($(this).data('pid').toString() == productid) {
              item.productcolorcode = productcolorcode;
              item.productsize = productsize;
            }

        let existingItem = cart.find(i => i.pid === item.pid);
        if (cart.length < 1) {
          cart.push(item);
        } else if (existingItem) {
          existingItem.quantity++;
          globalItemQuantityIs++;
          
          if (existingItem.pid.toString() == productid) {
              existingItem.productcolorcode = productcolorcode;
              existingItem.productsize = productsize;
              existingItem.price = productprice;
            }

          $('.globalItemQuantityIs').html(`${globalItemQuantityIs}`);
        } else {
          cart.push(item);
        }
        renderCart();
      });
      $('.quantityDecFromDetail').on('click', function () {
        let existingItem = cart.find(i => i.pid === $(this).data('pid'));
        if (existingItem) {
          if (existingItem.quantity >= 2 && globalItemQuantityIs >= 2) {
            globalItemQuantityIs--; existingItem.quantity--;
            $('.globalItemQuantityIs').html(`${globalItemQuantityIs}`);
            renderCart();
          } else {
            existingItem.quantity = 1;
            globalItemQuantityIs = 1;
            $('.globalItemQuantityIs').html(`${globalItemQuantityIs}`);

          }
        }
      });

      // Add item to cart
      $('.addToCart').on('click', function () {
        let item = {
          pid: $(this).data('pid'),
          img: $(this).data('img'),
          title: $(this).data('title'),
          price: $(this).data('price'),
          freeitemhtml: $(this).data('freeitem').toString(),
          quantity: 1,
        };
        
        if(item.productid == "" || typeof item.productid == "undefined"){
          if ($(this).data('pid').toString() == productid) {
          item.productcolorcode = productcolorcode;
          item.productsize = productsize;
          }else{
            item.productcolorcode = "";
            item.productsize = "";
          }
        }


        let existingItem = cart.find(i => i.pid === item.pid);
        if (existingItem) {
          // $('#customSidebar').addClass('show');
          // existingItem.quantity++;
        } else {
          cart.push(item);
        }
        showGreenToast("Item Added To The Cart", 2000);
        stopGreenToastMsgs = true;
        renderCart();
      });


      // Remove item
      $(document).on('click', '.remove-item', function () {
        let index = $(this).closest('.cart-item').data('index');
        cart.splice(index, 1);
        renderCart();
      });

      // Increase quantity
      $(document).on('click', '.quantity-increase', function () {
        let index = $(this).closest('.cart-item').data('index');
        cart[index].quantity++;
        renderCart();
      });

      // Decrease quantity
      $(document).on('click', '.quantity-decrease', function () {
        let index = $(this).closest('.cart-item').data('index');
        if (cart[index].quantity > 1) {
          cart[index].quantity--;
          renderCart();
        }
      });
      $('#order-now').on('click', function () {
        if (cart.length === 0) {
          stopGreenToastMsgs = true;
          showGreenToast("Please select some items.", 3000);
        } else {
          // Hide cart items and show checkout form
          $('#cartItemsAreaInAlert').addClass('d-none');
          $('#checkout-form').removeClass('d-none');
        }
      });

      // Back to Cart button
      $('.backToCart').on('click', function () {
        $('#submission-confirmation').addClass('d-none');
        $('#cartItemsAreaInAlert').removeClass('d-none');
        $('#checkout-form').addClass('d-none');
      });

      // Submit Order
      $('#order-submit-now').on('click', function () {
        let name = $('#name').val();
        let phone = $('#phone').val();
        let address = $('#address').val();

        if(cart.length < 1){
        showGreenToast("Please select item", 2000);
        stopGreenToastMsgs = true;
          // alert('Please add to cart any one item.');
        } else  if (!name || !phone || !address) {
          // alert('Please fill your information.');
        showGreenToast("Please fill your information.", 2000);
        stopGreenToastMsgs = true;
        } else {
                $('#submitted-data').html(`Name: ${name} <br> Phone: ${phone} <br> Address: ${address}`);
                $('#checkout-form').addClass('d-none');
                $('#submission-confirmation').removeClass('d-none');

// alert("cart list is:"+ cart);
// console.log("cart list is:"+ cart);

            $.post({
                type: "POST",
                url: "{{ route('submit.order') }}",
                data: { 
                  _token: '{{ csrf_token() }}', 
                  cart: cart,
                  name: name,
                  phone: phone,
                  address: address
                },
                    success: function(resp, st,st2) {
                      // alert(resp);
                      // alert(st);
                      // alert(st2);
                      // alert(resp.responseText);
                      stopGreenToastMsgs = true;
                      showGreenToast("Order Submitted", 5000);
                        // Clear cart
                        cart = [];
                        renderCart();
                    },
                    error: function(resp, st,st2) {
                      // alert(resp);
                      // alert(st);
                      // alert(st2);
                      // alert(resp.responseText);
                      stopGreenToastMsgs = true;
                      console.log(resp.responseText);
                      showGreenToast("An error occurred. Please try again.", 5000);
                    }
              });
            // its for simple php 
            // $.post(
            //     ".php", {vidlstdivjs:viddiv},
            //     function(viddivf){
            //       showGreenToast("Please select item", 5000);
            //       }); // end post

        }
      });

      $('.buyNowBtn').on('click', function () {
        $('#cartItemsAreaInAlert').addClass('d-none');
        $('#checkout-form').removeClass('d-none');
        let item = {
          pid: $(this).data('pid'),
          img: $(this).data('img'),
          title: $(this).data('title'),
          price: $(this).data('price'),
          freeitemhtml: $(this).data('freeitem').toString(),
          quantity: 1,
        };
          if ($(this).data('pid').toString() == productid) {
          item.productcolorcode = productcolorcode;
          item.productsize = productsize;
          }else{
            item.productcolorcode = "";
            item.productsize = "";
          }

        let existingItem = cart.find(i => i.pid.toString() == pid);
        if (!existingItem) {
          cart.push(item);
          renderCart();
        }
      });

      // Initialize cart
      renderCart();

   ////////////// for variations start
   $('.productVariationsBoxBtn').on('click', function () {
         productid = $(this).data('productid');
          if ($(this).data('productcolorcode') !== undefined) {
              productcolorcode = $(this).data('productcolorcode');
          }
          if ($(this).data('productsize') !== undefined) {
              productsize = $(this).data('productsize');
          }
         productimage = $(this).data('productimage');
         productprice = $(this).data('productprice').toString() || "old price";

        // for show changes
        $('#thumbnailImg').attr('src', productimage);
        $('#designPriceSection').append(`
            <div class="scaleAnimation shimmerVibrate" style="width: 7rem; height: 7rem; background-image: url('http://127.0.0.1:8000/assets/bgsale.png'); background-size: cover; background-position: center; border-radius: 10rem; overflow: hidden; position: absolute; top:0;right:0; display: flex; flex-direction: column; justify-content: center;">
            <br>
            <h5 style="text-align: center;">
            <div style="color:silver; scale:0.8;"> Rs </div>
            <p style="font-weight: bold;color:white;">${productprice} </p> 
            </h5>
            </div>`);

              if (cart.length > 0) {
                cart.forEach(item => {
                  if (item.pid.toString() == productid) {
                    item.productcolorcode = productcolorcode;
                    item.productsize = productsize;
                    item.price = productprice;
                    renderCart();
                  }
                });
              }
      });
    ////////////// for variations end
    } catch (e) {
      alert(e);
    }

    });
  </script>
  <script>
    $(document).ready(function() {
    var randomNumber = Math.floor(Math.random() * 30) + 5; 
    $('#viewersCount').text(randomNumber);
    });
  </script>
  <script>
    $(document).ready(function() {
  function formatDate(date) {
    var options = { weekday: 'long', day: '2-digit', month: 'long' };
    return date.toLocaleDateString('en-GB', options); 
  }
    var today = new Date();

    var deliveryStartDate = new Date(today);
    deliveryStartDate.setDate(today.getDate() + 3);

    var deliveryEndDate = new Date(today);
    deliveryEndDate.setDate(today.getDate() + 7); 
    var startFormatted = formatDate(deliveryStartDate);
    var endFormatted = formatDate(deliveryEndDate);
    $('#deliveryEstimate').html(`Estimated delivery between <b style="color:black;">${startFormatted}</b> to <b style="color:black">${endFormatted}</b>.`);
    });
  </script>
  <script>
    $(document).ready(function () {
      // Handle image selection to update the main product image
      $('.itemImg').on('click', function () {
        let newSrc = $(this).attr('src');
        $('#thumbnailImg').attr('src', newSrc);
      });

      // Scroll to next images in the carousel
      $('.nextItemImgBtn').on('click', function () {
        let container = $('.itemImages');
        let scrollAmount = container[0].scrollLeft + 150; // Scroll right by 150px
        container.animate({ scrollLeft: scrollAmount }, 500);
      });

      // Scroll to previous images in the carousel
      $('.preItemImgBtn').on('click', function () {
        let container = $('.itemImages');
        let scrollAmount = container[0].scrollLeft - 150; // Scroll left by 150px
        container.animate({ scrollLeft: scrollAmount }, 500);
      });
    });
  </script>
  <script>
    function showGreenToast(message, duration) {
      $('.customGreenToast .toast-body').text(message);
      $('.customGreenToast').removeClass('d-none').addClass('d-block');
      setTimeout(function () {
        $('.customGreenToast').removeClass('d-block').addClass('d-none');
      }, duration);
    }
    $(document).ready(function () {
      $('.hideGreenToast').on('click', function () {
        stopGreenToastMsgs = true;
        $('.customGreenToast').removeClass('d-block').addClass('d-none');
      });
    });

    let stopGreenToastMsgs = false;
    document.addEventListener('DOMContentLoaded', async function () {
      // const stringsArray = ["First message", "Second message", "Third message", "Fourth message"];
      var showToastMessages = @json($settingsData['showToastMessages']);
      if (parseInt(showToastMessages.toString(), 10) == 1) {
        const stringsArray = @json($toastMessageList);
        for (let repeat = 0; repeat < 5; repeat++) {
          if (stopGreenToastMsgs) break;
          for (let index = 0; index < stringsArray.length; index++) {
            if (stopGreenToastMsgs) break;
            const element = stringsArray[index]['title'];
            showGreenToast(element, parseInt(stringsArray[index]['duration'].toString(), 10));
            await delay(parseInt(stringsArray[index]['duration'].toString(), 10));
          }
        }
      }else{
        stopGreenToastMsgs = true;
        $('.customGreenToast').removeClass('d-block').addClass('d-none');
      }
    });
  </script>

<!--  -->
<script>
$(document).ready(function() {
    var ratingValue = parseInt($('.ratingsShowOnly').data('generaterating'));
    $('.ratingsShowOnly .starv').each(function(index) {
        if (index < ratingValue) {
            $(this).css('color', 'black');
        } else {
            $(this).css('color', 'silver');
        }
    });
});
</script>

<script>
    $(document).ready(function() {
      let choosedrating = 4;
        $('.clasificacion input').on('change', function() {
            const rating = $(this).val();
            stopGreenToastMsgs = true;
            showGreenToast("Rating Added", 5000);
        });

      // add comment post start 
    $('.addCommentBtn').on('click', function(event) {
        event.preventDefault();

        let productidforratinginouthidden = $('#productidforratinginouthidden').val();
        let ratingcommenttextinput = $('#ratingcommenttextinput').val();
        let ratinguseremailphoneinput = $('#ratinguseremailphoneinput').val();
        let ratingusername = $('#ratingusername').val();
        let formData = new FormData();

        formData.append('ratingImg', $('#ratingImg')[0].files[0]);
        formData.append('productidforratinginouthidden', productidforratinginouthidden);
        formData.append('ratingcommenttextinput', ratingcommenttextinput);
        formData.append('ratinguseremailphoneinput', ratinguseremailphoneinput);
        formData.append('ratingusername', ratingusername);
        formData.append('choosedrating', choosedrating);
        formData.append('_token', '{{ csrf_token() }}'); // Add the CSRF token to FormData
        alert('start');

        $.ajax({
            type: "POST",
            url: "{{ route('submit.review') }}",
            data: formData,
            contentType: false, 
            processData: false,
            success: function(resp) {
        alert('success');

                stopGreenToastMsgs = true;
                showGreenToast("comment added under review", 5000);
            },
            error: function(resp) {
        alert('error');

                stopGreenToastMsgs = true;
                console.log(resp.responseText);
                showGreenToast("An error occurred. Please try again.", 5000);
            }
        });
        alert('end');
    });
});

    // add comment post end 

</script>

</body>

</html>