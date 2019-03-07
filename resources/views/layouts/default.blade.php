<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
    <div class="container">

            @include('includes.header')

    </div>
    <main role="main" class="mt-5 pt-3">
        @yield('content')

    </main>



    <footer class="container-fluid bg-dark text-white text-center">
    <div class="container">
        @include('includes.footer')
    </div>
    </footer>

@include('includes.jsfooter')

</body>
</html>


