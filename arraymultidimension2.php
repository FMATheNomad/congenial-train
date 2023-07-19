<?php
$negaraDanIbukota = [["Indonesia", "Jakarta"], ["Malaysia", "Kuala Lumpur"], ["Brunei Darusalaam", "Bandar Seri Begawan"], ["Filipina", "Manila"], ["Singapura", "Singapura"], ["Thailand", "Bangkok"], ["Vietnam", "Hanoi"], ["Kamboja", "Phnom Penh"], ["Laos", "Vientiane"], ["Myanmar", "Nyapyidaw"], ["Timor Leste", "Dili"]];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Negara Asean beserta Ibukotanya</title>
</head>

<body>
    <h1><u>Daftar Negara ASEAN beserta Ibukotanya</u></h1>
    <?php foreach ($negaraDanIbukota as $asean): ?>
        <ul>
            <li><u>Negara:</u>
                <?= "$asean[0]" ?>
            </li>
            <li><u>Ibukota:</u>
                <?= "$asean[1]" ?>
            </li>
        </ul>
    <?php endforeach; ?>
</body>

</html>