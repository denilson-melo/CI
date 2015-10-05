<!DOCTYPE html>
<html>
    <head>        
		<title><?php echo $title; ?></title>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('css/materialize.min.css'); ?>"  media="screen,projection"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>		
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url('js/materialize.min.js'); ?>"> </script>		
		<script type="text/javascript">
			$( document ).ready(function(){
				$(".button-collapse").sideNav();
			});
		</script>
    </head>
    <body>
		<nav>
			<div class="nav-wrapper blue-grey darken-4">
				<a href="#" class="brand-logo center bold">Sappi</a>
				<a href="#" class="button-collapse" data-activates="nav-mobile"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="<?=base_url()?>index.php/home">Home</a></li>
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
					<li><a href=".<?=base_url()?>.'index.php/home'">Home</a></li>
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
			</div>
		</nav>
	<div class="container">