<?php 
$str = 'IBTESAM';
$var = array();

$words_len = strlen($str);

// for ($i=0; $i <=6 ; $i++) 
// { 
// 	for ($j=$words_len; $j>=$words_len-$i ; $j--) 
// 	{ 
// 		# code...
// 		echo "<br>value of J is : ".$j;
// 		echo "<br>value of I is : ".$i;
// 		$var[$j] = $str[$i];
// 		echo "<br>";
// 		print_r($var);
// 	}

// 	echo "<br><br><br>Eng of internal array";
// }
$cnt =0;
for ($i=6; $i >=0 ; $i--) 
{ 
	// for ($j=0; $j<=6 ; $j++) 
	// { 
	// 	# code...
	// 	echo "<br>value of J is : ".$j;
	// 	echo "<br>value of I is : ".$i;
		$var[$i] = $str[$i];
	// 	echo "<br>";
	// 	print_r($var);
	// 	$cnt++;
	// }

	// echo "<br><br><br>Eng of internal array";
}

// $var = explode(",", $str);
print_r($var);


// for ($i=$words; $i=0 ; $i--) 
// { 
// 	# code...
// 	echo $str[$i];
// }


// foreach ($str as  $value) 
// {
// 	# code...
// 	echo "<br>".$value;
// }
?>