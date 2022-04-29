<div id="mySidenav" class="sidenav">
  <?php
  include_once("../components/links.php");
  $applicants = $links["applicant"];
  $exploded = explode("/", $_SERVER["PHP_SELF"]);
  $self = $exploded[count($exploded) - 1];

  foreach ($applicants as $title => $applicantLink) :
    if ($applicantLink == $self) :
  ?>
      <a href="<?= $applicantLink ?>" class="active"><?= $title ?></a>
    <?php else : ?>
      <a href="<?= $applicantLink ?>"><?= $title ?></a>
  <?php endif;
  endforeach; ?>
</div>