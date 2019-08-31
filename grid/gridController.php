<?php
   require_once 'database.php';


  
  if(isset($_POST["action"]) && !empty($_POST["action"])) { 
  	$action = stripslashes($_POST["action"]);
  	$id = stripslashes($_POST["id"]);
    $estado = stripslashes($_POST["estado"]);
  

  	switch ($action) {

  		case 'update':
  				updateCamare($id,$estado);
  				//echo 'updaaaaaaaate';
  			break;
  		
  		default:
  			# code...
  			break;
  	}



  }

  echo 'holiss';



function updateCamare($id,$estado){
  	try {
	    //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	    $pdo = Database::connect();
	    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       	//$sql = 'SELECT * FROM reports ORDER BY id DESC';

	    //$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
	    $sql ="UPDATE camara SET estado = '".$estado."' WHERE id = '".$id."';" ;

	    // Prepare statement
	    $stmt = $pdo->prepare($sql);

	    // execute the query
	    $stmt->execute();

	    // echo a message to say the UPDATE succeeded
	    echo $stmt->rowCount() . " records UPDATED successfully";
    }
	catch(PDOException $e){
    	echo $sql . "<br>" . $e->getMessage();
    }

	//$conn = null;
}


function getCamInactivas(){
    try {
      //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $pdo = Database::connect();
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$sql = 'SELECT * FROM reports ORDER BY id DESC';

      $sql="SELECT id, latitud as lat, longitud as lng, title, description, image, pais, codigopais, ciudad, zipcode, timezone, manufacturer, camara, region, estado FROM camara where estado=0";

      // Prepare statement
      $stmt = $pdo->prepare($sql);

      // execute the query
      $stmt->execute();

      // echo a message to say the UPDATE succeeded
      echo $stmt->rowCount() . " records UPDATED successfully";
    }
  catch(PDOException $e){
      echo $sql . "<br>" . $e->getMessage();
    }

    //$conn = null;
  
}



  ?>