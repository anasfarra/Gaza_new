<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

<script type="module" src="{{ asset('js/dashboard_init.js') }}"></script>

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  <link rel="stylesheet" href="{{ asset('css/cairo-font.css') }}">

    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />


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
                        <a class="flex items-center gap-3 group" href="{{ route('Gaza.dashboard-home') }}">
                            <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
                                class="w-12 h-12 object-contain group-hover:scale-105 transition-transform">
                            <div class="hidden sm:block">
                                <h1 class="font-bold text-lg text-slate-900">منصة إعمار غزة</h1>
                                <p class="text-xs text-slate-500">معاً نعيد البناء</p>
                            </div>
                        </a>
            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center gap-8">
                {{-- تعريف كلاسات النشط وغير النشط لتجنب التكرار --}}
                @php
                    $activeClass = "text-sm font-bold text-emerald-700 relative after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-emerald-600 after:-bottom-1 after:left-0";
                    $inactiveClass = "text-sm font-medium text-slate-600 hover:text-emerald-600 transition-colors hover:-translate-y-0.5 transform duration-200";
                @endphp
                            <!-- القائمة المنسدلة: لوحة الإدارة -->
                            <div class="relative group">
                                <a class="{{ request()->routeIs('Gaza.dashboard') ? $activeClass : $inactiveClass }} flex items-center gap-1"
                                   href="{{ route('Gaza.dashboard') }}">
                                    <span>لوحة الإدارة</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="transition-transform duration-200 group-hover:rotate-180">
                                        <polyline points="6 9 12 15 18 9"></polyline>
                                    </svg>
                                </a>

                                <!-- القائمة المنسدلة -->
                                <div class="absolute right-0 top-full mt-1 w-56 bg-white rounded-xl shadow-lg border border-gray-100 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 transform origin-top-right z-50">
                                    <div class="p-2 space-y-1">

                                        <!-- إدارة المستخدمين -->
                                        <a href="{{ route('Gaza.users-management') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 transition-colors group/item">
                                            <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover/item:bg-white text-slate-500 group-hover/item:text-emerald-600 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                                    <circle cx="9" cy="7" r="4"></circle>
                                                </svg>
                                            </div>
                                            <span class="text-sm font-medium">إدارة المستخدمين</span>
                                        </a>

                                        <!-- إدارة المشاريع -->
                                        <a href="{{ route('Gaza.projects-management') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 transition-colors group/item">
                                            <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover/item:bg-white text-slate-500 group-hover/item:text-emerald-600 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                                    <path d="M9 22v-4h6v4"></path>
                                                </svg>
                                            </div>
                                            <span class="text-sm font-medium">إدارة المشاريع</span>
                                        </a>

                                        <!-- التقارير -->
                                        <a href="{{ route('Gaza.main-reports') }}" class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-emerald-50 text-gray-700 hover:text-emerald-700 transition-colors group/item">
                                            <div class="w-8 h-8 rounded-full bg-slate-100 flex items-center justify-center group-hover/item:bg-white text-slate-500 group-hover/item:text-emerald-600 transition-colors">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                                    <polyline points="16 7 22 7 22 13"></polyline>
                                                </svg>
                                            </div>
                                            <span class="text-sm font-medium">التقارير</span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            {{-- <a class="text-sm transition-colors text-emerald-700 font-bold bg-emerald-50 px-3 py-1 rounded-lg"
                                href="{{ route('Gaza.dashboard') }}">لوحة الإدارة</a> --}}
                              <a class="{{ request()->routeIs('Gaza.dashboard-home') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.dashboard-home') }}">الرئيسية</a>
                            <a class="{{ request()->routeIs('Gaza.dashboard-construction-tracking') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.dashboard-construction-tracking') }}">تتبع البناء</a>

                              <a class="{{ request()->routeIs('Gaza.dashboard-damage-map') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.dashboard-damage-map') }}">خريطة الأضرار</a>
                          <a class="{{ request()->routeIs('Gaza.dashboard-about') ? $activeClass : $inactiveClass }}"
                               href="{{ route('Gaza.dashboard-about') }}">من نحن</a>
                            <a class="{{ request()->routeIs('Gaza.dashboard-content') ? $activeClass : $inactiveClass }}"
                                href="{{ route('Gaza.dashboard-content') }}">اتصل بنا</a>
                        </nav>
                        <div class="flex items-center gap-3">
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all border bg-background text-foreground hover:bg-accent h-8 rounded-md px-3 gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-globe w-4 h-4">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                    <path d="M2 12h20"></path>
                                </svg>
                                <span class="hidden sm:inline">English</span>
                            </button>
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all border bg-background text-foreground hover:bg-accent h-8 rounded-md px-3 gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-user w-4 h-4">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="hidden sm:inline max-w-[100px] truncate">Anasfara912</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

    @yield('content1')
      <!-- ========================================== -->
      <!-- Footer Section                             -->
      <!-- ========================================== -->
            <footer class="bg-neutral-900 text-white">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-right">
                        <div>
                            <h3 class="font-bold text-lg mb-4">منصة إعمار غزة</h3>
                            <p class="text-neutral-400 text-sm">منصة رقمية شفافة لإدارة إعادة إعمار غزة وربط المتضررين
                                بالمانحين والمقاولين</p>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-4">روابط سريعة</h3>
                            <div class="flex flex-col gap-2 text-sm text-neutral-400">
                                <a href="{{ route('Gaza.damage-map') }}">خريطة الأضرار</a>
                                <a href="{{ route('Gaza.login-beneficiaris') }}">المستفيدون</a>
                            </div>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg mb-4">تواصل معنا</h3>
                            <p class="text-neutral-400 text-sm">info@gazarebuild.org</p>
                        </div>
                    </div>
                    <div class="border-t border-neutral-800 mt-8 pt-8 text-center text-neutral-500 text-xs">
                        <p>© 2026 منصة إعمار غزة. جميع الحقوق محفوظة.</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script type="module" src="{{ asset('/src/main.tsx') }}"></script>
        <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    @yield('script')

</body>

</html>
