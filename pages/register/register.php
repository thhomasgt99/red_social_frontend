<main class="main-login d-flex" style="width: 100vw; height: 100vh; background-color: white;">
	<div class="main-login-fondo loginImg d-flex justify-content-center align-items-center" style="">
		<div class="d-flex flex-column">
			<div class="d-flex justify-content-center align-items-center">
				<i style="color: white;" class="bi bi-brightness-high"></i>
				<span style="font-size: 5rem; color: white;">14°</span>
			</div>
			<p style="text-align: center; font-size: 5rem; color: white;">Tibirita</p>
			<p style="text-align: center; font-size: 4rem; color: white;">Crear una cuenta</p>
			<p style="text-align: center; font-size: 2rem; color: white;">Introduce tus datos personales y comienza tu viaje con nosotros.</p>

		</div>
	</div>

	<div class="main-login-form d-flex flex-column align-items-center justify-content-center " style="">
		<div class="d-flex flex-row align-items-center">
			<img src="../assets/imgs/logo.png" alt="" style="width: 50px; height: 50px; margin-right: 2rem;">
			<h3>Tibirita Opina</h3>
		</div>
		<div class="d-flex flex-column align-items-center">
			<form action="/arbi.php">
				<div class="mb-3 mt-3 d-flex">
					<input type="text" class="form-control ms-5;" id="nombre" placeholder="Nombre" name="nombre" style="width: 50%;">
					<input type="text" class="form-control ms-5;" id="apellido" placeholder="Apellidos" name="apellido" style="width: 50%; margin-left: 1rem;">
				</div>
				<div class="mb-3">
					<input type="email" class="form-control w-100" id="correo" placeholder="Correo" name="correo" style="">
				</div>
				<div class="mb-3">
					<input type="number" class="form-control w-100" id="telefono" placeholder="Numero de Teléfono" name="telefono" style="">
				</div>
				<div class="mb-3 mt-3 d-flex">
					<input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena" style="width: 50%;">
					<input type="password" class="form-control" id="cofirmarContrasena" placeholder="Confirmar Contraseña" name="cofirmarContrasena" style="width: 50%; margin-left: 1rem;">
				</div>
				
				<button type="submit" class="btn btn-primary">Crear Cuenta</button>

			</form>

			<div>
				<p style="margin-top: 2rem;">¿Ya eres miembro? Iniciar sesión <a href="/login">Iniciar sesión </a></p>
			</div>

		</div>
	</div>

</main>