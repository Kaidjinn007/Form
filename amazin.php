<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- meta référencement -->
        <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
        <meta name="author" content="Camile Ghastine">

        <title>Questionnaire de satisfaction du service client Amazin</title>

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
         <div class="container">
         <h1 class="mb-5">AMAZIN</h1>
         <h2>Questionnaire de satisfaction</h2>
         <p>Vous avez contacté notre service client et nous aimerions avoir votre avis sur la qualité de ce service</p>

            <?php
            if ($_GET == null) {
                 ?>
                        <a href="?step=1">Commencer</a><br>
            <?php 
                 }
            elseif (isset($_GET['step']) && $_GET['step'] === "1") {
                ?>
                    <h2>Question 1</h2>
                    <p>L\'agent a-t-il été agréable ?</p>
                    <a href="?step=2&result=2" role="button" class="btn btn-success">oui</a> <!-- 2 point -->
                    <a href="?step=2&result=" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
                    <a href="?step=2&result=1" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point --> 
            <?php 
                }
            elseif (isset($_GET['step']) && $_GET['step'] === "2") {
                 ?>
                    <h2>Question 2</h2>
                    <p>L\'agent a-t-il compris votre problème ?</p>
                    <a href="?step=3& $_GET[result] + 2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
                    <a href="?step=3& $_GET[result]" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
                    <a href="?step=3& $_GET[result] + 1" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->
                <?php 
                }
            elseif (isset($_GET['step']) && $_GET['step'] === "3") {
                 ?>
                    <h2>Question 3</h2>
                    <p>L\'agent a-t-il résolu votre problème ?</p>
                    <a href="?step=4& $_GET[result] + 2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
                    <a href="?step=5& $_GET[result] + 0" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
                }
            <?php ;

            if (isset($_GET['step']) && $_GET['step'] === "4") {
                ?>
                 <p class="mt-5">Merci pour votre notation :⭐⭐⭐⚫⚫ </p>
                 <p class="mt-5">
                 <a href="?" role="button" class="btn btn-danger">Recommencer</a>
                 </p>
                }
            <?php ;

            if (isset($_GET['step']) && $_GET['step'] === "5") {
                ?>
                <p>Votre problème n\'a pas été résolu.</p>
                <p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
                <!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->
                <!-- Afficher ici le numéro de téléphone qui s\'affiche au fur et à mesure de la saisie-->
                <p>Votre numéro : #numéro de téléphone saisie#</p>
                <a href="" role="button" class="btn btn-success">Valider</a><!-- Phone Number validation -->
               <?php }
                ;?>
        </div>
    </body>
</html>