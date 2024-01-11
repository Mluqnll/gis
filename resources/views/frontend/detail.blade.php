<x-frontend>

    <div id="map" style="width: 100%; height: 100vh;"></div>

    {{-- <script>
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        });

        var GoogleSatelit = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: 'Google Satellite'
        });

        var wilayahLayerGroup = {};
        var extendwilayahLayerGroup = {};
        var tempatLayerGroup = {};

        const map = L.map('map', {
            center: [-2.632362596110738, 110.12242134265324],
            zoom: 13,
            layers: [osm],
        });

        var baseMaps = {
            "Street": osm,
            "Satellite": GoogleSatelit
        };

        var overlayMaps = {};

        wilayahLayerGroup['{{ $wilayah->nama_wilayah }}'] = L.layerGroup().addTo(map);

        var wilayahGeoJson = <?= $wilayah->geojson ?>;
        var wilayah = L.geoJson(wilayahGeoJson, {
            style: {
                color: '{{ $wilayah->warna }}',
            },
        }).addTo(wilayahLayerGroup['{{ $wilayah->nama_wilayah }}']);

        @foreach ($extend as $extend)
            extendwilayahLayerGroup['{{ $extend->nama_extend_wilayah }}'] = L.layerGroup().addTo(map);

            // overlayerMaps["{{ $extend->extend }}"] = extendwilayahLayerGroup['{{ $wilayah->nama_wilayah }}'];
            L.geoJson(<?= $extend->extend_geojson ?>, {
                style: {
                    color: '{{ $extend->extend_warna }}',
                },
            }).addTo(extendwilayahLayerGroup['{{ $extend->nama_extend_wilayah }}']);
        @endforeach

        map.fitBounds(wilayah.getBounds());

        @foreach ($list_tempat as $tempat)
            tempatLayerGroup['{{ $tempat->nama_tempat }}'] = L.layerGroup().addTo(map);
            overlayMaps["{{ $tempat->nama_tempat }}"] = tempatLayerGroup['{{ $tempat->nama_tempat }}'];

            var customIcon = L.icon({
                iconUrl: "{{ url('public/' . $tempat->icon) }}",
                iconSize: [25, 25],
            });

            var informasi =
                '<table class="table table-bordered"><tr><th colspan="2"><img src ="{{ url('public/' . $tempat->foto) }}" width="200px"></th></tr><tbody><tr><td>Nama Tempat</td><td>{{ $tempat->nama_tempat }}</td></tr><tr><th>{{ $tempat->deskripsi }}</th></tr></tbody></table>';

            L.marker([<?= $tempat->posisi ?>], {
                icon: customIcon
            }).addTo(tempatLayerGroup['{{ $tempat->nama_tempat }}']).bindPopup(informasi);
        @endforeach

        const layerControl = L.control.layers(baseMaps, overlayMaps, {
            collapsed: false
        }).addTo(map);

        L.control.locate().addTo(map);
    </script> --}}

    <script>
        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        });

        var GoogleSatelit = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: 'Google Satellite'
        });

        var wilayahLayerGroup = {};
        var extendwilayahLayerGroup = {};
        var tempatLayerGroup = {};

        const map = L.map('map', {
            center: [-2.632362596110738, 110.12242134265324],
            zoom: 13,
            layers: [osm],
        });

        var baseMaps = {
            "Street": osm,
            "Satellite": GoogleSatelit
        };

        var overlayMaps = {};

        wilayahLayerGroup['{{ $wilayah->nama_wilayah }}'] = L.layerGroup().addTo(map);

        var wilayahGeoJson = <?= $wilayah->geojson ?>;
        var wilayah = L.geoJson(wilayahGeoJson, {
            style: {
                color: '{{ $wilayah->warna }}',
            },
        }).addTo(wilayahLayerGroup['{{ $wilayah->nama_wilayah }}']);

        @foreach ($extend as $extend)
            extendwilayahLayerGroup['{{ $extend->nama_extend_wilayah }}'] = L.layerGroup().addTo(map);

            L.geoJson(<?= $extend->extend_geojson ?>, {
                style: {
                    color: '{{ $extend->extend_warna }}',
                },
                onEachFeature: function(feature, layer) {
                    layer.bindTooltip(
                    "{{ $extend->nama_extend_wilayah }}"); // Menampilkan nama wilayah pada tooltip
                }
            }).addTo(extendwilayahLayerGroup['{{ $extend->nama_extend_wilayah }}']);

            overlayMaps["{{ $extend->nama_extend_wilayah }}"] = extendwilayahLayerGroup[
                '{{ $extend->nama_extend_wilayah }}'];
        @endforeach

        map.fitBounds(wilayah.getBounds());

        // List tempat hanya berdasarkan id wilayah yang dipanggil
        @foreach ($list_tempat as $tempat)
            @if ($tempat->id_wilayah == $wilayah->id) // Sesuaikan kondisi ini dengan field yang sesuai
                tempatLayerGroup['{{ $tempat->nama_tempat }}'] = L.layerGroup().addTo(map);
                overlayMaps["{{ $tempat->nama_tempat }}"] = tempatLayerGroup['{{ $tempat->nama_tempat }}'];

                var customIcon = L.icon({
                    iconUrl: "{{ url('public/' . $tempat->icon) }}",
                    iconSize: [25, 25],
                });

                var informasi =
                    '<table class="table table-bordered"><tr><th colspan="2"><img src ="{{ url('public/' . $tempat->foto) }}" width="200px"></th></tr><tbody><tr><td>Nama Tempat</td><td>{{ $tempat->nama_tempat }}</td></tr><tr><th>{{ $tempat->deskripsi }}</th></tr></tbody></table>';

                L.marker([<?= $tempat->posisi ?>], {
                    icon: customIcon
                }).addTo(tempatLayerGroup['{{ $tempat->nama_tempat }}']).bindPopup(informasi);
            @endif
        @endforeach

        const layerControl = L.control.layers(baseMaps, overlayMaps, {
            collapsed: false
        }).addTo(map);

        L.control.locate().addTo(map);
    </script>


</x-frontend>
