<html>
<head>
	<title>Web Programming 2</title>


	<style type="text/css">
	html {font-family: Helvetica Neue; font-weight: lighter;}
	h4 {font-family: Helvetica Neue; font-weight: lighter; color: #fff; background-color: #2f2f31; padding: 10px; width: 400px;}
	ul {background-color: #dedede; border-radius: 5px; width: 300px; height: 40px; padding: 20px;}
	li {display: inline; margin-right: 20px; text-transform: uppercase; text-decoration: underline; color: #333; letter-spacing: 3px;}
	
	</style>
</head>



<?php 

	
		$Make=array("Holden", "Toyota", "Honda");
		$Model=array("Commodore", "Celica", "Civic");
		$Year=array(2010, 2012, 2009);
		$Price=array(21000, 25000, 19000);
		

		$arrlength=count($Make);
		$arrlength=count($Model);
		$arrlength=count($Year);
		$arrlength=count($Price);

		echo "<h4>There are "."$arrlength"." records in each array<br>These records are:</h4>";
		

		echo "<li>Make</li>";
		echo "<li>Model</li>";
		echo "<li>Year</li>";
		echo "<li>Price</li>";
		echo "<br>";
		for ($x=0; $x <$arrlength; $x++) {
			
			echo "<b>".$Make[$x]."</b> || ";
			echo $Model[$x]." || ";
			echo $Year[$x]." || ";
			echo "$".$Price[$x];
			echo "<br><br>";
			
		}
		



		echo "<h4>Now, sorted by Price in descending order:</h4>";

		rsort($Price);

			echo "<li>Make</li>";
		echo "<li>Model</li>";
		echo "<li>Year</li>";
		echo "<li>Price</li>";
		echo "<br>";

		for ($x=0; $x <$arrlength; $x++) { 
			echo "<b>".$Make[$x]."</b> || ";
			echo $Model[$x]." || ";
			echo $Year[$x]." || ";
			echo "$".$Price[$x];
			echo "<br><br>";
		}

		function stampDuty (&$Price)
		{	

			for ($i=0; $i !=count($Price); $i++) { 
				$newCost[$i] = $Price[$i] * 0.03;

				
				echo "<ul>";
				echo "The stamp duty for this car: ";
				echo "$".$newCost[$i]."<br>";
				echo "The new total cost for this car: ";
				echo "$";
				echo $newCost[$i] + $Price[$i];

				echo "</ul>";
			}


			
		}



		stampDuty($Price);


	
?>


</html>