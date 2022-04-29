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
  <link rel="stylesheet" href="../assets/css/owl.css">

</head>

<body>
  <?php include_once("../components/preload.php") ?>
  <?php include_once("../components/header.php") ?>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="banner header-text">
    <div class="owl-banner owl-carousel">
      <div class="banner-item-01">
        <div class="text-content">
          <h4>Find your job today!</h4>
          <h2>ONLINE MUNICIPAL JOB OPPORTUNITIES</h2>
        </div>
      </div>
      <div class="banner-item-02">
        <div class="text-content">
          <h4>Find your job today!</h4>
          <h2>ONLINE MUNICIPAL JOB OPPORTUNITIES</h2>
        </div>
      </div>
      <div class="banner-item-03">
        <div class="text-content">
          <h4>Find your job today!</h4>
          <h2 style="color: black"> ONLINE MUNICIPAL JOB OPPORTUNITIES</h2>
        </div>
      </div>
    </div>
  </div>
  <!-- Banner Ends Here -->

  <div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Featured Jobs</h2>
            <a href="jobs.php">view more <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <div class="row" id="jobContent"></div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Additional Scripts -->
  <script src="../assets/js/custom.js"></script>
  <script src="../assets/js/owl.js"></script>

  <script>
    $.getJSON("../components/data.json", function(data) {
      const jobs = data.jobs;
      let html = ``
      let counter = 0;
      while (counter < 3) {
        const job = jobs[counter]
        const postedAt = new Date(jobs[counter].postedAt);
        const newPostedAt = `${postedAt.getDate()}-${postedAt.getMonth() + 1}-${postedAt.getFullYear()}`
        html += `<div class="col-md-4">
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
            </div>
          </div>
        </div>`
        counter++
      }
      $("#jobContent").html(html)
    });
  </script>
</body>

</html>