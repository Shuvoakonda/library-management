<!doctype html>
<html lang="en" data-bs-theme="dark">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Library-Dashboard</title>

    <!--plugins-->
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!--Styles-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('../../../../cdn.jsdelivr.net/npm/bootstrap-icons%401.10.3/font/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/semi-dark-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/minimal-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/shadow-theme.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!--start header-->
    <header class="top-header">
        <nav class="navbar navbar-expand justify-content-between">
            <div class="btn-toggle-menu">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <div class="d-lg-block d-none search-bar">
                <button class="btn btn-sm w-100 d-flex align-items-center" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <span class="material-symbols-outlined">search</span>Search
                </button>
            </div>
            <ul class="navbar-nav top-right-menu gap-2">
                <li class="nav-item d-lg-none d-block" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <a class="nav-link" href="javascript:;"><span class="material-symbols-outlined">
                            search
                        </span></a>
                </li>
                <li class="nav-item dark-mode">
                    <a class="nav-link dark-mode-icon" href="javascript:;"><span
                            class="material-symbols-outlined">dark_mode</span></a>
                </li>
                <li class="nav-item dropdown dropdown-app">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"
                        href="javascript:;"><span class="material-symbols-outlined">
                            apps
                        </span></a>
                    <div class="dropdown-menu dropdown-menu-end mt-lg-2 p-0">
                        <div class="app-container p-2 my-2">
                            <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="app-box text-center">
                                            <div class="app-icon">
                                                <img src="assets/images/icons/slack.png" width="30" alt="">
                                            </div>
                                            <div class="app-name">
                                                <p class="mb-0 mt-1">Slack</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="app-box text-center">
                                            <div class="app-icon">
                                                <img src="assets/images/icons/github.png" width="30" alt="">
                                            </div>
                                            <div class="app-name">
                                                <p class="mb-0 mt-1">GitHub</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="app-box text-center">
                                            <div class="app-icon">
                                                <img src="assets/images/icons/google-calendar.png" width="30"
                                                    alt="">
                                            </div>
                                            <div class="app-name">
                                                <p class="mb-0 mt-1">Calendar</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="app-box text-center">
                                            <div class="app-icon">
                                                <img src="assets/images/icons/spotify.png" width="30"
                                                    alt="">
                                            </div>
                                            <div class="app-name">
                                                <p class="mb-0 mt-1">Spotify</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="app-box text-center">
                                            <div class="app-icon">
                                                <img src="assets/images/icons/google-photos.png" width="30"
                                                    alt="">
                                            </div>
                                            <div class="app-name">
                                                <p class="mb-0 mt-1">Photos</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="col">
                                    <a href="javascript:;">
                                        <div class="app-box text-center">
                                            <div class="app-icon">
                                                <img src="assets/images/icons/google.png" width="30"
                                                    alt="">
                                            </div>
                                            <div class="app-name">
                                                <p class="mb-0 mt-1">News</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>


                            </div><!--end row-->

                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="javascript:;"
                        data-bs-toggle="dropdown">
                        <div class="position-relative">
                            <span class="notify-badge">8</span>
                            <span class="material-symbols-outlined">
                                notifications_none
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end mt-lg-2">
                        <a href="javascript:;">
                            <div class="msg-header">
                                <p class="msg-header-title">Notifications</p>
                                <p class="msg-header-clear ms-auto">Marks all as read</p>
                            </div>
                        </a>
                        <div class="header-notifications-list">
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-primary border">
                                        <span class="material-symbols-outlined">
                                            add_shopping_cart
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                                                ago</span></h6>
                                        <p class="msg-info">You have recived new orders</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-danger border">
                                        <span class="material-symbols-outlined">
                                            account_circle
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
                                                ago</span></h6>
                                        <p class="msg-info">5 new user registered</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-success border">
                                        <span class="material-symbols-outlined">
                                            picture_as_pdf
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
                                                ago</span></h6>
                                        <p class="msg-info">The pdf files generated</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-info border">
                                        <span class="material-symbols-outlined">
                                            store
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">New Product Approved <span class="msg-time float-end">2
                                                hrs ago</span></h6>
                                        <p class="msg-info">Your new product has approved</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-warning border">
                                        <span class="material-symbols-outlined">
                                            event_available
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
                                                ago</span></h6>
                                        <p class="msg-info">5.1 min avarage time response</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-danger border">
                                        <span class="material-symbols-outlined">
                                            forum
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
                                                ago</span></h6>
                                        <p class="msg-info">New customer comments recived</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-primary border">
                                        <span class="material-symbols-outlined">
                                            local_florist
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                                                ago</span></h6>
                                        <p class="msg-info">24 new authors joined last week</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-success border">
                                        <span class="material-symbols-outlined">
                                            park
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5
                                                hrs
                                                ago</span></h6>
                                        <p class="msg-info">Successfully shipped your item</p>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="javascript:;">
                                <div class="d-flex align-items-center">
                                    <div class="notify text-warning border">
                                        <span class="material-symbols-outlined">
                                            elevation
                                        </span>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
                                                ago</span></h6>
                                        <p class="msg-info">45% less alerts last 4 weeks</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <a href="javascript:;">
                            <div class="text-center msg-footer">View All</div>
                        </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#ThemeCustomizer"><span
                            class="material-symbols-outlined">
                            settings
                        </span></a>
                </li>
            </ul>
        </nav>
    </header>
    <!--end header-->


    <!--start sidebar-->
    <aside class="sidebar-wrapper">
        <div class="sidebar-header">
            <div class="logo-icon">
                <img src="assets/images/logo-icon.png" class="logo-img" alt="">
            </div>
            <div class="logo-name flex-grow-1">
                <h5 class="mb-0">Library</h5>
            </div>
            <div class="sidebar-close ">
                <span class="material-symbols-outlined">close</span>
            </div>
        </div>
        <div class="sidebar-nav" data-simplebar="true">

            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="{{ route('main_index') }}">
                        <div class="parent-icon">
                        </div>
                        <div class="menu-title">Library Dashboard</div>
                    </a>
                </li>

                
                <a href="{{ route('view_books') }}">
                    <div class="parent-icon">
                    </div>
                    <div class="menu-title"><i class="fa-solid fa-book me-1"></i>View Books</div>
                </a>
                <a href="{{ route('book') }}">
                    <div class="parent-icon">
                    </div>
                    <div class="menu-title"><i class="fa-solid fa-book-open-reader me-1"></i>Book Add</div>
                </a>






                <!--end navigation-->


        </div>
        <div class="sidebar-bottom dropdown dropup-center dropup">
            <div class="dropdown-toggle d-flex align-items-center px-3 gap-3 w-100 h-100" data-bs-toggle="dropdown">
                <div class="user-img">
                    <img src="assets/images/avatars/01.png" alt="">
                </div>
                <div class="user-info">
                    <h5 class="mb-0 user-name">{{ auth()->user()->name }}</h5>
                    <p class="mb-0 user-email">{{ auth()->user()->email }}</p>
                </div>
            </div>
            <ul class="dropdown-menu dropdown-menu-end">
                
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item"><span class="material-symbols-outlined me-2"></span> Logout
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </aside>
    <!--end sidebar-->


    <!--start main content-->
    <main class="page-content">

        @yield('content')


    </main>
    <!--end main content-->


    <!--start overlay-->
    <div class="overlay btn-toggle-menu"></div>
    <!--end overlay-->








    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <!--BS Scripts-->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>


</html>
