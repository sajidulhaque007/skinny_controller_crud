<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('asset') }}/css/style.css">
    
    <title>Document</title>
    <style>
        .navbar-nav{
            left: 15%;
            position: absolute;
        }
        .navbar-brand{
            position: relative;
            padding-top: 40px;
        }
    </style>
</head>
<body>
<section class="container">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow">
        <div class="container">
            <a href="" class="navbar-brand"></a>
            <ul class="navbar-nav">
                <li>
                    <a href="{{ route('student') }}" class="nav-link">Home</a>
                </li>
                <li>
                    <a href="{{ route('student') }}" class="nav-link">Student Add Form</a>
                </li>
                <li>
                    <a href="{{ route('manage.student') }}" class="nav-link">Student Manage Form</a>
                </li>
                <li>
                    <a href="{{ route('dept') }}" class="nav-link">Department Add Form</a>
                </li>
                <li>
                    <a href="{{route('manage.dept')}}" class="nav-link">Department Manage Form</a>
                </li>
            </ul>
        </div>
    </nav>
</section>
@yield('content')

<script src="{{ asset('asset') }}/js/bootstrap.bundle.js"></script>


</body>
</html>
