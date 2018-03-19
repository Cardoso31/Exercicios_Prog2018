<?php  

$num=array();
$exti=array();

for ($i=0; $i <5 ; $i++) { 
$num[]=rand(1,100);
}
for ($l=0; $l <5 ; $l++) { 
	$exti[]=$num[$l];
}

$menor=$num[0];

	for ($k=0; $k <5 ; $k++) { 
		if ($num[$k]<$menor) {
			$menor=$num[$k];
		}
	}
print('O array é formado por :');
for ($m=0; $m <4 ; $m++) { 
	print($exti[$m]." , ");
}

print($exti[4]."\n");
 print("\n O menor valor é ".$menor."\n");
?>