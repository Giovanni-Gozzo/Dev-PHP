<?php
$a=0;
$b=0;
while($a!="."){
    $a=fgetc(STDIN);
    if($a=="l"){
        $a=fgetc(STDIN);
        while($a=="l"){
            $a=fgetc(STDIN);
        }
        if($a=="e"){
            $b=$b+1;
        }
    }
}
echo("***$b***");
