<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIS TAMAN TERBUKA</title>
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/nav.css') ?>">
    <link rel="stylesheet" href="<?= base_url('leaflet/leaflet.css') ?>">
    <link rel="icon" type="image/png" href="logo/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-white font-sans">
    <?php include(APPPATH . 'Views/templates/navbar.php'); ?>

    <section id="explore" class="explore py-40 relative h-screen bg-cover bg-center text-center" style="background-image: url('https://p4.wallpaperbetter.com/wallpaper/894/963/687/garden-4k-wonderful-desktop-wallpaper-preview.jpg');">
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50"></div>
        <div class="explore-content top-20 relative z-10 flex flex-col items-center justify-center h-full text-white">
            <h1 class="text-4xl md:text-7xl font-black tracking-tight leading-tight mb-4">WELCOME TO GIS <br>TAMAN TERBUKA</h1>
            <p class="text-lg mb-8">Website Khusus Kalian Yang Suka Dengan Eksplorasi Taman Di Provinsi Jakarta</p>
            <a href="<?= site_url('explore_place'); ?>" class="btn bg-yellow-500 text-white py-3 px-6 text-xl rounded-full hover:bg-yellow-600 transition duration-300 ease-in-out">Explore Now</a>
        </div>
    </section>

    <section id="about-jakarta" class="about-jakarta py-40 bg-gray-100">
        <div class="about-jakarta-content max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Tentang JAKARTA</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                <div class="description">
                    <p class="text-lg leading-relaxed text-gray-700">
                        Jakarta adalah sebuah provinsi di Jawa, Indonesia, yang dikenal dengan keanekaragaman
                        lanskap alamnya dan warisan budaya yang kaya. Terletak di ujung utara pulau Jawa, Jakarta
                        menawarkan berbagai taman yang menakjubkan, hutan tropis yang rimbun, dan pemandangan alam yang memukau.
                        Provinsi ini juga terkenal dengan kuliner lezat, dan keramahan yang hangat.
                    </p>
                </div>
                <div class="image">
                    <img class="rounded-lg shadow-lg" src="https://dprd-dkijakartaprov.go.id/wp-content/uploads/2024/05/DSC05289.jpg" alt="JAKARTA">
                </div>
            </div>
        </div>
    </section>

    <section id="taman-places" class="taman-places py-40 bg-gray-200">
        <div class="taman-places-cards max-w-6xl mx-auto text-center sm:px-6 lg:px-8 py-100 rounded-lg">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-black">OBJEK TAMAN</h2>
            <?php if (empty($places)): ?>
                <div class="no-places">
                    <img src="<?= base_url('images/bg-not-found.png') ?>" alt="No Places" class="mx-auto mb-4">
                    <p class="text-black">No places now.</p>
                </div>
            <?php else: ?>
                <div class="place-container grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8 justify-items-center">
                    <?php foreach ($places as $place) : ?>
                        <div class="place-card relative bg-white bg-opacity-90 rounded-lg overflow-hidden transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                            <div class="place-card-content absolute inset-0 bg-black bg-opacity-50 text-white p-6 flex flex-col items-center justify-center opacity-0 hover:opacity-100 transition duration-300">
                                <h3 class="text-xl font-semibold mb-4"><?= $place['name'] ?></h3>
                                <a href="<?= site_url('place_detail/' . $place['id']) ?>" class="btn bg-yellow-500 text-white py-2 px-4 rounded-full hover:bg-yellow-600 transition duration-300 ease-in-out">Place Details</a>
                            </div>
                            <img src="<?= base_url('uploads/' . $place['photo']) ?>" alt="<?= $place['name'] ?>" class="w-full h-80 object-cover">
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="pagination mt-8 flex justify-center">
                    <?= $pager->links() ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <section id="sdgs-info" class="sdgs-info py-20" style="background-image: url('https://images.unsplash.com/photo-1542281286-9e0a16bb7366?q=80&w=1080&fm=jpg&crop=entropy&cs=tinysrgb'); background-size: cover; background-position: center;">
        <div id="sdgs-cards" class="sdgs-cards max-w-6xl mx-auto text-center px-4 sm:px-6 lg:px-8 bg-black bg-opacity-50 py-20 rounded-lg">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-white">Sistem Informasi Geografis Taman Terbuka</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-white">
                <div class="p-4 bg-gray-900 bg-opacity-75 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Sistem Informasi Geografis</h3>
                    <p class="text-lg">Sistem Informasi Geografis berasal dari gabungan 3 kata: Sistem, Informasi, dan Geografis. Dari ketiganya, dapat dipahami bahwa Sistem Informasi Geografis adalah penggunaan sistem berisi informasi mengenai kondisi Bumi dalam sudut pandang keruangan.</p>
                </div>
                <div class="p-4 bg-gray-900 bg-opacity-75 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Taman Terbuka</h3>
                    <p class="text-lg">ruang terbuka hijau (RTH) adalah area memanjang/jalur dan/atau mengelompok, yang penggunaannya lebih bersifat terbuka, tempat tumbuh tanaman, baik yang tumbuh alamiah maupun sengaja ditanam.</p>
                </div>
                <div class="p-4 bg-gray-900 bg-opacity-75 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4">Manfaat</h3>
                    <p class="text-lg">Dengan adanya SIG, informasi taman seperti lokasi, fasilitas, dan harga tiket dapat dengan mudah diakses oleh calon pengunjung melalui peta digital.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="maps" class="maps py-40 bg-gray-100">
        <div class="max-w-3xl mx-auto text-center px-12 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-bold mb-16">Maps</h2>
            <div id="map" class="map h-80 w-full rounded-lg shadow-md"></div>
        </div>
    </section>

    <?php include(APPPATH . 'Views/templates/footer.php'); ?>

    <script src="<?= base_url('leaflet/leaflet.js') ?>"></script>    
    <script src="<?= base_url('js/MapsPrewiewLanding.js') ?>"></script>
    <script src="<?= base_url('js/script.js') ?>"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        // ScrollReveal
        ScrollReveal().reveal('.explore-content, .about-jakarta-content, .taman-places-cards, .map, .sdgs-cards', {
            duration: 1000,
            origin: 'bottom',
            distance: '50px',
            delay: 200
        });

        // Leaflet map
        var map = L.map('map').setView([-6.3440899, 106.6760713], 19); // zoom 8

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Informasi marker
        var places = <?= json_encode($places) ?>;

        places.forEach(function(place) {
            var marker = L.marker([place.latitude, place.longitude]).addTo(map).bindPopup(`<b>${place.name}</b><br>${place.location}<br>${place.description}`);
            
            marker.on('click', function() {
                openPopup(place);
            });
        });
    </script>
</body>
</html>
