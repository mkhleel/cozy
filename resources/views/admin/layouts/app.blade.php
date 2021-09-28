<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ config('app.name', 'Laravel') }} - {{$metaTitle}}</title>
    <!-- CSS files -->

    <link href="{{ asset('admin/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('admin/css/tabler-vendors.min.css') }}" rel="stylesheet"/>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            if (localStorage.getItem('theme-mode') === 'theme-dark'){
                document.body.classList.toggle('theme-dark');
            }
            document.querySelector('.loader-1').style.display = "none";

        });
    </script>
    @stack('styles')

</head>
<body class="antialiased" >
<div class="loader-1"></div>
<div class="wrapper">

        @include('admin.layouts.combo')
    <div class="page-wrapper">

        @yield('content')

        {{--            <label class="theme-switch" for="checkbox">--}}
        {{--                <input type="checkbox" id="checkbox" />--}}
        {{--\            </label>--}}



        @include('admin.layouts.partials.footer')
    </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
@stack('scripts')
<script src="{{ asset('admin/js/tabler.min.js') }}"></script>
<script src="{{ asset('admin/js/custom.js') }}"></script>

</body>
</html>
