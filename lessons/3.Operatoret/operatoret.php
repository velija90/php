<h3>operatoret aritmetik </h3>
<?php

    $x=10;
        $y= 20;
echo $x  + $y;
echo "<br>";

echo $x - $y;
echo "<br>";
 
echo $x * $y;
echo "<br>";

 
echo $x / $y;
echo "<br>";

 
echo $x % $y;
echo "<br>";


?>




<h3>Operatoret Percaktues</h3>
        
        <?php
			$x = 10;
			$y = 20;
			
			//echo $x = $y;  // x = y
            echo "<br>";
            echo $x += $y;  // x += y; x = x+y
            echo "<br>";
            echo $x -= $y;
            echo "<br>";
            echo $x *= $y;
            echo "<br>";
            echo $x /= $y;
            echo "<br>";
            echo $x %= $y;
		?>
        
        <h3>Operatoret Krahasues</h3>
        
        <?php
			$x = 20;
			$y = '20';
			
			echo $x == $y;
            echo "<br>";
            var_dump($x==$y);
            echo "<br>";
            echo $x === $y;
            echo "<br>";
            var_dump($x===$y);
            echo "<br>";
            echo $x != $y;
            var_dump($x!=$y);
            echo "<br>";
            echo $x <> $y;
            echo "<br>";
            var_dump($x <> $y);
            echo "<br>";
            echo $x > $y;
            echo "<br>";
            echo $x < $y;
            echo "<br>";
            echo $x >= $y;
            echo "<br>";  
            echo $x <= $y;
            echo "<br>";
		?>
        


<h3>operatort logjike </h3>
        <?php 
    $x = 11;
    $y = 35;
        
    $z = ($x > 5 and $x < 30) ;
    echo $z;
    echo "<br>";
    var_dump($z);

    echo "<br>";
    $a = ($x > 10 or $x < 30) ;
    echo $z;
    var_dump($a);
    echo "<br>";
    $b = !($x > 10 and $x < 30) ;
    echo $z;
   
    var_dump($b);
    echo "<br>";
        
    $c = !($x > 10 xor $x < 30) ;
    echo $z;
   
    var_dump($c);

        
        
        
        ?>








<?php 
    $x= 10;
    $y= 20;


    echo $x++;
echo "<br>";
    echo $x;
echo "<br>";
echo ++$x;

echo "<br>";
echo "<br>";

echo $x--;
echo "<br>";
    echo $x;
echo "<br>";
echo --$x;









?>