<?php

define("KEY","AES-256-ECB");
define("AES", "AES-256-ECB");


$TranscripB405 = base64_encode('Location: ../VL_B405');
$TranscripB8155 = base64_encode('Location: ../VL_B8155');
$TranscripKIP71 = base64_encode('Location: ../KIP71');
$TranscripCP1000 = base64_encode('Location: ../CP1000');

//Rutas Portal GC
if (isset($_GET['B405']) == 'VLB405') {
    header('Location: ../GC/VL_B405?'. openssl_encrypt($TranscripB405, AES,passphrase: KEY));
}

if (isset($_GET['KIP71']) == 'KIP71') {
    header('Location: ../GC/KIPG71.php?'. openssl_encrypt($TranscripKIP71, AES,passphrase: KEY));
}

if (isset($_GET['CP1000']) == 'CP_1000') {
    header('Location: ../GC/CP_1000?'. openssl_encrypt($TranscripCP1000, AES,passphrase: KEY));
}

if (isset($_GET['B8155']) == 'VLB8155') {
    header('Location: ../GC/B8155.php?'. openssl_encrypt($TranscripB405, AES,passphrase: KEY));
}


