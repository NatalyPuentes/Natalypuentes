
<!DOCTYPE >
<html>
<head>
        <meta charset="UTF-8">
        <title>Nataly puentes</title>
        <link rel="stylesheet" href="resources/styles.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
     <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .title {
                font-size: 74px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>

    </head>
<body>
<center>
<a href="index.php">Atras</a>
<?php

include("Resources/conexion.php");
    $target_path = "archivos/"; 
    $target_path = $target_path . basename( $_FILES['file']['name']); 

$names=file($target_path);

foreach($names as  $linea_num => $linea)
{
	$Datos = explode(",",$linea);
	$email = $Datos[0];
  	$nombre = $Datos[1];
 	$apellido =$Datos[2];
 	$codigo = $Datos[3];

	$consulta = mysql_query("INSERT INTO usuariosc(email,nombre,apellido,codigo) VALUES('$email','$nombre','$apellido','$codigo')", $link); 

}
	

	$activos = mysql_query("SELECT email,nombre,apellido FROM usuariosc where codigo = '1'", $link);  

	echo "<h2> Usuarios activos <h2>"; 
	echo "<table>";  
		echo "<tr>";  
		echo "<th>Email</th>";  
		echo "<th>Nombre</th>";  
		echo "<th>Apellido</th>";  
		echo "</tr>";  
		while ($row = mysql_fetch_row($activos)){   
		    echo "<tr>";  
		    echo "<td>".$row[0]."</td>";  
		    echo "<td>".$row[1]."</td>";  
		    echo "<td>".$row[2]."</td>";  
		    echo "</tr>";  
		}  
	echo "</table>";  

	$No_activos = mysql_query("SELECT email,nombre,apellido FROM usuariosc where codigo = '2'", $link);  

	echo "<h2> Usuarios inactivos <h2>"; 
	echo "<table>";  
		echo "<tr>";  
		echo "<th>Email</th>";  
		echo "<th>Nombre</th>";  
		echo "<th>Apellido</th>";  
		echo "</tr>";  
		while ($row = mysql_fetch_row($No_activos)){   
		    echo "<tr>";  
		    echo "<td>".$row[0]."</td>";  
		    echo "<td>".$row[1]."</td>";  
		    echo "<td>".$row[2]."</td>";  
		    echo "</tr>";  
		}  
	echo "</table>"; 

	$No_activos = mysql_query("SELECT email,nombre,apellido FROM usuariosc where codigo = '3'", $link);  

	echo "<h2> Usuarios en espera <h2>"; 
	echo "<table>";  
		echo "<tr>";  
		echo "<th>Email</th>";  
		echo "<th>Nombre</th>";  
		echo "<th>Apellido</th>";  
		echo "</tr>";  
		while ($row = mysql_fetch_row($No_activos)){   
		    echo "<tr>";  
		    echo "<td>".$row[0]."</td>";  
		    echo "<td>".$row[1]."</td>";  
		    echo "<td>".$row[2]."</td>";  
		    echo "</tr>";  
		}  
	echo "</table>"; 
?>

 


<footer class="footer">
                    Gracias por la oferta<br>
                    telefono: Tel-3133445412<br>
                    Bogotá-Colombia<br>

</footer>

</center>

</body>
</html>