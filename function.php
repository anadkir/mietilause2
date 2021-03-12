<?php
$name = "";
$date = "";
$text = "";

$mysqlConnect =
    mysqli_connect("localhost", "kurssi", "kood10tus", "php2021");

if (mysqli_connect_errno()) {
    echo "Yhteysvirhe tietokantaan: " . mysqli_connect_error();
}

mysqli_set_charset($mysqlConnect, "utf8mb4");

$search = "SELECT * FROM anastasiia_mietilause ORDER BY RAND() LIMIT 1";
$result = mysqli_query($mysqlConnect, $search)
or die("Virhe: " . mysqli_error($mysqlConnect));

$row = mysqli_fetch_array($result);

$name = $row["alkupera"];
$date = DateTime::createFromFormat('Y-m-d',$row['paivamaara'])->format('d-m-Y');
$text = $row["mietilause"];
$type = $row["aihe"];

if($type == "Romantiikka"){
    $bgColor = "#dbbdbb";
}elseif($type == "Filosofia"){
    $bgColor = "#c0ced1";
}elseif($type == "Tiede"){
    $bgColor = "#dcf4ef";
}elseif ($type == "Huumori"){
    $bgColor = "#FF9966";
}else{
    $bgColor = "#CCCCFF";
}

mysqli_close($mysqlConnect);