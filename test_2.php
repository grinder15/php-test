<?php

interface Person
{
    public function greet(): string;
}

class Filipino implements Person {
    public function greet(): string {
        $greeting = "Magandang Umaga";
        return $greeting;
    }
}

class American implements Person {
    public function greet(): string{
        $greeting = "Good Morning";
        return $greeting;
    }
}

class Korean implements Person {
    public function greet(): string{
        $greeting = "Joh-eun Achim-ieyo";
        return $greeting;
    }
}

$filipino = new Filipino();
$american = new American();
$korean = new Korean();
$people = [$filipino, $american, $korean];

function expect($value, $expectation, $description)
{
    if ($value === $expectation) {
        return '<p>' . $description . ': passed' . '</p>';
    }
    return '<p>' . $description . ': failed' . '</p>';
}

function type_check(array $people): bool
{
    foreach ($people as $person) {
        if (!($person instanceof Person)) {
            return false;
        }
    }

    return true;
}

echo expect($filipino->greet(), "Magandang Umaga", 'Filipino must greet "Magandang Umaga"');
echo expect($american->greet(), "Good Morning", 'American must greet "Good Morning"');
echo expect($korean->greet(), "Joh-eun Achim-ieyo", 'Korean must greet "Joh-eun Achim-ieyo"');
echo expect(type_check($people), true, 'All people must implement "Person" interface.');

?>
