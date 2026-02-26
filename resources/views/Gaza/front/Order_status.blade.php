@extends('Gaza.front.parent')

@section('title','about')

@section('css')

@endsection

@section('content')

      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
            <main>
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
                        <a href="{{ route('Gaza.Order_status') }}"
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
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-3 mb-2">
                                            <h3 class="font-bold text-lg">منزل سكني - 3 طوابق</h3>
                                            <span
                                                class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-md font-medium">موافق
                                                عليه</span>
                                        </div>
                                        <div class="text-sm text-neutral-500 space-y-1">
                                            <p>رقم الطلب: <span
                                                    class="font-mono font-semibold text-neutral-700">APP-2026-001</span>
                                            </p>
                                            <p>تاريخ التقديم: ١٥ يناير ٢٠٢٦</p>
                                            <p>التكلفة المقدرة: $95,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="bg-white border text-sm px-4 py-2 rounded-md hover:bg-neutral-50 transition-all">عرض
                                        التفاصيل</button>
                                    <button
                                        class="bg-primary text-white text-sm px-4 py-2 rounded-md hover:bg-green-700 transition-all">تتبع
                                        المشروع</button>
                                </div>
                            </div>
                        </div>

                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4">
                                <div class="flex items-start gap-4">
                                    <div class="text-yellow-600 mt-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10"></circle>
                                            <polyline points="12 6 12 12 16 14"></polyline>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-3 mb-2">
                                            <h3 class="font-bold text-lg">محل تجاري</h3>
                                            <span
                                                class="bg-yellow-100 text-yellow-700 text-xs px-2 py-1 rounded-md font-medium">قيد
                                                الانتظار</span>
                                        </div>
                                        <div class="text-sm text-neutral-500 space-y-1">
                                            <p>رقم الطلب: <span
                                                    class="font-mono font-semibold text-neutral-700">APP-2026-002</span>
                                            </p>
                                            <p>تاريخ التقديم: ٢٨ يناير ٢٠٢٦</p>
                                            <p>التكلفة المقدرة: $35,000</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-2">
                                    <button
                                        class="bg-white border text-sm px-4 py-2 rounded-md hover:bg-neutral-50 transition-all">عرض
                                        التفاصيل</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

@endsection


@section('script')

@endsection

