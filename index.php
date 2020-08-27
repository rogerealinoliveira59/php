<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-lg-4 col-md-6 header-logo">
				<img src="img/logo-versa.png">
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-lg-4 col-md-6 box">
				<label>Acesse a sua conta</label>
			
			<?php
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset ($_SESSION['msg']);
				}
				?>	
				<?php

				echo "Olá parça";

				echo "0800555";
	
				?>
				<form action="login.php"  method="POST">
				  <div class="form-group">
				    <input name="email" type="email" class="form-control" placeholder="Digite o email" required>
				  </div>
				  <div class="form-group">
				  	<input name="senha" type="password" class="form-control" id="exampleInputPassword1" placeholder="Digitar a  senha" required>
				  </div>
				  <button type="submit" class="btn btn-primary" alt="FAZER LOGIN">Entrar</button>
					</form>
					Esqueceu a senha? <label class="forgot"></label>
						<form action="redefinir_senha.php" method="POST">
					<a href="/sistema/redefinir_senha.php?">Clique aqui</a></label>
			</div>
				</form>
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-lg-4 col-md-6 footer-label">
				<label>Developed by Vortex Web Solutions</label> 
			</div>
		</div>
		<div class="row justify-content-md-center">
			<div class="col-lg-4 col-md-6 footer-logo">
				<img src="img/logo-vortex.png">
			</div>
		</div>
	</div>
</body>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>



