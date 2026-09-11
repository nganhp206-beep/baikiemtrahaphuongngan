// Bai 1
<?php
echo "Các số chẵn từ 1 đến 10 là: ";
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
}
?>

// Bai 2
<?php
function ktrasonguyento($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$so = 29;
if (ktrasonguyento($so)) {
    echo $so . " là số nguyên tố.";
} else {
    echo $so . " không phải là số nguyên tố.";
}
?>

// Bai 3
<?php
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($dong = 1; $dong <= $chieuCao; $dong++) {
        for ($cot = 1; $cot <= $chieuRong; $cot++) {
            echo "*";
        }
        echo "\n";
    }
}

inHinhChuNhat(5, 3);
?>