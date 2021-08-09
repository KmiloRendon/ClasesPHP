<?php
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

if ($email === 'a@a.co' && $password === '1234'){
    //Creamos Sesion
    $_SESSION['email'] = $email;
    $_SESSION['id']= random_int(1,1000);
    header("Location: http://localhost/clases_php_adsi_2104630/ejercicios/inicio.php");
}

} else{
    $msg = "Las credenciales ingresadas no coinciden";
    $aPathOrigin = explode('?', $_SERVER['HTTP_REFERER']);
    $pathOrigin = $aPathOrigin[0];

    header("Location: $pathOrigin?msg=$msg");

}
?>
