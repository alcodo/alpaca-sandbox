<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="is-sidebar-left mobilebutton navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="logo">
                <img src="/assets/images/logo.png" alt="Logo"/>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="navbar-header">
            <ul class="nav navbar-nav navbar-right navtop">
                <li><a href="/">Home</a></li>
                <li class="{{ isActiveRoute('contact.show') }}">
                    <a href="{{ route('contact.show') }}">Contact</a>
                </li>
                @if (Auth::check())
                    <li><a href="/logout">Logout</a></li>
                @else
                    <li class="{{ isActiveRoute('user.register') }}">
                        <a href="{{ route('user.register') }}">Register</a>
                    </li>
                    <li class="{{ isActiveRoute('user.login') }}">
                        <a href="{{ route('user.login') }}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="header-wrapper-bottom"></div>
</nav>