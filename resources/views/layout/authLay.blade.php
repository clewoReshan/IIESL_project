<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>IIESL</title>
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/6e8a2ac668.js" crossorigin="anonymous"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Include Slick CSS (you can use a CDN) -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Include Slick Theme CSS (optional) -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <!-- Include jQuery (required for Slick) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Include Slick JS (you can use a CDN) -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</head>

<body>
    <div class="container">
        <!-- {{-- successfull message --}} -->
        @if (Session::has('success'))
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast align-items-center text-bg-success border-0 bottom-0 end-0 show" role="alert"
                    aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
                    <div class="toast-header">
                        <img src="{{ asset('assets/images/logo.png') }}" width="20px" class="rounded me-2"
                            alt="IIESL Logo">
                        <strong class="me-auto">IIESL</strong>
                        <small>Just Now</small>
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Error: {{ Session::get('success') }}
                    </div>
                </div>
            </div>
        @endif

        <!-- {{-- error message --}} -->
        @if (Session::has('error'))
            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div class="toast align-items-center text-bg-danger border-0 bottom-0 end-0 show" role="alert"
                    aria-live="assertive" aria-atomic="true" data-bs-autohide="true">
                    <div class="toast-header">
                        <img src="{{ asset('assets/images/logo.png') }}" width="20px" class="rounded me-2"
                            alt="IIESL Logo">
                        <strong class="me-auto">IIESL</strong>
                        <small>Just Now</small>
                        <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        Error: {{ Session::get('error') }}
                    </div>
                </div>
            </div>
        @endif

        @yield('content')
    </div>
</body>

</html>
