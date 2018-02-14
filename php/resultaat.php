<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Madlibs</title>
    <link rel="stylesheet" href="../css/resultaat.css">
  </head>
  <body>

    <header>
      <img src="../img/logo.png" alt="">
    </header>

    <main>

      <ul id="navbar">
      <li><a href="madlips.php">Er heerst paniek...</a></li>
      <li><a href="onkunde.php">Onkunde</a></li>
      </ul>

      <h1>Er heerst paniek...  </h1>


    <p>Er heerst paniek in het koninkrijk <?php echo $_GET["country"]; ?> Koning <?php echo $_GET["skip"]; ?> is ten einde raad en als koning <?php echo $_GET["skip"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_GET["person"]; ?>. </p> <br>

    <p>"<?php echo $_GET["person"]; ?>! Het is een ramp! Het is een schande!" </p> <br>

    <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?" </p> <br>

    <p>"Mijn <?php echo $_GET["animal"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_GET["toy"]; ?> voor hem gekocht!" </p> <br>

    <p>"Majesteit, uw <?php echo $_GET["animal"]; ?> komt vast vanzelf weer terug?" </p> <br>

    <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $_GET["hobby"]; ?> leren?" </p><br>

    <p>"Maar Sire, daar kunt u toch uw <?php echo $_GET["money"]; ?> voor gebruiken." </p> <br>

    <p>"<?php echo $_GET["person"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had." </p> <br>

    <p>"<?php echo $_GET["boredom"]; ?>, Sire." <br> </p>


  </main>

  <footer>
    <p>Deze website is gemaakt door OGLoc.</p>
  </footer>

  </body>
</html>
