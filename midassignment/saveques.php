<?php

session_start();

$xml = simplexml_load_file('quiz.xml');

if($_SESSION['status'] == 'false')
{
    $user1 = $xml->addChild('quiz');
	$user1->addChild('tid',$_SESSION['uid']);
    $user1->addChild('qid',$_SESSION['qid']);

    file_put_contents('quiz.xml', $xml->asXML());
    
    $_SESSION['status'] = 'true';
}

foreach($xml->quiz as $q)
{
    if($q->qid == $_SESSION['qid']);
    {
        $user1 = $xml->addChild('question');
	    $user1->addChild('q1',$_POST['ques']);
        $user1->addChild('o1',$_POST['o1']);
        $user1->addChild('o2',$_POST['o2']);
        $user1->addChild('a',$_POST['a']);

        file_put_contents('quiz.xml', $xml->asXML());

        header('Location: createquiz.php');
        break;
    }
}