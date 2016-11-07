<?php

/*echo 'SCRIPT_NAME'.' does '.$_SERVER['SCRIPT_NAME'];
echo "<br>";
echo 'AUTH_TYPE'.' does '.$_SERVER['AUTH_TYPE'];
$error = 100;
if ($error > 0)
{
    echo 100;
}
else
{
    echo 0;
}
*/

function people($name,$surname,$age){
 $new='My name is '.$name.' '.$surname." . I'm ".$age." years old";
    return $new;
}

people ($name,$surname,$age);