<?php

class select_k_s{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection Productos
    public function Connection(){
        $conexion = mysqli_connect($this->server,$this->user,$this->password,$this->db,$this->port);
        return $conexion;
    }

    //Vistas Modulo Producto
    public function producto(){
        $sqlP = " SELECT product FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP)or die("Error");
        return $resP;
    }

    public function producto2(){
        $sqlP2 = " SELECT product FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resP2 = mysqli_query($conexion,$sqlP2)or die("Error");
        return $resP2;
    }

    public function producto3(){
        $sqlP3 = " SELECT product FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resP3 = mysqli_query($conexion,$sqlP3)or die("Error");
        return $resP3;
    }

    public function producto4(){
        $sqlP4 = " SELECT product FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resP4 = mysqli_query($conexion,$sqlP4)or die("Error");
        return $resP4;
    }

    public function producto5(){
        $sqlP5 = " SELECT product FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resP5 = mysqli_query($conexion,$sqlP5)or die("Error");
        return $resP5;
    }

    //Funciones para Leccion 02
    public function tecnologia(){
        $sqlT = " SELECT product FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resT = mysqli_query($conexion, $sqlT)or die("Error");
        return $resT;
    }

    public function tecnologia2(){
        $sqlT2 = " SELECT product FROM kip_g71_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resT2 = mysqli_query($conexion, $sqlT2)or die("Error");
        return $resT2;
    }

    public function tecnologia3(){
        $sqlT3 = " SELECT product FROM kip_g71_s WHERE id=8 ";
        $conexion = $this->Connection();
        $resT3 = mysqli_query($conexion, $sqlT3)or die("Error");
        return $resT3;
    }

    //Funciones para Leccion 03
    public function rendimiento(){
        $sqlR = " SELECT product FROM kip_g71_s WHERE id=9 ";
        $conexion = $this->Connection();
        $resR = mysqli_query($conexion, $sqlR)or die("Error");
        return $resR;
    }

    public function rendimiento2(){
        $sqlR2= " SELECT product FROM kip_g71_s WHERE id=10 ";
        $conexion = $this->Connection();
        $resR2 = mysqli_query($conexion, $sqlR2)or die("Error");
        return $resR2;
    }

    //Funciones leccion 03
    public function driver(){
        $sqlD = " SELECT driver FROM kip_g71_s WHERE id=1";
        $conexion = $this->Connection();
        $resD = mysqli_query($conexion,$sqlD)or die("Error");
        return $resD;
    }

    public function driver2(){
        $sqlD2 = " SELECT driver FROM kip_g71_s WHERE id=2";
        $conexion = $this->Connection();
        $resD2 = mysqli_query($conexion,$sqlD2)or die("Error");
        return $resD2;
    }

    public function driver3(){
        $sqlD3 = " SELECT driver FROM kip_g71_s WHERE id=3";
        $conexion = $this->Connection();
        $resD3 = mysqli_query($conexion,$sqlD3)or die("Error");
        return $resD3;
    }

    public function driver4(){
        $sqlD4 = " SELECT driver FROM kip_g71_s WHERE id=4";
        $conexion = $this->Connection();
        $resD4 = mysqli_query($conexion,$sqlD4)or die("Error");
        return $resD4;
    }

    public function driver5(){
        $sqlD5 = " SELECT driver FROM kip_g71_s WHERE id=5";
        $conexion = $this->Connection();
        $resD5 = mysqli_query($conexion,$sqlD5)or die("Error");
        return $resD5;
    }

    public function interfazP(){
        $sqlI = " SELECT driver FROM kip_g71_s WHERE id=6";
        $conexion = $this->Connection();
        $resI = mysqli_query($conexion,$sqlI)or die("Error");
        return $resI;
    }

    public function interfazP2(){
        $sqlI2 = " SELECT driver FROM kip_g71_s WHERE id=7";
        $conexion = $this->Connection();
        $resI2 = mysqli_query($conexion,$sqlI2)or die("Error");
        return $resI2;
    }

    public function interfazP3(){
        $sqlI3 = " SELECT driver FROM kip_g71_s WHERE id=8";
        $conexion = $this->Connection();
        $resI3 = mysqli_query($conexion,$sqlI3)or die("Error");
        return $resI3;
    }

    public function interfazP4(){
        $sqlI4 = " SELECT driver FROM kip_g71_s WHERE id=9";
        $conexion = $this->Connection();
        $resI4 = mysqli_query($conexion,$sqlI4)or die("Error");
        return $resI4;
    }

    public function interfazP5(){
        $sqlI5 = " SELECT driver FROM kip_g71_s WHERE id=10";
        $conexion = $this->Connection();
        $resI5 = mysqli_query($conexion,$sqlI5)or die("Error");
        return $resI5;
    }

}

