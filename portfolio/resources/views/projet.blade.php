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
        @include('header')
        <h2>Mes derniers projets</h2>
        <article class="projet">
            <img src="images/mastermint.png">
            <p><span class="gras">Title: </span>MasterMind<br/><span class="gras">Date de création: </span>10-12 octobre 2017<br/><span class="gras">Description: </span>Réalisation du jeu MasterMind en JavaScript<br/><button>Voir plus</button></p>
        </article>
        <article class="projet">
            <img src="images/mastermint.png">
            <p><span class="gras">Title: </span>MasterMind<br/><span class="gras">Date de création: </span>10-12 octobre 2017<br/><span class="gras">Description: </span>Réalisation du jeu MasterMind en JavaScript<br/><button>Voir plus</button></p>
        </article>
        <article class="projet">
            <img src="images/mastermint.png">
            <p><span class="gras">Title: </span>MasterMind<br/><span class="gras">Date de création: </span>10-12 octobre 2017<br/><span class="gras">Description: </span>Réalisation du jeu MasterMind en JavaScript<br/><button>Voir plus</button></p>
        </article>



        @include('footer')
    </body>
</html>