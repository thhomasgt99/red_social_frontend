<div class="d-flex container-main container">
		<!--aside izquierdo-->
		<aside class="p-5 w-25  aside-izquierdo rounded" style="position: sticky;
		top: 3vh; background-color: #ffffff; height: 87vh; margin-top: 3vh;">
			<ul class="list-unstyled">
				<li>
					<a href="/messages" style="color: black;">
						<i class="bi bi-chat-dots" style="font-size: 3rem; margin-right: 2rem;"></i>Mensajes
					</a>
				</li>
				<li>
					<a href="#" style="color: black;">
						<i class="bi bi-people" style="font-size: 3rem; margin-right: 2rem;"></i>Amigos
					</a>
				</li>
			</ul>
		</aside>

		<!-- panel central -->
		<main class="w-50 main container rounded position-relative"
			style="background-color: #ffffff; margin-top: 3vh; margin-left: 2rem;">
			<div class="rounded" style="background-color: aliceblue;">
				<textarea name="publicacion" id="" placeholder="¿Que tienes en mente, Thomas?"
					style="all: unset; background-color: aliceblue; height:30vh; width: 100%;"></textarea>
				<div class="d-flex justify-content-between">
					<div class="d-flex">
						<div class="d-flex align-items-center">
							<i class="bi bi-image-fill"></i>
							<p class="mb-0">Foto/Video</p>
						</div>

						<div class="d-flex align-items-center ms-5">
							<i class="bi bi-people"></i>
							<p class="mb-0">Etiquetar amigos</p>
						</div>
					</div>

					<button class="btn btn-primary" style="width: 6rem; height: 3rem;">Publicar</button>
				</div>

				<hr>
			</div>

			<!-- publicaciones -->
			<div class="publication" style="position: relative;">
				<div class="d-flex justify-content-between">
					<div class="d-flex">
						<img class="rounded-circle" src="./assets/imgs/xenomorfo.jpg" alt="" style="height: 5rem; width: 5rem;">
						<div class="ms-3">
							<p class="mb-0">Juan Miguel</p>
							<p class="mb-0">Hace 3 horas</p>
						</div>
					</div>
					<div class="ms-5">
						<button data-bs-toggle="collapse" data-bs-target="#demo2"
							style="background-color: transparent; border: none;"><i class="bi bi-three-dots"></i></button>
					</div>
				</div>

				<div id="demo2" class="collapse rounded"
					style="background-color:rgb(171, 171, 171); position: absolute; right: 0;">
					<ul>
						<li class="d-flex color-secondary" style="list-style: none; color:white;">
							<i class="bi bi-floppy me-3"></i>
							<div class="me-5">
								<h4>Guardar publicación</h4>
								<h6>Añade esto a tus elementos guardados</h6>
							</div>
						</li>
						<li class="d-flex color-secondary" style="list-style: none; color:white">
							<i class="bi bi-eye-slash me-3"></i>
							<div class="me-5">
								<h4>Ocultar publicación</h4>
								<h6>Ver menos publicaciones como esta</h6>
							</div>
						</li>
						<li class="d-flex color-secondary" style="list-style: none; color:white">
							<i class="bi bi-ban me-3"></i>
							<div class="me-5">
								<h4>Reportar publicación</h4>
								<h6>Me preocupa este post</h6>
							</div>
						</li>
					</ul>
				</div>

				<div class="mt-3">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae inventore enim, vel, eum, adipisci
						voluptatem facilis aliquam itaque ea voluptatum reprehenderit. Quis odit labore nulla sapiente, adipisci
						laudantium corporis quia!?</p>
				</div>

				<div class="d-flex">
					<div>
						<i class="bi bi-hand-thumbs-up"></i>
						<span>67</span>
					</div>
					<div class="ms-5">
						<i class="bi bi-chat"></i>
						<span>5</span>
					</div>
					<div class="ms-5">
						<i class="bi bi-share"></i>
						<span>Share</span>
					</div>
				</div>

				<hr>
			</div>

			<div class="publication" style="position: relative;">
				<div class="d-flex justify-content-between">
					<div class="d-flex">
						<img class="rounded-circle" src="./assets/imgs/xenomorfo.jpg" alt="" style="height: 5rem; width: 5rem;">
						<div class="ms-3">
							<p class="mb-0">Juan Miguel</p>
							<p class="mb-0">Hace 3 horas</p>
						</div>
					</div>
					<div class="ms-5">
						<button data-bs-toggle="collapse" data-bs-target="#demo"
							style="background-color: transparent; border: none;"><i class="bi bi-three-dots"></i></button>
					</div>
				</div>

				<div id="demo" class="collapse rounded"
					style="background-color:rgb(171, 171, 171); position: absolute; right: 0;">
					<ul>
						<li class="d-flex color-secondary" style="list-style: none; color:white;">
							<i class="bi bi-floppy me-3"></i>
							<div class="me-5">
								<h4>Guardar publicación</h4>
								<h6>Añade esto a tus elementos guardados</h6>
							</div>
						</li>
						<li class="d-flex color-secondary" style="list-style: none; color:white">
							<i class="bi bi-eye-slash me-3"></i>
							<div class="me-5">
								<h4>Ocultar publicación</h4>
								<h6>Ver menos publicaciones como esta</h6>
							</div>
						</li>
						<li class="d-flex color-secondary" style="list-style: none; color:white">
							<i class="bi bi-ban me-3"></i>
							<div class="me-5">
								<h4>Reportar publicación</h4>
								<h6>Me preocupa este post</h6>
							</div>
						</li>
					</ul>
				</div>

				<div class="mt-3">
					<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae inventore enim, vel, eum, adipisci
						voluptatem facilis aliquam itaque ea voluptatum reprehenderit. Quis odit labore nulla sapiente, adipisci
						laudantium corporis quia!?
					</p>
					<img src="./assets/imgs/xenomorfo.jpg" alt="" style="width: 100%;">
				</div>

				<div class="d-flex">
					<div>
						<i class="bi bi-hand-thumbs-up"></i>
						<span>67</span>
					</div>
					<div class="ms-5">
						<i class="bi bi-chat"></i>
						<span>5</span>
					</div>
					<div class="ms-5">
						<i class="bi bi-share"></i>
						<span>Share</span>
					</div>
				</div>

				<hr>
			</div>


		</main>

		<!-- aside derecho -->
		<aside class="aside-derecho w-25 display-flex rounded" style="padding-top: 2rem;">
			<div class="d-flex justify-content-around">
				<p>11:37 AM</p>
				<p>Tibirita</p>
			</div>

			<div class="d-flex text-center align-items-center flex-row justify-content-around">
				<div class="d-flex">
					<i class="bi bi-sun"></i>
				</div>
				<div>
					<div>
						<i class="bi bi-droplet"></i>
						<p>15%</p>
					</div>
					<div>
						<i class="bi bi-flag"></i>
						<p>15%</p>
					</div>
				</div>
			</div>

			<div class="d-flex justify-content-around">
				<h1>28°</h1>
			</div>
		</aside>
	</div>