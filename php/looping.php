<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soal looping</h1>

    <?php
    echo "<h4>soal 1</h4>";

    echo "<h5>looping pertama</h5>";;

    $start_number = 1;
    while($start_number <=19){
        echo $start_number . "- Angka Ganjil <br>";
        $start_number+=2;
    }

    echo "<h5>looping kedua</h5>";

    $last_number = 19;
    while($last_number >=1){
        echo $last_number . "- Angka Ganjil <br>";
        $last_number-=2;
    }


    echo "<h4> Soal 2</h4>";
    $numbers = [18, 45, 29, 61, 47, 34] ;
        echo "array numbers : ";
        print_r ($numbers);
        // Lakukan Looping di sini
        foreach($numbers as $number){
            $rest[]=$number%7;
        }
        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        echo "<br>";
        print_r($rest);

    echo "<h4> Soal 3</h4>";
    $football_club = [
        ["001","milan","italia"],
        ["002","juventus","italia"],
        ["003","inter","italia"],
    ];
    
    foreach ($football_club as $value) {
        $data = [
            "id"=> $value[0],
            "name"=> $value[1],
            "location"=> $value[2],
        ]

        print_r($data);
        echo "<br>";
    };

    echo "<h4> Soal 4</h4>";
    for ($i=1; $i <=5 ; $i++) { 
        for ($j=$i; $j <=5 ; $j++) { 
            echo "*";
        }
        echo "<br>";
    }
    ?>
</body>
</html>