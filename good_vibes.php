<?php
if (isset($_POST['get_compliment'])) {
    require ('./include/start_bdd.php');
    $request = $bddPDO->query('SELECT * FROM thinker.compliments ORDER BY RAND() LIMIT 1');
    $request->execute();
    $rawCompliment = $request->fetchAll();
    $compliment = $rawCompliment[0][1];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thinker ✨</title>
</head>
<body>

<?php include ('./include/navbar.html'); ?>

    <section class="good_vibes">

        <div class="container">

            <p>Si jamais tu manques de motivation ou que tu as juste besoin d'un coup de boost, tu es au bon endroit :</p>
    
            <form method="POST">
                <button type="submit" name="get_compliment" class="button button_good_vibes">Reçois ton coup de boost ✨</button>
            </form>
    
    
    <?php if (isset($compliment)) { ?>
            <p class="generated"><?= $compliment ?></p>
    <?php } ?>

        </div>

    </section>

</body>
</html>