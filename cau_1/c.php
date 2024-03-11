<?php
function kiem_tra_so_nguyen_to($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function tim_so_nguyen_to_trong_mang($mang) {
    $so_nguyen_to = array();
    foreach ($mang as $value) {
        if (kiem_tra_so_nguyen_to($value)) {
            $so_nguyen_to[] = $value;
        }
    }
    return $so_nguyen_to;
}

// Mảng ban đầu
$mang_ban_dau = array(1, 5, 10, 2, 9, 45, 3, 7, 36, 11);

// Tìm số nguyên tố trong mảng
$so_nguyen_to_trong_mang = tim_so_nguyen_to_trong_mang($mang_ban_dau);

// Hiển thị số nguyên tố trong mảng
foreach ($so_nguyen_to_trong_mang as $value) {
    echo $value . " ";
}
?>
