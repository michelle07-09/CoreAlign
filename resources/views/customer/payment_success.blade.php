<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Payment Success - StudioFlow</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@400,500,700,800&amp;display=swap"
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
    <!-- Tailwind Configuration -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface-variant": "#3f4943",
                        "tertiary-fixed": "#ffdad8",
                        "on-background": "#181c1e",
                        "error-container": "#ffdad6",
                        "primary-container": "#1f6f4f",
                        "on-secondary-fixed-variant": "#434841",
                        "inverse-surface": "#2d3133",
                        "surface-container-highest": "#e0e3e5",
                        "on-secondary-fixed": "#181d17",
                        "surface-dim": "#d7dadd",
                        "surface": "#f7fafc",
                        "outline-variant": "#bfc9c1",
                        "secondary-container": "#dfe4da",
                        "secondary": "#5b6058",
                        "secondary-fixed-dim": "#c3c8be",
                        "outline": "#6f7a72",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#eef1f4",
                        "surface-container-high": "#e6e8eb",
                        "inverse-primary": "#8ad6af",
                        "surface-bright": "#f7fafc",
                        "on-error": "#ffffff",
                        "primary-fixed-dim": "#8ad6af",
                        "on-surface": "#181c1e",
                        "secondary-fixed": "#dfe4da",
                        "surface-container-lowest": "#ffffff",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed-variant": "#743233",
                        "on-tertiary-container": "#ffd4d3",
                        "surface-container-low": "#f1f4f6",
                        "on-error-container": "#93000a",
                        "surface-container": "#ebeef1",
                        "on-tertiary-fixed": "#3c070b",
                        "tertiary-container": "#964c4c",
                        "surface-tint": "#1a6b4b",
                        "on-tertiary": "#ffffff",
                        "background": "#f7fafc",
                        "tertiary-fixed-dim": "#ffb3b1",
                        "tertiary": "#793536",
                        "primary": "#005639",
                        "on-secondary-container": "#61665e",
                        "on-primary-fixed": "#002114",
                        "on-primary-container": "#a1efc7",
                        "on-primary": "#ffffff",
                        "on-primary-fixed-variant": "#005236",
                        "primary-fixed": "#a5f3ca",
                        "surface-variant": "#e0e3e5"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "xxl": "48px",
                        "md": "16px",
                        "base": "4px",
                        "margin-mobile": "16px",
                        "xs": "8px",
                        "max-width": "1280px",
                        "xl": "32px",
                        "margin-desktop": "32px",
                        "sm": "12px",
                        "lg": "24px",
                        "gutter": "16px"
                    },
                    "fontFamily": {
                        "body-sm": ["Inter Tight"],
                        "headline-lg-mobile": ["Cabinet Grotesk"],
                        "label": ["Inter Tight"],
                        "headline-sm": ["Cabinet Grotesk"],
                        "headline-lg": ["Cabinet Grotesk"],
                        "headline-md": ["Cabinet Grotesk"],
                        "display": ["Cabinet Grotesk"],
                        "body-md": ["Inter Tight"],
                        "body-lg": ["Inter Tight"]
                    },
                    "fontSize": {
                        "body-sm": ["14px", { "lineHeight": "1.4", "letterSpacing": "0em", "fontWeight": "500" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "label": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "headline-sm": ["20px", { "lineHeight": "1.4", "letterSpacing": "0em", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "letterSpacing": "0em", "fontWeight": "400" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "letterSpacing": "-0.01em", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background text-on-background min-h-screen flex items-center justify-center p-margin-mobile md:p-margin-desktop antialiased selection:bg-primary-container selection:text-on-primary-container">
    <!-- Transactional Screen: Navigation Shell Suppressed -->
    <main class="w-full max-w-[440px] flex flex-col items-center text-center">
        <!-- Animated / Highlight Icon -->
        <div
            class="mb-lg relative flex items-center justify-center h-24 w-24 rounded-full bg-surface-container-highest border border-surface-variant shadow-[0_0px_12px_rgba(24,28,30,0.04)] animate-[bounce_1s_ease-in-out_infinite] [animation-iteration-count:1] [animation-duration:0.6s]">
            <span class="material-symbols-outlined text-[48px] text-primary" data-icon="check_circle"
                style="font-variation-settings: 'FILL' 1;">check_circle</span>
        </div>
        <!-- Header Block -->
        <div class="mb-xxl flex flex-col items-center">
            <h1
                class="font-headline-lg-mobile text-headline-lg-mobile md:font-headline-lg md:text-headline-lg text-on-background mb-xs tracking-tight">
                Payment Successful!</h1>
            <p class="font-body-lg text-body-lg text-secondary">Your 10-Class Pack is now active.</p>
        </div>
        <!-- Details Card (Glassmorphism / Tonal Layering) -->
        <div
            class="w-full bg-surface-container-lowest border border-surface-variant rounded-[16px] shadow-[0_0px_12px_rgba(24,28,30,0.04)] p-lg mb-xl text-left hover:border-outline transition-colors duration-300">
            <div class="flex flex-col gap-sm">
                <!-- Row 1: Amount -->
                <div class="flex justify-between items-end pb-sm border-b border-surface-container">
                    <span class="font-body-sm text-body-sm text-outline">Amount Paid</span>
                    <span class="font-headline-sm text-headline-sm text-on-background">$315.00</span>
                </div>
                <!-- Row 2: Date -->
                <div class="flex justify-between items-center py-xs border-b border-surface-container">
                    <span class="font-body-sm text-body-sm text-outline">Date</span>
                    <span class="font-body-md text-body-md text-on-background font-medium">Oct 24, 2023</span>
                </div>
                <!-- Row 3: Payment Method -->
                <div class="flex justify-between items-center py-xs border-b border-surface-container">
                    <span class="font-body-sm text-body-sm text-outline">Payment Method</span>
                    <div class="flex items-center gap-xs">
                        <span class="material-symbols-outlined text-[16px] text-secondary"
                            data-icon="credit_card">credit_card</span>
                        <span class="font-body-md text-body-md text-on-background font-medium">•••• 4242</span>
                    </div>
                </div>
                <!-- Row 4: Transaction ID -->
                <div class="flex justify-between items-center pt-xs">
                    <span class="font-body-sm text-body-sm text-outline">Transaction ID</span>
                    <span
                        class="font-body-sm text-body-sm text-on-surface-variant tracking-wider uppercase">#SF-9823-XYZ</span>
                </div>
            </div>
        </div>
        <!-- Instructions -->
        <p class="font-body-md text-body-md text-on-surface-variant mb-xl px-md">
            You can now book your next class using your new credits.
        </p>
        <!-- CTAs -->
        <div class="w-full flex flex-col gap-sm">
            <!-- Primary CTA -->
            <button
                class="w-full flex items-center justify-center h-[56px] rounded-full bg-primary hover:bg-on-primary-fixed-variant text-on-primary font-label text-label tracking-widest uppercase transition-all duration-200 active:scale-[0.98]">
                Go to Schedule
            </button>
            <!-- Secondary CTA (Ghost) -->
            <button
                class="w-full flex items-center justify-center h-[56px] rounded-full bg-transparent hover:bg-surface-container-low text-on-surface font-label text-label tracking-widest uppercase transition-all duration-200">
                View Receipt
            </button>
        </div>
    </main>
</body>

</html>