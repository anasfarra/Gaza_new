@extends('Gaza.admin.parent-dashboard')

@section('title','dashboard-construction-tracking')

@section('css')
  <link rel="stylesheet" href="{{ asset('css/ConstructionTracking.css') }}">
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
            class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 text-xs font-medium bg-neutral-100">PRJ-2026-001</span>
        </div>
        <p class="text-neutral-600">غزة - حي الشجاعية</p>
      </div>

      <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 mb-8 shadow-sm">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4">
          <div>
            <h3 class="font-bold text-lg mb-1">تقدم المشروع</h3>
            <p class="text-sm text-neutral-500">البداية: ١ نوفمبر ٢٠٢٥</p>
            <p class="text-sm text-neutral-500">الإنجاز المتوقع: ١٥ مايو ٢٠٢٦</p>
          </div>
          <div class="text-center">
            <div class="text-4xl font-bold text-green-600 mb-1">75%</div>
            <div class="text-sm text-neutral-500">مكتمل</div>
          </div>
        </div>
        <div class="bg-primary/20 relative w-full overflow-hidden rounded-full h-3">
          <div class="bg-primary h-full transition-all" style="width: 75%;"></div>
        </div>
      </div>

      <div class="flex flex-col gap-2 mb-8">
        <div class="bg-neutral-100 h-12 items-center rounded-xl p-1.5 grid w-full grid-cols-3 gap-2">
          <a href="{{ route('Gaza.dashboard-construction-tracking') }}"
            class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-semibold transition-all bg-white text-green-600 shadow-sm border border-neutral-200">
            مراحل البناء</a>

          <a href="{{ route('Gaza.dashboard-budget') }}"
            class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-medium transition-all text-neutral-600 hover:bg-white hover:text-green-600 hover:shadow-sm">
            تتبع الميزانية</a>

          <a href="{{ route('Gaza.dashboard-documentation') }}"
            class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-medium transition-all text-neutral-600 hover:bg-white hover:text-green-600 hover:shadow-sm">
            التوثيق المرئي </a>
        </div>
      </div>

      <div id="content-phases" class="tabs-content active space-y-4 pt-4">
        <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6">
          <div class="flex items-start gap-4">
            <div class="mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="text-green-600 w-6 h-6">
                <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                <path d="m9 11 3 3L22 4"></path>
              </svg>
            </div>
            <div class="flex-1">
              <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-3">
                <h3 class="font-bold text-lg">الأساسات</h3>
                <span
                  class="inline-flex items-center px-2 py-0.5 rounded-md text-xs font-medium bg-green-100 text-green-700">مكتمل</span>
              </div>
              <div class="text-sm text-neutral-500 mb-3">١ نوفمبر - ١٥ ديسمبر</div>
              <div class="space-y-2">
                <div class="flex justify-between text-sm"><span>التقدم</span><span
                    class="font-semibold">100%</span></div>
                <div class="bg-primary/20 h-2 w-full rounded-full overflow-hidden">
                  <div class="bg-primary h-full" style="width: 100%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6">
          <div class="flex items-start gap-4">
            <div class="mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="text-neutral-300 w-6 h-6">
                <circle cx="12" cy="12" r="10"></circle>
              </svg>
            </div>
            <div class="flex-1">
              <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-3">
                <h3 class="font-bold text-lg">الهيكل</h3>
                <span
                  class="inline-flex items-center px-2 py-0.5 rounded-md text-xs font-medium bg-blue-100 text-blue-700">قيد
                  التنفيذ</span>
              </div>
              <div class="text-sm text-neutral-500 mb-3">١٦ ديسمبر - ٢٠ مارس</div>
              <div class="space-y-2">
                <div class="flex justify-between text-sm"><span>التقدم</span><span
                    class="font-semibold">75%</span></div>
                <div class="bg-primary/20 h-2 w-full rounded-full overflow-hidden">
                  <div class="bg-primary h-full" style="width: 75%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6">
          <div class="flex items-start gap-4">
            <div class="mt-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="text-neutral-300 w-6 h-6">
                <circle cx="12" cy="12" r="10"></circle>
              </svg>
            </div>
            <div class="flex-1">
              <div class="flex flex-col md:flex-row md:items-center justify-between gap-2 mb-3">
                <h3 class="font-bold text-lg">التشطيبات</h3>
                <span
                  class="inline-flex items-center px-2 py-0.5 rounded-md text-xs font-medium bg-neutral-100 text-neutral-700">قيد
                  الانتظار</span>
              </div>
              <div class="text-sm text-neutral-500 mb-3">٢١ مارس - ١٥ مايو</div>
              <div class="space-y-2">
                <div class="flex justify-between text-sm"><span>التقدم</span><span
                    class="font-semibold">0%</span></div>
                <div class="bg-primary/20 h-2 w-full rounded-full overflow-hidden">
                  <div class="bg-primary h-full" style="width: 0%;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/ConstructionTracking.js') }}"></script>
  <script src="{{ asset('js/ConstructionTracking_tabs.js') }}"></script>
@endsection
