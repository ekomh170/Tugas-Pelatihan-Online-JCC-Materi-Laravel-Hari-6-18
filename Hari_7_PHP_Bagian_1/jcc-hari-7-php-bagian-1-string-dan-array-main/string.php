<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String PHP</h1>
    <?php
    echo "<h3> Soal No 1</h3>";
    /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat 
tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */

    // Kalimat Pertama
    $first_sentence = "Hello PHP!"; // Panjang string 10, jumlah kata: 2
    $panjang_kalimat_1 = strlen($first_sentence);
    $jumlah_kata_1 = str_word_count($first_sentence);
    echo "<h4>Kalimat Pertama</h4>";
    echo "Kalimat : $first_sentence <br>";
    echo "Panjang Kalimat : $panjang_kalimat_1 <br>";
    echo "Jumlah Kata : $jumlah_kata_1 <br>";
    // Kalimat Pertama

    // Kalimaat Kedua
    $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5
    $panjang_kalimat_2 = strlen($second_sentence);
    $jumlah_kata_2 = str_word_count($second_sentence);
    echo "<h4>Kalimat Kedua</h4>";
    echo "Kalimat : $second_sentence <br>";
    echo "Panjang Kalimat : $panjang_kalimat_2 <br>";
    echo "Jumlah Kata : $jumlah_kata_2 <br>";
    // Kalimaat Kedua

    echo "<h3> Soal No 2</h3>";
    /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
    $string2 = "I love PHP";

    echo "<label>String: </label> \"$string2\" <br>";
    echo "Kata pertama: " . substr($string2, 0, 1) . "<br>";
    // Lanjutkan di bawah ini
    // Kata Kedua
    echo "Kata kedua: " . substr($string2, 2, 5);
    // Kata Kedua
    // Kata Ketiga
    echo "<br> Kata Ketiga: " . substr($string2, 6, 8) . "<br>";
    // Kata Ketiga

    echo "<h3> Soal No 3 </h3>";
    /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
    $string3 = "PHP is old but Good!";
    echo "String: \"$string3\" ";
    echo "<br>";
    $mengubah_kata_didalam_string = str_replace("Good!", "awesome", $string3);
    echo "Setelah Mengubah String : $mengubah_kata_didalam_string";

    // OUTPUT : "PHP is old but awesome"

    ?>
</body>

</html>