		<?php echo validation_errors(); ?>
		<?php echo form_open('cadastro'); ?>
			<label for="nome">Nome</label>
			<input type="text" name="nome"/>
			
			<label for="email">Email</label>
			<input type="email" name="email"/>
			
			<label for="sexo">Sexo</label>
			<select name="sexo">
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
			</select>
			<input type="text" name="telefone"/>
			<input type="submit" name="submit"/>

		</form>