<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <main>
        <nav class="navbar">
            
                <a href="{{ route('home') }}"><img src="Images/ValoMate.png" alt=""></a>
                <ul>
                <li><a  href="{{ route('l2f') }}">Looking for Team</a></li>
                <li><a  href="{{ route('faq') }}">FAQ</a></li>
                <li><a  href="{{ route('contact') }}">Contact</a></li>
                <li><a href=""><img src="Images/Iconprofile.png" alt=""></a></li>
            </ul>
        </nav>
        
        @Yield ('content')
    </main>
</body>
</html>