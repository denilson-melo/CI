	<?php echo validation_errors(); ?>
	<?php echo form_open('cadastro'); ?>
	
			<div class="input-field">
				<label for="nome">Nome</label>
				<input type="text" name="nome" class="col s16"/>
			</div>
			
			<div class="input-field">
				<label for="email">Email</label>
				<input type="email" name="email"/>
			</div>

			<div class="input-field">
				<label for="senha">Senha</label>
				<input type="password" name="senha"/>
			</div>

			<div class="input-field">
				<label for="senha_validar">Confirmar Senha</label>
				<input type="password" name="senha_validar"/>
			</div>
				
			<div class="col s12">	
				<label>Sexo</label>
				<select name="sexo" class="browser-default">
					<option value="M">Masculino</option>
					<option value="F">Feminino</option>
				</select>
			</div>

			<div class="input-field">
				<label for="telefone">Telefone</label>
				<input type="text" name="telefone"/>
			</div>

				<button class="btn waves-effect waves-light" type="submit" name="action">
					Cadastrar
					<i class="material-icons right">send</i>
				</button>

		</form>

