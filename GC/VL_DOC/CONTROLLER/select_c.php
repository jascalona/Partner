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


    //Instancia for Connection

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

//CREATION CLASS select_tf
class select_tf{
    private $server = 'localhost';

    private $user = 'root';

    private $password = '';

    private $db = 'gxdeve_apps';

    private $port = '3306';
    
    //Instancia for Connection
    public function Connection(){
        $conexion = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        return $conexion;
    }

    //Function for Vistas Modulo Teoria del Funcionamiento
    public function select_tf(){
        $sqlTF = " SELECT teoria_funtion FROM vl_b405 WHERE id=1 ";
        $conexion = $this->Connection();
        $resTF = mysqli_query($conexion,$sqlTF) or die ("Ha Ocurrido un Error");
        return $resTF;
    }

    public function select_tf2(){
        $sqlTF2 = " SELECT teoria_funtion FROM vl_b405 WHERE id=2 ";
        $conexion = $this->Connection();
        $resTF2 = mysqli_query($conexion,$sqlTF2) or die ("Ha Ocurrido un Error");
        return $resTF2;
    }

    public function select_tf3(){
        $sqlTF3 = " SELECT teoria_funtion FROM vl_b405 WHERE id=3 ";
        $conexion = $this->Connection();
        $resTF3 = mysqli_query($conexion,$sqlTF3) or die ("Ha Ocurrido un Error");
        return $resTF3;
    }

    public function select_tf4(){
        $sqlTF4 = " SELECT teoria_funtion FROM vl_b405 WHERE id=4 ";
        $conexion = $this->Connection();
        $resTF4 = mysqli_query($conexion,$sqlTF4) or die ("Ha Ocurrio un Error");
        return $resTF4;
    }

    function select_tf5(){
        $sqlTF5 = " SELECT teoria_funtion FROM vl_b405 WHERE id=5 ";
        $conexion = $this->Connection();
        $resTF5 = mysqli_query($conexion,$sqlTF5) or die ("Ha Ocurrido un Error");
        return $resTF5;
    }

    public function select_tf6(){
        $sqlTF6 = " SELECT teoria_funtion FROM vl_b405 WHERE id=6 ";
        $conexion = $this->Connection();
        $resTF6 = mysqli_query($conexion,$sqlTF6) or die ("Ha Ocurrido un Error");
        return $resTF6;
    }

    public function select_tf7(){
        $sqlTF7 = " SELECT teoria_funtion FROM vl_b405 WHERE id=7 ";
        $conexion = $this->Connection();
        $resTF7 = mysqli_query($conexion,$sqlTF7) or die ("Ha Ocurrido un Error");
        return $resTF7;
    }

    public function select_tf8(){
        $sqlTF8 = " SELECT teoria_funtion FROM vl_b405 WHERE id=8 ";
        $conexion = $this->Connection();
        $resTF8 = mysqli_query($conexion,$sqlTF8) or die ("Ha Ocurrido un Error");
        return $resTF8;
    }

    public function select_tf9(){
        $sqlTF9 = " SELECT teoria_funtion FROM vl_b405 WHERE id=9 ";
        $conexion = $this->Connection();
        $resTF9 = mysqli_query($conexion,$sqlTF9) or die ("Ha Ocurrido un Error");
        return $resTF9;
    }

    public function select_tf10(){
        $sqlTF10 = " SELECT teoria_funtion FROM vl_b405 WHERE id=10 ";
        $conexion = $this->Connection();
        $resTF10 = mysqli_query($conexion,$sqlTF10) or die ("Ha Ocurrido un Error");
        return $resTF10;
    }

    public function select_tf11(){
        $slqTF11 = " SELECT teoria_funtion FROM vl_b405 WHERE id=11 ";
        $conexion = $this->Connection();
        $resTF11 = mysqli_query($conexion,$slqTF11) or die ("Ha Ocurrido un Error");
        return $resTF11;
    }

    public function select_tf12(){
        $sqlTF12 = " SELECT teoria_funtion FROM vl_b405 WHERE id=12 ";
        $conexion = $this->Connection();
        $resTF12 = mysqli_query($conexion,$sqlTF12) or die ("Ha Ocurrido un Error");
        return $resTF12;
    }

    public function select_tf13(){
        $sqlTF13 = " SELECT teoria_funtion FROM vl_b405 WHERE id=13 ";
        $conexion = $this->Connection();
        $resTF13 = mysqli_query($conexion,$sqlTF13) or die ("Ha Ocurrido un Error");
        return $resTF13;
    }

    public function select_tf14(){
        $sqlTF14 = " SELECT teoria_funtion FROM vl_b405 WHERE id=14 ";
        $conexion = $this->Connection();
        $resTF14 = mysqli_query($conexion,$sqlTF14) or die ("Ha Ocurrido un Error");
        return $resTF14;
    }

    public function select_tf15(){
        $sqlTF15 = " SELECT teoria_funtion FROM vl_b405 WHERE id=15 ";
        $conexion = $this->Connection();
        $resTF15 = mysqli_query($conexion,$sqlTF15) or die ("Ha Ocurrido un Error");
        return $resTF15;
    }

