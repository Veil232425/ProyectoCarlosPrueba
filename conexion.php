<?php
$hostname = "localhost";
$username = "root";
$password = "mysql";
$database = "tiendaOnline";

try {
    $conn = new PDO("mysql:host=localhost;dbname=tiendaOnline", $username, $password);
   
    
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
$fecha=$row['fecha'];
                function lafecha($fecha){
                list($fecha,$hora)=explode(" ",$fecha);
                list($anio,$mes,$dia)=explode("-",$fecha);
                $meses=array(enero,febrero,marzo,abril,mayo,junio,julio,agosto,septiembre,octubre,noviembre,diciembre);
                return "$dia / ".$meses[$mes -1]." / $anio";
                                                    }
/*else{
    echo $conn ->host_info;
}*/
?>
<?php
if(!isset($_SESSION))session_start();
?>