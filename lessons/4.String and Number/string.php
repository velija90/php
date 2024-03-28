

<?php

echo strlen("Prizren")


?>

<?php
echo str_word_count('Shkolla Digjitale Prizren t')


?>
<?php
echo strrev("Drilon")

?>
<?php
$pozicioni= strpos('Shkolla Digjitale Prizren','Shkolla ');
$pozicion2= strpos('Shkolla Digjitale Prizren','Prizren ');

echo  $pozicioni.'<br>';
echo  $pozicion2;

?>


<?php
$emri="Shkolla Digjitale Prizren','<br>'";
$ndrroje= str_replace('prizren','Suhareka',$emri);


echo  $emri.'<br>';
echo  $ndrroje;

?>
