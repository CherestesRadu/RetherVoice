<nav class='navbar'>

    <div class='logo'>
        <h1>RetherVoice</h1>
    </div>
    @guest
    <div class='guest-links'>
        <a href='#'>About</a>
        <a href='#'>Download</a>
        <a href='#'>Login</a>
        <a href='{{ route('register') }}'>Register</a>
    </div>
    @endguest

    @auth
    <div class='auth-links'>
        <a href='#'>Home</a>
        <a href='#'>Rooms</a>
        <a href='#'>Profile</a>
        <form method="POST" action="{{ route('logout') }}">
    @csrf
        <button type="submit" class="logout-button">
            Log out
        </button>
</form>
    </div>
    @endauth
</nav>