<header x-data="{ scrolled: false, sidebarOpen: false }" @click.away="sidebarOpen = false" x-init="const updateScroll = () => {
    const screenWidth = window.innerWidth;
    const scrollThreshold = screenWidth <= 768 ? (screenWidth < 400 ? 0 : 50) : 55;
    scrolled = window.scrollY >
        scrollThreshold;
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
                    NEWS
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
            <div class="flex flex-col gap-2 py-2 px-3">
                <a href="/">Home</a>
            </div>
            @isset($categories)
                @foreach ($categories as $category)
                    <div class="flex flex-col gap-2 py-2 px-3">
                        <a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                    </div>
                @endforeach
            @endisset
            <div class="flex flex-col gap-2 py-2 px-3 bg-[#135D66] text-white hover:bg-[#4d99a3]">
                <a href="/">Contact Us</a>
            </div>
        </div>
        <!-- End Sidebar -->

        <!-- Main Navigation -->
        <nav class="main-navigation hidden md:flex">
            <li class="inline-flex py-2 px-3 header-i">
                <a href="/">Home</a>
            </li>
            @isset($categories)
                @foreach ($categories as $category)
                    <li class="inline-flex py-2 px-3 header-i">
                        <a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a>
                    </li>
                @endforeach
            @endisset
            <li class="inline-flex py-2 px-3  bg-[#135D66] text-white hover:bg-[#4d99a3]">
                <a href="/#">Contact Us</a>
            </li>
        </nav>
        <!-- End Main Navigation -->
    </div>
</header>
