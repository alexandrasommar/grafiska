<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">

    <title>BIO BAK</title>
  </head>
  <body class="dragscroll">
    <header class="bio-nav">
      <p><a href="#hello">Home</a></p>
      <p>About</p>
      <p>Shop</p>
      <p><a href="#contact">Contact</a></p>
    </header>
    <!-- <div class="start-bio">
        <p>Hej o välkommen det är kul att du besöker sidan</p>
        <button type="button" name="button">Läs mer</button>
    </div> -->
    <main class="idea">
      <img src="img/littlecreature.png" class="littlecreature">
      <p class="usedto">I used to be so sad ---></p>
      <img src="img/smth.png" class="smth">
      <img src="img/sadlittlefigure.png" class="sad">

      <form class="contact" id="contact">
        <h3>Contact</h3>
        <label for="email">E-mail:</label><br>
        <input type="email" name="email"><br>
        <label for="name">Message:</label><br>
        <textarea name="name" rows="8" cols="80"></textarea><br>
        <input type="submit" name="submit" class="submit" value="Submit">
      </form>

      <!--  ATT GÖRA -->
      <!--  1. Göra en startbit där en säger saker snällare
            2. När en tryckt på ok, jag vill gärna kolla
            skicka användaren typ ner på sidan? -->
      <div class="hello" id="hello">
        <h1>Idé</h1>
        <p>Tanke: utgå från <a href="http://www.bio-bak.nl/" target="_blank">denna</a></p>
        <p>Invertera bitar av den, typ välja vissa miljöer och färger/figurer och ändra om dem
        Göra om den till en enkel sida med typ shop-del med t-shirts, kontaktformulär osv. Men behålla mycket av det lekfulla.</p>
      </div>
      <div class="about">
        <p>This is the first project in grafiska verktyg :)</p>
      </div>
      <div class="shop">
        <p>Shop t-shirts</p>
      </div>

    </main>
    <script type="text/javascript" src="https://cdn.rawgit.com/asvd/dragscroll/master/dragscroll.js"></script>
  </body>
</html>
