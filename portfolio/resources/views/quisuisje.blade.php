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
        <p class="texteaccueil">Je me présente Maxime Dagnière. À présent en formation développeur Web pour obtenir un diplôme 3 de niveau. Ayant toujours été fasciné par l'informatique, quand j'ai du me reconvertir de mon ancien poste, j'ai choisi ce secteur en raison de mes affinité..</p>
        <h2>Dagnière Maxime</h2>
        <article class="artquisuis">
            <h3>Expérience personnel</h3>
            <ul>
                <li><span class="gras">Date de naissance: </span>03/08/1992 (25ans)</li>
                <li><span class="gras">Numéros de téléphone: </span>07-81-15-00-28</li>
                <li><span class="gras">Email: </span><a href="maito:maximedu03120@hotmail.fr">maximedu03120@hotmail.fr</a></li>
            </ul>
        </article>
        <article class="artquisuis">
            <h3>Expérience professionnel</h3>
            <ul>
                <li>Après ma reconversion</li>
                <ul>
                    <li>- Fevrier/Mars 2018: Stage de deux mois, dans la compagnie Ws312, à Sayat.</li>
                    <li>- Janvier 2017: Stage d'une semaine, dans la compagnie C-toucom, à Moulins/allier.</li>
                </ul>
                <li>Avant ma reconversion</li>
                <ul>
                    <li>- Octobre 2011 à Octobre 2016: Maçon dans l'entreprise Sas Lassot, à Saint Légèrs sur Vouzance.</li>
                    <li>- Septembre 2007 à Septembre 2011: Apprenti maçon dans l'entreprise Sas Lassot, à Saint Légèrs sur Vouzance.</li>
                </ul>
            </ul>
        </article>

        @include('footer')
    </body>
</html>