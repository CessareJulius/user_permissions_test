@include('layouts.head')

<body class="hold-transition skin-green sidebar-collapse sidebar-mini">    
    <div class="wrapper">
        @include('layouts.nav')
        @include('layouts.menu')

        <div class="content-wrapper">
            @yield('content')
        </div>

@include('layouts.footer')