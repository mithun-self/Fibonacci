<?php
$final = 0;
$fibo = 1;
$fibo_o1 = 1;
$fibo_02 = 1;

while (1) {
	
	$fibo_o1 = $fibo_02;
	$fibo_02 = $fibo;
    $fibo = $fibo_o1 + $fibo_02;
    if($fibo > 4000000){
        break;
    }
	//echo $fibo.'\n';
	if ($fibo % 2 == 0) {
        //echo "even";
		$final += $fibo;
        //echo $final.'\n';
	}
}

echo $final;
?>
