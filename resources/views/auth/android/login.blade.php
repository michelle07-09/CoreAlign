<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Pivot Pilates - Login</title>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cabinet+Grotesk:wght@500;600;700;800&amp;family=Inter+Tight:wght@400;500;600&amp;display=swap"
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
    <!-- Tailwind Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-surface-variant": "#3f4943",
                        "surface-container-low": "#f1f4f6",
                        "on-background": "#181c1e",
                        "surface-container": "#ebeef1",
                        "on-secondary": "#ffffff",
                        "inverse-on-surface": "#eef1f4",
                        "surface": "#f7fafc",
                        "secondary-fixed-dim": "#c3c8be",
                        "on-secondary-fixed-variant": "#434841",
                        "on-primary-fixed": "#002114",
                        "secondary": "#5b6058",
                        "surface-tint": "#1a6b4b",
                        "tertiary-fixed": "#ffdad8",
                        "tertiary-container": "#964c4c",
                        "surface-variant": "#e0e3e5",
                        "on-secondary-fixed": "#181d17",
                        "surface-container-lowest": "#ffffff",
                        "on-error-container": "#93000a",
                        "inverse-primary": "#8ad6af",
                        "secondary-fixed": "#dfe4da",
                        "surface-dim": "#d7dadd",
                        "on-error": "#ffffff",
                        "primary-fixed-dim": "#8ad6af",
                        "surface-container-highest": "#e0e3e5",
                        "on-primary-container": "#a1efc7",
                        "tertiary": "#793536",
                        "on-tertiary": "#ffffff",
                        "inverse-surface": "#2d3133",
                        "on-secondary-container": "#61665e",
                        "secondary-container": "#dfe4da",
                        "on-tertiary-container": "#ffd4d3",
                        "on-surface": "#181c1e",
                        "primary": "#005639",
                        "primary-fixed": "#a5f3ca",
                        "on-tertiary-fixed-variant": "#743233",
                        "surface-container-high": "#e6e8eb",
                        "primary-container": "#1f6f4f",
                        "outline": "#6f7a72",
                        "on-tertiary-fixed": "#3c070b",
                        "error-container": "#ffdad6",
                        "outline-variant": "#bfc9c1",
                        "on-primary-fixed-variant": "#005236",
                        "error": "#ba1a1a",
                        "background": "#f7fafc",
                        "surface-bright": "#f7fafc",
                        "on-primary": "#ffffff",
                        "tertiary-fixed-dim": "#ffb3b1"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "xl": "32px",
                        "base": "4px",
                        "md": "16px",
                        "gutter": "16px",
                        "xxl": "48px",
                        "max-width": "1280px",
                        "xs": "8px",
                        "sm": "12px",
                        "margin-desktop": "32px",
                        "lg": "24px"
                    },
                    "fontFamily": {
                        "headline-sm": ["Cabinet Grotesk"],
                        "body-md": ["Inter Tight"],
                        "headline-lg": ["Cabinet Grotesk"],
                        "label": ["Inter Tight"],
                        "display": ["Cabinet Grotesk"],
                        "headline-lg-mobile": ["Cabinet Grotesk"],
                        "body-lg": ["Inter Tight"],
                        "headline-md": ["Cabinet Grotesk"],
                        "body-sm": ["Inter Tight"]
                    },
                    "fontSize": {
                        "headline-sm": ["20px", { "lineHeight": "1.4", "letterSpacing": "0em", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "letterSpacing": "0em", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "label": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "display": ["48px", { "lineHeight": "1.1", "letterSpacing": "-0.04em", "fontWeight": "700" }],
                        "headline-lg-mobile": ["24px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "letterSpacing": "-0.01em", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "1.4", "letterSpacing": "0em", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 0 2px var(--tw-ring-color);
        }
    </style>
    <style>
        body {
            min-height: max(884px, 100dvh);
        }
    </style>
</head>

<body class="bg-surface text-on-surface antialiased min-h-screen flex flex-col md:flex-row font-body-md">
    <!-- Left Visual Panel (Desktop Only) -->
    <div class="hidden md:block md:w-1/2 lg:w-3/5 relative bg-surface-container">
        <div class="absolute inset-0 bg-cover bg-center"
            data-alt="A pristine, light-drenched modern pilates studio interior viewed from a low architectural angle. Row of high-end wooden reformer machines aligned perfectly on a pale concrete floor. Crisp morning sunlight streams through tall windows casting sharp, geometric shadows. Aesthetic is high-fidelity, energetic athletic-wellness, utilizing cool-toned whites, pine greens, and stone grays. Uncluttered, spacious, and professionally pristine."
            style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAUkzC1bLXebTnCmFspMcWWI663toglvGOogW-Qlfcvq8bKg7KUJcsCRJSHDA-lW87GOX-fYNk0O6brhisZau-D4BIDQYYLkVaOaDHmsAfB0LULPmhSZCRHibi7al1p8ICn-OVsbRYalyWM2d1E2I9eSLc7ykPaIINC96VxaJ5QYfWRrrd0HlqDBn7fge-Xc9eqhuMtcsvHuXoPdWAAmu02my3YJ92tZkBCSrqNU95LVE07X6D0H9qKgQ4d4gsw0xPZL0L4ruvP49hC')">
        </div>
        <div class="absolute inset-0 bg-on-background/10 mix-blend-multiply"></div>
        <div class="absolute top-margin-desktop left-margin-desktop z-10">
            <span class="font-display text-headline-lg text-surface-container-lowest drop-shadow-md">Pivot
                Pilates</span>
        </div>
    </div>
    <!-- Right Form Panel -->
    <div
        class="w-full md:w-1/2 lg:w-2/5 min-h-screen flex items-center justify-center p-margin-mobile md:p-margin-desktop bg-surface">
        <div class="w-full max-w-[400px] flex flex-col gap-xl">
            <!-- Mobile Brand (Hidden on Desktop) -->
            <div class="md:hidden flex justify-center mb-md">
                <span class="font-display text-headline-md text-primary">Pivot Pilates</span>
            </div>
            <!-- Header -->
            <div class="flex flex-col gap-base text-center md:text-left">
                <h1
                    class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface">
                    Welcome Back</h1>
                <p class="font-body-md text-body-md text-secondary">Sign in to continue your practice.</p>
            </div>
            <!-- Form -->
            <form action="{{ route('login') }}" class="flex flex-col gap-lg" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="p-3 bg-error-container text-on-error-container rounded-lg font-body-sm text-body-sm mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif
                <div class="flex flex-col gap-sm">
                    <!-- Email Field -->
                    <div class="flex flex-col gap-base">
                        <label class="font-body-sm text-body-sm text-on-surface font-semibold ml-xs" for="email">Email
                            Address</label>
                        <input
                            class="w-full h-[48px] px-md rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface placeholder:text-outline focus:border-primary focus:ring-primary-container/20 transition-all font-body-md text-body-md"
                            id="email" name="email" placeholder="Enter your email" type="email" />
                    </div>
                    <!-- Password Field -->
                    <div class="flex flex-col gap-base">
                        <label class="font-body-sm text-body-sm text-on-surface font-semibold ml-xs"
                            for="password">Password</label>
                        <div class="relative flex items-center">
                            <input
                                class="w-full h-[48px] pl-md pr-12 rounded-lg border border-outline-variant bg-surface-container-lowest text-on-surface placeholder:text-outline focus:border-primary focus:ring-primary-container/20 transition-all font-body-md text-body-md"
                                id="password" name="password" placeholder="Enter your password" type="password" />
                            <button aria-label="Toggle password visibility"
                                class="absolute right-sm p-xs text-secondary hover:text-on-surface transition-colors focus:outline-none flex items-center justify-center rounded-full"
                                id="togglePassword" type="button">
                                <span class="material-symbols-outlined" id="toggleIcon">visibility_off</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Forgot Password -->
                <div class="flex justify-end">
                    <a class="font-body-sm text-body-sm text-primary hover:text-primary-container transition-colors font-medium"
                        href="#">Forgot Password?</a>
                </div>
                <!-- Primary Action -->
                <button
                    class="w-full h-[48px] rounded-full bg-primary text-on-primary font-body-md text-body-md font-semibold hover:bg-primary-container transition-all active:scale-[0.98] flex items-center justify-center"
                    type="submit">
                    Sign In
                </button>
            </form>
            <!-- Divider -->
            <div class="flex items-center gap-md py-xs">
                <div class="h-px bg-surface-variant flex-1"></div>
                <span class="font-label text-label text-outline uppercase tracking-wider">Or</span>
                <div class="h-px bg-surface-variant flex-1"></div>
            </div>
            <!-- Social Logins -->
            <div class="flex flex-col gap-sm">
                <button
                    class="w-full h-[48px] rounded-full border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md font-medium hover:bg-surface-container-low transition-colors flex items-center justify-center gap-sm active:bg-surface-container"
                    type="button">
                    Continue with Google
                </button>
                <button
                    class="w-full h-[48px] rounded-full border border-outline-variant bg-surface-container-lowest text-on-surface font-body-md text-body-md font-medium hover:bg-surface-container-low transition-colors flex items-center justify-center gap-sm active:bg-surface-container"
                    type="button">
                    Continue with Apple
                </button>
            </div>
            <!-- Sign Up Link -->
            <div class="mt-auto md:mt-xl pt-lg text-center">
                <p class="font-body-sm text-body-sm text-secondary">
                    Don't have an account?
                    <a class="text-primary hover:text-primary-container font-semibold ml-xs transition-colors"
                        href="{{ route('signup') }}">Sign Up</a>
                </p>
            </div>
        </div>
    </div>
    <!-- Lightweight interaction script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleBtn = document.getElementById('togglePassword');
            const passwordInput = document.getElementById('password');
            const toggleIcon = document.getElementById('toggleIcon');

            toggleBtn.addEventListener('click', () => {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                toggleIcon.textContent = type === 'password' ? 'visibility_off' : 'visibility';
            });
        });
    </script>
</body>

</html>