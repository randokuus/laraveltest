<!-- kaustas resources/views/layouts/app.blade.php-->

<html>
    <head>
        <title>App Name - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            Siia tuleb sidebar
        @show
        
        <div class="container">
            <div>
                <ul>
                    <a href = "{{ Route('welcome')}}">Home</a>
                </ul>
            </div>
            @yield('content')
        </div>
    </body>
</html>