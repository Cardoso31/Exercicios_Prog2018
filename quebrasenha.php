<?php
include("revisao.php");

echo "diz ai umn numero da tua senha \n";

$senhadada=fgets(STDIN);

$volta=quebrasenha($senhadada);
print("\n".$volta."\n");


