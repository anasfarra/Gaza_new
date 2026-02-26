@extends('Gaza.donor.parent-donor-control')

@section('title','donor-control-panel')

@section('content')
    <main>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 text-right">
            <div class="mb-8">
                <h1 class="text-3xl font-bold mb-2">لوحة تحكم المانح</h1>
                <p class="text-neutral-600">تتبع مساهماتك وتأثيرك في إعادة الإعمار</p>
            </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <div class="flex items-start justify-between mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <line x1="12" x2="12" y1="2" y2="22"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                <span class="bg-green-50 text-green-700 text-xs px-2 py-1 rounded font-bold">+12%</span>
                            </div>
                            <div class="text-3xl font-bold mb-1 font-mono text-left" dir="ltr">$12,450</div>
                            <div class="text-sm text-neutral-500">إجمالي التبرعات</div>
                        </div>

                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <div class="flex items-start justify-between mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="#dc2626" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                    </path>
                                </svg>
                                <span class="bg-blue-50 text-blue-700 text-xs px-2 py-1 rounded font-bold">نشط</span>
                            </div>
                            <div class="text-3xl font-bold mb-1">8</div>
                            <div class="text-sm text-neutral-500">المشاريع المدعومة</div>
                        </div>

                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <div class="flex items-start justify-between mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                                <span
                                    class="bg-slate-50 text-slate-700 text-xs px-2 py-1 rounded font-bold">ممتاز</span>
                            </div>
                            <div class="text-3xl font-bold mb-1">94/100</div>
                            <div class="text-sm text-neutral-500">مؤشر التأثير</div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="bg-white border rounded-xl p-6 lg:col-span-2 shadow-sm">
                            <h3 class="font-bold text-lg mb-6">توزيع الأموال</h3>
                            <div class="mb-6">
                                <div class="h-8 flex rounded-lg overflow-hidden border">
                                    <div class="bg-blue-600 relative group cursor-pointer transition-all hover:opacity-80"
                                        style="width: 45%;">
                                        <div
                                            class="absolute inset-0 flex items-center justify-center text-white text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                                            45%</div>
                                    </div>
                                    <div class="bg-green-600 relative group cursor-pointer transition-all hover:opacity-80"
                                        style="width: 30%;">
                                        <div
                                            class="absolute inset-0 flex items-center justify-center text-white text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                                            30%</div>
                                    </div>
                                    <div class="bg-yellow-600 relative group cursor-pointer transition-all hover:opacity-80"
                                        style="width: 20%;">
                                        <div
                                            class="absolute inset-0 flex items-center justify-center text-white text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                                            20%</div>
                                    </div>
                                    <div class="bg-neutral-600 relative group cursor-pointer transition-all hover:opacity-80"
                                        style="width: 5%;">
                                        <div
                                            class="absolute inset-0 flex items-center justify-center text-white text-xs font-semibold opacity-0 group-hover:opacity-100 transition-opacity">
                                            5%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded bg-blue-600"></div>
                                        <span class="font-medium">أعمال البناء والترميم</span>
                                    </div>
                                    <div class="text-left"><span class="font-bold font-mono">$5,602</span> <span
                                            class="text-xs text-neutral-500">45%</span></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded bg-green-600"></div>
                                        <span class="font-medium">توفير مواد البناء</span>
                                    </div>
                                    <div class="text-left"><span class="font-bold font-mono">$3,735</span> <span
                                            class="text-xs text-neutral-500">30%</span></div>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-3">
                                        <div class="w-4 h-4 rounded bg-yellow-500"></div>
                                        <span class="font-medium">أجور العمالة الماهرة</span>
                                    </div>
                                    <div class="text-left"><span class="font-bold font-mono">$2,490</span> <span
                                            class="text-xs text-neutral-500">20%</span></div>
                                </div>
                            </div>
                            <button class="nav-link-btn" data-href="{{ route('Gaza.reports') }}"
                                class="w-full mt-8 py-2 border border-neutral-200 rounded-lg text-sm font-semibold hover:bg-neutral-50 transition-all">عرض
                                تقرير مفصل</button>
                        </div>

                        <div class="bg-white border rounded-xl p-6 shadow-sm">
                            <h3 class="font-bold text-lg mb-4">إجراءات سريعة</h3>
                            <div class="space-y-3">
                                <button onclick="window.location.href='{{ route('Gaza.donate') }}'"
                                    class="w-full flex items-center gap-3 px-4 py-3 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <line x1="12" x2="12" y1="2" y2="22"></line>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                    </svg>
                                    تبرع جديد
                                </button>
                                <button onclick="window.location.href='{{ route('Gaza.projects') }}'"
                                    class="w-full flex items-center gap-3 px-4 py-3 border border-neutral-200 rounded-lg hover:bg-neutral-50 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>
                                    استعراض المشاريع
                                </button>
                                <button onclick="window.location.href='{{ route('Gaza.reports') }}'"

                                    class="w-full flex items-center gap-3 px-4 py-3 border border-neutral-200 rounded-lg hover:bg-neutral-50 transition-all">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                        <polyline points="16 7 22 7 22 13"></polyline>
                                    </svg>
                                    تقرير التأثير
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <h3 class="font-bold text-xl mb-6">آخر التحديثات للمشاريع المدعومة</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div
                                class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all group">
                                <div class="relative h-48 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1590650153855-d9e808231d41?w=400&q=80"
                                        alt="مشروع"
                                        class="w-full h-full object-cover transition-transform group-hover:scale-110">
                                    <div
                                        class="absolute top-3 right-3 bg-white/90 px-3 py-1 rounded-full text-xs font-bold text-green-700 shadow-sm">
                                        75% مكتمل</div>
                                </div>
                                <div class="p-5">
                                    <h4 class="font-bold mb-2">منزل عائلة أحمد - الشجاعية</h4>
                                    <p class="text-sm text-neutral-600 mb-4 italic">اكتمال مرحلة الأساسات وبدء أعمال
                                        الجدران.</p>
                                    <div class="flex items-center justify-between text-xs text-neutral-400 mb-4">
                                        <span>٨ فبراير ٢٠٢٦</span>
                                        <span class="text-green-600 font-semibold">نشط</span>
                                    </div>
                                    <div class="w-full bg-neutral-100 rounded-full h-2 mb-4">
                                        <div class="bg-green-600 h-2 rounded-full" style="width: 75%;"></div>
                                    </div>
                                    <button onclick="window.location.href='{{ route('Gaza.donor-projects') }}'"
                                        class="w-full py-2 bg-neutral-50 border border-neutral-200 rounded-lg text-xs font-bold hover:bg-green-600 hover:text-white transition-all">عرض
                                        التفاصيل</button>
                                </div>
                            </div>

                            <div
                                class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all group">
                                <div class="relative h-48 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1587293852726-70cdb56c2866?w=400&q=80"
                                        alt="مشروع"
                                        class="w-full h-full object-cover transition-transform group-hover:scale-110">
                                    <div
                                        class="absolute top-3 right-3 bg-white/90 px-3 py-1 rounded-full text-xs font-bold text-blue-700 shadow-sm">
                                        45% مكتمل</div>
                                </div>
                                <div class="p-5">
                                    <h4 class="font-bold mb-2">مركز صحي الرفح - الشمال</h4>
                                    <p class="text-sm text-neutral-600 mb-4 italic">تجهيز الموقع والبدء بأعمال القواعد
                                        الخرسانية.</p>
                                    <div class="flex items-center justify-between text-xs text-neutral-400 mb-4">
                                        <span>٧ فبراير ٢٠٢٦</span>
                                        <span class="text-blue-600 font-semibold">في الموعد</span>
                                    </div>
                                    <div class="w-full bg-neutral-100 rounded-full h-2 mb-4">
                                        <div class="bg-blue-600 h-2 rounded-full" style="width: 45%;"></div>
                                    </div>
                                    <button onclick="window.location.href='{{ route('Gaza.donor-projects') }}'"
                                        class="w-full py-2 bg-neutral-50 border border-neutral-200 rounded-lg text-xs font-bold hover:bg-blue-600 hover:text-white transition-all">عرض
                                        التفاصيل</button>
                                </div>
                            </div>

                            <div
                                class="bg-white border rounded-xl overflow-hidden shadow-sm hover:shadow-lg transition-all group">
                                <div class="relative h-48 overflow-hidden">
                                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=400&q=80"
                                        alt="مشروع"
                                        class="w-full h-full object-cover transition-transform group-hover:scale-110">
                                    <div
                                        class="absolute top-3 right-3 bg-white/90 px-3 py-1 rounded-full text-xs font-bold text-yellow-700 shadow-sm">
                                        90% مكتمل</div>
                                </div>
                                <div class="p-5">
                                    <h4 class="font-bold mb-2">مدرسة النور - خانيونس</h4>
                                    <p class="text-sm text-neutral-600 mb-4 italic">مرحلة الطلاء النهائي وتمديدات
                                        الكهرباء والماء.</p>
                                    <div class="flex items-center justify-between text-xs text-neutral-400 mb-4">
                                        <span>٦ فبراير ٢٠٢٦</span>
                                        <span class="text-yellow-600 font-semibold">مرحلة نهائية</span>
                                    </div>
                                    <div class="w-full bg-neutral-100 rounded-full h-2 mb-4">
                                        <div class="bg-yellow-500 h-2 rounded-full" style="width: 90%;"></div>
                                    </div>
                                    <button onclick="window.location.href='{{ route('Gaza.donor-projects') }}'"
                                        class="w-full py-2 bg-neutral-50 border border-neutral-200 rounded-lg text-xs font-bold hover:bg-yellow-600 hover:text-white transition-all">عرض
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

