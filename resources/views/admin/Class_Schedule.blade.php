<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>CoreAlign | Class Schedule Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Cabinet Grotesk (Simulated via sans-serif fallback if not available, but using specific weight tokens) -->
    <style>
        @import url('https://fonts.cdnfonts.com/css/cabinet-grotesk');

        body {
            font-family: 'Inter Tight', sans-serif;
            background-color: #f8faf7;
            /* canvas-50 / background */
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(8px);
            border: 1px solid #e0e3e5;
            /* stone-200 / secondary-fixed */
        }

        .schedule-grid {
            display: grid;
            grid-template-columns: 80px repeat(7, 1fr);
            grid-auto-rows: minmax(100px, auto);
        }

        .time-marker {
            height: 100px;
            display: flex;
            align-items: start;
            justify-content: flex-end;
            padding-right: 12px;
            margin-top: -12px;
        }

        .slot-hover-actions {
            opacity: 0;
            transition: opacity 0.2s ease-in-out;
        }

        .class-card:hover .slot-hover-actions {
            opacity: 1;
        }
    </style>
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
                        "body-lg": ["Inter Tight"],
                        "body-sm": ["Inter Tight"],
                        "headline-sm": ["Cabinet Grotesk"],
                        "body-md": ["Inter Tight"]
                    },
                    "fontSize": {
                        "data-mono": ["13px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500" }],
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
</head>

