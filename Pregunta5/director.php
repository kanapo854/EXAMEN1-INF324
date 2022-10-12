<?php
session_start();
	if(!isset($_SESSION["usuario"])){
		header("Location: index.php");
	}else{
		$con = mysqli_connect("localhost:3306","root","root","mibasekanapo");
		//include "conexion.php";
		$sql= "SELECT avg(case when persona.departamento='01' then inscripcion.notafinal end) CH, avg(case when persona.departamento='02' then inscripcion.notafinal end) LP, avg(case when persona.departamento='03' then inscripcion.notafinal end) CB, avg(case when persona.departamento='04' then inscripcion.notafinal end) RU, avg(case when persona.departamento='05' then inscripcion.notafinal end) PT, avg(case when persona.departamento='06' then inscripcion.notafinal end) TA, avg(case when persona.departamento='07' then inscripcion.notafinal end) SC, avg(case when persona.departamento='08' then inscripcion.notafinal end) BE, avg(case when persona.departamento='09' then inscripcion.notafinal end ) PD from persona, inscripcion where persona.ci=inscripcion.ciestudiante";
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
	<thead class="tabla">
        <tr>
			<td>Departamento</td>
			<td>Media</td>
		</tr>
	</thead>
	<tbody>
	<?php
		while($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
			echo "<tr>";
			echo "<td>CHUQUISACA</td>";
			echo "<td>".number_format($fila['CH'],2,',',' ')."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>LA PAZ</td>";
			echo "<td>".number_format($fila['LP'],2,',',' ')."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>COCHABAMBA</td>";
			echo "<td>".number_format($fila['CB'], 2,',',' ')."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>ORURO</td>";
			echo "<td>".number_format($fila['RU'], 2,',',' ')."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>POTOSI</td>";
			echo "<td>".number_format($fila['PT'], 2,',',' ')."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>TARIJA</td>";
			echo "<td>".number_format($fila['TA'], 2,',',' ')."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>SANTA CRUZ</td>";
			echo "<td>".number_format($fila['SC'], 2,',',' ')."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>BENI</td>";
			echo "<td>".number_format($fila['BE'], 2,',',' ')."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>PANDO</td>";
			echo "<td>".number_format($fila['PD'], 2,',',' ')."</td>";
			echo "</tr>";
			/*echo "<td>".$fila['LP']."</td>";
			echo "<td>".$fila['CB']."</td>";
			echo "<td>".$fila['RU']."</td>";
			echo "<td>".$fila['PT']."</td>";
			echo "<td>".$fila['TA']."</td>";
			echo "<td>".$fila['SC']."</td>";
			echo "<td>".$fila['BE']."</td>";
			echo "<td>".$fila['PD']."</td>";
			echo "</tr>"*/
		}
	?>
	</tbody>
	</table>
</div>
</body>
</html>