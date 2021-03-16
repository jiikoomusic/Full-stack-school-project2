<?php
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
        <link href="css/ajanvaraus.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script>var $j = jQuery.noConflict();</script>
    

    <script src="https://polygit.org/components/webcomponentsjs/webcomponents-lite.js"></script>
    
    <link rel="import" href="frevvo-date-time.html">


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.1/moment.js"></script>

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>    
    
    <link rel="stylesheet" type="text/css" href="http://www.w3schools.com/lib/w3.css" />    
    <style>
        input, select, textarea{
    color: #ff0000;
}

textarea:focus, input:focus {
    color: #ff0000;
}
</style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Sivun alkuun</a>
                <button class="navbar-toggler navbar-toggler-right" style="position:relative; right:40px;" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
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
                    <a class="btn btn-primary js-scroll-trigger" href="#ajanvaraus">Ajanvarauslomake</a>
                </div>
            </div> </header>
            <section class="about-section text-center" id="etusivu">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                    <h2 class="text-white-50"> Huoltopalvelut </h2> <br><br><br>
        <h3 class="text-white-50"> Tervetuloa jättämään tarjouspyyntö osaavaan ja nopeaan monimerkkikorjaamoomme! <br>
        <br> Meiltä löytyy kattavat huoltomahdollisuudet aina renkaanvaihdosta moottoriremonttiin asti. <br>
        <br>  Käytämme ainoastaan laadukkaita juuri sinun autollesi suunniteltuja varaosia, 
        jotta ripeän ja ammattimaisen palvelumme lisäksi myös itse varaosat palvelevat sinua mahdollisimman
        pitkään. <br> <br> Tarjouspyynnön jätettyäsi otamme sinuun yhteyttä mahdollisimman pian tarjouksen kera.
        Tarjouksen hyväksymällä ajanvarauksesi vahvistetaan. </h3> <br> </div> 
        <!-- Projects-->
  
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header"> <br><br><br><br><br><br><br><br><br><br>
                        <section id="ajanvaraus">
							<h3 style="background-color:#64a19d;">Tarjouspyyntölomake</h3>
						</div>
						<form id="ajanvaraus" name="ajanvaraus" method="post" action="ajanvaraus-exec.php">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nimi</span>
										<input class="form-control" name="Nimi" id="Nimi" type="text" placeholder="Kirjoita nimesi" required>
									</div>
									<div class="form-group">
								<span class="form-label">Puhelinnumero</span>
								<input class="form-control" name="Puhelinnumero" id="Puhelinnumero" type="tel" placeholder="Kirjoita puhelinnumerosi" required>
							</div></div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Sähköpostiosoite</span>
										<input class="form-control" name="Email" id="Email"  type="email" placeholder="Kirjoita sähköpostiosoitteesi" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Auton merkki</span>
								<input class="form-control" name="Merkki" id="Merkki" type="tel" placeholder="Kirjoita auton merkki" required>
							</div>
                            <div class="form-group">
								<span class="form-label">Auton malli</span>
								<input class="form-control" name="Malli" id="Malli" type="tel" placeholder="Kirjoita auton malli" required>
							</div>
                            <div class="form-group">
								<span class="form-label">Vuosimalli</span>
								<input class="form-control" name="Vuosimalli" id="Vuosimalli" type="tel" placeholder="Kirjoita auton vuosimalli" required>
							</div>
                            <span class="form-label">Polttoaine</span>
											<div class="form-group">
												<select name="Polttoaine" id="Polttoaine" class="form-control">
													<option>Bensiini</option>
													<option>Diesel</option>
                                                    <option>Kaasu</option>
                                                    <option>Sähkö</option>
												</select>
												<span class="select-arrow"></span>
											</div> 
                                            <span class="form-label">Vaihteistotyyppi</span>
											<div class="form-group">
												<select name="Vaihteistotyyppi" id="Vaihteistotyyppi" class="form-control">
													<option>Manuaali</option>
													<option>Automaatti</option>
												</select>
												<span class="select-arrow"></span>
											</div> 
							<div class="form-group">
								<span class="form-label">Auton rekisterinumero</span>
								<input class="form-control" name="Rekisterinumero" id="Rekisterinumero" type="text" placeholder="Kirjoita autosi rekisterinumero" required>
							</div>
							<div class="form-group">
								<span class="form-label">Auton mittarilukema</span>

								<input class="form-control"  name="Kilometrilukema" id="Kilometrilukema" type="text" placeholder="Kirjoita autosi mittarilukema" required>
							</div> 
								
                                            <div class="form-group">
								<span class="form-label">Haluaisin tarjouspyynnön seuraavista toimenpiteistä:</span>
                                        <textarea class="form-control" id="Lisatietoja" name="Lisatietoja" id="Lisatietoja" rows="4" cols="50"></textarea>
									</div>

											<div class="form-group">
                                            <span class="form-label">Haluamasi päivämäärä ja kellonaika huollolle</span>
                                            <input id="myDateTimePicker" name="Ajankohta" class="form-control" required>
											</div>
	
    
							<div class="form-btn">
								<button name="submit" class="submit-btn">Vahvista varaus</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><br><br><br><br><br>
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



        <script>
        $j(document).ready(function() {
          flatpickr("#myDatePicker", { 
            "dateFormat":"n/j/Y", 
            "allowInput":true,
            "onOpen": function(selectedDates, dateStr, instance) {
              instance.setDate(instance.input.value, false);
            }
          });
          flatpickr("#myDateTimePicker", { 
            "dateFormat":"j/n/Y H:00", 
            "enableTime":true, 
            "allowInput":true,
            minTime: "08:00",
             maxTime: "17:00",
             time_24hr: true
          });
          flatpickr("#myTimePicker", { 
            "dateFormat":"H:00", 
            "enableTime":true, 
            "allowInput":true,
            "noCalendar": true,
            minTime: "08:00",
             maxTime: "17:00",
             time_24hr: true
          });
        });
      </script>
      
      <script>
        // test moment
        if (moment("12-02-1995", "MM-DD-YYYY", true).isValid())
          console.log('moment date parse is ok');
        else
          console.log('moment date parse is invalid');

        if (moment("1995-12-30T13:59:59+04:00", "YYYY-MM-DDTHH:mm:ssZ", true).isValid())
          console.log('moment dateTime parse is ok');
        else
          console.log('moment dateTime parse is invalid');



      </script>
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
