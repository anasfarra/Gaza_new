@extends('Gaza.front.parent')

@section('title','marketplace')

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
            <h1 class="text-3xl font-bold mb-2 text-slate-800">سوق المواد والبناء</h1>
            <p class="text-slate-500">تصفح مواد البناء المتوفرة من موردين معتمدين بأفضل الأسعار</p>
          </div>

          <div class="relative w-full md:w-96">
            <input type="text" placeholder="ابحث عن مادة..."
              class="w-full pl-4 pr-10 py-2.5 border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 shadow-sm transition-all">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="lucide lucide-search absolute left-3 top-3 text-slate-400">
              <circle cx="11" cy="11" r="8" />
              <path d="m21 21-4.3-4.3" />
            </svg>
          </div>
        </div>

        <!-- Products Grid -->
        <div id="productsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

          <!-- Product 1 -->
          <div
            class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
            <div class="relative h-52 overflow-hidden bg-slate-100">
              <img src="{{ asset('src/assets/img/projects/material-cement.webp') }}" alt="أسمنت"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 mix-blend-multiply">
              <div
                class="absolute top-3 right-3 bg-emerald-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded-md shadow-sm flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 6 9 17l-5-5" />
                </svg>
                مورد موثق
              </div>
            </div>
            <div class="p-5 flex-grow flex flex-col">
              <h3 class="font-bold text-lg mb-1 text-slate-800 group-hover:text-emerald-700 transition-colors">أسمنت
                بورتلاند - 50 كجم</h3>
              <div class="flex items-center gap-2 mb-3">
                <span class="text-amber-500 flex items-center text-sm font-bold gap-1">★ 4.8</span>
                <span class="text-slate-300 text-xs">•</span>
                <span class="text-sm text-slate-500"> شركة الإعمار للمواد</span>
              </div>

              <div class="mt-auto">
                <div class="flex items-baseline justify-between mb-4 border-t border-slate-100 pt-4">
                  <div>
                    <span class="text-2xl font-extrabold text-emerald-600">$8.5</span>
                    <span class="text-xs text-slate-500 font-medium"> / كيس</span>
                  </div>
                  <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded-md border border-slate-200">متوفر:
                    500</span>
                </div>
                <div class="flex gap-2">
                  <button
                    class="flex-1 bg-emerald-600 text-white py-2.5 rounded-lg text-sm font-bold hover:bg-emerald-700 transition-colors flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="8" cy="21" r="1"></circle>
                      <circle cx="19" cy="21" r="1"></circle>
                      <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                    </svg>
                    طلب سعر
                  </button>
                  <button
                    onclick="openModal('أسمنت بورتلاند - 50 كجم', '$8.5', 'شركة الإعمار للمواد', 'src/assets/img/projects/material-cement.webp')"
                    class="border border-slate-200 px-4 py-2.5 rounded-lg text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-emerald-600 transition-colors">التفاصيل</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 2 -->
          <div
            class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
            <div class="relative h-52 overflow-hidden bg-slate-100">
              <img src="{{ asset('src/assets/img/projects/material-steel.webp') }}" alt="حديد"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 mix-blend-multiply"
                loading="lazy">
              <div
                class="absolute top-3 right-3 bg-emerald-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded-md shadow-sm flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 6 9 17l-5-5" />
                </svg> مورد موثق
              </div>
            </div>
            <div class="p-5 flex-grow flex flex-col">
              <h3 class="font-bold text-lg mb-1 text-slate-800 group-hover:text-emerald-700 transition-colors">حديد
                تسليح - 12 ملم</h3>
              <div class="flex items-center gap-2 mb-3">
                <span class="text-amber-500 flex items-center text-sm font-bold gap-1">★ 4.9</span>
                <span class="text-slate-300 text-xs">•</span>
                <span class="text-sm text-slate-500">مصنع الحديد الوطني</span>
              </div>

              <div class="mt-auto">
                <div class="flex items-baseline justify-between mb-4 border-t border-slate-100 pt-4">
                  <div>
                    <span class="text-2xl font-extrabold text-emerald-600">$650</span>
                    <span class="text-xs text-slate-500 font-medium"> / طن</span>
                  </div>
                  <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded-md border border-slate-200">متوفر:
                    50</span>
                </div>
                <div class="flex gap-2">
                  <button
                    class="flex-1 bg-emerald-600 text-white py-2.5 rounded-lg text-sm font-bold hover:bg-emerald-700 transition-colors flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                    طلب سعر
                  </button>
                  <button
                    onclick="openModal('حديد تسليح - 12 ملم', '$650', 'مصنع الحديد الوطني', 'src/assets/img/projects/material-steel.webp')"
                    class="border border-slate-200 px-4 py-2.5 rounded-lg text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-emerald-600 transition-colors">التفاصيل</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Product 3 -->
          <div
            class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
            <div class="relative h-52 overflow-hidden bg-slate-100">
              <img src="{{ asset('src/assets/img/projects/material-bricks.webp') }}" alt="طوب"
                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 mix-blend-multiply"
                loading="lazy">
              <div
                class="absolute top-3 right-3 bg-emerald-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded-md shadow-sm flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M20 6 9 17l-5-5" />
                </svg> مورد موثق
              </div>
            </div>
            <div class="p-5 flex-grow flex flex-col">
              <h3 class="font-bold text-lg mb-1 text-slate-800 group-hover:text-emerald-700 transition-colors">طوب أحمر
                - 20x10x6 سم</h3>
              <div class="flex items-center gap-2 mb-3">
                <span class="text-amber-500 flex items-center text-sm font-bold gap-1">★ 4.8</span>
                <span class="text-slate-300 text-xs">•</span>
                <span class="text-sm text-slate-500">مصنع الطوب</span>
              </div>

              <div class="mt-auto">
                <div class="flex items-baseline justify-between mb-4 border-t border-slate-100 pt-4">
                  <div>
                    <span class="text-2xl font-extrabold text-emerald-600">$0.55</span>
                    <span class="text-xs text-slate-500 font-medium"> / طوبة</span>
                  </div>
                  <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded-md border border-slate-200">متوفر:
                    10k</span>
                </div>
                <div class="flex gap-2">
                  <button
                    class="flex-1 bg-emerald-600 text-white py-2.5 rounded-lg text-sm font-bold hover:bg-emerald-700 transition-colors flex items-center justify-center gap-2 shadow-md hover:shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <circle cx="8" cy="21" r="1"></circle>
                      <circle cx="19" cy="21" r="1"></circle>
                      <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                    </svg>
                    طلب سعر
                  </button>
                  <button
                    onclick="openModal('طوب أحمر - 20x10x6 سم', '$0.55', 'مصنع الطوب', 'src/assets/img/projects/material-bricks.webp')"
                    class="border border-slate-200 px-4 py-2.5 rounded-lg text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-emerald-600 transition-colors">التفاصيل</button>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
      <!-- Product Details Modal (Hidden by default) -->
      <div id="productModal" class="fixed inset-0 z-[100] hidden" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <!-- Background backdrop -->
        <div class="fixed inset-0 bg-slate-900/75 transition-opacity backdrop-blur-sm" onclick="closeModal()"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">

            <!-- Modal panel -->
            <div
              class="relative transform overflow-hidden rounded-2xl bg-white text-right shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-2xl border border-slate-100">

              <!-- Close Button -->
              <button onclick="closeModal()"
                class="absolute left-4 top-4 text-slate-400 hover:text-slate-600 z-10 bg-white/80 rounded-full p-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M18 6 6 18" />
                  <path d="m6 6 12 12" />
                </svg>
              </button>

              <div class="flex flex-col md:flex-row">
                <!-- Image Section -->
                <div class="w-full md:w-2/5 h-64 md:h-auto bg-slate-100 relative">
                  <img id="modalImage" src="{{ asset('') }}" alt="Product" class="w-full h-full object-cover mix-blend-multiply">
                  <div class="absolute bottom-2 right-2 bg-emerald-600 text-white text-xs px-2 py-1 rounded">متوفر
                    حالياً</div>
                </div>

                <!-- Content Section -->
                <div class="w-full md:w-3/5 p-6 sm:p-8">
                  <div class="flex items-center gap-2 mb-2">
                    <span class="bg-blue-50 text-blue-700 text-xs font-bold px-2 py-1 rounded border border-blue-100">
                      المواد بناء أساسية</span>
                    <span class="flex items-center text-amber-500 text-xs font-bold gap-1">★ 4.8 (120 تقييم)</span>
                  </div>

                  <h3 id="modalTitle" class="text-2xl font-bold text-slate-900 mb-2"></h3>
                  <p class="text-slate-500 text-sm mb-6 leading-relaxed">
                    أسمنت بورتلاندي عالي الجودة مناسب لجميع أعمال الخرسانة والبناء والتشطيبات. مطابق للمواصفات
                    الفلسطينية والعالمية.
                  </p>

                  <!-- Specs Grid -->
                  <div class="grid grid-cols-2 gap-4 mb-6 bg-slate-50 p-4 rounded-xl border border-slate-100">
                    <div>
                      <span class="block text-xs text-slate-400">المورد</span>
                      <span id="modalSupplier" class="font-bold text-sm text-slate-800"></span>
                    </div>
                    <div>
                      <span class="block text-xs text-slate-400">الوزن / الوحدة</span>
                      <span class="font-bold text-sm text-slate-800">50 كجم</span>
                    </div>
                    <div>
                      <span class="block text-xs text-slate-400">بلد المنشأ</span>
                      <span class="font-bold text-sm text-slate-800">محلي / مستورد</span>
                    </div>
                    <div>
                      <span class="block text-xs text-slate-400">تاريخ الانتاج</span>
                      <span class="font-bold text-sm text-slate-800">جديد (2026)</span>
                    </div>
                  </div>

                  <div class="flex items-center justify-between pt-4 border-t border-slate-100">
                    <div>
                      <span id="modalPrice" class="text-3xl font-extrabold text-emerald-600"></span>
                      <span class="text-sm text-slate-400">شامل الضريبة</span>
                    </div>
                    <button
                      class="bg-emerald-600 text-white px-6 py-3 rounded-lg font-bold hover:bg-emerald-700 transition shadow-lg shadow-emerald-200">
                      أضف للطلب
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('script')

      <script src="{{ asset('js/marketplace.js') }}"></script>

@endsection



