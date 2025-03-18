<?php

//Clase para AltaLink B8155
class select_cac
{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection()
    {
        $conexion = mysqli_connect($this->server, $this->user, $this->password, $this->db, $this->port);
        return $conexion;
    }

    //Function for Vistas Modulo Caracteristicas
    public function c1()
    {
        $sqlC2 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resC2 = mysqli_query($conexion, $sqlC2) or die("Ha Ocurrido un Error");
        return $resC2;
    }

    public function c2()
    {
        $sqlC2 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resC2 = mysqli_query($conexion, $sqlC2) or die("Ha Ocurrido un Error");
        return $resC2;
    }
}

//Instalaciones y conexiones
class select_inst
{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection()
    {
        $conexion = mysqli_connect($this->server, $this->user, $this->password, $this->db, $this->port);
        return $conexion;
    }

    //Function for Vistas Modulo Caracteristicas
    public function i1()
    {
        $sqlIns1 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resi1 = mysqli_query($conexion, $sqlIns1) or die("Ha Ocurrido un Error");
        return $resi1;
    }

    public function i2()
    {
        $sqlC2 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resC2 = mysqli_query($conexion, $sqlC2) or die("Ha Ocurrido un Error");
        return $resC2;
    }

    public function i3()
    {
        $sqlC3 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function i4()
    {
        $sqlC3 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function i5()
    {
        $sqlC3 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function i6()
    {
        $sqlC3 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=8 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function i7()
    {
        $sqlC3 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=9 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function i8()
    {
        $sqlC3 = " SELECT  caracteristicas FROM kip_g71_s WHERE id=10 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function i9()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function o1()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function o2()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function o3()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function o4()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function o5()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function o6()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function o7()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=8 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }


    public function o8()
    {
        $sqlC3 = " SELECT  driver FROM kip_g71_s WHERE id=9 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function o9()
    {
        $sqlC3 = " SELECT  interfazP FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp1()
    {
        $sqlC3 = " SELECT  interfazP FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp2()
    {
        $sqlC3 = " SELECT  interfazP FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp3()
    {
        $sqlC3 = " SELECT  interfazP FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp4()
    {
        $sqlC3 = " SELECT  interfazP FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp5()
    {
        $sqlC3 = " SELECT  interfazP FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    
    public function tp6()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp7()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp8()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp9()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp10()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp11()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function tp12()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }

    public function mant1()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }    

    public function mant2()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }    

    public function mant3()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }    

    public function mant4()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }    

    public function mant5()
    {
        $sqlC3 = " SELECT  conf_b FROM kip_g71_s WHERE id=9 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }  

    public function mant6()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }  

    public function mant7()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }
    
    public function mant8()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=8 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }  

    public function mant9()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=9 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    }  
    
    public function mant10()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=10 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    } 

    public function mant11()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=11 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    } 

    public function mant12()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=12 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    } 

    public function mant13()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=13 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    } 

    public function mant14()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=14 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    } 

    public function mant15()
    {
        $sqlC3 = " SELECT  mantenimiento FROM kip_g71_s WHERE id=15 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion, $sqlC3) or die("Ha Ocurrido un Error");
        return $resC3;
    } 
}
