<?php
    
    session_start();

    if($_SESSION["utype"] != "student")
	{
		header('Location: login.php');
	}

    $xml = simplexml_load_file('quiz.xml');

    $qid = $_SESSION['qid'];
    $i = $_SESSION['i'];
    $i++;
    $flag = 0;
    echo $_SESSION['mark'].'<br>';
    echo $_SESSION['correct'].'<br>';
    echo $_SESSION['wrong'].'<br>';
    echo $_SESSION['i'].'<br>';
    echo "Quiz number ".$qid.'<br>';
    foreach($xml->quiz as $q)
    {
        if($q->qid == $qid)
        {
            $j = 1;
            foreach ($q->question as $q1) 
            {
                if($j < $i)
                {
                    echo "failed".'<br>';
                    $j++;   
                }
                else if($j == $i)
                {
                    echo "Question ".$j.': '. $q1->q.'<br>';
                    echo "Option 1: ".$q1->o1.'<br>';
                    echo "Option 2: ".$q1->o2.'<br>';
                    $flag = 1;
                    $_SESSION['ans'] = (string)$q1->a;
                    break;
                }
            }
        }
    }
    if($flag == 0)
    {
        echo "success".'<br>';
        $xml1 = simplexml_load_file('mark.xml');
        $user = $xml1->addChild('student');
        $user->addChild('sid', $_SESSION['uid']);
        $user->addChild('qid', $_SESSION['qid']);
        $user->addChild('mark', $_SESSION['mark']);
        $user->addChild('correct', $_SESSION['correct']);
        $user->addChild('wrong', $_SESSION['wrong']);
        file_put_contents('mark.xml', $xml1->asXML());
        header('Location: student.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Questions</title>
</head>
<body>
    <form action='validate.php' method='POST'>
        Answer:<input type='text' name='ans'><br>
        <input type='submit' name='' value='Submit'>
    </form>
</body>
</html>