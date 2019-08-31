<?php
error_reporting(E_ALL); 
include('db.php');
//comprobamos que sea una petición ajax
//if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') 
//{



//var_dump($_POST);
if(isset($_POST['upload']) && $_POST['upload']=='1'){ 
	
	$db    = new dbMySQL();
	
	$lat   = $_POST['lat'];
	$lng   = $_POST['lng'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	
	//obtenemos el archivo a subir
    $file = $_FILES['image']['name'];
    

	$target_dir = "../../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
	
	//var_dump($_FILES["image"]["name"]);
	//echo '<br>';
//var_dump($target_file);
	//echo '<br>';
//	var_dump(move_uploaded_file($_FILES["image"]["tmp_name"], $target_file));

//echo "<img src=".$target_file.">";

    if ($file && move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)){
        
        $image = $target_file;
	    
	    

	    $q = "INSERT INTO reports (lat, lng, title, description, image) VALUES ('".$lat."', '".$lng."','".$title."','".$description."','".$file."')";
		
	    if($db->abc($q)) $data['success'] = true;

	    else $data['success'] = false;
	  //  echo 'success';
	    
    //	sleep(2);//retrasamos la petición 3 segundos	
    	
    }else{
    	var_dump('elsee');
    }
 
    
	$db->close();
	header('location:../../');
	exit();
	

}

else{
    throw new Exception("Error Processing Request", 1);   
}


 
   
     
  

?>