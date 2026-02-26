@extends('Gaza.beneficiary.parent-beneficiaries')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/Order_status.css') }}">
@endsection

@section('content')
      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
            <main class="pt-20">
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                    <div class="mb-8">
                        <h1 class="text-3xl font-bold mb-2">بوابة المستفيدين</h1>
                        <p class="text-neutral-600">قدم طلب تعويض أو تتبع حالة طلباتك الحالية</p>
                    </div>

                    <div class="flex gap-3 mb-6">
                        <a href="{{ route('Gaza.beneficiaries') }}"
                            class="inline-flex items-center justify-center bg-white border border-neutral-200 text-neutral-700 rounded-md text-sm font-medium h-9 px-4 hover:bg-neutral-50 transition-colors">
                            تقديم طلب
                        </a>
                        <a href="{{ route('Gaza.beneficiaries-order-status') }}"
                            class="inline-flex items-center justify-center bg-primary text-white rounded-md text-sm font-medium h-9 px-4 hover:bg-green-700 transition-colors">
                            حالة الطلب
                        </a>
                    </div>

                    <div class="space-y-6">
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                                <div class="flex items-start gap-4">
                                    <div class="text-green-600 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" x2="8" y1="13" y2="13"></line>
                                            <line x1="16" x2="8" y1="17" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-3 mb-1">
                                            <h3 class="font-bold text-lg">طلب تعويض منزل سكني</h3>
                                            <span
                                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-blue-100 text-blue-800">قيد
                                                المراجعة</span>
                                        </div>
                                        <p class="text-sm text-neutral-500">رقم الطلب: #REQ-2024-0892</p>
                                        <p class="text-sm text-neutral-500 mt-1">تاريخ التقديم: 15 مارس 2024</p>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-9 rounded-md px-3">عرض
                                        التفاصيل</button>
                                </div>
                            </div>
                            <div class="mt-6 pt-6 border-t">
                                <div class="relative">
                                    <div class="absolute top-1/2 left-0 w-full h-1 bg-neutral-200 -translate-y-1/2">
                                    </div>
                                    <div class="absolute top-1/2 right-0 w-1/3 h-1 bg-green-600 -translate-y-1/2"></div>
                                    <div class="relative flex justify-between">
                                        <div class="flex flex-col items-center gap-2">
                                            <div
                                                class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center z-10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="20 6 9 17 4 12"></polyline>
                                                </svg>
                                            </div>
                                            <span class="text-xs font-medium text-green-600">تم التقديم</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-2">
                                            <div
                                                class="w-8 h-8 rounded-full bg-green-600 text-white flex items-center justify-center z-10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <polyline points="12 6 12 12 16 14"></polyline>
                                                </svg>
                                            </div>
                                            <span class="text-xs font-medium text-green-600">قيد المراجعة</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-2">
                                            <div
                                                class="w-8 h-8 rounded-full bg-neutral-200 text-neutral-500 flex items-center justify-center z-10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                                </svg>
                                            </div>
                                            <span class="text-xs font-medium text-neutral-500">التقييم الميداني</span>
                                        </div>
                                        <div class="flex flex-col items-center gap-2">
                                            <div
                                                class="w-8 h-8 rounded-full bg-neutral-200 text-neutral-500 flex items-center justify-center z-10">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <path
                                                        d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <span class="text-xs font-medium text-neutral-500">الموافقة</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
@endsection
