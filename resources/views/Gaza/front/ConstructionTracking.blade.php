@extends('Gaza.front.parent')

@section('title','about')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/ConstructionTracking.css') }}">
@endsection

@section('content')
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
                            <a href="{{ route('Gaza.ConstructionTracking') }}"
                                class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-semibold transition-all bg-white text-green-600 shadow-sm border border-neutral-200">
                                مراحل البناء</a>

                            <a href="{{ route('Gaza.budget') }}"
                                class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-medium transition-all text-neutral-600 hover:bg-white hover:text-green-600 hover:shadow-sm">
                                تتبع الميزانية</a>

                            <a href="{{ route('Gaza.documentation') }}"
                                class="inline-flex items-center justify-center rounded-lg px-2 py-1 text-sm font-medium transition-all text-neutral-600 hover:bg-white hover:text-green-600 hover:shadow-sm">
                                التوثيق المرئي </a>
                        </div>
                    </div>

                    <div id="content-phases" class="tabs-content active space-y-4 pt-4">
                        <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6">
                            <div class="flex items-start gap-4">
                                <div class="mt-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="text-green-600 w-6 h-6">
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
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="text-neutral-300 w-6 h-6">
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
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="text-neutral-300 w-6 h-6">
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

                    <div id="content-budget" class="tabs-content pt-4">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                            <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6">
                                <div class="flex items-center gap-3 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-5 h-5 text-green-500">
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    <span class="text-sm text-neutral-500">المتبقي</span>
                                </div>
                                <div class="text-2xl font-bold text-green-600">$31,500</div>
                            </div>
                            <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6">
                                <div class="flex items-center gap-3 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-5 h-5 text-red-500">
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    <span class="text-sm text-neutral-500">المصروف</span>
                                </div>
                                <div class="text-2xl font-bold text-red-600">$68,500</div>
                            </div>
                            <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6">
                                <div class="flex items-center gap-3 mb-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="w-5 h-5 text-neutral-500">
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    <span class="text-sm text-neutral-500">الميزانية الكلية</span>
                                </div>
                                <div class="text-2xl font-bold">$100,000</div>
                            </div>
                        </div>

                        <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6">
                            <h3 class="font-bold text-lg mb-6">توزيع المصروفات</h3>
                            <div class="mb-6">
                                <div class="h-8 flex rounded-lg overflow-hidden">
                                    <div class="bg-blue-600" style="width: 51%;"></div>
                                    <div class="bg-green-600" style="width: 32%;"></div>
                                    <div class="bg-yellow-600" style="width: 14%;"></div>
                                    <div class="bg-neutral-600" style="width: 3%;"></div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between py-3 border-b last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded bg-blue-600"></div><span
                                            class="font-medium">البناء</span>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold">$35,000</div>
                                        <div class="text-xs text-neutral-500">51%</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded bg-green-600"></div><span
                                            class="font-medium">المواد</span>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold">$22,000</div>
                                        <div class="text-xs text-neutral-500">32%</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded bg-yellow-600"></div><span
                                            class="font-medium">العمالة</span>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold">$9,500</div>
                                        <div class="text-xs text-neutral-500">14%</div>
                                    </div>
                                </div>
                                <div class="flex items-center justify-between py-3 border-b last:border-0">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded bg-neutral-600"></div><span
                                            class="font-medium">أخرى</span>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold">$2,000</div>
                                        <div class="text-xs text-neutral-500">3%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="content-documentation" class="tabs-content pt-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 gap-4">
                            <div class="relative aspect-video rounded-xl overflow-hidden border">
                                <!-- REPLACED -->
                                <img src="{{ asset('../src/assets/img/projects/construction-foundations.webp') }}"
                                    alt="اكتمال الأساسات" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-black/50 p-2 text-white text-xs">اكتمال
                                    الأساسات - ١٥ ديسمبر</div>
                            </div>
                            <div class="relative aspect-video rounded-xl overflow-hidden border">
                                <!-- REPLACED -->
                                <img src="{{ asset('../src/assets/img/projects/construction-progress-1.webp') }}"
                                    alt="أعمال الأساسات قيد التنفيذ" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-black/50 p-2 text-white text-xs">أعمال
                                    الأساسات قيد التنفيذ</div>
                            </div>
                            <div class="relative aspect-video rounded-xl overflow-hidden border">
                                <!-- REPLACED -->
                                <img src="{{ asset('../src/assets/img/projects/construction-progress-2.webp') }}"
                                    alt="الطابق الثاني قيد التنفيذ" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-black/50 p-2 text-white text-xs">الطابق
                                    الثاني قيد التنفيذ</div>
                            </div>
                            <div class="relative aspect-video rounded-xl overflow-hidden border">
                                <!-- REPLACED -->
                                <img src="{{ asset('../src/assets/img/projects/construction-progress-3.webp') }}"
                                    alt="بناء الطابق الأول" class="w-full h-full object-cover">
                                <div class="absolute bottom-0 left-0 right-0 bg-black/50 p-2 text-white text-xs">بناء
                                    الطابق الأول</div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>

 @endsection


@section('script')
    <script src="{{ asset('js/ConstructionTracking.js') }}"></script>

@endsection

