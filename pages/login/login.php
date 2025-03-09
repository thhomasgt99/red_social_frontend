<main class="main-login d-flex" style="width: 100vw; height: 100vh; background-color: white;">
	<div class="main-login-fondo loginImg d-flex justify-content-center align-items-center" style="">
		<div class="d-flex flex-column">
			<div class="d-flex justify-content-center align-items-center">
				<i style="color: white;" class="bi bi-brightness-high"></i>
				<span style="font-size: 5rem; color: white;">14°</span>
			</div>
			<p style="text-align: center; font-size: 5rem; color: white;">Tibirita</p>
			<p style="text-align: center; font-size: 4rem; color: white;">Bienvenido de nuevo</p>
			<p style="text-align: center; font-size: 2rem; color: white;">Gracias por participar</p>

		</div>
	</div>

	<div class="main-login-form d-flex flex-column align-items-center justify-content-center " style="">
		<div class="d-flex flex-row align-items-center">
			<img src="../assets/imgs/logo.png" alt="" style="width: 50px; height: 50px; margin-right: 2rem;">
			<h3>Tibirita Opina</h3>
		</div>
		<div class="d-flex flex-column align-items-center">
			<form action="/arbi.php">
				<div class="mb-3 mt-3">
					<input type="email" class="form-control w-100" id="email" placeholder="Correo" name="email" style="">
				</div>
				<div class="mb-3">
					<input type="password" class="form-control w-100" id="pwd" placeholder="Contraseña" name="pswd" style="">
				</div>

				<button type="submit" class="btn btn-primary">Sing In</button>

				<h4 style="color: grey; margin-top: 2rem;">¿Has olvidado tu contraseña?</h4>
			</form>

			<div>
				<p style="margin-top: 2rem;">¿Aún no eres miembro? <a href="/register">Regístrate</a></p>
			</div>

		</div>
	</div>

</main>