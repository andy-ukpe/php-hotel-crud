<?php include __DIR__ . "/server.php"; ?>
<?php include __DIR__ . "/../partials/header.php"; ?>


<?php if(!empty($room)) {?>
<main>
  <h2>Stanza numero: <?php echo $room['room_number'] ?></h2>
  <ul>
    <li>id: <?php echo $room['id'] ?></li>
    <li>Piano:<?php echo $room['floor'] ?></li>
    <li>Letti:<?php echo $room['beds'] ?></li>
    <li>Data di creazione:<?php echo $room['created_at'] ?></li>
  </ul>
</main>
<?php } else { ?>
  <p>La stanza non esiste.</p>
<?php } ?>
