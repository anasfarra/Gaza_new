@extends('Gaza.donor.parent-donor-control')

@section('title','reports')

@section('css')

@endsection

@section('content')

      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
            <main class="flex-grow">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-3xl font-bold">تقارير المنصة</h1>
                        <div class="flex gap-2">
                            <button
                                class="px-4 py-2 border rounded-lg text-sm hover:bg-neutral-50 transition-colors">تصدير
                                PDF</button>
                            <button
                                class="px-4 py-2 border rounded-lg text-sm hover:bg-neutral-50 transition-colors">تصدير
                                Excel</button>
                        </div>
                    </div>

                    <!-- Summary Stats -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <div class="text-sm text-neutral-500 mb-1">إجمالي التبرعات</div>
                            <div class="text-2xl font-bold text-green-600">$4.2M</div>
                        </div>
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <div class="text-sm text-neutral-500 mb-1">المشاريع المكتملة</div>
                            <div class="text-2xl font-bold">156</div>
                        </div>
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <div class="text-sm text-neutral-500 mb-1">العائلات المستفيدة</div>
                            <div class="text-2xl font-bold">1,240</div>
                        </div>
                        <div class="bg-white p-6 rounded-xl border shadow-sm">
                            <div class="text-sm text-neutral-500 mb-1">نسبة الإنجاز العام</div>
                            <div class="text-2xl font-bold text-blue-600">65%</div>
                        </div>
                    </div>

                    <!-- Charts Area Placeholder -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white p-6 rounded-xl border shadow-sm h-64 flex items-center justify-center">
                            <div class="text-center text-neutral-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="mx-auto mb-2">
                                    <path d="M3 3v18h18" />
                                    <path d="M18 17V9" />
                                    <path d="M13 17V5" />
                                    <path d="M8 17v-3" />
                                </svg>
                                <span>مخطط التبرعات الشهرية (قريباً)</span>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl border shadow-sm h-64 flex items-center justify-center">
                            <div class="text-center text-neutral-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="mx-auto mb-2">
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                    <path d="M22 12A10 10 0 0 0 12 2v10z" />
                                </svg>
                                <span>توزيع المشاريع حسب المنطقة (قريباً)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Reports Table -->
                    <div class="bg-white border rounded-xl overflow-hidden shadow-sm">
                        <div class="px-6 py-4 border-b bg-neutral-50/50">
                            <h3 class="font-bold">أحدث التقارير الشهرية</h3>
                        </div>
                        <div class="divide-y">
                            <!-- Report Item 1 -->
                            <div class="p-4 hover:bg-neutral-50 flex items-center justify-between transition-colors">
                                <div class="flex items-center gap-4">
                                    <div class="bg-red-100 text-red-600 p-2 rounded-lg">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">تقرير الأداء المالي - فبراير 2026</p>
                                        <p class="text-xs text-neutral-500">تم الرفع بواسطة: الإدارة المالية</p>
                                    </div>
                                </div>
                                <button class="text-sm text-blue-600 font-medium hover:underline">تحميل</button>
                            </div>
                            <!-- Report Item 2 -->
                            <div class="p-4 hover:bg-neutral-50 flex items-center justify-between transition-colors">
                                <div class="flex items-center gap-4">
                                    <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                            <polyline points="14 2 14 8 20 8"></polyline>
                                            <line x1="16" y1="13" x2="8" y2="13"></line>
                                            <line x1="16" y1="17" x2="8" y2="17"></line>
                                            <polyline points="10 9 9 9 8 9"></polyline>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="font-bold text-sm">تقرير تقدم مشاريع الشمال - يناير 2026</p>
                                        <p class="text-xs text-neutral-500">تم الرفع بواسطة: قسم المشاريع</p>
                                    </div>
                                </div>
                                <button class="text-sm text-blue-600 font-medium hover:underline">تحميل</button>
                            </div>
                        </div>
                    </div>
                </div>
            </main>

@endsection


@section('script')

@endsection
