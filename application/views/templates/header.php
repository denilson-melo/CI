<!DOCTYPE html>
<html>
    <head>        
		<title><?php echo $title; ?></title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/materialize.min.css'); ?>"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>		
    </head>
    <body>
		<nav>
			<div class="nav-wrapper">
				<a href="#" class="brand-logo center"></a>
				<a href="#" class="button-collapse" data-activates="nav-mobile"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<?php 
						if ( isset($_SESSION['logado']) ){
							echo '<li><a href="'.base_url().'index.php/perfil">'.$_SESSION["nome"].'</a></li>';
							echo '<li><a href="'.base_url().'index.php/login/sair">Sair</a></li>';
						} else { 
							echo '<li><a href="'.base_url().'index.php/login">Login</a></li>';
							echo '<li><a href="'.base_url().'index.php/cadastro">Cadastro</a></li>';
						}
					?>
				</ul>
				<ul class="side-nav" id="nav-mobile">
					<li><a href="#">Login</a></li>
					<li><a href="#">Registrar</a></li>
				</ul>
			</div>
		</nav>
	<div class="container">