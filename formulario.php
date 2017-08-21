<?php 
?>

<form method="post" action="cadastro.php">
	<label>Nome Completo:</label></br>
		<input type="text" required name="nome">  </input></br>
	<label>CPF:</label></br>
		<input type="text" required name="cpf" >  </input></br>
	<label>E-Mail:</label></br>
		<input type="email"  name="email">  </input></br>
	<label>Confirmar E-Mail:</label></br>
		<input type="email"  name="email2">  </input></br>
	<label>Senha:</label></br>
		<input type="password" required name="senha">  </input></br>
	<label>Confirmar Senha:</label></br>
		<input type="password" required name="senha2">  </input><br></br>
	<label for="sexo">Sexo:</label>
		<select  name="sexo"  id="sexo"></br>
			<option  value="masculino">Masculino</option>
			<option  value="feminino">Feminino</option>
			
		</select><br></br>
	<label for="estado" > Estado: </label>
				<select  name="estado"  id="estado" >
					<option value="Acre"> Acre </option>
					<option value="Bahia"> Bahia </option>
					<option value="SP"> São Paulo </option>
					<option value="RJ"> Rio de Janeiro </option>
					<option value="Ceara"> Ceará </option>
					

				</select><br></br>
	
				
				<label > Li e concordo com o regulamento </label> 
			<input  type="checkbox" name="regulamento" required value="regulamento"> 
			<input type="submit" value="Cadastrar"/>
	
		

</form>