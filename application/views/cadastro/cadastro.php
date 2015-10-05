	<h2>CADASTRO</h2>	
	<?php echo form_open('cadastro'); ?>
	
		<div class="input-field">
			<i class="material-icons prefix">account_circle</i>
			<label for="nome">Nome</label>
			<input type="text" name="nome" class="col s16" value="<?= set_value('nome'); ?>"/>
			<?php echo form_error('nome'); ?>
		</div>
		
		<div class="input-field">
			<i class="material-icons prefix">email</i>
			<label for="email">Email</label>
			<input type="email" name="email" value="<?= set_value('email'); ?>"/>
			<?php echo form_error('email'); ?>
		</div>

		<div class="input-field">
			<i class="material-icons prefix">lock_outline</i>
			<label for="senha">Senha</label>
			<input type="password" name="senha"/>
			<?php echo form_error('senha'); ?>
		</div>

		<div class="input-field">
			<i class="material-icons prefix">lock</i>
			<label for="senha_validar">Confirmar Senha</label>
			<input type="password" name="senha_validar"/>
			<?php echo form_error('senha_validar'); ?>
		</div>
			
		<div class="col s12">	
			<label>Sexo</label>
			<select name="sexo" class="browser-default">
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
			</select>
		</div>

		<div class="input-field">
			<i class="material-icons prefix">phone</i>
			<label for="telefone">Telefone</label>
			<input type="text" name="telefone" value="<?= set_value('telefone'); ?>"/>
		</div>

		<button class="btn waves-effect waves-light" type="submit" name="action">
			Cadastrar
			<i class="material-icons right">send</i>
		</button>

	</form>

