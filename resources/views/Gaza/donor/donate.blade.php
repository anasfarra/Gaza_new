@extends('Gaza.donor.parent-donor-control')

@section('title','donate')

@section('css')

@endsection

@section('content')
      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
        <main class="flex-grow pt-28 px-4 sm:px-6 lg:px-8 pb-12 overflow-hidden relative">
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-emerald-100/50 blur-3xl -z-10">
            </div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-blue-100/50 blur-3xl -z-10">
            </div>

            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-10">
                    <h1 class="text-3xl font-bold mb-4 text-slate-900">ساهم في إعادة البناء</h1>
                    <p class="text-slate-500">مساهمتك، مهما كانت صغيرة، تصنع فرقاً حقيقياً في حياة أسرة</p>
                </div>

                <div class="bg-white rounded-2xl shadow-xl border border-slate-100 p-8 relative overflow-hidden">
                    <div
                        class="absolute top-0 right-0 w-full h-1 bg-gradient-to-r from-emerald-500 via-teal-500 to-blue-500">
                    </div>

                    <form id="donationForm" class="space-y-8">
                        <!-- Donation Amount -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-3">قيمة التبرع</label>
                            <div class="grid grid-cols-3 gap-3 mb-4">
                                <button type="button"
                                    class="amount-btn relative bg-white/60 backdrop-blur-sm border border-slate-200/60 rounded-2xl py-4 text-base font-bold text-slate-700 hover:border-emerald-400 hover:bg-emerald-50/80 hover:shadow-md transition-all duration-300 focus:outline-none active:scale-95">
                                    <span class="block text-2xl mb-1">$10</span>
                                    <span class="text-xs font-normal text-slate-500">مساهمة صغيرة</span>
                                </button>
                                <button type="button"
                                    class="amount-btn active relative bg-gradient-to-br from-emerald-50/90 to-teal-50/90 backdrop-blur-sm border-2 border-emerald-500 rounded-2xl py-4 text-base font-bold text-emerald-700 shadow-lg transition-all duration-300 focus:outline-none active:scale-95">
                                    <span class="block text-2xl mb-1">$50</span>
                                    <span class="text-xs font-normal text-emerald-600">الأكثر شيوعًا</span>
                                    <svg class="absolute top-2 left-2 w-5 h-5 text-emerald-600" fill="currentColor"
                                        viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </button>
                                <button type="button"
                                    class="amount-btn relative bg-white/60 backdrop-blur-sm border border-slate-200/60 rounded-2xl py-4 text-base font-bold text-slate-700 hover:border-emerald-400 hover:bg-emerald-50/80 hover:shadow-md transition-all duration-300 focus:outline-none active:scale-95">
                                    <span class="block text-2xl mb-1">$100</span>
                                    <span class="text-xs font-normal text-slate-500">مساهمة كبيرة</span>
                                </button>
                            </div>
                            <div class="relative mt-4">
                                <label class="block text-xs font-semibold text-slate-600 mb-2">أو أدخل مبلغًا
                                    مخصصًا</label>
                                <span class="absolute right-4 top-9 text-slate-400 font-bold text-lg">$</span>
                                <input type="number" placeholder="0.00"
                                    class="w-full pl-4 pr-12 py-3.5 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 bg-white transition-all duration-200 text-lg font-semibold">
                            </div>
                        </div>

                        <!-- Project Selection -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-3">توجيه التبرع (اختياري)</label>
                            <div class="relative">
                                <select
                                    class="w-full appearance-none border border-slate-200 rounded-xl px-4 py-3 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-emerald-500 text-slate-600 cursor-pointer hover:border-emerald-300">
                                    <option>صندوق الإعمار العام (الأكثر احتياجاً)</option>
                                    <option>إعادة بناء المنازل</option>
                                    <option>القطاع الصحي</option>
                                    <option>التعليم والمدارس</option>
                                </select>
                                <div
                                    class="pointer-events-none absolute inset-y-0 left-0 flex items-center px-4 text-slate-500">
                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- User Info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">الاسم الكامل</label>
                                <input type="text" placeholder="أدخل اسمك الكامل"
                                    class="w-full border border-[#e2e8f0] rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200 bg-white hover:border-slate-300">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-2">البريد الإلكتروني</label>
                                <input type="email" placeholder="example@email.com"
                                    class="w-full border border-[#e2e8f0] rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200 bg-white hover:border-slate-300">
                            </div>
                        </div>

                        <!-- Payment Method -->
                        <div>
                            <label class="block text-sm font-bold text-slate-700 mb-3">طريقة الدفع</label>

                            <div class="mb-6">
                                <!-- Credit Card Option -->
                                <div
                                    class="border-2 border-blue-400 bg-blue-50/50 rounded-2xl p-4 flex items-center gap-4 shadow-lg">
                                    <img src="{{ asset('src/assets/img/ui-icons/cradit_card.png') }}" alt="بطاقة ائتمان"
                                        class="h-12 w-auto object-contain">
                                    <span class="font-bold text-base text-slate-700">بطاقة ائتمان</span>
                                </div>
                            </div>

                            <!-- Card Details Section (Shown by default) -->
                            <div id="cardDetails" class="space-y-4">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">رقم البطاقة</label>
                                    <div class="relative">
                                        <input type="text" placeholder="0000 0000 0000 0000" maxlength="19"
                                            class="w-full border border-[#e2e8f0] rounded-xl pl-4 pr-12 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200 bg-white font-mono hover:border-slate-300"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(.{4})/g, '$1 ').trim()">
                                        <div class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-credit-card">
                                                <rect width="20" height="14" x="2" y="5" rx="2" />
                                                <line x1="2" x2="22" y1="10" y2="10" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">تاريخ
                                            الانتهاء</label>
                                        <input type="text" placeholder="MM/YY" maxlength="5"
                                            class="w-full border border-[#e2e8f0] rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200 bg-white font-mono hover:border-slate-300"
                                            oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/^([0-9]{2})/, '$1/').trim()">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-bold text-slate-700 mb-2">CVV</label>
                                        <input type="text" placeholder="123" maxlength="3"
                                            class="w-full border border-[#e2e8f0] rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200 bg-white font-mono hover:border-slate-300">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-2">اسم حامل البطاقة</label>
                                    <input type="text" placeholder="الاسم كما يظهر على البطاقة"
                                        class="w-full border border-[#e2e8f0] rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition-all duration-200 bg-white hover:border-slate-300">
                                </div>
                            </div>


                        </div>

                        <!-- Submit -->
                        <div class="pt-6 border-t border-slate-100">
                            <button type="submit"
                                class="w-full bg-gradient-to-r from-blue-600 via-blue-500 to-emerald-500 text-white font-bold py-4 rounded-xl hover:shadow-2xl hover:shadow-blue-500/50 hover:-translate-y-1 active:scale-95 transition-all duration-300 shadow-lg text-lg flex items-center justify-center gap-2 group">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="group-hover:scale-110 transition-transform">
                                    <rect width="20" height="16" x="2" y="4" rx="2" />
                                    <path d="M7 15h0M2 9.5h20" />
                                </svg>
                                <span>تبرع الآن بأمان</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"
                                    stroke-linejoin="round" class="group-hover:translate-x-1 transition-transform">
                                    <path d="M5 12h14" />
                                    <path d="m12 5 7 7-7 7" />
                                </svg>
                            </button>
                            <div class="flex items-center justify-center gap-6 mt-5">
                                <div class="flex items-center gap-1.5 text-xs text-slate-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="text-emerald-600">
                                        <rect width="18" height="11" x="3" y="11" rx="2" ry="2" />
                                        <path d="M7 11V7a5 5 0 0 1 10 0v4" />
                                    </svg>
                                    <span class="font-medium">تشفير SSL</span>
                                </div>
                                <div class="flex items-center gap-1.5 text-xs text-slate-500">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="text-blue-600">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10" />
                                        <path d="m9 12 2 2 4-4" />
                                    </svg>
                                    <span class="font-medium">معاملات آمنة</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>

@endsection


@section('script')

@endsection

