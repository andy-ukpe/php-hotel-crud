<!-- creo il index in cui inserisco l'header e un ciclo foreach per inserire i dati del database(richiamato con include)  -->
<?php include __DIR__ . "/database.php"; ?>
<?php include __DIR__ . "/partials/header.php"; ?>
<?php include __DIR__ . '/env.php'; ?>

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
          <?php
            foreach($rooms as $room) { ?>
              <tr>
                <th><?php echo $room['id'] ?></th>
                <th><?php echo $room['room_number'] ?></th>
                <th><?php echo $room['floor'] ?></th>
                <th> <a href="<?php echo $base_path . 'show/show.php?id=' . $room['id']; ?>">link</a> </th>
              </tr>
          <?php } ?>

        </tbody>
      </table>


    </main>


  </body>
</html>
