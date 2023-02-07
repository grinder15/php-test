<?php

// TEST 2: Polymorphism.
// Create a class of three types of person, based on nationality, derived from
// 'Person' interface to implement expected behavior.
// TODOs:
// 1. Create 'Filipino' class that implements 'Person' interface.
// 2. Implement the 'greet' method of 'Filipino' class and return a greeting string "Magandang Umaga".
// 3. Create 'American' class that implements 'Person' interface.
// 4. Implement the 'greet' method of 'American' class and return a greeting string "Good Morning".
// 5. Create 'Korean' class that implements 'Person' interface.
// 6. Implement the 'greet' method of 'Korean' class and return a greeting string "Joh-eun Achim-ieyo".

// NOTE: MIND THE CASE of the greetings. All greetings must be ing Title Case.

interface Person
{
    public function greet(): string; // returns a string.
}

// TODO: your code here.

// TODO: Uncomment this once you finish the classes to run the test.
// $filipino = new Filipino;
// $american = new American;
// $korean = new Korean;
// $people = [$filipino, $american, $korean];

// DON'T MODIFY THIS. 
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

// TODO: uncomment once you finished.
// echo expect($filipino->greet(), 'Magandang Umaga', 'Filipino must greet "Magandang Umaga"');
// echo expect($american->greet(), 'Good Morning', 'American must greet "Good Morning"');
// echo expect($korean->greet(), 'Joh-eun Achim-ieyo', 'Filipino must greet "Joh-eun Achim-ieyo"');
// echo expect(type_check($people), true, 'All people must implement "Person" interface.');
