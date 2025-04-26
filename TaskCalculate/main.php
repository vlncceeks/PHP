<?php
header('Content-Type: text/plain');
function validateScaples($val) {
    $countScaples = 0;
    for ($i = 0; $i < strlen($val); $i++) {
        if ($val[$i] == '(') 
            $countScaples++;
        elseif ($val[$i] == ')') {
            $countScaples--;
            if ($countScaples < 0) {
                return false; 
            }
        }
    }
    return $countScaples == 0; 
}
function calculate($val) {
    if (strlen($val) == 0) return 0;
    if (!validateScaples($val)) return "parenthesis error";

    $val = "0+".$val;
    $val = str_replace(' ', '', $val);
    $val = str_replace('--', '+', $val);
    $val = str_replace('+-', '-', $val);
    $val = str_replace('-+', '-', $val);
    $val = str_replace('++', '+', $val);

    while (preg_match('/(\-?\d+\.?\d*)([\/\*])(\-?\d+\.?\d*)/', $val, $matches)) {

        $left = $matches[1];
        $operator = $matches[2];
        $right = $matches[3];
        $newVal = 1;
        switch ($operator) {
            case '*':
                $newVal = (int) $left * (int) $right;
                break;
            case '/':
                if ((int) $right === 0) return "division by zero";
                else $newVal = (int) $left / (int) $right;
                break;          
        }
        $val = str_replace($matches[0], $newVal, $val);
    }

    while (preg_match('/(\-?\d+\.?\d*)([\+\-])(\-?\d+\.?\d*)/', $val, $matches)) {
        $left = $matches[1];
        $operator = $matches[2];
        $right = $matches[3];
        $newVal = $operator === '+' ? (int) $left + (int) $right : (int) $left - (int) $right;
        $val = str_replace($matches[0], $newVal, $val);
    }
    return $val;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['expression'])) { 
        $res = calculate($_POST['expression']); 
        if (is_numeric($res)) { 
            echo $res; 
        } else { 
            echo 'Ошибка: ' . $res; 
        }
    }
} else {
    echo "Ошибка: Неверный метод запроса";
}
?>