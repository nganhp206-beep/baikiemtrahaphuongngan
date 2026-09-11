<?php
// --- Bài 1 ---
echo "// Bài 1 <br>";
echo "Các số chẵn từ 1 đến 10 là: ";
for ($i = 2; $i <= 10; $i += 2) {
    echo $i . " ";
}
echo "<br><br>";

// --- Bài 2 ---
echo "// Bài 2 <br>";
function ktsonguyento($n) {
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
if (ktsonguyento($so)) {
    echo $so . " là số nguyên tố.";
} else {
    echo $so . " không phải là số nguyên tố.";
}
echo "<br><br>";

// --- Bài 3 ---
echo "// Bài 3 <br>";
function inHinhChuNhat($chieuRong, $chieuCao) {
    for ($i = 0; $i < $chieuCao; $i++) {
        for ($j = 0; $j < $chieuRong; $j++) {
            echo "* ";
        }
        echo "<br>"; 
    }
}

inHinhChuNhat(5, 3);
?>