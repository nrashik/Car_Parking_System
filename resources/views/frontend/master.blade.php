
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Parking Koi? - Park your vehicle anywhere!</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="frontend/lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="frontend/lib/animate/animate.min.css" rel="stylesheet">
        <link href="frontend/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="frontend/css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        
        @include('frontend.fixed.header')
      
        <!-- Top Bar End -->

        @yield('content')


        @include('frontend.fixed.footer')

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="frontend/lib/easing/easing.min.js"></script>
        <script src="frontend/lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="frontend/lib/waypoints/waypoints.min.js"></script>
        <script src="frontend/lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="frontend/mail/jqBootstrapValidation.min.js"></script>
        <script src="frontend/mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="frontend/js/main.js"></script>
    </body>
</html>
