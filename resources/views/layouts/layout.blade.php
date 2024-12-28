<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css')
</head>
<body>
    <main>
        <nav class="navbar">
            <a href="{{ route('home') }}"><img src="{{ asset('Images/ValoMate.png')}}" alt=""></a>
            <ul>
                <li><a href="{{ route('lft') }}">Looking for Team</a></li>
                <li><a href="{{ route('faq') }}">FAQ</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
                @if (auth()->check())
                <li><a href="{{ route('profile.show', ['id' => auth()->user()->id]) }}"><img src="{{ asset('Images/Iconprofile.png')}}" alt=""></a></li>
                @else
                <li><a href="{{ route('login')}}"><img src="{{ asset('Images/Iconprofile.png')}}" alt=""></a></li>
                </ul>
                @endif
        </nav>

        @auth
            @if (auth()->user()->isAdmin())
                <nav class="navbar admin">
                    <h1>Admin Panel</h1>
                    <ul>
                    <li><a href="{{ route('admin.news.index') }}">Nieuws Beheer</a></li>
                    <li><a href="{{ route('admin.faq.index') }}">Faq beheer</a></li>
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
