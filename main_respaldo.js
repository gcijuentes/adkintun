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
        zoom: 6,

    },


    create: function() { //se crea el mapa

        var _self = this;
        _self.map = new google.maps.Map(document.getElementById('map'), _self.options);
        _self.posCurrent = _self.options.center;
        _self.infowindow = new google.maps.InfoWindow({
            maxWidth: 200
        });

        //input
        // Create the search box and link it to the UI element.
        var input = document.getElementById('searchBox-input');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.bindTo('bounds', _self.map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');

        infowindow.setContent(infowindowContent);

        var marker = new google.maps.Marker({
          map: _self.map,
          anchorPoint: new google.maps.Point(0, -29)
        });

         autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          
          var place = autocomplete.getPlace();

          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            _self.map.fitBounds(place.geometry.viewport);
          } else {
            _self.map.setCenter(place.geometry.location);
            _self.map.setZoom(10);  // Why 17? Because it looks good, 10 is best :) .
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(_self.map, marker);
        });

        //input

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
        //console.log(data.camara);

        let contentString = '<div id="content">' +
            '<h5 id="firstHeading" class="firstHeading"> Camara</h5>' +
            '<div id="bodyContent">' +  data.camara  +
            '<p class="desc">En vivo</p>' +
            '</div>' +
            '</div>';

            //console.log(contentString);

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
                _self.infowindow.setContent(contentString);
            });

            _self.reports.push(marker);

        }, timeout);
    },
    //
    getData: function() { //extrae la info de la db
        console.log('obteniendo la info');
        $.ajax({
            url: 'api/v1/camara.php',
            dataType: 'json',
            data: { reports: '1' },
            method: 'post',
            cached: false,
            success: function(data) {
                console.log(data);
                console.log('Success');
                localStorage.setItem('dataReports', JSON.stringify(data.camaras));
                //localStorage.setItem('lastAdded', JSON.stringify(data.ultimas));
                //alert(data.ultimas[i].camara);
                //console.log(data.ultimas[1].camara);
                
                htmlList = '<i class="menu-flags flag-icon flag-icon-cl">::before</i>';
                
                for (var i =0; i < 6 ; i++) {
                    let cam  = data.ultimas[i];
                    let htmlList1 = '<div class="card lis-brd-light text-center text-lg-left lis-info lis-relative">'+
                            '<a href="#">'+
                            '<div class="lis-grediant grediant-tb-light lis-relative modImage rounded">';



                    let htmlList2= '</div>'+
                            '<div class="lis-absolute lis-left-20 lis-top-20  lis-icon lis-rounded-circle-50 text-center">'+
                            '<div class="text-white mb-0 lis-line-height-2_5 h4"><i class="flag-icon flag-icon-cl"></i></div>'+
                            '</div>'+
                            '</a>'+
                            '<div class="hover-text lis-absolute lis-left-20 lis-bottom-20 lis-font-roboto text-white text-left">'+
                            '<h6 class="text-white mb-0">'+ cam.ciudad+'</h6> <span class="lis-font-roboto">'+cam.pais+'</span> </div>'+
                            '</div>';
                    $("#mb-4"+(i+1)).html(htmlList1+cam.camara+htmlList2);
                }

                

            },
            error: function(xhr, textStatus, errorThrown){
                console.log(xhr);
                console.log(textStatus);
                console.log(errorThrown);
            }

        });

        console.log('Saliendo de geData');
       /* $.ajax({
            url: 'api/v1/reports.php',
            dataType: 'json',
            data: { countCam: '1' },
            method: 'post',
            cached: false,
            success: function(data) {
           //     console.log(data[0].cantidad);
                $(".notCount").html(data[0].cantidad);
                $("#count").toggleClass("invisible");
                //$("#countCel").toggleClass("invisible");

                setTimeout(function() {
                    _self.intervalPrint();
                }, 1000); 


                localStorage.setItem('countCam', JSON.stringify(data[0].cantidad));
            }
        }); */


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
        //console.log('Antes del Json.parse');
        //console.log(_self.data);
        _self.data = JSON.parse(localStorage.getItem('dataReports'));
        //console.log('Despues del Json.parse');
        //console.log(_self.data);
    },
    //

    //<li><a class="newCam" href="javascript:caca(-33.024570,-71.551830)" >camara nueva </a></li>
    getNewCams: function(){
        console.log('Entrando getNewCams');
        let listaItem= '';

        $.ajax({
            url: 'api/v1/reports.php',
            dataType: 'json',
            data: { getNewCams: '1' },
            method: 'post',
            cached: false,
            success: function(data) {
                //console.log(data);

                for(let i in data) { 
                   console.log(i, data[i]);
                   data[i].lat;
                   data[i].lng;
                   listaItem +='<li><a href="javascript:toCenterMap('+data[i].lat+','+data[i].lng+')" >camara nueva </a></li>';
                }
                console.log('listaItem: '+listaItem);

                $(".dropdown-camsList").html(listaItem);
                //$("#count").toggleClass("invisible");

                //localStorage.setItem('countCam', JSON.stringify(data[0].cantidad));
            }
        });
    
        console.log('Saliendo getNewCams');
    },
    setCenterMap: function(lat,lng){
        let _self = this
        console.log('latitud'+lat);
        console.log('longitud'+lng);
        let centerMap = {lat: lat, lng:  lng};
        _self.map.setCenter(centerMap);

    },
    updatePos: function() { //actualia la posicion
        var _self = this;
        _self.map.setCenter(_self.options.center);
        _self.map.setZoom(9);
        //_self.marker.setPosition(_self.options.center);
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
        //console.log('setMarkeeeeerr');
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
               // console.log('posicion');
                //console.log(position.coords.latitude);
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

        //_self.getNewCams();

        _self.getPos();
        _self.create();

        _self.getData();
        _self.updateData();

        setTimeout(function() {
          _self.updateData();
          },2000);
        
        _self.setMarker();
        setTimeout(function() {
            _self.setMarker();
        }, 500)

        _self.printData();
        setTimeout(function() {
              _self.printData();
        }, 2000);

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


        //$ ('#reportar').click(function() { });
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
    GOOGLEMAPS.init();
    REGISTER.init();
        $('.newCam').click(function(){
            var $this = $(this);
            var p1 = $this.data('p1');
            var p2 = $this.data('p2');
            console.log(p1);
            console.log(p2);
        });
});
