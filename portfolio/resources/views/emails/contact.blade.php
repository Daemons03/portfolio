
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <style type="text/css">
      html{
        width: 100%;
      }
      h2{
        text-align: center;
        color: #00a3cc;
      }
      strong{
        color: #00a3cc;
      }
      p{
        text-align: justify;
      }

    </style>
  </head>
  <body>
      <h2>Vous avez reçu un nouveau mail de votre site: wwww.Dagnière-Maxime.fr</h2>
      <p><strong>Expéditeur:</strong> {{ $contact['name']}}</p>
      <p><strong>Email de l'expéditeur:</strong> {{ $contact['email']}}</p>
      <p><strong>Sujet:</strong> {{ $contact['sujet']}} </p>
      <p><strong>Message:</strong><br/>{{ $contact['message'] }}</p>
  </body>
</html>