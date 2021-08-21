<?php
include_once ("./view/head.php");
?>
<body>
	<div class="baseLogin">
		<div class="tituloLogin">
			<span>Bienvenido <?php echo $_SESSION['alias']?></span>
		</div>
		<div class="enlacedescarga"><a href="view/download.php">Descargar</a></div>

		<div class="desconectar"><a href="<?php echo URL_BASE?>?m=logout">Salir</a></div>
	</div>

</body>
</html>