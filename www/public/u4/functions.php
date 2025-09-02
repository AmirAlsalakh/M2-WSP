<?php
function div($n1, $n2)
{
    
    if ($n2 == 0) {
        return(false);
    } else {
        $div = $n1 / $n2;
        return ($div);
    }
}

function sub($n1, $n2)
{
    $sub = $n1 - $n2;
    return ($sub);
}
