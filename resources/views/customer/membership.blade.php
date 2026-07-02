<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pivot Pilates - Membership</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabinet+Grotesk:wght@400..900&amp;family=Inter+Tight:ital,wght@0,100..900;1,100..900&amp;display=swap"
        rel="stylesheet" />
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
                        "on-background": "#181c1e",
                        "pine-50": "#f0fdf4",
                        "pine-600": "#16a34a",
                        "stone-200": "#e7e5e4",
                        "stone-500": "#78716c",
                        "ink-700": "#3f3f46",
                        "ink-900": "#18181b",
                        "canvas-50": "#fafaf9",
                        "amber-50": "#fffbeb",
                        "amber-600": "#d97706",
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px",
                        "card": "16px",
                        "input": "10px"
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
                        "label": ["Inter Tight"],
                        "headline-lg": ["Cabinet Grotesk"],
                        "headline-md": ["Cabinet Grotesk"],
                        "body-sm": ["Inter Tight"],
                        "body-md": ["Inter Tight"],
                        "headline-lg-mobile": ["Cabinet Grotesk"],
                        "headline-sm": ["Cabinet Grotesk"],
                        "display": ["Cabinet Grotesk"],
                        "body-lg": ["Inter Tight"]
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
                    },
                    "boxShadow": {
                        "ambient": "0px 0px 12px 0px rgba(24, 24, 27, 0.04)"
                    }
                },
            },
        }
    </script>
    <style>
        body {
            background-color: #f7fafc;
            color: #181c1e;
        }

        .ambient-shadow {
            box-shadow: 0px 0px 12px 0px rgba(24, 24, 27, 0.04);
        }

        .card-border {
            border: 1px solid #e7e5e4;
        }

        .card-hover:hover {
            border-color: #78716c;
        }

        .pb-safe {
            padding-bottom: env(safe-area-inset-bottom, 20px);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="antialiased min-h-screen flex flex-col pt-16 pb-24 md:pb-0">
    <!-- TopAppBar -->
    <header
        class="fixed top-0 w-full z-50 border-b border-outline-variant bg-surface flex justify-between items-center h-16 px-margin-mobile">
        <div class="flex items-center gap-xs">
            <span class="material-symbols-outlined text-primary"
                style="font-variation-settings: 'FILL' 1;">location_on</span>
        </div>
        <div class="font-headline-sm text-headline-sm-mobile tracking-tighter text-primary">PIVOT PILATES</div>
        <div class="w-8 h-8 rounded-full overflow-hidden border border-outline-variant">
            <img class="w-full h-full object-cover"
                data-alt="A close-up, softly lit portrait of a fit individual in athletic wear, exuding calm confidence against a minimalist light studio background, maintaining a high-fidelity, corporate wellness aesthetic."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5O13b9b-XfFw2vL3MydEM7eEet1gsEhh9TuONcu1ysso6kIlttZveKCtICl52lteYvTsM7g9X9lRmkaqUiIVsXqh2KAC96bw6amWzZErYY_EOpwWFbWFn7yMmGsjIGuXnEd86aBA02MlKgB4dfLjOMhyCmLtHvJM6SxZuPkp4aKz7AhXIevHCUYsXRss-_eAgj8rN5o4962qCfdJd_MkmgQpSigU2r5e2fNI5-WnXa33O9af74fHKF3dCo73ni8PAIQ9b2R5xY_GR" />
        </div>
    </header>
    <main
        class="flex-grow container mx-auto max-w-[max-width] px-margin-mobile md:px-margin-desktop py-xl flex flex-col gap-xxl">
        <!-- Active Plan Summary -->
        <section>
            <h2 class="font-headline-md text-headline-md md:font-headline-lg md:text-headline-lg mb-lg">Active Plan</h2>
            <div
                class="bg-white rounded-card card-border card-hover p-lg flex flex-col md:flex-row justify-between items-start md:items-center gap-md transition-colors ambient-shadow">
                <div>
                    <div class="flex items-center gap-sm mb-xs">
                        <h3 class="font-headline-sm text-headline-sm">10-Class Pack</h3>
                        <span
                            class="px-sm py-1 bg-pine-50 text-pine-600 font-body-sm text-body-sm font-bold rounded-full">Active</span>
                    </div>
                    <p class="font-body-md text-body-md text-on-surface-variant">Renews automatically on Oct 15, 2023
                    </p>
                </div>
                <div class="flex flex-col items-start md:items-end w-full md:w-auto">
                    <div class="font-display text-display text-primary">4 <span
                            class="font-body-lg text-body-lg text-on-surface-variant">credits left</span></div>
                    <div class="w-full bg-stone-200 rounded-full h-1.5 mt-sm overflow-hidden">
                        <div class="bg-primary h-1.5 rounded-full" style="width: 40%"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Purchase Options -->
        <section>
            <h2 class="font-headline-md text-headline-md md:font-headline-lg md:text-headline-lg mb-lg">Purchase Options
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                <!-- Single Class -->
                <div
                    class="bg-canvas-50 rounded-card card-border card-hover p-lg flex flex-col justify-between transition-colors ambient-shadow relative overflow-hidden group">
                    <div class="absolute inset-0 bg-stone-200 opacity-0 group-hover:opacity-10 transition-opacity">
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm mb-xs relative z-10">Single Class</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-xl relative z-10">Perfect for
                            drop-ins or trying out a new instructor.</p>
                        <div class="font-display text-display mb-lg relative z-10">$35</div>
                    </div>
                    <ul class="font-body-sm text-body-sm text-on-surface-variant mb-xl space-y-sm relative z-10">
                        <li class="flex items-center gap-xs"><span
                                class="material-symbols-outlined text-primary text-[18px]">check</span> 1 Class Credit
                        </li>
                        <li class="flex items-center gap-xs"><span
                                class="material-symbols-outlined text-primary text-[18px]">check</span> Valid for 30
                            days</li>
                    </ul>
                    <button
                        class="w-full bg-pine-600 text-white font-label text-label py-sm rounded-full hover:opacity-90 transition-opacity relative z-10">Buy
                        Now</button>
                </div>
                <!-- 10-Class Pack -->
                <div
                    class="bg-white rounded-card card-border border-pine-600 card-hover p-lg flex flex-col justify-between transition-colors ambient-shadow relative overflow-hidden group shadow-[0_0_0_1px_rgba(22,163,74,1)]">
                    <div
                        class="absolute top-0 right-0 bg-pine-50 text-pine-600 font-label text-label px-md py-1 rounded-bl-lg border-l border-b border-pine-600">
                        Most Popular</div>
                    <div class="absolute inset-0 bg-pine-50 opacity-0 group-hover:opacity-50 transition-opacity"></div>
                    <div class="pt-sm">
                        <h3 class="font-headline-sm text-headline-sm mb-xs relative z-10">10-Class Pack</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-xl relative z-10">Commit to your
                            practice and save per class.</p>
                        <div class="font-display text-display mb-xs relative z-10">$300 <span
                                class="font-body-md text-body-md text-on-surface-variant block mt-[-8px]">$30 /
                                class</span></div>
                    </div>
                    <ul class="font-body-sm text-body-sm text-on-surface-variant mb-xl space-y-sm relative z-10 mt-lg">
                        <li class="flex items-center gap-xs"><span
                                class="material-symbols-outlined text-primary text-[18px]">check</span> 10 Class Credits
                        </li>
                        <li class="flex items-center gap-xs"><span
                                class="material-symbols-outlined text-primary text-[18px]">check</span> Valid for 6
                            months</li>
                        <li class="flex items-center gap-xs"><span
                                class="material-symbols-outlined text-primary text-[18px]">check</span> Priority booking
                        </li>
                    </ul>
                    <button
                        class="w-full bg-pine-600 text-white font-label text-label py-sm rounded-full hover:opacity-90 transition-opacity relative z-10">Buy
                        Now</button>
                </div>
                <!-- Monthly Unlimited -->
                <div
                    class="bg-canvas-50 rounded-card card-border card-hover p-lg flex flex-col justify-between transition-colors ambient-shadow relative overflow-hidden group">
                    <div class="absolute inset-0 bg-stone-200 opacity-0 group-hover:opacity-10 transition-opacity">
                    </div>
                    <div>
                        <h3 class="font-headline-sm text-headline-sm mb-xs relative z-10">Monthly Unlimited</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant mb-xl relative z-10">The ultimate
                            commitment to your wellness journey.</p>
                        <div class="font-display text-display mb-lg relative z-10">$450 <span
                                class="font-body-md text-body-md text-on-surface-variant">/ mo</span></div>
                    </div>
                    <ul class="font-body-sm text-body-sm text-on-surface-variant mb-xl space-y-sm relative z-10">
                        <li class="flex items-center gap-xs"><span
                                class="material-symbols-outlined text-primary text-[18px]">check</span> Unlimited
                            Classes</li>
                        <li class="flex items-center gap-xs"><span
                                class="material-symbols-outlined text-primary text-[18px]">check</span> Auto-renews
                            monthly</li>
                        <li class="flex items-center gap-xs"><span
                                class="material-symbols-outlined text-primary text-[18px]">check</span> 10% off retail
                        </li>
                    </ul>
                    <button
                        class="w-full bg-stone-200 text-ink-900 border border-stone-200 font-label text-label py-sm rounded-full hover:bg-stone-300 transition-colors relative z-10">Subscribe</button>
                </div>
            </div>
        </section>
        <!-- Usage History -->
        <section>
            <h2 class="font-headline-md text-headline-md md:font-headline-lg md:text-headline-lg mb-md">Usage History
            </h2>
            <div class="bg-white rounded-card card-border overflow-hidden">
                <div class="divide-y divide-stone-200">
                    <div
                        class="p-md flex justify-between items-center hover:bg-canvas-50 transition-colors cursor-pointer">
                        <div class="flex items-center gap-md">
                            <div
                                class="w-10 h-10 rounded-full bg-pine-50 flex items-center justify-center text-pine-600">
                                <span class="material-symbols-outlined text-[20px]">fitness_center</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm">Reformer Flow</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Oct 2, 2023 • 9:00 AM</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="font-body-md text-body-md text-ink-900">-1 Credit</span>
                        </div>
                    </div>
                    <div
                        class="p-md flex justify-between items-center hover:bg-canvas-50 transition-colors cursor-pointer">
                        <div class="flex items-center gap-md">
                            <div
                                class="w-10 h-10 rounded-full bg-pine-50 flex items-center justify-center text-pine-600">
                                <span class="material-symbols-outlined text-[20px]">self_improvement</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm">Tower Fundamentals</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Sep 28, 2023 • 5:30 PM</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="font-body-md text-body-md text-ink-900">-1 Credit</span>
                        </div>
                    </div>
                    <div
                        class="p-md flex justify-between items-center hover:bg-canvas-50 transition-colors cursor-pointer">
                        <div class="flex items-center gap-md">
                            <div
                                class="w-10 h-10 rounded-full bg-amber-50 flex items-center justify-center text-amber-600">
                                <span class="material-symbols-outlined text-[20px]">add_circle</span>
                            </div>
                            <div>
                                <h4 class="font-headline-sm text-headline-sm">10-Class Pack Purchased</h4>
                                <p class="font-body-sm text-body-sm text-on-surface-variant">Sep 15, 2023</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="font-body-md text-body-md text-pine-600">+10 Credits</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- BottomNavBar -->
    <nav
        class="fixed bottom-0 left-0 w-full h-20 flex justify-around items-center px-4 pb-safe bg-surface border-t border-outline-variant shadow-sm z-50 md:hidden rounded-t-xl">
        <a class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors font-label text-label"
            href="#">
            <span class="material-symbols-outlined mb-1">home</span>
            Home
        </a>
        <a class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors font-label text-label"
            href="#">
            <span class="material-symbols-outlined mb-1">calendar_today</span>
            Schedule
        </a>
        <a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-5 py-1.5 scale-95 transition-transform duration-200 font-label text-label"
            href="#">
            <span class="material-symbols-outlined mb-1"
                style="font-variation-settings: 'FILL' 1;">card_membership</span>
            Membership
        </a>
        <a class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors font-label text-label"
            href="#">
            <span class="material-symbols-outlined mb-1">person</span>
            Profile
        </a>
    </nav>
    <!-- Desktop Navigation Cluster (Hidden on Mobile, placeholder for adherence to rules) -->
    <div class="hidden md:flex fixed top-0 right-0 h-16 items-center px-margin-desktop z-50 gap-lg pointer-events-none">
        <!-- Re-implementing TopAppBar links for desktop conceptually -->
        <nav class="pointer-events-auto flex gap-md">
            <a class="text-on-surface-variant hover:opacity-80 transition-opacity font-label text-label"
                href="#">Home</a>
            <a class="text-on-surface-variant hover:opacity-80 transition-opacity font-label text-label"
                href="#">Schedule</a>
            <a class="text-primary opacity-70 transition-all duration-150 font-label text-label" href="#">Membership</a>
            <a class="text-on-surface-variant hover:opacity-80 transition-opacity font-label text-label"
                href="#">Profile</a>
        </nav>
    </div>
</body>

</html>