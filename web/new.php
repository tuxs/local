<!DOCTYPE html>

<html>
<head>
    <title>Bienvenidos a Meeting!!!</title>
    <link href="../css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
    <p class="texto">Crear Evento</p>

    <div id="register-form">
        Ingrese los datos requeridos
		<div id="date-requerid">
        <form action="index.php" method="post">	<br>			
				<table border="0" align="center">
					<tr>
						<td>Titulo del Evento:
						<td colspan="6"><input name="nombres" type="text" size="64">
					</tr>
					<tr>
						<td>Convocados:
						<td colspan="6"><input name="apellidos" type="text" size="64">
					</tr>
					<tr>
						<td>Acuerdos:
						<td colspan="6"><textarea cols="49" rows="8"></textarea>
					</tr>
				</table>
				<br>
        </form>
		</div>
		<a href="../web/menu.php">
			<input name="entrar" type="submit" value="Guardar Evento">
		</a>
		<br>
		<br>
		<a href="../web/menu.php">
			[Menú]
		</a>
		<a href="../index.php">
			[Salir]
		</a>
    </div>
</body>
</html>