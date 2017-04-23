<?php 

$user = $_POST['usuario']; 
$pass = $_POST['contraseña'];

$usuarioMal = false;

$hostBBDD="localhost";
$usuarioBBDD="root";
$contraseñaBBDD="";
$nombreBBDD="prueva";

$conexion = mysqli_connect($hostBBDD,$usuarioBBDD,$contraseñaBBDD,$nombreBBDD);     

if(mysqli_connect_errno()){
	echo "fallo en la BBDD";
	exit();
}
mysqli_select_db($conexion,$nombreBBDD) or die ("ERRO a nivel de BBDDD, no se encuenta la BBDD");

mysqli_set_charset($conexion,"utf-8");
		
$consulta = "SELECT * FROM datosusuarios WHERE USUARIO = '$user'";

$resultados= mysqli_query($conexion,$consulta);

$fila=mysqli_fetch_array($resultados,MYSQL_ASSOC);
//
if ($fila != null ) {

	$cifradaBBDD = $fila["CONTRASENA"];
	//if (strcmp($cifradaBBDD , $cifrada) == 0) {        ARREGLARR  A!!!!!!!!
	if (password_verify($pass, $fila["CONTRASENA"])) {

		session_start();
		$_SESSION["usuario"] = $user;

		if (isset($_POST["recordarme"])) {
				setcookie("recordarme", "MeQuedo", time()+40);
		}

		header("Location: afterLogeo.php");

	}else{
		header('Location: indexL.php');
	}

}else{
	header('Location: indexL.php');
}
 ?>
