<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
	<style>
		* {
	        -webkit-box-sizing: border-box;
	        -moz-box-sizing: border-box;
	        box-sizing: border-box;
	        margin:0px;
	        padding:0px;
        }

        body {
            
            background:#abbbc3;
            width: 560px;
            padding: 8% 0 0;
            margin: auto;
	        font-family:Arial, helvetica, sans-serif;
        }
		.personas{
			background:#f2f2f2;
			text-align: center;
			white-space: nowrap;
		}
		h3{
			text-align:center;
		}
		.button{
			width: 70px;
			text-align:center;
		}
	</style>
</head>
<body>

    <div class="container">
        <br><br>
        <h3> <b> PERSONAS </b></h3>

        <br>
        <table class="personas" border="2">
            <thead class="text">
                <tr>
                    <th scope="col">CI</th>
                    <th scope="col">Nombre completo</th>
                    <th scope="col">Fecha de nacimiento</th>
                    <th scope="col">Departamento</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($personas as $persona) {
                    echo "<tr>";
                    echo "<td>" .$persona->ci. "</td>";
                    echo "<td>" .$persona->nombre. "</td>";
                    echo "<td>" .$persona->fec_nac. "</td>";
                    echo "<td>" .$persona->departamento. "</td>";
                ?>
                    <td> <a href="editar/<?= $persona->ci ?>" class="button" role="button">Editar</a></td>
                    <td> <a href="eliminar/<?= $persona->ci ?>" class="button" role="button">Eliminar</a></td>
                <?php
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <a href="crear" class="button" role="button" aria-pressed="true">Nueva Persona</a>

    </div>
    </form>
</body>

</html>
