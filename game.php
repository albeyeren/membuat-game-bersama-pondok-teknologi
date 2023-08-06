<?php
echo "Welcome to my game\n";

while (true) {
    echo "===== Game tebak angka =====\n";
    echo "Tebak sebuah angka antara 1 sampai 9!\n";

    $computer = rand(1, 9);

    echo "Masukan tebakanmu: ";
    $player = trim(fgets(STDIN));

    if ($player == $computer) {
        echo "Tebakanmu benar!\n";
        exit;
    } elseif ($player == 0 || $player > 9) {
        echo "Kamu hanya boleh memasukan angka 1 - 9!\n";
    } else {
        echo "Tebakanmu salah! Angka komputer adalah $computer\n";
    }
}
