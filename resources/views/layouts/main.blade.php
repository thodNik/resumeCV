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
    <button @click="sidebarOpen = true"
            class="fixed right-6 top-6 z-40 h-10 w-10 rounded bg-white shadow-lg transition-transform duration-300 hover:scale-105 active:scale-95 xl:hidden">
        <svg class="h-6 w-6 mx-auto text-gray-900" fill="none" viewBox="0 0 24 24" stroke-width="2"
             stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7"/>
        </svg>
    </button>

    <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
    <div x-show="sidebarOpen" @keydown.window.escape="sidebarOpen = false" class="relative z-50 lg:hidden" role="dialog"
         aria-modal="true">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-900/80 transition-opacity ease-linear duration-300"
             x-show="sidebarOpen"
             x-transition:enter="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="opacity-100"
             x-transition:leave-end="opacity-0"
        ></div>

        <div class="fixed inset-0 flex">
            <!--
              Off-canvas menu, show/hide based on off-canvas menu state.

              Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
            <div class="relative mr-16 flex w-full max-w-xs flex-1 transform transition ease-in-out duration-300"
                 x-show="sidebarOpen"
                 x-transition:enter="transform -translate-x-full"
                 x-transition:enter-end="transform translate-x-0"
                 x-transition:leave="transform translate-x-0"
                 x-transition:leave-end="transform -translate-x-full"
            >
                <!--
                  Close button, show/hide based on off-canvas menu state.

                  Entering: "ease-in-out duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "ease-in-out duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div class="absolute left-full top-0 flex w-16 justify-center pt-5">
                    <button type="button" class="-m-2.5 p-2.5 transition-opacity ease-in-out duration-300"
                            x-show="sidebarOpen"
                            x-transition:enter="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="opacity-100"
                            x-transition:leave-end="opacity-0"
                            @click="sidebarOpen = false">
                        <span class="sr-only">Close sidebar</span>
                        <svg class="h-6 w-6 text-navbar-text" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-navbar-bg px-6 pb-4">
                    <livewire:sidebar.sidebar/>
                </div>
            </div>
        </div>
    </div>

    <!-- Static sidebar for desktop -->
    <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-52 lg:flex-col">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
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
