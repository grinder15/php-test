<?php

$num1 = 6;
$num2 = 11;

class Calculator
{
    private $history = [];

    public function add($num1, $num2)
    {
        $result = $num1 + $num2;
        array_push($this->history, $num1 . ' + ' . $num2 . ' = ' . $result);
        return $result;
    }

    public function subtract($num1, $num2)
    {
        $result = $num1 - $num2;
        array_push($this->history, $num1 . ' - ' . $num2 . ' = ' . $result);
        return $result;
    }

    public function multiply($num1, $num2)
    {
        $result = $num1 * $num2;
        array_push($this->history, $num1 . ' * ' . $num2 . ' = ' . $result);
        return $result;
    }

    public function divide($num1, $num2)
    {
        $result = $num1 / $num2;
        array_push($this->history, $num1 . ' / ' . $num2 . ' = ' . $result);
        return $result;
    }

    public function history()
    {
        echo '<p>Calculator history:</p>';
        foreach ($this->history as $history_item) {
            echo '<p>' . $history_item . '</p>';
        }
        return count($this->history);
    }
}

function expect($value, $expectation, $description)
{
    if ($value === $expectation) {
        return '<p>' . $description . ': passed' . '</p>';
    }
    return '<p>' . $description . ': failed' . '</p>';
}

$calculator = new Calculator();

echo expect($calculator->add($num1, $num2), $num1 + $num2, 'add method of class Calculator must add numbers.');
echo expect($calculator->subtract($num1, $num2), $num1 - $num2, 'subtract method of class Calculator must subtract numbers.');
echo expect($calculator->multiply($num1, $num2), $num1 * $num2, 'multiply method of class Calculator must multiply numbers.');
echo expect($calculator->divide($num1, $num2), $num1 / $num2, 'divide method of class Calculator must divide numbers.');
echo expect($calculator->history(), 4, 'history method of class Calculator must output length of history.');

?>
