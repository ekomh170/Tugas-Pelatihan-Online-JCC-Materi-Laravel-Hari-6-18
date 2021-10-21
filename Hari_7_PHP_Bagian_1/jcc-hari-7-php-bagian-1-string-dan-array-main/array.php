<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array</title>
</head>

<body>
    <h1>Berlatih Array</h1>

    <?php
    echo "<h3> Soal 1 </h3>";
    /* 
            SOAL NO 1
            Kelompokkan nama-nama di bawah ini ke dalam Array.
            Kids : "Mike", "Dustin", "Will", "Lucas", "Max", "Eleven" 
            Adults: "Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"
        */
    // Data Array 1
    $kids = ["Mike", "Dustin", "Will", "Lucas", "Max", "Eleven"];
    print_r($kids); // Lengkapi di sini
    // Data Array 1

    echo "<br>";

    // Data Array Kedua
    $adults = ["Hopper", "Nancy",  "Joyce", "Jonathan", "Murray"];
    print_r($adults);
    // Data Array Kedua

    echo "<h3> Soal 2</h3>";
    /* 
            SOAL NO 2
            Tunjukkan panjang Array di Soal No 1 dan tampilkan isi dari masing-masing Array.
        */
    echo "Cast Stranger Things: ";
    echo "<br>";
    $Total_Data_Kids = count($kids);
    echo "Total Kids: $Total_Data_Kids"; // Berapa panjang array kids
    echo "<br>";
    echo "<ol>";
    echo "<li> $kids[0] </li> <br>
    <li> $kids[1] </li> <br>
    <li> $kids[2] </li> <br>
    <li> $kids[3] </li> <br>
    <li> $kids[4] </li> <br>
    <li> $kids[5] </li> <br>";
    // Lanjutkan

    echo "</ol>";
    $Total_Data_Adults = count($adults);
    echo "Total Adults: $Total_Data_Adults"; // Berapa panjang array adults
    echo "<br>";
    echo "<ol>";
    echo "<li> $adults[0] </li><br>
    <li> $adults[1] </li><br>
    <li> $adults[2] </li><br>
    <li> $adults[3] </li><br>
    <li> $adults[4] </li><br>";
    // Lanjutkan

    echo "</ol>";

    echo "<h3> Soal 3 </h3>";
    /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array didalam Array Multidimensi
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"


            Output:
            Array
                (
                    [0] => Array
                        (
                            [Name] => Will Byers
                            [Age] => 12
                            [Aliases] => Will the Wise
                            [Status] => Alive
                        )

                    [1] => Array
                        (
                            [Name] => Mike Wheeler
                            [Age] => 12
                            [Aliases] => Dugeon Master
                            [Status] => Alive
                        )

                    [2] => Array
                        (
                            [Name] => Jim Hooper
                            [Age] => 43
                            [Aliases] => Chief Hopper
                            [Status] => Deceased
                        )

                    [3] => Array
                        (
                            [Name] => Eleven
                            [Age] => 12
                            [Aliases] => El
                            [Status] => Alive
                        )

                )
            
        */

    // Array Multidimensi
    $data_array_multidimensi = [
        ["Name" => "Will Byers", "Age" => "12", "Aliases" => "Will the Wise", "Status" => "Alive"],
        ["Name" => "Mike Wheeler", "Age" => "12", "Aliases" => "Dugeon Master", "Status" => "Alive"],
        ["Name" => "Jim Hooper",  "Age" => "43", "Aliases" => "Chief Hopper", "Status" => "Deceased"],
        ["Name" => "Eleven", "Age" => "12", "Aliases" => "El", "Status" => "Alive"]
    ];

    echo "<pre>";
    print_r($data_array_multidimensi);
    echo "</pre>"
    // Array Multidimensi

    ?>
</body>

</html>