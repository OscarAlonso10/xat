<p><?php echo "soc la pagina insertar.php" ?></p>
<p><?php echo htmlspecialchars($_POST['nombre']); ?></p>
<p><?php echo htmlspecialchars($_POST['texto']); ?></p>
<?php

include 'connexio.php';

$nombre =  mysqli_real_escape_string($conn,$_POST['nombre']);
$texto =   mysqli_real_escape_string($conn,$_POST['texto']);
$hora = date("H:i:s");

if ($nombre == '' || $texto == '' ){
	header("Location: index.php?MensajeError= No se pueden introducir datos vacios");
	exit();
}
else{$sql = "INSERT INTO missatges (id,usuari,text,hora) VALUES ('','$nombre','$texto','$hora')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
header("Location: index.php");
exit();
?>