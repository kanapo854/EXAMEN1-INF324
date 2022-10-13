<?php
session_start();
	if(!isset($_SESSION["usuario"])){
		header("Location: index.php");
	}else{
		/*$con = mysqli_connect("localhost:3306","root","root","mibasekanapo");
		//include "conexion.php";
		$sql= "SELECT departamento, avg(inscripcion.notafinal) media
		from persona, inscripcion where persona.ci=inscripcion.ciestudiante Group by persona.departamento;";
		$dep=array('Chuquisaca','La Paz', 'Cochabamba','Oruro','Potosi','Tarija','Santa Cruz', 'Beni', 'Pando');
		$resultado=mysqli_query($con,$sql);*/
		
	}
    $nivel='estilos.css';
	$niv = 'header.php';
	//include('header.php');
	include($niv);
?>
<body text-align="center">
    <h1 class="t">MEDIA DE NOTAS</h1>
    <div style="text-align:center;">
	<table class="notas">
		<thead class="thead-dark">
            <tr>
            	<td><h3 style="color:white;">COD DEPARTAMENTO</h3></td>
				<td><h3 style="color:white;">PROMEDIO DE NOTAS</h3></td>
            </tr>
        </thead>
        <tbody>
			<?php
				$con = mysqli_connect("localhost:3306","root","root","mibasekanapo");
				$sql="SELECT xp.departamento,AVG(xi.nota1+xi.nota2+xi.nota3)promedio
					FROM inscripcion xi,persona xp
					where xi.ciestudiante =xp.ci
					GROUP by xp.departamento";
				$resultado=mysqli_query($con,$sql);
			?>
									
			<?php while($filas = mysqli_fetch_array($resultado,MYSQLI_ASSOC)):?>
				<tr>
			<?php if($filas['departamento']=='01'):?>
				<td> <?='CHUQUISACA ('.$filas['departamento'].')'?></td>
			<?php endif;?>

			<?php if($filas['departamento']=='02'):?>
				<td> <?='LA PAZ ('.$filas['departamento'].')'?></td>
			<?php endif;?>
													
			<?php if($filas['departamento']=='03'):?>
				<td> <?='COCHABAMBA ('.$filas['departamento'].')'?></td>
			<?php endif;?>
														
			<?php if($filas['departamento']=='04'):?>
				<td> <?='ORURO ('.$filas['departamento'].')'?></td>
			<?php endif;?>
															
			<?php if($filas['departamento']=='05'):?>
				<td> <?='POTOSI ('.$filas['departamento'].')'?></td>
			<?php endif;?>
																
			<?php if($filas['departamento']=='06'):?>
				<td> <?='TARIJA ('.$filas['departamento'].')'?></td>
			<?php endif;?>
																	
			<?php if($filas['departamento']=='07'):?>
				<td> <?='SANTA CRUZ ('.$filas['departamento'].')'?></td>
			<?php endif;?>

			<?php if($filas['departamento']=='08'):?>
				<td> <?='BENI ('.$filas['departamento'].')'?></td>
			<?php endif;?>
												
			<?php if($filas['departamento']=='09'):?>
				<td> <?='PANDO ('.$filas['departamento'].')'?></td>
			<?php endif;?>
				<td> <?=number_format($filas['promedio'],2,',',' ')?></td>
			</tr>
			<?php endwhile;?>
																				
		</tbody>
	</table>
</div>
</body>
</html>