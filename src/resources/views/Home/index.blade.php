@include('Home/header')

<div id="content">
    @include('Home/sidebar')

    <!-- Nội dung chính ở đây -->
    @yield('content')
</div>

@include('Home/footer')