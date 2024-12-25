<header x-data="{ scrolled: false, sidebarOpen: false }" @click.away="sidebarOpen = false" x-init="const updateScroll = () => {
    const screenWidth = window.innerWidth;
    const scrollThreshold = screenWidth <= 768 ? (screenWidth < 400 ? 0 : 50) : 55;
    scrolled = window.scrollY > scrollThreshold;
};

updateScroll();

window.addEventListener('scroll', updateScroll);
window.addEventListener('resize', updateScroll);"
    :class="{ 'header-compact': scrolled }">
    <div class="header-inner main-container">
        <div class="flex items-center flex-row gap-4">
            {{-- <a href="/"><img src="{{ asset('icons/header-logo.svg') }}" class="header-logo" alt="Logo"></a> --}}
            <a href="/">
                <div class="grid grid-cols-1 logo-name">
                    logo name
                </div>
            </a>

        </div>

        <!-- Show the menu icon on screens less than md -->
        <button class="md:hidden" @click="sidebarOpen = !sidebarOpen">

            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"
                class="w-8 h-8 black-menu-icon">
                <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"
                    fill="#7f2854 !important" />
            </svg>
        </button>
        <!-- Sidebar -->
        <div class="sidebar md:hidden" :class="{ 'open': sidebarOpen }">
            {{-- <a href="/"><img src="{{ asset('icons/header-logo.svg') }}" class="sidebar-logo px-3"
                    alt="Logo"></a> --}}
            <ul class="flex flex-col gap-2">

                <li class="inline-flex py-2 px-3">
                    <a href="/#welcome-to-my-site" class="side-bar-text " data-close-sidebar>Home</a>
                </li>


                <li class="inline-flex py-2 px-3">
                    <a href="/#sport" class="side-bar-text" data-close-sidebar>Sport</a>
                </li>
                <li class="inline-flex py-2 px-3">
                    <a href="/#health" class="side-bar-text" data-close-sidebar>Health</a>
                </li>
                <li class="inline-flex py-2 px-3">
                    <a href="/#policits" class="side-bar-text" data-close-sidebar>Politics</a>
                </li>
                <li class="inline-flex py-2 px-3">
                    <a href="/#tech" class="side-bar-text" data-close-sidebar>Tech</a>
                </li>


            </ul>
        </div>
        <!-- End Sidebar -->

        <!-- Main Navigation -->
        <nav class="main-navigation hidden md:flex">
            <ul class="flex flex-row gap-2">
                <li class="inline-flex py-2 px-3 header-i">
                    <a href="/">Home</a>
                </li>

                <li class="inline-flex py-2 px-3 header-i">
                    <a href="/#sport">Tech</a>
                </li>
                <li class="inline-flex py-2 px-3 header-i ">
                    <a href="/#health">Politics</a>
                </li>
                <li class="inline-flex py-2 px-3 header-i ">
                    <a href="/#policits">Sport</a>
                </li>
                <li class="inline-flex py-2 px-3 header-i ">
                    <a href="/#beauty">Health</a>
                </li>


            </ul>
        </nav>
        <!-- End Main Navigation -->
    </div>
</header>
