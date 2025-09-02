<?php 
function cleanData($data){
    $data = strip_tags($data);
    $data = stripslashes($data);
    return($data);
}

?>