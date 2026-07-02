<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Instructor Portal - My Schedule</title>
    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
        rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@800,700,500,400&amp;display=swap"
        rel="stylesheet" />
    <!-- Icons -->
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
                        "inverse-primary": "#8ad6af",
                        "primary": "#005639",
                        "on-surface": "#191c1b",
                        "tertiary-fixed-dim": "#c3c8be",
                        "on-primary": "#ffffff",
                        "on-primary-fixed": "#002114",
                        "surface-tint": "#1a6b4b",
                        "tertiary-fixed": "#dfe4da",
                        "primary-fixed": "#a5f3ca",
                        "on-background": "#191c1b",
                        "tertiary": "#474c45",
                        "secondary-fixed": "#e0e3e5",
                        "surface-container": "#eceeeb",
                        "secondary-fixed-dim": "#c4c7c9",
                        "on-secondary-fixed-variant": "#43474a",
                        "surface": "#f8faf7",
                        "inverse-on-surface": "#eff1ee",
                        "background": "#f8faf7",
                        "secondary-container": "#dde0e3",
                        "on-secondary": "#ffffff",
                        "outline-variant": "#bfc9c1",
                        "on-primary-fixed-variant": "#005236",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#5f6365",
                        "on-tertiary-fixed": "#181d17",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#f8faf7",
                        "on-error-container": "#93000a",
                        "surface-dim": "#d8dbd8",
                        "surface-container-high": "#e7e9e6",
                        "on-error": "#ffffff",
                        "surface-variant": "#e1e3e0",
                        "primary-container": "#1f6f4f",
                        "on-primary-container": "#a1efc7",
                        "error": "#ba1a1a",
                        "primary-fixed-dim": "#8ad6af",
                        "error-container": "#ffdad6",
                        "secondary": "#5b5f61",
                        "on-tertiary-container": "#dce1d6",
                        "tertiary-container": "#5f645c",
                        "outline": "#6f7a72",
                        "inverse-surface": "#2e312f",
                        "on-surface-variant": "#3f4943",
                        "surface-container-low": "#f2f4f1",
                        "on-secondary-fixed": "#181c1e",
                        "surface-container-highest": "#e1e3e0",
                        "on-tertiary-fixed-variant": "#434841"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "12px",
                        "2xl": "16px",
                        "full": "9999px"
                    },
                    "spacing": {
                        "lg": "24px",
                        "xl": "32px",
                        "base": "4px",
                        "container-margin": "24px",
                        "2xl": "48px",
                        "xs": "4px",
                        "sm": "8px",
                        "md": "16px",
                        "gutter": "16px"
                    },
                    "fontFamily": {
                        "display-lg": ["Cabinet Grotesk"],
                        "headline-md": ["Cabinet Grotesk"],
                        "headline-sm": ["Cabinet Grotesk"],
                        "body-lg": ["Inter Tight"],
                        "body-md": ["Inter Tight"],
                        "body-sm": ["Inter Tight"],
                        "label-caps": ["Inter Tight"],
                        "data-mono": ["JetBrains Mono"]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #f8faf7;
            font-family: 'Inter Tight', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .active-indicator {
            box-shadow: -4px 0 0 0 #1f6f4f inset;
        }
    </style>
</head>

<body class="flex min-h-screen overflow-hidden">
    <!-- Sidebar Navigation (SideNavBar) -->
    <aside
        class="hidden md:flex flex-col h-screen w-[280px] bg-on-secondary-fixed dark:bg-on-secondary-fixed border-r border-outline-variant fixed left-0 top-0 z-50">
        <div class="flex flex-col h-full py-md px-md">
            <!-- Brand Header -->
            <div class="mb-xl px-sm">
                <div class="text-headline-md font-headline-md font-black text-on-primary">Instructor Portal</div>
                <div class="text-label-caps font-label-caps text-secondary-fixed-dim mt-xs">Pilates Management</div>
            </div>
            <!-- Nav Items -->
            <nav class="flex-1 space-y-base">
                <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary-fixed-dim font-medium hover:text-on-primary hover:bg-primary-container/5 transition-colors duration-200"
                    href="#">
                    <span class="material-symbols-outlined">dashboard</span>
                    <span class="font-label-caps text-label-caps">Dashboard</span>
                </a>
                <a class="flex items-center gap-md px-md py-sm rounded-lg text-on-primary font-bold border-l-4 border-primary-container bg-primary-container/10 transition-colors duration-200"
                    href="#">
                    <span class="material-symbols-outlined">calendar_month</span>
                    <span class="font-label-caps text-label-caps">My Schedule</span>
                </a>
                <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary-fixed-dim font-medium hover:text-on-primary hover:bg-primary-container/5 transition-colors duration-200"
                    href="#">
                    <span class="material-symbols-outlined">group</span>
                    <span class="font-label-caps text-label-caps">My Clients</span>
                </a>
                <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary-fixed-dim font-medium hover:text-on-primary hover:bg-primary-container/5 transition-colors duration-200"
                    href="#">
                    <span class="material-symbols-outlined">payments</span>
                    <span class="font-label-caps text-label-caps">Payouts</span>
                </a>
            </nav>
            <!-- Footer Section -->
            <div class="mt-auto space-y-md border-t border-outline-variant pt-md">
                <button
                    class="w-full bg-primary-container text-on-primary-container font-bold py-md rounded-full text-label-caps hover:opacity-90 transition-transform active:scale-95">
                    Update Availability
                </button>
                <div class="space-y-base">
                    <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary-fixed-dim font-medium hover:text-on-primary hover:bg-primary-container/5"
                        href="#">
                        <span class="material-symbols-outlined">settings</span>
                        <span class="font-label-caps text-label-caps">Settings</span>
                    </a>
                    <a class="flex items-center gap-md px-md py-sm rounded-lg text-secondary-fixed-dim font-medium hover:text-on-primary hover:bg-primary-container/5"
                        href="#">
                        <span class="material-symbols-outlined">help</span>
                        <span class="font-label-caps text-label-caps">Support</span>
                    </a>
                </div>
            </div>
        </div>
    </aside>
    <!-- Main Canvas Area -->
    <main class="flex-1 md:ml-[280px] min-h-screen flex flex-col">
        <!-- TopAppBar -->
        <header
            class="flex justify-between items-center h-16 px-xl w-full bg-surface dark:bg-surface-dim border-b border-outline-variant sticky top-0 z-40">
            <div class="flex items-center gap-md">
                <span class="font-display-lg text-headline-md text-primary">Pilates Pro</span>
            </div>
            <div class="flex items-center gap-xl">
                <button
                    class="bg-primary px-lg py-sm rounded-full text-on-primary font-bold text-body-sm hover:opacity-90 active:scale-95 transition-all">
                    Check In
                </button>
                <div class="flex items-center gap-md">
                    <button class="text-on-surface-variant hover:text-primary transition-colors">
                        <span class="material-symbols-outlined">notifications</span>
                    </button>
                    <div class="w-8 h-8 rounded-full overflow-hidden bg-outline-variant border border-outline">
                        <img class="w-full h-full object-cover"
                            data-alt="A professional headshot of a female Pilates instructor in her 30s with a warm, athletic demeanor. She is standing against a minimalist studio background with soft pine-green accents. The lighting is bright and airy, reflecting a high-end corporate wellness aesthetic."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCMcTiwALOQ_gD04LRshdVtZMGh23Jly0taNLrYJ01aEcmODlZjAREbTI-ZG-VRrVR0aM33tc-iB7NVVRYCfvBMOTuOGEUNiqqNXqSqiNZA8JfrmUyM8g2cDY5hnmxHVsaCwhL9dVb9eil9BCDeueL65oobnUg3OvBiGy0c351uyOWbI33oTzBqlBKRgB015XgZ6A0dEKPSmvQgU5W3fdGTb8-ciF8SY_btOFZlr8TxttNPB_R_93SktDgQ2FFHaVtmkbCgQMIOWIfe" />
                    </div>
                </div>
            </div>
        </header>
        <!-- Content Body -->
        <div class="p-xl space-y-xl overflow-y-auto">
            <!-- Header & Availability Toggle -->
            <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-md">
                <div>
                    <h1 class="font-headline-md text-headline-md text-on-surface">My Schedule</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant">Week of October 23, 2023</p>
                </div>
                <div class="flex items-center gap-md bg-surface-container p-sm rounded-full">
                    <span class="font-label-caps text-label-caps text-secondary pl-md">General Availability</span>
                    <button
                        class="relative inline-flex h-6 w-11 items-center rounded-full bg-primary transition-colors focus:outline-none"
                        id="availabilityToggle">
                        <span
                            class="inline-block h-4 w-4 transform rounded-full bg-white transition-transform translate-x-6"></span>
                    </button>
                    <span class="font-label-caps text-label-caps text-primary pr-md">On</span>
                </div>
            </div>
            <!-- Performance Snapshot Bento -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-md">
                <div class="bg-surface-white border border-stone-200 rounded-2xl p-md flex flex-col justify-between">
                    <span class="text-label-caps text-stone-500">Next Class In</span>
                    <div class="mt-sm">
                        <span class="font-data-mono text-headline-sm text-primary">45m</span>
                        <p class="font-body-sm text-on-surface-variant">Reformer Flow II</p>
                    </div>
                </div>
                <div class="bg-surface-white border border-stone-200 rounded-2xl p-md flex flex-col justify-between">
                    <span class="text-label-caps text-stone-500">Hours Taught</span>
                    <div class="mt-sm">
                        <span class="font-data-mono text-headline-sm text-on-surface">124.5</span>
                        <p class="font-body-sm text-on-surface-variant">This Month</p>
                    </div>
                </div>
                <div class="bg-surface-white border border-stone-200 rounded-2xl p-md flex flex-col justify-between">
                    <span class="text-label-caps text-stone-500">Avg. Rating</span>
                    <div class="mt-sm flex items-center gap-xs">
                        <span class="font-data-mono text-headline-sm text-on-surface">4.9</span>
                        <span class="material-symbols-outlined text-primary text-[18px]"
                            style="font-variation-settings: 'FILL' 1;">star</span>
                        <p class="font-body-sm text-on-surface-variant ml-xs">Global</p>
                    </div>
                </div>
                <div class="bg-surface-white border border-stone-200 rounded-2xl p-md flex flex-col justify-between">
                    <span class="text-label-caps text-stone-500">Upcoming Payout</span>
                    <div class="mt-sm">
                        <span class="font-data-mono text-headline-sm text-on-surface">$2,480</span>
                        <p class="font-body-sm text-on-surface-variant">Estimated</p>
                    </div>
                </div>
            </div>
            <!-- Quick Actions -->
            <div class="flex gap-md">
                <button
                    class="bg-primary text-on-primary px-lg py-md rounded-full font-bold text-label-caps flex items-center gap-sm transition-transform active:scale-95">
                    <span class="material-symbols-outlined">person_check</span>
                    Check-in Members
                </button>
                <button
                    class="bg-secondary-container text-on-secondary-container px-lg py-md rounded-full font-bold text-label-caps flex items-center gap-sm border border-outline-variant transition-transform active:scale-95">
                    <span class="material-symbols-outlined">swap_horiz</span>
                    Request Substitute
                </button>
            </div>
            <!-- Weekly Schedule Grid -->
            <div class="bg-surface-white border border-stone-200 rounded-2xl overflow-hidden shadow-sm">
                <!-- Grid Header -->
                <div class="grid grid-cols-7 border-b border-stone-200 bg-surface-container-low">
                    <div class="p-md text-center border-r border-stone-200">
                        <p class="text-label-caps text-stone-500">MON</p>
                        <p class="font-headline-sm text-on-surface">23</p>
                    </div>
                    <div class="p-md text-center border-r border-stone-200 bg-primary-container/5">
                        <p class="text-label-caps text-primary">TUE</p>
                        <p class="font-headline-sm text-primary">24</p>
                    </div>
                    <div class="p-md text-center border-r border-stone-200">
                        <p class="text-label-caps text-stone-500">WED</p>
                        <p class="font-headline-sm text-on-surface">25</p>
                    </div>
                    <div class="p-md text-center border-r border-stone-200">
                        <p class="text-label-caps text-stone-500">THU</p>
                        <p class="font-headline-sm text-on-surface">26</p>
                    </div>
                    <div class="p-md text-center border-r border-stone-200">
                        <p class="text-label-caps text-stone-500">FRI</p>
                        <p class="font-headline-sm text-on-surface">27</p>
                    </div>
                    <div class="p-md text-center border-r border-stone-200">
                        <p class="text-label-caps text-stone-500">SAT</p>
                        <p class="font-headline-sm text-on-surface">28</p>
                    </div>
                    <div class="p-md text-center">
                        <p class="text-label-caps text-stone-500">SUN</p>
                        <p class="font-headline-sm text-on-surface">29</p>
                    </div>
                </div>
                <!-- Grid Content (Asymmetric Layout Example) -->
                <div class="grid grid-cols-7 min-h-[600px] relative">
                    <!-- Column Dividers -->
                    <div class="absolute inset-0 grid grid-cols-7 pointer-events-none">
                        <div class="border-r border-stone-100"></div>
                        <div class="border-r border-stone-100"></div>
                        <div class="border-r border-stone-100"></div>
                        <div class="border-r border-stone-100"></div>
                        <div class="border-r border-stone-100"></div>
                        <div class="border-r border-stone-100"></div>
                    </div>
                    <!-- Classes Column (Monday) -->
                    <div class="p-sm space-y-sm z-10">
                        <div
                            class="bg-surface border border-stone-200 p-md rounded-xl hover:border-primary transition-colors cursor-pointer">
                            <p class="font-data-mono text-label-caps text-primary">09:00 - 09:50</p>
                            <h4 class="font-headline-sm text-body-md mt-xs">Reformer II</h4>
                            <div class="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">room</span>
                                <span class="text-label-caps">Studio B</span>
                            </div>
                            <div class="mt-md flex justify-between items-center">
                                <span class="text-label-caps text-stone-500">8/12</span>
                                <span
                                    class="bg-primary-container/10 text-primary px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                            </div>
                        </div>
                    </div>
                    <!-- Classes Column (Tuesday - Highlighted Current Day) -->
                    <div class="p-sm space-y-sm z-10 bg-primary-container/5">
                        <div class="bg-surface-white border-2 border-primary p-md rounded-xl shadow-lg relative">
                            <div
                                class="absolute -top-2 -right-2 bg-primary text-on-primary w-6 h-6 rounded-full flex items-center justify-center">
                                <span class="material-symbols-outlined text-[14px]">notifications_active</span>
                            </div>
                            <p class="font-data-mono text-label-caps text-primary">08:00 - 08:50</p>
                            <h4 class="font-headline-sm text-body-md mt-xs">Foundation</h4>
                            <div class="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">room</span>
                                <span class="text-label-caps">Studio A</span>
                            </div>
                            <div class="mt-md flex justify-between items-center">
                                <span class="text-label-caps text-stone-500">12/12</span>
                                <span
                                    class="bg-error-container text-error px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Full</span>
                            </div>
                        </div>
                        <div
                            class="bg-surface-white border border-stone-200 p-md rounded-xl hover:border-primary transition-colors cursor-pointer">
                            <p class="font-data-mono text-label-caps text-primary">12:00 - 12:50</p>
                            <h4 class="font-headline-sm text-body-md mt-xs">Private Session</h4>
                            <div class="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">room</span>
                                <span class="text-label-caps">Suite 04</span>
                            </div>
                            <div class="mt-md flex justify-between items-center">
                                <span class="text-label-caps text-stone-500">1/1</span>
                                <span
                                    class="bg-primary-container/10 text-primary px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                            </div>
                        </div>
                    </div>
                    <!-- Classes Column (Wednesday) -->
                    <div class="p-sm space-y-sm z-10">
                        <div
                            class="bg-surface border border-stone-200 p-md rounded-xl hover:border-primary transition-colors cursor-pointer">
                            <p class="font-data-mono text-label-caps text-primary">10:00 - 10:50</p>
                            <h4 class="font-headline-sm text-body-md mt-xs">Tower Power</h4>
                            <div class="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">room</span>
                                <span class="text-label-caps">Studio B</span>
                            </div>
                            <div class="mt-md flex justify-between items-center">
                                <span class="text-label-caps text-stone-500">6/10</span>
                                <span
                                    class="bg-primary-container/10 text-primary px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                            </div>
                        </div>
                    </div>
                    <!-- Classes Column (Thursday) -->
                    <div class="p-sm space-y-sm z-10">
                        <div
                            class="bg-surface border border-stone-200 p-md rounded-xl hover:border-primary transition-colors cursor-pointer">
                            <p class="font-data-mono text-label-caps text-primary">09:00 - 09:50</p>
                            <h4 class="font-headline-sm text-body-md mt-xs">Reformer II</h4>
                            <div class="flex items-center gap-xs mt-sm text-on-surface-variant">
                                <span class="material-symbols-outlined text-[16px]">room</span>
                                <span class="text-label-caps">Studio B</span>
                            </div>
                            <div class="mt-md flex justify-between items-center">
                                <span class="text-label-caps text-stone-500">9/12</span>
                                <span
                                    class="bg-primary-container/10 text-primary px-sm py-xs rounded-full text-[10px] font-bold uppercase tracking-wider">Confirmed</span>
                            </div>
                        </div>
                    </div>
                    <!-- Empty Columns for Visual Structure -->
                    <div class="p-sm z-10 flex flex-col items-center justify-center">
                        <span class="material-symbols-outlined text-stone-300">event_busy</span>
                    </div>
                    <div class="p-sm z-10 flex flex-col items-center justify-center">
                        <span class="material-symbols-outlined text-stone-300">event_busy</span>
                    </div>
                    <div class="p-sm z-10 flex flex-col items-center justify-center">
                        <span class="material-symbols-outlined text-stone-300">event_busy</span>
                    </div>
                </div>
            </div>
            <!-- Footer Meta -->
            <div class="flex justify-between items-center pt-xl text-stone-400">
                <p class="font-body-sm text-label-caps">© 2023 Pilates Pro Studio Management</p>
                <div class="flex gap-md">
                    <a class="hover:text-primary transition-colors" href="#">Privacy</a>
                    <a class="hover:text-primary transition-colors" href="#">Terms</a>
                </div>
            </div>
        </div>
    </main>
    <!-- Bottom Navigation for Mobile -->
    <nav
        class="md:hidden fixed bottom-0 left-0 right-0 bg-surface border-t border-outline-variant flex justify-around items-center h-16 px-md z-50">
        <a class="flex flex-col items-center text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">dashboard</span>
            <span class="text-[10px] font-label-caps">Home</span>
        </a>
        <a class="flex flex-col items-center text-primary" href="#">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">calendar_month</span>
            <span class="text-[10px] font-label-caps font-bold">Schedule</span>
        </a>
        <a class="flex flex-col items-center text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">group</span>
            <span class="text-[10px] font-label-caps">Clients</span>
        </a>
        <a class="flex flex-col items-center text-on-surface-variant" href="#">
            <span class="material-symbols-outlined">account_circle</span>
            <span class="text-[10px] font-label-caps">Account</span>
        </a>
    </nav>
    <script>
        // Micro-interaction for availability toggle
        const toggleBtn = document.getElementById('availabilityToggle');
        const toggleDot = toggleBtn.querySelector('span');
        let isOn = true;

        toggleBtn.addEventListener('click', () => {
            isOn = !isOn;
            if (isOn) {
                toggleBtn.classList.remove('bg-stone-300');
                toggleBtn.classList.add('bg-primary');
                toggleDot.classList.remove('translate-x-1');
                toggleDot.classList.add('translate-x-6');
            } else {
                toggleBtn.classList.remove('bg-primary');
                toggleBtn.classList.add('bg-stone-300');
                toggleDot.classList.remove('translate-x-6');
                toggleDot.classList.add('translate-x-1');
            }
        });

        // Simple animation on card hover
        document.querySelectorAll('.bg-surface-white').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-2px)';
                card.style.transition = 'transform 0.2s ease-out';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>
</body>

</html>