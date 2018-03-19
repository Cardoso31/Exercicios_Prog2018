<?php  
$nrs1=array();
$nrs2=array();
$op=array();
$res=array();

for ($i=0; $i <3 ; $i++) { 
	$nrs1[]=rand(1,100);
	$nrs2[]=rand(1,100);
}
for ($i=0; $i <4 ; $i++) { 
	$op[]=rand(1,4);
}
for ($j=0; $j < 4; $j++) { 
	if ($op[$j]==1) {
		$res[]=$nrs1[$j] + $nrs2[$j];

	}elseif ($op[$j]==2) {
		$res[]=$nrs1[$j] - $nrs2[$j];

	}elseif ($op[$j]==3) {
		$res[]=$nrs1[$j] * $nrs2[$j];

	}elseif ($op[$j]==4) {
		$res[]=$nrs1[$j] / $nrs2[$j];
	}
}
print_r($res);

// codigo em edição...



?>