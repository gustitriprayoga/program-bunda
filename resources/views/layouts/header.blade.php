         <!-- app-header -->
         <header class="app-header">

            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">

                <!-- Start::header-content-left -->
                <div class="header-content-left">

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo">
                            <a href="{{ route('dashboard.index') }}" class="header-logo">
                                <img src="assets/images/brand-logos/desktop-logo.png" alt="logo" class="desktop-logo">
                                <img src="assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
                                <img src="assets/images/brand-logos/desktop-dark.png" alt="logo" class="desktop-dark">
                                <img src="assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
                                <img src="assets/images/brand-logos/desktop-white.png" alt="logo" class="desktop-white">
                                <img src="assets/images/brand-logos/toggle-white.png" alt="logo" class="toggle-white">
                            </a>
                        </div>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link -->
                        <a aria-label="Hide Sidebar" class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle" data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="main-header-center  d-none d-lg-block header-link">
                        <input type="text" class="form-control" id="typehead" placeholder="Search for results..."
                            autocomplete="off">
                        <button type="button"  aria-label="button" class="btn pe-1"><i class="fe fe-search" aria-hidden="true"></i></button>
                        <div id="headersearch" class="header-search">
                            <div class="p-3">
                                <div class="">
                                    <p class="fw-semibold text-muted mb-2 fs-13">Recent Searches</p>
                                    <div class="ps-0">
                                        <a  href="javascript:void(0)" class="search-tags"><i class="fe fe-search me-2"></i>People<span></span></a>
                                        <a  href="javascript:void(0)" class="search-tags"><i class="fe fe-search me-2"></i>Pages<span></span></a>
                                        <a  href="javascript:void(0)" class="search-tags"><i class="fe fe-search me-2"></i>Articles<span></span></a>
                                    </div>
                                </div>
                                 <div class="mt-3">
                                    <p class="fw-semibold text-muted mb-3 fs-13">Apps and pages</p>
                                    <ul class="ps-0">
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="full-calendar.html"><i class="fe fe-calendar me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Calendar</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="mail.html"><i class="fe fe-mail me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Mail</span></a>
                                        </li>
                                        <li class="p-1 d-flex align-items-center text-muted mb-3 search-app">
                                            <a class="d-inline-flex align-items-center" href="buttons.html"><i class="fe fe-globe me-2 fs-14 bg-primary-transparent p-2 rounded-circle"></i><span>Buttons</span></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-3">
                                   <p class="fw-semibold text-muted mb-2 fs-13">Links</p>
                                   <ul class="ps-0 list-unstyled mb-0">
                                        <li class="p-1 align-items-center text-muted mb-1 search-app">
                                                <a href="javascript:void(0)" class="text-primary"><u>http://spruko/spruko.com</u></a>
                                        </li>
                                        <li class="p-1 align-items-center text-muted mb-0 pb-0 search-app">
                                                <a href="javascript:void(0)" class="text-primary"><u>http://spruko/spruko.com</u></a>
                                        </li>
                                    </ul>
                               </div>
                            </div>
                            <div class="py-3 border-top px-0">
                                <div class="text-center">
                                    <a href="javascript:void(0)" class="text-primary text-decoration-underline fs-15">View all</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-left -->

                <!-- Start::header-content-right -->
                <div class="header-content-right">

                    <!-- Start::header-element -->
                    <div class="header-element header-search d-lg-none d-block">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal">
                            <i class="fe fe-search header-link-icon"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->


                    <!-- Start::header-element -->
                    <div class="header-element header-theme-mode">
                        <!-- Start::header-link|layout-setting -->
                        <a aria-label="anchor" href="javascript:void(0);" class="header-link layout-setting">
                            <span class="light-layout">
                                <!-- Start::header-link-icon -->
                            <i class="fe fe-moon header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                            <span class="dark-layout">
                                <!-- Start::header-link-icon -->
                            <i class="fe fe-sun header-link-icon"></i>
                                <!-- End::header-link-icon -->
                            </span>
                        </a>
                        <!-- End::header-link|layout-setting -->
                    </div>
                    <!-- End::header-element -->







                    <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link -->
                        <a aria-label="anchor" onclick="openFullscreen();" href="#" class="header-link">
                            <i class="fe fe-minimize full-screen-open header-link-icon"></i>
                            <i class="fe fe-minimize-2 full-screen-close header-link-icon d-none"></i>
                        </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element -->


                    <!-- Start::header-element -->
                    <div class="header-element main-profile-user">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="#" class="header-link dropdown-toggle" id="mainHeaderProfile" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-xxl-2 me-0">
                                    <img src="assets/images/faces/9.jpg" alt="img" width="32" height="32" class="rounded-circle">
                                </div>
                                <div class="d-xxl-block d-none my-auto">
                                    <h6 class="fw-semibold mb-0 lh-1 fs-14">Json Taylor</h6>
                                    <span class="op-7 fw-normal d-block fs-11 text-muted">Web Designer</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 header-profile-dropdown dropdown-menu-end" aria-labelledby="mainHeaderProfile">
                            <li class="drop-heading d-xxl-none d-block">
                                 <div class="text-center">
                                    <h5 class="text-dark mb-0 fs-14 fw-semibold">Json Taylor</h5>
                                    <small class="text-muted">Web Designer</small>
                                </div>
                            </li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="profile.html"><i class="fe fe-user fs-18 me-2 text-primary"></i>Profile</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="mail.html"><i class="fe fe-mail fs-18 me-2 text-primary"></i>Inbox <span class="badge bg-danger ms-auto">25</span></a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="mail-settings.html"><i class="fe fe-settings fs-18 me-2 text-primary"></i>Settings</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="chat.html"><i class="fe fe-headphones fs-18 me-2 text-primary"></i>Support</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="lockscreen.html"><i class="fe fe-lock fs-18 me-2 text-primary"></i>Lockscreen</a></li>
                            <li class="dropdown-item"><a class="d-flex w-100" href="sign-in.html"><i class="fe fe-info fs-18 me-2 text-primary"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element -->

                    <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon -->
                        <a aria-label="anchor" href="#" class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                            <i class="bx bx-cog header-link-icon"></i>
                        </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->

                </div>
                <!-- End::header-content-right -->

            </div>
            <!-- End::main-header-container -->

        </header>
        <!-- /app-header -->
        <!-- Start::app-sidebar -->
