<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AeroPilates Studio Settings</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600&amp;family=Cabinet+Grotesk:wght@700;800&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
        rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
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
                        "secondary-fixed-dim": "#c4c7c9",
                        "on-primary-container": "#a1efc7",
                        "inverse-on-surface": "#eff1ee",
                        "error-container": "#ffdad6",
                        "on-secondary-container": "#5f6365",
                        "secondary-fixed": "#e0e3e5",
                        "surface-container-high": "#e7e9e6",
                        "inverse-surface": "#2e312f",
                        "on-secondary": "#ffffff",
                        "tertiary-container": "#5f645c",
                        "surface-container-low": "#f2f4f1",
                        "primary-fixed-dim": "#8ad6af",
                        "on-tertiary": "#ffffff",
                        "surface-dim": "#d8dbd8",
                        "on-tertiary-container": "#dce1d6",
                        "surface-container-highest": "#e1e3e0",
                        "on-error": "#ffffff",
                        "surface-bright": "#f8faf7",
                        "on-primary-fixed-variant": "#005236",
                        "tertiary": "#474c45",
                        "tertiary-fixed": "#dfe4da",
                        "primary-fixed": "#a5f3ca",
                        "outline": "#6f7a72",
                        "error": "#ba1a1a",
                        "outline-variant": "#bfc9c1",
                        "on-secondary-fixed": "#181c1e",
                        "on-tertiary-fixed-variant": "#434841",
                        "on-tertiary-fixed": "#181d17",
                        "on-primary": "#ffffff",
                        "on-surface": "#191c1b",
                        "on-primary-fixed": "#002114",
                        "on-secondary-fixed-variant": "#43474a",
                        "primary": "#005639",
                        "on-background": "#191c1b",
                        "tertiary-fixed-dim": "#c3c8be",
                        "background": "#f8faf7",
                        "surface-tint": "#1a6b4b",
                        "on-error-container": "#93000a",
                        "surface-variant": "#e1e3e0",
                        "surface-container-lowest": "#ffffff",
                        "primary-container": "#1f6f4f",
                        "on-surface-variant": "#3f4943",
                        "secondary-container": "#dde0e3",
                        "surface-container": "#eceeeb",
                        "inverse-primary": "#8ad6af",
                        "surface": "#f8faf7",
                        "secondary": "#5b5f61"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "4px",
                        "container-margin": "24px",
                        "sm": "8px",
                        "2xl": "48px",
                        "xs": "4px",
                        "xl": "32px",
                        "lg": "24px",
                        "md": "16px",
                        "gutter": "16px"
                    },
                    "fontFamily": {
                        "data-mono": ["JetBrains Mono"],
                        "body-lg": ["Inter Tight"],
                        "label-caps": ["Inter Tight"],
                        "headline-sm": ["Cabinet Grotesk"],
                        "display-lg": ["Cabinet Grotesk"],
                        "body-md": ["Inter Tight"],
                        "display-lg-mobile": ["Cabinet Grotesk"],
                        "headline-md": ["Cabinet Grotesk"],
                        "body-sm": ["Inter Tight"]
                    },
                    "fontSize": {
                        "data-mono": ["13px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "700" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "display-lg-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "800" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #f4f6f3;
            font-family: 'Inter Tight', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
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

<body class="text-on-surface">
    <!-- Side Navigation Shell -->
    <aside
        class="fixed left-0 top-0 h-full w-[280px] bg-on-secondary-fixed dark:bg-on-secondary-fixed flex flex-col py-lg z-50">
        <div class="px-lg mb-xl">
            <h1 class="font-headline-md text-headline-md font-bold text-surface-container-lowest tracking-tight">
                AeroPilates</h1>
            <p class="font-label-caps text-label-caps text-outline-variant opacity-70">Elite Management</p>
        </div>
        <nav class="flex-grow space-y-xs">
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors group"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors group"
                href="#">
                <span class="material-symbols-outlined">calendar_month</span>
                <span class="font-label-caps text-label-caps">Schedule</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors group"
                href="#">
                <span class="material-symbols-outlined">group</span>
                <span class="font-label-caps text-label-caps">Clients</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors group"
                href="#">
                <span class="material-symbols-outlined">engineering</span>
                <span class="font-label-caps text-label-caps">Staff</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors group"
                href="#">
                <span class="material-symbols-outlined">payments</span>
                <span class="font-label-caps text-label-caps">Financials</span>
            </a>
            <!-- Active State: Settings -->
            <a class="flex items-center gap-md px-md py-sm text-surface-container-lowest border-l-4 border-primary-container bg-surface-variant/10 group"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">settings</span>
                <span class="font-label-caps text-label-caps">Settings</span>
            </a>
        </nav>
        <div class="mt-auto px-md space-y-xs">
            <button
                class="w-full mb-lg bg-primary-container text-on-primary-container py-md rounded-full font-label-caps text-label-caps flex items-center justify-center gap-sm hover:opacity-90 transition-opacity">
                <span class="material-symbols-outlined">add</span>
                New Class
            </button>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors"
                href="#">
                <span class="material-symbols-outlined">help_outline</span>
                <span class="font-label-caps text-label-caps">Support</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors"
                href="#">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-label-caps text-label-caps">Log Out</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Shell -->
    <main class="ml-[280px] min-h-screen flex flex-col">
        <!-- Top Navigation Bar -->
        <header
            class="h-16 flex justify-between items-center px-lg border-b border-outline-variant bg-surface sticky top-0 z-40">
            <div class="flex items-center gap-lg">
                <h2 class="font-headline-sm text-headline-sm text-primary">AeroPilates Dashboard</h2>
                <div class="relative flex items-center">
                    <span class="material-symbols-outlined absolute left-3 text-outline">search</span>
                    <input
                        class="pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full text-body-sm w-64 focus:ring-2 focus:ring-primary-container"
                        placeholder="Search resources..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-md">
                <button
                    class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors">notifications</button>
                <button
                    class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors">help</button>
                <div
                    class="h-8 w-8 rounded-full bg-primary-fixed-dim flex items-center justify-center overflow-hidden border border-outline-variant">
                    <img class="w-full h-full object-cover"
                        data-alt="A professional portrait of a modern studio manager with a clean, minimalist aesthetic, neutral lighting, and a soft-focus background of a Pilates studio. The manager has a warm but authoritative expression, conveying professional reliability and expertise."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvUf4_KkqjxH0QzKxnEUrNOenU_Mqw54g1dUEcCjgULeTcRWoAg6m9M3wOQf880WshZBcjDgI4p12bjbp4m3AUxdSBs3y-KI7VAqTWjYL8l84H9Zd8-Oq0WrBWQZPLUVDdciE37xm5wIChKzxqPmn37tx3HpWI18RUyb3-2zMnaTYw7M68kLnc_cgXynuSeGRIedbnu3KJTWtG8izJT3aDmu2WUmogx_63fefeyJXFlklgI7Ye9HoH37cN0rC8Gq-BD2CfOKX51P2Y" />
                </div>
            </div>
        </header>
        <!-- Page Content -->
        <div class="p-xl max-w-7xl w-full mx-auto space-y-lg">
            <!-- Header Section -->
            <div class="flex justify-between items-end pb-md border-b border-stone-200">
                <div>
                    <h3 class="font-headline-md text-headline-md text-on-surface">Studio Settings</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">Manage your global configurations and
                        multi-branch infrastructure.</p>
                </div>
                <button
                    class="bg-primary-container text-on-primary-container px-xl py-md rounded-full font-label-caps text-label-caps flex items-center gap-sm shadow-sm hover:opacity-90 transition-all active:scale-95">
                    <span class="material-symbols-outlined">save</span>
                    Save Changes
                </button>
            </div>
            <!-- Dashboard Layout: Bento Grid Style -->
            <div class="grid grid-cols-12 gap-lg">
                <!-- General Studio Info (Left Column) -->
                <section class="col-span-12 lg:col-span-4 space-y-lg">
                    <div
                        class="bg-surface-container-lowest border border-stone-200 rounded-[16px] p-lg flex flex-col gap-lg">
                        <div class="flex items-center gap-md">
                            <span class="material-symbols-outlined text-primary-container">business_center</span>
                            <h4 class="font-headline-sm text-headline-sm">Branding</h4>
                        </div>
                        <div class="space-y-md">
                            <div
                                class="flex flex-col items-center justify-center border-2 border-dashed border-outline-variant rounded-xl p-xl bg-surface-bright group hover:border-primary transition-colors cursor-pointer">
                                <div
                                    class="w-20 h-20 bg-surface-container-high rounded-full flex items-center justify-center mb-sm">
                                    <span
                                        class="material-symbols-outlined text-outline group-hover:text-primary">upload</span>
                                </div>
                                <span class="font-label-caps text-label-caps text-outline">Upload Studio Logo</span>
                            </div>
                            <div class="space-y-sm">
                                <label class="font-label-caps text-label-caps text-on-surface-variant">Studio
                                    Name</label>
                                <input
                                    class="w-full rounded-[10px] border-stone-300 focus:border-primary-container focus:ring-primary-container font-body-md"
                                    type="text" value="AeroPilates Collective" />
                            </div>
                            <div class="space-y-sm">
                                <label class="font-label-caps text-label-caps text-on-surface-variant">Primary
                                    Contact</label>
                                <input
                                    class="w-full rounded-[10px] border-stone-300 focus:border-primary-container focus:ring-primary-container font-body-md"
                                    type="email" value="ops@aeropilates.co" />
                            </div>
                        </div>
                    </div>
                    <!-- Integration Section -->
                    <div
                        class="bg-surface-container-lowest border border-stone-200 rounded-[16px] p-lg flex flex-col gap-lg">
                        <div class="flex items-center gap-md">
                            <span class="material-symbols-outlined text-primary-container">account_balance_wallet</span>
                            <h4 class="font-headline-sm text-headline-sm">Integrations</h4>
                        </div>
                        <div class="space-y-md">
                            <div class="flex items-center justify-between p-md bg-surface-container-low rounded-xl">
                                <div class="flex items-center gap-md">
                                    <span class="material-symbols-outlined">payments</span>
                                    <div>
                                        <p class="font-label-caps text-label-caps">Midtrans</p>
                                        <p class="font-data-mono text-data-mono text-stone-500">ID: AP-88219</p>
                                    </div>
                                </div>
                                <span
                                    class="px-sm py-xs bg-primary-fixed text-on-primary-fixed text-[10px] rounded-full font-bold uppercase tracking-wider">Active</span>
                            </div>
                            <div class="flex items-center justify-between p-md bg-surface-container-low rounded-xl">
                                <div class="flex items-center gap-md opacity-50">
                                    <span class="material-symbols-outlined">link</span>
                                    <div>
                                        <p class="font-label-caps text-label-caps">Xendit</p>
                                        <p class="font-data-mono text-data-mono text-stone-500">Not Linked</p>
                                    </div>
                                </div>
                                <button
                                    class="text-primary font-label-caps text-[10px] hover:underline">Connect</button>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Right Column: Branches & Policies -->
                <section class="col-span-12 lg:col-span-8 space-y-lg">
                    <!-- Branch Management Grid -->
                    <div class="bg-surface-container-lowest border border-stone-200 rounded-[16px] p-lg">
                        <div class="flex justify-between items-center mb-lg">
                            <div class="flex items-center gap-md">
                                <span class="material-symbols-outlined text-primary-container">lan</span>
                                <h4 class="font-headline-sm text-headline-sm">Branch Management</h4>
                            </div>
                            <button
                                class="flex items-center gap-xs font-label-caps text-label-caps text-primary border border-primary px-md py-sm rounded-full hover:bg-primary-fixed transition-colors">
                                <span class="material-symbols-outlined text-[18px]">add_circle</span>
                                Add New Branch
                            </button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-md">
                            <!-- Branch Card 1 -->
                            <div
                                class="p-md rounded-xl border border-stone-200 hover:bg-primary-fixed/20 transition-all cursor-default group">
                                <div class="flex justify-between items-start mb-md">
                                    <h5 class="font-headline-sm text-[16px]">Downtown Core</h5>
                                    <span
                                        class="px-sm py-xs bg-primary-fixed text-on-primary-fixed text-[10px] rounded-full font-bold">LIVE</span>
                                </div>
                                <div class="space-y-sm mb-md">
                                    <div class="flex items-center gap-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[16px]">person</span>
                                        <span class="font-body-sm">Manager: Marcus Thorne</span>
                                    </div>
                                    <div class="flex items-center gap-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span class="font-body-sm">Jakarta Central, ID</span>
                                    </div>
                                </div>
                                <div class="flex gap-sm border-t border-stone-100 pt-md">
                                    <button
                                        class="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Edit</button>
                                    <button
                                        class="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Analytics</button>
                                </div>
                            </div>
                            <!-- Branch Card 2 -->
                            <div
                                class="p-md rounded-xl border border-stone-200 hover:bg-primary-fixed/20 transition-all cursor-default group">
                                <div class="flex justify-between items-start mb-md">
                                    <h5 class="font-headline-sm text-[16px]">South Jakarta</h5>
                                    <span
                                        class="px-sm py-xs bg-primary-fixed text-on-primary-fixed text-[10px] rounded-full font-bold">LIVE</span>
                                </div>
                                <div class="space-y-sm mb-md">
                                    <div class="flex items-center gap-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[16px]">person</span>
                                        <span class="font-body-sm">Manager: Siti Aminah</span>
                                    </div>
                                    <div class="flex items-center gap-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span class="font-body-sm">Kemang District</span>
                                    </div>
                                </div>
                                <div class="flex gap-sm border-t border-stone-100 pt-md">
                                    <button
                                        class="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Edit</button>
                                    <button
                                        class="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Analytics</button>
                                </div>
                            </div>
                            <!-- Branch Card 3 -->
                            <div class="p-md rounded-xl border border-stone-200 bg-surface-container-low">
                                <div class="flex justify-between items-start mb-md">
                                    <h5 class="font-headline-sm text-[16px]">North Heights</h5>
                                    <span
                                        class="px-sm py-xs bg-tertiary-fixed text-on-tertiary-fixed text-[10px] rounded-full font-bold uppercase">Maintenance</span>
                                </div>
                                <div class="space-y-sm mb-md">
                                    <div class="flex items-center gap-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[16px]">person</span>
                                        <span class="font-body-sm">Manager: Alex Wong</span>
                                    </div>
                                    <div class="flex items-center gap-xs text-on-surface-variant">
                                        <span class="material-symbols-outlined text-[16px]">location_on</span>
                                        <span class="font-body-sm">Sentul Highlands</span>
                                    </div>
                                </div>
                                <div class="flex gap-sm border-t border-stone-100 pt-md">
                                    <button
                                        class="flex-1 text-center font-label-caps text-label-caps text-primary font-bold">Resume</button>
                                    <button
                                        class="flex-1 text-center font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Settings</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Operational Policies -->
                    <div class="bg-surface-container-lowest border border-stone-200 rounded-[16px] p-lg">
                        <div class="flex items-center gap-md mb-lg">
                            <span class="material-symbols-outlined text-primary-container">rule</span>
                            <h4 class="font-headline-sm text-headline-sm">Operational Policies</h4>
                        </div>
                        <div class="flex border-b border-stone-200 mb-lg">
                            <button
                                class="px-lg py-sm font-label-caps text-label-caps border-b-2 border-primary text-primary">Hours
                                &amp; Access</button>
                            <button
                                class="px-lg py-sm font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Booking
                                Rules</button>
                            <button
                                class="px-lg py-sm font-label-caps text-label-caps text-on-surface-variant hover:text-primary">Waitlist
                                Logic</button>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-xl">
                            <!-- Hours -->
                            <div class="space-y-md">
                                <p
                                    class="font-label-caps text-label-caps text-stone-500 uppercase tracking-widest border-l-2 border-primary pl-2">
                                    Standard Operating Hours</p>
                                <div class="space-y-sm h-48 overflow-y-auto pr-sm custom-scrollbar">
                                    <div class="flex items-center justify-between">
                                        <span class="font-body-sm">Monday</span>
                                        <div class="flex items-center gap-xs">
                                            <input class="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="06:00" />
                                            <span>—</span>
                                            <input class="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="21:00" />
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="font-body-sm">Tuesday</span>
                                        <div class="flex items-center gap-xs">
                                            <input class="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="06:00" />
                                            <span>—</span>
                                            <input class="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="21:00" />
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="font-body-sm">Wednesday</span>
                                        <div class="flex items-center gap-xs">
                                            <input class="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="06:00" />
                                            <span>—</span>
                                            <input class="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="21:00" />
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="font-body-sm">Saturday</span>
                                        <div class="flex items-center gap-xs">
                                            <input class="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="08:00" />
                                            <span>—</span>
                                            <input class="w-16 text-center border-stone-200 rounded-lg text-xs p-1"
                                                type="text" value="18:00" />
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <span class="font-body-sm">Sunday</span>
                                        <span
                                            class="text-xs text-error font-bold px-2 py-1 bg-error-container rounded">CLOSED</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Policies -->
                            <div class="space-y-lg">
                                <div class="space-y-sm">
                                    <label
                                        class="font-label-caps text-label-caps text-on-surface-variant flex items-center gap-xs">
                                        Cancellation Window
                                        <span class="material-symbols-outlined text-[14px]">info</span>
                                    </label>
                                    <div class="flex items-center gap-md">
                                        <input
                                            class="w-20 rounded-[10px] border-stone-300 focus:border-primary-container focus:ring-primary-container font-data-mono text-center"
                                            type="number" value="12" />
                                        <span class="font-body-md">Hours before class</span>
                                    </div>
                                    <p class="text-[11px] text-stone-500 italic">Classes cancelled after this window
                                        will not be eligible for credit refunds.</p>
                                </div>
                                <div class="space-y-sm">
                                    <label class="font-label-caps text-label-caps text-on-surface-variant">No-Show
                                        Penalty</label>
                                    <div class="flex items-center gap-md">
                                        <span class="font-body-md">Rp</span>
                                        <input
                                            class="flex-1 rounded-[10px] border-stone-300 focus:border-primary-container focus:ring-primary-container font-data-mono"
                                            type="text" value="150.000" />
                                    </div>
                                    <div class="flex items-center gap-sm">
                                        <input checked="" class="rounded text-primary focus:ring-primary"
                                            type="checkbox" />
                                        <span class="font-body-sm">Automatically bill to client's saved card</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
    <!-- Micro-interaction Script -->
    <script>
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('scale-[1.01]');
            });
            input.addEventListener('blur', () => {
                input.parentElement.classList.remove('scale-[1.01]');
            });
        });

        // Simple tab switcher logic example
        const tabs = document.querySelectorAll('. Operational Policies button');
        tabs.forEach(tab => {
            tab.addEventListener('click', () => {
                tabs.forEach(t => t.classList.remove('border-primary', 'text-primary'));
                tab.classList.add('border-primary', 'text-primary');
            });
        });
    </script>
</body>

</html>