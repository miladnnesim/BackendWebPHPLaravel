<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
    <main>
        <nav class="navbar">
            <a href="{{ route('home') }}"><img src="Images/ValoMate.png" alt=""></a>
            <ul>
                <li><a href="{{ route('lft') }}">Looking for Team</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                <li><a href="{{ route('profile.edit') }}"><img src="Images/Iconprofile.png" alt=""></a></li>
            </ul>
        </nav>

        <!-- Admin Panel Navbar -->
        @auth
            @if (auth()->user()->isAdmin())
                <nav class="navbar admin">
                    <h1>Admin Panel</h1>
                    <ul>
                    <li><a href="{{ route('admin.news.index') }}">Nieuws Beheer</a></li>
                    <li><a href="{{ route('admin.contact.index') }}">Beheer Contact Forms   </a></li>
                    <li><a href="{{ route('admin.users.index') }}">Beheer Gebruikers</a></li>

                    </ul>
                </nav>
            @endif
        @endauth

        @yield('content')
    </main>
</body>
</html>
