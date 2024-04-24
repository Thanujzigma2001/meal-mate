<!doctype html>
<html lang="en">
    <head>
      @include('home.css')

    </head>
    
    <body id="section_1">

        <header class="site-header">
            @include('home.header')
        </header>

        <nav class="navbar navbar-expand-lg bg-light shadow-lg">
           @include('home.navbar')
        </nav>

        <main>
            @include('home.main')
        </main>

        <footer class="site-footer">
            @include('home.footer')
        </footer>

        
    </body>
</html>