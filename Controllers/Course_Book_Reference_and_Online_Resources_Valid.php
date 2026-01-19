<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $course = trim($_POST["course"]);
    $massage = "";
    $massage2 = "";
    
    if($course == ""){
        $massage = "Fill Course Name";
    } else {
        $courseLower = strtolower($course);
        
        if($courseLower == "human computer interaction"){
            $massage2 = "Book: Interaction Design <br> <a href='https://www.id-book.com/' target='_blank'>Click Here for Reference</a>";
        }
        elseif($courseLower == "data science"){
            $massage2 = "Book: Data Science Handbook <br> <a href='https://jakevdp.github.io/PythonDataScienceHandbook/' target='_blank'>Click Here for Reference</a>";
        }
        elseif($courseLower == "web technology"){
            $massage2 = "Book: Web Tech & Design <br> <a href='https://www.w3schools.com' target='_blank'>Click Here for Reference</a>";
        }
        else {
            $massage2 = "Course Name not found";
        }
    }
}
?>