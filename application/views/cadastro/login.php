		
		
		<?php echo form_open('login'); ?>
		<?php if (!empty($erro)) echo $erro ?>
		
			<div class="row">
				<div class="col l6 offset-l3 m8 offset-m2 s10 offset-s1">
					<h2>LOGIN</h2>
					
					<div class="input-field">
						<i class="material-icons prefix">email</i>
						<label for="email">Email</label>
						<input type="text" name="email" value="<?= set_value('email'); ?>">
						<?=form_error('email');?>
					</div>
	
					<div class="input-field">
						<i class="material-icons prefix">lock</i>
						<label for="senha">Senha</label>
						<input type="password" name="senha">
						<?=form_error('senha');?>
					</div>
					
					<br>
					
					<button class="btn waves-effect waves-light col s12 m6 offset-m3 l4 offset-l4" type="submit" name="action">
						Entrar
						<i class="material-icons right">send</i>
					</button>
				</div>
			</div>
	

		</form>