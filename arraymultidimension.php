<?php
$negara = [["Indonesia", "Malaysia", "Singapura", "Thailand", "Brunei Darussalaam", "Filipina", "Vietnam", "Laos", "Kamboja", "Myanmar"]];
$ibukota = [["Jakarta", "Kuala Lumpur", "Kota Singapura", "Bangkok", "Bandar Seri Begawan", "Manila", "Hanoi", "Vientine", "Phnom Penh", "Nyapyidaw"]];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Negara Asean</h1>
    <h2><u>Negara</u></h2>
    <?php foreach ($negara as $country): ?>
        <ul>
            <li>
                <?= "$country[0]" ?>
            </li>
            <li>
                <?= "$country[1]" ?>
            </li>
            <li>
                <?= "$country[2]" ?>
            </li>
            <li>
                <?= "$country[3]" ?>
            </li>
            <li>
                <?= "$country[4]" ?>
            </li>
            <li>
                <?= "$country[5]" ?>
            </li>
            <li>
                <?= "$country[6]" ?>
            </li>
            <li>
                <?= "$country[7]" ?>
            </li>
            <li>
                <?= "$country[8]" ?>
            </li>
            <li>
                <?= "$country[9]" ?>
            </li>
        </ul>
    <?php endforeach; ?>
    <h2><u>Ibukota</u></h2>
    <?php foreach ($ibukota as $capital): ?>
        <ul>
            <li>
                <?= "$capital[0]" ?>
            </li>
            <li>
                <?= "$capital[1]" ?>
            </li>
            <li>
                <?= "$capital[2]" ?>
            </li>
            <li>
                <?= "$capital[3]" ?>
            </li>
            <li>
                <?= "$capital[4]" ?>
            </li>
            <li>
                <?= "$capital[5]" ?>
            </li>
            <li>
                <?= "$capital[6]" ?>
            </li>
            <li>
                <?= "$capital[7]" ?>
            </li>
            <li>
                <?= "$capital[8]" ?>
            </li>
            <li>
                <?= "$capital[9]" ?>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>