    public function select_tf16(){
        $sqlTF16 = " SELECT teoria_funtion FROM vl_b405 WHEE WHERE id=16 ";
        $conexion = $this->Connection();
        $resTF16 = mysqli_query($conexion,$sqlTF16) or die ("Ha Ocurrido un Error");
        return $resTF16;
    }

}

//CREATION CLASS select_mt
class select_mt{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection(){
        $conexion = mysqli_connect($this->server, $this->user,$this->password,$this->db, $this->port);
        return $conexion;    
    }

    //Function for Vistas Modulo Mantenimiento
    
    public function select_mt(){
        $sqlMT = " SELECT mantenimiento FROM vl_b405 WHERE id=1 ";
        $conexion = $this->Connection();
        $resMT = mysqli_query($conexion,$sqlMT) or die ("Ha Ocurrido un Error");
        return $resMT;
    }

    public function select_mt2(){
        $sqlMT2 = " SELECT mantenimiento FROM vl_b405 WHERE id=2 ";
        $conexion = $this->Connection();
        $resMT2 = mysqli_query($conexion,$sqlMT2) or die ("Ha Ocurrido un Error");
        return $resMT2;
    }

    public function select_mt3(){
        $sqlMT3 = " SELECT mantenimiento FROM vl_b405 WHERE id=3 ";
        $conexion = $this->Connection();
        $resMT3 = mysqli_query($conexion,$sqlMT3) or die ("Ha Ocurrido un Error");
        return $resMT3;
    }

    public function select_mt4(){
        $sqlMT4 = " SELECT mantenimiento FROM vl_b405 WHERE id=4 ";
        $conexion = $this->Connection();
        $resMT4 = mysqli_query($conexion,$sqlMT4) or die ("Ha Ocurrido un Error");
        return $resMT4;
    }

    public function select_mt5(){
        $sqlMT5 = " SELECT mantenimiento FROM vl_b405 WHERE id=5 ";
        $conexion = $this->Connection();
        $resMT5 = mysqli_query($conexion,$sqlMT5) or die ("Ha Ocurrido un Error");
        return $resMT5;
    }

    public function select_mt6(){
        $sqlMT6 = " SELECT mantenimiento FROM vl_b405 WHERE id=6 ";
        $conexion = $this->Connection();
        $resMT6 = mysqli_query($conexion,$sqlMT6) or die ("Ha Ocurrido un Error");
        return $resMT6;
    }

    public function select_mt7(){
        $sqlMT7 = " SELECT mantenimiento FROM vl_b405 WHERE id=7 ";
        $conexion = $this->Connection();
        $resMT7 = mysqli_query($conexion,$sqlMT7) or die ("Ha Ocurrido un Error");
        return $resMT7;
    }

    public function select_mt8(){
        $sqlMT8 = " SELECT mantenimiento FROM vl_b405 WHERE id=8 ";
        $conexion = $this->Connection();
        $resMT8 = mysqli_query($conexion,$sqlMT8) or die ("Ha Ocurrido un Error");
        return $resMT8;
    }

    public function select_mt9(){
        $sqlMT9 = " SELECT mantenimiento FROM vl_b405 WHERE id=9 ";
        $conexion = $this->Connection();
        $resMT9 = mysqli_query($conexion,$sqlMT9) or die ("Ha Ocurrido un Error");
        return $resMT9;
    }

    public function select_mt10(){
        $sqlMT10 = " SELECT mantenimiento FROM vl_b405 WHERE id=10 ";
        $conexion = $this->Connection();
        $resMT10 = mysqli_query($conexion,$sqlMT10) or die ("Ha Ocurrido un Error");
        return $resMT10;
    }

    public function select_mt11(){
        $sqlMT11 = " SELECT mantenimiento FROM vl_b405 WHERE id=11 ";
        $conexion = $this->Connection();
        $resMT11 = mysqli_query($conexion,$sqlMT11) or die ("Ha Ocurrido un Error");
        return $resMT11;
    }

    public function select_mt12(){
        $sqlMT12 = " SELECT mantenimiento FROM vl_b405 WHERE id=12 ";
        $conexion = $this->Connection();
        $resMT12 = mysqli_query($conexion,$sqlMT12) or die ("Ha Ocurrido un Error");
        return $resMT12;
    }
    
    public function select_mt13(){
        $sqlMT13 = " SELECT mantenimiento FROM vl_b405 WHERE id=13 ";
        $conexion = $this->Connection();
        $resMT13 = mysqli_query($conexion,$sqlMT13) or die ("Ha Ocurrido un Error");
        return $resMT13;
    }

    public function select_mt14(){
        $sqlMT14 = " SELECT mantenimiento FROM vl_b405 WHERE id=14 ";
        $conexion = $this->Connection();
        $resMT14 = mysqli_query($conexion,$sqlMT14) or die ("Ha Ocurrido un Error");
        return $resMT14;
    }

    public function select_mt15(){
        $sqlMT15 = " SELECT mantenimiento FROM vl_b405 WHERE id=15 ";
        $conexion = $this->Connection();
        $resMT15 = mysqli_query($conexion,$sqlMT15) or die ("Ha Ocurrido un Error");
        return $resMT15;
    }

}

