<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | Jim Nieters</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script async src="{{ asset('js/manifest.js') }}"></script>
    <!-- Vendor script -->
    <script async src="{{ asset('js/vendor.js') }}"></script>

</head>
<body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-106389519-1', 'auto');
      ga('send', 'pageview');

    </script>
    <div id="app" class="wrapper">
        @include('partials.header')

        @yield('content')
        @include('partials.footer')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-59bb0131ba091523"></script> 
</body>
</html>
