@extends('Gaza.contractor.parent-contractor-control')

@section('title', 'لوحة تحكم المقاول')

@section('content')
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-2">لوحة تحكم المقاول</h1>
            <p class="text-neutral-600">إدارة المشاريع وتتبع التقدم</p>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                    stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                    <path d="M9 22v-4h6v4"></path>
                    <path d="M8 6h.01"></path>
                    <path d="M16 6h.01"></path>
                    <path d="M12 6h.01"></path>
                </svg>
                <div>
                    <div class="text-3xl font-bold mb-1">8</div>
                    <div class="text-sm text-neutral-500">المشاريع المخصصة</div>
                </div>
            </div>
            <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                    stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M10 10V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5"></path>
                    <path d="M14 6a6 6 0 0 1 6 6v3"></path>
                    <path d="M4 15v-3a6 6 0 0 1 6-6"></path>
                    <rect x="2" y="15" width="20" height="4" rx="1"></rect>
                </svg>
                <div>
                    <div class="text-3xl font-bold mb-1">5</div>
                    <div class="text-sm text-neutral-500">المشاريع النشطة</div>
                </div>
            </div>
            <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                    stroke="#9333ea" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                    <circle cx="9" cy="7" r="4"></circle>
                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                </svg>
                <div>
                    <div class="text-3xl font-bold mb-1">23</div>
                    <div class="text-sm text-neutral-500">أعضاء الفريق</div>
                </div>
            </div>
            <div class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 shadow-sm">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                    stroke="#ea580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                    <path d="M3 10h18"></path>
                </svg>
                <div>
                    <div class="text-3xl font-bold mb-1">12</div>
                    <div class="text-sm text-neutral-500">مشاريع مكتملة</div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="bg-card text-card-foreground flex flex-col rounded-xl border p-6 lg:col-span-2 shadow-sm">
                <h3 class="font-bold text-lg mb-6">مشاريعي</h3>
                <div class="space-y-6">
                    <div class="border rounded-lg p-5">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h4 class="font-bold mb-1">منزل عائلة أحمد - الشجاعية</h4>
                                <div class="text-sm text-neutral-600">PRJ-2026-001 • الهيكل الإنشائي</div>
                            </div>
                            <span
                                class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-md font-medium border border-green-200">على
                                المسار الصحيح</span>
                        </div>
                        <div class="space-y-4 mb-4">
                            <div>
                                <div class="flex justify-between text-sm mb-1"><span>التقدم
                                        الكلي</span><span class="font-bold">75%</span></div>
                                <div class="bg-neutral-100 h-2 w-full rounded-full overflow-hidden">
                                    <div class="bg-green-600 h-full rounded-full transition-all"
                                        style="width: 75%;"></div>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4 text-sm">
                                <div>
                                    <div class="text-neutral-500">الميزانية</div>
                                    <div class="font-bold">$100,000</div>
                                </div>
                                <div>
                                    <div class="text-neutral-500">المصروف</div>
                                    <div class="font-bold text-green-600">$68,500</div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="flex-1 bg-green-600 text-white h-9 rounded-md text-sm hover:bg-green-700 flex items-center justify-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                    <polyline points="17 8 12 3 7 8"></polyline>
                                    <line x1="12" x2="12" y1="3" y2="15"></line>
                                </svg>
                                تحديث التقدم
                            </button>
                            <button onclick="openProjectModal('PRJ-2026-001')"
                                class="px-4 border h-9 rounded-md text-sm hover:bg-neutral-50">التفاصيل</button>
                        </div>
                    </div>

                    <div class="border rounded-lg p-5">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h4 class="font-bold mb-1">مركز صحي الرفح</h4>
                                <div class="text-sm text-neutral-600">PRJ-2026-008 • الأساسات</div>
                            </div>
                            <span
                                class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-md font-medium border border-green-200">على
                                المسار الصحيح</span>
                        </div>
                        <div class="space-y-4 mb-4">
                            <div>
                                <div class="flex justify-between text-sm mb-1"><span>التقدم
                                        الكلي</span><span class="font-bold">45%</span></div>
                                <div class="bg-neutral-100 h-2 w-full rounded-full overflow-hidden">
                                    <div class="bg-green-600 h-full rounded-full" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-2">
                            <button
                                class="flex-1 bg-green-600 text-white h-9 rounded-md text-sm hover:bg-green-700">تحديث
                                التقدم</button>
                            <button onclick="openProjectModal('PRJ-2026-008')"
                                class="px-4 border h-9 rounded-md text-sm hover:bg-neutral-50">التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-card text-card-foreground flex flex-col rounded-xl border p-6 shadow-sm">
                <h3 class="font-bold text-lg mb-6">المهام المعلقة</h3>
                <div class="space-y-4">
                    <div class="border rounded-lg p-4">
                        <span
                            class="bg-red-100 text-red-700 text-[10px] px-2 py-0.5 rounded font-bold uppercase border border-red-200 block w-fit mb-2">عالي</span>
                        <h4 class="font-bold text-sm mb-1">رفع تحديث التقدم الأسبوعي</h4>
                        <p class="text-xs text-neutral-500 mb-3">PRJ-2026-001</p>
                        <button class="w-full border h-8 rounded text-sm hover:bg-neutral-50">إكمال</button>
                    </div>
                    <div class="border rounded-lg p-4">
                        <span
                            class="bg-yellow-100 text-yellow-700 text-[10px] px-2 py-0.5 rounded font-bold uppercase border border-yellow-200 block w-fit mb-2">متوسط</span>
                        <h4 class="font-bold text-sm mb-1">طلب مواد إضافية</h4>
                        <p class="text-xs text-neutral-500 mb-3">PRJ-2026-012</p>
                        <button class="w-full border h-8 rounded text-sm hover:bg-neutral-50">إكمال</button>
                    </div>
                </div>
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <div class="flex items-start gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                            fill="none" stroke="#1d4ed8" stroke-width="2">
                            <path d="M8 2v4"></path>
                            <path d="M16 2v4"></path>
                            <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                            <path d="M3 10h18"></path>
                        </svg>
                        <div>
                            <p class="font-bold text-blue-900 text-sm mb-1">اجتماع قادم</p>
                            <p class="text-blue-700 text-xs">مراجعة المشروع - غداً 10:00 ص</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Details Modal -->
    <div id="projectModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-slate-900/75 transition-opacity backdrop-blur-sm" onclick="closeProjectModal()"></div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">
                <div class="relative transform overflow-hidden rounded-2xl bg-white text-right shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-3xl border border-slate-100">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div class="mt-3 text-center sm:mx-0 sm:mt-0 sm:text-right w-full">
                                <h3 class="text-2xl font-bold leading-6 text-slate-900 mb-4" id="modal-title">تفاصيل المشروع</h3>
                                <div class="mt-2 text-slate-600 text-sm">
                                    <div class="space-y-4">
                                        <!-- Project Header -->
                                        <div class="bg-slate-50 p-4 rounded-lg border border-slate-200">
                                            <div class="flex justify-between items-start mb-2">
                                                <div>
                                                    <h4 class="font-bold text-lg text-slate-800" id="project-name">منزل عائلة أحمد - الشجاعية</h4>
                                                    <p class="text-slate-500 text-xs" id="project-id">PRJ-2026-001</p>
                                                </div>
                                                <span class="bg-green-100 text-green-700 text-xs px-2 py-1 rounded-md font-bold border border-green-200" id="project-status">
                                                    نشط
                                                </span>
                                            </div>
                                            <p class="text-slate-600 text-sm leading-relaxed">
                                                مشروع إعادة بناء منزل سكني متضرر كلياً في حي الشجاعية. يتضمن المشروع رفع الأنقاض، تأسيس القواعد، وبناء الهيكل الخرساني والتشطيبات.
                                            </p>
                                        </div>

                                        <!-- Progress Bar -->
                                        <div class="bg-white p-4 rounded-lg border border-slate-200 shadow-sm">
                                            <div class="flex justify-between text-sm font-bold mb-2">
                                                <span>التقدم الكلي</span>
                                                <span class="text-green-600" id="project-progress-text">75%</span>
                                            </div>
                                            <div class="w-full bg-slate-100 rounded-full h-3 overflow-hidden">
                                                <div class="bg-gradient-to-r from-green-500 to-emerald-600 h-full rounded-full transition-all duration-500" style="width: 75%;" id="project-progress-bar"></div>
                                            </div>
                                        </div>

                                        <!-- Stats Grid -->
                                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                            <div class="bg-blue-50 p-3 rounded-lg border border-blue-100 text-center">
                                                <div class="text-xs text-blue-600 font-medium mb-1">الميزانية المرصودة</div>
                                                <div class="text-lg font-bold text-blue-800" id="project-budget">$100,000</div>
                                            </div>
                                            <div class="bg-orange-50 p-3 rounded-lg border border-orange-100 text-center">
                                                <div class="text-xs text-orange-600 font-medium mb-1">المصروفات</div>
                                                <div class="text-lg font-bold text-orange-800" id="project-expenses">$68,500</div>
                                            </div>
                                            <div class="bg-purple-50 p-3 rounded-lg border border-purple-100 text-center">
                                                <div class="text-xs text-purple-600 font-medium mb-1">المدة المتبقية</div>
                                                <div class="text-lg font-bold text-purple-800" id="project-duration">45 يوم</div>
                                            </div>
                                        </div>

                                        <!-- Milestones -->
                                        <div>
                                            <h4 class="font-bold text-sm mb-3 text-slate-800">المراحل الرئيسية</h4>
                                            <div class="space-y-3">
                                                <div class="flex items-center gap-3 text-sm"> 
                                                    <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center border border-green-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                                                    </div>
                                                    <span class="text-slate-600 line-through">إزالة الركام وتجهيز الموقع</span>
                                                </div>
                                                <div class="flex items-center gap-3 text-sm">
                                                    <div class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center border border-green-200">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                                                    </div>
                                                    <span class="text-slate-600 line-through">صب القواعد والأساسات</span>
                                                </div>
                                                <div class="flex items-center gap-3 text-sm">
                                                    <div class="w-6 h-6 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center border border-blue-200 animate-pulse">
                                                        <div class="w-2 h-2 bg-blue-600 rounded-full"></div>
                                                    </div>
                                                    <span class="text-slate-800 font-bold">بناء الهيكل الخرساني (جاري العمل)</span>
                                                </div>
                                                <div class="flex items-center gap-3 text-sm">
                                                    <div class="w-6 h-6 rounded-full bg-slate-100 text-slate-400 flex items-center justify-center border border-slate-200">
                                                        <div class="w-2 h-2 bg-slate-400 rounded-full"></div>
                                                    </div>
                                                    <span class="text-slate-400">أعمال التشطيبات</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 border-t border-slate-100">
                        <button type="button" class="inline-flex w-full justify-center rounded-md bg-emerald-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-emerald-500 sm:mr-3 sm:w-auto transition-colors" onclick="closeProjectModal()">إغلاق</button>
                        <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto transition-colors" onclick="closeProjectModal()">تحديث البيانات</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openProjectModal(projectId) {
            const modal = document.getElementById('projectModal');
            if(modal) {
                modal.classList.remove('hidden');
                // You can add logic here to fetch data for the specific projectId
            }
        }

        function closeProjectModal() {
            const modal = document.getElementById('projectModal');
            if(modal) modal.classList.add('hidden');
        }
    </script>
@endsection
