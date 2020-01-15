<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('includes.header')
</head>
<body>
    <div class="container">
        @include('includes.navbar')

        @yield('content')

        @include('includes.footer')

    </div>
    
</body>
</html>