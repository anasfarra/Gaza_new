// Modal functions
        function openProductModal(button) {
            const modal = document.getElementById('productModal');
            modal.classList.remove('hidden');

            // Check if we are editing
            if (button) {
                // Find parent product item
                const productItem = button.closest('.product-item');
                const name = productItem.querySelector('.product-name').textContent;
                const price = productItem.querySelector('.product-price').textContent;
                const stock = productItem.querySelector('.product-stock').textContent;
                const status = productItem.getAttribute('data-status');

                document.getElementById('productName').value = name;
                document.getElementById('productPrice').value = price;
                document.getElementById('productStock').value = stock;
                document.getElementById('productStatus').value = status;
                document.getElementById('modal-title').textContent = 'تعديل منتج';
            } else {
                // Clear form for new product
                document.getElementById('productForm').reset();
                document.getElementById('modal-title').textContent = 'إضافة منتج جديد';
            }
        }

        function saveProduct() {
            const name = document.getElementById('productName').value;
            const price = document.getElementById('productPrice').value;
            const stock = document.getElementById('productStock').value;
            const status = document.getElementById('productStatus').value;
            const imageInput = document.getElementById('productImage');

            if (!name || !price) {
                alert('الرجاء إدخال اسم المنتج والسعر');
                return;
            }

            const processProduct = (imageSrc) => {
                // 1. Save to Local Storage for Marketplace Integration
                const newProduct = {
                    id: Date.now(),
                    name: name,
                    price: price,
                    stock: stock,
                    status: status,
                    supplier: 'مورد حالي', // In a real app this would come from user session
                    image: imageSrc,
                    description: 'منتج عالي الجودة متوفر من المورد المعتمد',
                    rating: 5.0
                };

                let products = JSON.parse(localStorage.getItem('marketplace_products')) || [];
                products.push(newProduct);
                localStorage.setItem('marketplace_products', JSON.stringify(products));

                // 2. Update Supplier Table (Visual Feedback)
                const productsList = document.getElementById('productsList');
                const productHTML = `
                    <div class="product-item border rounded-lg p-4 hover:border-green-200 transition-colors" data-name="${name}" data-status="${status}">
                        <div class="flex items-start justify-between mb-3">
                            <div class="flex gap-4">
                                <div class="w-16 h-16 bg-gray-100 rounded-lg overflow-hidden flex-shrink-0">
                                    <img src="${newProduct.image}" alt="${name}" class="w-full h-full object-cover">
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900 product-name">${name}</h4>
                                    <div class="text-sm text-gray-500 mb-1">Stock: <span class="product-stock font-medium">${stock}</span></div>
                                    <div class="text-sm font-bold text-green-600 product-price">$${price}</div>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button onclick="openProductModal(this)" class="p-1 text-gray-400 hover:text-green-600 rounded-full hover:bg-green-50 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                </button>
                                <button onclick="deleteProduct(this)" class="p-1 text-gray-400 hover:text-red-600 rounded-full hover:bg-red-50 transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                `;
                productsList.insertAdjacentHTML('afterbegin', productHTML);

                closeProductModal();
                alert('تم حفظ المنتج بنجاح وإضافته إلى السوق');
            };

            if (imageInput.files && imageInput.files[0]) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    processProduct(e.target.result);
                };
                reader.readAsDataURL(imageInput.files[0]);
            } else {
                processProduct('src/assets/img/projects/material-cement.webp'); // Default placeholder
            }
        }

        function closeProductModal() {
            document.getElementById('productModal').classList.add('hidden');
        }

        function deleteProduct(button) {
            if (!confirm('هل أنت متأكد من حذف هذا المنتج؟ سيتم حذفه أيضاً من السوق.')) {
                return;
            }

            // Find parent product item
            const productItem = button.closest('.product-item');
            const productName = productItem.querySelector('.product-name').textContent;

            // 1. Remove from localStorage
            let products = JSON.parse(localStorage.getItem('marketplace_products')) || [];
            products = products.filter(p => p.name !== productName);
            localStorage.setItem('marketplace_products', JSON.stringify(products));

            // 2. Remove from DOM with animation
            productItem.style.transition = 'all 0.3s ease';
            productItem.style.opacity = '0';
            productItem.style.transform = 'translateX(-20px)';
            
            setTimeout(() => {
                productItem.remove();
                alert('تم حذف المنتج بنجاح من لوحة المورد والسوق');
            }, 300);
        }

        function openOrderDetailsModal(orderId) {
            const modal = document.getElementById('orderDetailsModal');
            modal.classList.remove('hidden');
            document.getElementById('orderIdDisplay').textContent = orderId;

            // Mock data population based on Order ID
            const itemsList = document.getElementById('orderItemsList');
            const totalDisplay = document.getElementById('orderTotalDisplay');

            itemsList.innerHTML = ''; // Clear previous

            if (orderId === 'ORD-2026-145') {
                const items = [
                    { name: 'أسمنت بورتلاند', qty: 50, price: 8.5 },
                    { name: 'رمل بناء', qty: 20, price: 35 },
                    { name: 'طوب بناء', qty: 1000, price: 0.5 }
                ];
                items.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = `${item.name} (${item.qty}) - $${item.price * item.qty}`;
                    itemsList.appendChild(li);
                });
                totalDisplay.textContent = '$5,680';
                document.getElementById('orderStatus').value = 'pending';
            } else if (orderId === 'ORD-2026-144') {
                const items = [
                    { name: 'حديد تسليح', qty: 15, price: 650 },
                    { name: 'أسمنت مقاوم', qty: 100, price: 9.5 }
                ];
                items.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = `${item.name} (${item.qty}) - $${item.price * item.qty}`;
                    itemsList.appendChild(li);
                });
                totalDisplay.textContent = '$12,450';
                document.getElementById('orderStatus').value = 'processing';
            }
        }

        function closeOrderDetailsModal() {
            document.getElementById('orderDetailsModal').classList.add('hidden');
        }

        // Filter functions
        const searchInput = document.getElementById('productSearch');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const productItems = document.querySelectorAll('.product-item');

        function filterProducts(statusFilter) {
            const searchTerm = searchInput.value.toLowerCase();

            // Update buttons style
            filterBtns.forEach(btn => {
                if (btn.dataset.filter === statusFilter) {
                    btn.classList.add('bg-green-100', 'text-green-800', 'border-green-200');
                    btn.classList.remove('bg-white', 'text-gray-600', 'border-gray-200');
                } else {
                    btn.classList.remove('bg-green-100', 'text-green-800', 'border-green-200');
                    btn.classList.add('bg-white', 'text-gray-600', 'border-gray-200');
                }
            });

            productItems.forEach(item => {
                const name = item.getAttribute('data-name').toLowerCase();
                const status = item.getAttribute('data-status');

                const matchesSearch = name.includes(searchTerm);
                const matchesStatus = statusFilter === 'all' || status === statusFilter;

                if (matchesSearch && matchesStatus) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }

        searchInput.addEventListener('input', () => {
            // Get currently active filter button
            const activeBtn = document.querySelector('.filter-btn.bg-green-100'); // simplistic check based on class
            const currentFilter = activeBtn ? activeBtn.dataset.filter : 'all';
            filterProducts(currentFilter);
        });

        // Status Color Logic (Programmatic) & Counters
        document.addEventListener('DOMContentLoaded', () => {
            // Helper to set colors
            function updateStatusColors() {
                const badges = document.querySelectorAll('.status-badge');
                badges.forEach(badge => {
                    const type = badge.getAttribute('data-status-type');
                    // Remove existing color classes first to be safe, or just overwrite
                    badge.className = 'status-badge inline-flex items-center rounded-md px-2 py-0.5 text-xs font-medium border transition-colors';

                    if (type === 'active') {
                        badge.classList.add('bg-green-100', 'text-green-700', 'border-green-200');
                    } else if (type === 'out-of-stock') {
                        badge.classList.add('bg-red-100', 'text-red-700', 'border-red-200');
                    }
                });
            }
            // Run initially
            updateStatusColors();

            // Counters Animation
            const counters = document.querySelectorAll('.counter');
            counters.forEach(counter => {
                const target = +counter.getAttribute('data-target');
                const decimal = +counter.getAttribute('data-decimal') || 0;
                const duration = 1000; // ms
                const increment = target / (duration / 16); // 60fps

                let current = 0;
                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.innerText = current.toFixed(decimal);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target.toFixed(decimal);
                        // Add comma for thousands if needed, simplified here
                        if (target > 1000) {
                            counter.innerText = target.toLocaleString();
                        }
                    }
                };
                updateCounter();
            });
        });