<?php
$nombre = $_POST['ipn'];
$tipo= $_POST['ipt'];
echo "<br><br> Nombre: ".$nombre."<br><br> Nacionalidad o Pueblo: ".$tipo."<br><br> ";
$option=$_POST["opcion"];
$option1= $_POST['ddrc'];
echo $option;
var_dump( $option1);

?>


<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$database = "nuevo";



// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
if ($conn->connect_error) {
    die("ERROR: No se puede conectar al servidor: " . $conn->connect_error);
  } 
  
  
  
  // $result = $conn->query("SELECT * FROM c_nivel1");
  
  // echo "Numero de resultados: $result->num_rows";
  
  // $conn->query("SELECT nivel1_id, nivel1_nombre, nivel1_tipo FROM c_nivel1 ORDER BY nivel1_id");
  
  
  
  $sql = 'SELECT nivel1_id, nivel1_nombre, nivel1_tipo FROM c_nivel1 ORDER BY nivel1_id';
  foreach ($conn->query($sql) as $row) 
  {
  
      print utf8_encode($row['nivel1_id']) . "\t";
      print utf8_encode($row['nivel1_nombre']) . "\t";
      print utf8_encode($row['nivel1_tipo']) . "\t";
      echo("  <br>");
  
  }
  
  //$result->close();
  
  $conn->close();
  
  ?>
<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$database = "nuevo";
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// $sql = "INSERT INTO `c_nivel1` (`nivel1_id`, `nivel1_nombre`,`nivel1_tipo`) VALUES (	20	,'sepillin','Pueblo')";
$res= mysqli_query($conn,"select * from c_nivel1;");
$sql = mysqli_data_seek($res,11);
$resultado=mysqli_fetch_array($res);
echo " <br> numero: ".$resultado["nivel1_id"];
echo " <br> nombre: ".$resultado["nivel1_nombre"];


$conn->close();
?>







