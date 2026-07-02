<!DOCTYPE html>
<html class="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>CoreAlign - Sign Up</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter+Tight:wght@400;500;600;700&amp;family=Cabinet+Grotesk:wght@700;800&amp;family=JetBrains+Mono:wght@500&amp;display=swap"
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
                        "on-surface": "#191c1b"
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
                        "body-lg": [
                            "Inter Tight"
                        ],
                        "label-caps": [
                            "Inter Tight"
                        ],
                        "display-lg-mobile": [
                            "Cabinet Grotesk"
                        ],
                        "headline-md": [
                            "Cabinet Grotesk"
                        ],
                        "body-sm": [
                            "Inter Tight"
                        ],
                        "body-md": [
                            "Inter Tight"
                        ],
                        "display-lg": [
                            "Cabinet Grotesk"
                        ],
                        "data-mono": [
                            "JetBrains Mono"
                        ],
                        "headline-sm": [
                            "Cabinet Grotesk"
                        ]
                    },
                    "fontSize": {
                        "body-lg": [
                            "18px",
                            {
                                "lineHeight": "28px",
                                "fontWeight": "400"
                            }
                        ],
                        "label-caps": [
                            "12px",
                            {
                                "lineHeight": "16px",
                                "letterSpacing": "0.05em",
                                "fontWeight": "600"
                            }
                        ],
                        "display-lg-mobile": [
                            "32px",
                            {
                                "lineHeight": "40px",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "800"
                            }
                        ],
                        "headline-md": [
                            "24px",
                            {
                                "lineHeight": "32px",
                                "fontWeight": "700"
                            }
                        ],
                        "body-sm": [
                            "14px",
                            {
                                "lineHeight": "20px",
                                "fontWeight": "400"
                            }
                        ],
                        "body-md": [
                            "16px",
                            {
                                "lineHeight": "24px",
                                "fontWeight": "400"
                            }
                        ],
                        "display-lg": [
                            "48px",
                            {
                                "lineHeight": "56px",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "800"
                            }
                        ],
                        "data-mono": [
                            "13px",
                            {
                                "lineHeight": "16px",
                                "letterSpacing": "0.02em",
                                "fontWeight": "500"
                            }
                        ],
                        "headline-sm": [
                            "20px",
                            {
                                "lineHeight": "28px",
                                "fontWeight": "700"
                            }
                        ]
                    }
                },
            },
        }
    </script>
    <style>
        .input-base {
            @apply w-full rounded-[10px] border border-outline bg-surface-container-lowest px-4 py-3 font-body-md text-body-md text-on-surface focus:border-primary-container focus:border-2 focus:outline-none focus:ring-0 transition-colors;
        }

        .label-base {
            @apply block mb-sm font-label-caps text-label-caps text-on-surface-variant uppercase tracking-wider;
        }
    </style>
</head>

