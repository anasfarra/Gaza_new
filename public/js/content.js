document.addEventListener('DOMContentLoaded', function () {
            // Initialize map for Contact Page
            var map = L.map('contact-map').setView([31.5146, 34.4563], 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            // Office Icon
            const officeIcon = L.divIcon({
                className: 'custom-div-icon',
                html: `<div style="background-color: #059669; width: 40px; height: 40px; border-radius: 50%; border: 3px solid white; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06); display: flex; align-items: center; justify-content: center;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 21h18"/><path d="M5 21V7l8-4 8 4v14"/><path d="M17 21v-8.5a1.5 1.5 0 0 0-1.5-1.5h-3a1.5 1.5 0 0 0-1.5 1.5V21"/><path d="M7 13.5V21"/><path d="M17 21v-8.5a1.5 1.5 0 0 0-1.5-1.5h-3a1.5 1.5 0 0 0-1.5 1.5V21"/></svg>
                       </div>`,
                iconSize: [40, 40],
                iconAnchor: [20, 20],
                popupAnchor: [0, -25]
            });

            L.marker([31.5146, 34.4563], { icon: officeIcon }).addTo(map)
                .bindPopup('<div style="text-align: right; font-family: Cairo, sans-serif;"><b>مقر منصة إعمار غزة</b><br>شارع عمر المختار، غزة</div>')
                .openPopup();
        });