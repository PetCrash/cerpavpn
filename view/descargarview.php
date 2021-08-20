<?php
include_once ("./view/head.php");
?>
<body>
	<div class="baseLogin">
		<div class="tituloLogin">
			<span>Bienvenido <?php echo $_SESSION['name']?></span>
		</div>
		<a href="view/download.php">Descargar</a>
	</div>

</body>
</html>