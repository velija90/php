<?php
        //Shembulli 1
			//Te tregohet nese 5 eshte me i vogel se 10 permes kushteve
			$x = 51;
			
			if($x < 10)
			{
				echo "$x eshte me i voges se 10";
			}
			else
			{
				echo "$x eshte me i madh se 10";
			}
		?>
        <br>
		<?php
            //Shembulli 2
			$y = 16;
			
			if($y <= 10)
			{
				echo "$y eshte me i vogel se 10";
			}
			else if($y >= 20)
			{
				echo "$y eshte me i madh ose i barabart me 20";
			}
			else
			{
				echo "$y eshte ne mes te 10 dhe 20";
			}
		?>


        <br>
        
        <?php

        $a = 50;  $b = 70; $c = 40; 
        if($a > $b && $a > $c){
            echo "A eshte me e madhe";
        }
        
        else if($b > $a && $b > $c){
            echo "B eshte me e madhe";
        }
        else{
            echo "C eshte me e madhe";
        }

        ?>
<br>
<?php

$a = 150;  $b = 80; $c = 40; 
if($a > $b){
    if($a > $c){
        echo "A eshte me e madhe";
    }
    else{
        echo "C eshte me e madhe";
    }
}
else{
    if($b > $c){
        echo "B eshte me e madhe";
    }
    else{
        echo "C eshte me e madhe";
    }
}

 


?> <br>
<?php 
            //Shembulli 5
			$z = 20;
			
			switch($z)
			{
				case 1:
					echo 'Janar';
				break;
				case 2:
					echo 'Shkurt';
				break;
				case 3:
					echo 'Mars';
				break;
				case 4:
					echo 'Prill';
				break;
				case 5:
					echo 'Maj';
				break;
				case 6:
					echo 'Qershor';
				break;
				case 7:
					echo 'Korrik';
				break;
				case 8:
					echo 'Gushte';
				break;
				case 9:
					echo 'Shtator';
				break;
				case 10:
					echo 'Tetor';
				break;
				
				case 11:
					echo 'Nentor';
				break;
				
				case 12:
					echo 'Dhjetor';
				break;
				
				default:
					echo 'Ky muaj nuk egziston!';
			}
		?>