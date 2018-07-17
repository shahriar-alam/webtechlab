<?php

    session_start();
    $xml=simplexml_load_file('mark.xml');


?>

<!DOCTYPE html>
<html>
<head>
    <title>Marks</title>
</head>
<body>
    <table width = '100%' border = 'px'>
        <tr>
            <th>Quiz</th>
            <th>Mark</th>
            <th>Correct</th>
            <th>Wrong</th>
        </tr>
        <?php
            foreach($xml->student as $s)
            {
                if($s->sid == $_SESSION['uid'])
                {
                    ?>

                    <tr>
                        <td><?php echo $s->qid; ?></td>
                        <td><?php echo $s->mark; ?></td>
                        <td><?php echo $s->correct; ?></td>
                        <td><?php echo $s->wrong; ?></td>
                    </tr>
                    <?php
                }
            }
        ?>
    </table>
</body>
</html>