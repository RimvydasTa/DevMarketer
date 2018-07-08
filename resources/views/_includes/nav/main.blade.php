<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-start">
            <a href="{{route('home')}}" class="navbar-item">
                <img src="{{asset('images/devmarketer-logo.png')}}" alt="DevMarketer Logo">
            </a>
            <a href="" class="navbar-item is-tab is-hidden-mobile m-l-10">Learn</a>
            <a href="" class="navbar-item is-tab is-hidden-mobile">Discuss</a>
            <a href="" class="navbar-item is-tab is-hidden-mobile">Share</a>
        </div>
        <div class="navbar-end" style="overflow: visible">
            @if(Auth::guest())
                <a href="{{route('login')}}" class="navbar-item is-tab">Login</a>
                <a href="{{route('register')}}" class="navbar-item is-tab">Sign up!</a>
            @else
                <button class="dropdown is-aligned-right navbar-item is-tab">
                    Hey Alex <span class="icon"><i class="fa fa-caret-down"></i></span>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="">
                                <span class="icon"><i class="fa m-r-10 fa-fw fa-user-circle-o"></i></span> Profile
                            </a>
                        </li>
                        <li><a href="">
                                <span class="icon"><i class="fa m-r-10 fa-fw fa-bell"></i></span>
                                Notifications
                            </a></li>
                        <li><a href="{{route('manage.dashboard')}}">
                                <span class="icon"><i class="fa m-r-10 fa-fw fa-cog"></i></span>
                                Manage
                            </a></li>
                        <li class="seporator"></li>
                        <li><a href="">
                                <span class="icon"><i class="fa m-r-10 fa-fw fa-sign-out"></i></span>
                                Logout
                            </a></li>
                    </ul>
                </button>
            @endif
        </div>
    </div>
</nav>