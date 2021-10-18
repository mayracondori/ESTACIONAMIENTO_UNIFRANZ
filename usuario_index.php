<?php
include_once 'usuario.php';
include_once 'usuario_sesion.php';
$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
    echo "hay sesion";
    $user->setUser($userSession->getCurrentUser());
    include_once 'inicio.php';

}else if(isset($_POST['Correo_usu']) && isset($_POST['Pass_usu'])){
    
    $userForm = $_POST['Correo_usu'];
    $passForm = $_POST['Pass_usu'];
    //echo "validacion login";
    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "usuario validado";
        $userSession->setCurrentUser($userForm);
        $user->setUser($userForm);

        include_once 'inicio.php';
    }else{
        //echo "incorrecto";
        $errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login.php';
    }
}else{
    //echo "login";
    include_once 'login.php';
}
?>

