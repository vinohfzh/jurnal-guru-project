<nav class="fixed top-0 z-50 w-full bg-white border-b dark:bg-gray-800 dark:border-gray-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3 flex justify-between items-center">

        <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar"
            class="text-gray-500 hover:bg-gray-100 focus:ring-2 focus:ring-gray-200 rounded-lg p-2 sm:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor">
                <path stroke-linecap="round" stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h12"/>
            </svg>
        </button>

        <span class="ml-2 text-xl font-semibold dark:text-white">
            Jurnal Guru
        </span>

        <div class="flex items-center gap-3">

    {{-- NAMA USER --}}
    <span class="text-gray-900 dark:text-gray-100 hidden sm:block">
        {{ Auth::user()->name }}
    </span>

    {{-- USER AVATAR DROPDOWN --}}
    <div class="dropdown dropdown-end">
        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
                <img src="https://i.pravatar.cc/100?u={{ Auth::user()->email }}">
            </div>
        </label>

        <ul tabindex="0" class="menu dropdown-content bg-base-100 rounded-box w-52 shadow">

            <li>
                <a href="{{ route('profile.edit') }}">Profil</a>
            </li>

            <li>
                <a>Pengaturan</a>
            </li>

            <li>
                {{-- FORM LOGOUT POST --}}
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-left w-full">Logout</button>
                </form>
            </li>

        </ul>
    </div>

</div>
    </div>
</nav>
