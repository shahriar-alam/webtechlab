<?php
    session_start();

	if($_SESSION["utype"] != "student")
	{
		header('Location: login.php');
    }

    $xml = simplexml_load_file('quiz.xml');
    $xml1 = simplexml_load_file('mark.xml');
    $flag = 0;
    foreach ($xml->quiz as $q) 
    {
        foreach($xml1->student as $s)
        {
            if($s->qid == $q->qid)
            {
                if($_SESSION['uid'] == $s->sid)
                {
                    $flag = 1;
                    break;
                }
            }
        }
        if($flag == 0)
        {
            echo 'Quiz '.$q->qid.'<br>';
            $_SESSION['qid'] = (string)$q->qid;
            $_SESSION['i'] = 0;
            $_SESSION['mark'] = 0;
            $_SESSION['correct'] = 0;
            $_SESSION['wrong'] = 0;
            header('Location: questions.php');
            break;
        }
    }
    //header('Location: student.php');
?>