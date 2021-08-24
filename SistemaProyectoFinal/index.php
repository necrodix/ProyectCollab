<?php
 
 session_start(); 
 
 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>login</title>
    <link rel="stylesheet" href="./css/estilos.css" />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>



    <div  Onsubmit="event.preventDefault(); validateMyForm();">
        <h1 class="center"> INTRODUCE TUS DATOS </h1>

        <form id="forma" action="comprobar_login.php" method="POST">
            <table class="center">
                <tr>
                    <td>
                        Usuario:</td>
                    <td><input type="text" id="usuario" name="login"></td>
                </tr>
                <tr>
                    <td> Contraseña: </td>
                    <td><input type="password" id="password" name="password"></td>
                </tr>
                <tr>
                    <td> Captcha: </td>
                    <td>   <div class="g-recaptcha" data-sitekey="6Lcx5ngbAAAAAIMoXnxOaJA4sIYHVRtsI4HyJJPQ"></div></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                      <button type="submit"> Enviar</button>
                    </td>
                </tr>
                
            </table>
        </form>
    </div>

</script>

<script type="text/javascript">
  function validateMyForm(){

    if(grecaptcha.getResponse() != "") 
    {
        document.getElementById("forma").submit();
    } 
   }
  </script>




</body>

</html>