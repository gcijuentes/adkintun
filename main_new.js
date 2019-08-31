var GOOGLEMAPS = {
    map: '',
    data: [],
    marker: '',
    reports: [],
    posCurrent: {},
    options: {
        center: {
            lat: -33.443529,
            lng:  -70.653189
        },
        zoom: 10,

    },
    create: function() { //se crea el mapa
        var _self = this;
        _self.map = new google.maps.Map(document.getElementById('map'), _self.options);
        _self.posCurrent = _self.options.center;
        _self.infowindow = new google.maps.InfoWindow({
            maxWidth: 200
        });
    },

    clearMarkers: function() {
        let _self = this
        for (var i = 0; i < _self.reports.length; i++) {
            _self.reports[i].setMap(null);
        }
        _self.reports = [];
    },
    addMarkerWithTimeout(data, timeout) {
        let _self = this;
        _self.clearMarkers();

        //imageurls[0] = data.url;

        let contentString = '<div id="content">' +
            '<h5 id="firstHeading" class="firstHeading">' + data.title + '</h5>' +
            '<div id="bodyContent">' +  data.camara  +
            '<p class="desc">' + data.description + '</p>' +
            '</div>' +
            '</div>';

        /*let infowindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 200
        }); */

        window.setTimeout(function() {
            let marker;
            marker = new google.maps.Marker({
                position: { lat: Number(data.lat), lng: Number(data.lng) },
                map: _self.map,
                animation: google.maps.Animation.DROP
            });

            google.maps.event.addListener(_self.map, 'click', function(event) {
           
            if (_self.infowindow) {
                  _self.infowindow.close();
               }
            }); 

            marker.addListener('click', function() {
                //infowindow.open(_self.map, marker);
                _self.infowindow.open(_self.map, marker);
            });

            _self.reports.push(marker);

        }, timeout);
    },
    //
    getData: function() { //extrae la info de la db
        console.log('obteniendo la info');
        $.ajax({
            url: 'api/v1/reports.php',
            dataType: 'json',
            data: { reports: '1' },
            method: 'post',
            cached: false,
            success: function(data) {
                console.log(data);
                localStorage.setItem('dataReports', JSON.stringify(data));
            }
        })
    },
    printData: function() { //imprime la info en el mapa 
        let _self = this;
        //if(_self.data.length == 0 ) return;
        $.each(_self.data, function(i, e) {
            _self.addMarkerWithTimeout(e, i * 200);
        });
    },
    updateData: function() { //update info
        let _self = this;

        _self.data = JSON.parse(localStorage.getItem('dataReports'));
        console.log(_self.data);
    },
    //
    updatePos: function() { //actualia la posicion
        var _self = this;
        _self.map.setCenter(_self.options.center);
        _self.map.setZoom(13);
        _self.marker.setPosition(_self.options.center);
        _self.posCurrent = _self.options.center;
    },
    setEvent: function() {
        var _self = this;

        _self.marker.addListener('drag', function(e) {
            //guardamos en una variable la posicion actual del marcador 
            _self.posCurrent = {
                lat: e.latLng.lat(),
                lng: e.latLng.lng()
            };
        });
    },
    setMarker: function() {

        var _self = this;
        _self.marker = new google.maps.Marker({
                position: _self.options.center,
                animation: google.maps.Animation.DROP,
                map: _self.map,
                draggable: true,
                label:'P',
                title:'Coordenadas'
            })
            //colocamos eventos
        _self.setEvent();
    },
    getPos: function() { //posicion del usuario
        var _self = this;
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                console.log('posicion');
                console.log(position.coords.latitude);
                var pos = {
                    //-33.443529
                    //-70.653189
                    //lat: position.coords.latitude,
                    //lng: position.coords.longitude
                    lat: -33.443529,
                    lng:  -70.653189
                };

                // localStorage.setItem('posInit', JSON.stringify(pos));

                _self.options.center = pos;

                _self.updatePos();


            }, function() {
                _self.handleErrorMap();
            });
        } else {
            _self.handleErrorMap();
        }
    },
    handleErrorMap: function() {
        var _self = this;
        _self.options.center = {
            lat: -33.443529,
            lng:  -70.653189
        };
        _self.updatePos();
    },
    //gets 
    getPosCurrent: function() {
        return this.posCurrent;
    },
    //
    init: function() {

        console.log("iniciando el mapa");
        var _self = this;

        _self.getPos();
        _self.create();

        _self.getData();
        _self.updateData();

        //setTimeout(function() {
       // _self.updateData();
        //  },20000);
        
        _self.setMarker();
        //setTimeout(function() {
        //    _self.setMarker();
        //}, 500)

        _self.printData();
        //setTimeout(function() {
          //    _self.printData();
        //}, 40000);

    }


}


var REGISTER = {

    printInterval: null,

    intervalPrint: function() {
        let _self = this;
        _self.printInterval = setInterval(function() {
            _self.printPos();
        }, 1500);
    },

    clearIntervalPrint: function() {
        let _self = this;
        clearInterval(_self.printInterval);
    },
    printPos: function() {
        $('#lat').val(GOOGLEMAPS.getPosCurrent().lat);
        $('#lng').val(GOOGLEMAPS.getPosCurrent().lng);
    },
    upload: function() {

    },
    save: function() {
        let _self = this;


        $ //('#reportar').click(function() { });
        /*
            if ($('#titulo-reporte').val() == "" ||
                $('#descripcion-reporte').val() == "" ||
                $('#imagen-reporte').val() == ""
            ) {
                $('#error').html('los campos vacios no son validos');
            } else { _self.clean();*/


    },
    clean: function() {
        $('#error').html('');
    },

    init() {
        let _self = this;
        setTimeout(function() {
            _self.intervalPrint();
        }, 1000);

        _self.save();
    }
}



$(document).ready(function() {
    $('[data-toggle="offcanvas"]').click(function() {
        $('.row-offcanvas').toggleClass('active')
    });

    google.maps.event.addListener(_self.map, 'click', function(event) {
           
            if (_self.infowindow) {
                  _self.infowindow.close();
               }
            });

    GOOGLEMAPS.init();

    REGISTER.init();
});
