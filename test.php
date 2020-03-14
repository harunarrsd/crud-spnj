<?php 
    $hari = array("Senin","Selasa","Rabu");
    $biodata = ['Aldy', 19, true];

    // var_dump($hari);
    // var_dump($biodata);
    // echo $hari[2];

    $mahasiswa = [
        "nama" => "Aldy",
        "nim" => 373647
    ];

    $mahasiswa_banyak = [
        [
            "nama" => "Aldy",
            "nim" => 43434,
            "nilai" => [
                90,90,100
            ]
        ],
        [
            "nama" => "Harun",
            "nim" => 12345432,
            "nilai" => [
                90,70,80
            ]
        ]
    ];

    // var_dump($mahasiswa);
    // var_dump($mahasiswa_banyak);
    // echo $mahasiswa["nim"];
    // echo "<br>";
    // echo $mahasiswa["nama"];
    // echo $mahasiswa_banyak[0]["nilai"][2];

    var_dump($_GET);
?>