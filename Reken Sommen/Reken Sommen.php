<?php
?><BR></BR> <?php
echo"Alles in één regel code!!!\n";
$x=1;$y=21;$sum=$x+$y;echo $sum,"\n\n";
?><BR></BR> <?php
echo"En nu alle code op eigen regels\n";
$x=1;
$y=21;
$sum=$x+$y;
echo $sum,"\n\n";
?><BR></BR> <?php
echo"En nu met extra wit ruimte voor de leesbaarheid\n";
$x      =   1;
$y      =   21;
$sum    =   $x + $y;
echo    $sum, "\n\n";
?><BR></BR> <?php
echo"En nu met line breaks de leesbaarheid, php negeerd dit omdat de ; de line break is\n";
$x      =   1;
$y      =   21;
$sum    =   $x +
            $y;
echo    $sum, "\n\n";

?>