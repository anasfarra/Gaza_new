@extends('Gaza.supplier.parent-supplier-control')

@section('title','supplier')

@section('css')

@endsection

@section('content')

      <!-- ========================================== -->
      <!-- Main Content Area                          -->
      <!-- ========================================== -->
    <main>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="mb-8">
                <h1 class="text-3xl font-bold mb-2">لوحة تحكم المورد</h1>
                <p class="text-neutral-600">إدارة المنتجات والطلبات</p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-card text-card-foreground flex flex-col gap-2 rounded-xl border p-6 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-8 h-8 text-blue-600 mb-2">
                        <path
                            d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z">
                        </path>
                        <path d="M12 22V12"></path>
                        <polyline points="3.29 7 12 12 20.71 7"></polyline>
                        <path d="m7.5 4.27 9 5.15"></path>
                    </svg>
                    <div class="text-3xl font-bold counter" data-target="45">0</div>
                    <div class="text-sm text-neutral-500">إجمالي المنتجات</div>
                </div>
                <div class="bg-card text-card-foreground flex flex-col gap-2 rounded-xl border p-6 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-8 h-8 text-green-600 mb-2">
                        <circle cx="8" cy="21" r="1"></circle>
                        <circle cx="19" cy="21" r="1"></circle>
                        <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12">
                        </path>
                    </svg>
                    <div class="text-3xl font-bold counter" data-target="12">0</div>
                    <div class="text-sm text-neutral-500">طلبات جديدة</div>
                </div>
                <div class="bg-card text-card-foreground flex flex-col gap-2 rounded-xl border p-6 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-8 h-8 text-purple-600 mb-2">
                        <line x1="12" x2="12" y1="2" y2="22"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                    <div class="text-3xl font-bold flex items-center gap-1">$<span class="counter"
                            data-target="45230">0</span></div>
                    <div class="text-sm text-neutral-500">المبيعات هذا الشهر</div>
                </div>
                <div class="bg-card text-card-foreground flex flex-col gap-2 rounded-xl border p-6 shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="w-8 h-8 text-yellow-600 mb-2">
                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                        <polyline points="16 7 22 7 22 13"></polyline>
                    </svg>
                    <div class="text-3xl font-bold counter" data-target="4.8" data-decimal="1">0.0</div>
                    <div class="text-sm text-neutral-500">معدل التقييم</div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                <div class="bg-card text-card-foreground flex flex-col rounded-xl border p-6 lg:col-span-2 shadow-sm">
                    <div class="flex flex-col gap-4 mb-6">
                        <div class="flex items-center justify-between">
                            <h3 class="font-bold text-lg">منتجاتي</h3>
                            <button onclick="openProductModal()"
                                class="inline-flex items-center justify-center text-sm font-medium bg-green-600 text-white h-8 rounded-md px-3 gap-2 hover:bg-green-700 transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5v14"></path>
                                </svg>
                                إضافة منتج
                            </button>
                        </div>
                        <div class="flex flex-col sm:flex-row gap-3 justify-between">
                            <div class="relative w-full sm:w-64">
                                <input type="text" id="productSearch" placeholder="بحث عن منتج..."
                                    class="w-full pl-3 pr-10 py-2 border rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-green-500">
                                <div class="absolute inset-y-0 right-0 pl-3 flex items-center pointer-events-none pr-3">
                                    <svg class="h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button onclick="filterProducts('all')"
                                    class="filter-btn active px-3 py-1.5 rounded-md text-xs font-medium bg-green-100 text-green-800 border border-green-200 hover:bg-green-200 transition-colors"
                                    data-filter="all">الكل</button>
                                <button onclick="filterProducts('active')"
                                    class="filter-btn px-3 py-1.5 rounded-md text-xs font-medium bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-colors"
                                    data-filter="active">نشط</button>
                                <button onclick="filterProducts('out-of-stock')"
                                    class="filter-btn px-3 py-1.5 rounded-md text-xs font-medium bg-white text-gray-600 border border-gray-200 hover:bg-gray-50 transition-colors"
                                    data-filter="out-of-stock">نفذت الكمية</button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4" id="productsList">
                        <div class="product-item border rounded-lg p-4 hover:border-green-200 transition-colors"
                            data-name="أسمنت بورتلاند - 50 كجم" data-status="active">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex-1">
                                    <h4 class="font-semibold mb-1 product-name">أسمنت بورتلاند - 50 كجم</h4>
                                    <div class="flex flex-wrap items-center gap-3 text-sm text-neutral-600">
                                        <span>السعر: $<span class="product-price">8.5</span></span>
                                        <span>•</span>
                                        <span>المخزون: <span class="product-stock">5000</span></span>
                                        <span>•</span>
                                        <span>المبيعات: 1,234</span>
                                    </div>
                                </div>
                                <span
                                    class="status-badge inline-flex items-center rounded-md px-2 py-0.5 text-xs font-medium border transition-colors"
                                    data-status-type="active">نشط</span>
                            </div>
                            <div class="flex gap-2">
                                <button onclick="openProductModal(this)"
                                    class="flex-1 inline-flex items-center justify-center border bg-white h-8 rounded-md text-sm gap-1 hover:bg-neutral-50 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                        </path>
                                    </svg>
                                    تعديل
                                </button>
                                <button
                                    class="px-3 border bg-white h-8 rounded-md text-sm hover:bg-neutral-50 transition-colors">عرض</button>
                                <button onclick="deleteProduct(this)"
                                    class="px-3 border border-red-200 bg-white h-8 rounded-md text-sm text-red-600 hover:bg-red-50 transition-colors inline-flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    حذف
                                </button>
                            </div>
                        </div>
                        <div class="product-item border rounded-lg p-4 hover:border-green-200 transition-colors"
                            data-name="حديد تسليح - 12 ملم" data-status="active">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex-1">
                                    <h4 class="font-semibold mb-1 product-name">حديد تسليح - 12 ملم</h4>
                                    <div class="flex flex-wrap items-center gap-3 text-sm text-neutral-600">
                                        <span>السعر: $<span class="product-price">650</span></span>
                                        <span>•</span>
                                        <span>المخزون: <span class="product-stock">150</span></span>
                                        <span>•</span>
                                        <span>المبيعات: 45</span>
                                    </div>
                                </div>
                                <span
                                    class="status-badge inline-flex items-center rounded-md px-2 py-0.5 text-xs font-medium border transition-colors"
                                    data-status-type="active">نشط</span>
                            </div>
                            <div class="flex gap-2">
                                <button onclick="openProductModal(this)"
                                    class="flex-1 inline-flex items-center justify-center border bg-white h-8 rounded-md text-sm gap-1 hover:bg-neutral-50 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                        </path>
                                    </svg>
                                    تعديل
                                </button>
                                <button
                                    class="px-3 border bg-white h-8 rounded-md text-sm hover:bg-neutral-50 transition-colors">عرض</button>
                                <button onclick="deleteProduct(this)"
                                    class="px-3 border border-red-200 bg-white h-8 rounded-md text-sm text-red-600 hover:bg-red-50 transition-colors inline-flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    حذف
                                </button>
                            </div>
                        </div>
                        <div class="product-item border rounded-lg p-4 hover:border-red-200 transition-colors"
                            data-name="رمل بناء - نظيف" data-status="out-of-stock">
                            <div class="flex items-start justify-between mb-3">
                                <div class="flex-1">
                                    <h4 class="font-semibold mb-1 product-name">رمل بناء - نظيف</h4>
                                    <div class="flex flex-wrap items-center gap-3 text-sm text-neutral-600">
                                        <span>السعر: $<span class="product-price">35</span></span>
                                        <span>•</span>
                                        <span>المخزون: <span class="product-stock">0</span></span>
                                        <span>•</span>
                                        <span>المبيعات: 234</span>
                                    </div>
                                </div>
                                <span
                                    class="status-badge inline-flex items-center rounded-md px-2 py-0.5 text-xs font-medium border transition-colors"
                                    data-status-type="out-of-stock">نفذت الكمية</span>
                            </div>
                            <div class="flex gap-2">
                                <button onclick="openProductModal(this)"
                                    class="flex-1 inline-flex items-center justify-center border bg-white h-8 rounded-md text-sm gap-1 hover:bg-neutral-50 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                        </path>
                                    </svg>
                                    تعديل
                                </button>
                                <button
                                    class="px-3 border bg-white h-8 rounded-md text-sm hover:bg-neutral-50 transition-colors">عرض</button>
                                <button onclick="deleteProduct(this)"
                                    class="px-3 border border-red-200 bg-white h-8 rounded-md text-sm text-red-600 hover:bg-red-50 transition-colors inline-flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="3 6 5 6 21 6"></polyline>
                                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    </svg>
                                    حذف
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-card text-card-foreground flex flex-col rounded-xl border p-6 shadow-sm">
                    <h3 class="font-bold text-lg mb-6">الطلبات الأخيرة</h3>
                    <div class="space-y-4">
                        <div class="border rounded-lg p-4 hover:shadow-sm transition-shadow">
                            <div class="mb-2">
                                <div class="font-semibold text-sm mb-1">ORD-2026-145</div>
                                <div class="text-xs text-neutral-600 mb-2">مشروع منزل عائلة أحمد</div>
                                <span
                                    class="inline-flex items-center rounded-md bg-yellow-100 px-2 py-0.5 text-xs font-medium text-yellow-700 border border-yellow-200">قيد
                                    الانتظار</span>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t mt-2">
                                <span class="text-sm text-neutral-600">3 منتجات</span>
                                <span class="font-bold text-green-600">$5,680</span>
                            </div>
                            <button onclick="openOrderDetailsModal('ORD-2026-145')"
                                class="w-full border bg-white h-8 rounded-md text-sm mt-3 hover:bg-neutral-50 transition-colors">عرض
                                التفاصيل</button>
                        </div>
                        <div class="border rounded-lg p-4 hover:shadow-sm transition-shadow">
                            <div class="mb-2">
                                <div class="font-semibold text-sm mb-1">ORD-2026-144</div>
                                <div class="text-xs text-neutral-600 mb-2">مركز صحي الرفح</div>
                                <span
                                    class="inline-flex items-center rounded-md bg-blue-100 px-2 py-0.5 text-xs font-medium text-blue-700 border border-blue-200">قيد
                                    المعالجة</span>
                            </div>
                            <div class="flex justify-between items-center pt-2 border-t mt-2">
                                <span class="text-sm text-neutral-600">5 منتجات</span>
                                <span class="font-bold text-green-600">$12,450</span>
                            </div>
                            <button onclick="openOrderDetailsModal('ORD-2026-144')"
                                class="w-full border bg-white h-8 rounded-md text-sm mt-3 hover:bg-neutral-50 transition-colors">عرض
                                التفاصيل</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Product Modal (Add/Edit) -->
    <div id="productModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity" onclick="closeProductModal()"></div>
        <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-lg overflow-hidden transform transition-all scale-100">
            <div class="px-6 py-4 border-b flex justify-between items-center bg-gray-50">
                <h3 class="font-bold text-lg text-gray-900" id="modal-title">إضافة منتج جديد</h3>
                <button onclick="closeProductModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>

            <div class="p-6">
                <form id="productForm" onsubmit="event.preventDefault(); saveProduct();">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">صورة المنتج</label>
                            <input type="file" id="productImage" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-green-50 file:text-green-700 hover:file:bg-green-100 cursor-pointer">
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">اسم المنتج</label>
                            <input type="text" id="productName" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="مثال: أسمنت بورتلاند">
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">السعر ($)</label>
                                <input type="number" id="productPrice" step="0.01" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="0.00">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">المخزون</label>
                                <input type="number" id="productStock" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="0">
                            </div>
                        </div>

                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">الحالة</label>
                            <select id="productStatus" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-green-500">
                                <option value="active">نشط</option>
                                <option value="out-of-stock">نفذت الكمية</option>
                                <option value="hidden">مخفي</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-8 flex justify-end gap-3">
                        <button type="button" onclick="closeProductModal()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">إلغاء</button>
                        <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-green-600 rounded-md hover:bg-green-700">حفظ المنتج</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Order Details Modal -->
    <div id="orderDetailsModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm transition-opacity" onclick="closeOrderDetailsModal()"></div>

        <div class="relative bg-white rounded-xl shadow-2xl w-full max-w-2xl overflow-hidden transform transition-all scale-100">
            <div class="px-6 py-4 border-b flex justify-between items-center bg-gray-50">
                <div>
                    <h3 class="font-bold text-lg text-gray-900">تفاصيل الطلب</h3>
                    <p class="text-sm text-gray-500" id="orderIdDisplay">ORD-XXXX-XXX</p>
                </div>
                <button onclick="closeOrderDetailsModal()" class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                </button>
            </div>

            <div class="p-6">
                <div class="mb-6">
                    <h4 class="text-sm font-bold text-gray-900 mb-3">المنتجات المطلوبة</h4>
                    <ul id="orderItemsList" class="space-y-2 text-sm text-gray-600 bg-gray-50 p-4 rounded-lg border border-gray-100">
                        <!-- Items will be populated by JS -->
                    </ul>
                </div>

                <div class="flex items-center justify-between border-t pt-4 mb-6">
                    <span class="font-bold text-gray-900">الإجمالي الكلي</span>
                    <span class="font-bold text-xl text-green-600" id="orderTotalDisplay">$0.00</span>
                </div>

                <div class="bg-blue-50 p-4 rounded-lg border border-blue-100 mb-6">
                    <label class="block text-sm font-medium text-blue-900 mb-2">تحديث حالة الطلب</label>
                    <div class="flex gap-2">
                        <select id="orderStatus" class="flex-1 px-3 py-2 text-sm border-blue-200 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 text-blue-800 bg-white">
                            <option value="pending">قيد الانتظار</option>
                            <option value="processing">قيد المعالجة</option>
                            <option value="shipped">تم الشحن</option>
                            <option value="delivered">تم التسليم</option>
                            <option value="cancelled">ملغي</option>
                        </select>
                        <button class="px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-md hover:bg-blue-700 transition-colors">تحديث</button>
                    </div>
                </div>
            </div>

            <div class="px-6 py-4 bg-gray-50 border-t flex justify-end">
                <button onclick="closeOrderDetailsModal()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md hover:bg-gray-50">إغلاق</button>
            </div>
        </div>
    </div>
@endsection



@section('script')

@endsection
