<?php
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: navy;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            color: white;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < 7; $i++): ?>
        <div class="kotak">
            <?= "$arr1[$i]" ?>
        </div>
    <?php endfor; ?>
    <div style="clear: both;"></div>
    <br>
    <?php for ($i = 0; $i < count($arr1); $i++): ?>
        <div class="kotak">
            <?= "$arr1[$i]" ?>
        </div>
    <?php endfor; ?>
    <div style="clear: both;"></div>
    <br>
    <?php foreach ($arr1 as $a): ?>
        <div class="kotak">
            <?= "$a"; ?>
        </div>
    <?php endforeach; ?>
</body>

</html>