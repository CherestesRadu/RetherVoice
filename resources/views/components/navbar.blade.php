<nav class='navbar'>

    <div class='logo'>
        <h1>RetherVoice</h1>
    </div>
    @guest
    <div class='guest-links'>
        <a href='#'>About</a>
        <a href='#'>Download</a>
        <a href='#'>Login</a>
        <a href='#'>Register</a>
    </div>
    @endguest

    @auth
    <div class='auth-links'>
        <a href='#'>Home</a>
        <a href='#'>Rooms</a>
        <a href='#'>Profile</a>
        <a href='#'>Log out</a>
    </div>
    @endauth
</nav>