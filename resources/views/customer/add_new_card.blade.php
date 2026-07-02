<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pivot Pilates - Add New Card</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link href="https://api.fontshare.com/v2/css?f[]=cabinet-grotesk@400,500,700,800,900&amp;display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&amp;display=swap"
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
                        "secondary-container": "#dfe4da",
                        "on-primary": "#ffffff",
                        "on-tertiary-fixed": "#3c070b",
                        "primary-fixed-dim": "#8ad6af",
                        "on-tertiary": "#ffffff",
                        "primary": "#005639",
                        "secondary-fixed-dim": "#c3c8be",
                        "secondary-fixed": "#dfe4da",
                        "surface-bright": "#f7fafc",
                        "on-secondary-container": "#61665e",
                        "outline-variant": "#bfc9c1",
                        "inverse-surface": "#2d3133",
                        "tertiary-container": "#964c4c",
                        "on-surface": "#181c1e",
                        "primary-fixed": "#a5f3ca",
                        "surface-container-lowest": "#ffffff",
                        "tertiary": "#793536",
                        "outline": "#6f7a72",
                        "on-surface-variant": "#3f4943",
                        "on-error": "#ffffff",
                        "surface-tint": "#1a6b4b",
                        "on-secondary-fixed": "#181d17",
                        "on-secondary": "#ffffff",
                        "on-secondary-fixed-variant": "#434841",
                        "on-tertiary-container": "#ffd4d3",
                        "on-background": "#181c1e",
                        "background": "#f7fafc",
                        "tertiary-fixed": "#ffdad8",
                        "on-primary-fixed": "#002114",
                        "inverse-on-surface": "#eef1f4",
                        "tertiary-fixed-dim": "#ffb3b1",
                        "surface-container-highest": "#e0e3e5",
                        "surface": "#f7fafc",
                        "surface-dim": "#d7dadd",
                        "on-tertiary-fixed-variant": "#743233",
                        "surface-container-high": "#e6e8eb",
                        "on-primary-container": "#a1efc7",
                        "on-error-container": "#93000a",
                        "surface-container": "#ebeef1",
                        "on-primary-fixed-variant": "#005236",
                        "error-container": "#ffdad6",
                        "surface-variant": "#e0e3e5",
                        "inverse-primary": "#8ad6af",
                        "primary-container": "#1f6f4f",
                        "error": "#ba1a1a",
                        "secondary": "#5b6058",
                        "surface-container-low": "#f1f4f6"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "md": "16px",
                        "lg": "24px",
                        "max-width": "1280px",
                        "gutter": "16px",
                        "xxl": "48px",
                        "base": "4px",
                        "sm": "12px",
                        "xs": "8px",
                        "margin-desktop": "32px",
                        "xl": "32px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Cabinet Grotesk", "sans-serif"],
                        "body-md": ["Inter Tight", "sans-serif"],
                        "headline-md": ["Cabinet Grotesk", "sans-serif"],
                        "body-lg": ["Inter Tight", "sans-serif"],
                        "headline-sm": ["Cabinet Grotesk", "sans-serif"],
                        "display": ["Cabinet Grotesk", "sans-serif"],
                        "headline-lg-mobile": ["Cabinet Grotesk", "sans-serif"],
                        "label": ["Inter Tight", "sans-serif"],
                        "body-sm": ["Inter Tight", "sans-serif"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "letterSpacing": "0em", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "letterSpacing": "-0.01em", "fontWeight": "400" }],
                        "headline-sm": ["20px", { "lineHeight": "1.4", "letterSpacing": "0em", "fontWeight": "600" }],
                        "display": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "label": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "1.4", "letterSpacing": "0em", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #F4F6F3;
            /* Forced override per prompt, usually from tailwind theme */
        }

        /* Hide scrollbar for clean UI */
        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        .input-glow:focus {
            box-shadow: 0 0 0 2px rgba(165, 243, 202, 0.5);
            /* primary-fixed */
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="text-on-surface antialiased min-h-screen flex flex-col items-center">
    <!-- Mobile Container (Max Width for standard mobile view) -->
    <main
        class="w-full max-w-[480px] min-h-screen flex flex-col relative bg-surface-container-lowest mx-auto shadow-sm">
        <!-- TopAppBar (Transactional - Nav hidden) -->
        <header
            class="w-full top-0 sticky z-40 bg-surface-container-lowest border-b border-outline-variant flex justify-between items-center px-margin-mobile py-sm">
            <button
                class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-low active:scale-95 transition-transform">
                <span class="material-symbols-outlined text-primary font-bold">arrow_back</span>
            </button>
            <h1 class="font-headline-sm text-headline-sm text-primary font-bold flex-1 text-center">Add New Card</h1>
            <div class="w-10 h-10"></div> <!-- Spacer for center alignment -->
        </header>
        <!-- Content Canvas -->
        <section class="flex-1 px-margin-mobile py-lg overflow-y-auto">
            <!-- Bento-style Form Card -->
            <div
                class="bg-surface-container-lowest border border-outline-variant rounded-[16px] p-lg shadow-sm mb-xxl relative overflow-hidden">
                <!-- Subtle graphic element inside card -->
                <div class="absolute -top-10 -right-10 w-32 h-32 bg-primary-fixed-dim opacity-10 rounded-full blur-2xl">
                </div>
                <form class="flex flex-col gap-lg relative z-10">
                    <!-- Cardholder Name -->
                    <div class="flex flex-col gap-base">
                        <label class="font-body-sm text-body-sm text-on-surface-variant font-medium"
                            for="cardName">Cardholder Name</label>
                        <input autocomplete="cc-name"
                            class="w-full px-md py-sm rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:border-primary focus:ring-0 input-glow transition-all outline-none placeholder-outline"
                            id="cardName" placeholder="e.g. Jane Doe" type="text" />
                    </div>
                    <!-- Card Number -->
                    <div class="flex flex-col gap-base">
                        <label class="font-body-sm text-body-sm text-on-surface-variant font-medium"
                            for="cardNumber">Card Number</label>
                        <div class="relative flex items-center">
                            <span class="material-symbols-outlined absolute left-md text-outline">credit_card</span>
                            <input autocomplete="cc-number"
                                class="w-full pl-[48px] pr-md py-sm rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:border-primary focus:ring-0 input-glow transition-all outline-none placeholder-outline"
                                id="cardNumber" inputmode="numeric" placeholder="0000 0000 0000 0000" type="text" />
                        </div>
                    </div>
                    <!-- Exp Date & CVV (2 Columns) -->
                    <div class="grid grid-cols-2 gap-md">
                        <div class="flex flex-col gap-base">
                            <label class="font-body-sm text-body-sm text-on-surface-variant font-medium"
                                for="expDate">Expiry Date</label>
                            <input autocomplete="cc-exp"
                                class="w-full px-md py-sm rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:border-primary focus:ring-0 input-glow transition-all outline-none placeholder-outline"
                                id="expDate" placeholder="MM/YY" type="text" />
                        </div>
                        <div class="flex flex-col gap-base">
                            <label class="font-body-sm text-body-sm text-on-surface-variant font-medium"
                                for="cvv">CVV</label>
                            <input autocomplete="cc-csc"
                                class="w-full px-md py-sm rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:border-primary focus:ring-0 input-glow transition-all outline-none placeholder-outline"
                                id="cvv" inputmode="numeric" maxlength="4" placeholder="123" type="text" />
                        </div>
                    </div>
                    <!-- Default Payment Checkbox -->
                    <div class="pt-sm border-t border-surface-container-high mt-sm flex items-center gap-sm">
                        <div class="relative flex items-start">
                            <div class="flex items-center h-5">
                                <input checked=""
                                    class="w-5 h-5 rounded border-outline-variant text-primary focus:ring-primary focus:ring-2 focus:ring-offset-2 bg-surface-container-lowest cursor-pointer"
                                    id="defaultPayment" type="checkbox" />
                            </div>
                            <div class="ml-3 text-sm">
                                <label class="font-body-sm text-body-sm text-on-surface cursor-pointer select-none"
                                    for="defaultPayment">Set as default payment method</label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Security Note -->
            <div class="flex items-center justify-center gap-xs text-on-surface-variant mb-xxl opacity-70">
                <span class="material-symbols-outlined text-[16px]">lock</span>
                <span class="font-label text-label">Payments are secure and encrypted.</span>
            </div>
        </section>
        <!-- Fixed Bottom Action Area -->
        <div
            class="fixed bottom-0 w-full max-w-[480px] bg-surface-container-lowest/80 backdrop-blur-md border-t border-outline-variant p-margin-mobile z-50">
            <button
                class="w-full bg-primary-container text-on-primary font-headline-sm text-headline-sm py-sm rounded-full active:scale-[0.98] transition-transform flex items-center justify-center gap-sm shadow-sm hover:opacity-95">
                Save Card
            </button>
        </div>
    </main>
    <!-- Auto-formatting script for card inputs (visual only) -->
    <script>
        document.getElementById('cardNumber').addEventListener('input', function (e) {
            var target = e.target;
            var position = target.selectionEnd;
            var length = target.value.length;
            target.value = target.value.replace(/[^\d]/g, '').replace(/(.{4})/g, '$1 ').trim();
            target.selectionEnd = position += ((target.value.charAt(position - 1) === ' ' && target.value.charAt(length - 1) === ' ' && length !== target.value.length) ? 1 : 0);
        });

        document.getElementById('expDate').addEventListener('input', function (e) {
            var target = e.target;
            target.value = target.value.replace(/[^\d]/g, '').replace(/^(\d{2})/, '$1/').substring(0, 5);
        });
    </script>
</body>

</html>