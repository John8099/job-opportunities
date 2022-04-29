<!-- Header -->
<header style="position: fixed;top:0">
  <nav class="navbar navbar-expand-lg">
    <a onclick="openCloseNav()" class="btn fa fa-bars" style="color: white; font-size: 30px"></a>
    <a class="navbar-brand" href="#" style="margin-left: 20px;">
      <h2 style="word-wrap: break-word;">Online Municipal <em>Job Opportunities</em></h2>
    </a>
    <div style="color: white;margin-left:auto; margin-right: 60px">
      <?php
      $json = file_get_contents('../components/data.json');

      $pesoData = json_decode($json, true)["employers"][27];

      ?>
      <h6>Hi! <?= "$pesoData[firstName] $pesoData[lastName]" ?></h6>
    </div>
  </nav>
</header>