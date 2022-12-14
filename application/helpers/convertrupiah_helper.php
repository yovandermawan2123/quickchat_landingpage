<?php

function rupiah($angka){
	
    $hasil_rupiah = number_format($angka,0,',','.');
    // $hasil_rupiah = number_format($angka,1,',','.');
    return $hasil_rupiah;
 
}