<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Job</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="../assets/css/fontawesome.css">
  <link rel="stylesheet" href="../assets/css/style.css">

</head>

<body>
  <?php include_once("../components/preload.php") ?>
  <?php include_once("../components/employer-side.php") ?>
  <?php include_once("../components/employer-header.php") ?>

  <div id="main">
    <div class="container">
      <!-- content -->
      <h1 class="mt-2 mb-2" style="text-align: center;">Company Permits</h1>
      <?php
      $json = file_get_contents('../components/data.json');

      $employerData = json_decode($json, true)["employers"][0];
      ?>

      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <img src="..<?= $employerData["companyCert"] ?>" class="w-100">
            <div class="caption">
              <p>Company Certificate</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/owl.js"></script>
</body>

</html>