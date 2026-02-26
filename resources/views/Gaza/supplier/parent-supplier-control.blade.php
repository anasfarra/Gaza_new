<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'لوحة تحكم المورد | منصة إعمار غزة')</title>

    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">

    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
    <script src="{{ asset('js/Supplier.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/Supplier.css') }}">
@yield('css')
</head>

<body class="bg-slate-50 text-slate-800 antialiased selection:bg-emerald-200 selection:text-emerald-900">
    <div id="root">
        <div class="min-h-screen bg-neutral-50">
            <!-- ========================================== -->
            <!-- Header / Navigation Bar                    -->
            <!-- ========================================== -->
            <header class="bg-white border-b sticky top-0 z-50 shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-16">
                        <a class="flex items-center gap-3" href="{{ route('Gaza.supplier-index') }}">
                            <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
                                class="w-12 h-12 object-contain">
                            <div class="hidden sm:block">
                                <h1 class="font-bold text-lg">منصة إعمار غزة</h1>
                                <p class="text-xs text-neutral-500">معاً نعيد البناء</p>
                            </div>
                        </a>
            <nav class="hidden lg:flex items-center gap-8">
                @php
                    $activeClass = "text-sm font-bold text-emerald-700 relative after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-emerald-600 after:-bottom-1 after:left-0";
                    $inactiveClass = "text-sm font-medium text-slate-600 hover:text-emerald-600 transition-colors hover:-translate-y-0.5 transform duration-200";
                @endphp
                            <a class="{{ request()->routeIs('Gaza.supplier-index') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.supplier-index') }}">الرئيسية</a>
                            <a class="{{ request()->routeIs('Gaza.supplier-damage-map') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.supplier-damage-map') }}">خريطة الأضرار</a>
                            <a class="{{ request()->routeIs('Gaza.supplier-projects') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.supplier-projects') }}">المشاريع</a>
                            <a class="{{ request()->routeIs('Gaza.Supplier') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.Supplier') }}">لوحة المورد</a>
                            <a class="{{ request()->routeIs('Gaza.supplier-marketplace') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.supplier-marketplace') }}">السوق</a>
                            <a class="{{ request()->routeIs('Gaza.supplier-content') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.supplier-content') }}">اتصل بنا</a>
                        </nav>
                        <div class="flex items-center gap-3">
                            <a href="{{ route('Gaza.login') }}">
                                <button
                                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all bg-green-600 text-white hover:bg-green-700 h-8 rounded-md px-3 gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-user w-4 h-4">
                                        <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="hidden sm:inline">تسجيل الدخول</span>
                                </button>
                            </a>
                            <button class="lg:hidden p-2 border rounded-md">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="4" x2="20" y1="12" y2="12"></line>
                                    <line x1="4" x2="20" y1="6" y2="6"></line>
                                    <line x1="4" x2="20" y1="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            <footer class="bg-neutral-900 text-white mt-20">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-right">
                        <div>
                            <h3 class="font-bold text-lg mb-4">منصة إعمار غزة</h3>
                            <p class="text-neutral-400 text-sm">منصة رقمية شفافة لإدارة إعادة إعمار غزة وربط المتضررين
                                بالمانحين والمقاولين.</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-4">روابط سريعة</h3>
                            <div class="flex flex-col gap-2 text-sm text-neutral-400">
                                <a href="{{ route('Gaza.supplier-damage-map') }}"
                                    class="hover:text-white transition-colors">خريطة الأضرار</a>
                                <a href="{{ route('Gaza.supplier-marketplace') }}" class="hover:text-white transition-colors">السوق</a>
                                <a href="{{ route('Gaza.login-beneficiaris') }}"
                                    class="hover:text-white transition-colors">المستفيدون</a>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-4">تواصل معنا</h3>
                            <p class="text-neutral-400 text-sm">info@gazarebuild.org</p>
                            <p class="text-neutral-400 text-sm font-mono" dir="ltr">+970 XX XXX XXXX</p>
                        </div>
                    </div>
                    <div class="border-t border-neutral-800 mt-8 pt-8 text-center text-neutral-500 text-xs">
                        <p>© 2026 منصة إعمار غزة. جميع الحقوق محفوظة.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
@yield('script')
</body>

</html>
