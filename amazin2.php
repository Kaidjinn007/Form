<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Bootswatch: Quartz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../5/quartz/bootstrap.css">
    <link rel="stylesheet" href="../_vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../_vendor/prismjs/themes/prism-okaidia.css">
    <link rel="stylesheet" href="../_assets/css/custom.min.css">
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23019901-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-23019901-1');
    </script>
  <script id="_carbonads_projs" type="text/javascript" src="https://srv.carbonads.net/ads/CKYIE23N.json?segment=placement:bootswatchcom&amp;callback=_carbonads_go"></script></head>
<body>
    
     <div class="container">
     <h1 class="mb-5">AMAZIN</h1>
     <h2>Questionnaire de satisfaction</h2>
     <p>Vous avez contacté notre service client et nous aimerions avoir votre avis sur la qualité de ce service</p>
        
        <?php
        if ($_GET == null) {
                ?>
                    <a href="?step=1">Commencer</a><br>
        <?php ;
             }
        elseif (isset($_GET['step']) && $_GET['step'] === "1") {
             ?>
                <h2>Question 1</h2>
                <p>L\'agent a-t-il été agréable ?</p>
                <a href="?step=2&result=1" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
                <a href="?step=2&result" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
                <a href="?step=2&result=&" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point --> 
        <?php ;
            }
        elseif (isset($_GET['step']) && $_GET['step'] === "2") {
                ?>
                <h2>Question 2</h2>
                <p>L\'agent a-t-il compris votre problème ?</p>
                <a href="?step=3& $_GET[result] + 2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
                <a href="?step=3& $_GET[result]" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
                <a href="?step=3& $_GET[result] + 1" role="button" class="btn btn-secondary">sans avis</a> <!-- rapporte 1 point -->
        <?php ;
                }
        elseif (isset($_GET['step']) && $_GET['step'] === "3") {
             ?>
                <h2>Question 3</h2>
                <p>L\'agent a-t-il résolu votre problème ?</p>
                <a href="?step=4& $_GET[result] + 2" role="button" class="btn btn-success">oui</a> <!-- rapporte 2 point -->
                <a href="?step=5& $_GET[result] + 0" role="button" class="btn btn-danger">non</a> <!-- rapporte 0 point -->
        <?php ;
                }
        elseif (isset($_GET['step']) && $_GET['step'] === "4") {
        ?>
             <p class="mt-5">Merci pour votre notation :⭐⭐⭐⚫⚫ </p>
             <p class="mt-5">
             <a href="?" role="button" class="btn btn-danger">Recommencer</a>
             </p>
            
        <?php ; 
                }    
        elseif (isset($_GET['step']) && $_GET['step'] === "5") {
        ?>
            <p>Votre problème n\'a pas été résolu.</p>
            <p>Pour être rappelé, entrez votre numéro de téléphone dans le clavier virtuel et validez :</p>
            <!-- Coder ici un clavier numérique permettant de saisir le numéro de téléphone -->
            <!-- Afficher ici le numéro de téléphone qui s\'affiche au fur et à mesure de la saisie-->
            <p>Votre numéro : #numéro de téléphone saisi#</p>
            <a href="" role="button" class="btn btn-success">Valider</a><!-- Validation du numéro de téléphone -->
            
        <?php }
            
        ?>
    </div>

    <script src="../_vendor/jquery/dist/jquery.min.js"></script>
    <script src="../_vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../_vendor/prismjs/prism.js" data-manual=""></script>
    <script src="../_assets/js/custom.js"></script>
    
</body>
</html>