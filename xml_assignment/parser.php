<?php
    $mydom = simplexml_load_file("student.xml");

    foreach($mydom->student as $s)
    {
        echo "Name: ".$s->name."<br>";
        echo "ID: ".$s->id."<br>";
        echo "CGPA: ".$s->cgpa."<br>";
        echo "Courses taken: "."<br>";
    
        $counter = 1;

        foreach($s->course as $c)
        {
            echo $counter++.". ".$c->coursename." | Section: ".$c->section." | Grade: ".$c->grade."<br>";
        }
        echo "</br>";
    }
?>