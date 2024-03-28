<?php
echo "sot eshte ". date("d/m/Y"). "<br>";
echo "sot eshte ". date("d.m.Y"). "<br>";
echo "sot eshte ". date("d-m-Y"). "<br>";
echo "sot eshte ". date("l");
?>

&copy; 2008-<?php echo date("Y");
?>

<?php
echo "ora eshte ". date("h:i:sa"). "<br>";
echo "ora eshte ". date("H:i:s"). "<br>";
?>

<?php
$date=mktime(01, 16, 11, 11, 16, 2008);
echo date("Y-m-d H:i:s", $date);

