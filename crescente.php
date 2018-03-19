<?php  
$ndn=rand(5,255);
$nrs=array();


for ($i=0; $i <$ndn ; $i++) { 
	$nrs[]=rand(1,1000);
}


$aux2=$nrs;
$menor=$nrs[0];


for ($j=0; $j <sizeof($nrs) ; $j++) { 
	for ($k=0; $k <sizeof($nrs) ; $k++) { 
	if ($nrs[$j]<$nrs[$k]) {
		$aux=$nrs[$j];
		$nrs[$j]=$nrs[$k];
		$nrs[$k]=$aux;
		}
	}
}	

print("\n	   array inicial : ");
for ($l=0; $l <sizeof($aux2)-1 ; $l++) { 
	print($aux2[$l]." , ");
}
print($aux2[sizeof($aux2)-1]."\n");
print("\narray em ordem crescente : ");
for ($m=0; $m <sizeof($nrs)-1 ; $m++) { 
	print($nrs[$m]." , ");
}
print($nrs[sizeof($nrs)-1]."\n\n");
print("\n\nTAMANHO DO ARRAY == ".$ndn."\n\n");
