<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/inicio.css">
    
    <title>Inicio Sesión</title>
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
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);

        }
        .form button:hover,.form button:active,.form button:focus {
        background: #225475;
        }
        .form .button {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background: #78a8e2;
        width: 100%;
        border: 0;
        padding: 15px;
        color: #FFFFFF;
        font-size: 14px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.3 ease;
        cursor: pointer;
        }
        .form input {
        font-family: "Roboto", sans-serif;
        outline: 0;
        background: #f2f2f2;
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;
        }
        h1{
            text-align:center;
            color:#rgb(53, 17, 170);
            white-space: nowrap;
        }
    </style>
</head>
<body background="img/fondo.jpg">
<div class="login-page">
  <div class="form">
    <form class="login-form" action="login.php" method="GET">
      <h1>Iniciar Sesión</h1>  
      <input type="text" placeholder="usuario" name="usuario"/>
      <input type="password" placeholder="password" name="passw"/>
      
      <input  class="button" type="submit" value="INICIAR SESIÓN">
        <a href="#">Create an account</a></p>
    </form>
  </div>
</div>
</body>
</html>