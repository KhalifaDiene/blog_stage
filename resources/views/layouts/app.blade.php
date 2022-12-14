<!DOCTYPE html>
<html lang="en">


<head>
    <title>Accueil</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset('assets/images/fav.ico') }}" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- ALL CSS FILES -->
    <link href="{{ asset('assets/css/materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset('assets/css/style-mob.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    @include('sweetalert::alert')

    <!-- MOBILE MENU -->
    @include('layouts.mob-menu')
    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        @include('layouts.header')

        <!-- LOGO AND MENU SECTION -->
        @include('layouts.navbar')
    </section>
    <!--END HEADER SECTION-->

    <!-- SLIDER -->
    @include('layouts.slide')

    @yield('content')

    <!-- FOOTER COURSE BOOKING -->
    @include('layouts.slide-footer')
    <!-- FOOTER -->
    @include('layouts.footer')

    <!-- COPY RIGHTS -->
    @include('layouts.copyright')

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    @include('layouts.modal')
    <!-- SOCIAL MEDIA SHARE -->
    @include('layouts.social-media')

    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/materialize.min.js') }}"></script>
    <script src=" {{ asset('assets/js/custom.js') }} "></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <script>
        @if (Session::has('success_add_category'))
            Swal.fire({
                icon: 'success',
                title: 'Succ??s',
                text: '{{ Session::get("success") }}'
            })
        @endif
    </script>
</body>

</html>
