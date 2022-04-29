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
  <?php include_once("../components/peso-side.php") ?>
  <?php include_once("../components/peso-header.php") ?>

  <div id="main">
    <div class="container">
      <!-- content -->
      <h1 class="mt-2 mb-2" style="text-align: center;">Account Settings</h1>
      <?php
      $json = file_get_contents('../components/data.json');

      $pesoData = json_decode($json, true)["peso"];
      ?>

      <div class="row" style="display: flex; justify-content: center;">
        <div class="col-md-7">
          <form>
            <div class="row mb-1">
              <div class="col">
                <div class="form-outline">
                  <input type="text" class="form-control" value="<?= $pesoData['firstName'] ?>"/>
                  <label class="form-label">First name</label>
                </div>
              </div>
              <div class="col">
                <div class="form-outline">
                  <input type="text" class="form-control" value="<?= $pesoData['lastName'] ?>"/>
                  <label class="form-label">Last name</label>
                </div>
              </div>
            </div>

            <div class="form-outline mb-1">
              <input type="text" class="form-control" value="<?= $pesoData['middleName'] ?>"/>
              <label class="form-label">Middle name</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-1">
              <input type="email" class="form-control" value="<?= $pesoData['email'] ?>"/>
              <label class="form-label">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-1">
              <input type="password" class="form-control" />
              <label class="form-label">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-1">Update</button>

          </form>
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