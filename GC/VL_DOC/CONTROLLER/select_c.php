<?php
//CREATION CLASS select_c

class select_c{
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $db = 'gxdeve_apps';
    private $port = '3306';

    //Instancia for Connection
    public function Connection(){

        //CREATE $conexion
        $conexion = mysqli_connect($this->server,$this->user,$this->password,$this->db,$this->port);
        return $conexion;
    }

    //Function for Vistas
    public function SelectC(){
        $sqlC = "SELECT caracteristicas FROM vl_b405";
        $conexion = $this->Connection();
        $res = mysqli_query($conexion,$sqlC) or die ("Ha Ocurrido un Error");
        return $res;
    }




}