<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') </title>

    @include('css.v1')
    @yield('css')
    @yield('style')

</head>
<body>
    
    <div>
        @yield('sidebar')
    </div>

    <div>
        @yield('content')
    </div>


    @include('js.v1')
    @yield('js')
    <script type="text/javascript">
        @yield('javascript')
    </script>

</body>
</html>