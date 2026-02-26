document.addEventListener('DOMContentLoaded', function () {
            // Check if map element exists
            var mapElement = document.getElementById('damage-map-full');
            if (!mapElement) return;

            // Initialize map centered on Gaza Strip
            var map = L.map('damage-map-full').setView([31.42, 34.38], 11);

            // Add Standard OpenStreetMap Tiles (Light/Clean)
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                maxZoom: 19
            }).addTo(map);

            // Custom Icons
            const createIcon = (color) => {
                return L.divIcon({
                    className: 'custom-div-icon',
                    html: `<div style="background-color: ${color}; width: 14px; height: 14px; border-radius: 50%; border: 2px solid white; box-shadow: 0 2px 4px rgba(0,0,0,0.3);"></div>`,
                    iconSize: [14, 14],
                    iconAnchor: [7, 7]
                });
            };

            const colors = {
                'red': '#ef4444',
                'orange': '#f97316',
                'green': '#10b981'
            };

            // Sample Data Points (Expanded for the full map page)
            const locations = [
                { lat: 31.52, lng: 34.45, type: 'red', title: 'حي الشجاعية', desc: 'تدمير كلي للبنية التحتية' },
                { lat: 31.50, lng: 34.42, type: 'green', title: 'مستشفى الشفاء', desc: 'أعمال ترميم جارية' },
                { lat: 31.43, lng: 34.38, type: 'orange', title: 'مخيم النصيرات', desc: 'أضرار جزئية في المنازل' },
                { lat: 31.35, lng: 34.30, type: 'red', title: 'خانيونس - وسط', desc: 'أضرار جسيمة' },
                { lat: 31.28, lng: 34.25, type: 'green', title: 'رفح - مدارس الأونروا', desc: 'مشروع صيانة وإيواء' },
                // Additional points for the full map view
                { lat: 31.55, lng: 34.48, type: 'red', title: 'بيت حانون', desc: 'منطقة غير صالحة للسكن' },
                { lat: 31.53, lng: 34.46, type: 'orange', title: 'بيت لاهيا', desc: 'أضرار في الطرق الرئيسية' },
                { lat: 31.45, lng: 34.35, type: 'green', title: 'دير البلح', desc: 'توزيع مساعدات وتموين' }
            ];


            // Render Default Locations
            locations.forEach(loc => {
                L.marker([loc.lat, loc.lng], {
                    title: loc.title,
                    icon: createIcon(colors[loc.type] || colors['red'])
                })
                    .addTo(map)
                    .bindPopup(`<div style="text-align: right; font-family: 'Cairo', sans-serif; min-width: 150px;">
                    <h3 style="font-weight: bold; margin-bottom: 6px; font-size: 16px; color: #111;">${loc.title}</h3>
                    <p style="margin: 0; color: #555; font-size: 13px; line-height: 1.4;">${loc.desc}</p>
                </div>`);
            });

            // Load User Reports from LocalStorage
            try {
                const userReports = JSON.parse(localStorage.getItem('gazapy_reports') || '[]');
                if (userReports.length > 0) {
                    userReports.forEach(report => {
                        let colorKey = 'orange'; // Default
                        if (report.type === 'total') colorKey = 'red';
                        // Map type to marker color
                        const markerColor = colors[colorKey] || colors['orange'];

                        L.marker([report.lat, report.lng], {
                            icon: createIcon(markerColor)
                        })
                            .addTo(map)
                            .bindPopup(`<div style="text-align: right; font-family: 'Cairo', sans-serif; min-width: 150px;">
                            <h3 style="font-weight: bold; margin-bottom: 6px; font-size: 16px; color: #111;">بلاغ جديد</h3>
                            <p style="margin: 0; color: #555; font-size: 13px; line-height: 1.4;">${report.desc}</p>
                            <small style="display:block; margin-top:5px; color:#888;">تمت الإضافة من المستخدم</small>
                        </div>`);
                    });
                }
            } catch (e) { console.error(e); }
        });