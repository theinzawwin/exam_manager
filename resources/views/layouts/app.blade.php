<html>
    <head>
        <title>App Name - @yield('title')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
   
   <!-- Styles -->
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
    <h3>Exam Manager</h3>
        @section('sidebar')
           <nav>
            <a href="/grades">Grade List</a>
            <a href="/students">Student List</a>
            <a href="/exams">Exam List</a>
            <a href="/attendances">Attendance</a>
           </nav>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>