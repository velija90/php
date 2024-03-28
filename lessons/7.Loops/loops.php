<?php
$y = 0;
while($y <= 11)
    {
    echo $y."<br>";
    $y++;
    if($y == 8)
    {
     break;
    }
}
?>
<br><br>
<?php
$y = 0;

    do{
    echo $y."<br>";
    $y++;
    if($y == 3)
    {
     break;
    }
}
while($y <= 11);
?>

<?php
$txt = array(2,3,33,42,7,62,8,95,62);
sort($txt);
foreach($txt as $x){
    echo "$x <br>";
}
?>
<?php
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        echo $y. " ";
    }
    echo  "<br> ";
}
?>
<br>
<?php
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        echo $x." ";
    }
    echo "<br>" ;
}
?>
<br>

<?php
$z=1;
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        echo $z." ";
        $z++;
    }
    $z=$x+1;
    echo "<br>" ;
}
?>
<br>
<br>      
<?php
for($x=1;$x<=5;$x++){
    for($y=1;$y<=$x;$y++){
        echo "*"." ";
    }
    echo "<br>" ;
}
?>
<br>
<?php
for($x=5;$x>=1;$x--){
    for($y=1;$y<=$x;$y++){
        echo "*"." ";
    }
    echo "<br>" ;
}
?>
<br>
<?php
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        if($x == $y){
            echo "X"."";
        }
        else{
            echo "0"." ";
        }
    }
    echo "<br>" ;
}
?>
<br>
<?php
for($x=5;$x>=1;$x--){
    for($y=1;$y<=5;$y++){
        if($x == $y){
            echo "X"."";
        }
        else{
            echo "0"." ";
        }
    }
    echo "<br>" ;
}
?>
<br>
<?php
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        if($x !== $y || $x !== $y){
            echo "X"." ";
        }
        else{
            echo "0"." ";
        }
    }
    echo "<br>" ;
}
?>
<?php
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        if($x == $y || $x + $y ==6 || $y == 1 || $x == 1 || $y == 3|| $x == 5 ){
            echo "X"."";
        }
        else{
            echo "0"." ";
        }
    }
    echo "<br>" ;
}
?>
<br><br>
<?php
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        if($x == 1 || $x + $y ==6 || $y == 3 || $x==5){
            echo $y." ";
        }
        else{
            echo "0"." ";
        }
    }
    echo "<br>" ;
}
?>
<br><br>
<?php
for($x=1;$x<=5;$x++){
    for($y=1;$y<=5;$y++){
        if($x == 1 || $y == 1 || $y == 2){
            echo "X"." ";
        }
        else{
            echo "0"." ";
        }
    }
    echo "<br>" ;
}
?>