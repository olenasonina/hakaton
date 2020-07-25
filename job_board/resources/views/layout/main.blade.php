<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{ url(elixir('css/css/bootstrap.min.css')) }}">
</head>

<body>

    <div class="container">
        <header class="blog-header py-3">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-8">
                    <a class="blog-header-logo text-dark" href="#">Job Board</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
                    <a class="btn btn-sm btn-outline-secondary" href="#">Add vacation</a>
                </div>
            </div>
        </header>

        <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
                <a class="p-2 text-muted" href="#">JavaScript</a>
                <a class="p-2 text-muted" href="#">Java</a>
                <a class="p-2 text-muted" href="#">C#</a>
                <a class="p-2 text-muted" href="#">Pyton</a>
                <a class="p-2 text-muted" href="#">PHP</a>
                <a class="p-2 text-muted" href="#">C++</a>
                <a class="p-2 text-muted" href="#">Ruby</a>
            </nav>
            <hr>
            <div class="block-info">
                @yield('content')
            </div>
            <hr>
            <footer class="blog-footer flex-content-center">
                <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a
                        href="https://twitter.com/mdo">@mdo</a>.</p>
                <p>
                    <a href="#">Back to top</a>
                </p>
            </footer>
        </div>

</body>

</html>