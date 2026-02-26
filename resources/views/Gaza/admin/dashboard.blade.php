@extends('Gaza.admin.parent-dashboard')

@section('title','dashboard')

@section('css')

@endsection

@section('content1')


      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
            <main>
                <div class="min-h-screen bg-neutral-50">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                        <div class="mb-8 flex justify-between items-center">
                            <div>
                                <h1 class="text-3xl font-bold mb-2">لوحة تحكم المدير</h1>
                                <p class="text-neutral-600">إدارة شاملة للمنصة والمستخدمين</p>
                            </div>
                            <a href="{{ route('Gaza.dashboard-home') }}"
                                class="inline-flex items-center justify-center gap-2 h-9 px-4 rounded-md text-sm font-medium border hover:bg-neutral-100 transition-all">
                                <span>العودة للرئيسية</span>
                            </a>
                        </div>

                        <div class="mb-6 space-y-3">
                            <div class="p-4 rounded-lg flex items-start gap-3 bg-yellow-50 border border-yellow-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-alert w-5 h-5 flex-shrink-0 text-yellow-600">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                </svg>
                                <p class="text-sm text-yellow-800">{{ $delayedRequestsCount }} طلب ينتظر المراجعة منذ أكثر من 7 أيام</p>
                            </div>
                            <div class="p-4 rounded-lg flex items-start gap-3 bg-blue-50 border border-blue-200">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="lucide lucide-circle-alert w-5 h-5 flex-shrink-0 text-blue-600">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="12" x2="12" y1="8" y2="12"></line>
                                    <line x1="12" x2="12.01" y1="16" y2="16"></line>
                                </svg>
                                <p class="text-sm text-blue-800">تحديث النظام المجدول في 15 فبراير</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 bg-white">
                                <div class="flex items-start justify-between mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-blue-600">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium bg-neutral-100 text-xs">+12%</span>
                                </div>



                                <div class="text-3xl font-bold mb-1">{{ $users->count() }}</div>
                                <div class="text-sm text-neutral-500">إجمالي المستخدمين</div>
                            </div>

                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 bg-white">
                                <div class="flex items-start justify-between mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-building w-8 h-8 text-green-600">
                                        <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                                        <path d="M9 22v-4h6v4"></path>
                                    </svg>
                                    <span
                                        class="inline-flex items-center justify-center rounded-md border px-2 py-0.5 font-medium bg-neutral-100 text-xs">+23%</span>
                                </div>
                                <div class="text-3xl font-bold mb-1">{{ $activeProjects->count() }}</div>
                                <div class="text-sm text-neutral-500">المشاريع النشطة</div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 lg:col-span-2 bg-white">
                                <h3 class="font-bold text-lg mb-6 flex items-center gap-2">طلبات قيد المراجعة</h3>
                                <div class="space-y-4">

                                    @forelse($pendingRequests ?? [] as $request)
                                    <div class="flex items-center justify-between border-b pb-4 last:border-0 last:pb-0">
                                        <div class="flex items-center gap-4">
                                            <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 font-bold">
                                                {{ substr($request->beneficiary?->user?->name ?? 'U', 0, 1) }}
                                            </div>
                                            <div>
                                                <h4 class="text-sm font-semibold">
                                                    {{ $request->beneficiary?->user?->name ?? 'مستخدم غير معروف' }}
                                                    @if($request->requested_amount > 5000)
                                                        <span class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-red-100 text-red-700 ml-2">عاجل</span>
                                                    @endif
                                                </h4>
                                                <p class="text-xs text-neutral-500">
                                                    {{ $request->request_number }} • {{ $request->property_type ?? 'منزل' }}
                                                </p>
                                            </div>
                                        </div>

                                        <div class="flex items-center gap-4">
                                             <div class="text-right hidden sm:block">
                                                <div class="font-bold text-sm">${{ number_format($request->requested_amount) }}</div>
                                                <div class="text-xs text-neutral-500">{{ \Carbon\Carbon::parse($request->submitted_at)->diffForHumans() }}</div>
                                            </div>

                                            <div class="flex gap-2">
                                                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-neutral-100 h-8 px-3 text-red-600 border-red-200"> رفض</button>
                                                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 bg-neutral-900 text-white shadow hover:bg-neutral-900/90 h-8 px-3"> موافقة</button>
                                                <button class="inline-flex items-center justify-center rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 border border-input bg-background shadow-sm hover:bg-neutral-100 h-8 px-3">عرض</button>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="text-center py-6 text-gray-500">لا يوجد طلبات جديدة للمراجعة</div>
                                    @endforelse

                                </div>
                                <button onclick="window.location.href='{{ route('all-requests.index') }}'"
                                    class="border w-full py-2 rounded-md text-sm mt-4 hover:bg-neutral-50">عرض جميع
                                    الطلبات</button>
                            </div>


                            <div
                                class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 bg-white">
                                <h3 class="font-bold text-lg mb-6 flex items-center gap-2">النشاطات الأخيرة</h3>
                                <div class="space-y-4 text-sm">
                                    {{-- حلقة التكرار لجلب التبرعات من قاعدة البيانات --}}
                                    @forelse($recentDonations ?? [] as $donation)
                                        <div class="flex items-start gap-3 border-b pb-4 last:border-0 last:pb-0">
                                            <div class="w-2 h-2 rounded-full bg-green-600 mt-2"></div>
                                            <div>
                                                <p>تبرع جديد بقيمة ${{ number_format($donation->amount) }}</p>
                                                <p class="text-xs text-neutral-500">
                                                    {{ \Carbon\Carbon::parse($donation->created_at)->diffForHumans() }}
                                                </p>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="text-center text-gray-500 py-2">لا توجد نشاطات حديثة</div>
                                    @endforelse

                                </div>
                            </div>
                        </div>


                        </div>
                    </div>
                </div>
            </main>

