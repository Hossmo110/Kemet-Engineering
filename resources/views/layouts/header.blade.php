
<header class="site-header">
    <div class="container-fluid px-5">
        <div class="header-wrapper">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="logo">
                <img
                    src="{{ asset('images/Transparent KEMET Logo with Gold Ankh.png') }}"
                    alt="KEMET"
                >
            </a>

            <!-- Mobile Menu Button -->
            <button
                class="mobile-menu-toggle"
                type="button"
                aria-label="Open navigation menu"
                aria-expanded="false"
                aria-controls="mobile-navigation"
            >
                <span></span>
                <span></span>
                <span></span>
            </button>

            <!-- Desktop Navigation -->
            <nav class="desktop-navigation">
                <ul class="nav-menu">
                    <li>
                        <a href="{{ route('home') }}"
                           class="{{ request()->routeIs('home') ? 'active' : '' }}">
                            HOME
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('about') }}"
                           class="{{ request()->routeIs('about') ? 'active' : '' }}">
                            ABOUT US
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('businesses') }}"
                           class="{{ request()->routeIs('businesses') ? 'active' : '' }}">
                            OUR BUSINESSES
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('innovation') }}"
                           class="{{ request()->routeIs('innovation') ? 'active' : '' }}">
                            INNOVATION
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('csr') }}"
                           class="{{ request()->routeIs('csr') ? 'active' : '' }}">
                            CSR
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Desktop Contact Button -->
            <a href="{{ route('contact') }}" class="header-btn desktop-contact">
                CONTACT US
            </a>

        </div>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div class="mobile-menu-overlay"></div>

<!-- Mobile Side Navigation -->
<aside class="mobile-navigation" id="mobile-navigation">

    <div class="mobile-navigation-header">
        <span>MENU</span>

        <button
            type="button"
            class="mobile-menu-close"
            aria-label="Close navigation menu"
        >
            &times;
        </button>
    </div>

    <ul class="mobile-nav-menu">
        <li>
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'active' : '' }}">
                HOME
            </a>
        </li>

        <li>
            <a href="{{ route('about') }}"
               class="{{ request()->routeIs('about') ? 'active' : '' }}">
                ABOUT US
            </a>
        </li>

        <li>
            <a href="{{ route('businesses') }}"
               class="{{ request()->routeIs('businesses') ? 'active' : '' }}">
                OUR BUSINESSES
            </a>
        </li>

        <li>
            <a href="{{ route('innovation') }}"
               class="{{ request()->routeIs('innovation') ? 'active' : '' }}">
                INNOVATION
            </a>
        </li>

        <li>
            <a href="{{ route('csr') }}"
               class="{{ request()->routeIs('csr') ? 'active' : '' }}">
                CSR
            </a>
        </li>

        <li>
            <a href="{{ route('contact') }}"
               class="{{ request()->routeIs('contact') ? 'active' : '' }}">
                CONTACT US
            </a>
        </li>
    </ul>

    <a href="{{ route('contact') }}" class="mobile-contact-btn">
        GET IN TOUCH
    </a>

</aside>
