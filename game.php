<?php
echo "Welcome to my game\n";

while (true) {
    echo "===== Game tebak angka =====\n";
    echo "Tebak sebuah angka antara 1 sampai 9!\n";

    $computer = rand(1, 9); // Angka random dari computer yang akan ditebak

    echo "Masukan tebakanmu: ";
    $player = trim(fgets(STDIN)); // menerima input dari player/user

    if ($player == $computer) {
        echo "Tebakanmu benar!\n"; //jika tebakan mu benar
        exit;
    } elseif ($player == 0 || $player > 9) {
        echo "Kamu hanya boleh memasukan angka 1 - 9!\n"; //Sesi ini akan memvalidasi bahwah hanya angka 1 - 9 yang boleh dimasukan.
    } else {
        echo "Tebakanmu salah! Angka komputer adalah $computer\n"; //Jika tebakan salah
    }
}
