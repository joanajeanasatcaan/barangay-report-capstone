<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Barangay Report System</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
                @layer theme {
                    :root, :host {
                        --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                        --color-primary-50: #f0f9ff;
                        --color-primary-100: #e0f2fe;
                        --color-primary-200: #bae6fd;
                        --color-primary-300: #7dd3fc;
                        --color-primary-400: #38bdf8;
                        --color-primary-500: #0ea5e9;
                        --color-primary-600: #0284c7;
                        --color-primary-700: #0369a1;
                        --color-primary-800: #075985;
                        --color-primary-900: #0c4a6e;
                        --color-secondary-50: #f8fafc;
                        --color-secondary-100: #f1f5f9;
                        --color-secondary-200: #e2e8f0;
                        --color-secondary-300: #cbd5e1;
                        --color-secondary-400: #94a3b8;
                        --color-secondary-500: #64748b;
                        --color-secondary-600: #475569;
                        --color-secondary-700: #334155;
                        --color-secondary-800: #1e293b;
                        --color-secondary-900: #0f172a;
                        --color-success-50: #f0fdf4;
                        --color-success-100: #dcfce7;
                        --color-success-200: #bbf7d0;
                        --color-success-300: #86efac;
                        --color-success-400: #4ade80;
                        --color-success-500: #22c55e;
                        --color-success-600: #16a34a;
                        --color-success-700: #15803d;
                        --color-success-800: #166534;
                        --color-success-900: #14532d;
                        --color-warning-50: #fffbeb;
                        --color-warning-100: #fef3c7;
                        --color-warning-200: #fde68a;
                        --color-warning-300: #fcd34d;
                        --color-warning-400: #fbbf24;
                        --color-warning-500: #f59e0b;
                        --color-warning-600: #d97706;
                        --color-warning-700: #b45309;
                        --color-warning-800: #92400e;
                        --color-warning-900: #78350f;
                        --color-danger-50: #fef2f2;
                        --color-danger-100: #fee2e2;
                        --color-danger-200: #fecaca;
                        --color-danger-300: #fca5a5;
                        --color-danger-400: #f87171;
                        --color-danger-500: #ef4444;
                        --color-danger-600: #dc2626;
                        --color-danger-700: #b91c1c;
                        --color-danger-800: #991b1b;
                        --color-danger-900: #7f1d1d;
                        --color-dark: #1a1a1a;
                        --color-light: #f8f9fa;
                        --spacing: .25rem;
                        --radius-sm: .25rem;
                        --radius-md: .5rem;
                        --radius-lg: 1rem;
                        --shadow-sm: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
                        --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
                        --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
                        --text-sm: .875rem;
                        --text-base: 1rem;
                        --text-lg: 1.125rem;
                        --text-xl: 1.25rem;
                        --text-2xl: 1.5rem;
                        --font-weight-normal: 400;
                        --font-weight-medium: 500;
                        --font-weight-semibold: 600;
                    }
                }

                @layer base {
                    *, ::before, ::after {
                        box-sizing: border-box;
                        border-width: 0;
                        border-style: solid;
                        border-color: currentColor;
                    }

                    html {
                        line-height: 1.5;
                        -webkit-text-size-adjust: 100%;
                        -moz-tab-size: 4;
                        tab-size: 4;
                        font-family: var(--font-sans);
                    }

                    body {
                        margin: 0;
                        line-height: inherit;
                    }

                    h1, h2, h3, h4, h5, h6 {
                        font-size: inherit;
                        font-weight: inherit;
                    }

                    a {
                        color: inherit;
                        text-decoration: inherit;
                    }

                    button, input, optgroup, select, textarea {
                        font-family: inherit;
                        font-size: 100%;
                        font-weight: inherit;
                        line-height: inherit;
                        color: inherit;
                        margin: 0;
                        padding: 0;
                    }

                    button, select {
                        text-transform: none;
                    }
                }

                @layer utilities {
                    .bg-primary { background-color: var(--color-primary-600); }
                    .bg-primary-light { background-color: var(--color-primary-100); }
                    .bg-secondary { background-color: var(--color-secondary-600); }
                    .bg-success { background-color: var(--color-success-600); }
                    .bg-warning { background-color: var(--color-warning-600); }
                    .bg-danger { background-color: var(--color-danger-600); }
                    .bg-dark { background-color: var(--color-dark); }
                    .bg-light { background-color: var(--color-light); }

                    .text-primary { color: var(--color-primary-600); }
                    .text-secondary { color: var(--color-secondary-600); }
                    .text-success { color: var(--color-success-600); }
                    .text-warning { color: var(--color-warning-600); }
                    .text-danger { color: var(--color-danger-600); }
                    .text-dark { color: var(--color-dark); }
                    .text-light { color: var(--color-light); }

                    .border-primary { border-color: var(--color-primary-600); }
                    .border-secondary { border-color: var(--color-secondary-600); }
                    .border-success { border-color: var(--color-success-600); }
                    .border-warning { border-color: var(--color-warning-600); }
                    .border-danger { border-color: var(--color-danger-600); }
                    .border-dark { border-color: var(--color-dark); }
                    .border-light { border-color: var(--color-light); }

                    .rounded-sm { border-radius: var(--radius-sm); }
                    .rounded-md { border-radius: var(--radius-md); }
                    .rounded-lg { border-radius: var(--radius-lg); }
                    .rounded-full { border-radius: 9999px; }

                    .shadow-sm { box-shadow: var(--shadow-sm); }
                    .shadow-md { box-shadow: var(--shadow-md); }
                    .shadow-lg { box-shadow: var(--shadow-lg); }

                    .text-sm { font-size: var(--text-sm); }
                    .text-base { font-size: var(--text-base); }
                    .text-lg { font-size: var(--text-lg); }
                    .text-xl { font-size: var(--text-xl); }
                    .text-2xl { font-size: var(--text-2xl); }

                    .font-normal { font-weight: var(--font-weight-normal); }
                    .font-medium { font-weight: var(--font-weight-medium); }
                    .font-semibold { font-weight: var(--font-weight-semibold); }

                    .flex { display: flex; }
                    .hidden { display: none; }
                    .block { display: block; }
                    .inline-block { display: inline-block; }

                    .flex-col { flex-direction: column; }
                    .flex-row { flex-direction: row; }

                    .items-center { align-items: center; }
                    .justify-center { justify-content: center; }
                    .justify-between { justify-content: space-between; }

                    .gap-2 { gap: 0.5rem; }
                    .gap-4 { gap: 1rem; }
                    .gap-6 { gap: 1.5rem; }

                    .p-4 { padding: 1rem; }
                    .p-6 { padding: 1.5rem; }
                    .px-4 { padding-left: 1rem; padding-right: 1rem; }
                    .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
                    .py-4 { padding-top: 1rem; padding-bottom: 1rem; }

                    .m-0 { margin: 0; }
                    .mb-2 { margin-bottom: 0.5rem; }
                    .mb-4 { margin-bottom: 1rem; }
                    .mb-6 { margin-bottom: 1.5rem; }
                    .mt-8 { margin-top: 2rem; }

                    .w-full { width: 100%; }
                    .max-w-md { max-width: 28rem; }
                    .max-w-lg { max-width: 32rem; }
                    .max-w-xl { max-width: 36rem; }

                    .h-screen { height: 100vh; }
                    .min-h-screen { min-height: 100vh; }

                    .border { border-width: 1px; }

                    .relative { position: relative; }
                    .absolute { position: absolute; }

                    .text-center { text-align: center; }

                    .transition-all {
                        transition-property: all;
                        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
                        transition-duration: 150ms;
                    }

                    .hover\:bg-primary-dark:hover { background-color: var(--color-primary-700); }
                    .hover\:bg-secondary-dark:hover { background-color: var(--color-secondary-700); }

                    @media (min-width: 768px) {
                        .md\:flex-row { flex-direction: row; }
                        .md\:text-left { text-align: left; }
                        .md\:text-xl { font-size: var(--text-xl); }
                        .md\:p-8 { padding: 2rem; }
                    }

                    .dark .dark\:bg-dark { background-color: var(--color-dark); }
                    .dark .dark\:text-light { color: var(--color-light); }
                }
            </style>
        @endif
    </head>
    <body class="bg-light dark:bg-dark text-dark dark:text-light min-h-screen flex flex-col items-center justify-center p-4 md:p-8">
        <header class="w-full max-w-xl mb-8">
            @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-4 py-2 border border-primary text-primary rounded-md hover:bg-primary hover:text-white transition-all">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="px-4 py-2 text-primary hover:underline">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="px-4 py-2 bg-primary text-white rounded-md hover:bg-primary-dark transition-all">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main class="flex flex-col md:flex-row items-center justify-center w-full max-w-4xl gap-8">
            <div class="bg-white dark:bg-secondary-800 p-6 rounded-lg shadow-lg w-full max-w-md">
                <div class="mb-6">
                    <h1 class="text-2xl md:text-3xl font-semibold mb-2">Barangay Report System</h1>
                    <p class="text-secondary-600 dark:text-secondary-300">Efficiently manage and track barangay reports, complaints, and services.</p>
                </div>

                <div class="space-y-4">
                    <div class="flex items-start gap-4">
                        <div class="bg-primary-light text-primary p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium">Report Incidents</h3>
                            <p class="text-sm text-secondary-500 dark:text-secondary-400">Submit and track barangay incidents and concerns.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-primary-light text-primary p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium">Request Services</h3>
                            <p class="text-sm text-secondary-500 dark:text-secondary-400">Request barangay services and documents online.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="bg-primary-light text-primary p-2 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-medium">Track Status</h3>
                            <p class="text-sm text-secondary-500 dark:text-secondary-400">Monitor the status of your reports and requests.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <a href="{{ Route::has('register') ? route('register') : route('login') }}" class="block w-full bg-primary text-white text-center py-3 rounded-md hover:bg-primary-dark transition-all">
                        Get Started
                    </a>
                </div>
            </div>

            <div class="relative w-full max-w-md">
                <div class="bg-primary rounded-lg overflow-hidden shadow-lg aspect-video flex items-center justify-center">
                    <div class="text-white p-8 text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        <h2 class="text-xl font-semibold mb-2">Community Portal</h2>
                        <p class="text-primary-100">Your one-stop platform for barangay services and communication</p>
                    </div>
                </div>
                <div class="absolute inset-0 rounded-lg shadow-[inset_0_0_0_1px_rgba(0,0,0,0.1)] dark:shadow-[inset_0_0_0_1px_rgba(255,255,255,0.1)] pointer-events-none"></div>
            </div>
        </main>

        <footer class="mt-12 text-center text-secondary-500 dark:text-secondary-400 text-sm">
            <p>© {{ date('Y') }} Barangay Report System. All rights reserved.</p>
        </footer>
    </body>
</html>
