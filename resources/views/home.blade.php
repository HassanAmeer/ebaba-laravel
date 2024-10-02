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
      font-family: 'Poppins', sans-serif;
      transition: all 0.4s ease;
    }


    /* ===== Colours ===== */
    :root {
      --body-color: F4F7F9;
      /* --body-color: #E4E9F7; */
      --nav-color: white;
      --search-border: rgb(194, 215, 194);
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
          <li><a href="#">All Products</a></li>
          <li><a href="#"> My Products </a></li>
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

  <!-- imgSlides slides start -->
  <!-- <style>
    @media screen and (min-width: 600px) and (orientation: landscape) {
      .imgSlides {
        height: 70vh;
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
        src="ultrapod.png"
        class=" d-block w-100" alt="..."></div>
    <div class="imgSlides-content"> <img
        src="https://img.freepik.com/premium-vector/limited-time-offer-sale-poster-sale-banner-design-template-with-3d-editable-text-effect_535749-334.jpg"
        class=" d-block w-100" alt="..."></div>
    <div class="imgSlides-content"> <img
        src="ultrapod.png"
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
        height: 70vh;
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
      top: 35%;
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






@if($settingsData['showBanner2InHeader'] == 1)
  <div class="bannerSlides">
@foreach($BannerDesign2List as $key)
   @if($key['showInSlide'] == 1)
    <div class="bannerSlides-content active" data-duration="{{ $key['duraion'] }}">
      <div class="bannerSlidesItem">
        <center>
        @if($key['showBgImageInBigArea'] == 1)
          <div class="banner-design-outer" style=" opacity: {{$key['bigAreaOpacity'] }}; background-color: {{$key['bigAreaColor']}}; background-image:url('{{ asset($baseUrl.'/uploads/'.$key['bigAreaBgImage']) }}');">
            @else 
            <div class="banner-design-outer" style=" opacity: {{$key['bigAreaOpacity'] }}; background-color: {{$key['bigAreaColor']}};">
            @endif
            

            @if($key['showContentInBigArea'] == 1)
            {!! $key['bigAreaDesign'] !!}
            @endif
           
            @if($key['showBgImageInSmallArea'] == 1)
            <div class="banner-design-inner" style=" opacity: {{$key['smallAreaOpacity'] }}; background-color: {{$key['smallAreaColor']}}; display: flex; flex-direction: column;justify-content: center; background-image:url('{{ asset($baseUrl . '/uploads/' . $key['smallAreaBgImage']) }}');"> @else
            <div class="banner-design-inner" style="opacity: {{$key['smallAreaOpacity'] }}; background-color: {{$key['smallAreaColor']}}; display: flex; flex-direction: column;justify-content: center;"> 
            @endif

              @if($key['showContentInSmallArea'] == 1)
              {!!$key['smallAreaDesign']!!}
              @endif
              <div id="nextBanner" class="fas fa-chevron-right text-dark"
                style="scale:1; padding: 1rem; border: 1px solid grey; border-radius: 30%;"></div>
            </div>
          </div>
        </center>
      </div>
    </div>
    @endif
    @endforeach
    
    <div class="navigation">
      <div class="prevBanner fas fa-chevron-left text-dark" style="scale: 3; padding: 3rem;"></div>
    </div>
  </div>
  <!-- bannerSlides slides end -->
  
  <!-- imageSlides slides start -->
  @elseif($settingsData['showBannerImagesOnlyInHead'] == 1)
  <div class="bannerSlides">
  @foreach($bannerImagesOnlyList as $key)
      @if($key['showInSlide'] ==1)
        <div class="bannerSlides-content" data-duration="{{ $key['duration'] }}"> <img src="{{ asset($baseUrl.'/uploads/'.$key['image']) }}" class=" d-block w-100" alt="..."></div>
      @endif
    @endforeach

    <div class="navigation">
      <div class="prevBanner fas fa-chevron-left text-dark" style="scale: 3; padding: 3rem;"></div>
      <div class="nextBanner fas fa-chevron-right text-dark" style="scale:2; padding: 3rem;"></div>
    </div>
  </div>
  @endif
  <!-- imageSlides slides end -->






  <!-- Products Section -->
  <style>
    @media only screen and (max-width: 600px) {
      .salesDesignedArea {
        width: 100%;
        scale: 0.5;
      }

      .itemTitle {
        font-size: 0.8rem;
      }

      .itemPriceDesignedArea {
        scale: 0.7;
      }
    }

    @media screen and (min-width: 601px) {
      .salesDesignedArea {
        width: 50%;
      }

      .itemTitle {
        font-size: 1rem;
      }
    }

    .itemPriceDesignedArea {
      width: 100%;
    }

    .product-card {
      position: relative;
      border: none;
      /* Remove shadow */
      transition: transform 0.2s;
      /* Add transition for hover effect */
    }

    .product-card:hover {
      transform: scale(1.05);
    }

    .card-body {
      text-align: center;
    }

    .price-section {
      display: flex;
      justify-content: center;
      margin: 2px 0;
    }

    .sale-price {
      color: grey;
      text-decoration: line-through;
      margin-right: 5px;
    }

    .actual-price {
      color: black;
    }

    .add-to-cart {
      display: none;
      margin-top: 3px;
      width: 100%;
    }

    .product-card:hover .price-section {
      display: none;
    }

    .product-card:hover .add-to-cart {
      display: block;
      /* Show button on hover */
    }

    @media (max-width: 600px) {
      .product-row {
        display: flex;
        flex-wrap: wrap;
      }

      .product-row .col {
        flex: 0 0 33.33%;
        /* Show 3 items in a row */
        max-width: 33.33%;
      }

      .addToCart {
        font-size: 0.3rem;
      }
    }

    @media (min-width: 601px) {
      .product-row .col {
        flex: 0 0 25%;
        /* Show 4 items in a row */
        max-width: 25%;
      }

      .addToCart {
        font-size: 0.7rem;
      }
    }
  </style>

  <section class="container my-5">
    <h2 class="text-center mb-4">Products</h2>
    <div class="product-row row row-cols-1 row-cols-sm-3 row-cols-md-4 g-4">

      <div class="col" data-aos="fade-up" data-aos-duration="1500">
        <div class="card product-card">
          <div style="position: relative;">
            <img src="ultrapod.png" class="card-img-top" alt="Product Image">
            <div class="salesDesignedArea" style="background-color: yellow;">
              <div
                style="position: absolute; z-index: 1; top:5px; left: 7px; box-shadow: 2px 2px 2px white; border-radius: 7px;">
                <div style="background: rgba(0, 138, 78, 0.709); border-radius: 7px;">
                  <b style="color: white; padding: 3px;"> Save 50% </b>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body d-flex flex-column align-items-center">
            <b class="card-title itemTitle">Product Title</b>
            <div class="itemPriceDesignedArea">
              <div class="price-section">
                <p class="sale-price">$24.99</p>
                <p class="actual-price">$39.99</p>
              </div>
            </div>
            <div class="add-to-cart">
              <button class="btn btn-dark rounded-3 w-100 addToCart toggleSidebarBtns" data-pid="1" data-img="cart.png"
                data-title="Sample Product" data-price="20">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-duration="1500">
        <div class="card product-card">
          <div style="position: relative;">
            <img src="ultrapod.png" class="card-img-top" alt="Product Image">
            <div class="salesDesignedArea" style="background-color: yellow;">
              <div
                style="position: absolute; z-index: 1; top:5px; left: 7px; box-shadow: 2px 2px 2px white; border-radius: 7px;">
                <div style="background: rgba(0, 138, 78, 0.709); border-radius: 7px;">
                  <b style="color: white; padding: 3px;"> Save 50% </b>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body d-flex flex-column align-items-center">
            <b class="card-title itemTitle">Product Title</b>
            <div class="itemPriceDesignedArea">
              <div class="price-section">
                <p class="sale-price">$24.99</p>
                <p class="actual-price">$39.99</p>
              </div>
            </div>
            <div class="add-to-cart">
              <button class="btn btn-dark rounded-3 w-100 addToCart toggleSidebarBtns" data-pid="1" data-img="cart.png"
                data-title="Sample Product" data-price="20">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-duration="1500">
        <div class="card product-card">
          <div style="position: relative;">
            <img src="ultrapod.png" class="card-img-top" alt="Product Image">
            <div class="salesDesignedArea" style="background-color: yellow;">
              <div
                style="position: absolute; z-index: 1; top:5px; left: 7px; box-shadow: 2px 2px 2px white; border-radius: 7px;">
                <div style="background: rgba(0, 138, 78, 0.709); border-radius: 7px;">
                  <b style="color: white; padding: 3px;"> Save 50% </b>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body d-flex flex-column align-items-center">
            <b class="card-title itemTitle">Product Title</b>
            <div class="itemPriceDesignedArea">
              <div class="price-section">
                <p class="sale-price">$24.99</p>
                <p class="actual-price">$39.99</p>
              </div>
            </div>
            <div class="add-to-cart">
              <button class="btn btn-dark rounded-3 w-100 addToCart toggleSidebarBtns" data-pid="1" data-img="cart.png"
                data-title="Sample Product" data-price="20">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-duration="1500">
        <div class="card product-card">
          <div style="position: relative;">
            <img src="ultrapod.png" class="card-img-top" alt="Product Image">
            <div class="salesDesignedArea" style="background-color: yellow;">
              <div
                style="position: absolute; z-index: 1; top:5px; left: 7px; box-shadow: 2px 2px 2px white; border-radius: 7px;">
                <div style="background: rgba(0, 138, 78, 0.709); border-radius: 7px;">
                  <b style="color: white; padding: 3px;"> Save 50% </b>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body d-flex flex-column align-items-center">
            <b class="card-title itemTitle">Product Title</b>
            <div class="itemPriceDesignedArea">
              <div class="price-section">
                <p class="sale-price">$24.99</p>
                <p class="actual-price">$39.99</p>
              </div>
            </div>
            <div class="add-to-cart">
              <button class="btn btn-dark rounded-3 w-100 addToCart toggleSidebarBtns" data-pid="1" data-img="cart.png"
                data-title="Sample Product" data-price="20">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col" data-aos="fade-up" data-aos-duration="1500">
        <div class="card product-card">
          <div style="position: relative;">
            <img src="ultrapod.png" class="card-img-top" alt="Product Image">
            <div class="salesDesignedArea" style="background-color: yellow;">
              <div
                style="position: absolute; z-index: 1; top:5px; left: 7px; box-shadow: 2px 2px 2px white; border-radius: 7px;">
                <div style="background: rgba(0, 138, 78, 0.709); border-radius: 7px;">
                  <b style="color: white; padding: 3px;"> Save 50% </b>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body d-flex flex-column align-items-center">
            <b class="card-title itemTitle">Product Title</b>
            <div class="itemPriceDesignedArea">
              <div class="price-section">
                <p class="sale-price">$24.99</p>
                <p class="actual-price">$39.99</p>
              </div>
            </div>
            <div class="add-to-cart">
              <button class="btn btn-dark rounded-3 w-100 addToCart toggleSidebarBtns" data-pid="1" data-img="cart.png"
                data-title="Sample Product" data-price="20">Add to Cart</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Repeat similar blocks for other products -->
    </div>
  </section>













  <!--  -->
  <style>
    @media only screen and (max-width: 600px) {
      .itemDetailBox {
        flex-direction: column;
      }

      .itemDetailsAreaRight {
        width: 80%;
      }

      .itemDetailImgAreaLeft {
        width: 90%;
      }

      .itemImg {
        width: 6rem;
      }
    }

    @media screen and (min-width: 600px) and (orientation: landscape) {
      .itemDetailBox {
        flex-direction: row;
      }

      .itemDetailsAreaRight {
        width: 35%;
      }

      .itemDetailImgAreaLeft {
        width: 45%;
      }

      .itemImg {
        width: 7rem;
      }
    }

    /*  */
    .itemDetailBox {
      display: flex;
      margin: auto;
      width: auto;
      align-items: center;
      justify-content: center;
    }

    .itemDetailImgAreaLeft {
      align-items: center;
      justify-content: center;
    }


    .itemImages {
      display: flex;
      flex-direction: row;
      justify-content: flex-start;
      align-items: center;
      width: 100%;
      max-width: 100%;
      height: 8rem;
      padding-left: 1rem;
      padding-right: 1rem;
      overflow-x: auto;
      scroll-behavior: smooth;
    }

    .itemImg {
      justify-content: center;
      display: flex;
      overflow-x: auto;
      white-space: nowrap;
    }
  </style>

  <div class="itemDetailBox">

    <div class="itemDetailImgAreaLeft">
      <div style="position: relative;">
        <center>
          <img src="ultrapod.png" style="width: 60%;" class="card-img-top" id="thumbnailImg" alt="Product Image">
        </center>
        <div
          style="position: absolute; z-index: 1; top: 1rem; left: 1rem; box-shadow: 2px 2px 2px white; border-radius: 7px;">
          <div style="background: rgba(0, 138, 78, 0.709); border-radius: 7px ;">
            <b style="color: white; padding: 0.8rem;"> Save 50% </b>
          </div>
        </div>
      </div>
      <div class="itemImages"
        style="display: flex;flex-direction: row; justify-content:flex-start; align-items: center; width: 100%; height: 8rem; padding-left: 1rem; padding-right: 1rem;">
        <!-- <i class="fa fa-chevron-left preItemImgBtn" style="color: grey; font-size: x-large;"></i> -->
        <img class="itemImg" src="cart.png" alt="">
        <img class="itemImg" src="ultrapod.png" alt="">
        <img class="itemImg" src="ultrapod.png" alt="">
        <img class="itemImg" src="ultrapod.png" alt="">
        <img class="itemImg" src="ultrapod.png" alt="">
        <img class="itemImg" src="ultrapod.png" alt="">
        <img class="itemImg" src="ultrapod.png" alt="">
        <img class="itemImg" src="ultrapod.png" alt="">
        <!-- <i class="fa fa-chevron-right nextItemImgBtn" style="color: grey; font-size: x-large;"></i> -->
      </div>
    </div>

    <div class="itemDetailsAreaRight">
      <h2>A9 Pro Airpods Pro | Screen Airpods A9 Pro Lcd Earbuds</h2>
      <br>
      <p style="color: green; opacity: 0.5;">Free Shipping</p>




      <div class="price-section" style="justify-content: start;">
        <p class="sale-price">$24.99</p>
        <p class="actual-price">$39.99</p>
      </div>
      <p style="color: grey;">  <i class="fa fa-eye text-muted"> </i> <b id="viewersCount" class="text-dark"> 13 </b> Persons View At This Time </p>
      <!-- <div style="background-color: black; padding-bottom: 2px; color: white; width: 50%;"></div> -->
      <b style="padding-left: 0; font-size: 0.6rem;">Hurry, Only 10 left!</b>
      <!-- </div> -->

      <!-- shiping tax -->
      <div class="mb-0" style="display: flex; flex-direction: row; justify-content: start;align-items: center;">
        <button class="btn btn-sm btn-light quantityDecFromDetail" data-pid="3" data-img="cart.png"
          data-title="Sample Product" data-price="20">-</button>
        <b style="padding-left:1rem; padding-right:1rem;" class="globalItemQuantityIs"> 1 </b>
        <button class="btn btn-sm btn-light quantityIncFromDetail" data-pid="3" data-img="cart.png"
          data-title="Sample Product" data-price="20">+</button>
        <button class="btn btn-dark addToCart toggleSidebarBtns" style="margin-left: 1rem; width: 100%;" data-pid="3"
          data-img="cart.png" data-title="Sample Product" data-price="20">Order Now</button>
      </div>
      <br>
      <p style="color: grey;" id="delivery-estimate">Estimated delivery between Monday 07 October and Thursday 10 October.</p>

      <hr>
      <div
        style="height: 5rem; width: 100%; background-color:whitesmoke; display: flex;flex-direction: row; justify-content: space-between; align-items: center;">
        <img style="height: 4rem; background-color: white;" src="watch.png" alt="">
        <p style="color: black; padding-right: 1rem;"> 1 watch free </p>
      </div>
    </div>
  </div>

  <br><br>













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
      z-index: 1050;
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

    #cart-items hr {
      border-color: #ccc;
    }

    #cart-items .quantity-decrease,
    #cart-items .quantity-increase {
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
      <div id="cart-items" class="p-3" style="min-height: 200px;">
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
      z-index: 1050;
    }

    @media only screen and (max-width: 600px) {
      .toast-body {
        min-width: 14rem;
      }
    }

    @media screen and (min-width: 600px) and (orientation: landscape) {
      .toast-body {
        width: 20rem;
      }
    }
  </style>

  <div class="customGreenToast d-block" style="background-color: rgb(0, 67, 0); opacity: 0.8; border-radius: 30px;">
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
      z-index: 1000;
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
      z-index: 1000;
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
      z-index: 1051;
      width: 2.5rem;
      height: 2.5rem;
    }
  </style>
  <div style="position: fixed;right: 4%; z-index: 1055; bottom: 7%;">
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
              <li class="footerSubtitleColor"><a href="#">Privacy Policy</a></li>
              @endif
              @if($settingsData['showReturndPolicy'] == 1)
              <li class="footerSubtitleColor"><a href="#">Returns Policy</a></li>
              @endif
              @if($settingsData['showRefundPolicy'] == 1)
              <li class="footerSubtitleColor"><a href="#">Refund Policy</a></li>
              @endif
              @if($settingsData['showTermsCondition'] == 1)
              <li class="footerSubtitleColor"><a href="#">Terms of Service</a></li>\
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
              <li class="footerSubtitleColor"><a href="#">Contact Us</a></li>
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
        width: 80%;
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
  </style>


  <div class="stickyItem" data-aos="zoom-out-up" data-aos-duration="1000">
    <center>
      <div id="sticyItemInner">
        <div>
          <img src="{{$settingsData}}" style="width: 6rem; height: 5rem;" alt="">
          <b class="text-light"> title</b>
        </div>
        <div class="mb-0"
          style="display: flex; flex-direction: row; justify-content: start;align-items: center; padding-left: 2rem; ">
          <button class="btn btn-sm btn-dark quantityDecFromDetail" data-pid="3" data-img="cart.png"
            data-title="Sample Product" data-price="20">-</button>
          <b style="padding-left:1rem; padding-right:1rem; color: white;" class="globalItemQuantityIs"> 1 </b>
          <button class="btn btn-sm btn-dark quantityIncFromDetail" data-pid="3" data-img="cart.png"
            data-title="Sample Product" data-price="20">+</button>
          <button class="btn addToCart toggleSidebarBtns"
            style="margin-left: 1rem; width: 100%; background-color: rgb(168, 211, 168);" data-pid="3"
            data-img="cart.png" data-title="Sample Product" data-price="20">Order Now</button>
        </div>
      </div>
    </center>
  </div>


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
        $('#cart-items').empty();
        if (cart.length === 0) {
          $('#cart-items').html('<p>Your cart is empty.</p>');
        } else {
          cart.forEach((item, index) => {
            $('#cart-items').append(`
            <div class="cart-item" data-index="${index}">
              <div style="display:flex; flex-direction:row; justify-content:space-between;">
                <h6 class="mb-0">${item.title}</h6>
                <img src="${item.img}" width="60" height="60" class="img-fluid">
                </div>
                <div style="display:flex; flex-direction:row; justify-content:space-between; padding-top:10px;">
                  <div class="mb-0">
                    <button class="btn btn-sm btn-light quantity-decrease">-</button>
                    <b style="padding-left:1rem; padding-right:1rem;">${item.quantity}</b>
                    <button class="btn btn-sm btn-light quantity-increase">+</button>
                    </div>
                    <p class="mb-0">${item.price} Rs</p>
                    <i class="remove-item fa-solid fa-trash" style="color:green; opacity:0.5; padding-right:1rem; font-size: x-large;"></i>
                    </div>
                    <hr/>
                    </div>
                    `);
          });
        }
        calculateTotal(); // Update total price
      }

      // Add item to cart
      $('.quantityIncFromDetail').on('click', function () {
        let item = {
          pid: $(this).data('pid'),
          img: $(this).data('img'),
          title: $(this).data('title'),
          price: $(this).data('price'),
          quantity: 1
        };


        let existingItem = cart.find(i => i.pid === item.pid);
        if (cart.length < 1) {
          cart.push(item);
        } else if (existingItem) {
          existingItem.quantity++;
          globalItemQuantityIs++;
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

      $('.addToCart').on('click', function () {
        let item = {
          pid: $(this).data('pid'),
          img: $(this).data('img'),
          title: $(this).data('title'),
          price: $(this).data('price'),
          quantity: 1
        };

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
          showGreenToast("Please add some items to your cart before proceeding.", 3000);
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

        if (name && phone && address) {
          // Show submitted data
          $('#submitted-data').html(`Name: ${name} <br> Phone: ${phone} <br> Address: ${address}`);
          $('#checkout-form').addClass('d-none');
          $('#submission-confirmation').removeClass('d-none');

          // Clear cart
          cart = [];
          renderCart();
        } else {
          alert('Please fill all fields.');
        }
      });
      // Initialize cart
      renderCart();
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
    $('#delivery-estimate').text(`Estimated delivery between ${startFormatted} and ${endFormatted}.`);
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
    });


  </script>

</body>

</html>