<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title>Registro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Registrarse</h1>
							<form action="controladores/loginControlador.php" method="POST" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="usuario">Nombre</label>
									<input id="usuario" type="text" class="form-control" name="usuario" value="" required autofocus>
									<input type="hidden" id="accion" name="accion" value="crear">
									<div class="invalid-feedback">
										Nombre necesario	
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Direccion E-mail</label>
									<input id="email" type="email" class="form-control" name="email" value="" required>
									<div class="invalid-feedback">
										Email no valido
									</div>
								</div>

								<div class="mb-3">
									<label class="mb-2 text-muted" for="password">Contraseña</label>
									<input id="password" type="password" class="form-control" name="password" value="" required>
								    <div class="invalid-feedback">
								    	Contraseña necesaria.
							    	</div>
								</div>

								<p class="form-text text-muted mb-3">
									Registrandote estas de acurdo con nuestras condiciones.
								</p>

								<div class="align-items-center d-flex">
									<button type="submit" class="btn btn-primary ms-auto">
										Registrarse	
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Ya tengo cuenta? <a href="index.php" class="text-dark">Login</a>
							</div>
						</div>
					</div>
                </div>
			</div>
		</div>
	</section>

	<script src="../login/login.js"></script>
</body>
</html>