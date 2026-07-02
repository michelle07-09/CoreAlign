<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>AeroPilates Finance & Reports</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabinet+Grotesk:wght@400;700;800&family=Inter+Tight:wght@400;500;600&family=JetBrains+Mono:wght@500&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cabinet+Grotesk:wght@100..900&family=Inter+Tight:wght@100..900&display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-fixed": "#dfe4da",
                        "tertiary": "#474c45",
                        "primary-fixed-dim": "#8ad6af",
                        "on-tertiary-fixed-variant": "#434841",
                        "on-primary-fixed": "#002114",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#e1e3e0",
                        "on-error": "#ffffff",
                        "primary": "#005639",
                        "secondary-container": "#dde0e3",
                        "on-tertiary-fixed": "#181d17",
                        "on-primary": "#ffffff",
                        "background": "#f8faf7",
                        "surface-container-high": "#e7e9e6",
                        "on-tertiary-container": "#dce1d6",
                        "on-surface": "#191c1b",
                        "inverse-surface": "#2e312f",
                        "surface-container-low": "#f2f4f1",
                        "outline-variant": "#bfc9c1",
                        "on-primary-container": "#a1efc7",
                        "on-secondary": "#ffffff",
                        "secondary-fixed-dim": "#c4c7c9",
                        "error": "#ba1a1a",
                        "secondary-fixed": "#e0e3e5",
                        "surface-tint": "#1a6b4b",
                        "surface-dim": "#d8dbd8",
                        "surface-container": "#eceeeb",
                        "on-primary-fixed-variant": "#005236",
                        "on-tertiary": "#ffffff",
                        "primary-fixed": "#a5f3ca",
                        "on-surface-variant": "#3f4943",
                        "on-background": "#191c1b",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "outline": "#6f7a72",
                        "on-secondary-fixed-variant": "#43474a",
                        "inverse-primary": "#8ad6af",
                        "tertiary-container": "#5f645c",
                        "inverse-on-surface": "#eff1ee",
                        "surface-variant": "#e1e3e0",
                        "on-secondary-fixed": "#181c1e",
                        "surface": "#f8faf7",
                        "on-secondary-container": "#5f6365",
                        "surface-bright": "#f8faf7",
                        "tertiary-fixed-dim": "#c3c8be",
                        "secondary": "#5b5f61",
                        "primary-container": "#1f6f4f",
                        "ink-900": "#14181a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "2xl": "16px",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xs": "4px",
                        "xl": "32px",
                        "container-margin": "24px",
                        "md": "16px",
                        "base": "4px",
                        "2xl": "48px",
                        "gutter": "16px",
                        "sm": "8px",
                        "lg": "24px"
                    },
                    "fontFamily": {
                        "body-sm": ["Inter Tight"],
                        "body-md": ["Inter Tight"],
                        "headline-sm": ["Cabinet Grotesk"],
                        "label-caps": ["Inter Tight"],
                        "display-lg": ["Cabinet Grotesk"],
                        "data-mono": ["JetBrains Mono"],
                        "body-lg": ["Inter Tight"],
                        "headline-md": ["Cabinet Grotesk"]
                    },
                    "fontSize": {
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "700" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                        "data-mono": ["13px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "700" }]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }

        .pill-badge {
            @apply rounded-full px-3 py-1 font-label-caps text-label-caps inline-flex items-center;
        }

        .canvas-bg {
            background-color: #F4F6F3;
        }

        .sidebar-bg {
            background-color: #14181A;
        }
    </style>
</head>

<body class="canvas-bg font-body-md text-on-surface">
    <!-- SideNavBar (Authority Source: JSON) -->
    <aside class="fixed left-0 top-0 h-full w-[280px] sidebar-bg flex flex-col h-full py-lg">
        <div class="px-lg mb-2xl">
            <h1 class="font-headline-md text-headline-md font-bold text-surface-container-lowest">AeroPilates</h1>
            <p class="font-label-caps text-label-caps text-outline-variant opacity-60">Elite Management</p>
        </div>
        <nav class="flex-grow flex flex-col gap-xs">
            <!-- Navigation Items (Mapping active tab: Financials) -->
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-label-caps text-label-caps">Dashboard</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors"
                href="#">
                <span class="material-symbols-outlined">calendar_month</span>
                <span class="font-label-caps text-label-caps">Schedule</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors"
                href="#">
                <span class="material-symbols-outlined">group</span>
                <span class="font-label-caps text-label-caps">Clients</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors"
                href="#">
                <span class="material-symbols-outlined">engineering</span>
                <span class="font-label-caps text-label-caps">Staff</span>
            </a>
            <!-- ACTIVE TAB -->
            <a class="flex items-center gap-md px-md py-sm text-surface-container-lowest border-l-4 border-primary-container bg-surface-variant/10"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">payments</span>
                <span class="font-label-caps text-label-caps">Financials</span>
            </a>
            <a class="flex items-center gap-md px-md py-sm text-outline-variant hover:text-surface-container-lowest transition-colors"
                href="#">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-label-caps text-label-caps">Settings</span>
            </a>
        </nav>
        <div class="px-md mt-auto border-t border-white/5 pt-lg flex flex-col gap-xs">
            <button
                class="w-full bg-primary-container text-on-primary-container font-label-caps text-label-caps py-md rounded-xl flex items-center justify-center gap-sm mb-lg">
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
    <!-- TopNavBar (Authority Source: JSON) -->
    <header
        class="flex justify-between items-center h-16 px-lg ml-[280px] w-[calc(100%-280px)] border-b border-outline-variant bg-surface fixed top-0 z-10">
        <div class="flex items-center gap-lg">
            <span class="font-headline-sm text-headline-sm text-primary">AeroPilates Dashboard</span>
            <div class="relative">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant opacity-50">search</span>
                <input
                    class="pl-10 pr-4 py-2 bg-surface-container-low border-none rounded-full w-64 text-body-sm focus:ring-2 focus:ring-primary-container transition-all"
                    placeholder="Search transactions..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-md">
            <button class="p-2 hover:bg-surface-variant transition-colors rounded-full">
                <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
            </button>
            <button class="p-2 hover:bg-surface-variant transition-colors rounded-full">
                <span class="material-symbols-outlined text-on-surface-variant">help</span>
            </button>
            <div class="h-8 w-8 rounded-full bg-stone-200 overflow-hidden ml-sm">
                <img class="w-full h-full object-cover"
                    data-alt="A professional headshot of a corporate manager in a high-end, minimalist fitness environment. The lighting is soft and natural, with a clean white and pine-green architectural background. The overall style is refined and business-focused, maintaining a consistent professional tone for a premium pilates studio management interface."
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuBYHhu7xxLjEo9QrJT9xDHQRHl9Xmj2yk4qnHaM85pK8zonxzzailttdiQN9ktgKBqX3widFxHXquPM3J3C2dmzAzAl1dLvE8joDtKtQp_aGwrn_gKkm-UIRnNlWgo1adbJOz1lwNenPongeN7Jjz9wjNcg2aWejmTuH6Bxn_Yw-VBUaFCR1dWxv0EOrrWIdrXLZz1mUhFLj0-6r9gY6_F4jqc_ds631ivL6gOtcTrX7fR3CLR3Iao7qc--J5bi7d4mX_WkddYaFbKE" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-[280px] pt-16 min-h-screen">
        <div class="p-lg">
            <!-- Dashboard Header -->
            <div class="flex justify-between items-end mb-lg">
                <div>
                    <h2 class="font-display-lg text-display-lg text-on-surface">Finance & Reports</h2>
                    <p class="font-body-md text-on-surface-variant">Manage your studio's health and transactional
                        efficiency.</p>
                </div>
                <div class="flex gap-sm">
                    <button
                        class="flex items-center gap-sm px-lg py-sm bg-surface-container-lowest border border-outline-variant rounded-full font-label-caps text-label-caps text-on-surface hover:bg-surface-container transition-colors">
                        <span class="material-symbols-outlined">calendar_today</span>
                        Last 30 Days
                        <span class="material-symbols-outlined">keyboard_arrow_down</span>
                    </button>
                    <button
                        class="flex items-center gap-sm px-lg py-sm bg-primary-container text-on-primary-container rounded-full font-label-caps text-label-caps hover:opacity-90 transition-opacity">
                        <span class="material-symbols-outlined">file_download</span>
                        Export PDF/CSV
                    </button>
                </div>
            </div>
            <!-- KPI Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-gutter mb-lg">
                <!-- Total Revenue -->
                <div class="bg-surface-container-lowest p-md rounded-2xl border border-stone-200">
                    <div class="flex justify-between items-start mb-sm">
                        <span
                            class="material-symbols-outlined p-2 bg-primary-fixed/30 text-primary rounded-lg">payments</span>
                        <span class="text-primary font-data-mono text-data-mono">+12.4%</span>
                    </div>
                    <p class="font-label-caps text-label-caps text-on-surface-variant mb-xs">Total Revenue</p>
                    <h3 class="font-data-mono text-headline-md text-on-surface">Rp 142.5M</h3>
                    <p class="font-body-sm text-body-sm text-outline mt-sm">vs last month</p>
                </div>
                <!-- Outstanding Invoices -->
                <div class="bg-surface-container-lowest p-md rounded-2xl border border-stone-200">
                    <div class="flex justify-between items-start mb-sm">
                        <span
                            class="material-symbols-outlined p-2 bg-error-container/30 text-error rounded-lg">pending_actions</span>
                        <span class="text-on-surface font-data-mono text-data-mono">14 pending</span>
                    </div>
                    <p class="font-label-caps text-label-caps text-on-surface-variant mb-xs">Outstanding Invoices</p>
                    <h3 class="font-data-mono text-headline-md text-on-surface">Rp 8.2M</h3>
                    <p class="font-body-sm text-body-sm text-outline mt-sm">Action required</p>
                </div>
                <!-- Refund Rate -->
                <div class="bg-surface-container-lowest p-md rounded-2xl border border-stone-200">
                    <div class="flex justify-between items-start mb-sm">
                        <span
                            class="material-symbols-outlined p-2 bg-secondary-container text-secondary rounded-lg">undo</span>
                        <span class="text-primary font-data-mono text-data-mono">-0.5% imp.</span>
                    </div>
                    <p class="font-label-caps text-label-caps text-on-surface-variant mb-xs">Refund Rate</p>
                    <h3 class="font-data-mono text-headline-md text-on-surface">1.2%</h3>
                    <p class="font-body-sm text-body-sm text-outline mt-sm">Threshold: 2.0%</p>
                </div>
                <!-- Avg Transaction -->
                <div class="bg-surface-container-lowest p-md rounded-2xl border border-stone-200">
                    <div class="flex justify-between items-start mb-sm">
                        <span
                            class="material-symbols-outlined p-2 bg-tertiary-fixed text-tertiary rounded-lg">analytics</span>
                    </div>
                    <p class="font-label-caps text-label-caps text-on-surface-variant mb-xs">Avg. Transaction Value</p>
                    <h3 class="font-data-mono text-headline-md text-on-surface">Rp 850k</h3>
                    <p class="font-body-sm text-body-sm text-outline mt-sm">Per active member</p>
                </div>
            </div>
            <!-- Chart Section -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-lg">
                <div
                    class="lg:col-span-2 bg-surface-container-lowest p-lg rounded-2xl border border-stone-200 relative overflow-hidden h-[400px]">
                    <div class="flex justify-between items-center mb-lg">
                        <h4 class="font-headline-sm text-headline-sm">Revenue Trends</h4>
                        <div class="flex gap-md">
                            <div class="flex items-center gap-xs">
                                <span class="w-3 h-3 rounded-full bg-primary"></span>
                                <span class="font-label-caps text-label-caps text-outline">Gross</span>
                            </div>
                            <div class="flex items-center gap-xs">
                                <span class="w-3 h-3 rounded-full bg-tertiary"></span>
                                <span class="font-label-caps text-label-caps text-outline">Net</span>
                            </div>
                        </div>
                    </div>
                    <!-- Data visualization placeholder -->
                    <div class="absolute bottom-lg left-lg right-lg top-24 flex items-end justify-between px-md">
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[40%]"></div>
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[55%]"></div>
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[45%]"></div>
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[70%]"></div>
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[85%]"></div>
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[65%]"></div>
                        <div class="w-8 bg-primary rounded-t-lg transition-all hover:bg-primary h-[90%]"></div>
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[75%]"></div>
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[60%]"></div>
                        <div class="w-8 bg-primary/20 rounded-t-lg transition-all hover:bg-primary/40 h-[80%]"></div>
                    </div>
                    <div class="absolute bottom-4 left-lg right-lg flex justify-between border-t border-stone-200 pt-2">
                        <span class="font-data-mono text-label-caps text-outline">WK 1</span>
                        <span class="font-data-mono text-label-caps text-outline">WK 2</span>
                        <span class="font-data-mono text-label-caps text-outline">WK 3</span>
                        <span class="font-data-mono text-label-caps text-outline">WK 4</span>
                    </div>
                </div>
                <!-- Revenue Breakdown -->
                <div class="bg-surface-container-lowest p-lg rounded-2xl border border-stone-200">
                    <h4 class="font-headline-sm text-headline-sm mb-lg">Revenue Breakdown</h4>
                    <div class="flex flex-col items-center justify-center h-48 relative">
                        <!-- Simulated Donut Chart -->
                        <div
                            class="w-40 h-40 rounded-full border-[16px] border-primary border-t-tertiary border-r-primary-fixed border-l-secondary relative">
                            <div class="absolute inset-0 flex flex-col items-center justify-center">
                                <span class="font-label-caps text-label-caps text-outline">Total</span>
                                <span class="font-data-mono text-body-lg font-bold">100%</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-lg space-y-sm">
                        <div class="flex justify-between items-center text-body-sm">
                            <span class="flex items-center gap-sm"><span class="w-2 h-2 rounded-full bg-primary"></span>
                                Class Packages</span>
                            <span class="font-data-mono">45%</span>
                        </div>
                        <div class="flex justify-between items-center text-body-sm">
                            <span class="flex items-center gap-sm"><span
                                    class="w-2 h-2 rounded-full bg-primary-fixed"></span> Memberships</span>
                            <span class="font-data-mono">30%</span>
                        </div>
                        <div class="flex justify-between items-center text-body-sm">
                            <span class="flex items-center gap-sm"><span
                                    class="w-2 h-2 rounded-full bg-secondary"></span> Private Sessions</span>
                            <span class="font-data-mono">20%</span>
                        </div>
                        <div class="flex justify-between items-center text-body-sm">
                            <span class="flex items-center gap-sm"><span
                                    class="w-2 h-2 rounded-full bg-tertiary"></span> Retail</span>
                            <span class="font-data-mono">5%</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Transaction Table & Instructor Payouts -->
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-gutter">
                <!-- Transaction History -->
                <div
                    class="lg:col-span-3 bg-surface-container-lowest rounded-2xl border border-stone-200 overflow-hidden">
                    <div class="p-lg border-b border-stone-200 flex justify-between items-center">
                        <h4 class="font-headline-sm text-headline-sm">Transaction History</h4>
                        <button class="text-primary font-label-caps text-label-caps flex items-center gap-xs">
                            View All <span class="material-symbols-outlined">chevron_right</span>
                        </button>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left">
                            <thead class="bg-surface-container-low font-label-caps text-label-caps text-stone-500">
                                <tr>
                                    <th class="px-lg py-md font-semibold">Transaction ID</th>
                                    <th class="px-md py-md font-semibold">Member Name</th>
                                    <th class="px-md py-md font-semibold">Date</th>
                                    <th class="px-md py-md font-semibold">Amount</th>
                                    <th class="px-md py-md font-semibold">Method</th>
                                    <th class="px-lg py-md font-semibold">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-stone-200">
                                <tr class="hover:bg-surface transition-colors">
                                    <td class="px-lg py-md font-data-mono text-on-surface">#TRX-82910</td>
                                    <td class="px-md py-md font-body-sm">Sarah Jenkins</td>
                                    <td class="px-md py-md font-body-sm text-outline">Oct 24, 2023</td>
                                    <td class="px-md py-md font-data-mono text-on-surface">Rp 1.200.000</td>
                                    <td class="px-md py-md font-body-sm">Credit Card</td>
                                    <td class="px-lg py-md">
                                        <span class="pill-badge bg-primary/10 text-primary">Paid</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface transition-colors">
                                    <td class="px-lg py-md font-data-mono text-on-surface">#TRX-82911</td>
                                    <td class="px-md py-md font-body-sm">David Chen</td>
                                    <td class="px-md py-md font-body-sm text-outline">Oct 23, 2023</td>
                                    <td class="px-md py-md font-data-mono text-on-surface">Rp 850.000</td>
                                    <td class="px-md py-md font-body-sm">VA BCA</td>
                                    <td class="px-lg py-md">
                                        <span class="pill-badge bg-tertiary-fixed text-tertiary">Pending</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface transition-colors">
                                    <td class="px-lg py-md font-data-mono text-on-surface">#TRX-82912</td>
                                    <td class="px-md py-md font-body-sm">Maya Rodriguez</td>
                                    <td class="px-md py-md font-body-sm text-outline">Oct 23, 2023</td>
                                    <td class="px-md py-md font-data-mono text-on-surface">Rp 2.400.000</td>
                                    <td class="px-md py-md font-body-sm">E-wallet (Gopay)</td>
                                    <td class="px-lg py-md">
                                        <span class="pill-badge bg-primary/10 text-primary">Paid</span>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface transition-colors">
                                    <td class="px-lg py-md font-data-mono text-on-surface">#TRX-82913</td>
                                    <td class="px-md py-md font-body-sm">Tom Harrison</td>
                                    <td class="px-md py-md font-body-sm text-outline">Oct 22, 2023</td>
                                    <td class="px-md py-md font-data-mono text-on-surface">Rp 450.000</td>
                                    <td class="px-md py-md font-body-sm">VA Mandiri</td>
                                    <td class="px-lg py-md">
                                        <span class="pill-badge bg-error-container text-error">Failed</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Instructor Payouts -->
                <div class="bg-surface-container-lowest rounded-2xl border border-stone-200 overflow-hidden">
                    <div class="p-lg border-b border-stone-200">
                        <h4 class="font-headline-sm text-headline-sm">Instructor Payouts</h4>
                    </div>
                    <div class="p-md space-y-md">
                        <!-- Instructor 1 -->
                        <div
                            class="flex items-center justify-between p-sm hover:bg-surface transition-colors rounded-xl border border-transparent hover:border-stone-100">
                            <div class="flex items-center gap-md">
                                <div class="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A close-up portrait of a female fitness instructor with a serene and focused expression. The lighting is bright and architectural, reflecting a professional pilates studio atmosphere with clean lines and a high-end corporate aesthetic. The overall mood is reliable and energetic."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBg_DbqBQitwYtEnxVkiDMjZ8qE0t2dDvhL1Hf1e93cykw85jeCXVy4atD3n5YgX19RUMozX3IECw4qNpVHJhMPiQTobX1mS9GIWP8enLaVgZzn4AjfMWJEjanNGjsj5I9GUK_3gY9o_jcd2FyXzs1rHUehGOMe30Df-Adq2lXJiRELLRuEecLhCmU9lm6uFaSoWJ34lUvjzFEkyqjDGeYzQGGL1DQLyt-YLzkqxUdys8onfLYM16pDuY3UDgbRO1mVjXKaA0BrmbWg" />
                                </div>
                                <div>
                                    <p class="font-body-sm font-bold">Elena Thorne</p>
                                    <p class="font-label-caps text-[10px] text-outline">42 Sessions</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-data-mono text-body-sm">Rp 12.6M</p>
                                <span class="text-[10px] font-label-caps text-primary">Paid</span>
                            </div>
                        </div>
                        <!-- Instructor 2 -->
                        <div
                            class="flex items-center justify-between p-sm hover:bg-surface transition-colors rounded-xl border border-transparent hover:border-stone-100">
                            <div class="flex items-center gap-md">
                                <div class="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A portrait of a male yoga and pilates instructor looking directly at the camera with a calm and welcoming expression. He is in a modern studio setting with light wood accents and soft, diffused natural lighting. The visual style is crisp and professional, emphasizing expertise and athletic discipline."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_IJHsfr3anpNFBSfSG6hlyTRVXuWevgNCcxRF9VY5AgLiJHCPvj8wsiEIIvj3sbhz_prveCOykVk2vO4k2Vv-Q8huZoO1O6_C6IrxFH0uxb3YTlTuLIYBpVSn2tQDxKRXyA4H10YguO3lQAndX43vfXX0VUQ9Z1ukMMpFhas_wNhxtCWfQIK9T35spITa1_UHP4ubYufTebN6B-lkO52kz0Xsph7j9XDjefp3iYUHuVhsb40rNwj84ToNPcF-xo_KlfmUVX7RpmGN" />
                                </div>
                                <div>
                                    <p class="font-body-sm font-bold">Marcus Vane</p>
                                    <p class="font-label-caps text-[10px] text-outline">38 Sessions</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-data-mono text-body-sm">Rp 11.4M</p>
                                <span class="text-[10px] font-label-caps text-tertiary">Processing</span>
                            </div>
                        </div>
                        <!-- Instructor 3 -->
                        <div
                            class="flex items-center justify-between p-sm hover:bg-surface transition-colors rounded-xl border border-transparent hover:border-stone-100">
                            <div class="flex items-center gap-md">
                                <div class="w-10 h-10 rounded-full bg-stone-200 overflow-hidden">
                                    <img class="w-full h-full object-cover"
                                        data-alt="A detailed headshot of a female pilates instructor in a high-tech gym environment. The lighting is clean and cool-toned, with high-end architectural studio elements in the blurred background. She displays a confident and professional demeanor, aligning with the elite management brand."
                                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuB49iZ7ADhCBEvrTPsJrbT-TYyOz8kSyHHEzd5wULvb2RJmTVLfspyMTjazhJEnfCIyrpJkigp7Jzh-r21gLKvzk0lKxbOg_htUGlmQiCEAdewwf_vhUgqaYRQSDmMGPv3nsmCmD0kXYrv0H5cT_E-czrw6VFj8FHLAIgSMqWBfeskiaDgAPMdqjKXw0zFStkr-bUBj7Su5J3YCpkqCLl9TsO8KwMbcZWpgwmiBPyaVj-2NDusZm3ZxrsuOLkLykoLNCYLJRywQGJWF" />
                                </div>
                                <div>
                                    <p class="font-body-sm font-bold">Lana Winters</p>
                                    <p class="font-label-caps text-[10px] text-outline">29 Sessions</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="font-data-mono text-body-sm">Rp 8.7M</p>
                                <span class="text-[10px] font-label-caps text-tertiary">Processing</span>
                            </div>
                        </div>
                    </div>
                    <div class="p-lg mt-md">
                        <button
                            class="w-full py-sm border border-primary-container text-primary-container font-label-caps text-label-caps rounded-full hover:bg-primary-container/5 transition-colors">
                            Run Payout Cycle
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        // Simple micro-interaction for tab switching simulation
        document.querySelectorAll('nav a').forEach(link => {
            link.addEventListener('click', function (e) {
                if (this.innerText.includes('Financials')) return;
                // Just aesthetic for demo
                document.querySelectorAll('nav a').forEach(l => {
                    l.classList.remove('text-surface-container-lowest', 'border-l-4', 'border-primary-container', 'bg-surface-variant/10');
                    l.classList.add('text-outline-variant');
                });
                this.classList.add('text-surface-container-lowest', 'border-l-4', 'border-primary-container', 'bg-surface-variant/10');
                this.classList.remove('text-outline-variant');
            });
        });
    </script>
</body>

</html>