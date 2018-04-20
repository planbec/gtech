	<!-- Main-header -->
	<header id="main-header" class="">
		<div class="header-cont">
			<!-- Logo-header -->
			<div class="logo-header">
				<h1 class="logo">
					<a href="index.php">
						<img src="img/logo_m10.png" alt="Medical 10 - Centro Integral de Salud"  title="Medical 10 - Centro Integral de Salud" width="240"></h1>
					</a>
				<h2 class="slogan">Medical 10 - Centro Integral de Salud</h2>
			</div>

			
			<span class="menu-trigger"><i class="fa fa-bars"></i></span>
			
			<!-- Main-menu -->
			<nav id="main-menu" role="navigation" class="closed">
			<div class="redes">
				<span><a href="https://www.facebook.com/Centro-Integral-de-Salud-Medical-10-249062688788647/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></span>
				<span><a href="https://www.twitter.com/cismedical10" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span>
				<span><a href="https://www.instagram.com/cismedical10" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></span>
			</div>

				<ul>
					<li><a href="index.php" <?php if($uri == 'index') echo 'class="active"'?> >Inicio</a></li>
					<li><a href="quienessomos.php" <?php if($uri == 'quienessomos') echo 'class="active"'?> >Quienes somos</a></li>
					<li><a href="horarios-especialidades.php" <?php if($uri == 'horarios-especialidades') echo 'class="active"'?> >Horarios y especialidades</a></li>
					<!--li><a href="ubicacion.php" <?php if($uri == 'ubicacion') echo 'class="active"'?> >Ubicaci&oacute;n</a></li-->
					<li><a href="contactos.php" <?php if($uri == 'contactos') echo 'class="active"'?> >Contactos</a></li>
				</ul>
			</nav>
		</div>
	</header>

