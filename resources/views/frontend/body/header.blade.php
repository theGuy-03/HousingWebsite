
<nav class="site-nav">

    <div class="container">

        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="index.html" class="logo m-0 float-start">Property</a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="active"><a href="{{ route('index.home') }}">Home</a></li>
                    <li ><a href="{{ route('index.sale') }}">For Sale</a></li>
                    <li ><a href="{{ route('index.rent') }}">Rent</a></li>
                    <li ><a href="{{ route('index.mortgage') }}">Mortgage</a></li>
                    <li><a href="{{ route('all.users') }}">Users</a></li>
                    {{-- <li class="has-children">
                        <a href="properties.html">Properties</a>
                        <ul class="dropdown">
                            <li><a href="#">Buy Property</a></li>
                            <li><a href="#">Sell Property</a></li>
                            <li class="has-children">
                                <a href="#">Dropdown</a>
                                <ul class="dropdown">
                                    <li><a href="#">Sub Menu One</a></li>
                                    <li><a href="#">Sub Menu Two</a></li>
                                    <li><a href="#">Sub Menu Three</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}

                    <li><a href="{{ route('index.about') }}">About</a></li>
                    <li><a href="{{ route('index.contact') }}">Contact Us</a></li>
                    <li class="has-children">
                        @if (Route::has('login'))
                            @auth

                                <a href="{{ url('/profile') }}"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                profile</a>
                                <ul class="dropdown " style="width: 30px padding-left:0%">
                                    <li><a href="{{ route('admin.logout') }}">Logout</a></li>
                                    <li class="has-children"></li>
                                </ul>


                            @else
                                <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                @endif
                            @endauth
                       @endif
                    </li>
                </ul>

                <a href="#" class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none" data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>

            </div>
        </div>
    </div>
</nav>
