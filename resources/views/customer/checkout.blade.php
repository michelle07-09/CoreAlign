<!DOCTYPE html>
<html class="light" lang="en" style="">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Checkout - PIVOT PILATES</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600&amp;family=Cabinet+Grotesk:wght@600;700&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet">
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
            font-family: 'Inter Tight', sans-serif;
        }

        .font-cabinet {
            font-family: 'Cabinet Grotesk', sans-serif;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col pt-16 pb-24 md:pb-0">
    <!-- TopAppBar -->
    <header
        class="fixed top-0 w-full z-50 border-b border-outline-variant bg-surface flex justify-between items-center h-16 px-margin-mobile">
        <div class="flex items-center gap-4">
            <button
                class="text-on-surface-variant hover:opacity-80 transition-opacity flex items-center justify-center p-2 rounded-full hover:bg-surface-container-high">
                <span class="material-symbols-outlined" data-icon="arrow_back">arrow_back</span>
            </button>
            <h1 class="font-headline-sm text-headline-sm-mobile tracking-tighter text-primary">Checkout</h1>
        </div>
    </header>
    <main
        class="flex-grow flex flex-col md:flex-row max-w-[1280px] mx-auto w-full px-margin-mobile md:px-margin-desktop py-lg md:py-xl gap-xxl md:gap-xl mt-4">
        <!-- Left Column: Summary & Promo -->
        <div class="flex-1 flex flex-col gap-lg">
            <!-- Summary Section -->
            <section
                class="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-md transition-colors hover:border-outline">
                <h2 class="font-headline-sm text-headline-sm text-on-surface">Order Summary</h2>
                <div class="flex justify-between items-center py-sm border-b border-outline-variant">
                    <div class="flex flex-col">
                        <span class="font-body-md text-body-md text-on-surface font-semibold">10-Class Pack</span>
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Valid for 3 months</span>
                    </div>
                    <span class="font-body-md text-body-md text-on-surface font-semibold">$300.00</span>
                </div>
            </section>
            <!-- Promo Code -->
            <section
                class="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-sm transition-colors hover:border-outline">
                <label class="font-body-sm text-body-sm text-on-surface font-semibold" for="promo">Promo Code</label>
                <div class="flex gap-sm">
                    <input
                        class="flex-1 rounded-[10px] border border-outline-variant bg-surface-container-lowest px-md py-sm font-body-sm text-body-sm text-on-surface focus:outline-none focus:border-primary focus:ring-2 focus:ring-primary-fixed focus:ring-opacity-50 transition-shadow"
                        id="promo" placeholder="Enter code" type="text">
                    <button
                        class="rounded-full border border-outline-variant bg-surface-container-lowest text-on-surface px-lg py-sm font-body-sm text-body-sm hover:bg-surface-container-high transition-colors">Apply</button>
                </div>
            </section>
        </div>
        <!-- Right Column: Payment & Total -->
        <div class="flex-1 flex flex-col gap-lg">
            <!-- Payment Method Selection -->
            <section
                class="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-md transition-colors hover:border-outline">
                <h2 class="font-headline-sm text-headline-sm text-on-surface">Saved Cards</h2>
                <div class="flex flex-col gap-sm">
                    <!-- Saved Card 1 -->
                    <label
                        class="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input class="sr-only" name="payment" type="radio">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span class="material-symbols-outlined">credit_card</span>
                        </div>
                        <div class="flex-1 font-body-md text-body-md font-medium">Mastercard •••• 8812</div>
                        <div
                            class="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                class="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                    <!-- Saved Card 2 -->
                    <label
                        class="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input class="sr-only" name="payment" type="radio">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span class="material-symbols-outlined">credit_card</span>
                        </div>
                        <div class="flex-1 font-body-md text-body-md font-medium">Visa •••• 4421</div>
                        <div
                            class="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                class="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                    <button
                        class="flex items-center justify-center gap-sm p-md mt-xs rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors text-primary font-body-md font-medium w-full">
                        <span class="material-symbols-outlined">add</span>
                        <span class="">Add New Card</span>
                    </button>
                </div>
            </section>
            <section
                class="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-md transition-colors hover:border-outline">
                <h2 class="font-headline-sm text-headline-sm text-on-surface">Payment Method</h2>
                <div class="flex flex-col gap-sm">
                    <!-- Option 1 -->
                    <label
                        class="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input checked="" class="sr-only" name="payment" type="radio">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span class="material-symbols-outlined" data-icon="credit_card">credit_card</span>
                        </div>
                        <div class="flex-1 font-body-md text-body-md font-medium">Credit Card</div>
                        <div
                            class="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                class="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                    <!-- Option 2 -->
                    <label
                        class="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input class="sr-only" name="payment" type="radio">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span class="material-symbols-outlined"
                                data-icon="account_balance_wallet">account_balance_wallet</span>
                        </div>
                        <div class="flex flex-col flex-1">
                            <span class="font-body-md text-body-md font-medium">E-Wallet</span>
                            <span
                                class="font-body-sm text-body-sm text-on-surface-variant group-has-[:checked]:text-on-primary-container/80">GoPay,
                                OVO</span>
                        </div>
                        <div
                            class="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                class="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                    <!-- Option 3 -->
                    <label
                        class="flex items-center gap-md p-md rounded-lg border border-outline-variant bg-surface-container-lowest cursor-pointer hover:bg-surface-container-low transition-colors has-[:checked]:bg-primary-container has-[:checked]:border-primary has-[:checked]:text-on-primary-container group">
                        <input class="sr-only" name="payment" type="radio">
                        <div
                            class="w-10 h-10 rounded-full bg-surface-container-highest flex items-center justify-center group-has-[:checked]:bg-primary group-has-[:checked]:text-on-primary text-on-surface-variant">
                            <span class="material-symbols-outlined" data-icon="account_balance">account_balance</span>
                        </div>
                        <div class="flex flex-col flex-1">
                            <span class="font-body-md text-body-md font-medium">Virtual Account</span>
                            <span
                                class="font-body-sm text-body-sm text-on-surface-variant group-has-[:checked]:text-on-primary-container/80">BCA,
                                Mandiri</span>
                        </div>
                        <div
                            class="w-5 h-5 rounded-full border-2 border-outline-variant flex items-center justify-center group-has-[:checked]:border-primary">
                            <div
                                class="w-2.5 h-2.5 rounded-full bg-primary opacity-0 group-has-[:checked]:opacity-100 transition-opacity">
                            </div>
                        </div>
                    </label>
                </div>
            </section>
            <!-- Total Breakdown -->
            <section
                class="bg-surface-container-lowest rounded-xl border border-outline-variant p-lg md:p-xl flex flex-col gap-sm transition-colors hover:border-outline mb-24 md:mb-0">
                <div class="flex justify-between font-body-sm text-body-sm text-on-surface-variant">
                    <span class="">Subtotal</span>
                    <span class="">$300.00</span>
                </div>
                <div class="flex justify-between font-body-sm text-body-sm text-on-surface-variant">
                    <span class="">Tax &amp; Service Fee (5%)</span>
                    <span class="">$15.00</span>
                </div>
                <div class="flex justify-between font-body-sm text-body-sm text-primary font-medium mt-xs">
                    <span class="">Discount</span>
                    <span class="">-$0.00</span>
                </div>
                <div
                    class="flex justify-between items-center font-headline-sm text-headline-sm text-on-surface border-t border-outline-variant pt-md mt-sm">
                    <span class="">Total</span>
                    <span class="">$315.00</span>
                </div>
            </section>
        </div>
    </main>
    <!-- Fixed Bottom CTA -->
    <div
        class="fixed bottom-0 left-0 w-full p-margin-mobile bg-surface/90 backdrop-blur-md border-t border-outline-variant md:relative md:bg-transparent md:border-none md:p-0 md:max-w-[1280px] md:mx-auto md:px-margin-desktop md:pb-xl z-50">
        <button
            class="w-full md:w-auto md:float-right bg-primary text-on-primary rounded-full py-lg px-xl font-headline-sm text-headline-sm-mobile hover:bg-primary-fixed-variant hover:text-on-primary-fixed-variant transition-colors flex items-center justify-center gap-sm shadow-sm">
            <span class="">Pay Now</span>
            <span class="">•</span>
            <span class="">$315.00</span>
        </button>
    </div>


</body>

</html>