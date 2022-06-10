<html>
    <head></head>
    <body>
        <div>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('product')}}">Product</a>
        <a href="{{route('team')}}">Team</a>
        <a href="{{route('aboutus')}}">About us</a>
        <a href="{{route('contactus')}}">Contact us</a>

        </div>
        @yield('content')
    </body>
</html>