<?php

function month_indo($month, $format = "mmmm")
{
    if ($format == "mmmm") {
        $fm = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    } elseif ($format == "mmm") {
        $fm = ["JAN", "FEB", "MAR", "APR", "MEI", "JUN", "JUL", "AGU", "SEP", "OKT", "NOV", "DES"];
    }

    return $fm[$month - 1];
}

function day_indo($day, $format = "dddd")
{
    if ($format == "dddd") {
        $fd = ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"];
    } elseif ($format == "ddd") {
        $fd = ["Sen", "Sel", "Rab", "Kam", "Jum", "Sab", "Min"];
    }

    return $fd[$day - 1];
}
