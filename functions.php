<?= date("l, d-m-y") ?>
<?php echo "<br>" ?>
<?= date("d-m-y") ?>
<?php echo "<br>" ?>
<?= date("h:m:s") ?>
<?php echo "<br>" ?>
<?php
$timestamp = time();
echo $timestamp;
?>
<?php echo "<br>" ?>
<?php
$strtotime = strtotime('18-07-2023');
echo $strtotime;
?>
<?php echo "<br>" ?>
<?php
$getdate = time();
$dateInfo = getdate($getdate);
print_r($dateInfo);
?>
<?php echo "<br>" ?>
<?php
$strtotimestamp = strtotime('now');
echo $strtotimestamp;
?>