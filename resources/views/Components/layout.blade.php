<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Development Project Compilation</title>

        <!-- CSS Styles goes here -->
        <link rel="stylesheet" href="/assets/css/styles.css"> <!-- Default CSS -->
        @yield('additional-styles')
    </head>

    <body>

        <!-- HEADER -->
        <header>

            <div class="logo">
                <img src="/assets/images/logo.png" alt="Logo">
            </div>
    
            <nav>
                <ul>
                    <li><a href="{{ url('/') }}" class="button">HOME</a></li>
                    <li><a href="{{ url('/lab1') }}" class="button">LAB1</a></li>
                    <li><a href="{{ url('/lab2') }}"class="button">LAB2</a></li>
                    <li><a href="{{ url('/lab3') }}" class="button">LAB3</a></li>
                    <li><a href="{{ url('/lab4') }}" class="button">LAB4</a></li>
                </ul>
            </nav>
        </header>
        <!-- END OF HEADER -->

        <!-- CONTENT -->
        <div class="content">
            <!-- Page content goes here -->
            @yield ('content')   
        </div>
        <!-- END OF CONTENT -->

        <!-- FOOTER -->
        <footer>
            <p>&copy; WD Project Compilation Website.</p>
        </footer>
        <!-- END OF FOOTER -->
    </body>
</html>
