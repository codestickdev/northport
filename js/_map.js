(function( $ ) {
    $(document).ready(function(){
        /**
         * initMap
         *
         * Renders a Google Map onto the selected jQuery element
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @return  object The map instance.
         */
        function initMap( $el ) {

            // Find marker elements within map.
            var $markers = $el.find('.marker');

            if($(window).width() > 575){
                var zoom = 13;
            }else{
                var zoom = 12;
            }

            var mapStyle = [
                {
                    "featureType": "all",
                    "elementType": "labels.text",
                    "stylers": [
                        {
                            "color": "#878787"
                        }
                    ]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f9f5ed"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [
                        {
                            "color": "#c9c9c9"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#aee0f4"
                        }
                    ]
                }
            ];

            // Create gerenic map.
            var mapArgs = {
                zoom        : zoom,
                mapTypeId   : google.maps.MapTypeId.TERRAIN,
                disableDefaultUI: true,
                scaleControl: false,
                streetViewControl: false,
                fullscreenControl: false,
                styles: mapStyle,

            };
            var map = new google.maps.Map( $el[0], mapArgs );

            // Add markers.
            map.markers = [];
            $markers.each(function(){
                initMarker($(this), map);
            });

            // Center map based on markers.
            centerMap( map );

            // Return map instance.
            return map;
        }

        /**
         * mapModal
         * 
         * Close popups when user click another marker
         * 
         * @param {*} $marker 
         * @param {*} map 
         */
        // function mapModal(marker, map){
        //     var activeInfoWindow = false;
        //     google.maps.event.addListener(marker, 'click', function(){
        //         console.log(activeInfoWindow);
        //         console.log(infowindow);
        //         if (activeInfoWindow) { activeInfoWindow.close();}
        //         infowindow.open(map, marker);
        //         activeInfoWindow = infowindow;
        //         console.log(activeInfoWindow);
        //     });
        // }

        /**
         * initMarker
         *
         * Creates a marker for the given jQuery element and map.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   jQuery $el The jQuery element.
         * @param   object The map instance.
         * @return  object The marker instance.
         */
        function initMarker( $marker, map ) {

            // Get position from marker.
            var lat = $marker.data('lat');
            var lng = $marker.data('lng');
            var name = $marker.data('name');
            var cat = $marker.data('category');
            var icon = '';
            var latLng = {
                lat: parseFloat( lat ),
                lng: parseFloat( lng )
            };

            // Create marker
            const iconBase = "/wp-content/themes/northport/images/map/markers/";

            if(cat == 'edukacja'){
                icon = iconBase + "edukacja_marker.svg";
            }else if(cat == 'natura'){
                icon = iconBase + "natura_marker.svg";
            }else if(cat == 'rozrywka'){
                icon = iconBase + "rozrywka_marker.svg";
            }else if(cat == 'sport'){
                icon = iconBase + "sport_marker.svg";
            }else if(cat == 'sklepy'){
                icon = iconBase + "sklepy_marker.svg";
            }else if(cat == 'restauracje'){
                icon = iconBase + "restauracje_marker.svg";
            }else if(cat == 'zdrowie'){
                icon = iconBase + "zdrowie_marker.svg";
            }else if(cat == 'kultura'){
                icon = iconBase + "kultura_marker.svg";
            }else if(cat == 'northport'){
                icon = iconBase + "lokalizator_marker.svg";
            }

            // Create marker instance.
            var marker = new google.maps.Marker({
                position: latLng,
                map: map,
                icon: icon,
            });

            // Marker info
            var contentString =
            '<div class="mapPopup">' +
            '<h3 class="mapPopup__heading">' + name + '</h3>' +
            '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString,
            });

            google.maps.event.addListener(marker, 'click', function() {
                map.setCenter(marker.getPosition());

                infowindow.close();
                infowindow.open({
                    anchor: marker,
                    map,
                    shouldFocus: false,
                });
                map.setZoom(14);
            });

            // Append to reference for later use.
            map.markers.push(marker);

            google.maps.event.addListener(map, 'click', function(){
                console.log('close');
                infowindow.close();
            });
        }

        /**
         * centerMap
         *
         * Centers the map showing all markers in view.
         *
         * @date    22/10/19
         * @since   5.8.6
         *
         * @param   object The map instance.
         * @return  void
         */
        function centerMap( map ) {
            var mapLat = 54.1975671,
                mapLng = 21.7274664;

            if($(window).width() <= 575){
                mapLat = 54.1895964;
                mapLng = 21.7343568;
            }

            map.setCenter({
                lat: mapLat,
                lng: mapLng,
            });
        }

        // Render maps on page load.
        $('#mainMap').each(function(){
            var map = initMap( $(this) );
        });
    });
})(jQuery);