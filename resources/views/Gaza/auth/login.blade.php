<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>تسجيل الدخول - منصة إعمار غزة</title>
  <!-- ========================================== -->
  <!-- CSS Stylesheets                            -->
  <!-- ========================================== -->
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/login.css') }}">
  <!-- ========================================== -->
  <!-- JavaScript & Tailwind Configuration        -->
  <!-- ========================================== -->
<script src="{{ asset('js/tailwind.js') }}"></script>
  <script src="{{ asset('js/tailwind-config.js') }}"></script>
  <!-- ========================================== -->
  <!-- Fonts (Cairo)                              -->
  <!-- ========================================== -->
  <link rel="stylesheet" href="{{ asset('css/cairo-font.css') }}">
  </head>

<body
  class="bg-gradient-to-br from-slate-50 via-blue-50 to-emerald-50 text-slate-800 antialiased font-sans min-h-screen flex flex-col items-center justify-center p-4 relative overflow-hidden">
  <!-- Enhanced Background -->
  <div class="absolute inset-0 overflow-hidden -z-10">
    <!-- Grid Pattern -->
    <div class="absolute inset-0 grid-pattern opacity-50"></div>

    <!-- Animated Gradient Blobs -->
    <div
      class="absolute top-10 right-10 w-96 h-96 bg-gradient-to-br from-emerald-400 to-teal-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob">
    </div>
    <div
      class="absolute top-20 left-10 w-96 h-96 bg-gradient-to-br from-blue-400 to-indigo-500 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"
      style="animation-delay: 2s;"></div>
    <div
      class="absolute -bottom-8 left-1/3 w-96 h-96 bg-gradient-to-br from-purple-400 to-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-25 animate-blob"
      style="animation-delay: 4s;"></div>
    <div
      class="absolute bottom-20 right-20 w-80 h-80 bg-gradient-to-br from-amber-400 to-orange-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"
      style="animation-delay: 6s;"></div>

    <!-- Light Rays -->
    <div
      class="absolute top-0 left-1/4 w-1 h-full bg-gradient-to-b from-transparent via-emerald-200 to-transparent opacity-10">
    </div>
    <div
      class="absolute top-0 right-1/3 w-1 h-full bg-gradient-to-b from-transparent via-blue-200 to-transparent opacity-10">
    </div>
  </div>

  <div class="max-w-7xl w-full mx-auto relative">
    <div class="text-center mb-16">
      <a href="{{ route('Gaza.index') }}" class="inline-flex items-center gap-4 mb-8 group">
        <div class="relative">
          <div
            class="absolute inset-0 bg-emerald-400 rounded-3xl blur-2xl opacity-40 group-hover:opacity-60 transition-opacity animate-glow">
          </div>
          <img src="{{ asset('src/assets/img/ui-icons/gaza_news.png') }}" alt="Logo"
            class="relative w-20 h-20 object-contain drop-shadow-2xl group-hover:scale-110 transition-all duration-500 animate-float">
        </div>
        <div class="text-right">
          <h1
            class="font-extrabold text-3xl bg-gradient-to-r from-emerald-700 via-emerald-600 to-blue-600 bg-clip-text text-transparent group-hover:from-emerald-600 group-hover:to-blue-500 transition-all duration-300">
            منصة إعمار غزة
          </h1>
          <p class="text-sm text-slate-600 font-semibold tracking-wide mt-1">نُعيد بناء الحياة 🇵🇸</p>
        </div>
      </a>

      <div class="space-y-4">
        <h2 class="text-4xl md:text-5xl font-extrabold text-slate-900 tracking-tight">مرحباً بك مجدداً</h2>

        <!-- Decorative Line -->
        <div class="flex items-center justify-center gap-2 mb-4">
          <div class="h-1 w-16 bg-gradient-to-r from-transparent to-emerald-500 rounded-full"></div>
          <div class="h-1.5 w-20 bg-gradient-to-r from-emerald-500 via-blue-500 to-purple-500 rounded-full"></div>
          <div class="h-1 w-16 bg-gradient-to-l from-transparent to-purple-500 rounded-full"></div>
        </div>

        <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">يرجى اختيار نوع الحساب للمتابعة إلى لوحة
          التحكم الخاصة بك</p>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-8 mb-16">
      <!-- Admin -->
      <a href="{{ Route('Gaza.login-admin') }}"
        class="glass-card shine-effect rounded-3xl hover:-translate-y-3 transition-all duration-500 p-8 group flex flex-col items-center text-center h-full relative">
        <div
          class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-indigo-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl">
        </div>

        <div class="relative icon-glow">
          <div
            class="w-20 h-20 rounded-2xl bg-gradient-to-br from-purple-500 to-indigo-600 flex items-center justify-center mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 overflow-hidden">
            <img src="{{ asset('src/assets/img/ui-icons/admins.png') }}" alt="Admin" class="w-14 h-14 object-contain drop-shadow-lg">
          </div>
        </div>

        <h3 class="font-bold text-xl text-slate-900 mb-2 group-hover:text-purple-700 transition-colors relative">مدير
          النظام</h3>
        <p class="text-sm text-slate-500 mb-5 leading-relaxed relative">إدارة شاملة للمنصة والصلاحيات</p>

        <span
          class="mt-auto text-purple-600 text-sm font-bold flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0 relative">
          دخول الآن
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
            class="rotate-180 group-hover:-translate-x-1 transition-transform">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
        </span>
      </a>

      <!-- Beneficiary -->
      <a href="{{ Route('Gaza.login-beneficiaris') }}"
        class="glass-card shine-effect rounded-3xl hover:-translate-y-3 transition-all duration-500 p-8 group flex flex-col items-center text-center h-full relative">
        <div
          class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-cyan-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl">
        </div>

        <div class="relative icon-glow">
          <div
            class="w-20 h-20 rounded-2xl bg-gradient-to-br from-blue-500 to-cyan-600 flex items-center justify-center mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 overflow-hidden">
            <img src="{{ asset('src/assets/img/ui-icons/users-avatar.png') }}" alt="Beneficiary"
              class="w-14 h-14 object-contain drop-shadow-lg">
          </div>
        </div>

        <h3 class="font-bold text-xl text-slate-900 mb-2 group-hover:text-blue-700 transition-colors relative">مستفيد
        </h3>
        <p class="text-sm text-slate-500 mb-5 leading-relaxed relative">متابعة طلبات التعويض والإعمار</p>

        <span
          class="mt-auto text-blue-600 text-sm font-bold flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0 relative">
          دخول الآن
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
            class="rotate-180 group-hover:-translate-x-1 transition-transform">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
        </span>
      </a>

      <!-- Donor -->
      <a href="{{ route('Gaza.login-DonorControl-Panel') }}"
        class="glass-card shine-effect rounded-3xl hover:-translate-y-3 transition-all duration-500 p-8 group flex flex-col items-center text-center h-full relative">
        <div
          class="absolute inset-0 bg-gradient-to-br from-red-500/5 to-rose-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl">
        </div>

        <div class="relative icon-glow">
          <div
            class="w-20 h-20 rounded-2xl bg-gradient-to-br from-red-500 to-rose-600 flex items-center justify-center mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 overflow-hidden">
            <img src="{{ asset('src/assets/img/ui-icons/donation.png') }}" alt="Donor" class="w-14 h-14 object-contain drop-shadow-lg">
          </div>
        </div>

        <h3 class="font-bold text-xl text-slate-900 mb-2 group-hover:text-red-700 transition-colors relative">مانح</h3>
        <p class="text-sm text-slate-500 mb-5 leading-relaxed relative">متابعة التبرعات والأثر الإيجابي</p>

        <span
          class="mt-auto text-red-600 text-sm font-bold flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0 relative">
          دخول الآن
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
            class="rotate-180 group-hover:-translate-x-1 transition-transform">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
        </span>
      </a>

      <!-- Supplier -->
      <a href="{{ route('Gaza.login-Supplier') }}"
        class="glass-card shine-effect rounded-3xl hover:-translate-y-3 transition-all duration-500 p-8 group flex flex-col items-center text-center h-full relative">
        <div
          class="absolute inset-0 bg-gradient-to-br from-emerald-500/5 to-green-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl">
        </div>

        <div class="relative icon-glow">
          <div
            class="w-20 h-20 rounded-2xl bg-gradient-to-br from-emerald-500 to-green-600 flex items-center justify-center mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 overflow-hidden">
            <img src="{{ asset('src/assets/img/ui-icons/cashier.png') }}" alt="Supplier"
              class="w-14 h-14 object-contain drop-shadow-lg">
          </div>
        </div>

        <h3 class="font-bold text-xl text-slate-900 mb-2 group-hover:text-emerald-700 transition-colors relative">مورد
        </h3>
        <p class="text-sm text-slate-500 mb-5 leading-relaxed relative">إدارة المنتجات والطلبات</p>

        <span
          class="mt-auto text-emerald-600 text-sm font-bold flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0 relative">
          دخول الآن
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
            class="rotate-180 group-hover:-translate-x-1 transition-transform">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
        </span>
      </a>

      <!-- Contractor -->
      <a href="{{ route('Gaza.login-Contractor') }}"
        class="glass-card shine-effect rounded-3xl hover:-translate-y-3 transition-all duration-500 p-8 group flex flex-col items-center text-center h-full relative">
        <div
          class="absolute inset-0 bg-gradient-to-br from-amber-500/5 to-orange-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-500 rounded-3xl">
        </div>

        <div class="relative icon-glow">
          <div
            class="w-20 h-20 rounded-2xl bg-gradient-to-br from-amber-500 to-orange-600 flex items-center justify-center mb-5 text-white shadow-lg group-hover:scale-110 group-hover:rotate-6 transition-all duration-500 overflow-hidden">
            <img src="{{ asset('src/assets/img/ui-icons/contractor.png') }}" alt="Contractor"
              class="w-14 h-14 object-contain drop-shadow-lg">
          </div>
        </div>

        <h3 class="font-bold text-xl text-slate-900 mb-2 group-hover:text-amber-700 transition-colors relative">مقاول
        </h3>
        <p class="text-sm text-slate-500 mb-5 leading-relaxed relative">تنفيذ المشاريع وتحديث الإنجاز</p>

        <span
          class="mt-auto text-amber-600 text-sm font-bold flex items-center gap-2 opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-2 group-hover:translate-y-0 relative">
          دخول الآن
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"
            class="rotate-180 group-hover:-translate-x-1 transition-transform">
            <path d="M5 12h14" />
            <path d="m12 5 7 7-7 7" />
          </svg>
        </span>
      </a>
    </div>

    <div class="text-center space-y-6">
      <a href="{{ Route('Gaza.index') }}"
        class="inline-flex items-center px-6 py-3 rounded-xl bg-white/70 backdrop-blur-sm border border-white/80 hover:bg-white hover:shadow-xl text-slate-700 hover:text-emerald-600 transition-all duration-300 gap-2 group">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
          class="group-hover:-translate-x-1 transition-transform">
          <path d="m12 19-7-7 7-7" />
          <path d="M19 12H5" />
        </svg>
        <span class="font-semibold">العودة إلى الصفحة الرئيسية</span>
      </a>

      <div class="flex items-center justify-center gap-3 text-slate-400 text-xs">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-slate-300"></div>
        <span>&copy; 2026 منصة إعمار غزة. جميع الحقوق محفوظة.</span>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-slate-300"></div>
      </div>
    </div>
  </div>
  <!-- ========================================== -->
  <!-- Main JavaScript File                       -->
  <!-- ========================================== -->
<script src="{{ asset('js/javascript.js') }}"></script>
</body>

</html>
