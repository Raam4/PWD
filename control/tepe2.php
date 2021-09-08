<?php
class controltp2{
    public function ej3($data){
        $credenciales = [
            ['user' => 'fulano', 'pass' => 'contrasenia'],
            ['user' => 'mengano', 'pass' => 'contrasenia1'],
            ['user' => 'pepito', 'pass' => 'contrasenia2'],
            ['user' => 'pepon', 'pass' => 'contrasenia3'],
        ];
        $username = $data['user'];
        $password = $data['pass'];
        $ok = false;
        foreach($credenciales as $it){
            if($username == $it['user']){
                $ok = $password == $it['pass'];
                break;
            }
        }
        if($ok){
            $rpta = "Welcome!";
        }else{
            $rpta = "Wrong Credentials!";
        }
        return $rpta;
    }
}
?>