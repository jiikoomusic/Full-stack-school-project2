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
#taulu {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#taulu td, #taulu th {
  border: 1px solid #ddd;
  padding: 8px;
}



#taulu th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #64a19d;
  color: white;
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
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.html">Etusivulle</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="kauppa.php">Autokauppa</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="ajanvaraus.php">Huoltotarjouspyyntö</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="vuokraus.php">Autovuokraus</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#yhteys">Yhteystiedot</a></li>
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
                </div>
            </div>
        </header>

        <section class="about-section text-center" id="etusivu">
        <div class="container">
        <div class="mx-auto text-center"> 
        <a href="member-index.php"> Tästä takaisin hallintapaneelin etusivulle </a> <br> <br> 
        <a href="ajanvaraushallinta.php"> Tästä takaisin muuttamaan muita ajanvarauksia </a> <br> <br> 
        <a href="logout.php"> Tästä kirjaudut ulos hallinnointipaneelista. </a> <br> <br> <br> <br> 
        <table class="table">
				<div class="row">
                

<?php 
                    require_once('admin-auth.php');
                    require_once('config.php');
              


                    $link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
                    if(!$link) {
                        die('Virhe yhdistäessä serverille: ' . mysql_error());
                    }

                    //Select database
                    $db = mysqli_select_db($link, DB_DATABASE);
                    if(!$db) {
                        die("Virhe yhdistäessä tietokantaan");
                    }


                    $qry1 = "SELECT * FROM ajanvaraus";
                    $qry2 = "SELECT * FROM ajanvaraus";
                    $qry3 = "SELECT * FROM ajanvaraus";
                    $seequl = mysqli_fetch_all(mysqli_query($link, $qry1));
                    $seequl2 = mysqli_fetch_all(mysqli_query($link, $qry2));
                    $seequl3 = mysqli_fetch_all(mysqli_query($link, $qry3));
                    ?>

                       
                        <! Tästä alkaa sivun taulu> <div class="mx-auto text-center">
                        <h4 style="text-align:center" class="text-white-50"> Poista ajanvaraus </h4> 
                        <form action="poistavaraus.php" method="post">
                            <div class="container">
                        <div class="mx-auto text-center">  <div class="container d-flex h-100 align-items-center">
                        <select name="id"> 
                        <?php foreach ($seequl2 as $id): ?>
                        <option value="<?php echo $id[0]; ?>">
                        ID <?php echo $id[0];?> <br> / <?php echo $id[1];?> 
                        <br> <?php echo $id[5];?> /
                        <br> <?php echo $id[7];?> /
                    
                        </option>
                        <?php endforeach;?>
                        </select> <br> <br>
                        <input type="submit" value="Poista">
                        </form>


                        <table style="position:relative; right:200px;" id="taulu"> 
                        <thead>
                        <th class="text-white-50"> Varaajan nimi </th> 
                        <th class="text-white-50"> Puhelinnumero </th>
                        <th class="text-white-50"> Sähköposti </th>
                        <th class="text-white-50"> Kilometrilukema </th>
                        <th class="text-white-50"> Merkki </th>
                        <th class="text-white-50"> Malli </th>
                        <th class="text-white-50"> Vuosimalli </th>
                        <th class="text-white-50"> Polttoainetyyppi </th>
                        <th class="text-white-50"> Vaihteístotyyppi </th>
                        <th class="text-white-50"> Rekisterinumero </th>
                        <th class="text-white-50"> Päivämäärä </th>
                        <th class="text-white-50"> Haluttu toimenpide </th>
                        </thead>
                        <tbody>
                        <?php foreach ($seequl as $file): ?>
                        <tr>
                        <td class="text-white-50"><?php echo $file[1];?></td>
                        <td class="text-white-50"><?php echo $file[2];?></td>
                        <td class="text-white-50"><?php echo $file[3];?></td>
                        <td class="text-white-50"><?php echo $file[4];?></td>

                        <td class="text-white-50"><?php echo $file[6];?></td>
                        <td class="text-white-50"><?php echo $file[7];?></td>
                        <td class="text-white-50"><?php echo $file[8];?></td>
                        <td class="text-white-50"><?php echo $file[9];?></td>
                        <td class="text-white-50"><?php echo $file[10];?></td>
                        

                        <td class="text-white-50"><?php echo $file[5];?></td>
                        <td class="text-white-50"><?php echo $file[11];?></td>
                        <td class="text-white-50"><?php echo $file[12];?></td>
                        <td class="text-white-50"><a href="ajanvarausmuutokset.php?id=<?php echo $file[0]; ?>">Päivitä tietoja</a></td>
                        </tr>
                        <?php endforeach;
                        ?> </table>
</div></div></section>
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
