<?php
try{


	//$base=new PDO ('mysql:db_host=localhost;dbname=sistemco_controlcorreduria', 'sistemco_controlcorreduria', 'dei1234QA678');
    $base=new PDO ('mysql:db_host=localhost;dbname=sistemco_controlcorreduria', 'root', '');
   
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "select * from `usuario` where `NOMBRE`= :login and `CONTRASEÑA`= :password";

    
    $resultado=$base->prepare ($sql);
    $login=htmlentities (addslashes ($_POST ["login"]));
    $password=htmlentities (addslashes ($_POST ["password"]));

    $resultado->bindValue(':login', $login,PDO::PARAM_STR);
    $resultado->bindValue(':password', $password,PDO::PARAM_STR);

   
    $resultado->execute();
    
     $id=$resultado->rowCount(); 
   
    
        if($id!=0){
            
			/*con session_start me iniciara una sola sesion o reanudara una sesion
			existente*/
          
		   /*en la variable super global $_session el login del usuario que
		    hemos recuperado del login OJO al guardar información en una variable
			super global esto significa que la información o dicha variable
			la vamos a poder utilizar en cualquier otro modulo, o pagina, o código
			a continuacion tenemos "usuario" que es la tabla de usuario, y tenemos
			"login" el cual es el nombre de usuario que utiliza el usuario para
			acceder*/
			setcookie("usuario", $login);
		   //$_SESSION["usuario_nombre"]=  $login;
			header("location:pagina_principal.php");
			exit();

			}else {
		
			header("location:index.php");
			exit();
				/*header ("location:/index.php");*/
				}
   
        }catch(Exception $ex){  
            echo('Excepci&oacute;n capturada:'  . $ex->getMessage());
    
        }
?>
