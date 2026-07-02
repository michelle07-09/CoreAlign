<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Booking Management | CoreAlign</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&amp;family=Cabinet+Grotesk:wght@700;800&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-on-surface": "#eff1ee",
                        "surface-tint": "#1a6b4b",
                        "primary-container": "#1f6f4f",
                        "inverse-surface": "#2e312f",
                        "on-tertiary": "#ffffff",
                        "on-background": "#191c1b",
                        "on-secondary-fixed": "#181c1e",
                        "on-primary-fixed-variant": "#005236",
                        "secondary": "#5b5f61",
                        "on-tertiary-fixed": "#181d17",
                        "surface-dim": "#d8dbd8",
                        "primary-fixed": "#a5f3ca",
                        "surface-variant": "#e1e3e0",
                        "on-secondary-fixed-variant": "#43474a",
                        "secondary-fixed": "#e0e3e5",
                        "secondary-fixed-dim": "#c4c7c9",
                        "on-primary-fixed": "#002114",
                        "on-surface": "#191c1b",
                        "primary-fixed-dim": "#8ad6af",
                        "error": "#ba1a1a",
                        "surface-container-high": "#e7e9e6",
                        "on-tertiary-fixed-variant": "#434841",
                        "outline": "#6f7a72",
                        "tertiary": "#474c45",
                        "surface-container-highest": "#e1e3e0",
                        "outline-variant": "#bfc9c1",
                        "error-container": "#ffdad6",
                        "tertiary-fixed-dim": "#c3c8be",
                        "background": "#f8faf7",
                        "on-secondary-container": "#5f6365",
                        "surface-bright": "#f8faf7",
                        "tertiary-container": "#5f645c",
                        "on-tertiary-container": "#dce1d6",
                        "inverse-primary": "#8ad6af",
                        "surface-container-low": "#f2f4f1",
                        "surface-container-lowest": "#ffffff",
                        "on-error": "#ffffff",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#dde0e3",
                        "primary": "#005639",
                        "on-primary": "#ffffff",
                        "on-error-container": "#93000a",
                        "surface-container": "#eceeeb",
                        "surface": "#f8faf7",
                        "on-primary-container": "#a1efc7",
                        "on-surface-variant": "#3f4943",
                        "tertiary-fixed": "#dfe4da"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "container-margin": "24px",
                        "2xl": "48px",
                        "sm": "8px",
                        "lg": "24px",
                        "gutter": "16px",
                        "xl": "32px",
                        "md": "16px",
                        "base": "4px",
                        "xs": "4px"
                    },
                    "fontFamily": {
                        "data-mono": ["JetBrains Mono"],
                        "display-lg": ["Cabinet Grotesk"],
                        "label-caps": ["Inter Tight"],
                        "headline-md": ["Cabinet Grotesk"],
                        "headline-sm": ["Cabinet Grotesk"],
                        "body-lg": ["Inter Tight"],
                        "body-md": ["Inter Tight"],
                        "body-sm": ["Inter Tight"]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: #bfc9c1;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #6f7a72;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md antialiased overflow-hidden">
    <div class="flex h-screen w-full">
        <!-- SideNavBar -->
        <aside
            class="fixed left-0 top-0 h-full w-[280px] bg-inverse-surface border-r border-outline-variant flex flex-col py-lg z-50">
            <div class="px-lg mb-xl">
                <div class="font-headline-md text-headline-md text-primary-fixed font-bold">CoreAlign</div>
                <div class="font-body-sm text-body-sm text-surface-variant opacity-70">Pilates Management</div>
            </div>
            <nav class="flex-1 space-y-1">
                <!-- Dashboard -->
                <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    <span class="font-label-caps text-label-caps">Dashboard</span>
                </a>
                <!-- Schedule -->
                <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                    <span class="font-label-caps text-label-caps">Schedule</span>
                </a>
                <!-- Booking (Active) -->
                <a class="flex items-center gap-3 px-4 py-3 text-white border-l-4 border-primary-fixed bg-surface-variant/10 cursor-pointer active:scale-95 transition-all"
                    href="#">
                    <span class="material-symbols-outlined text-primary-fixed"
                        data-icon="event_available">event_available</span>
                    <span class="font-label-caps text-label-caps">Booking</span>
                </a>
                <!-- Members -->
                <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="group">group</span>
                    <span class="font-label-caps text-label-caps">Members</span>
                </a>
                <!-- Packages -->
                <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                    <span class="font-label-caps text-label-caps">Packages</span>
                </a>
                <!-- Finance -->
                <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="payments">payments</span>
                    <span class="font-label-caps text-label-caps">Finance</span>
                </a>
                <!-- Instructors -->
                <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="badge">badge</span>
                    <span class="font-label-caps text-label-caps">Instructors</span>
                </a>
                <!-- Reports -->
                <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
                    <span class="font-label-caps text-label-caps">Reports</span>
                </a>
                <!-- Settings -->
                <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                    href="#">
                    <span class="material-symbols-outlined" data-icon="settings">settings</span>
                    <span class="font-label-caps text-label-caps">Settings</span>
                </a>
            </nav>
            <div class="px-lg mt-auto pt-lg border-t border-outline-variant/30">
                <div class="flex items-center gap-3 group cursor-pointer">
                    <div
                        class="w-10 h-10 rounded-full overflow-hidden bg-surface-variant/20 border border-outline-variant">
                        <img class="w-full h-full object-cover"
                            data-alt="Close-up portrait of a professional fitness studio manager in a bright, modern Pilates studio setting. High-quality corporate photography style, soft natural lighting, professional and approachable demeanor, wearing a minimalist black athletic polo shirt."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDFV3qkogHklqIrOFjHnWR6oq8nMy9PhttdbLgHkoRm2Bsl3HtqZ87fXXgp_5-45Z7OrufUNQR34gNn9_ksQwx8qGaM3ahr66IAGlJWYxyFTxvUoEos-Oh0nfpx78FUQy0noRf83YL8Uf6feTtMJpDrXZTX5fEC6T4scvOeAva_DncZOUBu6W2SnoVe-GhmUkS2MSFB_tBJxHsnPGqdpWzc2Jo3vlHuJqcTJDOp0HU8taZn9VRazJaBPHcYLijTn9BxMdijzseo5Jse" />
                    </div>
                    <div class="flex-1 overflow-hidden">
                        <div class="text-white font-label-caps text-sm truncate">Elena Vance</div>
                        <div class="text-surface-variant text-xs truncate">Studio Manager</div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- Main Content Area -->
        <main class="flex-1 ml-[280px] h-full flex flex-col overflow-hidden">
            <!-- TopNavBar -->
            <header
                class="h-16 bg-surface border-b border-secondary-fixed flex justify-between items-center px-lg shrink-0">
                <div class="flex items-center gap-4">
                    <button class="md:hidden text-on-surface">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                    <h1 class="font-headline-sm text-headline-sm text-on-surface">Booking Management</h1>
                    <nav class="hidden md:flex items-center gap-gutter ml-8">
                        <span class="text-primary font-bold font-body-md cursor-pointer">Class Details</span>
                        <span
                            class="text-on-surface-variant font-body-md hover:bg-surface-container-low transition-all px-2 py-1 rounded cursor-pointer">Daily
                            View</span>
                        <span
                            class="text-on-surface-variant font-body-md hover:bg-surface-container-low transition-all px-2 py-1 rounded cursor-pointer">Analytics</span>
                    </nav>
                </div>
                <div class="flex items-center gap-md">
                    <div class="relative group">
                        <span
                            class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:bg-surface-container-low p-2 rounded-full transition-all">notifications</span>
                        <span class="absolute top-1 right-1 w-2 h-2 bg-error rounded-full"></span>
                    </div>
                    <span
                        class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:bg-surface-container-low p-2 rounded-full transition-all">help_outline</span>
                </div>
            </header>
            <!-- Scrollable Content -->
            <section class="flex-1 overflow-y-auto p-lg bg-background">
                <!-- Class Hero Card (Detail View) -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg mb-lg">
                    <div
                        class="lg:col-span-2 bg-surface-container-lowest rounded-xl border border-stone-200 p-lg shadow-sm relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-lg">
                            <span
                                class="bg-primary/10 text-primary px-3 py-1 rounded-full text-xs font-bold font-label-caps">IN
                                PROGRESS</span>
                        </div>
                        <div class="flex flex-col md:flex-row gap-lg items-start md:items-center">
                            <div class="w-24 h-24 rounded-xl overflow-hidden shrink-0 border border-stone-100">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    data-alt="A focused Pilates instructor in a minimalist, sun-drenched studio with white walls and professional reformer equipment. The image captured is in high resolution with soft shadows, emphasizing the technical precision and architectural athleticism of the CoreAlign brand."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjjErHmC6t1bDxyHyJVhRbk2zQbzQrGQcBSw73LigMNcKViHQxKBAos7Dkr1jaNbYjr2y_CyK_Rr_4qv_QzwSWmeVoDdv738qb7r9OVvfuY-ZRziAbMwqGQxzVwaGZNBgcWdE_IRyNQ4Gh6ZJ3e3yvFn3q6xhLknOLXjby4ajAXBhXYMFpt6OqHz7y-wFfCAdnNdHKjkcR08luuJ-mz143flkdTcmXYBXVSUuErymS7rkWrlcQA-j3i5tEjhTRqXEVpzb1M8Iyv4On" />
                            </div>
                            <div>
                                <h2 class="font-display-lg text-[32px] leading-tight text-on-surface mb-xs">Intermediate
                                    Reformer</h2>
                                <div class="flex flex-wrap items-center gap-4 text-on-surface-variant">
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-size: 18px;">schedule</span>
                                        <span class="font-label-caps text-xs">09:00 AM - 09:55 AM</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-size: 18px;">person</span>
                                        <span class="font-label-caps text-xs">Inst. Marcus Chen</span>
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-size: 18px;">location_on</span>
                                        <span class="font-label-caps text-xs">Studio B</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Occupancy Summary Card -->
                    <div class="bg-primary text-on-primary rounded-xl p-lg shadow-sm flex flex-col justify-between">
                        <div>
                            <div
                                class="font-label-caps text-xs text-on-primary-container opacity-80 uppercase tracking-wider mb-sm">
                                Occupancy</div>
                            <div class="flex items-baseline gap-1">
                                <span class="font-display-lg text-4xl font-extrabold">10</span>
                                <span class="font-display-lg text-2xl opacity-60">/ 12</span>
                            </div>
                            <div class="mt-md w-full bg-on-primary-container/20 h-2 rounded-full overflow-hidden">
                                <div
                                    class="bg-primary-fixed h-full w-[83%] rounded-full shadow-[0_0_8px_rgba(165,243,202,0.5)]">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between items-end mt-lg">
                            <div class="text-xs font-body-sm opacity-80">2 Slots Available</div>
                            <button
                                class="bg-primary-fixed text-on-primary-fixed px-4 py-2 rounded-full font-label-caps text-xs font-bold hover:bg-white transition-colors">BOOK
                                GUEST</button>
                        </div>
                    </div>
                </div>
                <!-- Participant List Table -->
                <div
                    class="bg-surface-container-lowest rounded-xl border border-stone-200 overflow-hidden shadow-sm mb-lg">
                    <div
                        class="px-lg py-md border-b border-stone-200 flex justify-between items-center bg-surface-container-low/30">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Confirmed Participants</h3>
                        <div class="flex gap-sm">
                            <div class="relative">
                                <input
                                    class="pl-10 pr-4 py-1.5 border border-stone-300 rounded-full text-sm focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent"
                                    placeholder="Search members..." type="text" />
                                <span
                                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-stone-500"
                                    style="font-size: 18px;">search</span>
                            </div>
                            <button
                                class="p-1.5 border border-stone-300 rounded-full hover:bg-stone-50 transition-colors">
                                <span class="material-symbols-outlined text-stone-600">filter_list</span>
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-low/20">
                                    <th
                                        class="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200">
                                        Name</th>
                                    <th
                                        class="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200">
                                        Session Type</th>
                                    <th
                                        class="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200">
                                        Payment Status</th>
                                    <th
                                        class="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200">
                                        Check-In</th>
                                    <th
                                        class="px-lg py-3 font-label-caps text-stone-500 text-[11px] uppercase tracking-widest border-b border-stone-200 text-right">
                                        Actions</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-100">
                                <!-- Row 1 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-lg py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-stone-200 overflow-hidden">
                                                <img class="w-full h-full object-cover"
                                                    data-alt="Portrait of a young woman with a focused, athletic look, light-mode background, clean minimalist aesthetic, reflecting professional Pilates studio photography."
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAZENsdWmoc-DgnCSqphAl-b3g6oLeS9hiWcI8aI0hOZB5_mrXFN3BY3-ATNUTvjhV6P7JsM5Iy-uGsHwTfs8Q3_ngMdeGahxCiMn4Uod58QscrLUD04oSY9IcRibrOb6ViWRENtWDfm6eL84wxmpWeUdFgg-kr2IuBFeTQt68EWfxA5IKQEuPwJpAIvCDgUWbXAnPIRW4v0YaBfbpA7f8jCymkMYcFhePeiL_1Jvrf7tzuE6895Nn_9OXwrIstNq0N37H6dthF8mua" />
                                            </div>
                                            <div>
                                                <div class="font-body-md font-semibold text-on-surface">Sarah Jenkins
                                                </div>
                                                <div class="text-[11px] text-stone-500 font-data-mono">#MEM-9023</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-lg py-4 text-sm text-on-surface-variant font-body-sm">Unlimited
                                        Monthly</td>
                                    <td class="px-lg py-4">
                                        <span
                                            class="bg-primary/10 text-primary px-2.5 py-0.5 rounded-full text-[11px] font-bold font-label-caps inline-flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> PAID
                                        </span>
                                    </td>
                                    <td class="px-lg py-4">
                                        <button
                                            class="relative inline-flex h-6 w-10 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-primary focus:outline-none"
                                            onclick="this.classList.toggle('bg-primary'); this.classList.toggle('bg-stone-200'); this.children[0].classList.toggle('translate-x-4');">
                                            <span
                                                class="pointer-events-none inline-block h-5 w-5 translate-x-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                        </button>
                                    </td>
                                    <td class="px-lg py-4 text-right">
                                        <span
                                            class="material-symbols-outlined text-stone-400 cursor-pointer hover:text-primary transition-colors">more_vert</span>
                                    </td>
                                </tr>
                                <!-- Row 2 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-lg py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-stone-200 overflow-hidden">
                                                <img class="w-full h-full object-cover"
                                                    data-alt="Professional corporate headshot of a middle-aged man, bright background, clean aesthetic, high resolution, soft focused studio lighting."
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuCAzHedDyM-kNZZaJPq47vYzi_k1F0KQnN7cuJHumyhluHaSFuT8UJOmT6lWchd2kZ19K3PklHriqhw08E8Bu8TAVl7PjZfDuY3F3DhCtBN-az4ZLuA-zIsDD96go4v0QKW4wm1tWdQexbuS9f0FvnS0srD8cGpXc74Bm7SneMFAr0tUmfla1cApCQfwZsoiW0ANs6L3QUXpW-bYQwhlOVgGEl0QUcZt77MaYZ_qzPtSKxnE8L8OjCpNPP68PBho57Pj7mepULIhYCc" />
                                            </div>
                                            <div>
                                                <div class="font-body-md font-semibold text-on-surface">Michael Ross
                                                </div>
                                                <div class="text-[11px] text-stone-500 font-data-mono">#GUEST-442</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-lg py-4 text-sm text-on-surface-variant font-body-sm">Drop-in Session
                                    </td>
                                    <td class="px-lg py-4">
                                        <span
                                            class="bg-error/10 text-error px-2.5 py-0.5 rounded-full text-[11px] font-bold font-label-caps inline-flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-error"></span> PENDING
                                        </span>
                                    </td>
                                    <td class="px-lg py-4">
                                        <button
                                            class="relative inline-flex h-6 w-10 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-stone-200 focus:outline-none"
                                            onclick="this.classList.toggle('bg-primary'); this.classList.toggle('bg-stone-200'); this.children[0].classList.toggle('translate-x-4');">
                                            <span
                                                class="pointer-events-none inline-block h-5 w-5 translate-x-0 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                        </button>
                                    </td>
                                    <td class="px-lg py-4 text-right">
                                        <span
                                            class="material-symbols-outlined text-stone-400 cursor-pointer hover:text-primary transition-colors">more_vert</span>
                                    </td>
                                </tr>
                                <!-- Row 3 -->
                                <tr class="hover:bg-primary/5 transition-colors group">
                                    <td class="px-lg py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="w-8 h-8 rounded-full bg-stone-200 overflow-hidden">
                                                <img class="w-full h-full object-cover"
                                                    data-alt="Close-up portrait of an active older woman, glowing skin, soft daylight, professional photography in a minimalist studio environment."
                                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXzzSBAS-mf7iBzBwJl1fCSxprRMhffZZbRJfiVYWi_J94NgTGZRO1gZ5Mkzlvn72TPDzHD2RkW2bNKAhxdwiI6N9aRUfZ-tBvv-1A015PQc6ZsiH9gcHAAhdSa_NQSXrbV0AjW3Wt93V_ga74eNNvvD-ae8FLaUDdfMzAq3Tt91bgTlfrjnUxvQGQlI_6zfnsfnESgjDaFpz_Rz1sFda1r5mAKdOA1BHUqYnRo_TsiQ6_9sFoGp-CEirDSTwfw-R_IJbBSNij1QP6" />
                                            </div>
                                            <div>
                                                <div class="font-body-md font-semibold text-on-surface">Linda Gray</div>
                                                <div class="text-[11px] text-stone-500 font-data-mono">#MEM-8812</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-lg py-4 text-sm text-on-surface-variant font-body-sm">10-Class Pack
                                    </td>
                                    <td class="px-lg py-4">
                                        <span
                                            class="bg-primary/10 text-primary px-2.5 py-0.5 rounded-full text-[11px] font-bold font-label-caps inline-flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> PAID
                                        </span>
                                    </td>
                                    <td class="px-lg py-4">
                                        <button
                                            class="relative inline-flex h-6 w-10 shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out bg-primary focus:outline-none"
                                            onclick="this.classList.toggle('bg-primary'); this.classList.toggle('bg-stone-200'); this.children[0].classList.toggle('translate-x-4');">
                                            <span
                                                class="pointer-events-none inline-block h-5 w-5 translate-x-4 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                        </button>
                                    </td>
                                    <td class="px-lg py-4 text-right">
                                        <span
                                            class="material-symbols-outlined text-stone-400 cursor-pointer hover:text-primary transition-colors">more_vert</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Manage Waitlist Section -->
                <div class="bg-surface-container-low/30 rounded-xl border-2 border-dashed border-stone-200 p-lg">
                    <div class="flex items-center justify-between mb-md">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary-container"
                                style="font-variation-settings: 'FILL' 1;">list_alt</span>
                            <h3 class="font-headline-sm text-headline-sm text-on-surface">Manage Waitlist</h3>
                            <span
                                class="bg-stone-200 text-stone-600 px-2 py-0.5 rounded text-xs font-bold font-data-mono">4
                                QUEUED</span>
                        </div>
                        <button class="text-sm font-label-caps text-primary hover:underline transition-all">Clear
                            All</button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                        <!-- Waitlist Item 1 -->
                        <div
                            class="bg-surface-container-lowest border border-stone-200 rounded-lg p-md flex items-center justify-between hover:border-primary-fixed transition-all shadow-sm">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-stone-100 flex items-center justify-center font-bold text-stone-400 border border-stone-200">
                                    1
                                </div>
                                <div>
                                    <div class="font-semibold text-on-surface font-body-md">David Miller</div>
                                    <div class="text-[10px] text-stone-500 font-data-mono">Queued 2h ago</div>
                                </div>
                            </div>
                            <button
                                class="bg-primary/5 text-primary border border-primary/20 px-4 py-1.5 rounded-full text-xs font-bold font-label-caps hover:bg-primary hover:text-white transition-all active:scale-95">
                                Promote to Confirmed
                            </button>
                        </div>
                        <!-- Waitlist Item 2 -->
                        <div
                            class="bg-surface-container-lowest border border-stone-200 rounded-lg p-md flex items-center justify-between hover:border-primary-fixed transition-all shadow-sm">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-10 h-10 rounded-full bg-stone-100 flex items-center justify-center font-bold text-stone-400 border border-stone-200">
                                    2
                                </div>
                                <div>
                                    <div class="font-semibold text-on-surface font-body-md">Sophia Lane</div>
                                    <div class="text-[10px] text-stone-500 font-data-mono">Queued 45m ago</div>
                                </div>
                            </div>
                            <button
                                class="bg-primary/5 text-primary border border-primary/20 px-4 py-1.5 rounded-full text-xs font-bold font-label-caps hover:bg-primary hover:text-white transition-all active:scale-95">
                                Promote to Confirmed
                            </button>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Quick Action FAB -->
            <button
                class="fixed bottom-lg right-lg w-14 h-14 bg-primary text-white rounded-full shadow-lg flex items-center justify-center hover:scale-110 active:scale-95 transition-all group z-40">
                <span class="material-symbols-outlined text-3xl transition-transform group-hover:rotate-90">add</span>
                <div
                    class="absolute right-16 bg-inverse-surface text-white px-3 py-1.5 rounded-lg text-sm font-label-caps opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none whitespace-nowrap">
                    Book New Member
                </div>
            </button>
        </main>
    </div>
    <!-- Micro-interaction for sidebar toggle logic (simulated) -->
    <script>
        // Simple micro-interaction for row hover or checkbox logic
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('click', (e) => {
                if (e.target.tagName !== 'BUTTON' && e.target.tagName !== 'SPAN') {
                    console.log('Row clicked: Member details could open here');
                }
            });
        });
    </script>
</body>

</html>