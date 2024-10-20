<?php 

// define('NAMA', 'Faiz Alhadziq');
// echo NAMA;

// echo "<br>";

// const UMUR = 20;
// echo UMUR;

// class Coba {
//     const NAMA = 'Faiz Alhadziq';
// }

// echo Coba::NAMA;

class Coba {
    public $kelas = __CLASS__;

}

$obj = new Coba;
echo $obj->kelas;

?>