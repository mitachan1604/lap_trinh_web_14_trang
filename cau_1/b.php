<?php
//ham sắp xếp tăng dần
function thuat_toan_sap_xep_tang_dan($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Nếu phần tử hiện tại lớn hơn phần tử tiếp theo, hoán đổi chúng
            if ($mang[$j] > $mang[$j + 1]) {
                $temp = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $temp;
            }
        }
    }
    return $mang;
}

//ham sắp xếp giảm dần
function thuat_toan_sap_xep_giam_dan($mang) {
    $n = count($mang);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Nếu phần tử hiện tại nhỏ hơn phần tử tiếp theo, hoán đổi chúng
            if ($mang[$j] < $mang[$j + 1]) {
                $temp = $mang[$j];
                $mang[$j] = $mang[$j + 1];
                $mang[$j + 1] = $temp;
            }
        }
    }
    return $mang;
}

function xuat_mang($mang) {
    foreach ($mang as $value) {
        echo $value . " ";
    }
}

function tim_so_chan($mang) {
    $mang_so_chan = array();
    foreach ($mang as $value) {
        if ($value % 2 == 0) {
            $mang_so_chan[] = $value;
        }
    }
    return $mang_so_chan;
}

function tim_so_le($mang) {
    $mang_so_le= array();
    foreach ($mang as $value) {
        if ($value % 2 != 0) {
            $mang_so_le[] = $value;
        }
    }
    return $mang_so_le;
}

// Mảng ban đầu
$mang_ban_dau = array(1, 5, 10, 2, 9, 45, 3, 7, 36, 11);

//chia mảng ban đầu thành 2 mảng chẵn lẻ
$mang_so_chan = tim_so_chan($mang_ban_dau);
$mang_so_le = tim_so_le($mang_ban_dau);

//sắp xếp
$mang_da_sap_xep_tang = thuat_toan_sap_xep_tang_dan($mang_so_chan);
$mang_da_sap_xep_giam = thuat_toan_sap_xep_giam_dan($mang_so_le);

// Hiển thị mảng tăng dần
xuat_mang($mang_da_sap_xep_tang);

// Hiển thị mảng giảm dần
xuat_mang($mang_da_sap_xep_giam);

?>
