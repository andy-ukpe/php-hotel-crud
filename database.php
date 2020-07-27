<?php
  $servername = "localhost";
  $username = "root";
  $password = "roots";
  $dbname = "db hotel";

    // Connect
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn && $conn->connect_error) {
      // se la connessione fallisce si mostra solo l'errore
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `stanze`";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
      // se ci sono i risultati faccio qualcosa

      // output data of each row
      while($row = $result->fetch_assoc()) {
      var_dump($row);
      }
    } elseif ($result) {
      // la query funziona ma ci sono 0 risultati
    echo "0 results";
    } else {
      // se result è vera o qualcuno smonta il programma questo muore
    die("query error");
    }
    // chiusura della connessione
    $conn->close();
 ?>
