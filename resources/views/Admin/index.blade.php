@include('Admin/header')

<div id="content">
    @include('Admin/sidebar')

    <!-- Nội dung chính ở đây -->
    @yield('content')
</div>

@include('Admin/footer')
