<div id="mySidenav" class="sidenav">
  <?php
  include_once("../components/links.php");
  $employers = $links["employer"];
  $exploded = explode("/", $_SERVER["PHP_SELF"]);
  $self = $exploded[count($exploded) - 1];

  foreach ($employers as $title => $employer) :
    if ($employer == $self) :
  ?>
      <a href="<?= $employer ?>" class="active"><?= $title ?></a>
    <?php else : ?>
      <a href="<?= $employer ?>"><?= $title ?></a>
  <?php endif;
  endforeach; ?>
</div>