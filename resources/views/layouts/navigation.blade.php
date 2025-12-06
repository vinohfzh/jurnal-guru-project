\<nav class="fixed top-0 z-50 w-full bg-neutral-primary-soft border-b border-default">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">

            {{-- Left Section --}}
            <div class="flex items-center justify-start">
                {{-- Sidebar toggle (mobile) --}}
                <button data-drawer-target="top-bar-sidebar" data-drawer-toggle="top-bar-sidebar"
                        aria-controls="top-bar-sidebar"
                        type="button"
                        class="sm:hidden text-heading bg-transparent border border-transparent
                               hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary
                               font-medium rounded-base text-sm p-2">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                              d="M5 7h14M5 12h14M5 17h10"/>
                    </svg>
                </button>

                {{-- Logo --}}
                <a href="/" class="flex ms-2 md:me-24">
                    <span class="self-center text-lg font-semibold">App</span>
                </a>
            </div>

            {{-- Right Section (User Menu) --}}
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <button type="button"
                            class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300"
                            data-dropdown-toggle="dropdown-user">
                        <img class="w-8 h-8 rounded-full"
                             src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                             alt="user photo">
                    </button>

                    {{-- Dropdown --}}
                    <div id="dropdown-user"
                         class="z-50 hidden bg-neutral-primary-medium border border-default-medium
                                rounded-base shadow-lg w-44">
                        <div class="px-4 py-3 border-b" role="none">
                            <p class="text-sm font-medium text-heading">{{ Auth::user()->name }}</p>
                            <p class="text-sm text-body truncate">{{ Auth::user()->email }}</p>
                        </div>

                        <ul class="p-2 text-sm font-medium">
                            <li><a href="/dashboard" class="block p-2 hover:bg-neutral-tertiary rounded">Dashboard</a></li>
                            <li><a href="/profile" class="block p-2 hover:bg-neutral-tertiary rounded">Settings</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="w-full text-left p-2 hover:bg-neutral-tertiary rounded">
                                        Sign out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

        </div>
    </div>
</nav>
