<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <title>Job</title>
</head>

<body>
  <?php include_once("components/preload.php") ?>
  <div class="row" style="display: flex;justify-content: center; height: 60vh; align-items: center;">
    <div class="col-md-7">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Home</th>
            <th scope="col">Peso</th>
            <th scope="col">Employer</th>
            <th scope="col">Applicant</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><a href="pages/homepage.php" class="btn btn-primary">Home page</a></td>
            <td><a href="pages/login.php" class="btn btn-primary">Login</a></td>
            <td><a href="pages/login.php" class="btn btn-primary">Login</a></td>
            <td><a href="pages/login.php" class="btn btn-primary">Login</a></td>
          </tr>
          <tr>
            <td><a href="pages/jobs.php" class="btn btn-primary">Jobs</a></td>
            <td><a href="pages/peso-accounts.php" class="btn btn-primary">Account setting</a></td>
            <td><a href="pages/employer-registration.php" class="btn btn-primary">Register</a></td>
            <td><a href="pages/applicant-registration.php" class="btn btn-primary">Register</a></td>
          </tr>
          <tr>
            <td></td>
            <td><a href="pages/peso-employers.php" class="btn btn-primary">Employers</a></td>
            <td><a href="pages/employer-accounts.php" class="btn btn-primary">Account setting</a></td>
            <td><a href="pages/applicant-accounts.php" class="btn btn-primary">Account setting</a></td>
          </tr>
          <tr>
            <td></td>
            <td><a href="pages/peso-applicants.php" class="btn btn-primary">Applicants</a></td>
            <td><a href="pages/employer-permits.php" class="btn btn-primary">Company Permits</a></td>
            <td><a href="pages/applicant-search.php" class="btn btn-primary">Search Job</a></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><a href="pages/employer-job-post.php" class="btn btn-primary">Post Job</a></td>
            <td><a href="pages/applicant-job-applications.php" class="btn btn-primary">Job Applications</a></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><a href="pages/employer-job-applications.php" class="btn btn-primary">Job Applications</a></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>

</html>