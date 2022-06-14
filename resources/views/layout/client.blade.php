<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @yield('css')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>
    @include('blocks.header')
    <main>
        <div class="row">
            <div class="col-3">
                <aside>
                    @section('sidebar')
                        @include('blocks.sidebar')
                    @show
                </aside>

            </div>
            <div class="col-9">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>

    </main>
    @include('blocks.footer')
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.js')}}">

</body>
</html>
