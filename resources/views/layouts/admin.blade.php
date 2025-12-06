<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Dashboard' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="px-4 py-3 flex items-center justify-between">

            {{-- Sidebar toggle for mobile --}}
            <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                class="md:hidden p-2 text-gray-600 rounded-lg dark:text-gray-400">
                ☰
            </button>

            {{-- Logo --}}
            <span class="text-xl font-semibold dark:text-white">
                JurnalGuru
            </span>

            {{-- User --}}
            <button id="userMenuButton" data-dropdown-toggle="userDropdown"
                class="flex items-center text-sm rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">

                <img class="w-8 h-8 rounded-full"
                     src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}&background=random">
            </button>

            {{-- Dropdown --}}
            <div id="userDropdown" class="hidden z-50 bg-white rounded-lg shadow w-44 dark:bg-gray-700">
                <div class="px-4 py-3">
                    <span class="block text-sm text-gray-900 dark:text-white">{{ Auth::user()->name }}</span>
                    <span class="block text-sm text-gray-500 truncate dark:text-gray-400">{{ Auth::user()->email }}</span>
                </div>
                <ul class="py-2 text-gray-700 dark:text-gray-200">
                    <li>
                        <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                            Settings
                        </a>
                    </li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100 dark:hover:bg-gray-600">
                                Sign Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    {{-- SIDEBAR --}}
    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-16 transition-transform -translate-x-full md:translate-x-0 
               bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">

        <div class="h-full px-3 pb-4 overflow-y-auto">

            <ul class="space-y-2 font-medium">

                <li>
                    <a href="{{ route('dashboard') }}"
                       class="flex items-center p-2 rounded-lg text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('guru.jurnal.index') }}"
                       class="flex items-center p-2 rounded-lg text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Jurnal Mengajar</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('profile.edit') }}"
                       class="flex items-center p-2 rounded-lg text-gray-900 dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Pengaturan</span>
                    </a>
                </li>

            </ul>

        </div>

    </aside>

    {{-- CONTENT --}}
    <main class="p-4 md:ml-64 mt-20">
        {{ $slot }}
    </main>

</body>
</html>
