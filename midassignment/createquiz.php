<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Quiz</title>
</head>
<body>
    <div>
        <form action='saveques.php' method='POST'>
            <div>
                <fieldset>
                    <label>Question:</label>
                    <input type = 'text' name = 'ques'>
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <label>Option 1:</label>
                    <input type = 'text' name = 'o1'>
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <label>Option 2:</label>
                    <input type = 'text' name = 'o2'>
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <label>Correct Answer:</label>
                    <input type = 'text' name = 'a'>
                </fieldset>
            </div>
            <div>
                <fieldset>
                    <input type = 'submit' name='' value='Next'>
                    <a href='teacher.php'>Back</a>
                </fieldset>
            </div>
        </form>
    </div>
</body>
</html>