<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ultimate Balkan | Admin Panel</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/fonts.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  </head>
  <body>

  <!-- Loader -->
  <div class="loader">
    <div class="loader_inner"></div>
  </div>
 
 	<!-- Admin Header -->
  <nav class="navbar navbar-default nav_admin"><div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#toggle">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand">Admin Panel</a>
    </div>
    <div class="collapse navbar-collapse" id="toggle">
      <ul class="nav navbar-nav"></ul>
      <ul class="nav navbar-nav navbar-right">
         <li><a href="admin_index.php" style="border-bottom: none;">Pocetna</a></li>
         <li><a href="index.php" style="border-bottom: none;">Pogledaj sajt</a></li>
         <li><a href="index.php" style="border-bottom: none;">Log out</a></li>
      </ul>
    </div></div>
  </nav>
  <!-- Server Controll -->
  <section class="server_controll">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="server_name">
            <h1>ultimate Balkan</h1>
            <h2>Admin Panel</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-2">
          <div class="serverstat_wrap">
            <h2>Statistika servera</h2>
            <br>
            <span>Online igraci: 0/500</span><br>
            <span>Online Admini: 25</span><br>
            <span>Online Lideri: 23</span><br>
            <br>
            <span>List Banned: 300</span><br>
            <span>Delete account: 14</span>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="amenu_wrap">
            <ul>
              <li><a href="admin_news.php"><i class="fa fa-list fa-amenu" aria-hidden="true"></i> Promjeni Novosti</a></li>
              <li><a href=""><i class="fa fa-users fa-amenu" aria-hidden="true"></i> Dodaj Admina</a></li>
              <li><a href=""><i class="fa fa-tasks fa-amenu" aria-hidden="true"></i> Lista Admina</a></li>
              <li><a href=""><i class="fa fa-pie-chart fa-amenu" aria-hidden="true"></i> Lista Lidera</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/parallax.min.js"></script>
  <script src="js/PageScroll2id.min.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script>new WOW().init();</script>
  <script src="js/common.js"></script>
  </body>
</html>