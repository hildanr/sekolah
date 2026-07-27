<!-- FAB -->
        <a href="/add">
            <button
            class="fixed bottom-20 md:bottom-8 right-margin-mobile md:right-margin-desktop bg-primary-container text-on-primary-container h-16 w-16 rounded-2xl shadow-lg flex items-center justify-center hover:scale-105 active:scale-95 transition-all duration-150 z-40 group"
        >
            <span class="material-symbols-outlined" style="font-size: 32px"
                >add</span
            >
            <span
                class="absolute right-full mr-4 bg-on-background text-surface px-3 py-1 rounded-lg text-label-sm opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap pointer-events-none hidden md:block"
                >Tambah Siswa</span
            >
        </button>
        </a>
       
        <!-- BottomNavBar (Only for Mobile) -->
        <nav
            class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center py-2 px-4 bg-surface-container-lowest dark:bg-inverse-surface border-t border-outline-variant dark:border-on-surface-variant z-50"
        >
            <a
                class="flex flex-col items-center justify-center bg-primary-container dark:bg-primary text-on-primary-container dark:text-on-primary rounded-xl px-4 py-1 active:scale-90 duration-200"
                href="#"
            >
                <span class="material-symbols-outlined">group</span>
                <span class="font-label-sm text-label-sm">Students</span>
            </a>
            <a
                class="flex flex-col items-center justify-center text-secondary dark:text-secondary-fixed hover:text-primary dark:hover:text-primary-fixed transition-all active:scale-90 duration-200"
                href="#"
            >
                <span class="material-symbols-outlined">class</span>
                <span class="font-label-sm text-label-sm">Classes</span>
            </a>
            <a
                class="flex flex-col items-center justify-center text-secondary dark:text-secondary-fixed hover:text-primary dark:hover:text-primary-fixed transition-all active:scale-90 duration-200"
                href="#"
            >
                <span class="material-symbols-outlined">settings</span>
                <span class="font-label-sm text-label-sm">Settings</span>
            </a>
        </nav>