<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title',config('app.name'))</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @include('front.layouts.include.head-script')

</head>
<body>
<header>
    @include('front.layouts.include.header')
</header>


<div id="mainBody">
    <div class="container-fluid">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-2">

                </div>
                @yield('content')
                <div class="col-xl-2"></div>

            </div>

        </div>
    </div>


    <footer>
        @include('front.layouts.include.footer')

        @include('front.layouts.include.footer-script')

    </footer>


</body>
</html>