<body class="bg-background text-on-surface">
    <!-- Sidebar Shell (Shared Component) -->
    <aside
        class="fixed left-0 top-0 h-full w-[280px] bg-inverse-surface border-r border-outline-variant flex flex-col py-lg z-50">
        <div class="px-lg mb-xl">
            <h1 class="font-headline-md text-headline-md text-primary-fixed font-bold">CoreAlign</h1>
            <p class="font-body-md text-body-md text-surface-variant/70">Pilates Management</p>
        </div>
        <nav class="flex-grow space-y-1">
            <!-- Dashboard -->
            <div
                class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </div>
            <!-- Schedule (Active) -->
            <div
                class="flex items-center gap-3 px-4 py-3 text-white border-l-4 border-primary-fixed bg-surface-variant/10 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="calendar_month">calendar_month</span>
                <span class="font-body-md text-body-md">Schedule</span>
            </div>
            <!-- Other Nav Items -->
            <div
                class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="event_available">event_available</span>
                <span class="font-body-md text-body-md">Booking</span>
            </div>
            <div
                class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                <span class="font-body-md text-body-md">Members</span>
            </div>
            <div
                class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="inventory_2">inventory_2</span>
                <span class="font-body-md text-body-md">Packages</span>
            </div>
            <div
                class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="payments">payments</span>
                <span class="font-body-md text-body-md">Finance</span>
            </div>
            <div
                class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="badge">badge</span>
                <span class="font-body-md text-body-md">Instructors</span>
            </div>
            <div
                class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="analytics">analytics</span>
                <span class="font-body-md text-body-md">Reports</span>
            </div>
            <div
                class="flex items-center gap-3 px-4 py-3 text-surface-variant hover:text-white hover:bg-surface-variant/5 transition-colors duration-200 cursor-pointer active:scale-95">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-body-md text-body-md">Settings</span>
            </div>
        </nav>
        <div class="px-lg pt-xl border-t border-outline-variant/30 mt-auto">
            <div class="flex items-center gap-3">
                <img class="w-10 h-10 rounded-full object-cover"
                    data-alt="A professional studio logo for CoreAlign Pilates, featuring a minimalist abstract spine icon in a clean corporate style, integrated into a high-end SaaS navigation panel."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuOldFuSi0srC2iLreojfm-pdYFNRCOVDkf_-OJVRxKAlEfqYy8GuBWnqxgzRbWltC9kxH8M0kS7p6xu0tzgfzWesTJDfn6i611kv-yQwPjdqLyomZd-NftyjKj_t0ztHabRVc0al8bT89E4Pu81tnzddX6FzgswXeklpkhd59B8uN6hVIrKnFXpi0e-6co1KY2T96gR4m-8WqELA40z1haMdcAX5mfcEJDIYdY7bolrceSnsJSMAn2CgqbKj_xSBSP5fWPSZ-qCs6" />
                <div>
                    <p class="font-label-caps text-label-caps text-white">ADMIN PORTAL</p>
                    <p class="font-body-sm text-body-sm text-surface-variant">Version 2.4.1</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Top Bar -->
    <header
        class="fixed top-0 left-[280px] w-[calc(100%-280px)] h-16 bg-surface border-b border-secondary-fixed flex justify-between items-center px-lg z-40">
        <div class="flex items-center gap-4">
            <h2 class="font-headline-sm text-headline-sm text-on-surface">Class Schedule</h2>
            <div
                class="flex items-center bg-surface-container-low px-3 py-1.5 rounded-full border border-secondary-fixed">
                <span class="material-symbols-outlined text-secondary mr-2" data-icon="search">search</span>
                <input class="bg-transparent border-none focus:ring-0 text-body-sm p-0 w-48"
                    placeholder="Search class or instructor..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-4">
            <button
                class="flex items-center gap-2 bg-primary px-6 py-2 rounded-full text-white font-body-md hover:bg-primary-container transition-all active:scale-95">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                Add New Class
            </button>
            <div class="h-8 w-[1px] bg-secondary-fixed"></div>
            <span
                class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:bg-surface-container-low p-2 rounded-full transition-all"
                data-icon="notifications">notifications</span>
            <span
                class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:bg-surface-container-low p-2 rounded-full transition-all"
                data-icon="help_outline">help_outline</span>
            <img class="w-8 h-8 rounded-full border border-secondary-fixed"
                data-alt="A professional headshot of a middle-aged Pilates studio administrator with a confident smile, wearing professional athletic attire, in a bright modern studio setting."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZir9rvZXlasnNIpFgXH-9iTMnTWGcnNwvJtNtWLinn19LkQb1F7dm0ZMC75MAFvCscdUGQaikS6oN233ycIOKN8z4iY5krZwDbWcEnuan0CNJAX0F1HVBHxg6DTR-cwJWqwBVL8jZqqu8ZvNUD4vA8ZtDjF-Zj03lmx4fC-usY3RgmPaNcCi0T8Rq-dw1-0XljL4dG-x7ijGLsv1z-GOLgfgzNvKtRddQ4EQ6iQaiR_PhgQ4Wrd45Z0HutI71Fto9tOeTZVrZHzr9" />
        </div>
    </header>
    <!-- Main Canvas -->
    <main class="ml-[280px] pt-16 min-h-screen">
        <div class="p-lg">
            <!-- Calendar Header / Controls -->
            <div class="flex justify-between items-end mb-lg">
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface mb-1">September 2024</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">Weekly Management View</p>
                </div>
                <div
                    class="flex items-center gap-2 bg-surface-container-low p-1 rounded-xl border border-secondary-fixed">
                    <button
                        class="px-4 py-2 font-label-caps text-label-caps bg-surface-white shadow-sm rounded-lg border border-secondary-fixed text-on-surface">WEEK</button>
                    <button
                        class="px-4 py-2 font-label-caps text-label-caps text-secondary hover:text-on-surface transition-colors">MONTH</button>
                    <button
                        class="px-4 py-2 font-label-caps text-label-caps text-secondary hover:text-on-surface transition-colors">DAY</button>
                </div>
            </div>
            <!-- Calendar Container -->
            <div class="bg-surface-white rounded-xl border border-secondary-fixed overflow-hidden">
                <!-- Day Headers -->
                <div class="schedule-grid bg-surface-container border-b border-secondary-fixed">
                    <div class="p-4 border-r border-secondary-fixed"></div>
                    <div class="p-4 border-r border-secondary-fixed text-center">
                        <p class="font-label-caps text-label-caps text-secondary">MON</p>
                        <p class="font-headline-sm text-headline-sm">09</p>
                    </div>
                    <div class="p-4 border-r border-secondary-fixed text-center">
                        <p class="font-label-caps text-label-caps text-secondary">TUE</p>
                        <p class="font-headline-sm text-headline-sm">10</p>
                    </div>
                    <div class="p-4 border-r border-secondary-fixed text-center">
                        <p class="font-label-caps text-label-caps text-secondary">WED</p>
                        <p class="font-headline-sm text-headline-sm">11</p>
                    </div>
                    <div class="p-4 border-r border-secondary-fixed text-center bg-primary/5">
                        <p class="font-label-caps text-label-caps text-primary">THU</p>
                        <p class="font-headline-sm text-headline-sm text-primary">12</p>
                    </div>
                    <div class="p-4 border-r border-secondary-fixed text-center">
                        <p class="font-label-caps text-label-caps text-secondary">FRI</p>
                        <p class="font-headline-sm text-headline-sm">13</p>
                    </div>
                    <div class="p-4 border-r border-secondary-fixed text-center">
                        <p class="font-label-caps text-label-caps text-secondary">SAT</p>
                        <p class="font-headline-sm text-headline-sm">14</p>
                    </div>
                    <div class="p-4 text-center">
                        <p class="font-label-caps text-label-caps text-secondary">SUN</p>
                        <p class="font-headline-sm text-headline-sm">15</p>
                    </div>
                </div>
                <!-- Grid Body -->
                <div class="relative max-h-[700px] overflow-y-auto">
                    <!-- Time Lines / Slots -->
                    <div class="schedule-grid relative">
                        <!-- Left Time Labels -->
                        <div class="border-r border-secondary-fixed">
                            <div class="time-marker font-data-mono text-data-mono text-secondary">08:00</div>
                            <div class="time-marker font-data-mono text-data-mono text-secondary">09:00</div>
                            <div class="time-marker font-data-mono text-data-mono text-secondary">10:00</div>
                            <div class="time-marker font-data-mono text-data-mono text-secondary">11:00</div>
                            <div class="time-marker font-data-mono text-data-mono text-secondary">12:00</div>
                            <div class="time-marker font-data-mono text-data-mono text-secondary">13:00</div>
                            <div class="time-marker font-data-mono text-data-mono text-secondary">14:00</div>
                        </div>
                        <!-- Days Grids -->
                        <!-- Repeat for 7 days -->
                        <div class="border-r border-secondary-fixed relative">
                            <!-- Slot placeholders (dashed) -->
                            <div class="h-[100px] border-b border-secondary-fixed">
                                <!-- Actual Class Card -->
                                <div
                                    class="class-card absolute top-2 left-2 right-2 h-[84px] bg-primary/10 border border-primary/20 rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <div class="flex justify-between items-start">
                                        <p
                                            class="font-label-caps text-[11px] text-primary-fixed-dim bg-primary px-2 py-0.5 rounded-full">
                                            REFORMER II</p>
                                        <span class="material-symbols-outlined text-primary text-sm"
                                            data-icon="more_vert">more_vert</span>
                                    </div>
                                    <p class="font-body-md font-bold text-on-surface mt-1">Elena K.</p>
                                    <p class="font-data-mono text-[10px] text-on-surface-variant">08:00 - 08:50</p>
                                    <!-- Hover Actions -->
                                    <div
                                        class="slot-hover-actions absolute inset-0 bg-primary/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            class="bg-white text-primary px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold hover:bg-surface-variant transition-colors">EDIT</button>
                                        <button
                                            class="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px] hover:bg-white/10 transition-colors">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div class="h-[100px] border-b border-secondary-fixed">
                                <div
                                    class="class-card absolute top-[204px] left-2 right-2 h-[84px] bg-tertiary-fixed border border-outline-variant rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        class="font-label-caps text-[11px] text-tertiary-container bg-tertiary-fixed-dim px-2 py-0.5 rounded-full inline-block">
                                        FLOW</p>
                                    <p class="font-body-md font-bold text-on-surface mt-1">Marcus J.</p>
                                    <p class="font-data-mono text-[10px] text-on-surface-variant">10:00 - 10:50</p>
                                    <div
                                        class="slot-hover-actions absolute inset-0 bg-on-surface-variant/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            class="bg-white text-on-surface px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            class="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        <!-- Repeat for Tuesday, etc. (Abbreviated for structure) -->
                        <div class="border-r border-secondary-fixed relative">
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div class="h-[100px] border-b border-secondary-fixed">
                                <div
                                    class="class-card absolute top-[104px] left-2 right-2 h-[184px] bg-primary/10 border border-primary/20 rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        class="font-label-caps text-[11px] text-primary-fixed-dim bg-primary px-2 py-0.5 rounded-full inline-block">
                                        TOWER INTENSIVE</p>
                                    <p class="font-body-md font-bold text-on-surface mt-1">Sarah L.</p>
                                    <p class="font-data-mono text-[10px] text-on-surface-variant">09:00 - 10:45</p>
                                    <div
                                        class="slot-hover-actions absolute inset-0 bg-primary/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            class="bg-white text-primary px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            class="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div class="h-[100px] border-b border-secondary-fixed"></div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        <!-- Wednesday -->
                        <div class="border-r border-secondary-fixed relative">
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div class="h-[100px] border-b border-secondary-fixed">
                                <div
                                    class="class-card absolute top-[204px] left-2 right-2 h-[84px] bg-primary/10 border border-primary/20 rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        class="font-label-caps text-[11px] text-primary-fixed-dim bg-primary px-2 py-0.5 rounded-full inline-block">
                                        REFORMER I</p>
                                    <p class="font-body-md font-bold text-on-surface mt-1">Elena K.</p>
                                    <p class="font-data-mono text-[10px] text-on-surface-variant">10:00 - 10:50</p>
                                    <div
                                        class="slot-hover-actions absolute inset-0 bg-primary/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            class="bg-white text-primary px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            class="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        <!-- Thursday -->
                        <div class="border-r border-secondary-fixed relative bg-primary/5">
                            <div class="h-[100px] border-b border-secondary-fixed">
                                <div
                                    class="class-card absolute top-2 left-2 right-2 h-[84px] bg-primary border border-primary rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        class="font-label-caps text-[11px] text-primary bg-white px-2 py-0.5 rounded-full inline-block">
                                        CHAIR LAB</p>
                                    <p class="font-body-md font-bold text-white mt-1">Marcus J.</p>
                                    <p class="font-data-mono text-[10px] text-white/80">08:00 - 08:50</p>
                                    <div
                                        class="slot-hover-actions absolute inset-0 bg-white/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            class="bg-primary text-white px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            class="text-primary border border-primary/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        <!-- Friday -->
                        <div class="border-r border-secondary-fixed relative">
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                        <!-- Saturday -->
                        <div class="border-r border-secondary-fixed relative">
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div class="h-[100px] border-b border-secondary-fixed">
                                <div
                                    class="class-card absolute top-[104px] left-2 right-2 h-[84px] bg-tertiary-fixed border border-outline-variant rounded-lg p-3 group transition-all hover:shadow-lg cursor-pointer">
                                    <p
                                        class="font-label-caps text-[11px] text-tertiary-container bg-tertiary-fixed-dim px-2 py-0.5 rounded-full inline-block">
                                        WKDY WARRIOR</p>
                                    <p class="font-body-md font-bold text-on-surface mt-1">Elena K.</p>
                                    <p class="font-data-mono text-[10px] text-on-surface-variant">09:00 - 09:50</p>
                                    <div
                                        class="slot-hover-actions absolute inset-0 bg-on-surface-variant/95 rounded-lg flex flex-col justify-center items-center gap-2 z-10">
                                        <button
                                            class="bg-white text-on-surface px-4 py-1.5 rounded-full font-label-caps text-[11px] font-bold">EDIT</button>
                                        <button
                                            class="text-white border border-white/30 px-3 py-1 rounded-full font-label-caps text-[10px]">VIEW
                                            BOOKINGS</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Sunday -->
                        <div class="relative">
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                            <div
                                class="h-[100px] border-b border-secondary-fixed border-dashed border-2 border-stone-100 m-1 rounded-lg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bottom Stats / Quick View Bento -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter mt-lg">
                <div
                    class="bg-surface-white p-md rounded-xl border border-secondary-fixed flex flex-col justify-center">
                    <p class="font-label-caps text-label-caps text-secondary uppercase tracking-widest mb-1">Total
                        Classes</p>
                    <div class="flex items-end gap-2">
                        <span class="font-headline-md text-headline-md text-on-surface">42</span>
                        <span class="text-primary font-body-sm mb-1">+4 from last wk</span>
                    </div>
                </div>
                <div
                    class="bg-surface-white p-md rounded-xl border border-secondary-fixed flex flex-col justify-center">
                    <p class="font-label-caps text-label-caps text-secondary uppercase tracking-widest mb-1">Avg
                        Occupancy</p>
                    <div class="flex items-end gap-2">
                        <span class="font-headline-md text-headline-md text-on-surface">88%</span>
                        <div class="w-16 h-2 bg-secondary-fixed rounded-full mb-2 overflow-hidden">
                            <div class="h-full bg-primary" style="width: 88%"></div>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-surface-white p-md rounded-xl border border-secondary-fixed flex flex-col justify-center">
                    <p class="font-label-caps text-label-caps text-secondary uppercase tracking-widest mb-1">
                        Cancellations</p>
                    <div class="flex items-end gap-2">
                        <span class="font-headline-md text-headline-md text-on-surface">12</span>
                        <span class="text-error font-body-sm mb-1">High for Reformer II</span>
                    </div>
                </div>
                <div
                    class="bg-inverse-surface p-md rounded-xl border border-outline-variant flex flex-col justify-center">
                    <p class="font-label-caps text-label-caps text-primary-fixed uppercase tracking-widest mb-1">Next
                        Class Starts In</p>
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-fixed" data-icon="timer">timer</span>
                        <span class="font-headline-md text-headline-md text-white font-data-mono">14:02</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Micro-interaction for hover effects or data refreshing simulation
        document.querySelectorAll('.class-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                // Potential logic for dynamic tooltips or data fetching
            });
        });

        // Simple time scroll sync or horizontal drag logic could be added here if needed
        const container = document.querySelector('.overflow-y-auto');
        // Start scroll at a reasonable hour (e.g., 8am)
        container.scrollTop = 0; 
    </script>
</body>

</html>