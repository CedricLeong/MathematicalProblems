<?php
function SumOfPrimes() {
$primes = array();
$isPrime = false;
array_push($primes, 2);
$i = 2;
while (count($primes) < 1000){
  $i++;
  foreach ($primes as $value) {
		if($i % $value == 0){
      $isPrime = false;
			break;}
		else{
      $isPrime = true;
        }          
	}
  if ($isPrime)
  {
     array_push($primes, $i);
     $isPrime = false;
  }
}
$sum = 0;
$primes = array_unique($primes);
foreach ($primes as $value) {
		$sum = $sum + $value;
	}
      echo $sum;

}

SumOfPrimes(); // call the function
?>