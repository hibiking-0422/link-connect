<DOCTYPE HTML>
<html lang="ja">
<head>
    @include('layouts.head')
    @yield('style')
</head>
<body>
<div id="wrapper">
@include('layouts.header')

@yield('contents')

@include('layouts.footer')
</div>
</body>
</html>