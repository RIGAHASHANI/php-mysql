<?php
    $grade = array(
        "Math" => "4",
        "art" => "5",
        "history" => "3",
        "Music" => "5",
    );


        foreach ($grade as $subject => $grade) {
            echo "Subject: " . $subject . ", Grade: " . $grade;
            echo "<br>";
        }