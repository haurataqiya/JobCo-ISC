<header class="navbar navbar-expand-md d-print-none">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
            aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
                <img src="./static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
        </h1>
        <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" />
                    </svg>
                </a>
                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
                    data-bs-toggle="tooltip" data-bs-placement="bottom">
                    <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                        <path
                            d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                    </svg>
                </a>
            </div>
            <div class="nav-item dropdown">
                <a href="/profile" class="nav-link d-flex lh-1 text-reset p-0">
                    <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <div class="d-none d-xl-block ps-2">
                        <div>Paweł Kuna</div>
                        <div class="mt-1 small text-secondary">UI Designer</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</header>
<header class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}"> <a class="nav-link"
                            href="/dashboard">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Home
                            </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                            role="button" aria-expanded="false">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" />
                                    <path
                                        d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                E-Learning
                            </span>
                        </a>
                        {{-- <div class="dropdown-menu">
                        <div class="dropdown-menu-columns">
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./alerts.html">
                                    Alerts
                                </a>
                                <a class="dropdown-item" href="./accordion.html">
                                    Accordion
                                </a>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle"
                                        href="#sidebar-authentication" data-bs-toggle="dropdown"
                                        data-bs-auto-close="outside" role="button"
                                        aria-expanded="false">
                                        Authentication
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./sign-in.html" class="dropdown-item">
                                            Sign in
                                        </a>
                                        <a href="./sign-in-link.html" class="dropdown-item">
                                            Sign in link
                                        </a>
                                        <a href="./sign-in-illustration.html" class="dropdown-item">
                                            Sign in with illustration
                                        </a>
                                        <a href="./sign-in-cover.html" class="dropdown-item">
                                            Sign in with cover
                                        </a>
                                        <a href="./sign-up.html" class="dropdown-item">
                                            Sign up
                                        </a>
                                        <a href="./forgot-password.html" class="dropdown-item">
                                            Forgot password
                                        </a>
                                        <a href="./terms-of-service.html" class="dropdown-item">
                                            Terms of service
                                        </a>
                                        <a href="./auth-lock.html" class="dropdown-item">
                                            Lock screen
                                        </a>
                                        <a href="./2-step-verification.html" class="dropdown-item">
                                            2 step verification
                                        </a>
                                        <a href="./2-step-verification-code.html" class="dropdown-item">
                                            2 step verification code
                                        </a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="./blank.html">
                                    Blank page
                                </a>
                                <a class="dropdown-item" href="./badges.html">
                                    Badges
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./buttons.html">
                                    Buttons
                                </a>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-cards"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        role="button" aria-expanded="false">
                                        Cards
                                        <span
                                            class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./cards.html" class="dropdown-item">
                                            Sample cards
                                        </a>
                                        <a href="./card-actions.html" class="dropdown-item">
                                            Card actions
                                            <span
                                                class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                        </a>
                                        <a href="./cards-masonry.html" class="dropdown-item">
                                            Cards Masonry
                                        </a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="./carousel.html">
                                    Carousel
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./charts.html">
                                    Charts
                                </a>
                                <a class="dropdown-item" href="./colors.html">
                                    Colors
                                </a>
                                <a class="dropdown-item" href="./colorpicker.html">
                                    Color picker
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./datagrid.html">
                                    Data grid
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./datatables.html">
                                    Datatables
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./dropdowns.html">
                                    Dropdowns
                                </a>
                                <a class="dropdown-item" href="./dropzone.html">
                                    Dropzone
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <div class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-error"
                                        data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                        role="button" aria-expanded="false">
                                        Error pages
                                    </a>
                                    <div class="dropdown-menu">
                                        <a href="./error-404.html" class="dropdown-item">
                                            404 page
                                        </a>
                                        <a href="./error-500.html" class="dropdown-item">
                                            500 page
                                        </a>
                                        <a href="./error-maintenance.html" class="dropdown-item">
                                            Maintenance page
                                        </a>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="./flags.html">
                                    Flags
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./inline-player.html">
                                    Inline player
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                            </div>
                            <div class="dropdown-menu-column">
                                <a class="dropdown-item" href="./lightbox.html">
                                    Lightbox
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./lists.html">
                                    Lists
                                </a>
                                <a class="dropdown-item" href="./modals.html">
                                    Modal
                                </a>
                                <a class="dropdown-item" href="./maps.html">
                                    Map
                                </a>
                                <a class="dropdown-item" href="./map-fullsize.html">
                                    Map fullsize
                                </a>
                                <a class="dropdown-item" href="./maps-vector.html">
                                    Map vector
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./markdown.html">
                                    Markdown
                                </a>
                                <a class="dropdown-item" href="./navigation.html">
                                    Navigation
                                </a>
                                <a class="dropdown-item" href="./offcanvas.html">
                                    Offcanvas
                                </a>
                                <a class="dropdown-item" href="./pagination.html">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/pie-chart -->
                                    Pagination
                                </a>
                                <a class="dropdown-item" href="./placeholder.html">
                                    Placeholder
                                </a>
                                <a class="dropdown-item" href="./steps.html">
                                    Steps
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./stars-rating.html">
                                    Stars rating
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                                <a class="dropdown-item" href="./tabs.html">
                                    Tabs
                                </a>
                                <a class="dropdown-item" href="./tags.html">
                                    Tags
                                </a>
                                <a class="dropdown-item" href="./tables.html">
                                    Tables
                                </a>
                                <a class="dropdown-item" href="./typography.html">
                                    Typography
                                </a>
                                <a class="dropdown-item" href="./tinymce.html">
                                    TinyMCE
                                    <span
                                        class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                                </a>
                            </div>
                        </div>
                    </div> --}}
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-message">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M8 9h8" />
                                    <path d="M8 13h6" />
                                    <path
                                        d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Discuss
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Mentoring
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Mentoring
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('profile') ? 'active' : '' }}">
                        <a class="nav-link" href="/profile">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Profil Saya
                            </span>
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('class') ? 'active' : '' }}">
                        <a class="nav-link" href="./class">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Kelas Saya
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./dashboard">
                            <span
                                class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M9 11l3 3l8 -8" />
                                    <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                </svg>
                            </span>
                            <span class="nav-link-title">
                                Buat CV
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
