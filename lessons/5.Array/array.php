<?php
$x = array(2,3,4,5,6,7,8,9);
sort($x);
print_r($x);
echo "<br>";

$y = count($x);
for($z = 0; $z < $y; $z++)
{
    echo $x[$z];
    echo "<br>";
}
?>
<h3>rsort()</h3>
		<?php
			$x = array(2,43,65,4,7,2,12,3,9,8);
			rsort($x);
			// sort($x);

			$y = count($x);
        
			for($z=$y-1;$z>=0;$z--)
			{
				echo $x[$z];
				echo "<br>";
			}
            
        //Vazhdim...
		?>
    
        
		<h3>asort()</h3>
		<?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//asort()-mundeson renditjen e elementeve ne baze te vleres.
			
            $mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
        
			asort($mosha);
        
			foreach($mosha as $x => $x_value)
			{
				echo $x ." - ". $x_value;
				echo "<br>";
			}
		?>
        
        
		<h3>ksort()</h3>
		<?php
		//ksort()-mundeson renditjen e ementeve ne baze te qelesit. 
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			ksort($mosha);
        
			$mosha1 = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
        
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>
		<h3>arsort()</h3>
		<?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//arsort()-mundeson renditjen e ementeve ne baze te vleres nga fundi ne fillim.
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			arsort($mosha);
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>
		<h3>krsort()</h3>
		<?php
		//Associative Arrays - mund te renditen edhe nga fillimi edhe nga fundi.
		//krsort()-mundeson renditjen e ementeve ne baze te qelesit nga fundi ne fillim. 
			$mosha = array("Arianit"=>"26", "Florian"=>"27", "Roni"=>"26");
			krsort($mosha);
			foreach($mosha as $x => $x_value)
			{
				echo $x ." ". $x_value;
				echo "<br>";
			}
		?>







$txt = Array("Prizren","Prishtine",Digjitale);
			rSort($txt);
        
			$y = count($x);
        
			for(z=0; z<y; z++)
			{
				echo $x[1];
				echo "<br>";
			}