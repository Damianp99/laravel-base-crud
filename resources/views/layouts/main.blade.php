<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>
    @include('includes.header')
    <main 
    style="background-image:url({{asset('images/collection-of-heroes.jpg')}}); 
    background-repeat:repeat;
    ">
        @yield('content')
    </main>
    @include('includes.footer')
</body>
</html>