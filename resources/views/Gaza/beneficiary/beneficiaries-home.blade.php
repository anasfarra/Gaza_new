@extends('Gaza.beneficiary.parent-beneficiaries')
@section('content')

      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
      <main class="pt-20">
        <div class="overflow-x-hidden">
          <section class="relative text-white py-20 lg:py-32 overflow-hidden bg-slate-900">
            <div class="absolute inset-0 z-0">
              <video autoplay muted loop playsinline poster="{{ asset('src/assets/img/projects/family-ahmed-rebuild.webp') }}"
                class="w-full h-full object-cover opacity-30 mix-blend-overlay">
                <source src="{{ asset('src/assets/video/hero-background.mp4') }}" type="video/mp4">
              </video>
              <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/80 to-emerald-900/40"></div>
            </div>

            <div
              class="absolute top-0 right-0 -mr-20 -mt-20 w-[600px] h-[600px] bg-emerald-500 rounded-full blur-[120px] opacity-20 animate-blob">
            </div>
            <div
              class="absolute bottom-0 left-0 -ml-20 -mb-20 w-[600px] h-[600px] bg-teal-500 rounded-full blur-[120px] opacity-20 animate-blob animation-delay-2000">
            </div>

            <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
              <span
                class="inline-block py-1 px-3 rounded-full bg-emerald-500/20 border border-emerald-500/30 text-emerald-300 text-xs font-bold tracking-wider mb-6 fade-in-up"
                style="animation-delay: 0.1s;">
                معاً لإعادة البناء
              </span>
              <h1 class="text-4xl sm:text-5xl lg:text-7xl font-extrabold mb-6 leading-tight fade-in-up"
                style="animation-delay: 0.2s;">
                نبني الحجر.. <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-400 to-teal-300">لنحفظ كرامة
                  البشر</span>
              </h1>
              <p class="text-lg sm:text-xl text-slate-300 mb-10 max-w-2xl mx-auto leading-relaxed fade-in-up"
                style="animation-delay: 0.3s;">
                منصة رقمية موحدة تربط العائلات المتضررة، المانحين، والمقاولين لضمان الشفافية والسرعة في إعادة إعمار قطاع
                غزة.
              </p>

              <div class="flex flex-col sm:flex-row gap-4 justify-center items-center fade-in-up"
                style="animation-delay: 0.4s;">
                <a href="{{ route('Gaza.login-DonorControl-Panel') }}"
                  class="w-full sm:w-auto px-8 py-4 text-base font-bold text-white bg-emerald-600 rounded-xl shadow-lg shadow-emerald-900/20 hover:bg-emerald-500 hover:shadow-emerald-500/30 hover:-translate-y-1 transition-all duration-300 flex items-center justify-center gap-2">
                  تبرع الآن
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-heart">
                    <path
                      d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5 4.5 1.5-1.5-1-4.5-1.5 5.5-1.5 8c2.49 0 4 1.76 5.5 10.5c0 0-6 6.5-6.5-4.5 5.5V14Z" />
                  </svg>
                </a>
                <a href="{{ route('Gaza.beneficiaries-projects') }}"
                  class="w-full sm:w-auto px-8 py-4 text-base font-bold text-white bg-white/10 border border-white/20 backdrop-blur-sm rounded-xl hover:bg-white/20 hover:border-white/40 transition-all duration-300 flex items-center justify-center gap-2">
                  تصفح المشاريع
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-right">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" />
                  </svg>
                </a>
              </div>

              <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-4 max-w-4xl mx-auto fade-in-up"
                style="animation-delay: 0.6s;">
                <div class="bg-slate-800/50 backdrop-blur-md p-4 rounded-xl border border-slate-700/50">
                  <div class="text-2xl font-bold text-emerald-400">1,247</div>
                  <div class="text-xs text-slate-400">مشروع نشط</div>
                </div>
                <div class="bg-slate-800/50 backdrop-blur-md p-4 rounded-xl border border-slate-700/50">
                  <div class="text-2xl font-bold text-emerald-400">$45M</div>
                  <div class="text-xs text-slate-400">إجمالي التمويل</div>
                </div>
                <div class="bg-slate-800/50 backdrop-blur-md p-4 rounded-xl border border-slate-700/50">
                  <div class="text-2xl font-bold text-emerald-400">8,934</div>
                  <div class="text-xs text-slate-400">مستفيد</div>
                </div>
                <div class="bg-slate-800/50 backdrop-blur-md p-4 rounded-xl border border-slate-700/50">
                  <div class="text-2xl font-bold text-emerald-400">356</div>
                  <div class="text-xs text-slate-400">مشروع منجز</div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-12 bg-white border-b">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 text-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-building w-8 h-8 mx-auto mb-3 text-green-600">
                    <rect width="16" height="20" x="4" y="2" rx="2" ry="2"></rect>
                    <path d="M9 22v-4h6v4"></path>
                    <path d="M8 6h.01"></path>
                    <path d="M16 6h.01"></path>
                    <path d="M12 6h.01"></path>
                    <path d="M12 10h.01"></path>
                    <path d="M12 14h.01"></path>
                    <path d="M16 10h.01"></path>
                    <path d="M16 14h.01"></path>
                    <path d="M8 10h.01"></path>
                    <path d="M8 14h.01"></path>
                  </svg>
                  <div class="text-3xl font-bold text-neutral-900 mb-1">1,247</div>
                  <div class="text-sm text-neutral-500">مشاريع نشطة</div>
                </div>
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 text-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-dollar-sign w-8 h-8 mx-auto mb-3 text-green-600">
                    <line x1="12" x2="12" y1="2" y2="22"></line>
                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                  </svg>
                  <div class="text-3xl font-bold text-neutral-900 mb-1">$45.2M</div>
                  <div class="text-sm text-neutral-500">إجمالي التمويل</div>
                </div>
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 text-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-map-pin w-8 h-8 mx-auto mb-3 text-green-600">
                    <path
                      d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                    </path>
                    <circle cx="12" cy="10" r="3"></circle>
                  </svg>
                  <div class="text-3xl font-bold text-neutral-900 mb-1">8,934</div>
                  <div class="text-sm text-neutral-500">المستفيدون</div>
                </div>
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-6 text-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-circle-check-big w-8 h-8 mx-auto mb-3 text-green-600">
                    <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                    <path d="m9 11 3 3L22 4"></path>
                  </svg>
                  <div class="text-3xl font-bold text-neutral-900 mb-1">356</div>
                  <div class="text-sm text-neutral-500">مشاريع منجزة</div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-neutral-900 mb-4">كيف تعمل المنصة</h2>
                <p class="text-neutral-600 max-w-2xl mx-auto">خطوات بسيطة تضمن الشفافية والسرعة في إعادة الإعمار</p>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Step 1 -->
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-8 text-center hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                  <div
                    class="w-16 h-16 mx-auto bg-green-50 rounded-full flex items-center justify-center text-3xl shadow-sm border border-green-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="text-green-600">
                      <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                      <circle cx="12" cy="10" r="3" />
                    </svg>
                  </div>
                  <div>
                    <h3 class="text-xl font-bold mb-3 text-neutral-900">1. توثيق الأضرار</h3>
                    <p class="text-neutral-600 leading-relaxed text-sm">تسجيل الأضرار جغرافياً وإرفاق الصور والوثائق
                      اللازمة للتحقق من الحالة.</p>
                  </div>
                </div>

                <!-- Step 2 -->
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-8 text-center hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                  <div
                    class="w-16 h-16 mx-auto bg-amber-50 rounded-full flex items-center justify-center text-3xl shadow-sm border border-amber-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="text-amber-600">
                      <line x1="12" x2="12" y1="2" y2="22"></line>
                      <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                  </div>
                  <div>
                    <h3 class="text-xl font-bold mb-3 text-neutral-900">2. التمويل المباشر</h3>
                    <p class="text-neutral-600 leading-relaxed text-sm">ربط المتضررين بالمانحين مباشرة لضمان وصول الدعم
                      للمشاريع المعتمدة.</p>
                  </div>
                </div>

                <!-- Step 3 -->
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border p-8 text-center hover:shadow-lg transition-all duration-300 hover:-translate-y-1">
                  <div
                    class="w-16 h-16 mx-auto bg-blue-50 rounded-full flex items-center justify-center text-3xl shadow-sm border border-blue-100">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="text-blue-600">
                      <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                      <path d="M14 2v6h6" />
                      <path d="M16 13H8" />
                      <path d="M16 17H8" />
                      <path d="M10 9H8" />
                    </svg>
                  </div>
                  <div>
                    <h3 class="text-xl font-bold mb-3 text-neutral-900">3. تتبع البناء</h3>
                    <p class="text-neutral-600 leading-relaxed text-sm">متابعة تقدم المشاريع بشفافية كاملة وتحديثات حية
                      ومستمرة.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="flex justify-between items-center mb-12">
                <h2 class="text-3xl font-bold">مشاريع مميزة</h2><a href="{{ route('Gaza.beneficiaries-projects') }}" data-discover="true"><button
                    data-slot="button"
                    class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 shrink-0 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-9 px-4 py-2 has-[&gt;svg]:px-3 gap-2">عرض
                    الكل<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-arrow-right w-4 h-4">
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></button></a>
              </div>
              <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-shadow">
                  <div class="relative h-48">
                    <!-- REPLACED -->
                    <img src="{{ asset('src/assets/img/branding/gaza13-1737459595 (1).webp') }}" alt="مشروع إعادة بناء منزل عائلة أحمد"
                      class="w-full h-full object-cover" loading="lazy">
                    <div
                      class="absolute top-3 left-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                      75% ممول</div>
                  </div>
                  <div class="p-6">
                    <h3 class="font-bold text-lg mb-2">مشروع إعادة بناء منزل عائلة أحمد</h3>
                    <p class="text-sm text-neutral-500 mb-4 flex items-center gap-1"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-map-pin w-4 h-4">
                        <path
                          d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                        </path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>غزة - حي الشجاعية</p>
                    <div class="mb-3">
                      <div class="flex justify-between text-sm mb-1"><span class="text-neutral-600">$85,000
                          ممول</span><span class="text-neutral-500">$100,000</span></div>
                      <div class="w-full bg-neutral-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 75%;"></div>
                      </div>
                    </div>
                    <div class="flex gap-2"><a href="{{ route('Gaza.login-DonorControl-Panel') }}" data-discover="true"><button
                          data-slot="button"
                          class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1">تبرع
                          الآن</button></a><a href="{{ route('Gaza.beneficiaries-order-status') }}" style="flex: 1;"><button
                          data-slot="button"
                          class="w-full inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1">عرض
                          التفاصيل</button></a></div>
                  </div>
                </div>
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-shadow">
                  <div class="relative h-48">
                    <!-- REPLACED -->
                    <img src="{{ asset('src/assets/img/branding/مجموعة_صور_لقطاع_غزة_قبل_الحرب_الأخيرة_12.jpg') }}"
                      alt="إعادة تأهيل مدرسة النور" class="w-full h-full object-cover" loading="lazy">
                    <div
                      class="absolute top-3 left-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                      45% ممول</div>
                  </div>
                  <div class="p-6">
                    <h3 class="font-bold text-lg mb-2">بناء مركز صحي محلي</h3>
                    <p class="text-sm text-neutral-500 mb-4 flex items-center gap-1"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-map-pin w-4 h-4">
                        <path
                          d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                        </path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>رفح - المنطقة الشرقية</p>
                    <div class="mb-3">
                      <div class="flex justify-between text-sm mb-1"><span class="text-neutral-600">$225,000
                          ممول</span><span class="text-neutral-500">$500,000</span></div>
                      <div class="w-full bg-neutral-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 45%;"></div>
                      </div>
                    </div>
                    <div class="flex gap-2"><a href="{{ route('Gaza.login-DonorControl-Panel') }}" data-discover="true"><button
                          data-slot="button"
                          class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1">تبرع
                          الآن</button></a><a href="{{ route('Gaza.beneficiaries-order-status') }}" style="flex: 1;"><button
                          data-slot="button"
                          class="w-full inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1">عرض
                          التفاصيل</button></a></div>
                  </div>
                </div>
                <div data-slot="card"
                  class="bg-card text-card-foreground flex flex-col gap-6 rounded-xl border overflow-hidden hover:shadow-xl transition-shadow">
                  <div class="relative h-48">
                    <!-- REPLACED -->
                    <img
                      src="{{ asset('src/assets/img/branding/2024-04-18T113727Z_1635003969_RC2467ASO0N1_RTRMADP_3_ISRAEL-PALESTINIANS-GAZA-SCHOOLS.jpg') }}"
                      alt="إعادة تأهيل مدرسة النور" class="w-full h-full object-cover" loading="lazy">
                    <div
                      class="absolute top-3 left-3 bg-green-600 text-white px-3 py-1 rounded-full text-xs font-semibold">
                      90% ممول</div>
                  </div>
                  <div class="p-6">
                    <h3 class="font-bold text-lg mb-2">إعادة تأهيل مدرسة النور</h3>
                    <p class="text-sm text-neutral-500 mb-4 flex items-center gap-1"><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-map-pin w-4 h-4">
                        <path
                          d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0">
                        </path>
                        <circle cx="12" cy="10" r="3"></circle>
                      </svg>خان يونس - المنطقة الوسطى</p>
                    <div class="mb-3">
                      <div class="flex justify-between text-sm mb-1"><span class="text-neutral-600">$180,000
                          ممول</span><span class="text-neutral-500">$200,000</span></div>
                      <div class="w-full bg-neutral-200 rounded-full h-2">
                        <div class="bg-green-600 h-2 rounded-full" style="width: 90%;"></div>
                      </div>
                    </div>
                    <div class="flex gap-2"><a href="{{ route('Gaza.login-DonorControl-Panel') }}" data-discover="true"><button
                          data-slot="button"
                          class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive bg-primary text-primary-foreground hover:bg-primary/90 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1">تبرع
                          الآن</button></a><a href="{{ route('Gaza.beneficiaries-order-status') }}" style="flex: 1;"><button
                          data-slot="button"
                          class="w-full inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg:not([class*='size-'])]:size-4 [&amp;_svg]:shrink-0 outline-none focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive border bg-background text-foreground hover:bg-accent hover:text-accent-foreground dark:bg-input/30 dark:border-input dark:hover:bg-input/50 h-8 rounded-md gap-1.5 px-3 has-[&gt;svg]:px-2.5 flex-1">عرض
                          التفاصيل</button></a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-16 bg-white text-neutral-900">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
              <div class="text-center mb-12">
                <h2 class="text-3xl font-bold mb-4">خريطة توثيق الأضرار</h2>
                <p class="text-neutral-600 max-w-2xl mx-auto mb-6">استعرض خريطة تفصيلية للمناطق المتضررة وحالة مشاريع
                  إعادة الإعمار</p>
              </div>

              <div class="relative rounded-2xl overflow-hidden border border-neutral-200 shadow-xl mb-12 group"
                style="height: 600px;">
                <div id="home-damage-map" class="w-full h-full z-0 transition-all duration-700"></div>

                <div
                  class="absolute bottom-6 right-6 bg-white/95 backdrop-blur-sm border border-neutral-200 text-neutral-800 p-5 rounded-xl shadow-lg z-[400] text-sm hidden md:block w-48"
                  dir="rtl">
                  <h4 class="font-bold mb-3 text-base border-b border-neutral-200 pb-2">مفتاح الخريطة</h4>
                  <div class="flex items-center gap-3 mb-2">
                    <span class="w-3 h-3 rounded-full bg-red-500 shadow-sm"></span>
                    <span class="text-neutral-600">أضرار كلية</span>
                  </div>
                  <div class="flex items-center gap-3 mb-2">
                    <span class="w-3 h-3 rounded-full bg-orange-500 shadow-sm"></span>
                    <span class="text-neutral-600">أضرار جزئية</span>
                  </div>
                  <div class="flex items-center gap-3">
                    <span class="w-3 h-3 rounded-full bg-emerald-500 shadow-sm"></span>
                    <span class="text-neutral-600">قيد الإعمار</span>
                  </div>
                </div>
              </div>

              <div class="text-center">
                <a href="{{ route('Gaza.beneficiaries-damage-map') }}" data-discover="true"><button data-slot="button"
                    class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium transition-all bg-green-600 text-white hover:bg-green-700 h-10 rounded-md px-8 gap-2">
                    عرض الخريطة الكاملة
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-arrow-right w-5 h-5">
                      <path d="M5 12h14"></path>
                      <path d="m12 5 7 7-7 7"></path>
                    </svg></button></a>
              </div>
            </div>
          </section>
                    <script src="{{ asset('js/map-init.js') }}"></script>

@endsection

