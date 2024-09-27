var map = L.map('map', {
    dragging: false,
    tap: false
}).setView([-6.3440899, 106.6760713], 7);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; OpenStreetMap contributors'
}).addTo(map);

map.on('click', function() {
    map.dragging.enable();
    map.tap.enable();
});