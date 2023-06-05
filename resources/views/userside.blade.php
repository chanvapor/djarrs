<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('import/assets/img/icon.png') }}" rel="icon">
  <link href="{{ asset('import/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('import/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('import/assets/css/style.css') }}" rel="stylesheet">

  @vite(['resources/css/app.css', 'resources/js/app.js'])


  <style>
    #hero {
        background: url("{{ asset('import/assets/img/hero-bg.jpg') }}") top center;

    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="{{ url('/') }}">D'JARRS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="index.html" class="logo"><img src="{{ asset('import/assets/img/icon.png') }}" alt="" class="img-fluid"></a> --}}

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#service">Service</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ url('order') }}">Order Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative mt-3" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>ORDER WATER IN BOHOL</h1>
          <h2>Save time, worry less.</h2>
        </div>
      </div>
      <div class="text-center mt-5 mb-5">
        <a href="{{ url('order') }}" class="btn-get-started scrollto mb-4">Order Now</a>
        <h4>Now Serving in Municipalities of Bohol!</h4>
        <p class="text-primary" >Dauis, Panglao, Tagbilaran, Baclayon</p>
      </div>

      <div class="row icon-boxes">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 justify-content-center" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box text-center">
              <div class="icon"><i class="ri-contrast-drop-line"></i></div>
              <h4 class="title">Types of water</h4>
              <p class="description">Water is one of the most natural components that your body needs. Thus, drinking plenty of water every day is crucial to your health. While you watch your diet and pick healthy foods, it is also important to choose the best type of water to drink.</p>
            </div>
        </div>
          

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 justify-content-center" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box text-center">
              <div class="icon"><i class="ri-number-8"></i></div>
              <h4 class="title">8 Glasses and more</h4>
              <p class="description">Since childhood, we are always advised by our parents and doctors to drink 8 glasses of water or more every day. This does not only prevent us from dehydration but it also makes us healthy.</p>
            </div>
        </div>
          
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 justify-content-center" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box text-center">
              <div class="icon"><i class="ri-ink-bottle-fill"></i></div>
              <h4 class="title">Filtered Water vs Bottled Water</h4>
              <p class="description">Being cautious about the water you drink is crucial. Apart from the foods you eat every day, it is also important to know what comprises the water you drink and how it can affect your health.</p>
            </div>
        </div>
          
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 justify-content-center" data-aos="zoom-in" data-aos-delay="500">
            <div class="icon-box text-center">
              <div class="icon"><i class="ri-lightbulb-line"></i></div>
              <h4 class="title">Important Facts on the Water you drink</h4>
              <p class="description">The most important thing that you have to find out is whether the water you drink is safe or not. If you are drinking tap water, you may be doubtful about its safety. Most people find it safe to drink water but for pregnant women, young children, elderly, and adults with certain health conditions, drinking tap water can be risky.</p>
            </div>
        </div>
          

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>A more comfortable, and faster way of ordering and obtaining quality drinking water containers nearby your home or office.</p>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
                D'JARRS is committed to provide access to high quality drinking water to homes and offices.
                The need for clean and safe drinking water is undeniable. 
                During recent years many businesses went online and Covid19 gave this trend even a bigger boost. 
                And for logical reasons of course:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Easier access</li>
              <li><i class="ri-check-double-line"></i> Ordering becomes visual</li>
              <li><i class="ri-check-double-line"></i> Provide additional information on the product</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                By moving the order process online we believe we can improve the Water Supply market for everyone:
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> For the end-user a better order experience, with mandatory checks on certification of the supplier, giving you quality water, following Government standards.</li>
              <li><i class="ri-check-double-line"></i> The supplier is getting a system (CRM), that helps to streamline their business, give more insights and market their business more easily than traditional ways.
              </li>
            </ul>
            <a href="{{ url('order') }}" class="btn-learn-more">Order Now</a>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

   
  

   
    <!-- ======= Services Section ======= -->
    <section id="service" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>How does it Work?</h2>
          <p>We provide hassle free and fully internet based water delivery search for your office and home. Add your product, enter the quantity, and track your delivery online!</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxs-cart-alt"></i>
              </div>
              <h4>Create Your Order</h4>
              <p>Fill up the order form and be sure to input a valid email to track the details of your order.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-blue ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bxs-truck"></i>
              </div>
              <h4>Get You Delivery</h4>
              <p>It's cash on delivery. Your trusted supplier will approve and deliver your order.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-wink-smile"></i>
              </div>
              <h4>Enjoy and Live Healthy</h4>
              <p>Enjoy your clean and filtered water! Mother natures gift! Satisfied with your order? Let us know!</p>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Sevices Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">
        <div class="text-center">
          {{-- <h3>Call To Action</h3>
          <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <a class="cta-btn" href="#">Call To Action</a> --}}
        </div>
      </div>
    </section><!-- End Cta Section -->

   



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Welcome to our Contact page! We value your feedback, inquiries, and suggestions, and we're excited to hear from you. </p>
        </div>
        
        <div>
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.727877307017!2d123.86531219999999!3d9.618682999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa4df29a6e957f%3A0x18fa2ad7a9616d46!2sD&#39;jarrs!5e0!3m2!1sen!2sph!4v1685202125310!5m2!1sen!2sph" frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Hontanosas Rd, Mayacabac, Dauis, 6339 Bohol</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>djarrs@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>0933-272-8310</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">
         
             
            <form action="{{ route('messages.store') }}" method="post" role="form" class="">
              @csrf

              
              <div class="row gy-2 gx-md-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  @error('name')
                  <p>{{ $message }}</p>
                  @enderror
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  @error('email')
                  <p>{{ $message }}</p>
                  @enderror
                </div>
                <div class="form-group col-12">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  @error('subject')
                  <p>{{ $message }}</p>
                  @enderror
                </div>
                
                <div class="form-group col-12">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
                  @error('message')
                  <p>{{ $message }}</p>
                  @enderror
                </div>
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                
                <div class="text-center col-12"><button type="submit" style="background: #2487ce; border: 0; padding: 10px 30px; color: #fff; transition: 0.4s; border-radius: 4px;" class="btn btn-primary">Send Message</button></div>
              
              </div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container d-md-flex py-4">

        <div class="container d-md-flex py-3 justify-content-center">
            <div class="me-md-auto text-center text-md-start">
              <div class="copyright">
                &copy; Copyright <strong><span>D'JARRS</span></strong> 2023. All Rights Reserved
              </div>
            </div>
        </div>
          

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('import/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('import/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('import/assets/js/main.js') }}"></script>

</body>

</html>