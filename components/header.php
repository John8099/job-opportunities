<!-- Header -->
<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <h2 style="word-wrap: break-word;">Online Municipal <br> <em>Job Opportunities</em></h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          include_once("../components/links.php");
          $homeLinks = array("Home" => "homepage.php", "Jobs" => "jobs.php");
          $exploded = explode("/", $_SERVER["PHP_SELF"]);
          $self = $exploded[count($exploded) - 1];

          foreach ($homeLinks as $title => $homeLink) :
            if ($homeLink == $self) :
          ?>
              <li class="nav-item"><a href="<?= $homeLink ?>" class="nav-link active"><?= $title ?></a></li>

            <?php else : ?>
              <li class="nav-item"><a href="<?= $homeLink ?>" class="nav-link"><?= $title ?></a></li>
          <?php endif;
          endforeach; ?>

          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link dropdown-toggle <?= $self === "login.php" ? "active" : "" ?>" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="login.php">Peso</a>
                <a class="dropdown-item" href="login.php">Employer</a>
                <a class="dropdown-item" href="login.php">Applicant</a>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <div class="dropdown">
              <a class="nav-link dropdown-toggle <?= $self === "employer-registration.php" || $self === "applicant-registration.php"? "active" : "" ?>"" type=" button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Register
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="employer-registration.php">Employer</a>
                <a class="dropdown-item" href="applicant-registration.php">Applicant</a>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>