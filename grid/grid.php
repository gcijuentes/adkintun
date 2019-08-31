<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "../login/loginheader.php"; 

//camaras por pagina
$icamByPage=10;
$pagina = 1;
if(isset($_GET["pagina"]) && !empty($_GET["pagina"])) { 

  $pagina = $_GET["pagina"];
//  echo 'Pagina Actual : '.$pagina;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    

<style type="text/css">
  
.img-responsive, .thumbnail>img, .thumbnail a>img, .carousel-inner>.item>img, .carousel-inner>.item>a>img {
    display: block;
    max-width: 39%;
    height: auto;
}

</style>


<script type="text/javascript">
  
  function inactivarActivar(id){
      let estado = $('.btnAccion_'+id).html(); //($('.btnAccion').html()='Activar')?1:0;
      if($('.btnAccion_'+id).html()=='Activar'){
        estado=1;
      }else{
        estado=0;
      }
      console.log('estado: '+estado);

        $.post("gridController.php",
          {
            action: "update",
            id: id,
            estado:estado
          },
          function(data,status){
              //alert("Data: " + data + "\nStatus: " + status);
              console.log(data);
          }
        ).done(function(data){
          console.log(data);
          
          if($('.btnAccion_'+id).html()=='Activar'){
            $('.btnAccion_'+id).html('Desactivar');
           // $(".estado_"+id).html('Activa');
             
            $('.btnAccion_'+id).removeClass( "btn-success" )
            $('.btnAccion_'+id).addClass( "btn-danger" )

          }else{ 
            $('.btnAccion_'+id).html('Activar');
            //$(".estado_"+id).html('No activa');
            $('.btnAccion_'+id).addClass( "btn-success" )
            $('.btnAccion_'+id).removeClass( "btn-danger" )
          }

            
          

        }).error(function(e){
                alert('Ocurrió un error al realizar la petición: '+e.statusText);
            });
  }

  function deleteId(id){
    
        $.post("gridController.php",
          {
            action: "delete",
            id: id
          },
          function(data,status){
              alert("Data: " + data + "\nStatus: " + status);
              console.log(data);
          }
        ).done(function(data){
          console.log(data);
          $(".estado_"+id).html(1);

        }).error(function(e){
                alert('Ocurrió un error al realizar la petición: '+e.statusText);
        });

  }

  function getActivas(){


    
  }



</script>



</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>PHP CRUD Grid</h3>
            </div>

      

            <div class="row">
              <div class="col">
                
                <div class="row">
                  <div class="col">
                    <p>
                      <a href="grid.php?action=activas" class="btn btn-primary">Camaras activas</a>
                      <a href="../login/logout.php" class="btn btn-danger">Logout</a>
                    </p>
                  </div>
                </div>
                
              </div>
                <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>id</th>
                          <th>camara</th>
                          
                          <th>Region</th>
                          <th>Estado</th>
                          <th>Lat / Lng</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                          include 'database.php';
                          $pdo = Database::connect();
                          $sql='';
                          $sql2='';
                          $action = '';
                          $offset = ($pagina-1)*$icamByPage;
                          $getParameters = '';

                          if(isset($_GET["action"]) && !empty($_GET["action"])) { 
                            $action = stripslashes($_GET["action"]);
                          }

                          //echo 'acction: '.$action;
                          if($action=='activas'){
                            $sql = 'SELECT * FROM `camara` where estado in (1) order by id asc limit '.$icamByPage.' offset '.$offset;
                            $getParameters = "action=activas";
                            $sql2 = 'SELECT count(1) as cantidad FROM camara where estado in (1)';
                          }
                          else{
                            $sql = 'SELECT * FROM `camara` where estado in (0,1) order by id asc limit '.$icamByPage.' offset '.$offset;
                            $sql2 = 'SELECT count(1) as cantidad FROM camara where estado in (0,1)';
                          }
                        
                          //echo $sql; 
                        //if($pagina>1){
                        //}else{
                         // $sql = 'SELECT * FROM `camara` where estado in (0,1) order by id asc limit 10 offset 0';
                        //}

                       foreach ($pdo->query($sql) as $row) {
                                $estado = ($row['estado'] == 1)?'Activa':'No Activa';
                                $botonAccion =($row['estado'] == 1)?'Desactivar':'Activar';
                                $botonClass =($row['estado'] == 1)?'btn-danger':'btn-success';
                                echo '<tr>';
                                
                                echo '<td>'. $row['id'] . '</td>';
                                echo '<td>'. $row['camara'] . '</td>';
                                echo '<td>'. $row['region'] . '</td>';
                                echo '<td class="estado_'.$row['id'].'">'. $estado . '</td>';
                                echo '<td class="latlng">'. $row['latitud'] .'  /  '.$row['longitud']. '</td>';
                                echo '<td width=250>';
                                //echo '<a class="btn" href="read.php?id='.$row['id'].'">Read</a>';
                                echo ' ';
                                echo '<a class="btn '.$botonClass.' btnAccion_'.$row['id'].'" href="javascript:inactivarActivar('.$row['id'].');">'.$botonAccion.'</a>';
                                echo ' ';
                               // echo '<a class="btn btn-danger btnDelete_'.$row['id'].'" href="javascript:deleteId('.$row['id'].');">Delete</a>';
                                echo '</td>';
                                echo '</tr>';
                       }
                      ?>
                      </tbody>
                </table>
        </div>


          <div class="row"><!-- Inicio paginador -->
              <nav aria-label="Page navigation">
                  <ul class="pagination">

        <?php 

            $cantidCam = '';
           
            
            foreach ($pdo->query($sql2) as $row) {
                $cantidCam= $row['cantidad'] . "\t";
            }
           
            echo '<br>'.$cantidCam;
            echo '<br>'.$icamByPage;
           
            $paginas = ceil($cantidCam/$icamByPage);
            echo $paginas;
            if ($pagina==1) {
              echo '<li class="page-item"><a class="page-link" href="#">Previous</a></li>';
            }else{
              echo '<li class="page-item"><a class="page-link" href="grid.php?'.$getParameters.'&pagina='.($pagina-1).'"  >Previous</a></li>';
            }


            if($pagina<=225){
              for($i=0;$i<$paginas;$i++){
                 if($i+1 == $pagina ){
                  echo '<li class="page-item"><a class="page-link" href="grid.php?'.$getParameters.'&pagina='.($i+1).'"><strong>'.($i+1).'</strong></a></li>';
                 }else{
                  echo '<li class="page-item"><a class="page-link" href="grid.php?'.$getParameters.'&pagina='.($i+1).'">'.($i+1).'</a></li>'; 
                 }
               }
            }else{
              for($i=0;$i<$paginas;$i++){
                 if($i+1 == $pagina ){
                   echo '<li class="page-item"><a class="page-link" href="grid.php?'.$getParameters.'&pagina='.($i+1).'"><strong>'.($i+6).'</strong></a></li>';
                 }else{
                  echo '<li class="page-item"><a class="page-link" href="grid.php?'.$getParameters.'&pagina='.($i+1).'">'.($i+6).'</a></li>'; 
                 }
               }
            }   // fin paginador

            if ($pagina==$paginas) {
              echo '<li class="page-item"><a class="page-link" href="#">Next</a></li>';
            }else{
              echo '<li class="page-item"><a class="page-link" href="grid.php?'.$getParameters.'&pagina='.($pagina+1).'"  >Next</a></li>';
            }
            ?>
           </ul>
          </nav>
        </div> <!-- fin paginador -->
    </div> <!-- /container -->
  </body>
</html>
<?php
Database::disconnect();
?>