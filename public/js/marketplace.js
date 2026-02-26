function openModal(title, price, supplier, imageSrc) {
          document.getElementById('modalTitle').innerText = title;
          document.getElementById('modalPrice').innerText = price;
          document.getElementById('modalSupplier').innerText = supplier;
          document.getElementById('modalImage').src = imageSrc;
          document.getElementById('productModal').classList.remove('hidden');
        }

        function closeModal() {
          document.getElementById('productModal').classList.add('hidden');
        }

        // Load Products from Supplier Dashboard (Local Storage)
        document.addEventListener('DOMContentLoaded', () => {
          const products = JSON.parse(localStorage.getItem('marketplace_products')) || [];
          const grid = document.getElementById('productsGrid');

          products.forEach(product => {
            const productHTML = `
                <div class="bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 group flex flex-col h-full">
                    <div class="relative h-52 overflow-hidden bg-slate-100">
                    <img src="${product.image || 'src/assets/img/projects/material-cement.webp'}" alt="${product.name}"
                        class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 mix-blend-multiply">
                    <div
                        class="absolute top-3 right-3 bg-emerald-600/90 backdrop-blur-sm text-white text-[10px] font-bold px-2 py-1 rounded-md shadow-sm flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 6 9 17l-5-5" />
                        </svg>
                        مورد جديد
                    </div>
                    </div>
                    <div class="p-5 flex-grow flex flex-col">
                    <h3 class="font-bold text-lg mb-1 text-slate-800 group-hover:text-emerald-700 transition-colors">${product.name}</h3>
                    <div class="flex items-center gap-2 mb-3">
                        <span class="text-amber-500 flex items-center text-sm font-bold gap-1">★ 5.0</span>
                        <span class="text-slate-300 text-xs">•</span>
                        <span class="text-sm text-slate-500">${product.supplier || 'مورد محلي'}</span>
                    </div>

                    <div class="mt-auto">
                        <div class="flex items-baseline justify-between mb-4 border-t border-slate-100 pt-4">
                        <div>
                            <span class="text-2xl font-extrabold text-emerald-600">$${product.price}</span>
                            <span class="text-xs text-slate-500 font-medium"> / وحدة</span>
                        </div>
                        <span class="text-xs bg-slate-100 text-slate-600 px-2 py-1 rounded-md border border-slate-200">متوفر:
                            ${product.stock || '100'}</span>
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
                            onclick="openModal('${product.name}', '$${product.price}', '${product.supplier || 'مورد محلي'}', '${product.image || 'src/assets/img/projects/material-cement.webp'}')"
                            class="border border-slate-200 px-4 py-2.5 rounded-lg text-sm font-medium text-slate-600 hover:bg-slate-50 hover:text-emerald-600 transition-colors">التفاصيل</button>
                        </div>
                    </div>
                    </div>
                </div>
                `;
            grid.insertAdjacentHTML('beforeend', productHTML);
          });
        });