<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pivot Pilates - Schedule</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600&amp;family=Cabinet+Grotesk:wght@600;700&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "surface-container-highest": "#e0e3e5",
                        "on-tertiary-container": "#ffd4d3",
                        "on-error": "#ffffff",
                        "on-primary-fixed-variant": "#005236",
                        "surface-bright": "#f7fafc",
                        "tertiary": "#793536",
                        "outline": "#6f7a72",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#ffdad8",
                        "primary-fixed": "#a5f3ca",
                        "inverse-on-surface": "#eef1f4",
                        "error-container": "#ffdad6",
                        "on-primary-container": "#a1efc7",
                        "on-secondary-container": "#61665e",
                        "secondary-fixed-dim": "#c3c8be",
                        "secondary-fixed": "#dfe4da",
                        "inverse-surface": "#2d3133",
                        "surface-container-high": "#e6e8eb",
                        "tertiary-container": "#964c4c",
                        "surface-container-low": "#f1f4f6",
                        "on-secondary": "#ffffff",
                        "surface-dim": "#d7dadd",
                        "primary-fixed-dim": "#8ad6af",
                        "on-tertiary": "#ffffff",
                        "surface-tint": "#1a6b4b",
                        "on-error-container": "#93000a",
                        "primary-container": "#1f6f4f",
                        "surface-container-lowest": "#ffffff",
                        "on-surface-variant": "#3f4943",
                        "surface-variant": "#e0e3e5",
                        "secondary-container": "#dfe4da",
                        "inverse-primary": "#8ad6af",
                        "surface-container": "#ebeef1",
                        "secondary": "#5b6058",
                        "surface": "#f7fafc",
                        "outline-variant": "#bfc9c1",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#3c070b",
                        "on-tertiary-fixed-variant": "#743233",
                        "on-secondary-fixed": "#181d17",
                        "on-secondary-fixed-variant": "#434841",
                        "on-surface": "#181c1e",
                        "on-primary-fixed": "#002114",
                        "tertiary-fixed-dim": "#ffb3b1",
                        "background": "#f7fafc",
                        "primary": "#005639",
                        "on-background": "#181c1e"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "gutter": "16px",
                        "md": "16px",
                        "xl": "32px",
                        "xs": "8px",
                        "lg": "24px",
                        "xxl": "48px",
                        "margin-desktop": "32px",
                        "margin-mobile": "16px",
                        "max-width": "1280px",
                        "sm": "12px",
                        "base": "4px"
                    },
                    "fontFamily": {
                        "label": ["Inter Tight", "sans-serif"],
                        "headline-lg": ["Cabinet Grotesk", "sans-serif"],
                        "headline-md": ["Cabinet Grotesk", "sans-serif"],
                        "body-sm": ["Inter Tight", "sans-serif"],
                        "body-md": ["Inter Tight", "sans-serif"],
                        "headline-lg-mobile": ["Cabinet Grotesk", "sans-serif"],
                        "headline-sm": ["Cabinet Grotesk", "sans-serif"],
                        "display": ["Cabinet Grotesk", "sans-serif"],
                        "body-lg": ["Inter Tight", "sans-serif"]
                    },
                    "fontSize": {
                        "label": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "1.4", "letterSpacing": "0em", "fontWeight": "500" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "letterSpacing": "0em", "fontWeight": "400" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "headline-sm": ["20px", { "lineHeight": "1.4", "letterSpacing": "0em", "fontWeight": "600" }],
                        "display": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "letterSpacing": "-0.01em", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        /* Hide scrollbar for horizontal scrolling elements */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body-md antialiased min-h-screen flex flex-col selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopAppBar -->
    <header
        class="fixed top-0 w-full z-50 bg-surface border-b border-outline-variant flex justify-between items-center h-16 px-margin-mobile md:px-margin-desktop shadow-[0_4px_24px_rgba(24,28,30,0.02)]">
        <div class="flex items-center gap-4">
            <button class="flex items-center justify-center text-primary hover:opacity-80 transition-opacity">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">location_on</span>
            </button>
            <h1
                class="font-headline-sm text-headline-sm-mobile md:text-headline-sm tracking-tighter text-primary uppercase">
                PIVOT PILATES</h1>
        </div>
        <!-- Desktop Nav (Hidden on Mobile) -->
        <nav class="hidden md:flex items-center gap-lg">
            <a class="font-label text-label text-on-surface-variant hover:text-primary transition-colors"
                href="#">HOME</a>
            <a class="font-label text-label text-primary flex flex-col items-center after:content-[''] after:w-1 after:h-1 after:bg-primary after:rounded-full after:mt-1"
                href="#">SCHEDULE</a>
            <a class="font-label text-label text-on-surface-variant hover:text-primary transition-colors"
                href="#">MEMBERSHIP</a>
            <div
                class="w-8 h-8 rounded-full border border-outline-variant bg-surface-container-high overflow-hidden ml-4 cursor-pointer hover:border-primary transition-colors">
                <img class="w-full h-full object-cover"
                    data-alt="A clean, minimalist profile avatar placeholder featuring a soft geometric shape in cool pine green tones, suitable for a premium fitness app user interface."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCjKdYvqNG2z7f85Pg0483PXylhZKqIGYwDb_do0PMzHxxTYf78aWgyeOenhwGt_GIhX3jJ0ed0ilRj_Ri1fRS-aIh_3rXvz7lOVDCfRkxcZW7dLdo3NUz7y16XkxtGNyqVwEP2BtssNaA2PfJc67uk-jjNud6ub07BnPjseDr495Qd11UcBAkUu_FbU1rhAeyAcLyFsWBhZcMibNikUHRlKwrg6GUW0uY2f1JoFuEFGd-Rk8_h0CrmqQrRx1o1vBQP0vkd9p_EaTFD" />
            </div>
        </nav>
        <!-- Mobile Avatar -->
        <div
            class="md:hidden w-8 h-8 rounded-full border border-outline-variant bg-surface-container-high overflow-hidden cursor-pointer hover:opacity-80 transition-opacity">
            <img class="w-full h-full object-cover"
                data-alt="A clean, minimalist profile avatar placeholder featuring a soft geometric shape in cool pine green tones, suitable for a premium fitness app user interface."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIiUlxXt3Qa_f_yq98T7jn2c3TpFdDHzoMKI-x0f9PciyehMWibb_RI6ZZZf24cT7m5psJ87roFfXhUUorHjOoqurjQsiUq5dG9iv_sD0PwI5wIyuFPkS53NIKBweEH-9r7bfiF1e_FeUfk86IT76majxt3ObMj0hQuPH2MEH1JX-512CvERbieooHMhKN5mQl1IFTcour_IbXVEt7TFxk97F5OXnkmWm5B3cIZdB4lsf4O1GFMa7QVNTbB5JEUhmQLAFCZ5rV1A9o" />
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="flex-grow pt-24 pb-32 md:pb-24 px-margin-mobile md:px-margin-desktop max-w-max-width mx-auto w-full">
        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-lg gap-4">
            <div>
                <h2
                    class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-2">
                    Studio Schedule</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">Book your next session. Classes open 7 days
                    in advance.</p>
            </div>
            <!-- Date Strip (Week View) -->
            <div class="flex gap-2 overflow-x-auto scrollbar-hide py-1">
                <!-- Inactive Day -->
                <button
                    class="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors">
                    <span class="font-label text-label uppercase mb-1 opacity-70">Mon</span>
                    <span class="font-headline-sm text-headline-sm-mobile">12</span>
                </button>
                <button
                    class="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors">
                    <span class="font-label text-label uppercase mb-1 opacity-70">Tue</span>
                    <span class="font-headline-sm text-headline-sm-mobile">13</span>
                </button>
                <!-- Active Day -->
                <button
                    class="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-transparent bg-primary-container text-on-primary-container scale-105 shadow-[0_4px_12px_rgba(0,82,54,0.15)] transition-transform">
                    <span class="font-label text-label uppercase mb-1">Wed</span>
                    <span class="font-headline-sm text-headline-sm-mobile">14</span>
                </button>
                <!-- Inactive Days -->
                <button
                    class="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors">
                    <span class="font-label text-label uppercase mb-1 opacity-70">Thu</span>
                    <span class="font-headline-sm text-headline-sm-mobile">15</span>
                </button>
                <button
                    class="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors">
                    <span class="font-label text-label uppercase mb-1 opacity-70">Fri</span>
                    <span class="font-headline-sm text-headline-sm-mobile">16</span>
                </button>
                <button
                    class="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors opacity-50">
                    <span class="font-label text-label uppercase mb-1 opacity-70">Sat</span>
                    <span class="font-headline-sm text-headline-sm-mobile">17</span>
                </button>
                <button
                    class="flex-shrink-0 flex flex-col items-center justify-center w-14 h-[72px] rounded-xl border border-outline-variant bg-surface-container-lowest text-on-surface-variant hover:border-outline transition-colors opacity-50">
                    <span class="font-label text-label uppercase mb-1 opacity-70">Sun</span>
                    <span class="font-headline-sm text-headline-sm-mobile">18</span>
                </button>
            </div>
        </div>
        <!-- Filter Chips -->
        <div class="flex gap-2 mb-xxl overflow-x-auto scrollbar-hide py-1">
            <button
                class="flex-shrink-0 px-4 py-2 rounded-full font-label text-label bg-on-surface text-surface transition-colors">ALL
                CLASSES</button>
            <button
                class="flex-shrink-0 px-4 py-2 rounded-full font-label text-label border border-outline-variant bg-surface-container-lowest text-on-surface hover:bg-surface-variant transition-colors">REFORMER</button>
            <button
                class="flex-shrink-0 px-4 py-2 rounded-full font-label text-label border border-outline-variant bg-surface-container-lowest text-on-surface hover:bg-surface-variant transition-colors">MAT
                PILATES</button>
            <button
                class="flex-shrink-0 px-4 py-2 rounded-full font-label text-label border border-outline-variant bg-surface-container-lowest text-on-surface hover:bg-surface-variant transition-colors">PRIVATE</button>
        </div>
        <!-- Class List -->
        <div class="flex flex-col gap-md">
            <!-- Class Item: Available -->
            <div
                class="group flex flex-col sm:flex-row border border-outline-variant rounded-xl bg-surface-container-lowest overflow-hidden transition-all hover:border-outline hover:shadow-[0_8px_24px_rgba(24,28,30,0.04)] cursor-pointer">
                <!-- Time Section -->
                <div
                    class="flex sm:flex-col items-center justify-between sm:justify-center w-full sm:w-28 border-b sm:border-b-0 sm:border-r border-outline-variant bg-surface p-sm sm:p-md group-hover:bg-surface-container-low transition-colors">
                    <span class="font-headline-md text-headline-md text-on-surface">07:00</span>
                    <span class="font-label text-label text-on-surface-variant uppercase">AM</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-0 sm:mt-2">50 MIN</span>
                </div>
                <!-- Details Section -->
                <div class="flex-grow p-md flex flex-col justify-between gap-4">
                    <div class="flex justify-between items-start gap-4">
                        <div>
                            <h3
                                class="font-headline-sm text-headline-sm-mobile md:text-headline-sm text-on-surface mb-1">
                                Reformer Flow</h3>
                            <div class="flex items-center gap-2">
                                <span
                                    class="font-label text-label text-on-surface-variant border border-outline-variant px-2 py-0.5 rounded-full">INTERMEDIATE</span>
                            </div>
                        </div>
                        <!-- Badge: Available (Pine) -->
                        <div
                            class="flex-shrink-0 bg-primary-fixed text-on-primary-fixed font-label text-label px-3 py-1 rounded-full flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">check_circle</span>
                            AVAILABLE
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full border border-outline-variant overflow-hidden p-0.5">
                                <img class="w-full h-full object-cover rounded-full"
                                    data-alt="A professional, well-lit studio portrait of a fitness instructor named Sarah, looking calm and confident. Soft, cool-toned lighting emphasizes a premium, athletic-wellness atmosphere. The background is slightly blurred showing modern architectural studio elements."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVhK2WNOrie5XrJUd5OZVa1h8MTwXxwEVgNy7KtieBDZmQIVROMo95gkn_kTolwLpCKUyGSJb-M0RfyoqazdHZaVBU1yIyjvBA4qRo0LKBq3phUHsYof0zuKBJH8C4sSt_nT0mh7I87EjgBzgCetX1hZwrps01s93XFQpl_ES7LHtaHEyhtgDCdLWyYVqvernsLBdbp87IAYolvknejdaLCkMGtXZg50vgeS_oTUQ3Gh3H_AmlG301-F2Dxy-H20r6gsDDuPJe3QJC" />
                            </div>
                            <span class="font-body-md text-body-md text-on-surface">Sarah Jenkins</span>
                        </div>
                        <button
                            class="hidden sm:block px-6 py-2 rounded-full bg-primary text-on-primary font-label text-label hover:opacity-90 transition-opacity">BOOK</button>
                    </div>
                </div>
            </div>
            <!-- Class Item: Full -->
            <div
                class="group flex flex-col sm:flex-row border border-outline-variant rounded-xl bg-surface-container-lowest overflow-hidden transition-all hover:border-outline opacity-80 cursor-not-allowed">
                <div
                    class="flex sm:flex-col items-center justify-between sm:justify-center w-full sm:w-28 border-b sm:border-b-0 sm:border-r border-outline-variant bg-surface p-sm sm:p-md">
                    <span class="font-headline-md text-headline-md text-on-surface-variant">08:30</span>
                    <span class="font-label text-label text-on-surface-variant uppercase">AM</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-0 sm:mt-2">50 MIN</span>
                </div>
                <div class="flex-grow p-md flex flex-col justify-between gap-4">
                    <div class="flex justify-between items-start gap-4">
                        <div>
                            <h3
                                class="font-headline-sm text-headline-sm-mobile md:text-headline-sm text-on-surface-variant mb-1">
                                Classic Mat</h3>
                            <div class="flex items-center gap-2">
                                <span
                                    class="font-label text-label text-on-surface-variant border border-outline-variant px-2 py-0.5 rounded-full">BEGINNER</span>
                            </div>
                        </div>
                        <!-- Badge: Full (Stone) -->
                        <div
                            class="flex-shrink-0 bg-surface-variant text-on-surface-variant font-label text-label px-3 py-1 rounded-full flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">block</span>
                            FULL
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-8 h-8 rounded-full border border-outline-variant overflow-hidden p-0.5 grayscale">
                                <img class="w-full h-full object-cover rounded-full"
                                    data-alt="A professional headshot of a male fitness instructor named David, with a friendly expression. Soft, bright lighting in a clean, high-end studio setting. Minimalist background."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDrDBlvqdg3BsHitExrHuBnWHL4TbapDubOq1hvQhQi6NQZGkOO4f0B6uWSVJpb82slVmWbQEsjVVLCvTYdbxmQWBGMRp_-rSUkDmkNA6oO7fOl13d0aMtECvbKm-4E45ZsGV8NFZ4CmlttYigGYNv_MIR5G96SdJaaLtkxjVN8tyK-uEyZcG_csia4Wby7ZKvdcqEKyIAs5MHGAUBm5WapuSwHrb1iSAJvK0RKVM91jVnVY7_R02vVpGrjn3baBXzLwhyRM_kPpXbh" />
                            </div>
                            <span class="font-body-md text-body-md text-on-surface-variant">David Cho</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Class Item: Waitlist -->
            <div
                class="group flex flex-col sm:flex-row border border-outline-variant rounded-xl bg-surface-container-lowest overflow-hidden transition-all hover:border-outline hover:shadow-[0_8px_24px_rgba(24,28,30,0.04)] cursor-pointer">
                <div
                    class="flex sm:flex-col items-center justify-between sm:justify-center w-full sm:w-28 border-b sm:border-b-0 sm:border-r border-outline-variant bg-surface p-sm sm:p-md group-hover:bg-surface-container-low transition-colors">
                    <span class="font-headline-md text-headline-md text-on-surface">12:00</span>
                    <span class="font-label text-label text-on-surface-variant uppercase">PM</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-0 sm:mt-2">45 MIN</span>
                </div>
                <div class="flex-grow p-md flex flex-col justify-between gap-4">
                    <div class="flex justify-between items-start gap-4">
                        <div>
                            <h3
                                class="font-headline-sm text-headline-sm-mobile md:text-headline-sm text-on-surface mb-1">
                                Power Reformer</h3>
                            <div class="flex items-center gap-2">
                                <span
                                    class="font-label text-label text-on-surface-variant border border-outline-variant px-2 py-0.5 rounded-full">ADVANCED</span>
                            </div>
                        </div>
                        <!-- Badge: Waitlist (Using tertiary/error tokens as requested proxy for amber/warning) -->
                        <div
                            class="flex-shrink-0 bg-tertiary-fixed text-on-tertiary-fixed-variant font-label text-label px-3 py-1 rounded-full flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">hourglass_empty</span>
                            WAITLIST
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full border border-outline-variant overflow-hidden p-0.5">
                                <img class="w-full h-full object-cover rounded-full"
                                    data-alt="A sharp, modern portrait of a female fitness instructor named Elena, showing focus and strength. Studio lighting creates subtle contrast. The background is a clean, architectural white space."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbB_fV42MHG6TiJIxvDbgrR8KOcFSAaSNjKWHRu1DORxE2AS1f4HH7CJKa6EcVzKdqA-FoR9po7mO75KH0IYJNUoBPQhhvAyo5kwiJztRKHph228nd6eOIpNAT9Ebbs8Tw__8mGcO8OEhKZ3zp3hXfxaM9NaFcMZrSOZKJfdtHuyUcFJ_X1AgfWRbZWQ6U6y9uLULe4qGgY8TsaunQjA6YDieHzHLjO1wMT_aD5fzD263IGgVOO2WFSs4IRv91DGdsxz46vWN2hH3Q" />
                            </div>
                            <span class="font-body-md text-body-md text-on-surface">Elena Rodriguez</span>
                        </div>
                        <button
                            class="hidden sm:block px-6 py-2 rounded-full border border-outline-variant text-on-surface font-label text-label hover:bg-surface-variant transition-colors">JOIN
                            LIST</button>
                    </div>
                </div>
            </div>
            <!-- Class Item: Available (Evening) -->
            <div
                class="group flex flex-col sm:flex-row border border-outline-variant rounded-xl bg-surface-container-lowest overflow-hidden transition-all hover:border-outline hover:shadow-[0_8px_24px_rgba(24,28,30,0.04)] cursor-pointer">
                <div
                    class="flex sm:flex-col items-center justify-between sm:justify-center w-full sm:w-28 border-b sm:border-b-0 sm:border-r border-outline-variant bg-surface p-sm sm:p-md group-hover:bg-surface-container-low transition-colors">
                    <span class="font-headline-md text-headline-md text-on-surface">17:30</span>
                    <span class="font-label text-label text-on-surface-variant uppercase">PM</span>
                    <span class="font-body-sm text-body-sm text-on-surface-variant mt-0 sm:mt-2">60 MIN</span>
                </div>
                <div class="flex-grow p-md flex flex-col justify-between gap-4">
                    <div class="flex justify-between items-start gap-4">
                        <div>
                            <h3
                                class="font-headline-sm text-headline-sm-mobile md:text-headline-sm text-on-surface mb-1">
                                Reformer Restore</h3>
                            <div class="flex items-center gap-2">
                                <span
                                    class="font-label text-label text-on-surface-variant border border-outline-variant px-2 py-0.5 rounded-full">ALL
                                    LEVELS</span>
                            </div>
                        </div>
                        <div
                            class="flex-shrink-0 bg-primary-fixed text-on-primary-fixed font-label text-label px-3 py-1 rounded-full flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">check_circle</span>
                            AVAILABLE
                        </div>
                    </div>
                    <div class="flex items-center justify-between mt-2">
                        <div class="flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full border border-outline-variant overflow-hidden p-0.5">
                                <img class="w-full h-full object-cover rounded-full"
                                    data-alt="A professional, well-lit studio portrait of a fitness instructor named Sarah, looking calm and confident. Soft, cool-toned lighting emphasizes a premium, athletic-wellness atmosphere. The background is slightly blurred showing modern architectural studio elements."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBXmdaN98MQAFS4koMw8-fmivJYX7KkFv20PNn8Fm7xA5SCfLDfe7SY5hfDf-wjBqyBU2UVPVdMQsqfznKB1BGqutYuBdVCu97tNeXsAhsRh8tXm_xNK8auGWIgzRKp9Jxc-iYf5kG6T4PO5Sr7w87fv5_TsEfbSs3cLS8m-EDFPavB-zxvTTYNoeaVjVUubK-yPp4E0_dviZMrZQgJM9-wqzYyH0K7xEMJMOd4BmZChX8FkxLMTDl0vnvduSzEiIItlmHmLSUk9mpD" />
                            </div>
                            <span class="font-body-md text-body-md text-on-surface">Sarah Jenkins</span>
                        </div>
                        <button
                            class="hidden sm:block px-6 py-2 rounded-full bg-primary text-on-primary font-label text-label hover:opacity-90 transition-opacity">BOOK</button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full h-20 flex justify-around items-center px-4 pb-safe bg-surface border-t border-outline-variant shadow-sm z-50">
        <!-- Inactive: Home -->
        <button
            class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors">
            <span class="material-symbols-outlined mb-1" style="font-variation-settings: 'FILL' 0;">home</span>
            <span class="font-label text-label">Home</span>
        </button>
        <!-- Active: Schedule -->
        <button
            class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-5 py-1.5 scale-95 transition-transform duration-200 shadow-[0_4px_12px_rgba(31,111,79,0.2)]">
            <span class="material-symbols-outlined mb-1"
                style="font-variation-settings: 'FILL' 1;">calendar_today</span>
            <span class="font-label text-label">Schedule</span>
        </button>
        <!-- Inactive: Membership -->
        <button
            class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors">
            <span class="material-symbols-outlined mb-1"
                style="font-variation-settings: 'FILL' 0;">card_membership</span>
            <span class="font-label text-label">Membership</span>
        </button>
        <!-- Inactive: Profile -->
        <button
            class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors">
            <span class="material-symbols-outlined mb-1" style="font-variation-settings: 'FILL' 0;">person</span>
            <span class="font-label text-label">Profile</span>
        </button>
    </nav>
</body>

</html>