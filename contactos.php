<?php include ("code-head.php"); ?>

<body>
<?php include("header.php"); ?>
	
	<main id="content-area">
		<div class="bg-cont">
	
		<article class="single-page">
			
			
			<header class="page-header">
				<div class="container">		

					
				
				</div>
			</header><!-- /.page-header -->
			
			
			
			<div class="container page-content">

				<h1><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Contactos</h1>

				<div class="col-right">
					<h3 class="title">Ubicaci&oacute;n</h3>
					<iframe src="https://www.google.com/maps/d/embed?mid=1qHcaI_GZ7-8tj83MxlJlXYzveZM&z=16" width="640" height="400"></iframe>

					<p><strong>Direcci&oacute;n:</strong> Ciudadela Vernaza Norte Mz 17 V 23 Avenida Hermano Miguel.<br>
					<strong>Telfs.:</strong> (593 4) 292 4874<br>
					<strong>E-mail:</strong> <a href="mailto:info@cismedical10.com">info@cismedical10.com</a></p>
				</div>


			<div class="col-left">
			<p>Si deseas comunicarte con nosotros puedes llamarnos a nuestros tel&eacute;fonos <br>o solo llena y env&iacute;a el siguiente formulario y nos pondremos en contacto a la brevedad posible.</p>
				<form action="enviar.php" method="post">
					
					<label for="nombre">Nombre:</label>
					<input type="text" id="nombre" name="nombre" placeholder="¿Cual es tu nombre?" required />
					
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" placeholder="¿A donde debería responderte?" required />
					
					<label for="telefono">Telefono:</label>
					<input type="text" id="telefono" name="telefono" placeholder="¿Número para contactarte?" required />
					
					<label for="mensaje">Mensaje:</label>
					<textarea id="mensaje" name="mensaje" rows="8" placeholder="Escribe aquí tus comentarios" required ></textarea>
					
					<input type="submit" value="Enviar mensaje" class="btn-form" />
				
				</form>
				</div>
			
			</div><!-- /.content -->
			
		</article><!-- /#single-page -->
	</div>
	</main><!-- /#content-area -->
	
	<!-- Livemotive -->
	
	
<?php include("footer.php"); ?>
	
</body>
</html>