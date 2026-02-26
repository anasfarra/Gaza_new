@extends('Gaza.supplier.parent-supplier-control')

@section('css')

  <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />


@endsection

@section('content')

      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
    <main class="pt-20">
        <section class="relative py-20 bg-slate-900 overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-800 to-emerald-900/40"></div>
            <!-- Blobs -->
            <div
                class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-emerald-500 rounded-full blur-[120px] opacity-20 animate-blob">
            </div>
            <div
                class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[600px] h-[600px] bg-teal-500 rounded-full blur-[120px] opacity-20 animate-blob animation-delay-2000">
            </div>

            <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-6 fade-in-up"
                    style="animation-delay: 0.1s;">
                    نحن هنا <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">لمساعدتك</span>
                </h1>
                <p class="text-lg text-slate-300 max-w-2xl mx-auto mb-8 fade-in-up" style="animation-delay: 0.2s;">
                    سواء كان لديك استفسار عن مشروع، أو ترغب في التبرع، أو تحتاج إلى مساعدة تقنية، فريقنا جاهز للرد عليك.
                </p>
            </div>
        </section>

        <!-- Contact Content -->
        <section class="py-16 relative bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                    <!-- Contact Info -->
                    <div class="lg:col-span-1 space-y-8">
                        <div>
                            <h2 class="text-2xl font-bold text-slate-800 mb-6 border-r-4 border-emerald-500 pr-4">
                                معلومات التواصل</h2>
                            <div class="space-y-6">
                                <div
                                    class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-emerald-200 transition-colors group">
                                    <div
                                        class="w-12 h-12 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600 group-hover:scale-110 transition-transform">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="lucide lucide-map-pin">
                                            <path
                                                d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
                                            <circle cx="12" cy="10" r="3" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-slate-900">المقر الرئيسي</h3>
                                        <p class="text-sm text-slate-600 mt-1">شارع عمر المختار، غزة، فلسطين</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-emerald-200 transition-colors group">
                                    <div
                                        class="w-12 h-12 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600 group-hover:scale-110 transition-transform">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-slate-900">الهاتف</h3>
                                        <p class="text-sm text-slate-600 mt-1" dir="ltr">+970 8 28XXXXX</p>
                                    </div>
                                </div>

                                <div
                                    class="flex items-start gap-4 p-4 rounded-xl bg-slate-50 border border-slate-100 hover:border-emerald-200 transition-colors group">
                                    <div
                                        class="w-12 h-12 rounded-lg bg-emerald-100 flex items-center justify-center text-emerald-600 group-hover:scale-110 transition-transform">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail">
                                            <rect width="20" height="16" x="2" y="4" rx="2" />
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-slate-900">البريد الإلكتروني</h3>
                                        <p class="text-sm text-slate-600 mt-1">contact@gaza-rebuild.ps</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Office Hours -->
                        <div class="bg-slate-900 text-white p-6 rounded-2xl relative overflow-hidden">
                            <div
                                class="absolute top-0 right-0 w-32 h-32 bg-emerald-500 rounded-full blur-3xl opacity-20 -mr-16 -mt-16">
                            </div>
                            <h3 class="font-bold text-lg mb-4 relative z-10">ساعات العمل</h3>
                            <ul class="space-y-3 relative z-10 text-slate-300 text-sm">
                                <li class="flex justify-between border-b border-white/10 pb-2">
                                    <span>الأحد - الخميس</span>
                                    <span class="text-emerald-400 font-bold">8:00 ص - 4:00 م</span>
                                </li>
                                <li class="flex justify-between border-b border-white/10 pb-2">
                                    <span>السبت</span>
                                    <span class="text-emerald-400 font-bold">9:00 ص - 2:00 م</span>
                                </li>
                                <li class="flex justify-between">
                                    <span>الجمعة</span>
                                    <span class="text-red-400">مغلق</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Form -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-2xl shadow-xl shadow-slate-200/50 border border-slate-100 p-8">
                            <h2 class="text-2xl font-bold text-slate-800 mb-2">أرسل رسالة</h2>
                            <p class="text-slate-500 text-sm mb-8">سنقوم بالرد عليك في أقرب وقت ممكن.</p>

                            <form class="space-y-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div class="space-y-2">
                                        <label for="name" class="text-sm font-bold text-slate-700">الاسم الكامل</label>
                                        <input type="text" id="name"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200"
                                            placeholder="محمد أحمد">
                                    </div>
                                    <div class="space-y-2">
                                        <label for="email" class="text-sm font-bold text-slate-700">البريد
                                            الإلكتروني</label>
                                        <input type="email" id="email"
                                            class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200"
                                            placeholder="name@example.com">
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label for="subject" class="text-sm font-bold text-slate-700">الموضوع</label>
                                    <select id="subject"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200 bg-white">
                                        <option value="">اختر الموضوع...</option>
                                        <option value="general">استفسار عام</option>
                                        <option value="technical">دعم تقني</option>
                                        <option value="donation">استفسار عن تبرع</option>
                                        <option value="project">الإبلاغ عن مشروع</option>
                                    </select>
                                </div>
                                <div class="space-y-2">
                                    <label for="message" class="text-sm font-bold text-slate-700">الرسالة</label>
                                    <textarea id="message" rows="5"
                                        class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:border-emerald-500 focus:ring-2 focus:ring-emerald-200 outline-none transition-all duration-200 resize-none"
                                        placeholder="اكتب رسالتك هنا..."></textarea>
                                </div>
                                <button type="submit"
                                    class="w-full py-4 px-6 bg-emerald-600 hover:bg-emerald-700 text-white font-bold rounded-xl shadow-lg shadow-emerald-200 hover:shadow-emerald-300 transform hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2">
                                    <span>إرسال الرسالة</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="lucide lucide-send">
                                        <path
                                            d="M14.536 21.686a.5.5 0 0 0 .937-.024l6.5-19a.496.496 0 0 0-.635-.635l-19 6.5a.5.5 0 0 0-.024.937l7.93 3.18a2 2 0 0 1 1.112 1.11z" />
                                        <path d="m21.854 2.147-10.94 10.939" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="h-[500px] w-full bg-slate-100 relative z-0">
            <div id="contact-map" class="w-full h-full z-0"></div>


        </section>
    </main>

@endsection

@section('script')

<script src="{{ asset('js/content.js') }}"></script>

    <!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

@endsection



