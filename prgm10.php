<?php

// An indexed array to hold information about multiple AI pioneers.
// Each element in this array is an associative array representing one pioneer.
$aiPioneers = array(
    array(
        "name" => "Alan Turing",
        "works" => array(
            "Turing Machine",
            "Turing Test",
            "Concepts of computability and algorithms"
        )
    ),
    array(
        "name" => "John McCarthy",
        "works" => array(
            "Coined the term 'Artificial Intelligence'",
            "Developed the Lisp programming language",
            "Work on time-sharing systems"
        )
    ),
    array(
        "name" => "Marvin Minsky",
        "works" => array(
            "Co-founder of the MIT AI Laboratory",
            "Perceptrons (with Seymour Papert)",
            "Theory of frames"
        )
    ),
    array(
        "name" => "Allen Newell",
        "works" => array(
            "Information Processing Language (IPL)",
            "Logic Theorist (with Herbert Simon)",
            "General Problem Solver (GPS) (with Herbert Simon)"
        )
    ),
    array(
        "name" => "Herbert Simon",
        "works" => array(
            "Logic Theorist (with Allen Newell)",
            "General Problem Solver (GPS) (with Allen Newell)",
            "Contributions to cognitive psychology and AI"
        )
    ),
    array(
        "name" => "Arthur Samuel",
        "works" => array(
            "Pioneer in machine learning",
            "Developed a checkers-playing program",
            "Introduced the concept of machine learning"
        )
    ),
    array(
        "name" => "Frank Rosenblatt",
        "works" => array(
            "Invented the Perceptron",
            "Pioneer in neural networks"
        )
    )
);



// Calculate and display the total number of elements in the array
$totalPioneers = count($aiPioneers);
echo "Total number of AI pioneers in the list: " . $totalPioneers . "\n";

?>
