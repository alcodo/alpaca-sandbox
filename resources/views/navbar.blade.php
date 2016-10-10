<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="is-sidebar-left mobilebutton navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                <img src="/assets/images/logo.png" alt="Logo" class="logo"/>
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

                @if(Auth::user() && Auth::user()->hasRole('admin'))
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            @if(view()->exists('page::cmf.menu'))
                                @include('page::cmf.menu')
                            @endif
                            @if(view()->exists('gallery::cmf.menu'))
                                <li role="separator" class="divider"></li>
                                @include('gallery::cmf.menu')
                            @endif
                            @if(view()->exists('user::cmf.menu'))
                                <li role="separator" class="divider"></li>
                                @include('user::cmf.menu')
                            @endif
                            @if(view()->exists('video::cmf.menu'))
                                <li role="separator" class="divider"></li>
                                @include('video::cmf.menu')
                            @endif
                            @if(view()->exists('block::cmf.menu'))
                                <li role="separator" class="divider"></li>
                                @include('block::cmf.menu')
                            @endif
                            @if(view()->exists('menu::cmf.menu'))
                                <li role="separator" class="divider"></li>
                                @include('menu::cmf.menu')
                            @endif
                            @if(view()->exists('forum::cmf.menu'))
                                <li role="separator" class="divider"></li>
                                @include('forum::cmf.menu')
                            @endif
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="header-wrapper-bottom"></div>
</nav>