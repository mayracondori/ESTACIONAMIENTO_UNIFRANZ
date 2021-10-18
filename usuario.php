<?php
include 'conexion.php';

class User extends DB{
    private $Nombre_usu;
    private $Correo_usu;


    public function userExists($user, $pass){
        $pass = $pass;
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE Correo_usu = :user AND Pass_usu = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);

        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM usuario WHERE Correo_usu = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->Nombre_usu = $currentUser['Nombre_usu'];
            $this->Correo_usu = $currentUser['Correo_usu'];
        }
    }

        public function getNombre(){
        return $this->Nombre_usu;
    }
}

?>