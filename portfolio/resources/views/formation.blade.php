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
        <h2>Mes formations</h2>
        <article id="formationtext">
            <ul>
                <li><span class="gras">Septembre 2017 à Avril 2018:</span> Diplôme de niveau 3 de développeur web (Six mois de cours, deux mois en stage).</li>
                <li><span class="gras">Septembre 2007 à Juin 2011:</span> Certificat d'apprentissage professionnel et Baccaulauréat professionnel en maçonnerie.</li>
            </ul>
        </article>


        @include('footer')
    </body>
</html>