<!-- creo il index in cui inserisco l'header e un ciclo foreach per inserire i dati del database(richiamato con include)  -->
<?php  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hotel db</title>
    <link rel="stylesheet" href="dist/app.css">
  </head>
  <body>
    <header>
      <h1>Andy Hotel </h1>
    </header>

    <main>
      <table>
        <thead>
          <tr>
            <th>ID:</th>
            <th>Numero della Camera:</th>
            <th>Piano:</th>
          </tr>
        </thead>
        <!-- singola stanza da stampare con il foreach -->
        <tbody>
          <tr>
            <th>1</th>
            <th>1</th>
            <th>1</th>
          </tr>
        </tbody>
      </table>


    </main>


  </body>
</html>
