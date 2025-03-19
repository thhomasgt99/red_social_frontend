<?php
$parametroGetAmigos = isset($_GET['amigos']) && $_GET['amigos'] === 'true';
$parametroGetFotos = isset($_GET['fotos']) && $_GET['fotos'] === 'true';
?>
<div>
	<img style="width: 100%;" src="./assets/imgs/perfil.gif" alt="">
</div>
<div class="profile">
	<div class="d-flex container-main container-main-profile">
		<!-- Aside izquierdo -->
		<aside class="aside-izquierdo aside-izquierdo-profile rounded d-flex flex-column align-items-center p-3"
			style="top: 3vh; background-color: #ffffff;">

			<img src="./assets/imgs/perfil.png" alt="Foto de perfil"
				style="width: 20rem; height: 20rem; border-radius: 50%; position: absolute; top: -10rem;">

			<div class="container-aside-profile d-flex flex-column align-items-center">
				<div class="text-center">
					<h3>Thomas Bernal</h3>
					<h5 class="text-muted">@thomm_10</h5>
				</div>

				<div class="d-flex botonera-profile gap-2 mt-3">
					<button class="boton-profile p-2 d-flex align-items-center"
						style="background-color: #ffffff; color: #007bff; border: 1px solid #007bff;">
						<i class="me-2 bi bi-plus-lg"></i> Seguir
					</button>

					<button class="boton-profile p-2 d-flex align-items-center"
						style="background-color: #007bff; color: #ffffff; border: 1px solid #007bff;">
						<i class="me-2 bi bi-chat"></i> Mensaje
					</button>

					<div class="dropdown">
						<button class="dropdown-toggle boton-profile p-2 d-flex align-items-center"
							style="background-color: #ffffff; color: #007bff; border: 1px solid #007bff;" type="button"
							id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="me-2 bi bi-three-dots"></i> Más
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="?amigos=true">Amigos</a>
							<a class="dropdown-item" href="?fotos=true">Fotos</a>
						</div>
					</div>
				</div>

				<div class="mt-4 text-start">
					<h2>Intro</h2>
					<div><i class="bi bi-suitcase-lg text-primary"></i> Web Developer at <strong>Company Name</strong></div>
					<div><i class="bi bi-geo-alt text-primary"></i> Lives in <strong>City, Country</strong></div>
					<div class="d-flex align-items-center">
						<i class="bi bi-stopwatch text-primary"></i> Last Login <strong class="ms-2">Online</strong>
						<div class="ms-2" style="width: 10px; height: 10px; background-color: green; border-radius: 50%;"></div>
					</div>
				</div>

				<div class="mt-5 text-start">
					<h2>Otras Redes Sociales</h2>
					<div><i class="bi bi-facebook"></i> facebook.com/username</div>
					<div><i class="bi bi-twitter-x"></i> twitter.com/username</div>
					<div><i class="bi bi-instagram"></i> instagram.com/username</div>
				</div>

			</div>
		</aside>

		<!-- Panel central -->
		<main class="main main-profile container rounded position-relative"
			style="background-color: #ffffff; margin-top: 3vh;">
			<?php 
				if ($parametroGetAmigos) {
					require_once 'pages/profile/amigos/amigos.php';
				} elseif ($parametroGetFotos) {
					require_once 'pages/profile/fotos/fotos.php';
				} else {
					require_once 'pages/profile/mainPrincipal/mainPrincipal.php';
				}
			?>
		</main>

		<!-- Aside derecho -->
		<aside class="aside-derecho aside-derecho-profile rounded" style="padding-top: 2rem;">
			<h1>Fotos recientes</h1>
			<div>
				<ul>
					<li>
						<img src="./assets/imgs/album-1.jpg" alt="">
					</li>
					<li>
						<img src="./assets/imgs/album-2.jpg" alt="">
					</li>
					<li>
						<img src="./assets/imgs/album-3.jpg" alt="">
					</li>
				</ul>
			</div>
		</aside>
	</div>
</div>

<script>
	// console.log(params.get("amigos")); // Obtiene el valor del parámetro 'nombre'
</script>
