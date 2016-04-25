<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Search the flickr - @yield('title') </title>

        <!-- CSS And JavaScript -->
	{{ Html::style('css/bootstrap.min.css',array(),true) }}
    </head>

    <body>
        <div class="container">
            <nav class="navbar navbar-default">
                <!-- Navbar Contents -->
            </nav>
        </div>

        @yield('content')

        <!-- CSS And JavaScript -->
	{{ Html::script('js/all.js',array(),true) }}
    </body>
</html>
