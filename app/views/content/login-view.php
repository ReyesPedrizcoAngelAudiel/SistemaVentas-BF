<link rel="stylesheet" type="text/css" href="app/views/css/style.css">
<img class="wave" src="app/views/img/wave.png">
<div class="container">
	<h2 class="main-title">Bondadosa Farmacia</h2>
	<div class="img">
		<img src="app/views/img/paz.png">
	</div>
	<div class="login-content">
		<form action="" method="POST" autocomplete="off" >
			<img class="Person" src="app/views/img/medico.png">
			
			<h2 class="title">Bienvenido</h2>

			<?php
				if(isset($_POST['login_usuario']) && isset($_POST['login_clave'])){
					$insLogin->iniciarSesionControlador();
				}
			?>

			<div class="field">
				<label class="label"><i class="fas fa-user"></i> &nbsp; Usuario</label>
				<div class="control">
					<input class="input" type="text" name="login_usuario" pattern="[a-zA-Z0-9]{3,20}" maxlength="20" required >
				</div>
			</div>

			<div class="field">
				<label class="label"><i class="fas fa-lock"></i> &nbsp; Clave</label>
				<div class="control">
					<input class="input" type="password" name="login_clave" pattern="[a-zA-Z0-9$@.-]{4,100}" maxlength="100" required >
				</div>
			</div>

			<p class="has-text-centered mb-4 mt-3">
				<input type="submit" class="btn" value="Ingresar">
			</p>

		</form>
	</div>
</div>

<!--<img class="wave" src="app/views/img/wave.png">
	<div class="container">
    	<h1 class="main-title">Bondadosa Farmacia</h1>
		<div class="img">
			<img src="Estilos/Imagenes/paz.png">
		</div>
		<div class="login-content">
			<form action="" method="POST" autocomplete="off">
				<img src="Estilos/Imagenes/medico.png">
				<h2 class="title">Bienvenido</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Usuario</h5>
           		   		<input type="text" class="input" name="Nombre">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Contraseña</h5>
           		    	<input type="password" class="input" name="Contra">
            	   </div>
            	</div>
            	<a href="#">¿Olvidaste la contraseña?</a>
            	<input type="submit" class="btn" value="Ingresar">
            </form>
        </div>
    </div>-->