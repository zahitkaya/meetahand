<?php

$sql = $db->prepare("select * from bolum where bolum_id=? ");
$bolum_ad=array();
for ($i = 0; $i < 100; $i++) {
    $sql->execute([$i]);
    $bolumler = $sql->fetch(PDO::FETCH_ASSOC);
    
    if ($bolumler['bolum_id']) {

      $bolum_ad[$i]= $bolumler['bolum_ad'];
         
    }
}
