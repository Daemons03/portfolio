<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dagnière Maxime</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div id="connecahce"><a href="/connexion"><span class="fontawesome-envelope-alt"></a></div>
        @include('header')
        <h1>Besoin d'un développeur web, contactez-moi!</h1>
        <p class="texteaccueil">Du site statique pour présenté votre entreprise, au site avec une base de données, je suis là vous aidez dans vos projets du début à la conclusion.</p>
        <h2>Mon dernier projet</h2>
        <article class="projet">
            <img src="images/mastermint.png">
            <p><span class="gras">Title: </span>MasterMind<br/><span class="gras">Date de création: </span>10-12 octobre 2017<br/><span class="gras">Description: </span>Réalisation du jeu MasterMind en JavaScript<br/><button>Voir plus</button></p>
        </article>



        @include('footer')
    </body>
</html>
