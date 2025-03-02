<?php

define("KEY", "AES-256-ECB");
define("AES", "AES-256-ECB");

$ruta0 = base64_encode('Location: ../intranet');
$ruta1 = base64_encode ('Location: ../Learning');
$ruta2 = base64_encode ('Location: ../portqaportal');
$ruta3 = base64_encode ('Location: ../library_raps');
$ruta4 = base64_encode ('Location: ../Learning_part_list');
$ruta5 = base64_encode ('Location: ../CONTROLLER/close');

//RAPs
$ruta6 = base64_encode('Location: ../RAPs/RAPs_b8155?');
$ruta7 = base64_encode(string: 'Location: ../RAPs/RAPs_b8255?');



if (isset($_GET['URL0']) == 'intranet') {
    header('Location: ../intranet?' . openssl_encrypt($ruta0, AES,passphrase: KEY));
}

if (isset($_GET['URL1']) == 'Learning') {
    header('Location: ../Learning?' . openssl_encrypt($ruta1, AES,passphrase: KEY));
}

if (isset($_GET['URL2']) == 'portal') {
    header('Location: ../portal?' .  openssl_encrypt($ruta2, AES,passphrase: KEY));
}

if (isset($_GET['URL3']) == 'close') {
    header('Location: ../CONTROLLER/close?' .  openssl_encrypt($ruta3, AES,passphrase: KEY));
}

//sub_Directory 
if (isset($_GET['URL4']) == 'cod_fail') {
    header('Location: ../cod_fail?' .  openssl_encrypt($ruta4, AES,passphrase: KEY));
}

if (isset($_GET['URL5']) == 'library_raps') {
    header('Location: ../library_raps?' .  openssl_encrypt($ruta5, AES,passphrase: KEY));
}

if (isset($_GET['URL6']) == 'partList') {
    header('Location: ../parts_list?' .  openssl_encrypt($ruta6, AES,passphrase: KEY));
}


//RAPs server
if (isset($_GET['URL7']) == 'RAPs1') {
    header('Location: ../RAPs/RAPs_b8155?' .  openssl_encrypt($ruta7, AES,passphrase: KEY));
}

if (isset($_GET['URL8']) == 'RAPs2') {
    header('Location: ../RAPs/RAPs_b8255?' .  openssl_encrypt($ruta8, AES,passphrase: KEY));
}