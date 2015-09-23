		<?php echo form_open('cadastro/index'); ?>
			<input type="text" name="nome"/>
			<input type="email" name="email"/>
			<input type="select" name="sexo"/>
				<option value="M">Masculino</option>
				<option value="F">Feminino</option>
			<input type="text" name="telefone"/>
			<input type="submit" name="submit"/>

		</form>