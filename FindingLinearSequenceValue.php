<?php 

class FindingLinearSequenceValue
{
    
    function term($n) {
        return Math.pow($n, 2) - $n + 3;
    }
    
    
    
}
$myobj = new FindingLinearSequenceValue();
$n1 = 5;
$n2 = 6;
$n3 = 7;

echo($myobj->term($n1));
echo($myobj->term($n2));
echo($myobj->term($n3));


?>