class select_ha{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection(){
        $conexion = mysqli_connect($this->server, $this->user, $this->password, $this->db);
        return $conexion;
    }

    //Function for Vistas Modulo Herramientas & Ajustes
    public function select_ha(){
        $sqlHA = " SELECT herra_ajustes FROM vl_b405 WHERE id=1 ";
        $conexion = $this->Connection();
        $resHA = mysqli_query($conexion,$sqlHA) or die ("Ha Ocurrio un Error");
        return $resHA;
    }

    public function select_ha2(){
        $sqlHA2 = " SELECT herra_ajustes FROM vl_b405 WHERE id=2 ";
        $conexion = $this->Connection();
        $resHA2 = mysqli_query($conexion,$sqlHA2) or die ("Ha Ocurrio un Error");
        return $resHA2;
    }

    public function select_ha3(){
        $sqlHA3 = " SELECT herra_ajustes FROM vl_b405 WHERE id=3 ";
        $conexion = $this->Connection();
        $resHA3 = mysqli_query($conexion,$sqlHA3) or die ("Ha Ocurrio un Error");
        return $resHA3;
    }

    public function select_ha4(){
        $sqlHA4 = " SELECT herra_ajustes FROM vl_b405 WHERE id=4 ";
        $conexion = $this->Connection();
        $resHA4 = mysqli_query($conexion,$sqlHA4) or die ("Ha Ocurrio un Error");
        return $resHA4;
    }

    public function select_ha5(){
        $sqlHA5 = " SELECT herra_ajustes FROM vl_b405 WHERE id=5 ";
        $conexion = $this->Connection();
        $resHA5 = mysqli_query($conexion,$sqlHA5) or die ("Ha Ocurrido un Error");
        return $resHA5;
    }


}

class select_pp{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection(){
        $conexion =  mysqli_connect($this->server, $this->user, $this->password, $this->db);
        return $conexion;
    }

    //Function for Vistas Modulo Problemas Principales
    public function select_pp(){
        $sqlPP = " SELECT pp FROM vl_b405 WHERE id=1 ";
        $conexion = $this->Connection();
        $resPP = mysqli_query(mysql: $conexion,query: $sqlPP) or die ("Ha Ocurrido un Error");
        return $resPP;
    }

    public function select_pp2(){
        $sqlPP2 = " SELECT pp FROM vl_b405 WHERE id=2 ";
        $conexion = $this->Connection();
        $resPP2 = mysqli_query($conexion,$sqlPP2) or die ("Ha Ocurrido un Error");
        return $resPP2;
    }

    public function select_pp3(){
        $sqlPP3 = " SELECT pp FROM vl_b405 WHERE id=3 ";
        $conexion = $this->Connection();
        $resPP3 = mysqli_query($conexion,$sqlPP3) or die ("Ha Ocurrido un Error");
        return $resPP3;
    }

    public function select_pp4(){
        $sqlPP4 = " SELECT pp FROM vl_b405 WHERE id=4 ";
        $conexion = $this->Connection();
        $resPP4 = mysqli_query($conexion,$sqlPP4) or die ("Ha Ocurrido un Error");
        return $resPP4;
    }

    public function select_pp5(){
        $sqlPP5 = " SELECT pp FROM vl_b405 WHERE id=5 ";
        $conexion = $this->Connection();
        $resPP5 = mysqli_query($conexion,$sqlPP5) or die ("Ha Ocurrido un Error");
        return $resPP5;
    }

    public function select_pp6(){
        $sqlPP6 = " SELECT pp FROM vl_b405 WHERE id=6 ";
        $conexion = $this->Connection();
        $resPP6 = mysqli_query($conexion,$sqlPP6) or die ("Ha Ocurrido un Error");
        return $resPP6;
    }

    public function select_pp7(){
        $sqlPP7 = " SELECT pp FROM vl_b405 WHERE id=7 ";
        $conexion = $this->Connection();
        $resPP7 = mysqli_query($conexion,$sqlPP7) or die ("Ha Ocurrido un Error");
        return $resPP7;
    }

    public function select_pp8(){
        $sqlPP8 = " SELECT pp FROM vl_b405 WHERE id=8 ";
        $conexion = $this->Connection();
        $resPP8 = mysqli_query($conexion,$sqlPP8) or die ("Ha Ocurrido un Error");
        return $resPP8;
    }

    public function select_pp9(){
        $sqlPP9 = " SELECT pp FROM vl_b405 WHERE id=9 ";
        $conexion = $this->Connection();
        $resPP9 = mysqli_query($conexion,$sqlPP9) or die ("Ha Ocurrido un Error");
        return $resPP9;
    }
    
    public function select_pp10(){
        $sqlPP10 = " SELECT pp FROM vl_b405 WHERE id=10 ";
        $conexion = $this->Connection();
        $resPP10 = mysqli_query($conexion,$sqlPP10) or die ("Ha Ocurrido un Error");
        return $resPP10;
    }

}