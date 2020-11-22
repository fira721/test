<?php
function hari($nohari) {
    $ahari=array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
        return $ahari[$nohari];
}

function bulan($nobulan) {
    $abulan=array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    return $abulan[$nobulan];
}

function tglhariini() {
    return date("d")." - ".bulan(date("n")-1)." - ".date("Y");
}

function waktudalamhari() {
    $jam=date("G");
    $strwaktu="";
    switch($jam) {
        case ($jam<12):
            $strwaktu="pagi";
        break;
        case ($jam<16):
            $strwaktu="siang";
        break;
        case ($jam<18):
            $strwaktu="sore";
        break;
        default:
            $strwaktu="malam";
    }
    return $strwaktu;
}