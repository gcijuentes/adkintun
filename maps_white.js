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
    once:false,
    create: function() { //se crea el mapa
        var _self = this;
        _self.map = new google.maps.Map(document.getElementById('google-fs-realestate'), _self.options);
        _self.posCurrent = _self.options.center;
        _self.infowindow = new google.maps.InfoWindow({
           // maxWidth: 200
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
        let content1 = '<div id="iw-container">' +
                    '<div class="iw-title">Porcelain Factory of Vista Alegre</div>' +
                    '<div class="iw-content">' +
                      '<div class="iw-subTitle">History</div>' +
                      '<img src="http://maps.marnoto.com/en/5wayscustomizeinfowindow/images/vistalegre.jpg" alt="Porcelain Factory of Vista Alegre" height="115" width="83">' +
                      '<p>Founded in 1824, the Porcelain Factory of Vista Alegre was the first industrial unit dedicated to porcelain production in Portugal. For the foundation and success of this risky industrial development was crucial the spirit of persistence of its founder, José Ferreira Pinto Basto. Leading figure in Portuguese society of the nineteenth century farm owner, daring dealer, wisely incorporated the liberal ideas of the century, having become "the first example of free enterprise" in Portugal.</p>' +
                      '<div class="iw-subTitle">Contacts</div>' +
                      '<p>VISTA ALEGRE ATLANTIS, SA<br>3830-292 Ílhavo - Portugal<br>'+
                      '<br>Phone. +351 234 320 600<br>e-mail: geral@vaa.pt<br>www: www.myvistaalegre.com</p>'+
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
                  '</div>';


        let contentString = '<div id="content">' +
            //'<h5 id="firstHeading" class="firstHeading"> Camara</h5>' +
            '<div id="bodyContent">' +  data.camara  +
            //'<p class="desc">En vivo</p>' +
            '</div>' +
            '</div>';

        let contenFinal = '<div id="iw-container">' +
                    '<div class="iw-title">En vivo</div>' +
                    '<div class="iw-content">' +
                        data.camara +
                    '</div>' +
                    '<div class="iw-bottom-gradient"></div>' +
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
                _self.infowindow.setContent(contenFinal);


                // Reference to the DIV that wraps the bottom of infowindow
                var iwOuter = $('.gm-style-iw');

                /* Since this div is in a position prior to .gm-div style-iw.
                 * We use jQuery and create a iwBackground variable,
                 * and took advantage of the existing reference .gm-style-iw for the previous div with .prev().
                */
                var iwBackground = iwOuter.prev();

                // Removes background shadow DIV
                iwBackground.children(':nth-child(2)').css({'display' : 'none'});

                // Removes white background DIV
                iwBackground.children(':nth-child(4)').css({'display' : 'none'});

                // Moves the infowindow 115px to the right.
                console.log('Holiiiiiiiiiiii');
                iwOuter.parent().parent().css({left: '115px'});

                // Moves the shadow of the arrow 76px to the left margin.
                iwBackground.children(':nth-child(1)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

                // Moves the arrow 76px to the left margin.
                iwBackground.children(':nth-child(3)').attr('style', function(i,s){ return s + 'left: 76px !important;'});

                // Changes the desired tail shadow color.
                iwBackground.children(':nth-child(3)').find('div').children().css({'box-shadow': 'rgba(72, 181, 233, 0.6) 0px 1px 6px', 'z-index' : '1'});

                // Reference to the div that groups the close button elements.
                var iwCloseBtn = iwOuter.next();

                // Apply the desired effect to the close button
                iwCloseBtn.css({opacity: '1', right: '38px', top: '3px', border: '7px solid #48b5e9', 'border-radius': '13px', 'box-shadow': '0 0 5px #3990B9'});

                // If the content of infowindow not exceed the set maximum height, then the gradient is removed.
                if($('.iw-content').height() < 140){
                  $('.iw-bottom-gradient').css({display: 'none'});
                }

                // The API automatically applies 0.7 opacity to the button after the mouseout event. This function reverses this event to the desired value.
                iwCloseBtn.mouseout(function(){
                  $(this).css({opacity: '1'});
                });
                
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
                console.log('data: '+data);
                localStorage.setItem('dataReports', JSON.stringify(data));
            }
        })

        $.ajax({
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

                /*setTimeout(function() {
                    _self.intervalPrint();
                }, 1000); */


                localStorage.setItem('countCam', JSON.stringify(data[0].cantidad));
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
        //console.log(_self.data);
    },
    //

    //<li><a class="newCam" href="javascript:caca(-33.024570,-71.551830)" >camara nueva </a></li>
    getNewCams: function(){
        //
        let listaItem= '';

       /* $.ajax({
            url: 'api/v1/reports.php',
            dataType: 'json',
            data: { getNewCams: '1' },
            method: 'post',
            cached: false,
            success: function(data) {
                console.log(data);

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
        })*/
    

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

        _self.getNewCams();

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
