<?php

//int => inteiro
//float => decimal
//boleano => logico (verdadeiro ou falso)
//String => texto
$teste=0;
$rand=rand(1,42);
do{
    echo "chuta ai um numero \n";
    $chute=(int)fgets(STDIN);

    if($chute==$rand){
    echo "Você ganhou hehe\n ";
    $teste=0;
}else{
    $teste=1;
    echo "Agora sim...você perdeu otaro\no numero é ".$rand."\n";
    if($chute > $rand){
        echo " \nChutou alto\n";
    }else{
        echo " \nChute baixo\n";
    }
}
}while ($teste==1);


/*Isso é so pra outro arquivo */

/*
function quebrasenha($senha){
    $testa=0;
    while ($testa!=$senha){
    print($testa." ");
    $testa++;
    }
    return $testa;
}
*/

?>



