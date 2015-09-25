	<?php echo validation_errors(); ?>
	<?php echo form_open('cadastro'); ?>
	
			<div class="input-field">
				<i class="material-icons prefix">account_circle</i>
				<label for="nome">Nome</label>
				<input type="text" name="nome" class="col s16"/>
			</div>
			
			<div class="input-field">
				<i class="material-icons prefix">email</i>
				<label for="email">Email</label>
				<input type="email" name="email"/>
			</div>

			<div class="input-field">
				<i class="material-icons prefix">lock_outline</i>
				<label for="senha">Senha</label>
				<input type="password" name="senha"/>
			</div>

			<div class="input-field">
				<i class="material-icons prefix">lock</i>
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
				<i class="material-icons prefix">phone</i>
				<label for="telefone">Telefone</label>
				<input type="text" name="telefone"/>
			</div>

				<button class="btn waves-effect waves-light" type="submit" name="action">
					Cadastrar
					<i class="material-icons right">send</i>
				</button>

		</form>

