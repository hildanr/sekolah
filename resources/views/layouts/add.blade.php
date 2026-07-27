

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        <!-- Google Fonts: Plus Jakarta Sans -->
        <link href="https://fonts.googleapis.com" rel="preconnect" />
        <link
            crossorigin=""
            href="https://fonts.gstatic.com"
            rel="preconnect"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
            rel="stylesheet"
        />
        <!-- Material Symbols Outlined -->
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
            rel="stylesheet"
        />
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <!-- Tailwind Config Verbatim -->
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "on-primary-fixed": "#00174b",
                            tertiary: "#006058",
                            "surface-tint": "#0053db",
                            "on-primary-container": "#eeefff",
                            "secondary-fixed": "#dbe4ea",
                            "secondary-container": "#dbe4ea",
                            "on-secondary-fixed-variant": "#3f484d",
                            "on-secondary-container": "#5d666b",
                            "surface-container-highest": "#d3e4fe",
                            "on-tertiary-fixed": "#00201d",
                            "tertiary-fixed-dim": "#6bd8cb",
                            primary: "#004ac6",
                            "tertiary-container": "#007b71",
                            error: "#ba1a1a",
                            "primary-fixed-dim": "#b4c5ff",
                            "on-background": "#0b1c30",
                            "on-surface-variant": "#434655",
                            "on-primary": "#ffffff",
                            "surface-container-low": "#eff4ff",
                            "on-tertiary-fixed-variant": "#005049",
                            "on-tertiary-container": "#b3fff3",
                            "on-error": "#ffffff",
                            "surface-container-high": "#dce9ff",
                            "on-tertiary": "#ffffff",
                            secondary: "#576065",
                            "on-secondary": "#ffffff",
                            "on-error-container": "#93000a",
                            "primary-container": "#2563eb",
                            "primary-fixed": "#dbe1ff",
                            "surface-variant": "#d3e4fe",
                            "inverse-on-surface": "#eaf1ff",
                            "tertiary-fixed": "#89f5e7",
                            surface: "#f8f9ff",
                            "on-surface": "#0b1c30",
                            "inverse-primary": "#b4c5ff",
                            background: "#f8f9ff",
                            "surface-dim": "#cbdbf5",
                            "outline-variant": "#c3c6d7",
                            "surface-container-lowest": "#ffffff",
                            "inverse-surface": "#213145",
                            "secondary-fixed-dim": "#bfc8ce",
                            "error-container": "#ffdad6",
                            "on-secondary-fixed": "#141d21",
                            "surface-bright": "#f8f9ff",
                            "surface-container": "#e5eeff",
                            outline: "#737686",
                            "on-primary-fixed-variant": "#003ea8",
                        },
                        borderRadius: {
                            DEFAULT: "0.25rem",
                            lg: "0.5rem",
                            xl: "0.75rem",
                            full: "9999px",
                        },
                        spacing: {
                            "row-padding": "1rem 1.5rem",
                            "margin-mobile": "1rem",
                            "margin-desktop": "2.5rem",
                            "container-max": "1200px",
                            gutter: "1.5rem",
                        },
                        fontFamily: {
                            "body-sm": ["Plus Jakarta Sans"],
                            "headline-lg": ["Plus Jakarta Sans"],
                            "body-md": ["Plus Jakarta Sans"],
                            "label-md": ["Plus Jakarta Sans"],
                            "headline-lg-mobile": ["Plus Jakarta Sans"],
                            "headline-md": ["Plus Jakarta Sans"],
                            "label-sm": ["Plus Jakarta Sans"],
                        },
                        fontSize: {
                            "body-sm": [
                                "14px",
                                { lineHeight: "20px", fontWeight: "400" },
                            ],
                            "headline-lg": [
                                "30px",
                                {
                                    lineHeight: "38px",
                                    letterSpacing: "-0.02em",
                                    fontWeight: "700",
                                },
                            ],
                            "body-md": [
                                "16px",
                                { lineHeight: "24px", fontWeight: "400" },
                            ],
                            "label-md": [
                                "14px",
                                {
                                    lineHeight: "20px",
                                    letterSpacing: "0.01em",
                                    fontWeight: "600",
                                },
                            ],
                            "headline-lg-mobile": [
                                "24px",
                                {
                                    lineHeight: "32px",
                                    letterSpacing: "-0.01em",
                                    fontWeight: "700",
                                },
                            ],
                            "headline-md": [
                                "20px",
                                { lineHeight: "28px", fontWeight: "600" },
                            ],
                            "label-sm": [
                                "12px",
                                { lineHeight: "16px", fontWeight: "500" },
                            ],
                        },
                    },
                },
            };
        </script>
        <style>
            body {
                font-family: "Plus Jakarta Sans", sans-serif;
                background-color: #f0f9ff; /* Light blue accent background */
            }
            .material-symbols-outlined {
                font-variation-settings:
                    "FILL" 0,
                    "wght" 400,
                    "GRAD" 0,
                    "opsz" 24;
                display: inline-block;
                line-height: 1;
            }
            .custom-shadow {
                box-shadow: 0 4px 20px -2px rgba(0, 74, 198, 0.05);
            }
            /* Hide scrollbar for Chrome, Safari and Opera */
            .no-scrollbar::-webkit-scrollbar {
                display: none;
            }
            /* Hide scrollbar for IE, Edge and Firefox */
            .no-scrollbar {
                -ms-overflow-style: none; /* IE and Edge */
                scrollbar-width: none; /* Firefox */
            }
        </style>
        <style>
            body {
                min-height: max(884px, 100dvh);
            }
        </style>
    </head>
    <body
        class="bg-background text-on-surface min-h-screen flex flex-col items-center"
    >
        <!-- TopAppBar -->
        <header
            class="fixed top-0 z-50 w-full bg-surface border-b border-outline-variant"
        >
            <div
                class="flex justify-between items-center px-row-padding h-16 w-full max-w-container-max mx-auto"
            >
                <div class="flex items-center gap-4">
                    <button
                        class="material-symbols-outlined text-primary hover:bg-surface-container transition-colors p-2 rounded-full"
                    >
                        arrow_back
                    </button>
                    <h1 class="font-headline-md text-headline-md text-primary">
                        Tambah Siswa
                    </h1>
                </div>
                <div class="flex items-center">
                    <div
                        class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center overflow-hidden"
                    >
                        <span
                            class="material-symbols-outlined text-on-primary-container"
                            >school</span
                        >
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content Canvas -->
        <main
            class="flex-1 w-full max-w-container-max pt-20 pb-32 px-margin-mobile md:px-margin-desktop"
        >
            <div class="max-w-3xl mx-auto">
                <!-- Form Card -->
                @yield('AddMurid');
                <!-- Descriptive Aesthetic Illustration -->
                <div
                    class="mt-12 rounded-2xl overflow-hidden h-48 md:h-64 border border-outline-variant relative"
                >
                    <div
                        class="w-full h-full bg-cover bg-center"
                        data-alt="A bright and airy classroom scene with modern ergonomic wooden desks and large windows letting in soft natural morning light. The color palette is clean with light blue accents, white surfaces, and pale wood tones. The atmosphere is quiet, organized, and academic, representing a high-end educational environment."
                        style="
                            background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuARvnWw9vymccb4TzeU0UJJh7LlkvfZ9iWF91R3C0yqRqzJMpF6bG2qypkN8bCIXjwMMqG7ZelB8tjRJEfFwFvWomXn8viepEzd3tsgOZ0u4U9amX4e74WKJm1BaiK7-zfGqG5f4F-lBAlso6mxXrmWwBa-tGkIJVnQTOrFCDeu27F2k_1cIyqKCqWq1-q3trRapxyDGqdmRS04IDPB_pAK3jsljJUAqRFFp6v1t--bYSzOkTWHh1LshKmWFGqTAdridI4RWB3dI8bW&quot;);
                        "
                    ></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-background/80 to-transparent"
                    ></div>
                </div>
            </div>
        </main>
        <!-- BottomNavBar (Shared Component) -->
        <nav
            class="fixed bottom-0 w-full z-50 bg-surface border-t border-outline-variant flex justify-around items-center py-2 px-margin-mobile md:px-margin-desktop"
        >
            <!-- Students Tab (Inactive) -->
            <a
                class="flex flex-col items-center justify-center text-secondary px-4 py-1 hover:bg-surface-container-high transition-colors rounded-full transition-transform duration-200 active:scale-90"
                href="#"
            >
                <span class="material-symbols-outlined">group</span>
                <span class="font-label-sm text-label-sm">Students</span>
            </a>
            <!-- Attendance Tab (Inactive) -->
            <a
                class="flex flex-col items-center justify-center text-secondary px-4 py-1 hover:bg-surface-container-high transition-colors rounded-full transition-transform duration-200 active:scale-90"
                href="#"
            >
                <span class="material-symbols-outlined">event_available</span>
                <span class="font-label-sm text-label-sm">Attendance</span>
            </a>
            <!-- Add New Tab (Active State per JSON Logic) -->
            <a
                class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-4 py-1 transition-transform duration-200 active:scale-90"
                href="#"
            >
                <span
                    class="material-symbols-outlined"
                    style="font-variation-settings: &quot;FILL&quot; 1"
                    >person_add</span
                >
                <span class="font-label-sm text-label-sm">Add New</span>
            </a>
        </nav>
    </body>
</html>
