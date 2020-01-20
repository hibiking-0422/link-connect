    <meta charset="UTF-8">
    <title>Link Connect</title>
    <meta name="description" content="説明文">
    <link href="{{ asset('/css/layouts/common.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/layouts/header.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('/css/layouts/footer.css') }}" rel="stylesheet" type="text/css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">