	<!-- Footer -->
	<footer id="main-footer">
		
		<div class="footer-call-to-action">
			
			<div class="contact cols">
				<div class="col3">
					<figure><img src="img/logo_ft_m10.png"></figure>
				</div>

				<div class="col3">
					<ul>
						<li><a href="index.php" <?php if($uri == 'index') echo 'class="active"'?> >Inicio</a></li>
						<li><a href="quienessomos.php" <?php if($uri == 'quienessomos') echo 'class="active"'?> >Quienes somos</a></li>
						<li><a href="horarios-especialidades.php" <?php if($uri == 'horarios-especialidades') echo 'class="active"'?> >Horarios y especialidades</a></li>
						<!-- li><a href="ubicacion.php" <?php if($uri == 'ubicacion') echo 'class="active"'?> >Ubicaci&oacute;n</a></li -->
						<li><a href="contactos.php" <?php if($uri == 'contactos') echo 'class="active"'?> >Contactos</a></li>
					</ul>
				</div>

				<div class="col3">
						Dirección: Ciudadela Vernaza Norte Mz 17 V 23 Avenida Hermano Miguel.<br>
						Telfs.: (593 4) 292 4874 <br>
						Cel: 0980042103 - 0981600116<br>
						E-mail: info@cismedical10.com<br>
						Guayaquil - Ecuador <br>
				</div>
				

				<!-- Footer-menu -->
				<!--nav id="footer-menu">
					<ul>
						<li><a href="index.php" <?php if($uri == 'index') echo 'class="active"'?> >Inicio</a></li>
						<li><a href="quienessomos.php" <?php if($uri == 'quienessomos') echo 'class="active"'?> >Quienes somos</a></li>
						<li><a href="productos.php" <?php if($uri == 'productos') echo 'class="active"'?> >Productos</a></li>
						<li><a href="contactos.php" <?php if($uri == 'contactos') echo 'class="active"'?> >Contactos</a></li>
					</ul>
				</nav -->

			</div>
			
		</div><!-- /.footer-call-to-action -->
		
		<div id="bottom-footer" class="container cf">
			
			<!-- Copyright -->
			<div class="copyright">
				&copy; 2016 Medical10  -  Todos los derechos reservados. 
			</div>

			<div class="planb">
				Desarrollado por 
				<a href="http://www.planb.ec" target="_blank"><img src="img/planb.jpg" title="PlanB.ec"></a>
			</div>
			

			
		</div><!-- /#bottom-footer -->
		
	</footer>

	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/jquery.flexslider-min.js"></script>
	<script src="js/rem.min.js"></script>
	<script src="js/functions.js"></script>
	
	<script>
		jQuery('document').ready(function($){
		
			$('.flexslider').flexslider({
				selector: ".slides > .testimonio",
				animation: "slide",
				controlNav: false,
				directionNav: true,
				prevText: "Anterior",
				nextText: "Siguiente", 
			});
		
		});
	</script>