<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="assets/images/favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

  <title>Jobs</title>

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
  <div class="page-heading about-heading header-text" style="background-image: url(../assets/images/heading-6-1920x500.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">
            <h4>Find suitable jobs</h4>
            <h2>Jobs</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="contact-form">
            <form action="#">
              <h5 style="margin-bottom: 15px">Type</h5>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Contract (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Full time (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Internship (5)</small>
                </label>
              </div>

              <br>

              <h5 style="margin-bottom: 15px">Category</h5>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Accounting / Finance / Insurance Jobs (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Accounting / Finance / Insurance Jobs (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Accounting / Finance / Insurance Jobs (5)</small>
                </label>
              </div>

              <br>

              <h5 style="margin-bottom: 15px">Career levels</h5>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Entry Level (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Entry Level (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Entry Level (5)</small>
                </label>
              </div>

              <br>

              <h5 style="margin-bottom: 15px">Education levels</h5>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Associate Degree (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Associate Degree (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>Associate Degree (5)</small>
                </label>
              </div>

              <br>


              <h5 style="margin-bottom: 15px">Years of experience</h5>

              <div>
                <label>
                  <input type="checkbox">

                  <small>&lt; 1 (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>&lt; 1 (5)</small>
                </label>
              </div>

              <div>
                <label>
                  <input type="checkbox">

                  <small>&lt; 1 (5)</small>
                </label>
              </div>
            </form>
          </div>
        </div>

        <div class="col-md-9">
          <div class="row" id="jobContent"></div>
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

  <script>
    $.getJSON("../components/data.json", function(data) {
      const jobs = data.jobs;
      let html = ``
      let counter = 0;
      while (counter < 6) {
        const job = jobs[counter]
        const postedAt = new Date(jobs[counter].postedAt);
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
              <div style="width: 100%;display:flex;justify-content: center;margin-top:10px">
                  <button class="btn btn-primary">Send Email</button>
              </div>
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