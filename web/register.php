<!DOCTYPE html>

<html>
<head>
    <title>Bienvenidos a Meeting!!!</title>
    <link href="../css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
    <p class="texto">Formulario de Registro</p>

    <div id="register-form">
        Ingresa los datos requeridos
		<div id="date-requerid">
        <form action="index.php" method="post">	<br>			
				<table border="0" align="center">
					<tr>
						<td>Nombres:
						<td colspan="6"><input name="nombres" type="text" size="64">
					</tr>
					<tr>
						<td>Apellidos:
						<td colspan="6"><input name="apellidos" type="text" size="64">
					</tr>
					<tr>
						<td>Sexo:
						<td>M<input name="masculino" type="radio">
						<td>F<input name="femenino" type="radio">
						<td>Fecha de Nacimiento:
						<td>
							<select>
								<option value="uno">1</option>
								<option value="dos">2</option>
								<option value="tres">3</option>
								<option value="cuatro">4</option>
							</select>
						<td>
							<select>
								<option value="enero">Ene</option>
								<option value="febrero">Feb</option>
								<option value="marzo">Mar</option>
								<option value="abril">Abr</option>
							</select>
						<td>
							<select>
								<option value="2013">2013</option>
								<option value="2012">2012</option>
								<option value="2011">2011</option>
								<option value="2010">2010</option>
							</select>
					</tr>
					<tr>
						<td>E-mail:
						<td colspan="6"><input name="e-mail" type="text" size="64">
					</tr>
					<tr>
						<td>Contraseña:
						<td colspan="6"><input name="contraseña" type="text" size="64">
					</tr>
				</table>
				<br>
        </form>
		</div>
		<a href="../index.php">
			<input name="entrar" type="submit" value="Crear Cuenta">
		</a>
    </div>
</body>
</html>