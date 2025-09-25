<?php
function add($a, $b) {
    return $a + $b; // OK
}

function divide($a, $b) {
    return $a / $b; // 🚨 no check for divide by zero
}

echo divide(10, 0); // Bug
?>
