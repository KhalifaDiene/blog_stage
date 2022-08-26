<!DOCTYPE html>
<html lang="en">

<head>
    <title>SUPdeCO Blog | @yield('title')</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href=" {{ asset('assets/images/fav.ico') }} " type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href=" {{ asset('assets/css/font-awesome.min.css') }} ">
    <!-- ALL CSS FILES -->
    <link href=" {{ asset('assets/css/materialize.css') }} " rel="stylesheet">
    <link href=" {{ asset('assets/css/bootstrap.css') }} " rel="stylesheet" />
    <link href=" {{ asset('assets/css/style.css') }} " rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ asset('assets/css/style-mob.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/summernote-bs4.css') }}" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->

    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" /> --}}
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    @include('layouts.admin.header')

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            @include('layouts.admin.sidebar')
            <!--== BODY INNER CONTAINER ==-->

            {{-- Contenu de la page --}}
            @yield('content')
            {{-- End Contenu de la page --}}

            @include('layouts.modal')

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="{{ asset('assets/js/main.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/materialize.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/summernote-bs4.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote.min.js"></script> --}}
    <script>
        $('#summernote').summernote({
            placeholder: 'Entrez le contenue de votre article',
            tabsize: 2,
            height: 500,
        });
    </script>

</body>


</html>
