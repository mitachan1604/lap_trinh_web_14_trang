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

function xuat_mang($mang) {
    foreach ($mang as $value) {
        echo $value . " ";
    }
}


// Mảng ban đầu
$mang_ban_dau = array(1, 5, 10, 2, 9, 45, 3, 7, 36, 11);

//sắp xếp
$mang_da_sap_xep = thuat_toan_sap_xep_tang_dan($mang_ban_dau);
// Hiển thị mảng tăng dần
xuat_mang($mang_da_sap_xep);

?>
