<?php
$seccion = $_GET['seccion'];
var_dump($seccion);

$nombre = 'Brian';
$apellido = 'Marquez';
$email = 'brian@email.com';

$logueado = true;

//El ini_set modifica (setea) parámetros del php.ini.
//El display_errors en 0 apaga la muestra de errores, en 1 lo habilita
//En la línea 21, tenemos un error que se muestra o no, según este valor
ini_set('display_errors', 1 );

function generar_fecha( $dia, $mes, $anio, $formato = true ){
	if( $formato == false ){
		return "$dia/$mes";
	}else{
		return "$dia del $mes de $anio";
	}
}

$categorias = [ 
	/*0*/ 'Programacion', 
	/*1*/ 'Diseño', 
	/*2*/ 'Cursos', 
	/*3*/ 'Usabilidad' , 
	/*4*/ 'Servidores' 
];


$redes = array( 
	'facebook' => 'https://facebook.com/nombre_usuario',
	'twitter' => 'https://twitter.com/username',
	'instagram' => 'https://instagram.com/usuario',
);

?>
<!DOCTYPE HTML>
<html lang="es-AR">
<head>
	<meta charset="UTF-8" />
	<title>BIT Blog</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="stylesheet" type="text/css" href="recursos/css/estilos.css" />
</head>
<body>
	<header>
		<h1><?php echo "BIT"; //Esto mostrará el error de undefined constant, si el display_errors está en 1, pero no mostrará nada si está en 0 ?></h1>
		
		<!-- acceso a redes sociales -->
		<ul>
		<?php foreach( $redes as $red => $url ){
			echo "<li><a href='$url'>$red</a></li>";
		} ?>
		</ul>
	</header>
	<nav>
		<ul>
			<li><a href="index.php?seccion=home">Home</a></li>
			<li><a href="index.php?seccion=categorias">Categorias</a>
				<ul>
					<?php 
					for( $i = 0; $i < count($categorias); $i++ ):
						echo '<li><a href="index.php?seccion=categoria">'.$categorias[$i].'</a></li>';
					endfor;
					?>
				</ul>
			</li>
			<li><a href="index.php?seccion=contacto">Contacto</a></li>
		</ul>
	</nav>
	
	<main>
	<!-- aqui estaba el contenido -->
	<?php 
		//require( 'contenidos/registro.php' );
		//Verificar cual de todos las secciones debemos cargar
		switch($seccion):
			case 'home':include('contenidos/home.php'); break;
			case 'categorias':include('contenidos/categorias.php'); break;
			case 'categoria':include('contenidos/categoria.php'); break;
			case 'registro':include('contenidos/registro.php'); break;
			case 'contrasenia':include('contenidos/recuperar.php'); break;
			case 'perfil':include('contenidos/perfil.php'); break;
			case 'contacto':include('contenidos/contacto.php'); break;
			case 'leer':include('contenido/leer.php'); break;

		endswitch;
	?>
	</main>
	<aside>

		<form action="index.php" method="get">
			<h2>Buscador</h2>
			<div><input type="search" id="buscar" name="buscar" /></div>
			<div><input type="submit" value="buscar" /></div>
		</form>


		<?php 
		if( $logueado == false ){ //Si no está logueado, mostramos el formulario de login.
		?>
		<!-- esto se muestra si el usuario no está logueado -->
		<form action="" method="post">
			<h2>Login</h2>
			<div><input type="text" placeholder="usuario" name="usuario" id="usuario" /></div>
			<div><input type="password" placeholder="clave" name="clave" id="clave" /></div>
			<div class="center"><a href="index.php?seccion=registro">Registro</a><a href="index.php?seccion=contrasenia">Olvidé mi contraseña</a></div>
			<div><input type="submit" value="Ingresar" /></div>
		</form>
		<?php 
		} else {
		?>
		<!-- esto se muestra si el usuario está logueado -->
		<div>
			<?php echo '<h2>'.$nombre.' '.$apellido.'</h2>'; ?>
			<img src="recursos/img/fill-murray.jpg" alt="Avatar de Nombre usuario" />
			<p><?php echo $email; ?></p>
			<div class="center">
				<a href="index.php?seccion=perfil">Editar perfil</a>
				<a href="#">Cerrar sesión</a>
			</div>
		</div>
		<?php 
		} //Cierra el IF del usuario logueado.
		?>
	</aside>
	<footer>
		
	</footer>
</body>
</html>