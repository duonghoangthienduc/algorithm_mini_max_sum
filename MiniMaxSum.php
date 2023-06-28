<?php 

function miniMaxSum($arr){
    $maxSum = 0;
    foreach($arr as $key => $value){
        $maxSum += $value;
    }
    sort($arr);

    $miniMaxSum = $maxSum - $arr[0];

    $miniSum = $maxSum - $arr[count($arr)-1];

    return 'Mini Sum: ' . $miniSum . "\n" . 'Mini Max Sum: ' . $miniMaxSum;
}

$arr = [1, 2, 3 ,4];

echo miniMaxSum($arr);
?>