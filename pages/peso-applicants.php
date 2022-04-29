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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

</head>

<body>
  <?php include_once("../components/preload.php") ?>
  <?php include_once("../components/peso-side.php") ?>
  <?php include_once("../components/peso-header.php") ?>

  <div id="main">
    <div class="container-fluid">
      <h1 class="mt-2 mb-2" style="text-align: center;">Applicants List</h1>
      <div id="table"></div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Additional Scripts -->
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/owl.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
  <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
  <script>
    $.getJSON("../components/data.json", function(data) {
      const applicants = data.applicants;
      let html = `
      <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
          <tr>
            <th>First name</th>
            <th>Middle name</th>
            <th>Last name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
      `

      for (let key in applicants) {
        const applicant = applicants[key]
        html += `<tr>
                    <td>${applicant.firstName}</td>
                    <td>${applicant.middleName}</td>
                    <td>${applicant.lastName}</td>
                    <td>${applicant.email}</td>
                </tr>`
      }

      html += `</tbody>
      </table>`;

      $("#table").html(html)
      $('#example').DataTable({
        "lengthMenu": [
          [6, 10, 25, 50, -1],
          [6, 10, 25, 50, "All"]
        ]
      });

    });
  </script>
</body>

</html>