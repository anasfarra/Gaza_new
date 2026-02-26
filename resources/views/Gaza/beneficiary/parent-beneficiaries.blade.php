<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cairo-font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('css/beneficiaries.css') }}">
@yield('css')
</head>

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-200 selection:text-emerald-900">

    <div id="root">
        <div class="min-h-screen bg-slate-50">
      <!-- ========================================== -->
      <!-- Header / Navigation Bar                    -->
      <!-- ========================================== -->
            <header
                class="sticky top-0 z-50 glass transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-slate-200/50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-20">
                        <a class="flex items-center gap-3 group" href="{{ route('Gaza.beneficiaries-home') }}">
                            <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
                                class="w-12 h-12 object-contain group-hover:scale-105 transition-transform">
                            <div class="hidden sm:block">
                                <h1 class="font-bold text-lg text-slate-900">منصة إعمار غزة</h1>
                                <p class="text-xs text-slate-500">معاً نعيد البناء</p>
                            </div>
                        </a>
            <nav class="hidden lg:flex items-center gap-8">
                @php
                    $activeClass = "text-sm font-bold text-emerald-700 relative after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-emerald-600 after:-bottom-1 after:left-0";
                    $inactiveClass = "text-sm font-medium text-slate-600 hover:text-emerald-600 transition-colors hover:-translate-y-0.5 transform duration-200";
                @endphp
                                <a class="{{ request()->routeIs('Gaza.beneficiaries-home') ? $activeClass : $inactiveClass }}"
                                 href="{{ route('Gaza.beneficiaries-home') }}">الرئيسية</a>

                                <a class="{{ request()->routeIs('Gaza.beneficiaries-damage-map') ? $activeClass : $inactiveClass }}"
                                 href="{{ route('Gaza.beneficiaries-damage-map') }}">خريطة الأضرار</a>

                                <a class="{{ request()->routeIs('Gaza.beneficiaries-projects') ? $activeClass : $inactiveClass }}"
                                 href="{{ route('Gaza.beneficiaries-projects') }}">المشاريع</a>

                                <a class="{{ request()->routeIs('Gaza.beneficiaries') ? $activeClass : $inactiveClass }}"
                                 href="{{ route('Gaza.beneficiaries') }}">المستفيدون</a>

                                <a class="{{ request()->routeIs('Gaza.beneficiaries-about') ? $activeClass : $inactiveClass }}"
                                 href="{{ route('Gaza.beneficiaries-about') }}">من نحن</a>

                                <a class="{{ request()->routeIs('Gaza.beneficiaries-content') ? $activeClass : $inactiveClass }}"
                                 href="{{ route('Gaza.beneficiaries-content') }}">اتصل بنا</a>
                        </nav>
                        <div class="flex items-center gap-3">
                            <button
                                class="inline-flex items-center justify-center border bg-background h-8 rounded-md px-3 gap-2 text-sm font-medium hover:bg-neutral-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                    <path d="M2 12h20"></path>
                                </svg>
                                <span class="hidden sm:inline">English</span>
                            </button>
                            <a href="{{ route('Gaza.login') }}">
                                <button
                                    class="inline-flex items-center justify-center border bg-background h-8 rounded-md px-3 gap-2 text-sm font-medium hover:bg-neutral-50">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="hidden sm:inline max-w-[100px] truncate">تسجيل الدخول</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </header>

@yield('content')
      <!-- ========================================== -->
      <!-- Footer Section                             -->
      <!-- ========================================== -->
            <footer class="bg-neutral-900 text-white mt-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div>
                            <h3 class="font-bold text-lg mb-4">منصة إعمار غزة</h3>
                            <p class="text-neutral-400 text-sm">منصة رقمية شفافة لإدارة إعادة إعمار غزة وربط المتضررين
                                بالمانحين والمقاولين</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-4">روابط سريعة</h3>
                            <div class="flex flex-col gap-2 text-sm text-neutral-400">
                                <a class="hover:text-white transition-colors" href="{{ route('Gaza.beneficiaries-damage-map') }}">خريطة الأضرار</a>
                                <a class="hover:text-white transition-colors" href="{{ route('Gaza.login-DonorControl-Panel') }}">لوحة
                                    تحكم المانح</a>
                                <a class="hover:text-white transition-colors"
                                    href="{{ route('Gaza.beneficiaries') }}">المستفيدون</a>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-4">تواصل معنا</h3>
                            <div class="text-neutral-400 text-sm space-y-2">
                                <p>info@gazarebuild.org</p>
                                <p>+970 XX XXX XXXX</p>
                            </div>
                        </div>
                    </div>
                    <div class="border-t border-neutral-800 mt-8 pt-8 text-center text-neutral-500 text-sm">
                        <p>© 2026 منصة إعمار غزة. جميع الحقوق محفوظة.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
<script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>

@yield('script')
</body>


</html>
