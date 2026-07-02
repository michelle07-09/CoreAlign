<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>CoreAlign | Pilates Management Dashboard</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Cabinet+Grotesk:wght@700;800&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    },
                    "fontSize": {
                        "data-mono": ["13px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .sidebar-active-indicator {
            width: 4px;
            height: 100%;
            background-color: theme('colors.primary-fixed');
            position: absolute;
            left: 0;
            top: 0;
        }

        .chart-container {
            mask-image: linear-gradient(to bottom, black 0%, transparent 100%);
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: theme('colors.outline-variant');
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: theme('colors.outline');
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md overflow-hidden">
    <!-- Fixed Side Navigation -->
    <aside
        class="fixed left-0 top-0 h-full w-[280px] bg-inverse-surface border-r border-outline-variant flex flex-col py-lg z-50">
        <div class="px-lg mb-xl">
            <h1 class="font-headline-md text-headline-md text-primary-fixed font-bold tracking-tight">CoreAlign</h1>
            <p class="font-label-caps text-label-caps text-surface-variant uppercase tracking-widest mt-1">Pilates
                Management</p>
        </div>
        <nav class="flex-1 space-y-1">
            <!-- Active Tab: Dashboard -->
            <div
                class="relative flex items-center gap-3 px-lg py-3 text-white bg-surface-variant/10 cursor-pointer group transition-colors duration-200">
                <div class="sidebar-active-indicator"></div>
                <span class="material-symbols-outlined text-primary-fixed">dashboard</span>
                <span class="font-body-md">Dashboard</span>
            </div>
            <!-- Inactive Tabs -->
            <div
                class="flex items-center gap-3 px-lg py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 cursor-pointer transition-colors duration-200">
                <span class="material-symbols-outlined">calendar_month</span>
                <span class="font-body-md">Schedule</span>
            </div>
            <div
                class="flex items-center gap-3 px-lg py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 cursor-pointer transition-colors duration-200">
                <span class="material-symbols-outlined">event_available</span>
                <span class="font-body-md">Booking</span>
            </div>
            <div
                class="flex items-center gap-3 px-lg py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 cursor-pointer transition-colors duration-200">
                <span class="material-symbols-outlined">group</span>
                <span class="font-body-md">Members</span>
            </div>
            <div
                class="flex items-center gap-3 px-lg py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 cursor-pointer transition-colors duration-200">
                <span class="material-symbols-outlined">inventory_2</span>
                <span class="font-body-md">Packages</span>
            </div>
            <div
                class="flex items-center gap-3 px-lg py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 cursor-pointer transition-colors duration-200">
                <span class="material-symbols-outlined">payments</span>
                <span class="font-body-md">Finance</span>
            </div>
            <div
                class="flex items-center gap-3 px-lg py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 cursor-pointer transition-colors duration-200">
                <span class="material-symbols-outlined">badge</span>
                <span class="font-body-md">Instructors</span>
            </div>
            <div
                class="flex items-center gap-3 px-lg py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 cursor-pointer transition-colors duration-200">
                <span class="material-symbols-outlined">analytics</span>
                <span class="font-body-md">Reports</span>
            </div>
            <div
                class="flex items-center gap-3 px-lg py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 cursor-pointer transition-colors duration-200">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-body-md">Settings</span>
            </div>
        </nav>
        <div class="px-lg mt-auto pt-lg border-t border-surface-variant/10">
            <div class="flex items-center gap-3 p-2 rounded-xl bg-surface-variant/5">
                <img class="w-10 h-10 rounded-full object-cover"
                    data-alt="A portrait of a professional pilates studio manager, clean-cut, wearing high-performance athletic apparel, soft professional lighting, neutral minimalist background, high-end corporate photography style."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDajbc82NLcsX_6ys8oue1GBTFA_eds01CNt-oqxahiGyj5lt5KEPMBjB5LbrHCDAPwrw16xaqs0gBnfpp0PviWOt418PJrB8SBDavJOffPKwubpIqtVVUuKs2klRULVA7xtiVOFaaXWKVPMMAt6RlHzxKzkyU4KiHPpTnlOuZAPiTivvnAUmI0QjEgg0F4uPJZEDuRxfRINfF8kSkg4Wtj34JJjaJZuh3Bc9peDDXUzWtnGKdlQemMTd1mOSchL1u3El28vApl5txq" />
                <div class="overflow-hidden">
                    <p class="text-white text-body-sm font-semibold truncate">Alex Studio</p>
                    <p class="text-surface-variant text-[11px] truncate">Admin Account</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Top Navigation Bar -->
    <header
        class="fixed top-0 left-[280px] w-[calc(100%-280px)] h-16 bg-surface border-b border-secondary-fixed flex justify-between items-center px-lg z-40">
        <div class="flex items-center gap-4">
            <h2 class="font-headline-sm text-headline-sm text-on-surface">Dashboard</h2>
            <div class="relative hidden lg:block">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
                <input
                    class="pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full text-body-sm w-64 focus:ring-2 focus:ring-primary/20"
                    placeholder="Search members, classes..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-md">
            <button
                class="w-10 h-10 flex items-center justify-center rounded-full text-on-surface-variant hover:bg-surface-container-low transition-all">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button
                class="w-10 h-10 flex items-center justify-center rounded-full text-on-surface-variant hover:bg-surface-container-low transition-all">
                <span class="material-symbols-outlined">help_outline</span>
            </button>
            <div class="h-8 w-[1px] bg-secondary-fixed mx-2"></div>
            <div class="flex items-center gap-3">
                <div class="text-right">
                    <p class="font-body-sm font-semibold text-on-surface">Studio HQ</p>
                    <p class="text-[11px] text-on-surface-variant">South Jakarta Branch</p>
                </div>
                <div
                    class="w-8 h-8 rounded-full bg-primary-fixed flex items-center justify-center text-on-primary-fixed font-bold text-xs">
                    SH
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-[280px] pt-16 h-screen overflow-y-auto bg-background/50">
        <div class="p-lg max-w-[1440px] mx-auto space-y-lg">
            <!-- KPI Section -->
            <section class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-gutter">
                <!-- KPI Card 1 -->
                <div
                    class="bg-surface-container-lowest p-md rounded-xl border border-stone-200 flex flex-col justify-between hover:bg-primary-fixed/5 transition-colors group">
                    <div class="flex justify-between items-start mb-sm">
                        <span
                            class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Total
                            Bookings Today</span>
                        <div class="p-1.5 rounded-lg bg-surface-container text-primary">
                            <span class="material-symbols-outlined text-sm">event</span>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <span class="font-data-mono text-[32px] text-on-surface leading-none">42</span>
                        <span class="text-primary text-[12px] font-bold">+12%</span>
                    </div>
                </div>
                <!-- KPI Card 2 -->
                <div
                    class="bg-surface-container-lowest p-md rounded-xl border border-stone-200 flex flex-col justify-between hover:bg-primary-fixed/5 transition-colors group">
                    <div class="flex justify-between items-start mb-sm">
                        <span
                            class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Attendance</span>
                        <div class="p-1.5 rounded-lg bg-surface-container text-primary">
                            <span class="material-symbols-outlined text-sm">how_to_reg</span>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <span class="font-data-mono text-[32px] text-on-surface leading-none">92%</span>
                        <span class="text-primary text-[12px] font-bold">+2.4%</span>
                    </div>
                </div>
                <!-- KPI Card 3 -->
                <div
                    class="bg-surface-container-lowest p-md rounded-xl border border-stone-200 flex flex-col justify-between hover:bg-primary-fixed/5 transition-colors group">
                    <div class="flex justify-between items-start mb-sm">
                        <span
                            class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Revenue</span>
                        <div class="p-1.5 rounded-lg bg-surface-container text-primary">
                            <span class="material-symbols-outlined text-sm">payments</span>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <span class="font-data-mono text-[28px] text-on-surface leading-none tracking-tight">Rp
                            8.5M</span>
                        <span class="text-on-surface-variant text-[12px]">Daily Target</span>
                    </div>
                </div>
                <!-- KPI Card 4 -->
                <div
                    class="bg-surface-container-lowest p-md rounded-xl border border-stone-200 flex flex-col justify-between hover:bg-primary-fixed/5 transition-colors group">
                    <div class="flex justify-between items-start mb-sm">
                        <span
                            class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider">Occupancy</span>
                        <div class="p-1.5 rounded-lg bg-surface-container text-primary">
                            <span class="material-symbols-outlined text-sm">chair_alt</span>
                        </div>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <span class="font-data-mono text-[32px] text-on-surface leading-none">78%</span>
                        <span class="text-error text-[12px] font-bold">-4%</span>
                    </div>
                </div>
            </section>
            <!-- Grid Layout for Table and Chart -->
            <div class="grid grid-cols-12 gap-gutter">
                <!-- Table Section (Asymmetric span) -->
                <section
                    class="col-span-12 xl:col-span-8 bg-surface-container-lowest rounded-xl border border-stone-200 overflow-hidden flex flex-col h-full">
                    <div class="p-md border-b border-stone-200 flex justify-between items-center">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Upcoming Classes Today</h3>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-1.5 text-body-sm font-semibold border border-stone-200 rounded-full hover:bg-surface-container-low transition-all">Filter</button>
                            <button
                                class="px-4 py-1.5 text-body-sm font-semibold bg-primary text-white rounded-full hover:opacity-90 transition-all">+
                                New Class</button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead>
                                <tr class="bg-background">
                                    <th
                                        class="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">
                                        Time</th>
                                    <th
                                        class="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">
                                        Class Type</th>
                                    <th
                                        class="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">
                                        Instructor</th>
                                    <th
                                        class="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">
                                        Capacity</th>
                                    <th
                                        class="px-md py-3 font-label-caps text-label-caps text-on-surface-variant uppercase">
                                        Status</th>
                                    <th class="px-md py-3 text-right"></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-200">
                                <tr class="hover:bg-surface-container transition-colors">
                                    <td class="px-md py-4 font-data-mono text-on-surface">08:00 AM</td>
                                    <td class="px-md py-4 font-body-md font-semibold text-on-surface">Advanced Reformer
                                    </td>
                                    <td class="px-md py-4 flex items-center gap-2 text-on-surface">
                                        <div
                                            class="w-6 h-6 rounded-full bg-tertiary-fixed flex items-center justify-center text-[10px] font-bold">
                                            MK</div>
                                        <span>Maya K.</span>
                                    </td>
                                    <td class="px-md py-4 font-data-mono text-on-surface">8/10</td>
                                    <td class="px-md py-4">
                                        <span
                                            class="px-3 py-1 rounded-full bg-primary-fixed/20 text-primary text-[12px] font-bold">Confirmed</span>
                                    </td>
                                    <td class="px-md py-4 text-right">
                                        <button class="text-on-surface-variant hover:text-on-surface"><span
                                                class="material-symbols-outlined text-sm">more_vert</span></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-container transition-colors">
                                    <td class="px-md py-4 font-data-mono text-on-surface">10:30 AM</td>
                                    <td class="px-md py-4 font-body-md font-semibold text-on-surface">Mat Foundations
                                    </td>
                                    <td class="px-md py-4 flex items-center gap-2 text-on-surface">
                                        <div
                                            class="w-6 h-6 rounded-full bg-secondary-fixed flex items-center justify-center text-[10px] font-bold">
                                            JD</div>
                                        <span>John D.</span>
                                    </td>
                                    <td class="px-md py-4 font-data-mono text-on-surface">12/12</td>
                                    <td class="px-md py-4">
                                        <span
                                            class="px-3 py-1 rounded-full bg-error-container text-on-error-container text-[12px] font-bold">Waitlist
                                            (3)</span>
                                    </td>
                                    <td class="px-md py-4 text-right">
                                        <button class="text-on-surface-variant hover:text-on-surface"><span
                                                class="material-symbols-outlined text-sm">more_vert</span></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-container transition-colors">
                                    <td class="px-md py-4 font-data-mono text-on-surface">02:00 PM</td>
                                    <td class="px-md py-4 font-body-md font-semibold text-on-surface">Flow Pilates</td>
                                    <td class="px-md py-4 flex items-center gap-2 text-on-surface">
                                        <div
                                            class="w-6 h-6 rounded-full bg-primary-fixed flex items-center justify-center text-[10px] font-bold">
                                            SR</div>
                                        <span>Siti R.</span>
                                    </td>
                                    <td class="px-md py-4 font-data-mono text-on-surface">5/10</td>
                                    <td class="px-md py-4">
                                        <span
                                            class="px-3 py-1 rounded-full bg-primary-fixed/20 text-primary text-[12px] font-bold">Confirmed</span>
                                    </td>
                                    <td class="px-md py-4 text-right">
                                        <button class="text-on-surface-variant hover:text-on-surface"><span
                                                class="material-symbols-outlined text-sm">more_vert</span></button>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-container transition-colors">
                                    <td class="px-md py-4 font-data-mono text-on-surface">05:30 PM</td>
                                    <td class="px-md py-4 font-body-md font-semibold text-on-surface">Reformer Sculpt
                                    </td>
                                    <td class="px-md py-4 flex items-center gap-2 text-on-surface">
                                        <div
                                            class="w-6 h-6 rounded-full bg-tertiary-fixed flex items-center justify-center text-[10px] font-bold">
                                            MK</div>
                                        <span>Maya K.</span>
                                    </td>
                                    <td class="px-md py-4 font-data-mono text-on-surface">9/10</td>
                                    <td class="px-md py-4">
                                        <span
                                            class="px-3 py-1 rounded-full bg-primary-fixed/20 text-primary text-[12px] font-bold">Confirmed</span>
                                    </td>
                                    <td class="px-md py-4 text-right">
                                        <button class="text-on-surface-variant hover:text-on-surface"><span
                                                class="material-symbols-outlined text-sm">more_vert</span></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-auto p-md text-center border-t border-stone-200 bg-surface-container-low/50">
                        <button class="text-primary font-semibold text-body-sm hover:underline">View Full
                            Schedule</button>
                    </div>
                </section>
                <!-- Chart Section -->
                <section
                    class="col-span-12 xl:col-span-4 bg-surface-container-lowest rounded-xl border border-stone-200 p-md flex flex-col h-full">
                    <div class="mb-lg">
                        <h3 class="font-headline-sm text-headline-sm text-on-surface">Weekly Trends</h3>
                        <p class="text-on-surface-variant text-body-sm">Occupancy rate over last 7 days</p>
                    </div>
                    <div class="relative flex-1 min-h-[250px] flex items-end gap-2 pb-6 pt-4">
                        <!-- Simulated Chart Grid -->
                        <div class="absolute inset-0 flex flex-col justify-between py-6">
                            <div class="border-b border-dashed border-stone-200 w-full h-0"></div>
                            <div class="border-b border-dashed border-stone-200 w-full h-0"></div>
                            <div class="border-b border-dashed border-stone-200 w-full h-0"></div>
                            <div class="border-b border-dashed border-stone-200 w-full h-0"></div>
                        </div>
                        <!-- Chart Bars (Simulated Tonal Visuals) -->
                        <div class="relative flex-1 flex flex-col justify-end items-center gap-2 group h-full">
                            <div
                                class="w-full bg-primary/20 rounded-t-lg h-[60%] transition-all group-hover:bg-primary/40 relative">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                    65%</div>
                            </div>
                            <span class="font-label-caps text-[10px] text-on-surface-variant">MON</span>
                        </div>
                        <div class="relative flex-1 flex flex-col justify-end items-center gap-2 group h-full">
                            <div
                                class="w-full bg-primary/20 rounded-t-lg h-[45%] transition-all group-hover:bg-primary/40 relative">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                    45%</div>
                            </div>
                            <span class="font-label-caps text-[10px] text-on-surface-variant">TUE</span>
                        </div>
                        <div class="relative flex-1 flex flex-col justify-end items-center gap-2 group h-full">
                            <div
                                class="w-full bg-primary/20 rounded-t-lg h-[85%] transition-all group-hover:bg-primary/40 relative">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                    85%</div>
                            </div>
                            <span class="font-label-caps text-[10px] text-on-surface-variant">WED</span>
                        </div>
                        <div class="relative flex-1 flex flex-col justify-end items-center gap-2 group h-full">
                            <div class="w-full bg-primary/60 rounded-t-lg h-[95%] relative">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] px-2 py-1 rounded opacity-100 whitespace-nowrap">
                                    92%</div>
                            </div>
                            <span class="font-label-caps text-[10px] text-primary font-bold">THU</span>
                        </div>
                        <div class="relative flex-1 flex flex-col justify-end items-center gap-2 group h-full">
                            <div
                                class="w-full bg-primary/20 rounded-t-lg h-[70%] transition-all group-hover:bg-primary/40 relative">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                    70%</div>
                            </div>
                            <span class="font-label-caps text-[10px] text-on-surface-variant">FRI</span>
                        </div>
                        <div class="relative flex-1 flex flex-col justify-end items-center gap-2 group h-full">
                            <div
                                class="w-full bg-primary/20 rounded-t-lg h-[55%] transition-all group-hover:bg-primary/40 relative">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                    55%</div>
                            </div>
                            <span class="font-label-caps text-[10px] text-on-surface-variant">SAT</span>
                        </div>
                        <div class="relative flex-1 flex flex-col justify-end items-center gap-2 group h-full">
                            <div
                                class="w-full bg-primary/20 rounded-t-lg h-[40%] transition-all group-hover:bg-primary/40 relative">
                                <div
                                    class="absolute -top-8 left-1/2 -translate-x-1/2 bg-inverse-surface text-white text-[10px] px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">
                                    40%</div>
                            </div>
                            <span class="font-label-caps text-[10px] text-on-surface-variant">SUN</span>
                        </div>
                    </div>
                    <div class="mt-lg p-md bg-surface-container rounded-xl border border-stone-200">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">tips_and_updates</span>
                            <div class="text-body-sm leading-snug">
                                <span class="font-bold">Insight:</span> Thursday morning sessions are currently reaching
                                peak capacity. Consider adding a 09:30 AM slot.
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Bottom Quick Actions / Bento Style -->
            <section class="grid grid-cols-1 lg:grid-cols-3 gap-gutter pb-lg">
                <div
                    class="bg-primary text-on-primary-container p-lg rounded-xl flex flex-col justify-between overflow-hidden relative group">
                    <div class="absolute top-0 right-0 p-4 opacity-10 group-hover:opacity-20 transition-opacity">
                        <span class="material-symbols-outlined !text-[120px]">fitness_center</span>
                    </div>
                    <div>
                        <h4 class="font-headline-sm text-headline-sm mb-2">Instructor Availability</h4>
                        <p class="text-body-sm text-white/80 max-w-[200px]">Review and approve leave requests for the
                            upcoming holiday season.</p>
                    </div>
                    <button
                        class="mt-lg px-6 py-2 bg-white text-primary rounded-full font-bold text-body-sm self-start hover:bg-primary-fixed transition-colors">Manage
                        Staff</button>
                </div>
                <div
                    class="bg-tertiary-container text-on-tertiary-container p-lg rounded-xl flex flex-col justify-between border border-stone-200">
                    <div>
                        <h4 class="font-headline-sm text-headline-sm mb-2">Member Retention</h4>
                        <div class="flex items-center gap-4 mt-4">
                            <div class="flex -space-x-3">
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-secondary-fixed"></div>
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-primary-fixed"></div>
                                <div class="w-10 h-10 rounded-full border-2 border-white bg-tertiary-fixed"></div>
                                <div
                                    class="w-10 h-10 rounded-full border-2 border-white bg-surface-container flex items-center justify-center text-[10px] font-bold">
                                    +15</div>
                            </div>
                            <span class="text-body-sm font-semibold">15 new memberships expiring soon.</span>
                        </div>
                    </div>
                    <button
                        class="mt-lg px-6 py-2 bg-inverse-surface text-white rounded-full font-bold text-body-sm self-start hover:opacity-90 transition-all">Send
                        Reminders</button>
                </div>
                <div
                    class="bg-surface-container-lowest p-lg rounded-xl border border-stone-200 flex flex-col justify-between h-full">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-headline-sm text-headline-sm">Studio Status</h4>
                        <span
                            class="px-2 py-1 bg-primary-fixed/20 text-primary text-[10px] font-bold rounded">LIVE</span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-body-sm">
                            <span class="text-on-surface-variant">Current Reformer Usage</span>
                            <span class="font-data-mono">18 / 24</span>
                        </div>
                        <div class="w-full bg-surface-container h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[75%] rounded-full"></div>
                        </div>
                        <div class="flex justify-between items-center text-body-sm">
                            <span class="text-on-surface-variant">Active Instructors</span>
                            <span class="font-data-mono">6 / 8</span>
                        </div>
                    </div>
                    <button
                        class="mt-lg text-primary text-body-sm font-bold flex items-center gap-1 hover:gap-2 transition-all">
                        View Live Monitoring <span class="material-symbols-outlined text-sm">arrow_forward</span>
                    </button>
                </div>
            </section>
        </div>
    </main>
    <script>
        // Micro-interactions and subtle effects
        document.querySelectorAll('tr').forEach(row => {
            row.addEventListener('mouseenter', () => {
                row.style.transform = 'translateX(4px)';
                row.style.transition = 'transform 0.2s ease-out';
            });
            row.addEventListener('mouseleave', () => {
                row.style.transform = 'translateX(0)';
            });
        });

        // Tonal card pulse on load
        window.addEventListener('load', () => {
            const cards = document.querySelectorAll('.grid > div');
            cards.forEach((card, i) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(10px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.4s cubic-bezier(0.16, 1, 0.3, 1)';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, i * 50);
            });
        });
    </script>
</body>

</html>