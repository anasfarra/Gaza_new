@extends('Gaza.contractor.parent-contractor-control')

@section('title','contractor-projects')

@section('css')

@endsection

@section('content')
      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
        <main class="flex-grow pt-28 px-4 sm:px-6 lg:px-8 pb-12">
            <div class="max-w-7xl mx-auto">
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                    <div>
                        <h1 class="text-3xl font-bold mb-2 text-slate-800">استعراض المشاريع</h1>
                        <p class="text-slate-500">قائمة بجميع مشاريع إعادة الإعمار وحالتها الحالية</p>
                    </div>
                    <div class="flex gap-3 flex-wrap">
                        <select
                            class="border border-slate-200 rounded-lg px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500 text-slate-600 shadow-sm cursor-pointer hover:border-emerald-300 transition-colors">
                            <option>جميع المناطق</option>
                            <option>الشمال</option>
                            <option>الجنوب</option>
                            <option>خانيونس</option>
                            <option>الوسطى</option>
                        </select>
                        <select
                            class="border border-slate-200 rounded-lg px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500 text-slate-600 shadow-sm cursor-pointer hover:border-emerald-300 transition-colors">
                            <option>جميع الحالات</option>
                            <option>قيد التمويل</option>
                            <option>قيد التنفيذ</option>
                            <option>مكتمل</option>
                        </select>
                    </div>
                </div>

                <!-- Project Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <a href="{{ route('Gaza.ConstructionTracking') }}"
                        class="group block bg-white border border-slate-200 rounded-xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 h-full flex flex-col">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('src/assets/img/branding/gaza13-1737459595 (1).webp') }}" alt="project"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <div
                                class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-md text-xs font-bold text-emerald-700 shadow-sm border border-emerald-100">
                                قيد التنفيذ
                            </div>
                        </div>
                        <div class="p-5 flex-grow flex flex-col">
                            <h3
                                class="font-bold text-xl mb-2 text-slate-800 group-hover:text-emerald-600 transition-colors">
                                منزل عائلة أحمد</h3>
                            <p class="text-sm text-slate-500 mb-6 flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin text-emerald-500">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                غزة - حي الشجاعية
                            </p>

                            <div class="mt-auto">
                                <div class="flex items-center justify-between text-xs font-bold mb-2 text-slate-700">
                                    <span>نسبة الإنجاز</span>
                                    <span class="text-emerald-600">75%</span>
                                </div>
                                <div
                                    class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden border border-slate-100">
                                    <div class="bg-gradient-to-r from-emerald-500 to-teal-400 h-full rounded-full transition-all duration-1000 shadow-sm"
                                        style="width: 75%;"></div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Card 2 -->
                    <a href="#"
                        class="group block bg-white border border-slate-200 rounded-xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 h-full flex flex-col">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('src/assets/img/branding/مجموعة_صور_لقطاع_غزة_قبل_الحرب_الأخيرة_12.jpg') }}"
                                alt="project"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <div
                                class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-md text-xs font-bold text-amber-600 shadow-sm border border-amber-100">
                                مخطط
                            </div>
                        </div>
                        <div class="p-5 flex-grow flex flex-col">
                            <h3
                                class="font-bold text-xl mb-2 text-slate-800 group-hover:text-emerald-600 transition-colors">
                                إعادة تأهيل مستشفى الشفاء</h3>
                            <p class="text-sm text-slate-500 mb-6 flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin text-emerald-500">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                غزة - الرمال
                            </p>

                            <div class="mt-auto">
                                <div class="flex items-center justify-between text-xs font-bold mb-2 text-slate-700">
                                    <span>نسبة الإنجاز</span>
                                    <span class="text-amber-600">15%</span>
                                </div>
                                <div
                                    class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden border border-slate-100">
                                    <div class="bg-gradient-to-r from-amber-400 to-orange-400 h-full rounded-full transition-all duration-1000 shadow-sm"
                                        style="width: 15%;"></div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <!-- Card 3 -->
                    <a href="#"
                        class="group block bg-white border border-slate-200 rounded-xl overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 h-full flex flex-col">
                        <div class="relative h-56 overflow-hidden">
                            <img src="{{ asset('src/assets/img/branding/2024-04-18T113727Z_1635003969_RC2467ASO0N1_RTRMADP_3_ISRAEL-PALESTINIANS-GAZA-SCHOOLS.jpg') }}"
                                alt="project"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                loading="lazy">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            </div>
                            <div
                                class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-md text-xs font-bold text-blue-700 shadow-sm border border-blue-100">
                                قيد التمويل
                            </div>
                        </div>
                        <div class="p-5 flex-grow flex flex-col">
                            <h3
                                class="font-bold text-xl mb-2 text-slate-800 group-hover:text-emerald-600 transition-colors">
                                مدرسة النور الابتدائية</h3>
                            <p class="text-sm text-slate-500 mb-6 flex items-center gap-1.5">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-map-pin text-emerald-500">
                                    <path
                                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                    <circle cx="12" cy="10" r="3" />
                                </svg>
                                خانيونس - وسط البلد
                            </p>

                            <div class="mt-auto">
                                <div class="flex items-center justify-between text-xs font-bold mb-2 text-slate-700">
                                    <span>نسبة التمويل</span>
                                    <span class="text-blue-600">45%</span>
                                </div>
                                <div
                                    class="w-full bg-slate-100 rounded-full h-2.5 overflow-hidden border border-slate-100">
                                    <div class="bg-gradient-to-r from-blue-400 to-indigo-400 h-full rounded-full transition-all duration-1000 shadow-sm"
                                        style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </main>

@endsection


@section('script')

@endsection

