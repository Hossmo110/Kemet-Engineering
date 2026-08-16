<header class="site-header">

    <div class="container-fluid px-5">

        <div class="header-wrapper">

            <!-- Logo -->

            <a href="{{ route('home') }}" class="logo">

                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="KEMET"
                >

            </a>


            <!-- Navigation -->

            <nav>

                <ul class="nav-menu">

                    <li>
                        <a
                            href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'active' : '' }}"
                        >
                            HOME
                        </a>
                    </li>


                    <li>
                        <a
                            href="{{ route('about') }}"
                            class="{{ request()->routeIs('about') ? 'active' : '' }}"
                        >
                            ABOUT US
                        </a>
                    </li>


                    <li>
                        <a
                            href="{{ route('businesses') }}"
                            class="{{ request()->routeIs('businesses') ? 'active' : '' }}"
                        >
                            BUSINESSES
                        </a>
                    </li>


                    <li>
                        <a
                            href="{{ route('innovation') }}"
                            class="{{ request()->routeIs('innovation') ? 'active' : '' }}"
                        >
                            INNOVATION
                        </a>
                    </li>


                    <li>
                        <a
                            href="{{ route('csr') }}"
                            class="{{ request()->routeIs('csr') ? 'active' : '' }}"
                        >
                            CSR
                        </a>
                    </li>


                    <li>
                        <a
                            href="{{ route('contact') }}"
                            class="{{ request()->routeIs('contact') ? 'active' : '' }}"
                        >
                            CONTACT US
                        </a>
                    </li>

                </ul>

            </nav>


            <!-- Get In Touch -->

            <a
                href="{{ route('contact') }}"
                class="header-btn"
            >
                GET IN TOUCH
            </a>

        </div>

    </div>

</header>
