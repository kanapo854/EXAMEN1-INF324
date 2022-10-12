<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		* {
	        -webkit-box-sizing: border-box;
	        -moz-box-sizing: border-box;
	        box-sizing: border-box;
	        margin:0px;
	        padding:0px;
        }
        body {
            background-repeat:no-repeat;
            background-size:100% 150%;
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
	        font-family:Arial, helvetica, sans-serif;
        }
		.form{
            float:left;
            background: #abbbc3;
            opacity: 0.9;
            border-radius:3px;
            position: relative;
            z-index: 1;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: left;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
			

        }
		h3{
			text-align:center;
			color:#fff;
			font-size:50px;
		}
		.button{
			width: 70px;
			text-align:center;
		}
		.form-control{
			width: 260px;;
		}
	</style>
</head>
<body background="https://lapatria.bo/wp-content/uploads/2021/10/676.jpg">
    <div>
        <br><br>
        <h3 class="text"> <b>Formulario</b></h3>
        <br>
        <form  class="form" action=<?= $link ?> method="POST">
            <div class="">
                <label>Cedula de identidad</label>
                <input type="text" class="form-control" value="<?php echo (isset($persona)) ? $persona['0']->ci : ""; ?>" name="ci" placeholder="CI">
            </div>
            <div class="">
                <label>Nombre completo</label>
                <input type="text" class="form-control" value="<?php echo (isset($persona)) ? $persona['0']->nombre : ""; ?>" name="nombre" placeholder="Nombre">
            </div>
            <div class="">
                <label>Fecha de Nacimiento</label>
                <input type="text" class="form-control" value="<?php echo (isset($persona)) ? $persona['0']->fec_nac : ""; ?>" name="fec_nac" placeholder="yyyy/mm/dd">
            </div>
            <div class="">
                <label>Departamento</label>
                <input type="text" class="form-control" value="<?php echo (isset($persona)) ? $persona['0']->departamento : ""; ?>" name="departamento" placeholder="">
            </div><br>
            <button type="submit" class="button"><?php echo $action; ?></button>

    </div>
    </form>
</body>

</html>
