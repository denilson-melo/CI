		
		
		<h2>LOGIN</h2>
		<?php echo validation_errors(); ?>
		<?php echo form_open('login/entrar'); ?>
		<?php if (!empty($erro)) echo $erro ?>
			
			<div class="input-field">
				<i class="material-icons prefix">email</i>
				<label for="email">Email</label>
				<input type="text" name="email">
			</div>

			<div class="input-field">
				<i class="material-icons prefix">lock</i>
				<label for="senha">Senha</label>
				<input type="password" name="senha">
			</div>

			<button class="btn waves-effect waves-light" type="submit" name="action">
				Entrar
				<i class="material-icons right">send</i>
			</button>

		</form>