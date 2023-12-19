<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <meta
      name="description"
      content="PhilPalengke.com"
    />

    <!-- Google Web Fonts -->
    {{-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet"> --}}

    <!-- Icon Font Stylesheet -->
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- <link rel="icon" href="https://philpalengke.com/passport/public/coverpageimages/iconittronics.png" type="image/x-icon"> --}}
    {{-- <link rel="shortcut icon" href="https://philpalengke.com/passport/public/coverpageimages/iconittronics.png" type="image/x-icon"> --}}
    {{-- <link rel="manifest" href="%PUBLIC_URL%/manifest.json" /> --}}
    <title>PhilPalengke - IT Tronics</title>
  </head>
  <body>
    <div id="header"class="container">
        <div class="row bgdarkgray py-3  text-light">
            <div class="col-md-4 form-group">
                PhilPalengke
            </div>
            <div class="col-md-7 form-group">
                <div class="row fw-bold">
                    <div class="col-md-2 form-group">Home</div>
                    <div class="col-md-2 form-group">Products</div>
                    <div class="col-md-2 form-group">Stores</div>
                    <div class="col-md-2 form-group">Services</div>
                    <div class="col-md-2 form-group">About</div>
                    <div class="col-md-2 form-group">Inquiry</div>
                </div>
            </div>
            <div class="col-md-1 form-group fw-bold">
                <div class="bg-success p-2 roundedtopleft">Sign in</div>
            </div>
        </div>
    </div>
    {{-- <noscript>You need to enable JavaScript to run this app.</noscript> --}}
    <div id="root" class="container bgmegaman p-0">
        @yield('content')
    </div>

    <footer class="container bgdarkgray footer pt-5 mt-5 wow fadeIn">
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-lg-3 col-md-6 d-flex align-items-start flex-column ">
              <h5 class="text-white mb-4 fw-bold">Company</h5>
              <a class="pb-2  fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>About Us</a>
              <a class="pb-2 fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>Contact Us</a>
              <a class="pb-2 fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>Our Services</a>
              <a class="pb-2 fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>Privacy Policy</a>
              <a class="pb-2 fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>Terms & Condition</a>
            </div>
            <div class="col-lg-3 col-md-6 d-flex align-items-start flex-column">
              <h5 class="text-white mb-4 fw-bold">Quick Links</h5>
              <a class="pb-2  fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>Products</a>
              <a class="pb-2  fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>Stores</a>
              <a class="pb-2  fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>Services</a>
              <a class="pb-2  fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>About Us</a>
              <a class="pb-2  fw-bold colormintygreen" href=""><span><i class="bi bi-chevron-right text-secondary fw-bold"></i></span>Contact Us</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <h5 class="text-white mb-4">Contact</h5>
                <p class="mb-2 text-light fw-bold"><i class="bi bi-geo-alt pe-2"></i>V. Rama Ave. Calamba, Cebu City</p>
                <p class="mb-2 text-light"><i class="bi bi-telephone-fill"></i> 09678720779</p>
                <p class="mb-2 text-light"><i class="bi bi-telephone-fill"></i> 09123456789</p>
                <p class="mb-2 text-light"><i class="bi bi-envelope"></i>aldrinjohnencina7@gmail.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light p-1 ms-1 px-2" href="#"><i class="bi bi-twitter"></i></a>
                    <a class="btn btn-outline-light p-1 ms-1 px-2" href="#"><i class="bi bi-facebook"></i></a>
                    <a class="btn btn-outline-light p-1 ms-1 px-2" href="#"><i class="bi bi-youtube"></i></a>
                    <a class="btn btn-outline-light p-1 ms-1 px-2" href="#"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
          </div>
        </div>
        <div class="container border-top border-secondary border-2">
          <div class="">
            <div class="row py-3 text-secondary">
              <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                &copy; <a class="border-bottom text-light" href="#">PhilPalengke</a>, All Rights Reserved.
                Designed By: <a class="border-bottom text-light">IT - Tronics</a>
              </div>
              <div class="col-md-6 text-center text-md-end">
                <div class="footer-menu text-light fw-bold">
                  <a href="">Home</a>
                  <a href="">Cookies</a>
                  <a href="">Help</a>
                  <a href="">FAQs</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
  </body>
</html>
