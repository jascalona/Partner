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
        $sqlC3 = " SELECT caracteristicas FROM vl_b405 WHERE id=3";
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

    public function SelectC6(){
        $sqlC6 = " SELECT caracteristicas FROM vl_b405 WHERE id=6 ";
        $conexion = $this->Connection();
        $res6 = mysqli_query($conexion,$sqlC6) or die ("Ha Ocurrido un Error");
        return $res6;
    }

    public function SelectC7(){
        $sqlC7 = " SELECT caracteristicas FROM vl_b405 WHERE id=7 ";
        $conexion = $this->Connection();
        $res7 = mysqli_query($conexion,$sqlC7) or die ("Ha Ocurrido un Error");
        return $res7;
    }

    public function SelectC8(){
        $sqlC8 = " SELECT caracteristicas FROM vl_b405 WHERE id=8 ";
        $conexion = $this->Connection();
        $res8 = mysqli_query($conexion,$sqlC8) or die ("Ha Ocurrido un Error");
        return $res8;
    }

    public function SelectC9(){
        $sqlC9 = " SELECT caracteristicas FROM vl_b405 WHERE id=9 ";
        $conexion = $this->Connection();
        $res9 = mysqli_query($conexion,$sqlC9) or die ("Ha Ocurrido un Error");
        return $res9;
    }

    public function SelectC10(){
        $sqlC10 = " SELECT caracteristicas FROM vl_b405 WHERE id=10 ";
        $conexion = $this->Connection();
        $res10 = mysqli_query($conexion,$sqlC10) or die ("Ha Ocurrido un Error");
        return $res10;
    }

    public function SelectC11(){
        $sqlC11 = " SELECT caracteristicas FROM vl_b405 WHERE id=11 ";
        $conexion = $this->Connection();
        $res11 = mysqli_query($conexion,$sqlC11) or die ("Ha Ocurrido un Error");
        return $res11;
    }

    public function SelectC12(){
        $sqlC12 = " SELECT caracteristicas FROM vl_b405 WHERE id=12 ";
        $conexion = $this->Connection();   
        $res12 = mysqli_query($conexion,$sqlC12) or die ("Ha Ocurrido un Error");
        return $res12;
    }

    public function SelectC13(){
        $sqlC13 = " SELECT caracteristicas FROM vl_b405 WHERE id=13 ";
        $conexion = $this->Connection();
        $res13 = mysqli_query($conexion,$sqlC13) or die ("Ha Ocurrido un Error");
        return $res13;
    }

    public function SelectC14(){
        $sqlC14 = " SELECT caracteristicas FROM vl_b405 WHERE id=14 ";
        $conexion = $this->Connection();
        $res14 = mysqli_query($conexion,$sqlC14) or die ("Ha Ocurrido un Error");
        return $res14;
    }

    public function SelectC15(){
        $sqlC15 = " SELECT caracteristicas FROM vl_b405 WHERE id=15 ";
        $conexion = $this->Connection();
        $res15 = mysqli_query($conexion,$sqlC15) or die ("Ha Ocurrido un Error");
        return $res15;
    }
}

//CREATION CLASS select_i

class select_i{

    private $server = 'localhost';

    private $user = 'root';

    private $password = '';

    private $db = 'gxdeve_apps';

    private $port = '3306';


    //Instancio for Connection

    public function Connection(){
        $conexion = mysqli_connect($this->server,$this->user,$this->password,$this->db,$this->port);
        return $conexion;
    }

    //Function for Vistas Modulo Instalation

    public function SelecI(){
        $sqlI1 = " SELECT instalacion FROM vl_b405 WHERE id=1 ";
        $conexion = $this->Connection();
        $resI1 = mysqli_query($conexion,$sqlI1) or die ("Ha Ocurrido un Error");
        return $resI1;
    }

    public function SelecI2(){
        $sqlI2 = " SELECT instalacion FROM vl_b405 WHERE id=2 ";
        $conexion = $this->Connection();
        $resI2 = mysqli_query($conexion,$sqlI2) or die ("hA Ocurrido un Error");
        return $resI2;
    }

    public function SelecI3(){
        $sqlI3 = " SELECT instalacion FROM vl_b405 WHERE id=3 ";
        $conexion = $this->Connection();
        $resI3 = mysqli_query($conexion,$sqlI3) or die ("Ha Ocurrido un Error");
        return $resI3;
    }

    public function SelecI4(){
        $sqlI4 = " SELECT instalacion FROM vl_b405 WHERE id=4 ";
        $conexion = $this->Connection();
        $resI4 = mysqli_query($conexion,$sqlI4) or die ("Ha Ocurrido un Error");
        return $resI4;
    }
    
    public function SelecI5(){
        $sqlI5 = " SELECT instalacion FROM vl_b405 WHERE id=5 ";
        $conexion = $this->Connection();
        $resI5 = mysqli_query($conexion,$sqlI5) or die ("Ha Ocurrido un Error");
        return $resI5;
    }

}