@endsection

    <!-- Request Details Modal -->
    <div id="requestModal" class="hidden fixed inset-0 z-[100] flex items-center justify-center p-4 sm:p-6"
        role="dialog" aria-modal="true">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity" onclick="closeRequestModal()">
        </div>

        <!-- Modal Content -->
        <div
            class="relative bg-white rounded-xl shadow-2xl w-full max-w-3xl max-h-[90vh] overflow-y-auto transform transition-all scale-100">
            <div class="px-6 py-4 border-b flex justify-between items-center bg-green-50 sticky top-0 bg-white z-10">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 bg-green-100 rounded-full flex items-center justify-center text-green-700">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                        </svg>
                    </div>
                    <div>
                        <h3 class="font-bold text-lg text-gray-900">تفاصيل طلب التعويض</h3>
                        <p class="text-xs text-gray-500">رقم الطلب: APP-2026-234</p>
                    </div>
                </div>
                <button onclick="closeRequestModal()"
                    class="text-gray-400 hover:text-red-500 transition-colors focus:outline-none p-1 rounded-full hover:bg-red-50">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Body -->
            <div class="p-6 space-y-8">

                <!-- 1. Personal Information Section -->
                <section>
                    <h4 class="flex items-center gap-2 font-bold text-gray-800 mb-4 pb-2 border-b">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-green-600">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        البيانات الشخصية
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <div>
                            <p class="text-xs text-gray-500 mb-1">الاسم الكامل</p>
                            <p class="font-semibold text-gray-900">محمد أحمد محمود</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">رقم الهوية</p>
                            <p class="font-semibold text-gray-900 font-mono">802345678</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">البريد الإلكتروني</p>
                            <p class="font-semibold text-gray-900">mohammed.ahmed@example.com</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 mb-1">رقم الهاتف</p>
                            <p class="font-semibold text-gray-900" dir="ltr">+970 59 123 4567</p>
                        </div>
                    </div>
                </section>

                <!-- 2. Damage Information Section -->
                <section>
                    <h4 class="flex items-center gap-2 font-bold text-gray-800 mb-4 pb-2 border-b">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-green-600">
                            <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                            <polyline points="9 22 9 12 15 12 15 22"></polyline>
                        </svg>
                        بيانات الأضرار
                    </h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                        <div class="bg-white border rounded-lg p-3 shadow-sm">
                            <p class="text-xs text-gray-500 mb-1">نوع العقار</p>
                            <p class="font-semibold text-gray-900">منزل سكني (طابقين)</p>
                        </div>
                        <div class="bg-white border rounded-lg p-3 shadow-sm">
                            <p class="text-xs text-gray-500 mb-1">مستوى الضرر</p>
                            <span
                                class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-sm font-medium bg-red-100 text-red-800">
                                <span class="w-1.5 h-1.5 rounded-full bg-red-600"></span>
                                هدم كلي
                            </span>
                        </div>
                        <div class="bg-white border rounded-lg p-3 shadow-sm">
                            <p class="text-xs text-gray-500 mb-1">الموقع الدقيق</p>
                            <p class="font-semibold text-gray-900">خان يونس، حي الأمل، شارع ٥</p>
                        </div>
                        <div class="bg-white border rounded-lg p-3 shadow-sm">
                            <p class="text-xs text-gray-500 mb-1">التكلفة التقديرية</p>
                            <p class="font-bold text-green-600 text-lg">$95,000</p>
                        </div>
                    </div>

                    <div class="bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <p class="text-xs text-gray-500 mb-2 font-semibold">وصف الأضرار</p>
                        <p class="text-sm text-gray-700 leading-relaxed">
                            تعرض المنزل لقصف مباشر أدى إلى انهيار كامل للطابقين وتدمير الأساسات. المنزل غير صالح للسكن
                            نهائياً. الأسرة فقدت جميع ممتلكاتها داخل المنزل وتحتاج إلى إعادة بناء كاملة. تم إرفاق تقرير
                            هندسي أولي يؤكد عدم صلاحية المبنى للترميم.
                        </p>
                    </div>
                </section>

                <!-- 3. Documents Section -->
                <section>
                    <h4 class="flex items-center gap-2 font-bold text-gray-800 mb-4 pb-2 border-b">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="text-green-600">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        المستندات المرفقة
                    </h4>
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                        <a href="#"
                            class="group flex flex-col items-center justify-center p-4 border-2 border-dashed border-gray-300 rounded-xl hover:border-green-500 hover:bg-green-50 transition-all cursor-pointer">
                            <div
                                class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center mb-2 group-hover:bg-white text-gray-500 group-hover:text-green-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-700 group-hover:text-green-700">صورة
                                الهوية</span>
                        </a>

                        <a href="#"
                            class="group flex flex-col items-center justify-center p-4 border-2 border-dashed border-gray-300 rounded-xl hover:border-green-500 hover:bg-green-50 transition-all cursor-pointer">
                            <div
                                class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center mb-2 group-hover:bg-white text-gray-500 group-hover:text-green-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z">
                                    </path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-700 group-hover:text-green-700">سند
                                الملكية</span>
                        </a>

                        <a href="#"
                            class="group flex flex-col items-center justify-center p-4 border-2 border-dashed border-gray-300 rounded-xl hover:border-green-500 hover:bg-green-50 transition-all cursor-pointer">
                            <div
                                class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center mb-2 group-hover:bg-white text-gray-500 group-hover:text-green-600 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"></rect>
                                    <circle cx="9" cy="9" r="2"></circle>
                                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-700 group-hover:text-green-700">صور الأضرار
                                (5)</span>
                        </a>
                    </div>
                </section>

            </div>

            <div class="px-6 py-4 bg-gray-50 border-t flex gap-3 flex-row-reverse sticky bottom-0 z-10">
                <button onclick="closeRequestModal(); alert('تمت الموافقة بنجاح')"
                    class="flex-1 bg-green-600 text-white px-4 py-2 rounded-lg text-sm font-semibold hover:bg-green-700 transition-colors shadow-sm flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="20 6 9 17 4 12"></polyline>
                    </svg>
                    موافقة على الطلب
                </button>
                <button onclick="closeRequestModal(); alert('تم رفض الطلب')"
                    class="flex-1 bg-white border border-red-200 text-red-600 px-4 py-2 rounded-lg text-sm font-semibold hover:bg-red-50 transition-colors shadow-sm flex items-center justify-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                    رفض الطلب
                </button>
                <button onclick="closeRequestModal()"
                    class="px-6 py-2 rounded-lg text-sm font-medium text-gray-700 hover:bg-gray-200 transition-colors">
                    إغلاق
                </button>
            </div>
        </div>
    </div>

 @section('script')

@endsection

