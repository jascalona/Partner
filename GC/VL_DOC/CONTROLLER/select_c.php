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

    //Function for Vistas Caracteristicas item 01
    public function SelectC(){
        $sqlC = "SELECT caracteristicas FROM vl_b405 WHERE id=1";
        $conexion = $this->Connection();
        $res = mysqli_query($conexion,$sqlC) or die ("Ha Ocurrido un Error");
        return $res;
    }

    //Function for Vistas Caracteristicas item 02
    public function SelectC2(){
        $sqlC2 = " SELECT caracteristicas FROM vl_b405 WHERE id=2 ";
        $conexion = $this->Connection();
        $res2 = mysqli_query($conexion,$sqlC2) or die ("Ha Ocurrido un Error");
        return $res2;
    }

    //Function for Vistas Caracteristicas item 03
    public function SelectC3(){
        $sqlC3 = " SELECT caracteristicas FROM vl_b405 WHERE id=4";
        $conexion = $this->Connection();
        $res3 = mysqli_query($conexion,$sqlC3) or die ("Ha Ocurrido un Error    ");
        return $res3;
    }

    //Function for Vistas Caracteristicas item 04
    public function SelectC4(){
        $sqlC4 = " SELECT caracteristicas FROM vl_b405 WHERE id=4";
        $conexion = $this->Connection();
        $res4 = mysqli_query($conexion,$sqlC4) or die ("Ha Ocurrido un Error");
        return $res4;
    }

    //Function for Vistas Caracteristicas iem 05
    public function SelectC5(){
        $sqlC5 = " SELECT caracteristicas FROM vl_b405 WHERE id=5 ";
        $conexion = $this->Connection();
        $res5 = mysqli_query($conexion,$sqlC5) or die ("Ha Ocurrido un Error");
        return $res5;
    }

}