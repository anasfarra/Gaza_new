{{-- <!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الموردين - منصة إعمار غزة</title>
  <!-- ========================================== -->
  <!-- JavaScript & Tailwind Configuration        -->
  <!-- ========================================== -->
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body class="bg-neutral-50 text-neutral-900 font-[Cairo]">
    <div id="root">
        <div class="min-h-screen bg-neutral-50">
      <!-- ========================================== -->
      <!-- Header / Navigation Bar                    -->
      <!-- ========================================== -->
            <header
                class="sticky top-0 z-50 glass transition-all duration-300 bg-white/80 backdrop-blur-md border-b border-slate-200/50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between items-center h-20">
                        <a class="flex items-center gap-3 group" href="{{ route('Gaza.index') }}">
                            <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
                                class="w-12 h-12 object-contain group-hover:scale-105 transition-transform">
                            <div class="hidden sm:block">
                                <h1 class="font-bold text-lg text-slate-900">منصة إعمار غزة</h1>
                                <p class="text-xs text-slate-500">معاً نعيد البناء</p>
                            </div>
                        </a>
                        <nav class="hidden lg:flex items-center gap-6">
                            <a class="text-sm transition-colors text-emerald-700 font-bold bg-emerald-50 px-3 py-1 rounded-lg"
                                href="{{ route('Gaza.dashboard') }}">لوحة
                                الإدارة</a>
                            <a class="text-sm transition-colors text-slate-600 hover:text-emerald-600 font-medium"
                                href="{{ route('Gaza.login-beneficiaris') }}">المستفيدون</a>
                            <a class="text-sm transition-colors text-slate-600 hover:text-emerald-600 font-medium"
                                href="{{ route('Gaza.ConstructionTracking') }}">تتبع البناء</a>
                            <a class="text-sm transition-colors text-slate-600 hover:text-emerald-600 font-medium"
                                href="{{ route('Gaza.index') }}">الرئيسية</a>
                            <a class="text-sm transition-colors text-slate-600 hover:text-emerald-600 font-medium"
                                href="{{ route('Gaza.damage-map') }}">خريطة الأضرار</a>
                            <a class="text-sm transition-colors text-slate-600 hover:text-emerald-600 font-medium"
                                href="{{ route('Gaza.content') }}">اتصل بنا</a>
                        </nav>
                        <div class="flex items-center gap-3">
                            <button
                                class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all border bg-background text-foreground hover:bg-accent h-8 rounded-md px-3 gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-user w-4 h-4">
                                    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                                <span class="hidden sm:inline max-w-[100px] truncate">Admin</span>
                            </button>
                        </div>
                    </div>
                </div>
            </header>

      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
            <main>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div>
                            <h1 class="text-3xl font-bold mb-2">إدارة الموردين</h1>
                            <p class="text-neutral-600">قائمة الموردين المعتمدين وتفاصيل التواصل</p>
                        </div>
                        <div class="flex gap-2">
                            <button class="nav-link-btn" data-href="{{ route('Gaza.dashboard') }}"
                                class="inline-flex items-center justify-center gap-2 h-9 px-4 rounded-md text-sm font-medium border bg-white hover:bg-neutral-50 transition-all">
                                <span>عودة للوحة التحكم</span>
                            </button>
                            <button onclick="alert('إضافة مورد جديد')"
                                class="inline-flex items-center justify-center gap-2 h-9 px-4 rounded-md text-sm font-medium bg-green-600 text-white hover:bg-green-700 transition-all">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z">
                                    </path>
                                </svg>
                                <span>إضافة مورد</span>
                            </button>
                        </div>
                    </div>

                    <!-- Suppliers List -->
                    <div class="grid grid-cols-1 gap-4">
                        <!-- Supplier Item -->
                        <div
                            class="bg-white p-4 rounded-xl border flex flex-col md:flex-row items-center justify-between gap-4">
                            <div class="flex items-center gap-4 w-full md:w-auto">
                                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="text-gray-500">
                                        <path d="M3 3v18h18" />
                                        <path d="m19 9-5 5-4-4-3 3" />
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900">شركة البناء الحديثة</h3>
                                    <p class="text-sm text-gray-500">مواد بناء • أسمنت، حديد</p>
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-6 text-sm text-gray-600 w-full md:w-auto justify-between md:justify-start">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    0599123456
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    info@modernbuild.ps
                                </div>
                            </div>
                            <div class="flex gap-2 w-full md:w-auto">
                                <button
                                    class="flex-1 md:flex-none border px-3 py-1.5 rounded-md text-sm hover:bg-gray-50">التفاصيل</button>
                                <button
                                    class="flex-1 md:flex-none bg-green-600 text-white px-3 py-1.5 rounded-md text-sm hover:bg-green-700">مراسلة</button>
                            </div>
                        </div>

                        <!-- Supplier Item -->
                        <div
                            class="bg-white p-4 rounded-xl border flex flex-col md:flex-row items-center justify-between gap-4">
                            <div class="flex items-center gap-4 w-full md:w-auto">
                                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="text-gray-500">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-gray-900">مؤسسة النور للكهرباء</h3>
                                    <p class="text-sm text-gray-500">تجهيزات كهربائية • كوابل، إنارة</p>
                                </div>
                            </div>
                            <div
                                class="flex items-center gap-6 text-sm text-gray-600 w-full md:w-auto justify-between md:justify-start">
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                        </path>
                                    </svg>
                                    0599654321
                                </div>
                                <div class="flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>
                                    sales@alnoor-elec.com
                                </div>
                            </div>
                            <div class="flex gap-2 w-full md:w-auto">
                                <button
                                    class="flex-1 md:flex-none border px-3 py-1.5 rounded-md text-sm hover:bg-gray-50">التفاصيل</button>
                                <button
                                    class="flex-1 md:flex-none bg-green-600 text-white px-3 py-1.5 rounded-md text-sm hover:bg-green-700">مراسلة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>

</html> --}}
