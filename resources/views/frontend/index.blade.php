<x-frontend>


    <div id="map" style="width: 100%; height: 100vh;"></div>
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


        const map = L.map('map', {
            center: [-1.8606736140490625, 109.99939779400717],
            zoom: 9,
            layers: [osm],
        });

        var baseMaps = {
            "Street": osm,
            "Satelite": GoogleSatelit
        };

        var overlayer = {};

        const layerControl = L.control.layers(baseMaps, overlayer, {
            collapsed: false
        }).addTo(map);

        L.control.locate().addTo(map);
    </script>
</x-frontend>
