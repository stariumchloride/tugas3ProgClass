<?php

$ujian = [
    [
        "nama" => "Upin",
        "nilai" => 80,
    ],
    [
        "nama"=>"Ipin",
        "nilai" => 85,
    ],
    [
        "nama" => "Ehsan",
        "nilai" => 70,
    ],
    [
        "nama" => "Fizi",
        "nilai" => 75,
    ],
    [
        "nama" => "Mail",
        "nilai" => 30,
    ],
    [
        "nama" => "Mei Mei",
        "nilai" => 90,
    ],
    [
        "nama" => "Susanti",
        "nilai" => 95,
    ],
    [
        "nama" => "Dzul",
        "nilai" => 70,
    ],
    [
        "nama" => "Ijat",
        "nilai" => 100,
    ],
    [
        "nama" => "Jarjit",
        "nilai" => 60,
    ],
    [
        "nama" => "Devi",
        "nilai" => 75,
    ],
    [
        "nama" => "Nurul",
        "nilai" => 50,
    ],
    [
        "nama" => "Asep",
        "nilai" => 90,
    ],
    [
        "nama" => "Budi",
        "nilai" => 40,
    ],
    [
        "nama" => "Cecep",
        "nilai" => 65,    
    ],
    ];

function nilai4($nilai){
    echo $nilai/25;
}

function predikat($nilai){
    if($nilai >= 80) {
        echo "A";
    } elseif ($nilai >= 70){
        echo "B";
    } elseif ($nilai >= 60) {
        echo "C";
    } elseif ($nilai >= 50) {
        echo "D";
    } else{
        echo "E";
    }
}

function kelulusan($nilai){
    if($nilai >= 60){
        echo "Lulus";
    }else{
        echo "Tidak Lulus";
    }
}

$nilai_rekap = [80, 85, 70, 75, 30, 90, 95, 70, 100, 60, 75, 50, 90, 40, 65];

function rataRata($nilai_rekap){
    $rata = 0;
    for ($i = 0; $i < count($nilai_rekap); $i++){
        $rata += $nilai_rekap[$i];
    }
    $rata /= count($nilai_rekap); 
    return $rata;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3 Programming Class</title>
</head>
<body>
<table border>

        <thead>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai Skala 100</th>
            <th>Nilai Skala 4</th>
            <th>Predikat</th>
            <th>Kelulusan</th>
        </thead>

        <tbody>

            <?php foreach($ujian as $key => $value): ?>
                <tr>

                    <td> <?= $key+1 ?> </td>
                    <td> <?= $value['nama'] ?> </td>
                    <td> <?= $value['nilai'] ?> </td>

                    <td>
                        <?= nilai4($value['nilai']) ?>
                    </td>

                    <td>
                        <?= predikat($value['nilai']) ?>
                    </td>

                    <td>
                        <?= kelulusan($value['nilai']) ?>
                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>   
    </table>

    <h3>
        <?php echo 'Rata-rata nilai ujian TK Tadika Mesra adalah = ' . rataRata($nilai_rekap); ?>;
    </h3>

</body>
</html>