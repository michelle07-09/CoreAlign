<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pivot Pilates - Home</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabinet+Grotesk:wght@500;700&amp;family=Inter+Tight:wght@400;500;600&amp;display=swap"
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
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #f7fafc;
            /* bg-background */
            color: #181c1e;
            /* text-on-background */
        }

        /* Custom ambient shadow */
        .shadow-ambient {
            box-shadow: 0 0 12px 0 rgba(24, 28, 30, 0.04);
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
        class="fixed top-0 w-full z-50 bg-surface border-b border-outline-variant flex justify-between items-center h-16 px-margin-mobile md:px-margin-desktop md:hidden">
        <div class="flex items-center gap-xs">
            <span class="material-symbols-outlined text-primary" data-icon="location_on"
                style="font-variation-settings: 'FILL' 1;">location_on</span>
            <span class="font-headline-sm-mobile text-headline-sm-mobile tracking-tighter text-primary">PIVOT
                PILATES</span>
        </div>
        <div>
            <img alt="Profile Avatar" class="w-8 h-8 rounded-full border border-outline-variant object-cover"
                data-alt="A small circular profile avatar of a fit woman with brown hair tied back, wearing a minimalist black athletic top. She is smiling softly against a clean, bright studio background with subtle pine green accents. High-quality corporate athletic aesthetic."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuCLcam-KiT2EcR20g99NBVFs4GD0jaKng6zedxM1kJIKhY0Wu-J8Mds31tkTgTeVihOctZMmbarpsLBoSZkbBA3dW2HTd3AB0U4jhZNbG4_4NwtZ2VO4lZ-qwNlAU0YKq9rwmYt-6itZ_wi9ywwD-P8qU3wh5xLEi3L93ZR-1xOasvTlkAV5ui7BbtYEs6Vs_IPEdKBQizBWSnO0PvjvY_FOxcHKOETzHoxIMMah28U63aEkwYTgEwsyn2OolqBY6eUemFPTIGnxVs4" />
        </div>
    </header>
    <!-- Desktop Top Navigation (Hidden on mobile) -->
    <header
        class="hidden md:flex fixed top-0 w-full z-50 bg-surface border-b border-outline-variant justify-between items-center h-16 px-margin-desktop">
        <div class="flex items-center gap-xs">
            <span class="material-symbols-outlined text-primary" data-icon="location_on"
                style="font-variation-settings: 'FILL' 1;">location_on</span>
            <span class="font-headline-sm text-headline-sm tracking-tighter text-primary">PIVOT PILATES</span>
        </div>
        <nav class="flex gap-lg">
            <a class="font-label text-label text-primary flex items-center gap-base" href="#"><span
                    class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span> Home</a>
            <a class="font-label text-label text-on-surface-variant hover:text-primary transition-colors flex items-center gap-base"
                href="#"><span class="material-symbols-outlined">calendar_today</span> Schedule</a>
            <a class="font-label text-label text-on-surface-variant hover:text-primary transition-colors flex items-center gap-base"
                href="#"><span class="material-symbols-outlined">card_membership</span> Membership</a>
        </nav>
        <div class="flex items-center gap-sm">
            <img alt="Profile Avatar" class="w-8 h-8 rounded-full border border-outline-variant object-cover"
                data-alt="A small circular profile avatar of a fit woman with brown hair tied back, wearing a minimalist black athletic top. She is smiling softly against a clean, bright studio background with subtle pine green accents. High-quality corporate athletic aesthetic."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAiF-U9TxCiD5Qd-MXA2bTplV6lnnz775bYHUncOzWFQwEVbuonMiPfKT_-8NfrXDQ4TsbOu5oAAkufCd-7HdBN4ybPThjxUtbKeuBp1FLI50ZNX8SEMLqSjAZplDQIgD1Q350mYN60SyDMNPmSy-SjzeaqPCLK7-gGBxSMzq34RwwAUg35xMSr5MnK8I7ma7CVmE_GKF52lIn2d33eEzlMRYkbOLBMZdN0PoIakMNS6esUk4MrtnQcoomv--LAnsevP0GudE546PGh" />
            <span class="font-label text-label text-on-surface">Profile</span>
        </div>
    </header>
    <main
        class="flex-grow w-full max-w-[1280px] mx-auto px-margin-mobile md:px-margin-desktop mt-md md:mt-xl flex flex-col gap-xxl">
        <!-- Welcome & Credit Card -->
        <section class="grid grid-cols-1 md:grid-cols-2 gap-md items-stretch">
            <!-- Welcome Message -->
            <div class="flex flex-col justify-center">
                <h1 class="font-display text-display text-primary mb-base">Good morning,<br />Sarah.</h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant">Your alignment awaits. Let's build strength
                    today.</p>
            </div>
            <!-- Membership/Credit Card -->
            <div
                class="bg-surface rounded-xl border border-outline-variant p-lg flex flex-col justify-between hover:border-outline transition-colors shadow-ambient">
                <div class="flex justify-between items-start mb-md">
                    <div>
                        <span
                            class="font-label text-label text-on-surface-variant uppercase tracking-wider block mb-base">Current
                            Plan</span>
                        <h2 class="font-headline-md text-headline-md text-on-surface">Unlimited + Flow</h2>
                    </div>
                    <span class="material-symbols-outlined text-primary text-3xl" data-icon="card_membership"
                        style="font-variation-settings: 'FILL' 1;">card_membership</span>
                </div>
                <div>
                    <div class="flex items-end gap-base mb-xs">
                        <span class="font-display text-display text-primary leading-none">12</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant pb-1">Credits Remaining</span>
                    </div>
                    <div class="w-full bg-surface-container-highest rounded-full h-1.5 mt-sm">
                        <div class="bg-primary h-1.5 rounded-full" style="width: 75%"></div>
                    </div>
                    <div class="flex justify-between mt-xs font-label text-label text-on-surface-variant">
                        <span>Renews Oct 1</span>
                        <a class="text-primary hover:underline" href="#">Manage</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Next Class Card -->
        <section>
            <h3 class="font-headline-sm text-headline-sm text-on-surface mb-md">Next Class</h3>
            <div
                class="bg-surface rounded-xl border border-outline-variant p-md flex flex-col md:flex-row items-center gap-md hover:border-outline transition-colors shadow-ambient group cursor-pointer relative overflow-hidden">
                <!-- Decorative background subtle gradient -->
                <div
                    class="absolute inset-0 bg-gradient-to-r from-primary-fixed/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none">
                </div>
                <div class="flex-shrink-0 relative z-10">
                    <img alt="Instructor Elena"
                        class="w-16 h-16 rounded-full border border-outline-variant object-cover"
                        data-alt="A professional headshot of a female pilates instructor named Elena. She is wearing a dark pine green athletic top, smiling confidently. The background is a clean, bright, white studio setting. High contrast, sharp focus, modern corporate athletic aesthetic."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuASj5bXeQknjaVboP4kqPdZSy_50OcIBxDvVYJDX4E4BL_kw7eqHxGnRZIEac61lQiZY7aMbqNk0iCYAAXq4NMAAfTWHb1cTngWEEVPOKKfvve_v7Icv34AMm5zXRLvvsoLWizq0dJbVvPy5c0UQMe4dbBbbVOzGyJvngnx_JjVOrcQolMPRh5DAHcye92AwM5oa-_-4j3AAJWIFrPuHhNhROAdJXUeteebBfYsd1G72gC2FO0-S8-YiOo3AZCy6Z8_DO_2y4J3aSVl" />
                </div>
                <div class="flex-grow text-center md:text-left z-10">
                    <div
                        class="inline-block bg-primary-fixed text-on-primary-fixed-variant font-label text-label px-sm py-1 rounded-full mb-xs">
                        Tomorrow</div>
                    <h4 class="font-headline-md text-headline-md text-on-surface mb-base">Reformer Flow</h4>
                    <p
                        class="font-body-md text-body-md text-on-surface-variant flex items-center justify-center md:justify-start gap-xs">
                        <span class="material-symbols-outlined text-[18px]">schedule</span> 09:00 AM - 09:50 AM
                        <span class="mx-xs text-outline-variant">•</span>
                        with Elena
                    </p>
                </div>
                <div class="flex-shrink-0 w-full md:w-auto z-10">
                    <button
                        class="w-full md:w-auto bg-surface border border-outline-variant text-on-surface font-body-sm text-body-sm px-lg py-sm rounded-full hover:border-outline hover:bg-surface-container-low transition-colors">Modify
                        Booking</button>
                </div>
            </div>
        </section>
        <!-- Recommended Classes Bento Grid -->
        <section>
            <div class="flex justify-between items-end mb-md">
                <h3 class="font-headline-sm text-headline-sm text-on-surface">Recommended for Today</h3>
                <a class="font-label text-label text-primary hover:underline flex items-center gap-xs" href="#">View
                    Schedule <span class="material-symbols-outlined text-[16px]">arrow_forward</span></a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-md">
                <!-- Class Card 1 -->
                <div
                    class="bg-surface rounded-xl border border-outline-variant hover:border-outline transition-colors shadow-ambient overflow-hidden flex flex-col">
                    <div class="bg-cover bg-center w-full h-32 border-b border-outline-variant"
                        data-alt="A sleek, modern pilates reformer machine set against a clean white studio background. Natural sunlight streams in, creating sharp, angular shadows. Subtle pine green accents in the room. High-end, premium aesthetic, crisp and focused."
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAaMDlXU4coXZmP_hq-WwpG1GfRwpRCaZM80VyUjsY8sUFU1utDqqb63xMagWbp3ewIWpPPau63p0JEgHIPJPYqmPDMDOR7-7do7iTg2PWZNKFDXZkVKd-Zp6OE4107jhE-AEiIax1WNygbNkB9FnBJS9-A4faMJACb-w-ujf0sUSo1tXlAHYO5rlvXrzmjSto-cykIrpxp41Q5FM3Q8GQjI76juX9SZa63dhh2HJWGvD9ezh-dkcxj7jAFoAkAAoUjwWpRfdsVgK3s')">
                    </div>
                    <div class="p-md flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-xs">
                            <span class="font-label text-label text-on-surface-variant">12:30 PM (50m)</span>
                            <span
                                class="bg-surface-container-high text-on-surface-variant font-label text-label px-2 py-0.5 rounded">3
                                Spots Left</span>
                        </div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface mb-base">Lunchtime Sculpt</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow">Focus on core
                            stability and quick recovery.</p>
                        <button
                            class="w-full bg-primary text-on-primary font-body-sm text-body-sm px-md py-sm rounded-full hover:opacity-90 transition-opacity">Book
                            • 1 Credit</button>
                    </div>
                </div>
                <!-- Class Card 2 -->
                <div
                    class="bg-surface rounded-xl border border-outline-variant hover:border-outline transition-colors shadow-ambient overflow-hidden flex flex-col">
                    <div class="bg-cover bg-center w-full h-32 border-b border-outline-variant"
                        data-alt="Close up of a person's hands gripping the padded handles of a pilates reformer machine. The straps are taut. The setting is bright and clean with cool-toned lighting. Minimalist athletic aesthetic, conveying strength and control."
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD7XKHKXcdM7xk31xrPLFwAxwacLqwmA_ZzmaR97aXO70Gy4dbswGiJ-_y8W-W64RhTNnJEqUZuDedcrVx2jA_QYmeAAT0GmiscDryqb55bs0sJaU3iJ-sIO8FN1YH6Ao2Vb6ejYXZMmzJDm4TCiKULrfxpWCXbDCgd0BJxGL-i1cKywzsoHp5JWXiJX4A7Cnhobj8kE6Z6gSv2SesD9ADyoJfqs8CQdomqVS2I5uTsieq6iJbua7hMImkdYE1d4Cm1rokv_1q_9EeW')">
                    </div>
                    <div class="p-md flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-xs">
                            <span class="font-label text-label text-on-surface-variant">17:00 PM (50m)</span>
                            <span
                                class="bg-primary-fixed/20 text-primary font-label text-label px-2 py-0.5 rounded">Waitlist</span>
                        </div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface mb-base">Advanced Power</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow">High intensity,
                            full-body athletic conditioning.</p>
                        <button
                            class="w-full bg-surface border border-outline-variant text-on-surface font-body-sm text-body-sm px-md py-sm rounded-full hover:bg-surface-container-low transition-colors">Join
                            Waitlist</button>
                    </div>
                </div>
                <!-- Class Card 3 -->
                <div
                    class="bg-surface rounded-xl border border-outline-variant hover:border-outline transition-colors shadow-ambient overflow-hidden flex flex-col">
                    <div class="bg-cover bg-center w-full h-32 border-b border-outline-variant"
                        data-alt="A calm, beautifully lit empty studio corner with a simple pine wood bench and a rolled up dark green yoga mat. Soft morning light creates a serene, restorative atmosphere. Modern, architectural, premium wellness vibe."
                        style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBAsMVIfsumN5UFt_Exm2Txf-zXmmXCAy1PcaKfqPpugFkXVcree5HvXLw3FvqwfqFXpIuyQQzDas4RiWoln7zzywgMNIrZGG8o1rbA5JUIAGBqyAfhLSlBf37_Uo1G2kiBFAITfriWqFEFIpTg6ZrUCT_r-4m8treUCeqYwotbleBp7nnjs_P5htVqLtNWzpzTE8McB6p0byeiYl7jCsvN9_jkDxxrZxU56zoN4-u25kCXPAJHLiF458F-EX5cySfgFQ798aM40Aef')">
                    </div>
                    <div class="p-md flex flex-col flex-grow">
                        <div class="flex justify-between items-start mb-xs">
                            <span class="font-label text-label text-on-surface-variant">19:00 PM (60m)</span>
                            <span
                                class="bg-surface-container-high text-on-surface-variant font-label text-label px-2 py-0.5 rounded">Available</span>
                        </div>
                        <h4 class="font-headline-sm text-headline-sm text-on-surface mb-base">Restorative Stretch</h4>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mb-md flex-grow">Deep stretching and
                            mobility work for recovery.</p>
                        <button
                            class="w-full bg-primary text-on-primary font-body-sm text-body-sm px-md py-sm rounded-full hover:opacity-90 transition-opacity">Book
                            • 1 Credit</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- BottomNavBar -->
    <nav
        class="fixed bottom-0 left-0 w-full h-20 flex justify-around items-center px-4 pb-safe bg-surface dark:bg-surface-dim z-50 rounded-t-xl border-t border-outline-variant md:hidden">
        <!-- Home (Active) -->
        <a class="flex flex-col items-center justify-center bg-primary-container text-on-primary-container rounded-full px-5 py-1.5 scale-95 transition-transform duration-200"
            href="#">
            <span class="material-symbols-outlined" data-icon="home"
                style="font-variation-settings: 'FILL' 1;">home</span>
            <span class="font-label text-label mt-1">Home</span>
        </a>
        <!-- Schedule (Inactive) -->
        <a class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors"
            href="#">
            <span class="material-symbols-outlined" data-icon="calendar_today">calendar_today</span>
            <span class="font-label text-label mt-1">Schedule</span>
        </a>
        <!-- Membership (Inactive) -->
        <a class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors"
            href="#">
            <span class="material-symbols-outlined" data-icon="card_membership">card_membership</span>
            <span class="font-label text-label mt-1">Membership</span>
        </a>
        <!-- Profile (Inactive) -->
        <a class="flex flex-col items-center justify-center text-on-surface-variant px-5 py-1.5 hover:bg-surface-container-high rounded-full transition-colors"
            href="#">
            <span class="material-symbols-outlined" data-icon="person">person</span>
            <span class="font-label text-label mt-1">Profile</span>
        </a>
    </nav>
</body>

</html>