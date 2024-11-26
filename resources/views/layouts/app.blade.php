@include('layouts.head')

<body>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            @include('layouts.header')
            @include('layouts.navigation')

            <div class="main-content">
                <section class="section">
                    @yield('content')
                </section>
            </div>

            @include('layouts.footer')

        </div>
    </div>

    @include('layouts.foot')

</body>

</html>