<body
    class="bg-background text-on-background min-h-screen font-body-md antialiased selection:bg-primary-container selection:text-on-primary-container">
    <div class="flex min-h-screen">
        <div
            class="flex-1 flex flex-col justify-center px-lg sm:px-xl lg:px-[80px] xl:px-[120px] bg-background z-10 relative shadow-[24px_0_48px_rgba(20,24,26,0.05)] w-full lg:max-w-[600px] xl:max-w-[720px] shrink-0">
            <div class="w-full max-w-[440px] mx-auto">
                <div class="mb-2xl flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-container"
                        style="font-size: 32px; font-variation-settings: 'FILL' 1;">
                        activity_zone
                    </span>
                    <span class="font-headline-md text-headline-md text-on-surface tracking-tight">CoreAlign</span>
                </div>
                <div class="mb-lg">
                    <h1
                        class="font-display-lg-mobile text-display-lg-mobile lg:font-display-lg lg:text-display-lg text-on-surface mb-sm">
                        Create Account</h1>
                    <p class="font-body-md text-body-md text-on-surface-variant">Join CoreAlign to manage your studio,
                        schedule, and members with precision.</p>
                </div>
                <form action="{{ route('signup') }}" class="space-y-md" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="p-3 bg-error-container text-error rounded-lg font-body-sm text-body-sm mb-4">
                            {{ $errors->first() }}
                        </div>
                    @endif
                    <div>
                        <label class="label-base" for="fullName">Full Name</label>
                        <input autocomplete="name" class="input-base" id="fullName" name="fullName"
                            placeholder="Jane Doe" required="" type="text" value="{{ old('fullName') }}">
                    </div>
                    <div>
                        <label class="label-base" for="email">Work Email</label>
                        <input autocomplete="email" class="input-base" id="email" name="email"
                            placeholder="jane@studio.com" required="" type="email" value="{{ old('email') }}">
                    </div>
                    <div>
                        <label class="label-base" for="phone">Phone Number</label>
                        <input autocomplete="tel" class="input-base" id="phone" name="phone"
                            placeholder="(555) 123-4567" required="" type="tel" value="{{ old('phone') }}">
                    </div>
                    <div>
                        <label class="label-base" for="branch">Studio Branch</label>
                        <div class="relative">
                            <select class="input-base appearance-none bg-surface-container-lowest pr-10" id="branch"
                                name="branch">
                                <option disabled="" selected="" value="">Select a branch location</option>
                                <option value="downtown">Downtown Core</option>
                                <option value="westside">Westside Plaza</option>
                                <option value="north">North Hills</option>
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-on-surface-variant">
                                <span class="material-symbols-outlined">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="label-base" for="password">Password</label>
                        <div class="relative">
                            <input autocomplete="new-password" class="input-base pr-10" id="password" name="password"
                                placeholder="••••••••" required="" type="password">
                            <button
                                class="absolute inset-y-0 right-0 flex items-center px-4 text-on-surface-variant hover:text-on-surface transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility_off</span>
                            </button>
                        </div>
                        <p class="mt-2 font-body-sm text-body-sm text-on-surface-variant">Must be at least 8 characters
                            long.</p>
                    </div>
                    <div class="pt-sm">
                        <button
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-full shadow-sm font-body-md text-body-md font-medium text-surface-container-lowest bg-primary-container hover:bg-surface-tint focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-container transition-colors"
                            type="submit">
                            Create Account
                        </button>
                    </div>
                </form>
                <div class="mt-lg text-center">
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Already have an account?
                        <a class="font-medium text-primary-container hover:text-surface-tint transition-colors"
                            href="{{ route('login') }}">Log in instead</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative flex-1 bg-surface-container-low overflow-hidden">
            <img class="absolute inset-0 w-full h-full object-cover opacity-80 mix-blend-multiply"
                data-alt="A striking digital installation art piece featuring glowing, generative geometric shapes suspended in a vast, minimalist gallery space. The room is illuminated by high-key, soft white lighting that creates a bright, modern light-mode aesthetic. The artwork relies on a sophisticated palette of deep blacks and pristine whites, punctuated by intense accents of vibrant green pine. The mood is serene yet technologically advanced, architectural and athletic."
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBJWFPZlCf5enlVnkTeExlWQcdwxJTZNm3TCOF_AsuzFKVx7W2hKMyvVbL6Lso_M5lnbfEh2bmmRF0c3R2xm9xt-KI7kcd4Gm2gNmoluK7GKAjf52gal_xfQPXaIT0EDCpYyV0qNu_VQ-oMM-34LHOfvK7lFEAyriF25AqCU-nmWTvP74SBIvM8lhESSn_pjARmPQgkXuUzinui11ItvrQ1CmnwBfwnt-RALh--dmVd3EVj-BMVT0zD-R8eMkth3TkquUE_S8IPP3wF">
            <div
                class="absolute inset-0 bg-gradient-to-t from-surface-container-high/80 via-transparent to-transparent">
            </div>
            <div
                class="absolute bottom-2xl left-2xl max-w-md p-lg backdrop-blur-md bg-surface-container-lowest/70 border border-surface-container/50 rounded-xl">
                <p class="font-headline-sm text-headline-sm text-on-surface mb-sm">"The structural clarity of this
                    platform mirrors the precision of our practice."</p>
                <div class="flex items-center gap-sm mt-md">
                    <div class="w-10 h-10 rounded-full bg-surface-container-highest overflow-hidden">
                        <img class="w-full h-full object-cover"
                            data-alt="A professional headshot of a confident female Pilates instructor in a well-lit, modern studio environment. She is wearing athletic wear in neutral stone colors. The background features sleek pilates equipment and ample natural light, adhering to a premium, clean aesthetic."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBnjQHTYgg184T5CWZQOEAkC7FudEklM0oB0z3Dxcg3u2tGKtGxJlYnKcW5-0rm3j0w9Cql2_0sQ_njUeHvqyIY88PuHfnXJ4Xd56p_VdqL00bFujVGABKe1tDMV8UGDE85WjH4R_eyUwyP4PXtKUQyQ-UWfoNrAR8lct3F-jislS0_lZ9-NwhtZ5s2-BYyOPj-mhvKiv4XQDIbeCIql_P6Mso1dLsiFVKXAOlfxGk3h4krto125jsRqBjoMnfZbWnGAK3-6oQl8iKO">
                    </div>
                    <div>
                        <p class="font-label-caps text-label-caps text-on-surface">Sarah Jenkins</p>
                        <p class="font-body-sm text-body-sm text-on-surface-variant">Director, Align Studios</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>

</html>