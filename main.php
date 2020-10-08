<?php
$conn=mysqli_connect($servername, "root", "", "BBVA");
if(!isset($_SESSION['user']))
{
	header("location:index.php");
}
else
{
	$NombreUsuario=$_SESSION['nombreC'];
	$T_Usuario=$_SESSION['perfil'];
}

function consultaCliente($idC)
{
	if($conn->connect_errno)
	{
		echo '<scrip>alert("Fallo la conexión: '.$conn->connect_errno.'");';
	}

	else
	{
		switch($T_Usuario)
		{
			"Manager":
			"Validador":
				$sql='select * from Clientes where idCliente="'.$idC.'"'
			break;
			"Restringido":
				$sql='select idCliente,nombre,sexo,segmento,cuenta from Clientes where idCliente="'.$idC.'"'
			break;
		}

		if($resultado=mysqli_query($conn,$sql))
		{
			if(mysqil_num_rows($resultado)==0)
			{
				echo '<scrip>alert("El Cliente no se encuentra registrado");';
			}
			else
			{
				while($row = mysqli_fetch_array($resultadoSQL, MYSQLI_ASSOC))
				{
					switch($T_Usuario)
					{
						"Manager":
							return $row;
						"Validador":
							$resultadoF=$row;
							$resultadoF[2]=substr($row['apellidoPaterno'], 0, 3)."*****";
							$resultadoF[3]=substr($row['apellidoMaterno'], 0, 3)."*****";
							$resultadoF[4]=substr($row['fechaNacimiento'], 0, 3)."*****";
							$resultadoF[7]=substr($row['nacionalidad'], 0, 3)."*****";
							$resultadoF[8]=substr($row['rfc'], 0, 3)."*****";
							$resultadoF[9]=substr($row['tipoID'], 0, 3)."*****";
							$resultadoF[10]=substr($row['numeroID'], 0, 3)."*****";
							$resultadoF[12]=substr($row['email'], 0, 3)."*****";
							return $resultadoF;
						break;
						"Restringido":
							$resultadoF=array();
							for($i=0;$i<13;$i++)
							{
								switch ($i) {
									case 0:
										array_push($resultadoF, $row['idCliente']);
										break;
									case 1:
										array_push($resultadoF, $row['nombre']);
										break;
									case 5:
										array_push($resultadoF, $row['sexo']);
										break;
									case 6:
										array_push($resultadoF, $row['segmento']);
										break;
									case 11:
										array_push($resultadoF, $row['cuenta']);
										break;
									default:
										array_push($resultadoF,"");
										break;
								}
							}
							return $resultadoF;
						break;
					}
				}
			}
		}

	}
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h2>Usuario</h2>
	<input type="text" id="usuario">
	<h3>contraseña</h3>
	<input type="text" id="contraseña">
	<input type="submit" id="usub">
</body>
</html>