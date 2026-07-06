<body id="kt_app_body" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true"
    data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-sidebar-stacked="true" data-kt-app-sidebar-secondary-enabled="false"
    data-kt-app-toolbar-enabled="true" class="app-default">

    <div class="d-flex flex-column flex-column-fluid">

        <div id="kt_app_toolbar" class="app-toolbar py-4 py-lg-8" data-kt-sticky="true"
            data-kt-sticky-name="app-toolbar-sticky" data-kt-sticky-offset="{default: 'false', lg: '300px'}">
            \
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack flex-wrap">
                <div class="d-flex ms-auto align-items-right gap-2 gap-lg-3">
                    <!--begin::Search-->
                    <div id="kt_header_search" class="header-search d-flex align-items-stretch"
                        data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter"
                        data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false"
                        data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                        <!--begin::Search toggle-->
                        <div class="d-flex align-items-right" data-kt-search-element="toggle"
                            id="kt_header_search_toggle">
                            <div class="btn btn-sm h-40px w-40px btn-icon btn-color-primary bg-body">
                                <i class="ki-outline ki-magnifier fs-1"></i>
                            </div>
                        </div>
                        <!--end::Search toggle-->
                        <!--begin::Menu-->
                        <div data-kt-search-element="content"
                            class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                            <!--begin::Wrapper-->
                            <div data-kt-search-element="wrapper">
                                <!--begin::Form-->
                                <form data-kt-search-element="form" class="w-100 position-relative mb-3"
                                    autocomplete="off">
                                    <!--begin::Icon-->
                                    <i
                                        class="ki-outline ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"></i>
                                    <!--end::Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="search-input form-control form-control-flush ps-10"
                                        name="search" value="" placeholder="Search..."
                                        data-kt-search-element="input" />
                                    <!--end::Input-->
                                    <!--begin::Spinner-->
                                    <span
                                        class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1"
                                        data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                                    </span>
                                    <!--end::Spinner-->
                                    <!--begin::Reset-->
                                    <span
                                        class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none"
                                        data-kt-search-element="clear">
                                        <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>
                                    </span>
                                </form>
                                <!--end::Form-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200 mb-6"></div>


                                <!--end::Recently viewed-->
                                <!--begin::Empty-->
                                <div data-kt-search-element="empty" class="text-center d-none">
                                    <!--begin::Icon-->
                                    <div class="pt-10 pb-10">
                                        <i class="ki-outline ki-search-list fs-4x opacity-50"></i>
                                    </div>
                                    <!--end::Icon-->
                                    <!--begin::Message-->
                                    <div class="pb-15 fw-semibold">
                                        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                        <div class="text-muted fs-7">Please try again with a different query</div>
                                    </div>
                                    <!--end::Message-->
                                </div>

                                <div class="d-flex ">
                                    <button type="reset"
                                        class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                        data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                    <a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary"
                                        data-kt-search-element="advanced-options-form-search">Search</a>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="kt_app_sidebar" class="app-sidebar" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
                data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="dalase"
                data-kt-drawer-width="auto" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
                <!--begin::Sidebar primary-->
                <div class="app-sidebar-primary">
                    <!--begin::Logo-->
                    <div class="app-sidebar-logo d-none d-md-flex flex-center pt-10 pb-2" id="kt_app_sidebar_logo">
                        <!--begin::Logo image-->
                        <a href="">
                            <img alt="Logo" src="assets/media/logos/default-small.svg" class="h-30px" />
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Logo-->
                    <!--begin::Primary menu-->
                    <div class="app-sidebar-menu flex-grow-1 hover-scroll-overlay-y scroll-ps mx-2 my-5"
                        id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto"
                        data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
                        data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px">
                        <!--begin::Menu-->
                        <div id="kt_aside_menu"
                            class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-6"
                            data-kt-menu="true">

                            <!-- ITEM 1: INICIO -->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item py-2">

                                <span class="menu-link menu-center">
                                    <span class="menu-icon me-0">
                                        <i class="ki-outline ki-home-2 fs-2x"></i>
                                    </span>
                                </span>

                                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <span class="menu-section fs-5 fw-bolder ps-1 py-1"><a
                                                    href="{{ route('curso') }}">Inicio</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- ITEM 2: CURSOS -->
                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item py-2">

                                <span class="menu-link menu-center">
                                    <span class="menu-icon me-0">
                                        <i class="ki-outline ki-book fs-2x"></i>
                                    </span>
                                </span>

                                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">
                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <span class="menu-section fs-5 fw-bolder ps-1 py-1">Todos los cursos</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="right-start" class="menu-item py-2">

                                <span class="menu-link menu-center">
                                    <span class="menu-icon me-0">
                                        <i class="ki-outline ki-document fs-2x"></i>
                                    </span>
                                </span>

                                <div class="menu-sub menu-sub-dropdown px-2 py-4 w-250px mh-75 overflow-auto">

                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <a class="menu-link fs-5 fw-bolder ps-1 py-1"
                                                href="{{ route('crearcurso') }}">
                                                Crear curso
                                            </a>
                                        </div>
                                    </div>

                                    <div class="menu-item">
                                        <div class="menu-content">
                                            <a class="menu-link fs-5 fw-bolder ps-1 py-2"
                                                href="{{ route('maestros') }}">
                                                Registrar maestro
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>

                        <!--end::Menu-->
                    </div>
                    <!--end::Primary menu-->
                    <!--begin::Footer-->
                    <div class="d-flex flex-column flex-center pb-4 pb-lg-8" id="kt_app_sidebar_footer">
                        <!--begin::User menu-->
                        <div class="cursor-pointer symbol symbol-40px symbol-circle"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-attach="parent"
                            data-kt-menu-placement="right-end">
                            <img src="assets/media/avatars/300-2.jpg" alt="user" />
                        </div>
                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-2.jpg" />
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">Max Smith
                                            <span
                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                        </div>
                                        <a href="#"
                                            class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="account/overview.html" class="menu-link px-5">Mi perfil</a>
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->

                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-end" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title">Mi subcripciones</span>
                                    <span class="menu-arrow"></span>
                                </a>
                            </div>

                            <!--end::Menu item-->
                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">Mode
                                        <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                            <i class="ki-outline ki-night-day theme-light-show fs-2"></i>
                                            <i class="ki-outline ki-moon theme-dark-show fs-2"></i>
                                        </span></span>
                                </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-night-day fs-2"></i>
                                            </span>
                                            <span class="menu-title">Light</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-moon fs-2"></i>
                                            </span>
                                            <span class="menu-title">Dark</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-outline ki-screen fs-2"></i>
                                            </span>
                                            <span class="menu-title">System</span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu item-->
                            <!--begin::Menu item-->


                            <!--end::Menu item-->
                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Cerrrar seción') }}
                                    </x-dropdown-link>
                                </form>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->
                    </div>
                    <!--end::Footer-->

                </div>
            </div>
        </div>
</body>
