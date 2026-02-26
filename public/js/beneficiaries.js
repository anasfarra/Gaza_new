document.addEventListener('DOMContentLoaded', function () {
            // Initial Map setup
            var map = L.map('map').setView([31.42, 34.38], 11);
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            var marker;

            map.on('click', function (e) {
                var lat = e.latlng.lat;
                var lng = e.latlng.lng;

                if (marker) {
                    map.removeLayer(marker);
                }

                marker = L.marker([lat, lng]).addTo(map);

                // Update inputs
                document.getElementById('latitude').value = lat;
                document.getElementById('longitude').value = lng;
                document.getElementById('location').value = `إحداثيات: ${lat.toFixed(5)}, ${lng.toFixed(5)}`;
            });

            // Handle Form Submission
            document.querySelector('form').addEventListener('submit', function (e) {
                e.preventDefault();

                const lat = document.getElementById('latitude').value;
                const lng = document.getElementById('longitude').value;

                if (!lat || !lng) {
                    alert('الرجاء تحديد الموقع على الخريطة');
                    return;
                }

                const report = {
                    id: Date.now(),
                    lat: parseFloat(lat),
                    lng: parseFloat(lng),
                    type: document.querySelector('select').value || 'partial', // Default fallback
                    desc: document.getElementById('description').value || 'تضرر في الممتلكات',
                    title: 'بلاغ جديد'
                };

                // Save to LocalStorage
                const reports = JSON.parse(localStorage.getItem('gazapy_reports') || '[]');
                reports.push(report);
                localStorage.setItem('gazapy_reports', JSON.stringify(reports));

                alert('تم استلام البلاغ بنجاح! سيظهر الآن على خريطة الأضرار.');
                window.location.href = 'damage-map.html';
            });
        });