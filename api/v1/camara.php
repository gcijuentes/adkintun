<?php 
include('db.php');
//comprobamos que sea una petición ajax

	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
	{
		if(isset($_POST['camara']) && $_POST['camara']=="1"){
			$db = new dbMySQL();
			$q="SELECT id, latitud as lat, longitud as lng, title, description, image, pais, codigopais, ciudad, zipcode, timezone, manufacturer, camara, region, estado FROM camara where estado=1";
			$data['camaras'] = $db->query($q,'fetch_object');


			$q2= "SELECT id, latitud as lat, longitud as lng, title, description, image, pais, codigopais, ciudad, zipcode, timezone, manufacturer, camara, region, estado FROM camara where estado=1 order by id desc limit 6";

			$data['ultimas'] = $db->query($q2,'fetch_object');
			
		}else{
			
			$data = 'Error fron reports';
		}

			
			$db->close();
			
			echo json_encode($data);
			exit();

	}
?>

