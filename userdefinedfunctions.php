<?php
function salam($name = "Admin")
{
    $time = date("H:i"); // Mendapatkan waktu saat ini dalam format jam:menit

    // Mendapatkan jam dalam format angka
    $hour = date("H");

    // Logika untuk menentukan ucapan berdasarkan waktu
    if ($hour >= 5 && $hour < 12) {
        $greeting = "pagi";
    } elseif ($hour >= 12 && $hour < 18) {
        $greeting = "siang";
    } else {
        $greeting = "malam";
    }

    return "Selamat $greeting, $name!";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
        <?= salam("Fariz"); ?>
    </h1>
</body>

</html>