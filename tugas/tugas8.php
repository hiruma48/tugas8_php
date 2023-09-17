<?php
$tinggi = 10; // Atur tinggi belah ketupat sesuai kebutuhan

// Bagian atas belah ketupat
for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = 1; $j <= $tinggi - $i; $j++) {
        echo "&nbsp;&nbsp;"; // Spasi untuk membentuk segitiga atas
    }
    for ($k = 2; $k <= 2 * $i - 1; $k++) {
        echo "x"; // Bintang untuk membentuk segitiga atas
    }
    echo "<br>";
}

// Bagian bawah belah ketupat
for ($i = $tinggi - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $tinggi - $i; $j++) {
        echo "&nbsp;&nbsp;"; // Spasi untuk membentuk segitiga bawah
        
    }
    for ($k = 2; $k <= 2 * $i - 1; $k++) {
        echo "x"; // Bintang untuk membentuk segitiga bawah
    }
    echo "<br>";
}
// Bagian atas belah ketupat
for ($i = 1; $i <= $tinggi; $i++) {
    for ($j = 1; $j <= $tinggi - $i; $j++) {
        echo "&nbsp;&nbsp;"; // Spasi untuk membentuk segitiga atas
    }
    for ($k = 2; $k <= 2 * $i - 1; $k++) {
        echo "x"; // Bintang untuk membentuk segitiga atas
    }
    echo "<br>";
}

// Bagian bawah belah ketupat
for ($i = $tinggi - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $tinggi - $i; $j++) {
        echo "&nbsp;&nbsp;"; // Spasi untuk membentuk segitiga bawah
    }
    for ($k = 2; $k <= 2 * $i - 1; $k++) {
        echo "x"; // Bintang untuk membentuk segitiga bawah
    }
    echo "<br>";
}
?>
