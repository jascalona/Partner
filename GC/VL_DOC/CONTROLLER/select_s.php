<?php

class select_cac{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection(){
        $conexion = mysqli_connect($this->server,$this->user,$this->password, $this->db,$this->port);
        return $conexion;
    }

    //Function for Vistas Modulo Caracteristicas
    public function select_c2(){
        $sqlC2 = " SELECT  carac FROM vl_b405_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resC2 = mysqli_query($conexion,$sqlC2) or die ("Ha Ocurrido un Error");
        return $resC2;
    }

    public function select_c3(){
        $sqlC3 = " SELECT  carac FROM vl_b405_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resC3 = mysqli_query($conexion,$sqlC3) or die ("Ha Ocurrido un Error");
        return $resC3;
    }

    public function select_c4(){
        $sqlC4 = " SELECT  carac FROM vl_b405_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resC4 = mysqli_query($conexion,$sqlC4) or die ("Ha Ocurrido un Error");
        return $resC4;
    }

    public function select_c5(){
        $sqlC5 = " SELECT  carac FROM vl_b405_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resC5 = mysqli_query($conexion,$sqlC5) or die ("Ha Ocurrido un Error");
        return $resC5;
    }
}

class select_cred{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection(){
        $conexion = mysqli_connect($this->server,$this->user,$this->password, $this->db,$this->port);
        return $conexion;
    }

    //Function for Vistas Modulo Caracteristicas
    public function select_r(){
        $sqlR = " SELECT  red FROM vl_b405_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resR = mysqli_query($conexion,$sqlR) or die ("Ha Ocurrido un Error");
        return $resR;
    }

    public function select_r2(){
        $sqlR2 = " SELECT  red FROM vl_b405_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resR2 = mysqli_query($conexion,$sqlR2) or die ("Ha Ocurrido un Error");
        return $resR2;
    }

    public function select_r3(){
        $sqlR3 = " SELECT  red FROM vl_b405_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resR3 = mysqli_query($conexion,$sqlR3) or die ("Ha Ocurrido un Error");
        return $resR3;
    }

    public function select_r4(){
        $sqlR4 = " SELECT  red FROM vl_b405_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resR4 = mysqli_query($conexion,$sqlR4) or die ("Ha Ocurrido un Error");
        return $resR4;
    }


    //Inalambrica
    public function select_r5(){
        $sqlR5 = " SELECT  red FROM vl_b405_s WHERE id=5 ";
        $conexion = $this->Connection();
        $resR5 = mysqli_query($conexion,$sqlR5) or die ("Ha Ocurrido un Error");
        return $resR5;
    }

    public function select_r6(){
        $sqlR6 = " SELECT  red FROM vl_b405_s WHERE id=6 ";
        $conexion = $this->Connection();
        $resR6 = mysqli_query($conexion,$sqlR6) or die ("Ha Ocurrido un Error");
        return $resR6;
    }

    public function select_r7(){
        $sqlR7 = " SELECT  red FROM vl_b405_s WHERE id=7 ";
        $conexion = $this->Connection();
        $resR7 = mysqli_query($conexion,$sqlR7) or die ("Ha Ocurrido un Error");
        return $resR7;
    }

    //ip Statica

    public function select_r8(){
        $sqlR8 = " SELECT  red FROM vl_b405_s WHERE id=8 ";
        $conexion = $this->Connection();
        $resR8 = mysqli_query($conexion,$sqlR8) or die ("Ha Ocurrido un Error");
        return $resR8;
    }

}   

class select_pro{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection(){
        $conexion = mysqli_connect($this->server,$this->user,$this->password,$this->db,$this->port);
        return $conexion;
    }

    //Function for Modulo Protocolos
    public function select_prot(){
        $sqlP = " SELECT protocolos FROM vl_b405_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resP = mysqli_query($conexion,$sqlP);
        return $resP;
    }

    public function select_prot2(){
        $sqlP2 = " SELECT protocolos FROM vl_b405_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resP2 = mysqli_query($conexion,$sqlP2);
        return $resP2;
    }

    public function select_prot3(){
        $sqlP3 = " SELECT protocolos FROM vl_b405_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resP3 = mysqli_query($conexion,$sqlP3);
        return $resP3;
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
        $conexion = mysqli_connect($this->server,$this->user,$this->password,$this->db,$this->port);
        return $conexion;
    }

    //Function Vistas Modulo Herramienta y ajustes
    public function select_ha(){
        $sqlHA = " SELECT ajustes FROM vl_b405_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resHA = mysqli_query($conexion, $sqlHA)or die("Ha Ocurrido un Error");
        return $resHA;
    } 

    public function select_ha2(){
        $sqlHA2 = " SELECT ajustes FROM vl_b405_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resHA2 = mysqli_query($conexion, $sqlHA2)or die("Ha Ocurrido un Error");
        return $resHA2;
    } 

    
    public function select_ha3(){
        $sqlHA3 = " SELECT ajustes FROM vl_b405_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resHA3 = mysqli_query($conexion, $sqlHA3)or die("Ha Ocurrido un Error");
        return $resHA3;
    } 
    
    public function select_ha4(){
        $sqlHA4 = " SELECT ajustes FROM vl_b405_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resHA4 = mysqli_query($conexion, $sqlHA4)or die("Ha Ocurrido un Error");
        return $resHA4;
    } 


}

class select_sft{
    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "gxdeve_apps";
    private $port = "3306";

    //Instancia for Connection
    public function Connection(){
        $conexion = mysqli_connect($this->server,$this->user,$this->password,$this->db,$this->port);
        return $conexion;
    }

    //Function Vistas Modulo Herramienta y ajustes
    public function select_sf(){
        $sqlSF = " SELECT software FROM vl_b405_s WHERE id=1 ";
        $conexion = $this->Connection();
        $resSF = mysqli_query($conexion, $sqlSF)or die("Ha Ocurrido un Error");
        return $resSF;
    } 

    public function select_sf2(){
        $sqlSF2 = " SELECT software FROM vl_b405_s WHERE id=2 ";
        $conexion = $this->Connection();
        $resSF2 = mysqli_query($conexion, $sqlSF2)or die("Ha Ocurrido un Error");
        return $resSF2;
    } 

    
    public function select_sf3(){
        $sqlSF3 = " SELECT software FROM vl_b405_s WHERE id=3 ";
        $conexion = $this->Connection();
        $resSF3 = mysqli_query($conexion, $sqlSF3)or die("Ha Ocurrido un Error");
        return $resSF3;
    } 
    
    public function select_sf4(){
        $sqlSF4 = " SELECT software FROM vl_b405_s WHERE id=4 ";
        $conexion = $this->Connection();
        $resSF4 = mysqli_query($conexion, $sqlSF4)or die("Ha Ocurrido un Error");
        return $resSF4;
    } 


}