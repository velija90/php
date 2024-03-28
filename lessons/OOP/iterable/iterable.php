<?php
function printIterable(iterable $myIterable){
    foreach($myIterable as $item){
        echo $item."";
    }
}

$arr = ["a","b","c"];
?>
<br><br>
<?php

function getterable():iterable{
    return ["a","b","c"];
}

$myIterable = getIterable();
foreach($myIterable ad $item){
    echo $item;
}
?>