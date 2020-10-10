<?php

try{
    $db =  new PDO("mysql:host=localhost;dbname=yono","root","",[PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION]);
} catch (Exception $error){
    // echo $error->getMessage();
}

$siswa=$db->query("select * from Table_siswa"); // prepare statmen

$data_siswa=$siswa->fetchAll(); // Execute and get as array
// var_dump($data_siswa);

?>