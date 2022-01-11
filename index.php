<?php error_reporting(-1);
// В  массив  А(N),  упорядоченный  по  возрастанию,  вставить   k  элементов, не нарушая его последовательности.
$A = [1, 2, 3, 5, 7, 9, 12, 14, 16 ,19];
$B = [7, 9, 6, 8];

echo("A(n):<br>");
print_r($A);
echo("<br>B(n):<br>");
print_r($B);
echo("<br>Result:<br>");
$a = make_this($A, $B);
print_r($a);

function search_max_val($array){  // ищет максимальное значение 
    $maxval = $array[0];
    $maxpos = 0;
    for($i = 0; $i < count($array); $i++){
        if($array[$i] > $maxval){
            $maxval = $array[$i];
            $maxpos = $i;
        }
    }   
    return [$maxval, $maxpos];
}

function delete_elem($array, $index){ // удаляет элемент из массива 
    $res = [];
    $n = 0;
    for($i = 0; $i < count($array); $i++){
        if($i == $index){
            continue;
        }else{
            $res[$n] = $array[$i];
            $n++;
        }
    }
    return $res;
}

function add_elem($array, $index, $value){ //добавляет элементв массив в определенное место, сдвигая последующие
    $res = [];
    $n = 0;
    for($i = 0; $i < count($array); $i++){
        if($n == $index){
            $res[$n] = $value;
            $i--;
            $n++;
        }else{
            $res[$n] = $array[$i];
            $n++;
        }
    }
    return $res;
}

function make_this($arraya, $arrayb){    //выполняет задание 
    $arr = $arraya;
    $arradd = $arrayb;
    for($i = 0; $i < count($arradd); $i++){
        for($n = 0; $n < count($arr); $n++){
            if($arr[$n] >= $arradd[$i]){
                $arr = add_elem($arr, $n, $arradd[$i]);
                break;
            }
        }
    }
    return $arr;
}