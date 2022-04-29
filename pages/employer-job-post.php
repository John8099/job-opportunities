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
  <?php include_once("../components/employer-side.php") ?>
  <?php include_once("../components/employer-header.php") ?>

  <div id="main">
    <div class="container-fluid">
      <h1 class="mt-2 mb-2" style="text-align: center;">Job Posts</h1>
      <div style="width: 100%;display: flex;justify-content: right;padding: 10px">
        <button class="btn btn-primary">Add New Job</button>
      </div>
      <div class="row" id="jobContent">
      </div>
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
      const jobs = data.jobs.filter((data) => data.companyMeta.name === "Accenture");
      let html = ``
      for (let key in jobs) {
        const job = jobs[key]
        const postedAt = new Date(jobs[0].postedAt);
        const newPostedAt = `${postedAt.getDate()}-${postedAt.getMonth() + 1}-${postedAt.getFullYear()}`
        html += `<div class="col-md-6">
          <div class="product-item" style="overflow: hidden">
            <img src="${job.bannerUrl === "" ? job.companyMeta.logoUrl : job.bannerUrl}" style="height:90px">
            <div class="down-content">
                <h4>${job.jobTitle}</h4>

              <h4><small><i class="fa fa-briefcase"></i>&nbsp;${job.jobTitle}<br> <strong><i class="fa fa-building"></i> ${job.companyMeta.name}</strong></small></h4>

              <small>
                <strong title="Posted on"><i class="fa fa-calendar"></i> ${newPostedAt}</strong><br>
                <strong title="Type"><i class="fa fa-file"></i> ${job.employmentTypes.map ((data) => data.name)}</strong> <br>
                <strong title="Location"><i class="fa fa-map-marker"></i> ${job.locations.map ((data) => data.name)}</strong>
              </small>
              <div style="width: 100%;display:flex;justify-content: center;">
                <button class="btn btn-warning" style="margin: 3px;">Edit</button>
                <button class="btn btn-danger" style="margin: 3px;">Delete</button>
              </div>
            </div>
          </div>
        </div>`
      }
      $("#jobContent").html(html)
    });
  </script>

</body>

</html>