<?php
session_start();
$valido=true;
      if(isset($_POST['entrar'])){
        
         //datos de acceso
         $host="localhost";
         $usuario="root";
         $contra="";
         $db="usuario";
         
         //establecer la conexion
        $testconec= mysql_pconnect($host,$usuario,$contra) or die ("No se puede conectar");
        mysql_select_db($db) or die ("No se encuentra la base de datos especificada");
        
        
         $nombre=$_POST['usuario'];
         $contrasena=$_POST['contra'];
         $consulta="SELECT id, nombre,contrasena FROM user where nombre='$nombre' AND contrasena='$contrasena'";
         $result=mysql_query($consulta) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        $rowsresult=mysql_fetch_array($result);          
        $_SESSION['idusuario']= $rowsresult['id'];
             $valido=true;
             //Se guarda la sesion con el nombre del usuario 
             $_SESSION["usuario"]=$nombre;
             header("location:web/menu.php?login=true");
         }               
      }
?>



<!DOCTYPE html>

<html>
<head>
    <title>Bienvenidos a Meeting!!!</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
</head>

<body>
    <p class="texto">Metting!!!</p>

    <div id="form">
        <p>Bienvenido a tu Sala de Reunión Online!!!</p>

        <form action="index.php" method="post">
            <p>Usuario:</p>
				<input name="usuario" type="text"><br>
            <p>Contraseña:</p>
				<input name="contra" type="password"><br><br>
				<input name="entrar" type="submit" value="ENTRAR">
            <?php if ($valido==false) 
				{
                echo '<p>Usuario o Contraseña Incorrecta!!!';
				}
			?>
			<br>
			<a href="web/register.php">Crear una cuenta.</a>
        </form>
    </div>
</body>
</html>