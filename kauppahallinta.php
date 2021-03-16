<?php
	require_once('admin-auth.php');
    require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Haukiauto</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #64a19d;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #000000;
}

.container {
  border-radius: 5px;

  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Sivun alkuun</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Etusivulle</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="member-index.php">Hallintapaneelin etusivu</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase">Haukiauto</h1>
                    <h2 class="text-white-50 mx-auto mt-2 mb-5">Monipuolinen autokauppa, autovuokraamo, sekä täyden toiminnan autokorjaamo.</h2>
                    <a class="btn btn-primary js-scroll-trigger" href="#etusivu">Tietoa meistä</a>
                </div>
            </div>
        </header>
    
        <!-- Projects-->
        <section class="projects-section bg-light" id="palvelut">
            <div class="autokauppa">
            <div style="text-align: center">
                <h3><b> Tervetuloa Haukiauto - autokaupan hallintapaneeliin! <br> <br>
                Täytä lomakkeen tiedot lisätäksesi auto valikoimaan.</b></h3><br><br>
                <a href="member-index.php"> Tästä takaisin hallinnointipaneeliin. </a> <br>
                <a href="logout.php"> Tästä kirjaudut ulos hallinnointipaneelista. </a> <br> <br>
                <!-- Featured Project Row-->
                <div class="container">
                <form action="filesLogic.php" method="post" enctype="multipart/form-data" >
    <div class="row">
      <div class="col-25">
        <label for="Merkki">Auton merkki</label>
      </div>
      <div class="col-75">
        <input type="text" id="Merkki" name="Merkki">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Malli">Auton malli</label>
      </div>
      <div class="col-75">
        <input type="text" id="Malli" name="Malli">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Vuosimalli">Auton vuosimalli</label>
      </div>
      <div class="col-75">
        <input type="text" id="Vuosimalli" name="Vuosimalli">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Polttoaine</label>
      </div>
      <div class="col-75">
        <select id="country" name="Polttoaine">
          <option value="Bensiini">Bensiini</option>
          <option value="Diesel">Diesel</option>
          <option value="Kaasu">Kaasu</option>
          <option value="Hybrid">Hybdid</option>
          <option value="Sahko">Sähkö</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Vaihteisto</label>
      </div>
      <div class="col-75">
        <select id="country" name="Vaihteisto">
          <option value="Manuaali">Manuaali</option>
          <option value="Automaatti">Automaatti</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Rekisterinumero">Auton rekisterinumero</label>
      </div>
      <div class="col-75">
        <input type="text" id="Rekisterinumero" name="Rekisterinumero">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Kilometrilukema">Auton mittarilukema</label>
      </div>
      <div class="col-75">
        <input type="text" id="Kilometrilukema" name="Kilometrilukema">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Katsastus">Auton katsastustiedot</label>
      </div>
      <div class="col-75">
        <input type="text" id="Katsastus" name="Katsastus">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Hinta">Hinta</label>
      </div>
      <div class="col-75">
        <input type="text" id="Hinta" name="Hinta">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="Lisatiedot">Lisätietoja autosta</label>
      </div>
      <div class="col-75">
        <textarea id="Lisatiedot" name="Lisatiedot" style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="myfile">Auton kuva</label>
      </div>
      <div class="col-75">
   <input type="file" name="myfile"><br><br>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="save" value="Lisää auto valikoimaan">
    </div>
  </form><br><br><br><br><br><br>
            <?php
            $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
            if(!$link) {
                die('Failed to connect to server: ' . mysql_error());
            }
        
            //Select database
            $db = mysqli_select_db($link, DB_DATABASE);
            if(!$db) {
                die("Unable to select database");
            }
            $qry2 = "SELECT * FROM autokauppa";
            $seequl2 = mysqli_fetch_all(mysqli_query($link, $qry2));
            ?>
            <h3 style="text-align:center"> Poista auto valikoimasta</h3>
            <form action="delete.php" method="post">
                <select name="autokauppa">
                    <?php foreach ($seequl2 as $autokauppa): ?>
                        <option value="<?php echo $autokauppa[0]; ?>">
                    <?php echo $autokauppa[1]; ?>   <?php echo $autokauppa[2]; ?>   <?php echo $autokauppa[6]; ?>
                    </option>
                    <?php endforeach;?>
                    </select>
                    <input type="submit" value="Poista">
                    </form> 

                        </div>
                    </div>
                </div>
                            </div>
                        </div>
            </div>
        </section>
        <!-- Signup-->
        <section class="signup-section" id="yhteys">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto text-center">
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="contact-section bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Osoite</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50">
                                <a href="https://www.google.com/maps/place/Revontie+45,+90830+Haukipudas/@65.1652842,25.3437896,17z/data=!3m1!4b1!4m5!3m4!1s0x468028df4bdcd579:0xda67424ee7414ebb!8m2!3d65.1652842!4d25.3459783">
                                Revontie 45, 90830 Haukipudas</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-envelope text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Sähköposti</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="mailto:sutinenoy@gmail.com">sutinenoy@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0">
                        <div class="card py-4 h-100">
                            <div class="card-body text-center">
                                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                                <h4 class="text-uppercase m-0">Puhelin</h4>
                                <hr class="my-4" />
                                <div class="small text-black-50"><a href="tel:+358465970854"> +358 46 5970854 </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="social d-flex justify-content-center">
                    <a class="mx-2" href="https://www.facebook.com/sutinenoy"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container"><p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> J&A Sutinen Oy</p></div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
