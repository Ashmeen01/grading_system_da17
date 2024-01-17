<?php

$score = 60;

if($score > 69 && $score <= 100){
    echo 'A';
}elseif($score > 59 && $score <= 69 ){
    echo 'B';
}elseif($score > 49 && $score <= 59){
    echo 'C';
}elseif($score > 44 && $score <= 49){
    echo 'D';
}elseif($score > 39 && $score <= 44){
    echo 'E';
}elseif($score < 40){
    echo 'F';
}else{
    
    echo '<br>' . ('Invalid score');
}

