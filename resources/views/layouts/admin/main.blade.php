@include('layouts.admin.head')
@include('layouts.admin.navbar')
@include('layouts.admin.sidebar')

<main class="content-wrapper">
    @yield('content')
</main>

@include('layouts.admin.footer')
