<?php

function type($watIs){
    $watIs = gettype($watIs);
    return "De waarde is {$watIs}.<br>";
}

echo type('lol');
echo type(true);
echo type(1.3);
echo type(3);
echo type(['lol']);
?>