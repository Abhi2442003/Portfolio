
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }} ">

    <link rel="stylesheet" href="{{ asset('assets/css/backToTop.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/media.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/light.mode.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon_gerold.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/odometer-theme-default.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
</head>

<body>

    @include('inc.loder')

    @include('inc.nav')

    <main class="site-content" id="content">

        @yield('content')

    <!-- BEGIN: Contact Form Fail Modal Message -->
    <div class="modal contact_modal failed" id="message_fail" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <span class="modal-title"><strong>Error</strong></span>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><i class="fas fa-times"></i></button>
                </div>
                <div class="modal-body">
                    <p>Oops! Something went wrong, please try again.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Contact Form Fail Modal Message End -->
    </main>

</body>

   @include('inc.footer')

</html>
