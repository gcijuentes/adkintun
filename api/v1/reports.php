<?php 
include('db.php');
//comprobamos que sea una petición ajax

	if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
	{
		if(isset($_POST['reports']) && $_POST['reports']=="1"){
			$db = new dbMySQL();
			$q="SELECT * FROM camras where estado=1";
			$data = $db->query($q,'fetch_object');
			
		}else{
			
			$data = 'Error fron reports';
		}

			
			$db->close();
			
			echo json_encode($data);
			exit();

	}
?>
