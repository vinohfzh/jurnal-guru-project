<aside id="top-bar-sidebar"
       class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
       aria-label="Sidebar">

    <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">

        <ul class="space-y-2 font-medium">

            <li>
                <a href="{{ route('dashboard') }}"
                   class="flex items-center px-2 py-1.5 rounded-base hover:bg-neutral-tertiary">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-4 0h4"/>
                    </svg>
                    <span class="ms-3">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="{{ route('guru.jurnal.index') }}"
                   class="flex items-center px-2 py-1.5 hover:bg-neutral-tertiary rounded-base">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2"
                              d="M4 6h16M4 10h16M4 14h10M4 18h8"/>
                    </svg>
                    <span class="ms-3">Jurnal Mengajar</span>
                </a>
            </li>

        </ul>
    </div>

</aside>
