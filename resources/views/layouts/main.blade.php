<!DOCTYPE html>
<html class="h-full" lang=lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Thodoris Nikolaidis - Full Stack Web Developer</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full antialiased scroll-smooth bg-neutral-500" x-data="{ sidebarOpen: false }">

<x-mary-toast/>

<div>
    <button
        @click="sidebarOpen = !sidebarOpen"
        aria-haspopup="menu"
        aria-label="Side navigation"
        :aria-expanded="sidebarOpen.toString()"
        aria-controls="nav-menu-1"
        class="fixed right-6 top-6 z-50 h-10 w-10 rounded bg-transparent border-2 border-main-text/50 shadow-lg transition-transform duration-300 hover:scale-105 active:scale-95 lg:hidden"
    >
        <div class="relative flex items-center justify-center h-full">
            <!-- Top line -->
            <span
                aria-hidden="true"
                class="absolute block h-0.5 w-6 bg-main-text/50 transition-all duration-300"
                :class="sidebarOpen ? 'rotate-45 translate-y-0' : '-translate-y-2'"
            ></span>

            <!-- Middle line (disappears when open) -->
            <span
                aria-hidden="true"
                class="absolute block h-0.5 w-6 bg-main-text/50 transition-all duration-300"
                :class="sidebarOpen ? 'opacity-0' : 'opacity-100'"
            ></span>

            <!-- Bottom line -->
            <span
                aria-hidden="true"
                class="absolute block h-0.5 w-6 bg-main-text/50 transition-all duration-300"
                :class="sidebarOpen ? '-rotate-45 translate-y-0' : 'translate-y-2'"
            ></span>
        </div>
    </button>

    <!-- Sidebar Menu -->
    <div x-show="sidebarOpen" @keydown.window.escape="sidebarOpen = false" class="relative z-40 lg:hidden" role="dialog"
         aria-modal="true">
        <div class="fixed inset-0 bg-slate-900/20 transition-opacity ease-linear duration-300"
             x-show="sidebarOpen"
             x-transition.opacity
        ></div>

        <div class="fixed inset-0 flex w-56">
            <div class="relative mr-16 flex w-full max-w-xs flex-1 transform transition ease-in-out duration-300"
                 x-show="sidebarOpen"
                 x-transition:enter-start="transform -translate-x-full"
                 x-transition:enter-end="transform translate-x-0"
                 x-transition:leave-start="transform translate-x-0"
                 x-transition:leave-end="transform -translate-x-full"
            >
                <div class="flex grow flex-col gap-y-5 bg-navbar-bg pb-4">
                    <livewire:sidebar.sidebar/>
                </div>
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-52 lg:flex-col">
        <div class="flex grow flex-col gap-y-5 bg-navbar-bg pb-4">
            <livewire:sidebar.sidebar/>
        </div>
    </div>

    <div class="lg:pl-52">
        <main class="animate-page-enter">
            {{ $slot }}
        </main>
    </div>
</div>

</body>
</html>
