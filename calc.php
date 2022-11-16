<?php 

include "classes/calc.class.php";

 isset($_GET) ? extract($_GET) : null;  ?>

<style> form>input, form>label {display: block;}</style>

<form action="" method="GET">
    <div class="msg"><?php echo isset($msg) ? $msg : ''; ?></div>

    <label for="number">number</label>
    <input type="text" name="number" class="number" value="<?php echo isset($number) ? $number : ''; ?>">
    <label for="number2">number 2</label>
    <input type="text" name="number2" class="number2" value="<?php echo isset($number2) ? $number2 : ''; ?>">

    <select name="operation" id="operation">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
        <option value="^">^</option>
        <option value="sqrt">sqrt</option>
        <option value="%">%</option>
    </select>
    <input type="submit" name="calculate" value="calculate">  
</form>

<?php
// echo $operation;
if (isset($number) && !isset($number2)){
    $result = $myCalc->squareroot($number);
    echo $result;
}
if (isset($number) && isset($number2)){
    $myCalc = new Calc($number, $number2);
    $result;
    switch($operation){
        case "+": 
            $result = $myCalc->add($number, $number2);
            break;
        case "-": 
            $result = $myCalc->subtract($number, $number2);
            break;
        case "/": 
            $result = $myCalc->divide($number, $number2);
            break;
        case "*": 
            $result = $myCalc->multiply($number, $number2);
            break;
        case "^": 
            $result = $myCalc->exponent($number, $number2);
            break;
        case "sqrt": 
            $result = $myCalc->squareroot($number);
            break;
        case "%": 
            $result = $myCalc->modulus($number, $number2);
            break;
        default: echo "error"; break;
    }
    
    echo $result;
}
?>