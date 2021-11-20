<?php
    $nama = ["Satria", "Arsyi", "Dhika", "Evan", "Fabian", "Irfan"];
    print_r($nama);
    echo "<br />";
    echo "<br />";
    $nama2 = 
    [
        ["Nama" =>"Satria", 
        "Kelas" =>"Rpl 1"],
        ["Nama" => "Arsyi",
        "Kelas" => "Rpl 2"],
        ["Nama" => "Dhika",
        "Kelas" => "Rpl 3"],
        ["Nama" => "Evan",
        "Kelas" => "Rpl 4"],
        ["Nama" => "Fabian",
        "Kelas" => "Rpl 5"],
        ["Nama" => "Irfan",
        "Kelas" => "Rpl 6"],
    ];
    print_r($nama2);

    echo "<br />";
    echo "<br />";
    echo "Nama : ","<b>",$nama2[0]["Nama"], "</b>", " Kelas : ", "<b>", $nama2[0]["Kelas"],"</b>";
    echo "<br />";
    echo "Nama : ","<b>",$nama2[1]["Nama"], "</b>", " Kelas : ", "<b>", $nama2[1]["Kelas"],"</b>";
    echo "<br />";
    echo "Nama : ","<b>",$nama2[2]["Nama"], "</b>", " Kelas : ", "<b>", $nama2[2]["Kelas"],"</b>";
    echo "<br />";
    echo "Nama : ","<b>",$nama2[3]["Nama"], "</b>", " Kelas : ", "<b>", $nama2[3]["Kelas"],"</b>";
    echo "<br />";
    echo "Nama : ","<b>",$nama2[4]["Nama"], "</b>", " Kelas : ", "<b>", $nama2[4]["Kelas"],"</b>";
    echo "<br />";
    echo "Nama : ","<b>",$nama2[5]["Nama"], "</b>", " Kelas : ", "<b>", $nama2[5]["Kelas"],"</b>";
?>
