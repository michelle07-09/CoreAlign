<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Member Database | CoreAlign Pilates Management</title>
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
                        "tertiary-fixed": "#dfe4da",
                        "stone": {
                            "200": "#e7e5e4",
                            "500": "#78716c"
                        },
                        "pine": {
                            "50": "#f0fdf4",
                            "600": "#16a34a"
                        },
                        "ink": {
                            "900": "#0f172a"
                        }
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
                        "display-lg-mobile": ["Cabinet Grotesk"],
                        "label-caps": ["Inter Tight"],
                        "headline-md": ["Cabinet Grotesk"],
                        "body-lg": ["Inter Tight"],
                        "body-sm": ["Inter Tight"],
                        "headline-sm": ["Cabinet Grotesk"],
                        "display-lg": ["Cabinet Grotesk"],
                        "body-md": ["Inter Tight"]
                    },
                    "fontSize": {
                        "data-mono": ["13px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "display-lg-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "800" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "700" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        body {
            background-color: #f8faf7;
            /* canvas-50 equivalent */
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #bfc9c1;
            border-radius: 10px;
        }
    </style>
</head>

<body class="antialiased font-body-md text-on-surface">
    <aside
        class="fixed left-0 top-0 h-full w-[280px] bg-inverse-surface border-r border-outline-variant flex flex-col py-lg z-50">
        <div class="px-lg mb-xl">
            <h1 class="font-headline-md text-headline-md text-primary-fixed font-bold tracking-tight">CoreAlign</h1>
            <p class="font-label-caps text-label-caps text-surface-variant uppercase tracking-widest mt-1">Pilates
                Management</p>
        </div>
        <nav class="flex-1 overflow-y-auto custom-scrollbar space-y-1">
            <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                href="#">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                href="#">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                <span class="font-body-md">Schedule</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                href="#">
                <span class="material-symbols-outlined" data-icon="event_available">event_available</span>
                <span class="font-body-md">Booking</span>
            </a>
            <!-- Active State -->
            <a class="flex items-center gap-3 px-4 py-3 text-white border-l-4 border-primary-fixed bg-surface-variant/10 cursor-pointer active:scale-95 transition-colors duration-200"
                href="#">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                <span class="font-body-md font-bold text-primary-fixed">Members</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                href="#">
                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                <span class="font-body-md">Packages</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                href="#">
                <span class="material-symbols-outlined" data-icon="payments">payments</span>
                <span class="font-body-md">Finance</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                href="#">
                <span class="material-symbols-outlined" data-icon="badge">badge</span>
                <span class="font-body-md">Instructors</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                href="#">
                <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
                <span class="font-body-md">Reports</span>
            </a>
            <a class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95"
                href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-body-md">Settings</span>
            </a>
        </nav>
        <div class="mt-auto px-4 pt-lg border-t border-white/10">
            <div class="flex items-center gap-3 px-2 py-3 rounded-lg hover:bg-surface-variant/5 transition-colors">
                <div
                    class="w-8 h-8 rounded-full overflow-hidden bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-xs">
                    AD
                </div>
                <div class="flex-1 min-w-0">
                    <p class="text-white text-sm font-semibold truncate">Admin User</p>
                    <p class="text-surface-variant text-xs truncate">Studio Manager</p>
                </div>
            </div>
        </div>
    </aside>
    <main class="ml-[280px] min-h-screen">
        <header
            class="h-16 flex justify-between items-center px-lg bg-surface border-b border-secondary-fixed sticky top-0 z-40">
            <div class="flex items-center gap-4 flex-1">
                <div class="relative w-full max-w-md group">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant"
                        data-icon="search">search</span>
                    <input
                        class="w-full bg-surface-container-low border border-stone-200 rounded-full py-2 pl-10 pr-4 text-body-sm focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                        placeholder="Search members by name, phone or email..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-4 ml-lg">
                <button class="p-2 hover:bg-surface-container-low rounded-full transition-all text-on-surface-variant">
                    <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
                </button>
                <button class="p-2 hover:bg-surface-container-low rounded-full transition-all text-on-surface-variant">
                    <span class="material-symbols-outlined" data-icon="help_outline">help_outline</span>
                </button>
                <div class="h-8 w-px bg-stone-200 mx-2"></div>
                <button
                    class="bg-primary text-white px-6 py-2 rounded-full font-label-caps text-label-caps flex items-center gap-2 hover:opacity-90 active:scale-95 transition-all">
                    <span class="material-symbols-outlined text-sm" data-icon="person_add">person_add</span>
                    NEW MEMBER
                </button>
            </div>
        </header>
        <div class="p-lg">
            <div class="flex justify-between items-end mb-lg">
                <div>
                    <h2 class="font-headline-sm text-headline-sm text-on-surface">Member Database</h2>
                    <p class="text-body-sm text-on-surface-variant">Manage your studio community and membership
                        statuses.</p>
                </div>
                <div class="flex gap-2">
                    <button
                        class="flex items-center gap-2 px-4 py-2 border border-stone-200 rounded-full bg-white text-body-sm hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined text-lg" data-icon="filter_list">filter_list</span>
                        Filter
                    </button>
                    <button
                        class="flex items-center gap-2 px-4 py-2 border border-stone-200 rounded-full bg-white text-body-sm hover:bg-surface-container-low transition-colors">
                        <span class="material-symbols-outlined text-lg" data-icon="download">download</span>
                        Export
                    </button>
                </div>
            </div>
            <div class="bg-white border border-stone-200 rounded-xl overflow-hidden shadow-sm">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-surface-container-low border-b border-stone-200">
                                <th class="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase">Member
                                    Name</th>
                                <th class="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase">Status
                                </th>
                                <th class="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase">
                                    Membership Type</th>
                                <th
                                    class="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase text-right">
                                    Credits</th>
                                <th class="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase">Last
                                    Visit</th>
                                <th
                                    class="px-md py-4 font-label-caps text-label-caps text-stone-500 uppercase text-right">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-stone-200">
                            <!-- Row 1 -->
                            <tr class="hover:bg-pine-50 transition-colors group">
                                <td class="px-md py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-surface-container-high overflow-hidden border border-stone-200">
                                            <img class="w-full h-full object-cover"
                                                data-alt="Professional studio portrait of a woman in her late 20s with athletic build, clean skin, and minimalist aesthetic. She is wearing a dark grey athletic top. Bright, high-key lighting with soft shadows. Modern corporate headshot style, high contrast, clean white background."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDcn1h1ylqgz4gdPg67nnv3fP6m6DNe3pwfxJxCalLMEgGM7R-egEWptdRk-CLrY2BiJRjKXfcCjEWEZrGT3f060JTWrXjyHXiBDNpHfBSnzLqgeSy97AGRTZ-a9Wa0HE4pGXqgA3NJhICcglKAm--0R70Ph0ZklHfN4xhp4PN7N2qek5ES2kkVG1L1E89jEyYAWGjHjuYp846G1Z3Y1vR55r8bh_oQDAmOqHTLX-ti3Gg3lljLoP-mUzsLfzQCqFw6p1C8XBlVyqRi" />
                                        </div>
                                        <div>
                                            <p class="font-body-md font-semibold text-on-surface">Elena Vance</p>
                                            <p class="text-xs text-on-surface-variant">+1 555-0123</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-md py-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-pine-50 text-pine-600 font-label-caps text-[10px] uppercase font-bold tracking-wider">Active</span>
                                </td>
                                <td class="px-md py-4">
                                    <p class="text-body-sm">10-Class Pack</p>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <p class="font-data-mono text-data-mono">08</p>
                                </td>
                                <td class="px-md py-4">
                                    <p class="text-body-sm">Oct 12, 2023</p>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <div
                                        class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="px-3 py-1.5 rounded-full border border-stone-200 bg-white text-body-sm font-medium hover:border-primary hover:text-primary transition-all">View
                                            Profile</button>
                                        <button
                                            class="px-3 py-1.5 rounded-full bg-primary text-white text-body-sm font-medium hover:opacity-90 transition-all">Add
                                            Credit</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 2 -->
                            <tr class="hover:bg-pine-50 transition-colors group">
                                <td class="px-md py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-surface-container-high overflow-hidden border border-stone-200">
                                            <img class="w-full h-full object-cover"
                                                data-alt="Professional studio portrait of a middle-aged man with short hair and an athletic, healthy appearance. He is wearing a dark navy athletic shirt. Bright, high-key lighting, modern light-mode aesthetic, corporate headshot, minimalist clean white background."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuATsaogH4MDQ6GEHBqC9wbhTIhtmQIrcG7avaeJNdbAATfd-NFdSRDpTun_4tTt4dCc33_xAN7EmF1IXbcfeZB0fJ5KGCI9Qzd1fyKef7XoPh6fzqQjv7TuN-vNqCb4IegvF7n-8F7y4n6J67lfXVPwj1SnzJ2NU9sj1yGBajwbHbGzbq4A3YuA3PpEJWeuxVijnyfkc8xFu5GiiG01ctHVRprdBWIwuiBltYFrdeUtbAr8su7e3pB3KvTYjTTMztfEuru-d6SKBOak" />
                                        </div>
                                        <div>
                                            <p class="font-body-md font-semibold text-on-surface">Marcus Thorne</p>
                                            <p class="text-xs text-on-surface-variant">+1 555-9876</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-md py-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-pine-50 text-pine-600 font-label-caps text-[10px] uppercase font-bold tracking-wider">Active</span>
                                </td>
                                <td class="px-md py-4">
                                    <p class="text-body-sm">Unlimited Monthly</p>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <p class="font-data-mono text-data-mono">∞</p>
                                </td>
                                <td class="px-md py-4">
                                    <p class="text-body-sm">Oct 14, 2023</p>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <div
                                        class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="px-3 py-1.5 rounded-full border border-stone-200 bg-white text-body-sm font-medium hover:border-primary hover:text-primary transition-all">View
                                            Profile</button>
                                        <button
                                            class="px-3 py-1.5 rounded-full bg-primary text-white text-body-sm font-medium hover:opacity-90 transition-all">Add
                                            Credit</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 3 -->
                            <tr class="hover:bg-pine-50 transition-colors group">
                                <td class="px-md py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-surface-container-high overflow-hidden border border-stone-200">
                                            <img class="w-full h-full object-cover"
                                                data-alt="Professional studio portrait of a woman in her 40s with a disciplined, focused expression. Minimalist composition, bright office lighting, dark charcoal athletic wear. Modern studio photography, crisp details, airy high-end aesthetic, white neutral background."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlbyOQcAaoffY-FmfHAaw_is8HMeQIoxc2OxOGCpyikmjzW9GknrsLqlYSR8OePhc9z0O_iAemNSsVdUs8QSJMDQgX_Pkfz7MNE4u9nArwfHmGEVKxJOiS6EKOiUV9eukbenBeZvaJwr5dZ4rq7pAQH-hXY9WPqUpMRiXXfh1_qMbGY_kOKiTrwBIXfmtaJIBi_DE6CmJaYEP_stPpHdIWlkYnWOz0nfUOmh8NH1BUhJEHMkPnATmUB469oHirtNGe9Kq4CGk8IXDQ" />
                                        </div>
                                        <div>
                                            <p class="font-body-md font-semibold text-on-surface">Sarah Jenkins</p>
                                            <p class="text-xs text-on-surface-variant">+1 555-4422</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-md py-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-error-container text-on-error-container font-label-caps text-[10px] uppercase font-bold tracking-wider">Expired</span>
                                </td>
                                <td class="px-md py-4">
                                    <p class="text-body-sm">Drop-in Session</p>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <p class="font-data-mono text-data-mono text-error">00</p>
                                </td>
                                <td class="px-md py-4">
                                    <p class="text-body-sm">Sep 28, 2023</p>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <div
                                        class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="px-3 py-1.5 rounded-full border border-stone-200 bg-white text-body-sm font-medium hover:border-primary hover:text-primary transition-all">View
                                            Profile</button>
                                        <button
                                            class="px-3 py-1.5 rounded-full bg-primary text-white text-body-sm font-medium hover:opacity-90 transition-all">Add
                                            Credit</button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Row 4 -->
                            <tr class="hover:bg-pine-50 transition-colors group">
                                <td class="px-md py-4">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-10 h-10 rounded-full bg-surface-container-high overflow-hidden border border-stone-200">
                                            <img class="w-full h-full object-cover"
                                                data-alt="Portrait of a young man with an active lifestyle look. Crisp lighting, wearing a simple light grey workout tee. Professional corporate portraiture, bright and fresh aesthetic, clean background, sharp focus, high contrast, studio management software style."
                                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuDp4invl6F9rrlwS1k_cWHFhY6gHcu2aZ9PVucK24sXUtjH4Uk8p7g_rtw-NU8mTgY_xnbJkT6kBL94tTZp4ct0y7WotLZsUvzZ3zk1SCz8Gn2HaFuOBPJrXl2xccwa5bpNwG3a28LGt3bpxVRx3LMr0jxfvW5rEUpOo3Bw6JiOTzPbzJo-yNZ6lGUs_MZDLYQ1XVZcDqVYGupuJ0w5B8WRjkGHrpRrthw7RU6egR5MHGMbaIKN2veu0ighNQt8fiFx2sxtW3bfQaoH" />
                                        </div>
                                        <div>
                                            <p class="font-body-md font-semibold text-on-surface">Julian Chen</p>
                                            <p class="text-xs text-on-surface-variant">+1 555-6789</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-md py-4">
                                    <span
                                        class="px-3 py-1 rounded-full bg-pine-50 text-pine-600 font-label-caps text-[10px] uppercase font-bold tracking-wider">Active</span>
                                </td>
                                <td class="px-md py-4">
                                    <p class="text-body-sm">20-Class Pack</p>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <p class="font-data-mono text-data-mono">14</p>
                                </td>
                                <td class="px-md py-4">
                                    <p class="text-body-sm">Oct 15, 2023</p>
                                </td>
                                <td class="px-md py-4 text-right">
                                    <div
                                        class="flex justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                        <button
                                            class="px-3 py-1.5 rounded-full border border-stone-200 bg-white text-body-sm font-medium hover:border-primary hover:text-primary transition-all">View
                                            Profile</button>
                                        <button
                                            class="px-3 py-1.5 rounded-full bg-primary text-white text-body-sm font-medium hover:opacity-90 transition-all">Add
                                            Credit</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                    class="px-md py-4 border-t border-stone-200 bg-surface-container-lowest flex justify-between items-center">
                    <p class="text-body-sm text-on-surface-variant">Showing 1-10 of 1,248 members</p>
                    <div class="flex gap-1">
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-on-surface-variant">
                            <span class="material-symbols-outlined text-lg" data-icon="chevron_left">chevron_left</span>
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded bg-primary text-white text-body-sm font-bold">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-body-sm">2</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-body-sm">3</button>
                        <span class="w-8 h-8 flex items-center justify-center text-on-surface-variant">...</span>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-body-sm">125</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center rounded hover:bg-surface-container-low text-on-surface-variant">
                            <span class="material-symbols-outlined text-lg"
                                data-icon="chevron_right">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Dashboard Stats Summary (Bento-lite) -->
            <div class="grid grid-cols-4 gap-gutter mt-lg">
                <div class="bg-white border border-stone-200 p-md rounded-xl">
                    <p class="font-label-caps text-label-caps text-stone-500 uppercase mb-2">Total Active Members</p>
                    <p class="font-headline-md text-headline-md text-on-surface">842</p>
                    <div class="flex items-center gap-1 mt-2 text-pine-600">
                        <span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                        <span class="text-xs font-bold">+12% this month</span>
                    </div>
                </div>
                <div class="bg-white border border-stone-200 p-md rounded-xl">
                    <p class="font-label-caps text-label-caps text-stone-500 uppercase mb-2">Expiring Soon</p>
                    <p class="font-headline-md text-headline-md text-on-surface">24</p>
                    <p class="text-xs text-on-surface-variant mt-2">Next 7 days</p>
                </div>
                <div class="bg-white border border-stone-200 p-md rounded-xl">
                    <p class="font-label-caps text-label-caps text-stone-500 uppercase mb-2">Avg Attendance</p>
                    <p class="font-headline-md text-headline-md text-on-surface">3.2</p>
                    <p class="text-xs text-on-surface-variant mt-2">Visits per week</p>
                </div>
                <div class="bg-white border border-stone-200 p-md rounded-xl">
                    <p class="font-label-caps text-label-caps text-stone-500 uppercase mb-2">New Memberships</p>
                    <p class="font-headline-md text-headline-md text-on-surface">41</p>
                    <div class="flex items-center gap-1 mt-2 text-pine-600">
                        <span class="material-symbols-outlined text-sm" data-icon="trending_up">trending_up</span>
                        <span class="text-xs font-bold">+5 since yesterday</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Simple micro-interactions
        document.querySelectorAll('button, a').forEach(el => {
            el.addEventListener('click', function (e) {
                // Add a subtle click ripple or feedback if desired
            });
        });

        // Search bar focus interaction
        const searchInput = document.querySelector('input[type="text"]');
        const searchContainer = searchInput.closest('div');

        searchInput.addEventListener('focus', () => {
            searchContainer.classList.add('ring-primary', 'ring-1');
        });

        searchInput.addEventListener('blur', () => {
            searchContainer.classList.remove('ring-primary', 'ring-1');
        });
    </script>
</body>

</html>