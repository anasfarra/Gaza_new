@extends('Gaza.admin.parent-dashboard')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/budget.css') }}">
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
          <span class="bg-slate-100 text-slate-600 text-xs px-2 py-1 rounded-md font-mono">PRJ-2026-001</span>
        </div>
        <p class="text-neutral-600 flex items-center gap-1">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="text-neutral-400">
            <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
            <circle cx="12" cy="10" r="3"></circle>
          </svg>
          غزة - حي الشجاعية
        </p>
      </div>

      <div class="bg-white rounded-xl border p-6 shadow-sm mb-8">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4">
          <div>
            <h3 class="font-bold text-lg mb-1">تقدم المشروع</h3>
            <p class="text-sm text-neutral-500">البداية: ١ نوفمبر ٢٠٢٥</p>
            <p class="text-sm text-neutral-500">الإنجاز المتوقع: ١٥ مايو ٢٠٢٦</p>
          </div>
          <div class="text-center">
            <div class="text-4xl font-bold text-green-600 mb-1">75%</div>
            <div class="text-sm text-neutral-500 font-semibold">مكتمل</div>
          </div>
        </div>
        <div class="bg-neutral-100 relative w-full overflow-hidden rounded-full h-3">
          <div class="bg-green-600 h-full transition-all" style="width: 75%;"></div>
        </div>
      </div>

      <div class="flex flex-col gap-2 mb-8">
        <div class="bg-neutral-100 h-12 items-center rounded-xl p-1.5 grid w-full grid-cols-3 gap-2">
          <a href="{{ route('Gaza.dashboard-construction-tracking') }}"
            class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-medium transition-all text-neutral-600 hover:bg-white hover:text-green-600 hover:shadow-sm">
            مراحل البناء</a>

          <a href="{{ route('Gaza.dashboard-budget') }}"
            class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-semibold transition-all bg-white text-green-600 shadow-sm border border-neutral-200">
            تتبع الميزانية</a>

          <a href="{{ route('Gaza.dashboard-documentation') }}"
            class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-medium transition-all text-neutral-600 hover:bg-white hover:text-green-600 hover:shadow-sm">
            التوثيق المرئي </a>
        </div>
      </div>

      <div class="space-y-6 animate-in fade-in duration-500">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
          <div class="bg-white border rounded-xl p-6 shadow-sm">
            <div class="flex items-center gap-3 mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="text-neutral-400">
                <line x1="12" x2="12" y1="2" y2="22"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
              <span class="text-sm text-neutral-500">الميزانية الكلية</span>
            </div>
            <div class="text-2xl font-bold">$100,000</div>
          </div>
          <div class="bg-white border rounded-xl p-6 shadow-sm border-r-4 border-r-red-500">
            <div class="flex items-center gap-3 mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="text-red-500">
                <line x1="12" x2="12" y1="2" y2="22"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
              <span class="text-sm text-neutral-500">المصروف</span>
            </div>
            <div class="text-2xl font-bold text-red-600">$68,500</div>
          </div>
          <div class="bg-white border rounded-xl p-6 shadow-sm border-r-4 border-r-green-500">
            <div class="flex items-center gap-3 mb-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="text-green-500">
                <line x1="12" x2="12" y1="2" y2="22"></line>
                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
              </svg>
              <span class="text-sm text-neutral-500">المتبقي</span>
            </div>
            <div class="text-2xl font-bold text-green-600">$31,500</div>
          </div>
        </div>

        <div class="bg-white border rounded-xl p-6 shadow-sm">
          <h3 class="font-bold text-lg mb-6">توزيع المصروفات</h3>
          <div class="mb-8">
            <div class="h-8 flex rounded-lg overflow-hidden border border-neutral-100">
              <div class="bg-blue-600" style="width: 51%;" title="البناء"></div>
              <div class="bg-green-600" style="width: 32%;" title="المواد"></div>
              <div class="bg-yellow-500" style="width: 14%;" title="العمالة"></div>
              <div class="bg-neutral-400" style="width: 3%;" title="أخرى"></div>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12">
            <div class="flex items-center justify-between py-3 border-b border-neutral-50">
              <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-blue-600"></div>
                <span class="font-medium">البناء والأساسات</span>
              </div>
              <div class="text-left font-bold">$35,000 <span class="text-xs text-neutral-400 ml-1">51%</span></div>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-neutral-50">
              <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-green-600"></div>
                <span class="font-medium">مواد البناء</span>
              </div>
              <div class="text-left font-bold">$22,000 <span class="text-xs text-neutral-400 ml-1">32%</span></div>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-neutral-50">
              <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                <span class="font-medium">العمالة والمقاولات</span>
              </div>
              <div class="text-left font-bold">$9,500 <span class="text-xs text-neutral-400 ml-1">14%</span></div>
            </div>
            <div class="flex items-center justify-between py-3 border-b border-neutral-50">
              <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-neutral-400"></div>
                <span class="font-medium">مصاريف إدارية وأخرى</span>
              </div>
              <div class="text-left font-bold">$2,000 <span class="text-xs text-neutral-400 ml-1">3%</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/budget.js') }}"></script>
@endsection
