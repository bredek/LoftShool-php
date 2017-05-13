<?php
// task #1
function printArr($arr){
    foreach($arr as $value) {
        echo $value.'<br>';
    }
}
$arr = ['how', 'bow', 'hellow', 'mellow'];
printArr($arr);

// task #2
function mathtArr($arr, $operation){
    $res = $arr[0];
    for($i = 1, $l = count($arr); $i < $l; ++$i) {
        if($operation == '+'){
            $res += $arr[$i];
        } 
        
        if ($operation == '-'){
            $res -= $arr[$i];
        } 
        
        if ($operation == '*'){
            $res *= $arr[$i];
        } 
        
        if ($operation == '/'){
            $res /= $arr[$i];
        } 
    }
    return $res;
}
$arr = [1,2,3,4,];
echo mathtArr($arr, '-').'<br>';

// task #3
function mathArgs(){
    $numargs = func_num_args();
    $arg_list = func_get_args();
    $operation = func_get_arg(0);
    $res = $arg_list[$i];
    for ($i = 1; $i < $numargs; $i++) {
        if($operation == '+'){
            $res += $arg_list[$i];
        } 
        if ($operation == '-'){
            $res -= $arg_list[$i];
        } 
        
        if ($operation == '*'){
            $res *= $arg_list[$i];
        } 
        
        if ($operation == '/'){
            $res /= $arg_list[$i];
        } 
    }
    return $res;
}
echo mathArgs('+', 1, 2, 3, 5.2).'<br>';

#task #4
function tabl($var1, $var2){
    if(is_int($var1) and is_int($var2)){
        echo 'All ok with parameters <br>';
         for($i = 1; $i <= $var2; $i++){
            for($j = 1; $j <= $var1; $j++){
                echo $i * $j, ' ';
            }
            echo '<br>';
        }
    } else {
       echo 'Bad parameters <br>'; 
       exit();
    }
}
tabl(6,7);

// task #5
function sortArr(&$arr){
    sort($arr);
    return $arr;
}
$testArr = [1, 22, 5, 66, 3, 57];
print_r($testArr);
echo '<br>';
sortArr($testArr);
print_r($testArr);
echo '<br>';

#task #6
function recur($var1, $var2){
    $counter = $var1;
    while($counter <= $var2){
        if($counter%2==0){
            echo $counter.'<br>';
            $counter++;
            recur($counter, $var2);
        } else{
            $counter++;
        }
    } 
    echo 'Calculations done <br>';
    exit();
    
}

recur(10,35);
?>