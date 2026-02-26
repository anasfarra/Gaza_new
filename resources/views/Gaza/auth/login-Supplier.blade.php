<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول المورد - منصة إعمار غزة</title>

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
        class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-purple-400 rounded-full blur-3xl opacity-20 animate-blob">
    </div>
    <div
        class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 bg-fuchsia-400 rounded-full blur-3xl opacity-20 animate-blob animation-delay-2000">
    </div>

    <div class="relative z-10 w-full max-w-md px-4">
        <a href="{{ route('Gaza.supplier-index') }}" class="block text-center mb-8 hover:scale-105 transition-transform duration-300">
            <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
                class="w-20 h-20 mx-auto object-contain mb-4 drop-shadow-lg">
            <h1 class="text-2xl font-bold text-slate-800">منصة إعمار غزة</h1>
        </a>

        <div class="bg-white/80 backdrop-blur-xl border border-white/50 shadow-2xl rounded-3xl p-8">
            <div class="text-center mb-8">
                <div
                    class="w-16 h-16 bg-purple-50 rounded-2xl flex items-center justify-center mx-auto mb-4 text-purple-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-truck">
                        <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2" />
                        <path d="M15 18H9" />
                        <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14" />
                        <circle cx="17" cy="18" r="2" />
                        <circle cx="7" cy="18" r="2" />
                    </svg>
                </div>
                <h2 class="text-xl font-bold text-slate-900">تسجيل دخول المورد</h2>
                <p class="text-sm text-slate-500 mt-2">إدارة المنتجات وطلبات الشراء</p>
                <a href="{{ route('Gaza.login') }}" class="text-xs text-purple-600 font-bold hover:underline mt-2 inline-block">تغيير
                    نوع الحساب</a>
            </div>

            <form action="{{ route('Gaza.Supplier') }}" class="space-y-5">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-2">رقم السجل التجاري / اسم
                        المورد</label>
                    <input type="text" id="email"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/50 focus:bg-white focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all duration-200"
                        placeholder="شركة التوريدات العامة">
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-2">كلمة المرور</label>
                    <input type="password" id="password"
                        class="w-full px-4 py-3 rounded-xl border border-slate-200 bg-white/50 focus:bg-white focus:border-purple-500 focus:ring-2 focus:ring-purple-200 outline-none transition-all duration-200"
                        placeholder="••••••••">
                </div>

                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox"
                            class="w-4 h-4 rounded border-slate-300 text-purple-600 focus:ring-purple-500">
                        <span class="text-slate-600">تذكرني</span>
                    </label>
                    <a href="#" class="text-purple-600 hover:text-purple-700 font-medium">نسيت كلمة المرور؟</a>
                </div>

                <button type="submit"
                    class="w-full py-3.5 bg-purple-600 hover:bg-purple-700 text-white font-bold rounded-xl shadow-lg shadow-purple-200 hover:shadow-purple-300 transform active:scale-95 transition-all duration-200 flex items-center justify-center gap-2">
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
                للانضمام لشبكة الموردين المعتمدين، <a href="#" class="text-purple-600 font-bold hover:underline">سجل
                    هنا</a>
            </div>
        </div>
    </div>

</body>

</html>