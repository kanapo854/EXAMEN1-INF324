<?php
session_start();
	if(!isset($_SESSION["usuario"])){
		header("Location: index.php");
	}else{
		$con = mysqli_connect("localhost:3306","root","root","mibasekanapo");
		//include "conexion.php";
		$sql= "SELECT departamento, avg(inscripcion.notafinal) media
		from persona, inscripcion where persona.ci=inscripcion.ciestudiante Group by persona.departamento;";
		$dep=array('Chuquisaca','La Paz', 'Cochabamba','Oruro','Potosi','Tarija','Santa Cruz', 'Beni', 'Pando');
		$resultado=mysqli_query($con,$sql);
		
	}
    $nivel='estilos.css';
	$niv = 'header.php';
	//include('header.php');
	include($niv);
?>
<body text-align="center">
    <h1 class="t">MEDIA DE NOTAS</h1>
    <div style="text-align:center;">
<table class="notas" border="2" cellspacing="2" cellpadding="2">
        <tr>
			<td>Departamento</td>
			<td>Media</td>
		</tr>	
	<?php
		while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			echo "<tr>";
			echo "<td>".$dep[intval($fila['departamento'])-1]."</td>";
			echo "<td>".number_format($fila['media'], 2, ',',' ')."</td>";
			echo "</tr>";
		}
	?>
</table>
</div>
</body>
</html>