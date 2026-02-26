// filepath: js/map-init.js
document.addEventListener('DOMContentLoaded', function () {
    // Initialize map centered on Gaza Strip
    var map = L.map('home-damage-map').setView([31.42, 34.38], 11);

    // Add Standard OpenStreetMap Tiles (Light/Clean)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        maxZoom: 19
    }).addTo(map);

    // Sample Data Points (Gaza Strip)
    const locations = [
        { lat: 31.52, lng: 34.45, type: 'red', title: 'حي الشجاعية', desc: 'تدمير كلي للبنية التحتية' },
        { lat: 31.50, lng: 34.42, type: 'green', title: 'مستشفى الشفاء', desc: 'أعمال ترميم جارية' },
        { lat: 31.43, lng: 34.38, type: 'orange', title: 'مخيم النصيرات', desc: 'أضرار جزئية في المنازل' },
        { lat: 31.35, lng: 34.30, type: 'red', title: 'خانيونس - وسط', desc: 'أضرار جسيمة' },
        { lat: 31.28, lng: 34.25, type: 'green', title: 'رفح - مدارس الأونروا', desc: 'مشروع صيانة وإيواء' }
    ];

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

    locations.forEach(loc => {
        L.marker([loc.lat, loc.lng], {
            icon: createIcon(colors[loc.type])
        })
            .addTo(map)
            .bindPopup(`<div style="text-align: right; font-family: 'Cairo', sans-serif; min-width: 150px;">
            <h3 style="font-weight: bold; margin-bottom: 6px; font-size: 16px; color: #111;">${loc.title}</h3>
            <p style="margin: 0; color: #555; font-size: 13px; line-height: 1.4;">${loc.desc}</p>
        </div>`);
    });
});
