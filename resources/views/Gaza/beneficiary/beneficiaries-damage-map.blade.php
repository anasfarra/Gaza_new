@extends('Gaza.beneficiary.parent-beneficiaries')

@section('title','beneficiaries-damage-map')

@section('css')


  <!-- ========================================== -->
  <!-- Fonts (css)                              -->
  <!-- ========================================== -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />

@endsection

@section('content')
      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
        <main class="pt-24 pb-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                <div class="mb-8">
                    <h1 class="text-3xl font-bold mb-2">خريطة توثيق الأضرار</h1>
                    <p class="text-neutral-600">استعراض جميع المناطق المتضررة ومشاريع إعادة الإعمار على الخريطة</p>
                </div>

                <div class="bg-white rounded-xl border p-6 mb-6 shadow-sm">
                    <div class="flex flex-col lg:flex-row gap-4">
                        <div class="flex-1 relative">
                            <input type="text"
                                class="w-full border rounded-md pr-10 pl-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-emerald-500"
                                placeholder="ابحث عن موقع أو مشروع...">
                        </div>
                        <div class="flex gap-3">
                            <select
                                class="border rounded-md px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                <option>نوع الضرر</option>
                                <option>دمار كلي</option>
                                <option>دمار جزئي</option>
                            </select>
                            <select
                                class="border rounded-md px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500">
                                <option>الحالة</option>
                                <option>قيد التنفيذ</option>
                                <option>مكتمل</option>
                            </select>
                            <button
                                class="border px-4 py-2 rounded-md text-sm flex items-center gap-2 hover:bg-gray-50">الفلاتر</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl border p-4 mb-6 flex flex-wrap gap-6 justify-center shadow-sm text-sm">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-600"></div> <span>دمار كلي (342)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-orange-600"></div> <span>دمار شديد (589)</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-amber-500"></div> <span>دمار جزئي (764)</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div class="lg:col-span-2">
                        <!-- Map Container -->
                        <div class="relative bg-white rounded-xl border h-[600px] overflow-hidden shadow-sm group z-0">
                            <div id="damage-map-full" class="w-full h-full z-0"></div>

                            <!-- Legend -->
                            <div class="absolute bottom-6 right-6 bg-white/95 backdrop-blur-sm border border-neutral-200 text-neutral-800 p-5 rounded-xl shadow-lg z-[400] text-sm hidden md:block w-48"
                                dir="rtl">
                                <h4 class="font-bold mb-3 text-base border-b border-neutral-200 pb-2">مفتاح الخريطة
                                </h4>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="w-3 h-3 rounded-full bg-red-500 shadow-sm"></span>
                                    <span class="text-neutral-600">دمار كلي</span>
                                </div>
                                <div class="flex items-center gap-3 mb-2">
                                    <span class="w-3 h-3 rounded-full bg-orange-500 shadow-sm"></span>
                                    <span class="text-neutral-600">دمار جزئي</span>
                                </div>
                                <div class="flex items-center gap-3">
                                    <span class="w-3 h-3 rounded-full bg-emerald-500 shadow-sm"></span>
                                    <span class="text-neutral-600">قيد التنفيذ</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h3 class="font-bold text-lg">المشاريع <span
                                class="bg-neutral-200 text-xs px-2 py-1 rounded-full ml-1">4</span></h3>
                        <div class="space-y-3 max-h-[560px] overflow-y-auto pr-2 custom-scrollbar">

                            <div class="bg-white p-4 rounded-xl border hover:shadow-md transition-all cursor-pointer">
                                <h4 class="font-semibold text-sm mb-1">منزل عائلة الأحمد</h4>
                                <p class="text-xs text-neutral-500 mb-2">📍 غزة - الشجاعية</p>
                                <span class="bg-blue-100 text-blue-700 text-[10px] px-2 py-0.5 rounded-full">قيد
                                    التنفيذ</span>
                                <div class="mt-3">
                                    <div class="flex justify-between text-[10px] mb-1"><span>ممول: 85%</span></div>
                                    <div class="w-full bg-neutral-200 h-1.5 rounded-full">
                                        <div class="bg-green-600 h-1.5 rounded-full" style="width: 85%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-4 rounded-xl border hover:shadow-md transition-all cursor-pointer">
                                <h4 class="font-semibold text-sm mb-1">مركز صحي الرفح</h4>
                                <p class="text-xs text-neutral-500 mb-2">📍 رفح - الشرق</p>
                                <span class="bg-neutral-100 text-neutral-700 text-[10px] px-2 py-0.5 rounded-full">قيد
                                    الانتظار</span>
                                <div class="mt-3">
                                    <div class="flex justify-between text-[10px] mb-1"><span>ممول: 45%</span></div>
                                    <div class="w-full bg-neutral-200 h-1.5 rounded-full">
                                        <div class="bg-green-600 h-1.5 rounded-full" style="width: 45%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-4 rounded-xl border hover:shadow-md transition-all cursor-pointer">
                                <h4 class="font-semibold text-sm mb-1">مدرسة النور</h4>
                                <p class="text-xs text-neutral-500 mb-2">📍 خانيونس</p>
                                <span class="bg-emerald-100 text-emerald-700 text-[10px] px-2 py-0.5 rounded-full">تم
                                    الترميم</span>
                                <div class="mt-3">
                                    <div class="flex justify-between text-[10px] mb-1"><span>ممول: 100%</span></div>
                                    <div class="w-full bg-neutral-200 h-1.5 rounded-full">
                                        <div class="bg-emerald-600 h-1.5 rounded-full" style="width: 100%"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white p-4 rounded-xl border hover:shadow-md transition-all cursor-pointer">
                                <h4 class="font-semibold text-sm mb-1">برج الوفاء السكني</h4>
                                <p class="text-xs text-neutral-500 mb-2">📍 وسط المدينة</p>
                                <span class="bg-red-100 text-red-700 text-[10px] px-2 py-0.5 rounded-full">دمار
                                    كلي</span>
                                <div class="mt-3">
                                    <div class="flex justify-between text-[10px] mb-1"><span>ممول: 10%</span></div>
                                    <div class="w-full bg-neutral-200 h-1.5 rounded-full">
                                        <div class="bg-green-600 h-1.5 rounded-full" style="width: 10%"></div>
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

<script src="{{ asset('js/damage-map.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
    integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
@endsection




