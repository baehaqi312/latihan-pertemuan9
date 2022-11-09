<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Web - Luthfi Baehaqi</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

        <link href="css/aos.css?ver=1.1.0" rel="stylesheet" />
        <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet" />
        <link href="css/main.css?ver=1.1.0" rel="stylesheet" />
        <link rel="stylesheet" href="style.css" />
        <noscript>
        <style type="text/css">
            [data-aos] {
            opacity: 1 !important;
            transform: translate(0) scale(1) !important;
            }
        </style>
        </noscript>
    </head>
    <body>
        @include('layouts.navbar')

        <main role="main">
            @yield('content')
        </main>

        @include('layouts.footer')

        {{-- script --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
        <script src="js/core/popper.min.js?ver=1.1.0"></script>
        <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
        <script src="js/now-ui-kit.js?ver=1.1.0"></script>
        <script src="js/aos.js?ver=1.1.0"></script>
        <script src="js/script.js"></script>
        <script src="scripts/main.js?ver=1.1.0"></script>
        <script src="particles.js"></script>
        <script src="app.js"></script>

        @yield('script')
    </body>
</html>
