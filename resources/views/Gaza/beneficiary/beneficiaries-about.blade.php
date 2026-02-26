@extends('Gaza.beneficiary.parent-beneficiaries')

@section('title','beneficiaries-about')

@section('css')

@endsection

@section('content')

      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
        <main class="flex-grow pt-20">
            <section class="relative bg-slate-900 h-[400px] flex items-center justify-center overflow-hidden">
                <div class="absolute inset-0 z-0">
                    <img src="{{ asset('src/assets/img/branding/about-hero.webp') }}" alt="Gaza Reconstruction"
                        class="w-full h-full object-cover opacity-30 grayscale hover:grayscale-0 transition-all duration-1000">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-transparent"></div>
                </div>
                <div class="relative z-10 text-center px-4 max-w-4xl mx-auto">
                    <h1 class="text-4xl md:text-5xl font-bold mb-6 text-white leading-tight">بناء المستقبل <span
                            class="text-emerald-500">يتطلب أكثر</span> من مجرد حجارة</h1>
                    <p class="text-lg md:text-xl text-slate-300 max-w-2xl mx-auto">منصة رقمية متكاملة لإدارة عملية إعادة
                        إعمار غزة بشفافية وكفاءة عالية، نجمع الجهود لتوحيد الرؤية.</p>
                </div>
            </section>

            <!-- Mission -->
            <section class="py-16 md:py-24 bg-white relative">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col md:flex-row items-center gap-12">
                        <div class="md:w-1/2">
                            <div
                                class="inline-block px-3 py-1 bg-emerald-100 text-emerald-700 rounded-full text-sm font-bold mb-4">
                                مهمتنا</div>
                            <h2 class="text-3xl font-bold text-slate-900 mb-6 leading-tight">إعادة بناء غزة بشفافية
                                وعدالة</h2>
                            <p class="text-slate-600 mb-6 leading-relaxed">
                                نسعى لإعادة بناء غزة من خلال منصة رقمية شفافة تربط المتضررين بالمانحين والمقاولين، مع
                                ضمان الشفافية الكاملة في كل مرحلة من مراحل إعادة الإعمار. نؤمن بأن التكنولوجيا يمكن أن
                                تسرع من وتيرة البناء وتعيد الأمل.
                            </p>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-3 text-slate-700">
                                    <span
                                        class="w-6 h-6 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 text-xs text-bold">✓</span>
                                    توثيق دقيق للأضرار عبر تقنيات GIS
                                </li>
                                <li class="flex items-center gap-3 text-slate-700">
                                    <span
                                        class="w-6 h-6 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 text-xs text-bold">✓</span>
                                    ربط مباشر بين المانحين والمشاريع
                                </li>
                                <li class="flex items-center gap-3 text-slate-700">
                                    <span
                                        class="w-6 h-6 rounded-full bg-emerald-100 flex items-center justify-center text-emerald-600 text-xs text-bold">✓</span>
                                    مراقبة حية لسير العمل والإنفاق
                                </li>
                            </ul>
                        </div>
                        <div class="md:w-1/2">
                            <div class="relative">
                                <div
                                    class="absolute -top-4 -right-4 w-24 h-24 bg-emerald-100 rounded-full opacity-50 blur-xl">
                                </div>
                                <div
                                    class="absolute -bottom-4 -left-4 w-32 h-32 bg-slate-100 rounded-full opacity-50 blur-xl">
                                </div>
                                <img src="{{ asset('src/assets/img/branding/mission.jpg') }}"
                                    class="relative rounded-2xl shadow-2xl z-10 border-4 border-white transform rotate-2 hover:rotate-0 transition-transform duration-500"
                                    alt="Mission">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Values -->
            <section class="py-16 md:py-24 bg-slate-50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl font-bold text-slate-900 mb-12">قيمنا الأساسية</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div
                            class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100">
                            <div
                                class="w-16 h-16 bg-emerald-50 rounded-xl flex items-center justify-center mx-auto mb-6 text-emerald-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-shield">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">الشفافية المطلقة</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">نضمن شفافية كاملة في كل مرحلة. كل دولار
                                يتم التبرع به يمكن تتبعه حتى وصوله للمشروع النهائي.</p>
                        </div>
                        <div
                            class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100">
                            <div
                                class="w-16 h-16 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-6 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-zap">
                                    <path
                                        d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">الكفاءة والسرعة</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">نستخدم التقنية لتقليل البيروقراطية وتسريع
                                عمليات الموافقة والتنفيذ لإعادة الإعمار بأسرع وقت.</p>
                        </div>
                        <div
                            class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 border border-slate-100">
                            <div
                                class="w-16 h-16 bg-amber-50 rounded-xl flex items-center justify-center mx-auto mb-6 text-amber-600">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-users">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-3">المشاركة المجتمعية</h3>
                            <p class="text-slate-500 text-sm leading-relaxed">المجتمع شريك أساسي. نستمع لأولويات السكان
                                ونشركهم في عملية صنع القرار الخاصة بمناطقهم.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

@endsection


@section('script')

@endsection
