<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Payment Methods - StudioFlow</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabinet+Grotesk:wght@400;500;700;800;900&amp;family=Inter+Tight:wght@400;500;600;700&amp;display=swap"
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
                        "tertiary": "#793536",
                        "on-primary-fixed-variant": "#005236",
                        "on-background": "#181c1e",
                        "surface": "#f7fafc",
                        "primary-fixed": "#a5f3ca",
                        "surface-tint": "#1a6b4b",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#f7fafc",
                        "primary": "#005639",
                        "on-tertiary-container": "#ffd4d3",
                        "on-secondary-fixed-variant": "#434841",
                        "on-surface": "#181c1e",
                        "on-primary-container": "#a1efc7",
                        "surface-container-low": "#f1f4f6",
                        "secondary-container": "#dfe4da",
                        "secondary-fixed": "#dfe4da",
                        "outline-variant": "#bfc9c1",
                        "inverse-primary": "#8ad6af",
                        "inverse-on-surface": "#eef1f4",
                        "surface-dim": "#d7dadd",
                        "surface-container": "#ebeef1",
                        "on-error-container": "#93000a",
                        "secondary-fixed-dim": "#c3c8be",
                        "on-tertiary-fixed-variant": "#743233",
                        "on-secondary-container": "#61665e",
                        "inverse-surface": "#2d3133",
                        "error": "#ba1a1a",
                        "background": "#f7fafc",
                        "on-error": "#ffffff",
                        "tertiary-fixed-dim": "#ffb3b1",
                        "on-surface-variant": "#3f4943",
                        "on-tertiary-fixed": "#3c070b",
                        "tertiary-fixed": "#ffdad8",
                        "surface-container-lowest": "#ffffff",
                        "error-container": "#ffdad6",
                        "tertiary-container": "#964c4c",
                        "surface-container-high": "#e6e8eb",
                        "on-secondary-fixed": "#181d17",
                        "primary-fixed-dim": "#8ad6af",
                        "on-primary": "#ffffff",
                        "secondary": "#5b6058",
                        "on-primary-fixed": "#002114",
                        "primary-container": "#1f6f4f",
                        "outline": "#6f7a72",
                        "surface-variant": "#e0e3e5",
                        "surface-container-highest": "#e0e3e5"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "lg": "24px",
                        "xs": "8px",
                        "sm": "12px",
                        "margin-mobile": "16px",
                        "xxl": "48px",
                        "md": "16px",
                        "base": "4px",
                        "gutter": "16px",
                        "margin-desktop": "32px",
                        "max-width": "1280px",
                        "xl": "32px"
                    },
                    "fontFamily": {
                        "body-lg": [
                            "Inter Tight"
                        ],
                        "headline-sm": [
                            "Cabinet Grotesk"
                        ],
                        "headline-md": [
                            "Cabinet Grotesk"
                        ],
                        "body-md": [
                            "Inter Tight"
                        ],
                        "headline-lg": [
                            "Cabinet Grotesk"
                        ],
                        "display": [
                            "Cabinet Grotesk"
                        ],
                        "body-sm": [
                            "Inter Tight"
                        ],
                        "headline-lg-mobile": [
                            "Cabinet Grotesk"
                        ],
                        "label": [
                            "Inter Tight"
                        ]
                    },
                    "fontSize": {
                        "body-lg": [
                            "18px",
                            {
                                "lineHeight": "1.6",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "400"
                            }
                        ],
                        "headline-sm": [
                            "20px",
                            {
                                "lineHeight": "1.4",
                                "letterSpacing": "0em",
                                "fontWeight": "600"
                            }
                        ],
                        "headline-md": [
                            "24px",
                            {
                                "lineHeight": "1.3",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "600"
                            }
                        ],
                        "body-md": [
                            "16px",
                            {
                                "lineHeight": "1.5",
                                "letterSpacing": "0em",
                                "fontWeight": "400"
                            }
                        ],
                        "headline-lg": [
                            "32px",
                            {
                                "lineHeight": "1.2",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "600"
                            }
                        ],
                        "display": [
                            "48px",
                            {
                                "lineHeight": "1.1",
                                "letterSpacing": "-0.04em",
                                "fontWeight": "700"
                            }
                        ],
                        "body-sm": [
                            "14px",
                            {
                                "lineHeight": "1.4",
                                "letterSpacing": "0em",
                                "fontWeight": "500"
                            }
                        ],
                        "headline-lg-mobile": [
                            "24px",
                            {
                                "lineHeight": "1.2",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "600"
                            }
                        ],
                        "label": [
                            "12px",
                            {
                                "lineHeight": "1",
                                "letterSpacing": "0.05em",
                                "fontWeight": "600"
                            }
                        ]
                    }
                },
            },
        }
    </script>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body
    class="bg-background text-on-background font-body-md min-h-screen antialiased selection:bg-primary-container selection:text-on-primary-container">
    <!-- TopAppBar -->
    <header
        class="w-full top-0 sticky bg-surface dark:bg-background border-b border-outline-variant dark:border-on-surface-variant z-40">
        <div
            class="flex justify-between items-center px-margin-mobile md:px-margin-desktop h-16 w-full max-w-max-width mx-auto">
            <button aria-label="Back"
                class="text-primary dark:text-primary-fixed hover:bg-surface-container-low dark:hover:bg-surface-dim transition-colors p-2 rounded-full active:scale-95 transition-transform">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 0;">arrow_back</span>
            </button>
            <h1 class="font-headline-sm text-headline-sm text-primary dark:text-primary-fixed">Payment Methods</h1>
            <div class="w-10"></div> <!-- Placeholder to balance flex-between if no trailing action -->
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="w-full max-w-max-width mx-auto px-margin-mobile md:px-margin-desktop py-lg md:py-xxl space-y-lg">
        <!-- Instructional / Helper text -->
        <div class="space-y-base">
            <p class="font-body-md text-body-md text-on-surface-variant">Manage your saved cards for quick and secure
                checkouts.</p>
        </div>
        <!-- Saved Cards List (Bento-ish layout or stacked cards) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-md md:gap-lg">
            <!-- Default Card -->
            <div
                class="relative bg-surface-container-lowest border border-primary rounded-[16px] p-lg flex flex-col justify-between min-h-[160px] group transition-all duration-300 shadow-[0_4px_12px_rgba(0,0,0,0.04)] ring-1 ring-primary-fixed/50">
                <!-- Status Badge -->
                <div class="absolute top-md right-md">
                    <span
                        class="inline-flex items-center px-sm py-base rounded-full bg-primary-container/20 text-primary-container font-label text-label font-bold tracking-wider uppercase">Default</span>
                </div>
                <div class="flex items-start gap-md">
                    <!-- Card Brand Logo (Simulated) -->
                    <div
                        class="w-12 h-8 bg-surface-container-high rounded border border-outline-variant flex items-center justify-center">
                        <span class="font-headline-sm text-on-surface-variant text-[10px] font-bold">MASTER</span>
                    </div>
                    <div>
                        <p class="font-headline-sm text-headline-sm text-on-surface">**** 8812</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Expires 12/26</p>
                    </div>
                </div>
                <div class="flex items-center gap-sm mt-lg pt-sm border-t border-outline-variant/30">
                    <button
                        class="font-label text-label text-primary hover:text-primary-container transition-colors uppercase">Edit</button>
                    <span class="text-outline-variant text-[10px]">|</span>
                    <button
                        class="font-label text-label text-error hover:text-on-error-container transition-colors uppercase">Remove</button>
                </div>
            </div>
            <!-- Additional Card -->
            <div
                class="relative bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-[16px] p-lg flex flex-col justify-between min-h-[160px] group transition-all duration-300">
                <div class="flex items-start gap-md">
                    <!-- Card Brand Logo (Simulated) -->
                    <div
                        class="w-12 h-8 bg-surface-container-high rounded border border-outline-variant flex items-center justify-center">
                        <span class="font-headline-sm text-on-surface-variant text-[10px] font-bold">VISA</span>
                    </div>
                    <div>
                        <p class="font-headline-sm text-headline-sm text-on-surface">**** 4421</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Expires 08/25</p>
                    </div>
                </div>
                <div class="flex items-center gap-sm mt-lg pt-sm border-t border-outline-variant/30">
                    <button
                        class="font-label text-label text-primary hover:text-primary-container transition-colors uppercase">Edit</button>
                    <span class="text-outline-variant text-[10px]">|</span>
                    <button
                        class="font-label text-label text-error hover:text-on-error-container transition-colors uppercase">Remove</button>
                    <span class="text-outline-variant text-[10px]">|</span>
                    <button
                        class="font-label text-label text-on-surface-variant hover:text-on-surface transition-colors uppercase">Set
                        as Default</button>
                </div>
            </div>
            <!-- Additional Card -->
            <div
                class="relative bg-surface-container-lowest border border-outline-variant hover:border-outline rounded-[16px] p-lg flex flex-col justify-between min-h-[160px] group transition-all duration-300">
                <div class="flex items-start gap-md">
                    <!-- Card Brand Logo (Simulated) -->
                    <div
                        class="w-12 h-8 bg-surface-container-high rounded border border-outline-variant flex items-center justify-center">
                        <span class="font-headline-sm text-on-surface-variant text-[10px] font-bold">AMEX</span>
                    </div>
                    <div>
                        <p class="font-headline-sm text-headline-sm text-on-surface">**** 1004</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Expires 02/28</p>
                    </div>
                </div>
                <div class="flex items-center gap-sm mt-lg pt-sm border-t border-outline-variant/30">
                    <button
                        class="font-label text-label text-primary hover:text-primary-container transition-colors uppercase">Edit</button>
                    <span class="text-outline-variant text-[10px]">|</span>
                    <button
                        class="font-label text-label text-error hover:text-on-error-container transition-colors uppercase">Remove</button>
                    <span class="text-outline-variant text-[10px]">|</span>
                    <button
                        class="font-label text-label text-on-surface-variant hover:text-on-surface transition-colors uppercase">Set
                        as Default</button>
                </div>
            </div>
        </div>
        <!-- Add New Card Action -->
        <div class="pt-lg flex justify-center md:justify-start">
            <button
                class="flex items-center gap-sm px-xl py-sm bg-primary text-on-primary rounded-full font-label text-label uppercase tracking-widest hover:bg-primary-container transition-colors active:scale-95">
                <span class="material-symbols-outlined text-[18px]">add</span>
                Add New Card
            </button>
        </div>
    </main>
    <div class="fixed inset-0 z-[100] flex items-center justify-center p-margin-mobile" id="delete-modal">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-inverse-surface/40 backdrop-blur-sm"></div>
        <!-- Dialog Box -->
        <div
            class="relative bg-surface-container-lowest rounded-[16px] shadow-xl w-full max-w-md p-lg flex flex-col gap-lg">
            <div class="space-y-sm">
                <h2 class="font-headline-md text-headline-md text-on-surface">Remove Card?</h2>
                <p class="font-body-md text-body-md text-on-surface-variant">
                    Are you sure you want to remove this Mastercard ending in 8812? You will need to re-enter your
                    details to use it again.
                </p>
            </div>
            <div class="flex flex-col sm:flex-row-reverse gap-sm">
                <button
                    class="flex-1 px-xl py-sm bg-error text-on-error rounded-full font-label text-label uppercase tracking-widest hover:bg-on-error-container transition-colors active:scale-95">
                    Remove
                </button>
                <button
                    class="flex-1 px-xl py-sm border border-outline-variant text-on-surface-variant rounded-full font-label text-label uppercase tracking-widest hover:bg-surface-container-low transition-colors active:scale-95">
                    Cancel
                </button>
            </div>
        </div>
    </div>
</body>

</html>