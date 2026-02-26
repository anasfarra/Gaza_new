@extends('Gaza.beneficiary.parent-beneficiaries')

@section('title','beneficiaries')

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
                <div class="min-h-screen bg-neutral-50">
                    <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
                        <div class="mb-8">
                            <h1 class="text-3xl font-bold mb-2">بوابة المستفيدين</h1>
                            <p class="text-neutral-600">قدم طلب تعويض أو تتبع حالة طلباتك الحالية</p>
                        </div>

                        <div class="flex gap-3 mb-6">
                            <button
                                class="bg-primary text-white rounded-md text-sm font-medium h-9 px-4 hover:bg-green-700 transition-colors">تقديم
                                طلب</button>
                            <a href="{{ route('Gaza.beneficiaries-order-status') }}"
                                class="inline-flex items-center justify-center border bg-white rounded-md text-sm font-medium h-9 px-4 hover:bg-neutral-50 transition-colors">
                                حالة الطلب</a>
                        </div>

                        <div class="bg-white border rounded-xl p-8 shadow-sm">
                            <form class="space-y-8">
                                <div>
                                    <h3 class="font-bold text-lg mb-4 border-b pb-2">المعلومات الشخصية</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label class="text-sm font-medium" for="fullName">الاسم الكامل</label>
                                            <input
                                                class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
                                                id="fullName" placeholder="الاسم الكامل">
                                        </div>
                                        <div class="space-y-2">
                                            <label class="text-sm font-medium" for="nationalId">رقم الهوية</label>
                                            <input
                                                class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
                                                id="nationalId" placeholder="123456789">
                                        </div>
                                        <div class="space-y-2">
                                            <label class="text-sm font-medium" for="phone">رقم الهاتف</label>
                                            <input type="tel"
                                                class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
                                                id="phone" placeholder="+970 XX XXX XXXX">
                                        </div>
                                        <div class="space-y-2">
                                            <label class="text-sm font-medium" for="email">البريد الإلكتروني</label>
                                            <input type="email"
                                                class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
                                                id="email" placeholder="example@email.com">
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="font-bold text-lg mb-4 border-b pb-2">معلومات الضرر</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <div class="space-y-2">
                                            <label class="text-sm font-medium">نوع العقار</label>
                                            <select
                                                class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none bg-white">
                                                <option value="">اختر نوع العقار</option>
                                                <option value="residential">سكني</option>
                                                <option value="commercial">تجاري</option>
                                                <option value="agricultural">زراعي</option>
                                            </select>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="text-sm font-medium">مستوى الضرر</label>
                                            <select
                                                class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none bg-white">
                                                <option value="">اختر مستوى الضرر</option>
                                                <option value="total">دمار كلي</option>
                                                <option value="severe">دمار شديد</option>
                                                <option value="partial">دمار جزئي</option>
                                            </select>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="text-sm font-medium" for="location">الموقع (اختر من الخريطة
                                                لتحديد دقيق)</label>
                                            <input
                                                class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
                                                id="location" placeholder="المدينة والحي" readonly>
                                            <input type="hidden" id="latitude" name="latitude">
                                            <input type="hidden" id="longitude" name="longitude">
                                            <div id="map"
                                                class="w-full h-64 rounded-md border border-neutral-300 mt-2 z-0"></div>
                                        </div>
                                        <div class="space-y-2">
                                            <label class="text-sm font-medium" for="estimatedCost">التكلفة المقدرة
                                                (USD)</label>
                                            <input type="number"
                                                class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
                                                id="estimatedCost" placeholder="50000">
                                        </div>
                                    </div>
                                    <div class="mt-4 space-y-2">
                                        <label class="text-sm font-medium" for="description">وصف الضرر</label>
                                        <textarea
                                            class="w-full border rounded-md px-3 py-2 text-sm focus:ring-2 focus:ring-green-500 outline-none"
                                            id="description" placeholder="صف الأضرار بالتفصيل..." rows="4"></textarea>
                                    </div>
                                </div>

                                <div>
                                    <h3 class="font-bold text-lg mb-4 border-b pb-2">رفع الوثائق</h3>
                                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                        <div
                                            class="border-2 border-dashed border-neutral-200 rounded-lg p-6 text-center hover:border-green-600 transition-colors cursor-pointer group">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-8 h-8 mx-auto mb-2 text-neutral-400 group-hover:text-green-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5.586a1 1 0 0 1 .707.293l5.414 5.414a1 1 0 0 1 .293.707V19a2 2 0 0 1-2 2z" />
                                            </svg>
                                            <div class="text-sm font-medium">صورة الهوية</div>
                                            <div class="text-xs text-neutral-500 mb-3">PDF, JPG, PNG</div>
                                            <button type="button"
                                                class="text-xs bg-neutral-100 px-3 py-1 rounded hover:bg-neutral-200">رفع
                                                الملف</button>
                                        </div>
                                        <div
                                            class="border-2 border-dashed border-neutral-200 rounded-lg p-6 text-center hover:border-green-600 transition-colors cursor-pointer group">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-8 h-8 mx-auto mb-2 text-neutral-400 group-hover:text-green-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v5" />
                                            </svg>
                                            <div class="text-sm font-medium">صك الملكية</div>
                                            <div class="text-xs text-neutral-500 mb-3">PDF, JPG, PNG</div>
                                            <button type="button"
                                                class="text-xs bg-neutral-100 px-3 py-1 rounded hover:bg-neutral-200">رفع
                                                الملف</button>
                                        </div>
                                        <div
                                            class="border-2 border-dashed border-neutral-200 rounded-lg p-6 text-center hover:border-green-600 transition-colors cursor-pointer group">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="w-8 h-8 mx-auto mb-2 text-neutral-400 group-hover:text-green-600"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M4 16l4.586-4.586a2 2 0 0 1 2.828 0L16 16m-2-2l1.586-1.586a2 2 0 0 1 2.828 0L20 14m-6-6h.01M6 20h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2z" />
                                            </svg>
                                            <div class="text-sm font-medium">صور الأضرار</div>
                                            <div class="text-xs text-neutral-500 mb-3">JPG, PNG</div>
                                            <button type="button"
                                                class="text-xs bg-neutral-100 px-3 py-1 rounded hover:bg-neutral-200">رفع
                                                الصور</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex gap-4 pt-4">
                                    <button
                                        class="bg-primary text-white font-bold py-2 px-8 rounded-md hover:bg-green-700 flex-1 transition-colors"
                                        type="submit">إرسال الطلب</button>
                                    <button
                                        class="border border-neutral-300 py-2 px-8 rounded-md hover:bg-neutral-50 flex-1 transition-colors"
                                        type="button">إعادة تعيين</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </main>

@endsection


@section('script')
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="{{ asset('js/beneficiaries.js') }}"></script>
@endsection
