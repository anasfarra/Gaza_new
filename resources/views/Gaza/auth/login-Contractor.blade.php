<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول المقاول - منصة إعمار غزة</title>

    <!-- Font: Cairo -->
  <!-- ========================================== -->
  <!-- Fonts (Cairo)                              -->
  <!-- ========================================== -->
    <link rel="stylesheet" href="{{ asset('css/cairo-font.css') }}">
  <!-- ========================================== -->
  <!-- JavaScript & Tailwind Configuration        -->
  <!-- ========================================== -->
    <script src="{{ asset('js/tailwind.js') }}"></script>
    <script src="{{ asset('js/tailwind-config.js') }}"></script>
</head>

<body
    class="bg-slate-50 relative min-h-screen overflow-hidden selection:bg-emerald-200 selection:text-emerald-900 flex items-center justify-center">

    <div
        class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-orange-400 rounded-full blur-3xl opacity-20 animate-blob">
    </div>
    <div
        class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-amber-400 rounded-full blur-3xl opacity-20 animate-blob animation-delay-2000">
    </div>

    <div class="relative z-10 w-full max-w-md px-4">
        <a href="{{ route('Gaza.contractor-index') }}" class="block text-center mb-8 hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
                class="w-20 h-20 mx-auto object-contain mb-4 drop-shadow-lg">
            <h1 class="text-2xl font-bold text-slate-800">منصة إعمار غزة</h1>
        </a>

        <div class="bg-white/80 backdrop-blur-xl border border-white/50 shadow-2xl rounded-3xl p-8">
            <div class="text-center mb-8">
                <div
                    class="w-16 h-16 bg-orange-50 rounded-2xl flex items-center justify-center mx-auto mb-4 text-orange-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-hard-hat">
                        <path d="M2 13a6 6 0 0 1 6-6h8a6 6 0 0 1 6 6v7a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-7z" />
                        <path d="M10 13V9" />
                        <path d="M14 13V9" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-slate-900">تسجيل دخول المقاول</h2>
                <p class="text-sm text-slate-500 mt-2">إدارة المشاريع والعطاءات</p>
                <a href="{{ route('Gaza.login') }}" class="text-xs text-orange-600 font-bold hover:underline mt-2 inline-block">تغيير
                    نوع الحساب</a>
            </div>

            <form action="{{ route('Gaza.Contractor') }}" class="space-y-5">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-2">اسم الشركة /
                        المقاول</label>
                    <input type="text" id="email"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/50 focus:bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all duration-200"
                        placeholder="شركة الإعمار للمقاولات">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-2">كلمة المرور</label>
                    <input type="password" id="password"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/50 focus:bg-white focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all duration-200"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 rounded border-slate-300 text-orange-600 focus:ring-orange-500">
                        <span class="text-slate-600">تذكرني</span>
                    </label>
                    <a href="#" class="text-orange-600 hover:text-orange-700 font-medium">نسيت كلمة المرور؟</a>
                </div>

                <button type="submit"
                    class="w-full py-3.5 bg-orange-600 hover:bg-orange-700 text-white font-bold rounded-xl shadow-lg shadow-orange-200 hover:shadow-orange-300 transform active:scale-95 transition-all duration-200 flex items-center justify-center gap-2">
                    دخول للمنصة
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-arrow-left">
                        <path d="m12 19-7-7 7-7" />
                        <path d="M19 12H5" />
                    </svg>
                </button>
            </form>

            <div class="mt-6 text-center text-xs text-slate-400">
                للتسجيل كمقاول معتمد، <a href="#" class="text-orange-600 font-bold hover:underline">قدم طلب اعتماد</a>
            </div>
        </div>
    </div>

</body>

</html>