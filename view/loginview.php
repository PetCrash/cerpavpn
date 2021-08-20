<?php
include_once "./head.php";
?>
<body>
	<div class="baseLogin">
		<form action="index.php" method="post">
		<div class="tituloLogin"><span>Ingresar</span></div>
		<div class="campoLogin">
			<div class="textoLogin"><span>Usuario</span></div>
			<div class="inputLogin"><input type="text" name="usuario" required /></div>
		</div>
		<div class="campoLogin">
			<div class="textoLogin"><span>Contraseña</span></div>
			<div class="inputLogin"><input type="password" name="password" required /></div>
		</div>
		<div class="errorLogin"><span><?php if(isset($message)){echo $message;} ?></span></div>
		<div class="botonLogin"><input type="submit" name="enviarLogin" value="Log In"></div>
		</form>
	</div>
</body>
</html>