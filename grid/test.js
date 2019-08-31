$(function(){
    $('#botonCalcular').click(
    	function(e){
        	$.post("servidor.php", {variable1: $('#text1').val(), variable2: $('#text2').val()},
                function(r){
                    $('#respuesta').html('respuesta del servidor: '+r);
                }, 
            'json').error(function(e){
                alert('Ocurrió un error al realizar la petición: '+e.statusText);
            });
    });
});