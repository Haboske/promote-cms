<?php
session_start();
$bdd = new PDO('mysql:host=mysql-databasetest.alwaysdata.net;dbname=databasetest_sql;', '335454', 'Tigrou2023');
if(isset($_GET['id']) AND !empty($_GET['id'])){
    $getid = $_GET['id'];
    $recupQuestion = $bdd->prepare('SELECT * FROM questions WHERE questions_id = ?');
    $recupQuestion->execute(array($getid));
    if($recupQuestion->rowCount() > 0){
        $questionInfos = $recupQuestion->fetch();
        $question = $questionInfos['questions_text'];
        $option1 = $questionInfos['questions_answer1'];
        $option2 = $questionInfos['questions_answer2'];
        $option3 = $questionInfos['questions_answer3'];
        $option4 = $questionInfos['questions_answer4'];
        $option5 = $questionInfos['questions_answer5'];
        $reponse = $questionInfos['questions_realanswer'];
        $feedback = $questionInfos['questions_feedback'];

        if(isset($_POST['valider'])){

            

            $question_saisi = htmlspecialchars($_POST['question']);
            $option1_saisie = nl2br(htmlspecialchars($_POST['option1']));
            $option2_saisie = nl2br(htmlspecialchars($_POST['option2']));
            $option3_saisie = nl2br(htmlspecialchars($_POST['option3']));
            $option4_saisie = nl2br(htmlspecialchars($_POST['option4']));
            $option5_saisie = nl2br(htmlspecialchars($_POST['option5']));
            $reponse_saisie = nl2br(htmlspecialchars($_POST['reponse']));
            $feedback_saisie = nl2br(htmlspecialchars($_POST['feedback']));

            $updateQuestion = $bdd->prepare('UPDATE questions SET questions_text = ?, questions_answer1 = ?, questions_answer2 = ?, questions_answer3 = ?, questions_answer4 = ?, questions_answer5 = ?, questions_realanswer = ?, questions_feedback = ? WHERE id = ?');
            $updateQuestion->execute(array($question_saisi, $option1_saisie, $option2_saisie, $option3_saisie, $option4_saisie, $option5_saisie, $reponse_saisie, $feedback_saisie, $getid));
            header('Location: afficher_question.php');
        }else{
            echo "ceci n'est pas une pomme";
        }

    }else{
        echo "Aucun article trouve";
    }
}else{
    echo "Aucun id trouve";
}


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Modifier question</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method='POST' action="">
            <textarea name="text" ><?= $question; ?></textarea>
            <br>
            <textarea name="option1" ><?= $option1; ?></textarea>
            <br>
            <textarea name="option2" ><?= $option2; ?></textarea>
            <br>
            <textarea name="option3" ><?= $option3; ?></textarea>
            <br>
            <textarea name="option4" ><?= $option4; ?></textarea>
            <br>
            <textarea name="option5" ><?= $option5; ?></textarea>
            <br>
            <textarea name="reponse" ><?= $reponse; ?></textarea>
            <br>
            <textarea name="feedback" ><?= $feedback; ?></textarea>
            <br>
            <input type="submit" name="valider">
        </form>
    </body>
</html>