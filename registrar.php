<?php

include("conexion.php");

if(isset($_POST['register'])){
    
    if(strlen($_POST['email'])>=1 &&
    strlen( $_POST['name'])>=1 &&
    strlen( $_POST['id_empresarial'])>=1 &&
    strlen( $_POST['password'])>=1){

        $email=trim($_POST['email']);
        $name=trim($_POST['name']);
        $id_empresarial=trim($_POST['id_empresarial']);
        $password=trim($_POST['password']);
        $fecha=date('d/m/y');
        
            $flag=false;
            $sql = "SELECT email FROM datos WHERE email = '$email'";
            $result = $conex->query($sql);

            
           

            if ($result->num_rows > 0) {
            $flag = true;
            }
            if(!$flag){

            list($nombreUsuario, $dominio) = explode("@", $email);

            $flag2=false;
            $sql = "SELECT id_empresarial FROM datos WHERE id_empresarial = '$id_empresarial'";
            $result = $conex->query($sql);
            if ($result->num_rows > 0) {
                $flag2 = true;
            }
            if(!$flag2){
            if($dominio=="uan.edu.co"){
            $consulta="INSERT INTO datos(email,usuario_web,nombre,id_empresarial,contraseña,fecha) VALUES('$email','$nombreUsuario','$name','$id_empresarial','$password','$fecha')";
            $resultado=mysqli_query($conex,$consulta);
            if($resultado){
                ?>
                echo '<script>alert("Se ha registrado satisfactoriamente y su nombre de usuario es: <?php echo $nombreUsuario; ?>");</script>';
                <?php
            }else{
            ?>
                <h3 class="error">Ocurrio un error</h3>
                <?php
            }
        }else{
            ?>
            echo '<script>alert("Usted no es parte de la Organizacion");</script>';
            <?php 
        }}else{
            ?>
            echo '<script>alert("Usted ya se encuentra registrado por favor pongase en contacto con soporte");</script>';
            <?php  
        }
        }else{
            ?>
            <h3 class="error">el email que intenta ingresar ya se encuentra registrado, pongase en contacto con soporte</h3>
            <?php
        }
    }else{?>
    <h3 class="error">llena todos los campos</h3>
    <?php
    }

}

?>