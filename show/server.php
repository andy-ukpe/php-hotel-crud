<?php include __DIR__ . "/../database.php";
  $room_id = $GET_('id');
  $sql = "SELECT * FROM `stanze` WHERE `id` = $room_id";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    $room = $result->fetch_assoc()) {
    }

  } elseif ($result) {
    // la query funziona ma ci sono 0 risultati
     $rooms= [];
  } else {
    // se result è vera o qualcuno smonta il programma questo muore
  die("query error");
  }
  // chiusura della connessione
  $conn->close();
 ?>
