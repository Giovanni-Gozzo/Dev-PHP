<?php
$a=0;
$b=0;
while($a!="."){
    $a=fgetc(STDIN);
    if($a=="m"){
        $b=$b+1;
    }
}
echo("***$b***");
