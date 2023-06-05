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

    /* Hide the arrow in number input fields */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* For Firefox */
    input[type="number"] {
        -moz-appearance: textfield;
    }


  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      {{-- <h1 class="logo"><a href="index.html">D'JARRS</a></h1> --}}
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{ url('/') }}" class="logo"><img src="{{ asset('import/assets/img/icon.png') }}" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/') }}#about">About</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/') }}#service">Service</a></li>
          <li><a class="nav-link scrollto" href="{{ url('/') }}#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="{{ url('/') }}#about">Order Now</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Order Page</h2>
          <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Order Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container shadow p-3 mb-5 p-3 rounded-5">
        <p>
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
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
              <p>{{ $message }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <form action="{{ route('deliveries.store') }}" method="POST">
            @csrf
            <center>
            <div class="col-xs-2 col-sm-2 col-md-2">
                <div class="form-group">
                    <a href="index.html" class="logo"><img src="{{ asset('import/assets/img/icon.png') }}" alt="" class="img-fluid"></a>
                </div>
            </div>
            </center>
             <div class="row g-3 sm-6 m-5">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <label class="form-label fw-bold">Name:</label>
                        <input type="text" name="name" class="form-control" placeholder="First Name, Middle Initial, Last Name" required>
                    </div>
                </div>
                <div class="col-xs-7 col-sm-7 col-md-7">
                    <div class="form-group">
                        <label class="form-label fw-bold">Email:</label>
                        <input type="email" name="email" class="form-control" placeholder="e.g. example@gmail.com" required>
                    </div>
                </div>
                <div class="col-xs-5 col-sm-5 col-md-5">
                  <div class="form-group">
                      <label class="form-label fw-bold">Phone Number:</label>
                      <input type="text" name="phone_number" class="form-control" placeholder="e.g 0999-999-9999" oninput="limitInputToNumbers(this, 11)" required>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label fw-bold">Address:</label>
                        <input type="text" name="address" class="form-control" placeholder="Street, City, State/Province" required>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label fw-bold">Detail Address:</label>
                        <textarea class="form-control" row="3" name="address_detail" placeholder="Detail Address"></textarea>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4">
                    <div class="form-group">
                        <label class="form-label fw-bold">Delivery Date:</label>
                        <input type="date" name="del_date" class="form-control" placeholder="Date" required>
                    </div>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group">
                        <label class="form-label fw-bold">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" class="form-control" placeholder="up to 30 only" required>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                        <label class="form-label fw-bold">Message:</label>
                        <textarea class="form-control" row="3" name="message" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="col-xs-10 col-sm-10 col-md-10">
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2">
                    <div class="form-group d-flex">
                        <label class="form-label fw-bold">Total Amount: </label>
                        <input type="number" id="total" name="total" class="form-control" placeholder="00">
                    </div>
                </div>
                

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" style="background: #2487ce; border: 0; padding: 10px 30px; color: #fff; transition: 0.4s; border-radius: 4px;" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </p>
      </div>
    </section>



  </main><!-- End #main -->
   


     <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container d-md-flex py-4">

        <div class="container d-md-flex py-3 justify-content-center">
            <div class="me-md-auto text-center text-md-start">
              <div class="copyright">
                &copy; Copyright <strong><span>D'JARRS</span></strong>. All Rights Reserved
              </div>
            </div>
        </div>
          

    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script>
    // Get the quantity input field and total input field
    const quantityInput = document.getElementById('quantity');
    const totalInput = document.getElementById('total');

    // Add an event listener to the quantity input field
    quantityInput.addEventListener('input', calculateTotal);

    // Function to calculate the total based on the quantity and price
    function calculateTotal() {
        // Get the quantity value
        let quantity = parseInt(quantityInput.value);

        // Limit the quantity value to a maximum of 30
        if (quantity > 30) {
            quantity = 30;
            quantityInput.value = quantity;
        }
        else if(quantity < 1) {
            quantity = 1;
            quantityInput.value = quantity;
        }

        // Calculate the total
        const price = 25; // Price per product
        const total = quantity * price;

        // Update the total input field with the calculated value
        totalInput.value = total;
    }
    </script>

    <script>
        var totalField = document.getElementById("total");
        totalField.addEventListener("mousedown", function(event) {
        event.preventDefault();
        });
        totalField.addEventListener("keydown", function(event) {
        event.preventDefault();
        });
    </script>


    <script>
      // Get the input date field
      var dateInput = document.querySelector('input[type="date"]');
    
      // Get the current date and set it as the minimum value
      var currentDate = new Date().toISOString().split('T')[0];
      dateInput.min = currentDate;
    </script>


    <script>
      function limitInputToNumbers(input, maxLength) {
          input.value = input.value.replace(/[^0-9]/g, '').slice(0, maxLength);
      }
    </script>
    <script>
      $(document).ready(function() {
          // Auto close the success alert after 5 seconds (5000 milliseconds)
          setTimeout(function() {
              $("#success-alert").alert('close');
          }, 3000);
      });
    </script>

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