<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول المدير - منصة إعمار غزة</title>

    <!-- Font: Cairo -->
  <!-- ========================================== -->
  <!-- Fonts (Cairo)                              -->
  <!-- ========================================== -->
    <link rel="stylesheet" href="{{ asset('css/cairo-font.css') }}">
  <!-- ========================================== -->
  <!-- CSS Stylesheets                            -->
  <!-- ========================================== -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

  <!-- ========================================== -->
  <!-- JavaScript & Tailwind Configuration        -->
  <!-- ========================================== -->
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
</head>

<body
    class="bg-slate-50 relative min-h-screen overflow-hidden selection:bg-emerald-200 selection:text-emerald-900 flex items-center justify-center">

    <div
        class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-emerald-400 rounded-full blur-3xl opacity-20 animate-blob">
    </div>
    <div
        class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-teal-400 rounded-full blur-3xl opacity-20 animate-blob animation-delay-2000">
    </div>
    <div
        class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-blue-400 rounded-full blur-3xl opacity-10 animate-blob animation-delay-4000">
    </div>

    <div class="relative z-10 w-full max-w-md px-4">
        <a href="{{ route('Gaza.index') }}" class="block text-center mb-8 hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
                class="w-20 h-20 mx-auto object-contain mb-4 drop-shadow-lg">
            <h1 class="text-2xl font-bold text-slate-800">منصة إعمار غزة</h1>
        </a>

        <div class="bg-white/80 backdrop-blur-xl border border-white/50 shadow-2xl rounded-3xl p-8">
            <div class="text-center mb-8">
                <div
                    class="w-16 h-16 bg-slate-100 rounded-2xl flex items-center justify-center mx-auto mb-4 text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-shield-check">
                        <path
                            d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                        <path d="m9 12 2 2 4-4" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-slate-900">تسجيل دخول الإدارة</h2>
                <p class="text-sm text-slate-500 mt-2">لوحة التحكم والمراقبة</p>
                <a href="{{ route('Gaza.login') }}" class="text-xs text-emerald-600 font-bold hover:underline mt-2 inline-block">تغيير
                    نوع الحساب</a>
            </div>

            <form action="{{ Route('Gaza.dashboard') }}" class="space-y-5">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-2">البريد الإلكتروني</label>
                    <input type="email" id="email"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/50 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200"
                        placeholder="admin@gaza-rebuild.ps">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-2">كلمة المرور</label>
                    <input type="password" id="password"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/50 focus:bg-white focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 rounded border-slate-300 text-emerald-600 focus:ring-emerald-500">
                        <span class="text-slate-600">تذكرني</span>
                    </label>
                    <a href="#" class="text-emerald-600 hover:text-emerald-700 font-medium">نسيت كلمة المرور؟</a>
                </div>

                <button type="submit"
                    class="w-full py-3.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-200 hover:shadow-emerald-300 transform active:scale-95 transition-all duration-200 flex items-center justify-center gap-2">
                    دخول للوحة التحكم
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7" />
                        <path d="M19 12H5" />
                    </svg>
                </button>
            </form>

            <div class="mt-6 text-center text-xs text-slate-400">
                &copy; 2024 منصة إعمار غزة. جميع الحقوق محفوظة.
            </div>
        </div>
    </div>

</body>

</html>
