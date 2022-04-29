<div id="mySidenav" class="sidenav">
  <?php
  include_once("../components/links.php");
  $pesoLinks = $links["peso"];
  $exploded = explode("/", $_SERVER["PHP_SELF"]);
  $self = $exploded[count($exploded) - 1];

  foreach ($pesoLinks as $title => $pesoLink) :
    if ($pesoLink == $self) :
  ?>
      <a href="<?= $pesoLink ?>" class="active"><?= $title ?></a>
    <?php else : ?>
      <a href="<?= $pesoLink ?>"><?= $title ?></a>
  <?php endif;
  endforeach; ?>
</div>