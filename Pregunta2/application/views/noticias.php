<?php 
    //$nivel = "estilos.css";
	defined('BASEPATH') OR exit('No direct script access allowed');
	//include('header.php');
?>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Noticias</h1>
			</div>

			<div class="articulo">
				<article>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<br/>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in
					reprehenderit in voluptate velit esse Ut enim ad minim veniam, quis nostrud 
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</article>
			</div>
			<aside>
				<div class="widget">
					<h3>Carreras de la Facultad</h3>
					<ul>
						<?php 
						echo "<li><a href='../Welcome/info'>Informática</a></li>";
						echo "<li><a href='../Welcome/quimi'>Quimica</a></li>";
						echo "<li><a href='../Welcome/mat'>Matemática</a></li>";
						echo "<li><a href='../Welcome/bio'>Biología</a></li>";
						echo "<li><a href='../Welcome/est'>Estadística</a></li>";
                        echo "<li><a href='../Welcome/fis'>Fisíca</a></li>";
						?>
						
					</ul>
				</div>
			</aside>	
		</div>
	</section>
</body>
</html>
