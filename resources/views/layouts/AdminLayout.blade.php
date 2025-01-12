<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
    <main>
        
        <nav class="navbar admin">
            <h1>Admin Panel</h1>
            <ul>
                <li class="userview"><a href="{{ route('home') }}">Back To User View</a></li>
                <li><a href="{{ route('admin.news.index') }}">Nieuws Beheer</a></li>
                <li><a href="{{ route('admin.faq.index') }}">Faq beheer</a></li>
                <li><a href="{{ route('admin.contact.index') }}">Beheer Contact Forms   </a></li>
                <li><a href="{{ route('admin.users.index') }}">Beheer Gebruikers</a></li>

            </ul>
        </nav>
      

        @yield('content')
    </main>
</body>
</html>
