<?php
if (isset($_POST['answer'])) {
    require ('./include/start_bdd.php');
    $request = $bddPDO->query('SELECT * FROM thinker.reponses ORDER BY RAND() LIMIT 1');
    $request->execute();
    $rawAnswer = $request->fetchAll();
    $answer = $rawAnswer[0][1];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thinker ✨</title>
</head>
<body>

<?php include ('./include/navbar.html'); ?>

    <section class="answers">

        <div class="container">

            <p>Pense fort à une question et clique sur le bouton ci-dessous pour en avoir la réponse : </p>
        
            <form method="POST">
                <button type="submit" name="answer" class="button button_answers">Génère ta réponse ✨</button>
            </form>
        
        <?php if (isset($answer)) { ?>
                <p class="generated"><?= $answer ?></p>
        <?php } ?>

        </div>


    </section>


</body>
</html>