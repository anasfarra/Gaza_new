@extends('Gaza.admin.parent-dashboard')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/documentation.css') }}">
@endsection

@section('content1')
  <!-- ========================================== -->
  <!-- Main Content Area                          -->
  <!-- ========================================== -->
  <main>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="mb-8">
        <div class="flex items-center gap-3 mb-2">
          <h1 class="text-3xl font-bold">منزل عائلة أحمد - الشجاعية</h1>
          <span
            class="bg-slate-100 text-slate-600 text-xs px-2 py-0.5 rounded border border-slate-200 font-mono">PRJ-2026-001</span>
        </div>
        <p class="text-neutral-600">غزة - حي الشجاعية</p>
      </div>

      <div class="bg-card rounded-xl border p-6 mb-8 shadow-sm">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4">
          <div>
            <h3 class="font-bold text-lg mb-1 text-neutral-800">تقدم المشروع</h3>
            <p class="text-sm text-neutral-500">البداية: ١ نوفمبر ٢٠٢٥ | الإنجاز المتوقع: ١٥ مايو
              ٢٠٢٦</p>
          </div>
          <div class="text-center">
            <div class="text-4xl font-bold text-green-600">75%</div>
            <div class="text-sm text-neutral-500">مكتمل</div>
          </div>
        </div>
        <div class="bg-green-100 relative w-full overflow-hidden rounded-full h-3">
          <div class="bg-green-600 h-full transition-all" style="width: 75%;"></div>
        </div>
      </div>

      <div class="bg-neutral-200/50 rounded-xl p-1 grid w-full grid-cols-3 mb-8">
        <a href="{{ route('Gaza.dashboard-construction-tracking') }}"
          class="flex items-center justify-center py-2 text-sm font-medium rounded-lg text-neutral-600 hover:bg-white/50 transition-all">مراحل
          البناء</a>
        <a href="{{ route('Gaza.dashboard-budget') }}"
          class="flex items-center justify-center py-2 text-sm font-medium rounded-lg text-neutral-600 hover:bg-white/50 transition-all">تتبع
          الميزانية</a>
        <a href="{{ route('Gaza.dashboard-documentation') }}"
          class="flex items-center justify-center py-2 text-sm font-medium rounded-lg bg-white text-neutral-900 shadow-sm transition-all border border-neutral-200">التوثيق
          المرئي</a>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-card rounded-xl border overflow-hidden hover:shadow-lg transition-shadow">
          <div class="relative h-64">
            <img src="{{ asset('src/assets/img/projects/construction-foundations.webp') }}" alt="أعمال الأساسات"
              class="w-full h-full object-cover">
            <span
              class="absolute top-3 right-3 bg-white/90 text-neutral-900 px-2 py-1 rounded text-xs font-bold">الأساسات</span>
          </div>
          <div class="p-4">
            <p class="text-sm font-bold text-neutral-800 mb-1">أعمال الأساسات قيد التنفيذ</p>
            <p class="text-xs text-neutral-500">١٠ ديسمبر ٢٠٢٥</p>
          </div>
        </div>

        <div class="bg-card rounded-xl border overflow-hidden hover:shadow-lg transition-shadow">
          <div class="relative h-64">
            <img src="{{ asset('src/assets/img/projects/construction-pillars.webp') }}" alt="اكتمال الأساسات"
              class="w-full h-full object-cover">
            <span
              class="absolute top-3 right-3 bg-white/90 text-neutral-900 px-2 py-1 rounded text-xs font-bold">الأساسات</span>
          </div>
          <div class="p-4">
            <p class="text-sm font-bold text-neutral-800 mb-1">اكتمال الأساسات وصب الخرسانة</p>
            <p class="text-xs text-neutral-500">١٥ ديسمبر ٢٠٢٥</p>
          </div>
        </div>

        <div class="bg-card rounded-xl border overflow-hidden hover:shadow-lg transition-shadow">
          <div class="relative h-64">
            <img src="{{ asset('src/assets/img/projects/construction-first-floor.webp') }}" alt="بناء الطابق الأول"
              class="w-full h-full object-cover">
            <span
              class="absolute top-3 right-3 bg-white/90 text-neutral-900 px-2 py-1 rounded text-xs font-bold">الهيكل</span>
          </div>
          <div class="p-4">
            <p class="text-sm font-bold text-neutral-800 mb-1">بدء بناء أعمدة الطابق الأول</p>
            <p class="text-xs text-neutral-500">٢٠ يناير ٢٠٢٦</p>
          </div>
        </div>

        <div class="bg-card rounded-xl border overflow-hidden hover:shadow-lg transition-shadow">
          <div class="relative h-64">
            <img src="{{ asset('src/assets/img/projects/construction-second-floor.webp') }}" alt="الطابق الثاني"
              class="w-full h-full object-cover">
            <span
              class="absolute top-3 right-3 bg-white/90 text-neutral-900 px-2 py-1 rounded text-xs font-bold">الهيكل</span>
          </div>
          <div class="p-4">
            <p class="text-sm font-bold text-neutral-800 mb-1">الطابق الثاني قيد التنفيذ</p>
            <p class="text-xs text-neutral-500">٨ فبراير ٢٠٢٦</p>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/documentation.js') }}"></script>
@endsection
