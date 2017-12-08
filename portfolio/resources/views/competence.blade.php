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
        <h2>Mes compétences</h2>
        <article id="competencetext">
            <ul>
               <li><span class="gras">Langages client: </span>HTML, CSS, JavaScrpt, AJAX</li>
               <li><span class="gras">Langages serveur: </span>PHP, SQL</li>
               <li><span class="gras">Base de données: </span>JSON, MYSQL</li>
               <li><span class="gras">Librairie: </span>Jquery/li>
               <li><span class="gras">Framework client: </span>Bootstrap, Ionic, Angular</li>
               <li><span class="gras">Framework serveur: </span>Laravel</li>
               <li><span class="gras">Serveur web: </span>WAMP</li>
               <li><span class="gras">Outils: </span>FileZila, SublimeText, Notepad++</li>
               <li><span class="gras">CMS: </span>Wordpress, Prestashop (e-commerce)</li>
               <li><span class="gras">Logiciel: </span>Gimp, Inskape, Office</li>
               <li><span class="gras">OS: </span>Windows, Linux</li>
               <li><span class="gras">Autres: </span>Chef d'équipe, gestion de délai</li>
            </ul>
        </article>


        @include('footer')
    </body>
</html>