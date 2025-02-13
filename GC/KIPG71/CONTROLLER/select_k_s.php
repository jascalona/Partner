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

    //Funcion leccion Producto
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

    //Funcion leccion tecnologia
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

    //Funcio leccion rendimiento
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

    //Funcio leccion Driver
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
    
    public function driver6(){
        $sqlD6 = " SELECT driver FROM kip_g71_s WHERE id=6";
        $conexion = $this->Connection();
        $resD6 = mysqli_query($conexion,$sqlD6)or die("Error");
        return $resD6;
    }

    public function driver7(){
        $sqlD7 = " SELECT driver FROM kip_g71_s WHERE id=7";
        $conexion = $this->Connection();
        $resD7 = mysqli_query($conexion,$sqlD7)or die("Error");
        return $resD7;
    }

    public function driver8(){
        $sqlD8 = " SELECT driver FROM kip_g71_s WHERE id=8";
        $conexion = $this->Connection();
        $resD8 = mysqli_query($conexion,$sqlD8)or die("Error");
        return $resD8;
    }

    public function driver9(){
        $sqlD9 = " SELECT driver FROM kip_g71_s WHERE id=9";
        $conexion = $this->Connection();
        $resD9 = mysqli_query($conexion,$sqlD9)or die("Error");
        return $resD9;
    }

    //Funcion de interfazP
    public function interfazP(){
        $sqlI = " SELECT interfazP FROM kip_g71_s WHERE id=1";
        $conexion = $this->Connection();
        $resI = mysqli_query($conexion,$sqlI)or die("Error");
        return $resI;
    }

    public function interfazP2(){
        $sqlI2 = " SELECT interfazP FROM kip_g71_s WHERE id=2";
        $conexion = $this->Connection();
        $resI2 = mysqli_query($conexion,$sqlI2)or die("Error");
        return $resI2;
    }

    public function interfazP3(){
        $sqlI3 = " SELECT interfazP FROM kip_g71_s WHERE id=3";
        $conexion = $this->Connection();
        $resI3 = mysqli_query($conexion,$sqlI3)or die("Error");
        return $resI3;
    }

    public function interfazP4(){
        $sqlI4 = " SELECT interfazP FROM kip_g71_s WHERE id=4";
        $conexion = $this->Connection();
        $resI4 = mysqli_query($conexion,$sqlI4)or die("Error");
        return $resI4;
    }

    public function interfazP5(){
        $sqlI5 = " SELECT interfazP FROM kip_g71_s WHERE id=5";
        $conexion = $this->Connection();
        $resI5 = mysqli_query($conexion,$sqlI5)or die("Error");
        return $resI5;
    }

    //Funcion Scaner
    public function scanR(){
        $sqlSD = " SELECT conf_b FROM kip_g71_s WHERE id=1";
        $conexion = $this->Connection();
        $resSD = mysqli_query($conexion,$sqlSD)or die("Error");
        return $resSD;
    }

    public function scanR2(){
        $sqlSD2 = " SELECT conf_b FROM kip_g71_s WHERE id=2";
        $conexion = $this->Connection();
        $resSD2 = mysqli_query($conexion,$sqlSD2)or die("Error");
        return $resSD2;
    }

    public function scanR3(){
        $sqlSD3 = " SELECT conf_b FROM kip_g71_s WHERE id=3";
        $conexion = $this->Connection();
        $resSD3 = mysqli_query($conexion,$sqlSD3)or die("Error");
        return $resSD3;
    }

    public function scanR4(){
        $sqlSD4 = " SELECT conf_b FROM kip_g71_s WHERE id=4";
        $conexion = $this->Connection();
        $resSD4 = mysqli_query($conexion,$sqlSD4)or die("Error");
        return $resSD4;
    }

    public function scanR5(){
        $sqlSD5 = " SELECT conf_b FROM kip_g71_s WHERE id=5";
        $conexion = $this->Connection();
        $resSD5 = mysqli_query($conexion,$sqlSD5)or die("Error");
        return $resSD5;
    }

    public function scanL(){
        $sqlSL = " SELECT conf_b FROM kip_g71_s WHERE id=6";
        $conexion = $this->Connection();
        $resSL = mysqli_query($conexion,$sqlSL)or die("Error");
        return $resSL;
    }

    public function scanL2(){
        $sqlSL2 = " SELECT conf_b FROM kip_g71_s WHERE id=7";
        $conexion = $this->Connection();
        $resSL2 = mysqli_query($conexion,$sqlSL2)or die("Error");
        return $resSL2;
    }

    public function scanL3(){
        $sqlSL3 = " SELECT conf_b FROM kip_g71_s WHERE id=8";
        $conexion = $this->Connection();
        $resSL3 = mysqli_query($conexion,$sqlSL3)or die("Error");
        return $resSL3;
    }

    public function scanL4(){
        $sqlSL4 = " SELECT conf_b FROM kip_g71_s WHERE id=9";
        $conexion = $this->Connection();
        $resSL4 = mysqli_query($conexion,$sqlSL4)or die("Error");
        return $resSL4;
    }


    //Funcion leccion Sistema Operativo
    public function so(){
        $sqlSO = " SELECT so FROM kip_g71_s WHERE id=1";
        $conexion = $this->Connection();
        $resSO = mysqli_query($conexion,$sqlSO)or die("Error");
        return $resSO;
    }

    public function so2(){
        $sqlSO2 = " SELECT so FROM kip_g71_s WHERE id=2";
        $conexion = $this->Connection();
        $resSO2 = mysqli_query($conexion,$sqlSO2)or die("Error");
        return $resSO2;
    }

    public function so3(){
        $sqlSO3 = " SELECT so FROM kip_g71_s WHERE id=3";
        $conexion = $this->Connection();
        $resSO3 = mysqli_query($conexion,$sqlSO3)or die("Error");
        return $resSO3;
    }

    public function so4(){
        $sqlSO4 = " SELECT so FROM kip_g71_s WHERE id=4";
        $conexion = $this->Connection();
        $resSO4 = mysqli_query($conexion,$sqlSO4)or die("Error");
        return $resSO4;
    }

    public function so5(){
        $sqlSO5 = " SELECT so FROM kip_g71_s WHERE id=5";
        $conexion = $this->Connection();
        $resSO5 = mysqli_query($conexion,$sqlSO5)or die("Error");
        return $resSO5;
    }

    public function so6(){
        $sqlSO6 = " SELECT so FROM kip_g71_s WHERE id=6";
        $conexion = $this->Connection();
        $resSO6 = mysqli_query($conexion,$sqlSO6)or die("Error");
        return $resSO6;
    }

    public function so7(){
        $sqlSO7 = " SELECT so FROM kip_g71_s WHERE id=7";
        $conexion = $this->Connection();
        $resSO7 = mysqli_query($conexion,$sqlSO7)or die("Error");
        return $resSO7;
    }

    public function so8(){
        $sqlSO8 = " SELECT so FROM kip_g71_s WHERE id=8";
        $conexion = $this->Connection();
        $resSO8 = mysqli_query($conexion,$sqlSO8)or die("Error");
        return $resSO8;
    }

    public function so9(){
        $sqlSO9 = " SELECT so FROM kip_g71_s WHERE id=9";
        $conexion = $this->Connection();
        $resSO9 = mysqli_query($conexion,$sqlSO9)or die("Error");
        return $resSO9;
    }

    public function so10(){
        $sqlSO10 = " SELECT so FROM kip_g71_s WHERE id=10";
        $conexion = $this->Connection();
        $resSO10 = mysqli_query($conexion,$sqlSO10)or die("Error");
        return $resSO10;
    }

    public function so11(){
        $sqlSO11 = " SELECT so FROM kip_g71_s WHERE id=11";
        $conexion = $this->Connection();
        $resSO11 = mysqli_query($conexion,$sqlSO11)or die("Error");
        return $resSO11;
    }

    public function so12(){
        $sqlSO12 = " SELECT so FROM kip_g71_s WHERE id=12";
        $conexion = $this->Connection();
        $resSO12 = mysqli_query($conexion,$sqlSO12)or die("Error");
        return $resSO12;
    }

    //Funcion leccion Sistema Operativo
    public function cs(){
        $sqlCS = " SELECT so FROM kip_g71_s WHERE id=13";
        $conexion = $this->Connection();
        $resCS = mysqli_query($conexion,$sqlCS)or die("Error");
        return $resCS;
    }

    public function cs2(){
        $sqlCS2 = " SELECT so FROM kip_g71_s WHERE id=14";
        $conexion = $this->Connection();
        $resCS2 = mysqli_query($conexion,$sqlCS2)or die("Error");
        return $resCS2;
    }

    public function cs3(){
        $sqlCS3 = " SELECT so FROM kip_g71_s WHERE id=15";
        $conexion = $this->Connection();
        $resCS3 = mysqli_query($conexion,$sqlCS3)or die("Error");
        return $resCS3;
    }

    public function cs4(){
        $sqlCS4 = " SELECT so FROM kip_g71_s WHERE id=16";
        $conexion = $this->Connection();
        $resCS4 = mysqli_query($conexion,$sqlCS4)or die("Error");
        return $resCS4;
    }

    public function cs5(){
        $sqlCS5 = " SELECT so FROM kip_g71_s WHERE id=17";
        $conexion = $this->Connection();
        $resCS5 = mysqli_query($conexion,$sqlCS5)or die("Error");
        return $resCS5;
    }

    public function cs6(){
        $sqlCS6 = " SELECT so FROM kip_g71_s WHERE id=18";
        $conexion = $this->Connection();
        $resCS6 = mysqli_query($conexion,$sqlCS6)or die("Error");
        return $resCS6;
    }

    public function cs7(){
        $sqlCS7 = " SELECT so FROM kip_g71_s WHERE id=19";
        $conexion = $this->Connection();
        $resCS7 = mysqli_query($conexion,$sqlCS7)or die("Error");
        return $resCS7;
    }

    public function cs8(){
        $sqlCS8 = " SELECT so FROM kip_g71_s WHERE id=20";
        $conexion = $this->Connection();
        $resCS8 = mysqli_query($conexion,$sqlCS8)or die("Error");
        return $resCS8;
    }
    
    public function cs9(){
        $sqlCS9 = " SELECT so FROM kip_g71_s WHERE id=21";
        $conexion = $this->Connection();
        $resCS9 = mysqli_query($conexion,$sqlCS9)or die("Error");
        return $resCS9;
    }

    
    //Funcion leccion Restauracion interna
    public function restauracion(){
        $sqlRI = " SELECT restauracion FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resRI = mysqli_query($conexion,$sqlRI)or die("Error");
        return $resRI;
    }

    public function restauracion2(){
        $sqlRI2 = " SELECT restauracion FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resRI2 = mysqli_query($conexion,$sqlRI2)or die("Error");
        return $resRI2;
    }

    public function restauracion3(){
        $sqlRI3 = " SELECT restauracion FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resRI3 = mysqli_query($conexion,$sqlRI3)or die("Error");
        return $resRI3;
    }

    public function restauracion4(){
        $sqlRI4 = " SELECT restauracion FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resRI4 = mysqli_query($conexion,$sqlRI4)or die("Error");
        return $resRI4;
    }

    public function restauracion5(){
        $sqlRI5 = " SELECT restauracion FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resRI5 = mysqli_query($conexion,$sqlRI5)or die("Error");
        return $resRI5;
    }

    //Funcion leccion Contabilidad
    public function contabilidad(){
        $sqlC = " SELECT contabilidad FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resC = mysqli_query($conexion,$sqlC)or die("Error");
        return $resC;
    }

    public function contabilidad2(){
        $sqlC2 = " SELECT contabilidad FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resC2 = mysqli_query($conexion,$sqlC2)or die("Error");
        return $resC2;
    }

    public function contabilidad3(){
        $sqlC3 = " SELECT contabilidad FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion,$sqlC3)or die("Error");
        return $resC3;
    }

    public function contabilidad4(){
        $sqlC4 = " SELECT contabilidad FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resC4 = mysqli_query($conexion,$sqlC4)or die("Error");
        return $resC4;
    }

    public function contabilidad5(){
        $sqlC5 = " SELECT contabilidad FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resC5 = mysqli_query($conexion,$sqlC5)or die("Error");
        return $resC5;
    }

    public function contabilidad6(){
        $sqlC6 = " SELECT contabilidad FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resC6 = mysqli_query($conexion,$sqlC6)or die("Error");
        return $resC6;
    }

    public function contabilidad7(){
        $sqlC7 = " SELECT contabilidad FROM kip_g71_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resC7 = mysqli_query($conexion,$sqlC7)or die("Error");
        return $resC7;
    }
    public function contabilidad8(){
        $sqlC8 = " SELECT contabilidad FROM kip_g71_s WHERE id=8 ";
        $conexion = $this->Connection();
        $resC8 = mysqli_query($conexion,$sqlC8)or die("Error");
        return $resC8;
    }

    public function contabilidad9(){
        $sqlC9 = " SELECT contabilidad FROM kip_g71_s WHERE id=9 ";
        $conexion = $this->Connection();
        $resC9 = mysqli_query($conexion,$sqlC9)or die("Error");
        return $resC9;
    }

    public function contabilidad10(){
        $sqlC10 = " SELECT contabilidad FROM kip_g71_s WHERE id=10 ";
        $conexion = $this->Connection();
        $resC10 = mysqli_query($conexion,$sqlC10)or die("Error");
        return $resC10;
    }

    public function contabilidad11(){
        $sqlC11 = " SELECT contabilidad FROM kip_g71_s WHERE id=11 ";
        $conexion = $this->Connection();
        $resC11 = mysqli_query($conexion,$sqlC11)or die("Error");
        return $resC11;
    }

    public function contabilidad12(){
        $sqlC12 = " SELECT contabilidad FROM kip_g71_s WHERE id=12 ";
        $conexion = $this->Connection();
        $resC12 = mysqli_query($conexion,$sqlC12)or die("Error");
        return $resC12;
    }

    //Funcion de leccion personalizacion de interfaz de usuario
    public function interfazU(){
        $sqlI = " SELECT function_ui FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resI = mysqli_query($conexion,$sqlI)or die("Error");
        return $resI;
    }

    public function interfazU2(){
        $sqlI2 = " SELECT function_ui FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resI2 = mysqli_query($conexion,$sqlI2)or die("Error");
        return $resI2;
    }
    
    public function interfazU3(){
        $sqlI3 = " SELECT function_ui FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resI3 = mysqli_query($conexion,$sqlI3)or die("Error");
        return $resI3;
    }

    public function interfazU4(){
        $sqlI4 = " SELECT function_ui FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resI4 = mysqli_query($conexion,$sqlI4)or die("Error");
        return $resI4;
    }

    public function interfazU5(){
        $sqlI5 = " SELECT function_ui FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resI5 = mysqli_query($conexion,$sqlI5)or die("Error");
        return $resI5;
    }

    //Funcion de leccion Anidamiento
    public function anidamiento(){
        $sqlA = " SELECT function_ui FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resA = mysqli_query($conexion,$sqlA)or die("Error");
        return $resA;
    }

    public function anidamiento2(){
        $sqlA2 = " SELECT function_ui FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resA2 = mysqli_query($conexion,$sqlA2)or die("Error");
        return $resA2;
    }

    public function anidamiento3(){
        $sqlA3 = " SELECT function_ui FROM kip_g71_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resA3 = mysqli_query($conexion,$sqlA3  )or die("Error");
        return $resA3;
    }

    public function anidamiento4(){
        $sqlA4 = " SELECT function_ui FROM kip_g71_s WHERE id=8 ";
        $conexion = $this->Connection();
        $resA4 = mysqli_query($conexion,$sqlA4  )or die("Error");
        return $resA4;
    }


    //Funcion de leccion Creacion de Plantillas
    public function plantillas(){
        $sqlP = " SELECT function_ui FROM kip_g71_s WHERE id=9 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function plantillas2(){
        $sqlP = " SELECT function_ui FROM kip_g71_s WHERE id=10 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function plantillas3(){
        $sqlP = " SELECT function_ui FROM kip_g71_s WHERE id=11 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    
    public function plantillas4(){
        $sqlP = " SELECT function_ui FROM kip_g71_s WHERE id=12 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    
    public function plantillas5(){
        $sqlP = " SELECT function_ui FROM kip_g71_s WHERE id=13 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function plantillas6(){
        $sqlP = " SELECT function_ui FROM kip_g71_s WHERE id=14 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    //Funcion de leccion Funciones de configuuracion y servicios I
    public function funcionesC1(){
        $sqlP = " SELECT function_cog_i FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }
    
    public function funcionesC2(){
        $sqlP = " SELECT function_cog_i FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }
    
    public function funcionesC3(){
        $sqlP = " SELECT function_cog_i FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    
    public function funcionesC4(){
        $sqlP = " SELECT function_cog_i FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }
    
    public function funcionesC5(){
        $sqlP = " SELECT function_cog_i FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function funcionesC6(){
        $sqlP = " SELECT function_cog_i FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function funcionesC7(){
        $sqlP = " SELECT function_cog_i FROM kip_g71_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    //Funcion de leccion Funciones de configuuracion y servicios II
    public function funcionesCII(){
        $sqlP = " SELECT function_cog_ii FROM kip_g71_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function funcionesCII2(){
        $sqlP = " SELECT function_cog_ii FROM kip_g71_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function funcionesCII3(){
        $sqlP = " SELECT function_cog_ii FROM kip_g71_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function funcionesCII4(){
        $sqlP = " SELECT function_cog_ii FROM kip_g71_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function funcionesCII5(){
        $sqlP = " SELECT function_cog_ii FROM kip_g71_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }

    public function funcionesCII6(){
        $sqlP = " SELECT function_cog_ii FROM kip_g71_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP  )or die("Error");
        return $resP;
    }
}

