<x-frontend>


    <div id="map" style="width: 100%; height: 700px;"></div>
    <script>
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        });

        var osmHOT = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });


        var baseMaps = {
            "OpenStreetMap": osm,
            "OpenStreetMap.HOT": osmHOT
        };

        const map = L.map('map', {
            center: [-2.632362596110738, 110.12242134265324],
            zoom: 15,
            layers: [osm],
        });
        const layerControl = L.control.layers(baseMaps).addTo(map);

        var legend = L.control({
            position: 'bottomright'
        });

        const generatePopup = ({
            nama,
            foto,
            deskripsi,
            dest_lat,
            dest_long
        }) => {
            return `
                <h5 class="text-center">${nama}</h5>
                <img class="popup-img" src="${foto}" style="width:100%"/>
                <h6 class="text-center" >${deskripsi}</h6>
                `
        }

        @foreach ($list_tempat as $tempat)
            data = {
                nama: '{{ $tempat->nama_tempat }}',
                foto: '{{ url("public/$tempat->foto") }}',
                deskripsi: '{{ $tempat->deskripsi }}',
                dest_lat: '{{ $tempat->lat }}',
                dest_long: '{{ $tempat->long }}',
                icon: '{{ url("public/$tempat->icon") }}' // Misalnya, kolom 'icon' berisi nama berkas ikon
            }

            // Tentukan ikon berdasarkan data yang Anda ambil dari database
            var customIcon = L.icon({
                iconUrl: data.icon,
                iconSize: [32, 32], // Sesuaikan dengan ukuran ikon
                iconAnchor: [16, 32], // Sesuaikan dengan titik anchor ikon
                popupAnchor: [0, -32] // Sesuaikan dengan titik popup anchor
            });

            L.marker([data.dest_lat, data.dest_long], {
                icon: customIcon
            }).addTo(map).bindPopup(generatePopup(data))
        @endforeach


        legend.onAdd = function(map) {
            var div = L.DomUtil.create('div', 'legend');
            div.innerHTML =
                '<img src="public/images/dermaga.png" alt="Keterangan 1"> Pelabuhan<br>' +
                '<img src="public/images/masjid.png" alt="Keterangan 2"> Masjid<br>' +
                '<img src="public/images/volleyball.png" alt="Keterangan 2"> Lapangan Volly<br>' +
                '<img src="public/images/pemakaman.png" alt="Keterangan 3"> Pemakaman';

            return div;
        };

        legend.addTo(map);


        L.control.locate().addTo(map);
    </script>
    {{-- <script>
        var grayscaled_map = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                attribution: '&copy; qinul',
                id: 'mapbox/streets-v11'
            });

        var street_map = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; qinul'
        });

        var baseMaps = {
            "Grayscale": grayscaled_map,
            "Streets": street_map,
        };

        var map = L.map('map', {
            center: [-2.632362596110738, 110.12242134265324],
            zoom: 15,
            layers: [street_map],
        });

        var layerControl = L.control.layers(baseMaps).addTo(map);

        var legend = L.control({
            position: 'bottomright'
        });


        function generatePopup(data) {
            return `
                <h5 class="text-center">${data.nama}</h5>
                <img class="popup-img" src="${data.foto}" style="width:100%"/>
                <h6 class="text-center">${data.deskripsi}</h6>
            `;
        }

        // Pastikan Anda memiliki data yang sesuai dari PHP atau sumber lain
        @foreach ($list_tempat as $tempat)
            data = {
                nama: '{{ $tempat->nama_tempat }}',
                foto: '{{ url("public/$tempat->foto") }}',
                deskripsi: '{{ $tempat->deskripsi }}',
                dest_lat: '{{ $tempat->lat }}',
                dest_long: '{{ $tempat->long }}',
                icon: '{{ url("public/$tempat->icon") }}' // Misalnya, kolom 'icon' berisi nama berkas ikon
            }

            // Tentukan ikon berdasarkan data yang Anda ambil dari database
            var customIcon = L.icon({
                iconUrl: data.icon,
                iconSize: [32, 32], // Sesuaikan dengan ukuran ikon
                iconAnchor: [16, 32], // Sesuaikan dengan titik anchor ikon
                popupAnchor: [0, -32] // Sesuaikan dengan titik popup anchor
            });

            L.marker([data.dest_lat, data.dest_long], {
                icon: customIcon
            }).addTo(map).bindPopup(generatePopup(data))
        @endforeach

        data.forEach(function(item) {
            var customIcon = L.icon({
                iconUrl: item.icon,
                iconSize: [32, 32],
                iconAnchor: [16, 32],
                popupAnchor: [0, -32]
            });

            L.marker([item.dest_lat, item.dest_long], {
                icon: customIcon
            }).addTo(map).bindPopup(generatePopup(item));
        });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create('div', 'legend');
            div.innerHTML =
                '<img src="public/images/1.png" alt="Keterangan 1"> Dermaga'; // Gantilah "public/images/1.png" sesuai dengan path gambar sebenarnya
            return div;
        };
        legend.addTo(map);

        L.control.locate().addTo(map);
    </script> --}}

</x-frontend>
