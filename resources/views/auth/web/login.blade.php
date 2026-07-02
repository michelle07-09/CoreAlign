<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CoreAlign - Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Cabinet+Grotesk:wght@700;800&amp;family=Inter+Tight:wght@400;500;600&amp;display=swap"
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
                        "surface-container-high": "#e7e9e6",
                        "on-primary-container": "#a1efc7",
                        "inverse-on-surface": "#eff1ee",
                        "on-secondary-fixed": "#181c1e",
                        "background": "#f8faf7",
                        "on-tertiary-fixed-variant": "#434841",
                        "inverse-surface": "#2e312f",
                        "surface-dim": "#d8dbd8",
                        "surface-container-lowest": "#ffffff",
                        "primary": "#005639",
                        "secondary-fixed-dim": "#c4c7c9",
                        "on-secondary": "#ffffff",
                        "surface-container": "#eceeeb",
                        "on-primary-fixed": "#002114",
                        "on-error-container": "#93000a",
                        "primary-fixed": "#a5f3ca",
                        "on-tertiary-fixed": "#181d17",
                        "inverse-primary": "#8ad6af",
                        "primary-fixed-dim": "#8ad6af",
                        "on-primary": "#ffffff",
                        "on-error": "#ffffff",
                        "error": "#ba1a1a",
                        "tertiary-fixed-dim": "#c3c8be",
                        "surface-variant": "#e1e3e0",
                        "on-secondary-fixed-variant": "#43474a",
                        "on-primary-fixed-variant": "#005236",
                        "tertiary": "#474c45",
                        "secondary-container": "#dde0e3",
                        "on-background": "#191c1b",
                        "on-surface-variant": "#3f4943",
                        "outline-variant": "#bfc9c1",
                        "surface-container-low": "#f2f4f1",
                        "secondary": "#5b5f61",
                        "outline": "#6f7a72",
                        "surface": "#f8faf7",
                        "secondary-fixed": "#e0e3e5",
                        "error-container": "#ffdad6",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed": "#dfe4da",
                        "tertiary-container": "#5f645c",
                        "surface-container-highest": "#e1e3e0",
                        "primary-container": "#1f6f4f",
                        "on-secondary-container": "#5f6365",
                        "surface-bright": "#f8faf7",
                        "surface-tint": "#1a6b4b",
                        "on-tertiary-container": "#dce1d6",
                        "on-surface": "#14181A" // Mapped to Ink #14181A request
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "md": "16px",
                        "xl": "32px",
                        "sm": "8px",
                        "container-margin": "24px",
                        "lg": "24px",
                        "2xl": "48px",
                        "gutter": "16px",
                        "xs": "4px",
                        "base": "4px"
                    },
                    "fontFamily": {
                        "body-lg": ["Inter Tight"],
                        "label-caps": ["Inter Tight"],
                        "display-lg-mobile": ["Cabinet Grotesk"],
                        "headline-md": ["Cabinet Grotesk"],
                        "body-sm": ["Inter Tight"],
                        "body-md": ["Inter Tight"],
                        "display-lg": ["Cabinet Grotesk"],
                        "data-mono": ["JetBrains Mono"],
                        "headline-sm": ["Cabinet Grotesk"]
                    },
                    "fontSize": {
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "display-lg-mobile": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "800" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "700" }],
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "800" }],
                        "data-mono": ["13px", { "lineHeight": "16px", "letterSpacing": "0.02em", "fontWeight": "500" }],
                        "headline-sm": ["20px", { "lineHeight": "28px", "fontWeight": "700" }]
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom utilities to enforce strict style guidance */
        .input-architectural {
            transition: all 0.2s ease-in-out;
        }

        .input-architectural:focus {
            border-color: #1f6f4f !important;
            /* Force primary-container color */
            border-width: 2px !important;
            padding-[calc(0.75rem-1px)] !important;
            /* Adjust padding to prevent layout shift */
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased selection:bg-primary-fixed selection:text-on-primary-fixed">
    <div class="flex min-h-screen w-full bg-surface-container-lowest">
        <!-- Left Split: Image Canvas -->
        <div class="hidden lg:flex w-1/2 relative bg-surface-container-high overflow-hidden">
            <div class="absolute inset-0 bg-cover bg-center"
                data-alt="High-end, minimalist Pilates studio interior with a CoreAlign machine, professional architectural photography with natural soft lighting and stone textures."
                style="background-image: url(&quot;https://lh3.googleusercontent.com/aida-public/AB6AXuAGfHMS7sFd_NJDotKaGWtfQgrR4m21dg2m-vTu6R0eNIV5dzFzXWQksZGMHY6C5OVGzoC6OPNzl-1qwh7BsL6SbuT-QB7UJHAq6tTrzs8fdyMu95HVniEH4HjVaQTWVOEcF4i8Wli5eWjs9cisu5BBXA5J5wqWQQhBwnOzTSZSJFkx9DOb6ODzc7kaORAP9YsZTmH1_KcG_98i89nnq2H4gbPtNG5b8Q6ZqMJY9c0FnvpAFW97PniRmtZ1C-mumE0ymCrDrK6bowKE&quot;);">
            </div>
            <!-- Atmospheric Tonal Shift -->
            <div class="absolute inset-0 bg-inverse-surface/10 mix-blend-multiply"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-inverse-surface/80 via-transparent to-transparent"></div>
            <!-- Branding Overlay -->
            <div class="absolute bottom-12 left-12 right-12 z-10">
                <h2 class="font-display-lg text-display-lg mb-4 text-surface-container-lowest drop-shadow-md">
                    Architectural Athleticism</h2>
                <p class="font-body-lg text-body-lg text-surface-container-lowest/90 max-w-md drop-shadow">Discipline,
                    precision, and professional rigor in every movement.</p>
            </div>
        </div>
        <!-- Right Split: Functional Surface -->
        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 sm:p-12 lg:p-24 relative overflow-y-auto">
            <div class="w-full max-w-[420px] flex flex-col">
                <!-- Brand Anchor -->
                <div class="flex items-center gap-3 mb-12">
                    <div
                        class="w-10 h-10 rounded-lg bg-surface-container flex items-center justify-center border border-outline-variant/50">
                        <span class="material-symbols-outlined text-primary-container"
                            style="font-size: 24px; font-variation-settings: 'FILL' 1;">dataset</span>
                    </div>
                    <span class="font-headline-md text-headline-md text-on-surface tracking-tight">CoreAlign</span>
                </div>
                <!-- Intent Header -->
                <h1
                    class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-surface mb-2">
                    Sign in</h1>
                <p class="font-body-md text-body-md text-on-surface-variant mb-8">Access your studio management
                    workspace.</p>
                <!-- Contextual Switch: Role Selection -->
                <div
                    class="flex p-1 bg-surface-container-low rounded-lg mb-8 border border-outline-variant/30 relative">
                    <!-- Active Indicator (moves via JS in real app) -->
                    <div
                        class="absolute left-1 top-1 bottom-1 w-[calc(50%-4px)] bg-surface-container-lowest rounded-md shadow-sm border border-outline-variant/30 pointer-events-none transition-all duration-300">
                    </div>
                    <button
                        class="flex-1 py-2 text-center rounded-md font-label-caps text-label-caps text-on-surface uppercase relative z-10"
                        type="button">
                        Staff
                    </button>
                    <button
                        class="flex-1 py-2 text-center rounded-md font-label-caps text-label-caps text-on-surface-variant hover:text-on-surface transition-colors uppercase relative z-10"
                        type="button">
                        Admin
                    </button>
                </div>
                <!-- Transactional Form -->
                <form action="{{ route('login') }}" class="flex flex-col gap-6" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="p-3 bg-error-container text-on-error-container rounded-lg font-body-sm text-body-sm mb-4">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <!-- Input: Email -->
                    <div class="flex flex-col gap-2">
                        <label class="font-label-caps text-label-caps text-secondary uppercase tracking-widest"
                            for="email">Email Address</label>
                        <input
                            class="input-architectural w-full px-4 py-3 rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:outline-none placeholder:text-outline/50"
                            id="email" name="email" placeholder="name@studio.com" required="" type="email">
                    </div>
                    <!-- Input: Password -->
                    <div class="flex flex-col gap-2">
                        <div class="flex justify-between items-center">
                            <label class="font-label-caps text-label-caps text-secondary uppercase tracking-widest"
                                for="password">Password</label>
                            <a class="font-body-sm text-body-sm text-primary-container hover:text-primary transition-colors"
                                href="#">Forgot Password?</a>
                        </div>
                        <div class="relative">
                            <input
                                class="input-architectural w-full px-4 py-3 rounded-[10px] border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md focus:outline-none placeholder:text-outline/50 pr-10"
                                id="password" name="password" placeholder="••••••••" required="" type="password">
                            <button
                                class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-on-surface-variant transition-colors flex items-center justify-center"
                                type="button">
                                <span class="material-symbols-outlined" style="font-size: 20px;">visibility_off</span>
                            </button>
                        </div>
                    </div>
                    <!-- Action: Submit -->
                    <button
                        class="w-full mt-4 py-3 rounded-full bg-primary-container hover:bg-primary transition-colors flex items-center justify-center gap-2 group"
                        type="submit">
                        <span class="font-body-md text-body-md font-medium text-surface-container-lowest">Log In</span>
                        <span
                            class="material-symbols-outlined text-surface-container-lowest text-[20px] group-hover:translate-x-1 transition-transform">arrow_forward</span>
                    </button>
                </form>
                <!-- Outbound Context -->
                <div class="mt-12 pt-8 border-t border-surface-variant text-center">
                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        Don't have an account? <a class="text-primary-container font-medium hover:underline ml-1"
                            href="{{ route('signup') }}">Sign up your studio</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


</body>

</html>