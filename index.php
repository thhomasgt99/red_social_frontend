<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tibirita Opina</title>
	<link rel="stylesheet" href="assets/css/styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="body" style="background-color:rgb(233, 233, 233);">

	<?php
	$url = $_SERVER['REQUEST_URI'];

	// Extraer la última parte de la URL
	$ultimaParte = basename(parse_url($url, PHP_URL_PATH));

	// Verificar si es "login.php"
	if ($ultimaParte === 'login') {
		require_once 'pages/login/login.php';
	} else if ($ultimaParte === 'register') {
		require_once 'pages/register/register.php';
	} else {
		require_once 'pages/headers/headermobile.php';
		require_once 'pages/headers/headerdesktop.php';
		$path = $_SERVER['REQUEST_URI'];
		$ultimo_corte = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));;

		switch ($ultimo_corte) {
			case 'messages':
				require_once 'pages/messages/messages.php';
				break;
			case 'profile':
				require_once 'pages/profile/profile.php';
				break;
			default:
				require_once 'pages/main/main.php';
				break;
		}
	}
	?>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/b296be9a11.js" crossorigin="anonymous"></script>
	<script>
		(function stylesCondicionales() {
			// Función que verifica el ancho de pantalla y aplica estilos
			const aplicarEstilos = () => {
				const anchoPantalla = window.innerWidth;

				const pathSegments = window.location.pathname.split('/').filter(segment => segment !== "");
				if (pathSegments.length >= 2) {
					window.location.replace("http://redsocial.com");
				};

				if (anchoPantalla < 990) {
					// document.querySelector('.main').classList.replace('w-50', 'w-10');
					// document.querySelector('.main').classList.add('ms-0');
					<?php
					$uri = trim($_SERVER['REQUEST_URI'], '/');
					$lastPart = basename($uri);
						if($lastPart != 'profile' & $lastPart !=  'profilepropio'){
							// echo "document.querySelector('.container-main').classList.add('flex-column-reverse');";
						}else{
							echo "if(document.querySelector('.container-main').classList.contains('container-main-profile');){
								document.querySelector('.container-main').classList.add('flex-row');
							}";
							
						}
					?>
					if(!document.querySelector('.aside-derecho').classList.contains("aside-derecho-profile")){
						document.querySelector('.aside-derecho').classList.add('w-100', 'ms-0');
					}

				} else {
					document.querySelector('.main').classList.replace('w-100', 'w-50');
					document.querySelector('.main').classList.remove('ms-0');
					document.querySelector('.container-main').classList.remove('flex-column-reverse');
					document.querySelector('.aside-derecho').classList.remove('w-100', 'ms-0');

				}
			}

			// Llama a la función una vez para aplicar los estilos al cargar la página
			aplicarEstilos();

			// Agrega el event listener a window, no a .body
			window.addEventListener('resize', aplicarEstilos);
		})();


	</script>
</body>

</html>