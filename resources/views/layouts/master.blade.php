<!doctype html>

<html lang="id">
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title> Daftar Siswa</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        @include('layouts.style')
        @include('layouts.script')
    </head>
    <body class="bg-background text-on-background min-h-screen">
        @include('layouts.navbar')
        @include('layouts.daftar')
            <!-- Student List Container -->
        @yield('daftar')
        @include('layouts.fab')
        
        <script>
            // Simple Micro-interaction: Hover effects on list items
            document.querySelectorAll(".group").forEach((item) => {
                item.addEventListener("mouseenter", () => {
                    // Potential for adding visual feedback like subtle background shifts
                });
            });

            // Search highlight mock
            const searchInput = document.querySelector('input[type="text"]');
            searchInput.addEventListener("input", (e) => {
                const query = e.target.value.toLowerCase();
                document.querySelectorAll(".group h3").forEach((name) => {
                    const parent = name.closest(".group");
                    if (name.innerText.toLowerCase().includes(query)) {
                        parent.style.display = "flex";
                    } else {
                        parent.style.display = "none";
                    }
                });
            });
        </script>
    </body>
</html>
