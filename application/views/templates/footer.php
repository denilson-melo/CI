	

	</div>

	<footer class="page-footer blue-grey darken-3">
		<div class="container ">
			<div class="row valing-wrapper grey-text text-lighten-3">

				<div class="col s12 m6 l3">
					<p>PROJETO:</p>
					<h2>Sappi</h2>
					<p>Make it work!</p>
				</div>

				<div class="col s12 m6 l3">
					<p>INFORMAÇÕES:</p>
					<div class="row">
						<i class="material-icons left">location_on</i>Endereço, bairro, numero
					</div>
					<div class="row">
						<i class="material-icons left">email</i>email@email.com
					</div>
					<div class="row">
						<i class="material-icons left">phone</i>(73)9999-9999
					</div>
				</div>

				<div class="col s12 l3">
					<p>FALE CONOSCO:</p>
					<?php echo form_open('contato'); ?>
						<div class="input-field">
							<i class="material-icons prefix">email</i>
							<label for="email-contato">Seu email</label>
							<input type="email">
						</div>
						<div class="input-field">
							<i class="material-icons prefix">comment</i>
							<label for="mensagem">Mensagem</label>
							<textarea class="materialize-textarea"></textarea>
						</div>
				</div>
				<div class="col s12 l3">
					<p>REALIZAÇÃO:</p>
					<img id="logo-footer" src="<?= base_url()?>/img/rodape.svg" alt="ues-nit" type="image/svg+xml" width="100%"/>
				</div>
			</div>
		</div>
		<div class="footer-copyright blue-grey darken-4">
			<div class="container">2015 Copyright Text
				<a href="#!" class="grey-text text-lighten-4 right">More Links</a>
			</div>
		</div>
	</footer>
    
	</body>
</html>