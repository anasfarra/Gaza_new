<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!-- ========================================== -->
  <!-- CSS Stylesheets                            -->
  <!-- ========================================== -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/cairo-font.css') }}">
      <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@yield('css')
<body
  class="bg-slate-50 text-slate-800 antialiased overflow-x-hidden selection:bg-emerald-200 selection:text-emerald-900">
  <div id="root">
    <div class="min-h-screen font-sans">
      <!-- ========================================== -->
      <!-- Header / Navigation Bar                    -->
      <!-- ========================================== -->
      <header class="fixed w-full top-0 z-50 glass transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <a class="flex items-center gap-3 group" href="{{ route('Gaza.index') }}">
              <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
                class="w-12 h-12 md:w-14 md:h-14 object-contain group-hover:scale-105 transition-transform duration-300">
              <div class="hidden sm:block">
                <h1 class="font-bold text-lg text-slate-900 group-hover:text-emerald-700 transition-colors">منصة إعمار
                  غزة</h1>
                <p class="text-xs text-slate-500 font-medium tracking-wide">نُعيد بناء الحياة</p>
              </div>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center gap-8">
                @php
                    $activeClass = "text-sm font-bold text-emerald-700 relative after:content-[''] after:absolute after:w-full after:h-0.5 after:bg-emerald-600 after:-bottom-1 after:left-0";
                    $inactiveClass = "text-sm font-medium text-slate-600 hover:text-emerald-600 transition-colors hover:-translate-y-0.5 transform duration-200";
                @endphp

                <a class="{{ request()->routeIs('Gaza.index') ? $activeClass : $inactiveClass }}"
                   href="{{ route('Gaza.index') }}">الرئيسية</a>

                <a class="{{ request()->routeIs('Gaza.damage-map') ? $activeClass : $inactiveClass }}"
                   href="{{ route('Gaza.damage-map') }}">خريطة الأضرار</a>

                <a class="{{ request()->routeIs('Gaza.projects') ? $activeClass : $inactiveClass }}"
                   href="{{ route('Gaza.projects') }}">المشاريع</a>

                <a class="{{ request()->routeIs('Gaza.marketplace') ? $activeClass : $inactiveClass }}"
                   href="{{ route('Gaza.marketplace') }}">سوق المواد</a>

                <a class="{{ request()->routeIs('Gaza.about') ? $activeClass : $inactiveClass }}"
                   href="{{ route('Gaza.about') }}">من نحن</a>

                <a class="{{ request()->routeIs('Gaza.content') ? $activeClass : $inactiveClass }}"
                   href="{{ route('Gaza.content') }}">اتصل بنا</a>
            </nav>

            <!-- CTA Buttons -->
            <div class="flex items-center gap-3">
              <a href="{{ route('Gaza.login') }}"
                class="hidden md:inline-flex items-center justify-center px-5 py-2 text-sm font-bold text-emerald-700 bg-emerald-50 border border-emerald-200 rounded-lg hover:bg-emerald-100 hover:border-emerald-300 transition-all duration-300">
                تسجيل الدخول
              </a>
              <a href="{{ route('Gaza.login-beneficiaris') }}"
                class="inline-flex items-center justify-center px-5 py-2 text-sm font-bold text-white bg-emerald-600 rounded-lg shadow-md hover:bg-emerald-700 hover:shadow-lg hover:shadow-emerald-200 hover:-translate-y-0.5 transition-all duration-300">
                تقديم طلب
              </a>
            </div>
          </div>
        </div>
      </header>

      @yield('content')

      <!-- ========================================== -->
      <!-- Footer Section                             -->
      <!-- ========================================== -->
      <footer class="bg-slate-900 text-white pt-20 pb-10 mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-slate-800 pb-12 mb-12">
            <div class="col-span-1 md:col-span-2">
              <div class="flex items-center gap-3 mb-6">
                <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo" class="w-12 h-12 object-contain rounded-lg">
                <h2 class="text-2xl font-bold">منصة إعمار غزة</h2>
              </div>
              <p class="text-slate-400 leading-relaxed max-w-sm">
                منصة وطنية موحدة تهدف إلى تسريع وتنسيق جهود إعادة الإعمار بشفافية كاملة وعدالة في التوزيع.
              </p>
            </div>
            <div>
              <h3 class="font-bold text-lg mb-6 text-emerald-500">روابط سريعة</h3>
              <ul class="space-y-4 text-slate-400 text-sm">
                <li><a href="{{ route('Gaza.about') }}" class="hover:text-emerald-400 transition-colors flex items-center gap-2"><span
                      class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>من نحن</a></li>
                <li><a href="{{ route('Gaza.projects') }}"
                    class="hover:text-emerald-400 transition-colors flex items-center gap-2"><span
                      class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>المشاريع</a></li>
                <li><a href="{{ route('Gaza.damage-map') }}"
                    class="hover:text-emerald-400 transition-colors flex items-center gap-2"><span
                      class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>خريطة الأضرار</a></li>
                <li><a href="{{ route('Gaza.login-DonorControl-Panel') }}"
                    class="hover:text-emerald-400 transition-colors flex items-center gap-2"><span
                      class="w-1.5 h-1.5 bg-emerald-500 rounded-full"></span>تبرع</a></li>
              </ul>
            </div>
            <div>
              <h3 class="font-bold text-lg mb-6 text-emerald-500">تواصل معنا</h3>
              <p class="text-slate-400 mb-2 text-sm">info@gazarebuild.org</p>
              <p class="text-slate-400 text-sm">+970 59 999 9999</p>
            </div>
          </div>
          <div class="text-center text-slate-500 text-sm">
            &copy; 2026 منصة إعمار غزة. جميع الحقوق محفوظة.
          </div>
        </div>
      </footer>
    </div>
  </div>

  <!-- ========================================== -->
  <!-- Main JavaScript File                       -->
  <!-- ========================================== -->
  <script type="module" src="{{ asset('js/dashboard_init.js') }}"></script>
<script src="{{ asset('js/javascript.js') }}"></script>

<script src="{{ asset('js/tailwind.js') }}"></script>

  <script src="{{ asset('js/tailwind-config.js') }}"></script>
@yield('script')
</body>

</html>
