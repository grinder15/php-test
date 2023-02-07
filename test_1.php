<?php

// TEST 1: ENCAPSULATION.
// Here is the code for executing basic arithmetic. 
// Use the given logic below and encapsulate it into a class.
// TODOs:
// 1. Create Calculator class.
// 2. Add a private property $history and assign an empty array. This will be used for caching
//  executed operations.
// 3. Implement 'add' method with $num1 and $num2 as parameters,  caches and returns the result.
// 4. Implement 'subtract' method with $num1 and $num2 as parameters,  and caches and returns the result.
// 5. Implement 'multiply' method with $num1 and $num2 as parameters,  and caches and returns the result.
// 6. Implement 'divide' method with $num1 and $num2 as parameters,  and caches and returns the result.
// 7. Implement 'history' method with no parameters and returns the private property $history.

// INPUTS, don't modify.
$num1 = 6;
$num2 = 11;

// Example logic to be encapsulated.
$history = [];

// addition
$result = $num1 + $num2;
// cache
array_push($history, $num1 . ' + ' . $num2 . ' = ' . $result);
echo '<p>' . $result . '</p>';


// subtraction
$result = $num1 - $num2;
// cache it again.
array_push($history, $num1 . ' - ' . $num2 . ' = ' . $result);
echo '<p>' . $result . '</p>';

// multiplication
$result = $num1 * $num2;
array_push($history, $num1 . ' * ' . $num2 . ' = ' . $result);
echo '<p>' . $result . '</p>';

// division
$result = $num1 / $num2;
array_push($history, $num1 . ' / ' . $num2 . ' = ' . $result);
echo '<p>' . $result . '</p>';

echo '<br>';

// show history
echo 'calculator history';
foreach ($history as $history_item) {
    echo '<p>' . $history_item . '</p>';
}

// Calculator class.
class Calculator
{
    // TODO: Add private history property with an empty list assigned on it.

    public function add($num1, $num2)
    {
        // TODO: Your code
    }

    public function subtract($num1, $num2)
    {
        // TODO: Your code
    }

    public function multiply($num1, $num2)
    {
        // TODO: Your code
    }

    public function divide($num1, $num2)
    {
        // TODO: Your code
    }

    public function history()
    {
        // TODO: Your code
    }
}



// after you finish to code Calculator class, instantiate it in $calculator variable to be tested.
$calculator = new Calculator;


// DON'T MODIFY THIS. 
function expect($value, $expectation, $description)
{
    if ($value === $expectation) {
        return '<p>' . $description . ': passed' . '</p>';
    }
    return '<p>' . $description . ': failed' . '</p>';
}

// TODO: uncomment once you finished.
// echo expect($calculator->add($num1, $num2), $num1 + $num2, 'add method of class Calculator must add numbers.');
// echo expect($calculator->subtract($num1, $num2), $num1 - $num2, 'subtract method of class Calculator must subtract numbers.');
// echo expect($calculator->multiply($num1, $num2), $num1 * $num2, 'multiply method of class Calculator must multiply numbers.');
// echo expect($calculator->divide($num1, $num2), $num1 / $num2, 'divide method of class Calculator must divide numbers.');
// echo expect(count($calculator->history()), 4, 'history method of class Calculator must output length of history.');
