
<?php

  require_once './conexion.php';

  $sqlShow = "SELECT idarea, areadescripcion FROM area";
  $resultShow = $conn->query($sqlShow);


  if ($resultShow -> num_rows > 0 ) {
  //foreach($resultShow as $row)
   while($rowShow = $resultShow->fetch_assoc()) {

     $show [] = array(
     'idarea'=> $rowShow['idarea'],
     'areadescripcion'=> $rowShow['areadescripcion'],
    );
   }
   $arr_json = json_encode($show);

   print_r($arr_json);
  }
  $conn->close();


 ?>
