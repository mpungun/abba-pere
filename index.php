
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="abba, pere, abba-pere, abba_pere, abbapere, église, réseau, Dieu, jésus, christ" />
<link rel="icon" type="images/x-icon" href="images/logo2020.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Abba-pere est un réseau social chretien qui a pour but de s'unir autour de l'essentiel qui est jésus-christ
Abba-pere permet :
A TOUT LES CHRETIEN(NE)S : + D'etre rapprocher du Dieu d'amour et veriable
+ D'apprendre à vivre ensemble comme recommander psaumes 133/1-2.
+ De partager la parole de Dieu, les témoignages , les exortations avec les freres des autres eglises.
+ De rechercher un homme de Dieu + De chercher les cordonnées d'une eglise et de le géolocalisé + D'etre notifié à chaque début du culte
" />

<link type="text/css" rel="stylesheet" href="ace.min2.css?ln=css" />
<link type="text/css" rel="stylesheet" href="bootstrap.min2.css?ln=css" />
<!--link type="text/css" rel="stylesheet" href="css/stylenol.css?ln=css" />
<link type="text/css" rel="stylesheet" href="css/components.css?ln=primefaces&amp;v=6.2" /-->
<link rel="stylesheet" type="text/css" href="css/animate.css" />
<link rel="stylesheet" type="text/css" href="css/line-awesome.css" />
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<style>
header {
  position: relative;
  background-color: black;
  height:100%;
  min-height: 25rem;
  width: 100%;
  overflow: hidden;
}

header video {
  position: absolute;
  top: 50%;
  left: 50%;
  min-width: 100%;
  min-height: 100%;
  width: auto;
  height: auto;
  z-index: 0;
  -ms-transform: translateX(-50%) translateY(-50%);
  -moz-transform: translateX(-50%) translateY(-50%);
  -webkit-transform: translateX(-50%) translateY(-50%);
  transform: translateX(-50%) translateY(-50%);
}

header .container {
  position: relative;
  z-index: 2;
}

header .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  opacity: 0.5;
  z-index: 1;
}

@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>
<title>Abba-Pere (ouvre-toi)</title>
		<!--background-image:url(img/font.jpg);background-size: 100% 100%  background-image:url(f.jpg);-->
</head>
<body class="login-layout light-login" style="background-color:#fff;background-size: 100% 100%">
<script>
function maPosition(position) {
  var infopos=position.coords.latitude +","+position.coords.longitude+","+position.coords.altitude;
  document.getElementById("infoposition3").value= infopos;
  //document.getElementById("infoposition").innerHTML = infopos;
  //alert(infopos);
}

if(navigator.geolocation)
  navigator.geolocation.getCurrentPosition(maPosition);
</script>
<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
  </video>
  <!--https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4 -->
  <!--rain.mp4-->
  <div class="container h-100">
  <div class="container" style="background-color:#e44d3a">
		<div class="header-data" >
			<div class="logo">
				<a href="#" title=""><img src="images/logo.png" alt=""></a>
			</div>
			<div class="search-bar">
				<form method="post" action="" >
					<input type="text" name="search" placeholder="Search..." />
					<button type="submit"><i class="la la-search"></i></button>
				</form>
			</div>
			<nav>
				<ul>
					<li>
						<a href="#" title="retourné à la page de depart">
							<span><img src="images/icon1.png" alt=""></span>
							Home/Accueil
						</a>
					</li>
					<li>
						<a href="l_eglise/" title="rechercher une eglise">
						    <span><img src="images/icon2.png" alt=""></span>
							Eglise
						</a>
						<ul>
							<li><a href="?l=1" title="">Catholique</a></li>
							<li><a href="?l=2" title="Eglise de reveil du congo">ERC</a></li>
							<li><a href="?l=3" title="Eglise du christ au congo">ECC</a></li>
							<li><a href="?l=4" title="Eglise protestante du congo">PROTESTANTE</a></li>
							<li><a href="?l=5" title="Eglise batiste du congo">BATISTE</a></li>
							<li><a href="?l=6" title="Eglise branamiste">WMB</a></li>			
							<li><a href="?l=7" title="Eglise Témoin de YHWH">Temoin </a></li>
							<li><a href="?l=8" title="">Autres</a></li>
						</ul>
					</li>
					<li>
						<a href="#" title="">
							<span><img src="images/icon3.png" alt=""></span>
							Evenement
						</a>
						<ul>
							<li><a href="@/l_eglise.php" title="">Conference</a></li>
							<li><a href="@/l_eglise.php" title="">Seminaire</a></li>
							<li><a href="@/l_eglise.php" title="">Retraite </a></li>
							<li><a href="@/l_eglise.php" title="">Autres</a></li>
						</ul>
					</li>
					<li>
						<a href="#" title="">
						     <span><img src="images/icon4.png" alt=""></span>
							 Profils
						</a>
					     <ul>
							 <li><a href="@/responsable.php" title="">Pasteur</a></li>
							 <li><a href="@/responsable.php" title="">Eveque</a></li>
							 <li><a href="@/responsable.php" title="">Evengeliste</a></li>
							 <li><a href="@/responsable.php" title="">Berge</a></li>
							 <li><a href="@/responsable.php" title="">Abbée</a></li>
							 <li><a href="@/responsable.php" title="">curé</a></li>
							 <li><a href="@/dem_amis.php" title="">Autres</a></li>
						 </ul>
								<!--ul>
									<li><a href="user-profile.html" title="">User Profile</a></li>
									<li><a href="my-profile-feed.html" title="">my-profile-feed</a></li>
								</ul-->
					</li>
					<li>
						<a href="#" title="">
							<span><img src="images/icon5.png" alt=""></span>
							Formation
						</a>
						<ul>
							<li><a href="#" title="">Eschatologie</a></li>
							<li><a href="#" title="">Bapteme</a></li>
						</ul>
					</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="images/icon6.png" alt=""></span>
									Messages
								</a>
								<div class="notification-box msg">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
							  					<p>Recevoir des enseignements par SMS.</p>
							  					<span>2 min ago</span>
							  				</div>
						  				</div>
						  				<div class="view-all-nots">
						  					<a href="messages.html" title="">S'inscrire pour recevoir info</a>
						  				</div>
									</div>
								</div>
							</li>
							<li>
								<a href="#" title="" class="not-box-open">
									<span><img src="images/icon7.png" alt=""></span>
									Notification
								</a>
								<div class="notification-box">
									<div class="nt-title">
										<h4>Setting</h4>
										<a href="#" title="">Clear all</a>
									</div>
									<div class="nott-list">
										<div class="notfication-details">
							  				<div class="noty-user-img">
							  					<img src="images/resources/ny-img1.png" alt="">
							  				</div>
							  				<div class="notification-info">
							  					<h3><a href="messages.html" title="">Jassica William</a> </h3>
							  					<p>Soye notifier du programme de votre Culte par SMS.</p>
							  					<span>2 min ago</span>
							  				</div>
						  				</div>
						  				
						  				<div class="view-all-nots">
						  					<a href="#" title="">S'inscrire pour recevoir info</a>
						  				</div>
									</div>
								</div>
							</li>
						</ul>
					</nav><!--nav end-->
					<div class="menu-btn">
						<a href="#" title=""><i class="fa fa-bars"></i></a>
					</div><!--menu-btn end-->
					<div class="user-account">
						<div class="user-info">
							<img src="profil/3.jpg" alt="" style="width:30%" />
							<a href="#" title="">John</a>
							<i class="la la-sort-down"></i>
						</div>
						<div class="user-account-settingss">
							
							<h3>Custom Status</h3>
							<div class="search_form">
								<form>
									<input type="text" name="search">
									<button type="submit">Ok</button>
								</form>
							</div><!--search_form end-->
							<h3>Setting</h3>
							<ul class="us-links">
								<li><a href="profile-account-setting.html" title="">Account Setting</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Faqs</a></li>
								<li><a href="#" title="">Terms & Conditions</a></li>
							</ul>
							<h3 class="tc"><a href="../" title="">Logout</a></h3>
						</div><!--user-account-settingss end-->
					</div>
				</div><!--header-data end-->
			</div>
			

	<div id="content">
            <div class="main-container">
                <div class="main-content">
                    <div class="row">
<div class="col-sm-1 col-sm-offset-2"></div>					
                        <div class="col-sm-10 col-sm-offset-1">
                            <div class="login-container">
                                <div class="center">
                                    <br />
									<br/>
                                </div>
                                <div class="position-relative">
                                    <div id="login-box" class="login-box visible widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header green lighter bigger">
													<!--img src="images/logo.png" /><br/-->
                                                    <center>
                                                        Se connecter aux freres(soeurs)
                                                    </center>
                                                </h4>
                                                <div class="space-6"></div>
												<form id="j_idt22" name="j_idt22" method="post" action="x/" enctype="application/x-www-form-urlencoded">
												<input type="hidden" id="infoposition" name="coord" value="" />
												<input type="hidden" name="j_idt22" value="j_idt22" /><span id="j_idt22:j_idt23"></span>
                                                    <fieldset>
                                                        <span class="block input-icon input-icon-right">
														     <input id="j_idt22:j_idt27" name="j_idt22:j_idt27" type="text" placeholder="Login" required="true" aria-required="true" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                            <i class="ace-icon fa fa-user"></i>
                                                        </span>
                                                        <br />
                                                        <span class="block input-icon input-icon-right">
														     <input id="j_idt22:j_idt31" name="j_idt22:j_idt31" type="password" class="ui-inputfield ui-password ui-widget ui-state-default ui-corner-all form-control" placeholder="Mot de passe" aria-required="true" />
                                                            <i class="ace-icon fa fa-lock"></i>
                                                        </span>
                                                        <br />
                                                        <div class="clearfix">
                                                            <label class="inline">
                                                                <input type="checkbox" class="ace" />
                                                                <span class="lbl">Se souvenir</span>
                                                            </label>
															<button id="j_idt22:j_idt34" name="j_idt22:j_idt34" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only width-35 pull-right btn btn-sm btn-primary" onclick="" type="submit">
															<span class="ui-button-text ui-c">Connexion</span>
															</button>
                                                        </div>
                                                    </fieldset>
													<input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="990446657966399437:44340557840121503" autocomplete="off" />
</form>
                                            </div>
                                            <div class="toolbar clearfix" style="background-color:#e44d3a">
                                                <div>
                                                    <a href="#" data-target="#forgot-box" class="forgot-password-link">
                                                        <i class="ace-icon fa fa-arrow-left"></i>
                                                        inscrire un croyant
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="#" data-target="#signup-box" class="user-signup-link">
                                                        Ajouter l'église
                                                        <i class="ace-icon fa fa-arrow-right"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="forgot-box" class="forgot-box widget-box no-border">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header red lighter bigger">
                                                    <i class="ace-icon fa fa-key"></i>
                                                    Création de compte chretien(ne)</h4>
                                                <div class="space-8"></div>
                                                <p>Veuillez renseigner les informations du chretien(ne)</p>
												
												<form id="form" name="form" method="post" action="y/" enctype="application/x-www-form-urlencoded">
												<input type="hidden" id="infoposition" name="coord" value="" />
												    <input type="hidden" name="form" value="form" />
                                                    <fieldset>
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															    <input id="form:v1" name="form:v1" type="text" placeholder="Votre Nom complet" title="Votre Nom complet" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
                                                        <!--label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															    <input id="form:v2" name="form:v2" type="text" placeholder="Votre Postnom" title="votre Postnom" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															     <input id="form:v3" name="form:v3" type="text" placeholder="Votre Prenom" title="Votre Prenom" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                 <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label-->
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															<input id="form:v4" name="form:v4" type="text" placeholder="Téléphone" title="+243..." class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														<label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															     <input id="form:v5" name="form:v5" type="text" placeholder="email" title="xxx@xx.fr" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														
														<label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <select name="form:v6" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" required>
															         <option value="">Eglise</option>
															         
																	 <option value="1">AUCUNE</option><option value="3">EGLISE MANGEMBO</option><option value="2">MISSION JEHOVAH SABAOTH</option>														        </select>
																<i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															     <input id="form:v7" name="form:v7" type="password" class="ui-inputfield ui-password ui-widget ui-state-default ui-corner-all form-control" placeholder="Mot de passe" aria-required="true" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														
														
                                                        <div class="clearfix">
														<button id="form:j_idt47" name="form:j_idt47" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only width-35 pull-right btn btn-sm btn-danger" onclick="" type="submit">
														     <span class="ui-button-text ui-c">Creer compte</span></button>
                                                        </div>
                                                    </fieldset><input type="hidden" name="javax.faces.ViewState" id="j_id1:javax.faces.ViewState:0" value="990446657966399437:44340557840121503" autocomplete="off" />
</form>
                                            </div>
                                            <div class="toolbar center">
                                                <a href="#" data-target="#login-box" class="back-to-login-link">Retour à l'authentification
                                                    <i class="ace-icon fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="signup-box" class="signup-box widget-box no-border" style="width:110%">
                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <h4 class="header green lighter bigger">
                                                    <i class="ace-icon fa fa-users blue"></i>
                                                    Ajouter l'église
                                                </h4>
                                                <div class="space-6"></div>
                                                <form method="post" action="r/" enctype="application/x-www-form-urlencoded" >
												        <input type="hidden" id="infoposition3" name="coord" value="" />
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															<input id="form:v1" name="form:v1" type="text" placeholder="Nom Eglise" title="Nom Eglise" aria-required="true" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															<input id="form:v2" name="form:v2" type="text" placeholder="Sigle de l'église" title="Sigle de l'église" aria-required="true" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														
														<label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
                                                                <select id="form:v3" name="form:v3" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" title="Pays">
															         <option value="AF">Afghanistan</option>
<option value="AL">Albania</option>
<option value="DZ">Algeria</option>
<option value="AS">American Samoa</option>
<option value="AD">Andorra</option>
<option value="AO">Angola</option>
<option value="AI">Anguilla</option>
<option value="AG">Antigua &amp; Barbuda</option>
<option value="AR">Argentina</option>
<option value="AM">Armenia</option>
<option value="AW">Aruba</option>
<option value="AU">Australia</option>
<option value="AT">Austria</option>
<option value="AZ">Azerbaijan</option>
<option value="BS">Bahamas</option>
<option value="BH">Bahrain</option>
<option value="BD">Bangladesh</option>
<option value="BB">Barbados</option>
<option value="BY">Belarus</option>
<option value="BE">Belgium</option>
<option value="BZ">Belize</option>
<option value="BJ">Benin</option>
<option value="BM">Bermuda</option>
<option value="BT">Bhutan</option>
<option value="BO">Bolivia</option>
<option value="BA">Bosnia &amp; Herzegovina</option>
<option value="BW">Botswana</option>
<option value="BV">Bouvet Island</option>
<option value="BR">Brazil</option>
<option value="IO">British Indian Ocean Territory</option>
<option value="VG">British Virgin Islands</option>
<option value="BN">Brunei Darussalam</option>
<option value="BG">Bulgaria</option>
<option value="BF">Burkina Faso</option>
<option value="BI">Burundi</option>
<option value="KH">Cambodia</option>
<option value="CM">Cameroon</option>
<option value="CA">Canada</option>
<option value="CV">Cape Verde</option>
<option value="KY">Cayman Islands</option>
<option value="CF">Central African Republic</option>
<option value="TD">Chad</option>
<option value="CL">Chile</option>
<option value="CN">China</option>
<option value="CX">Christmas Island</option>
<option value="CC">Cocos (Keeling) Islands</option>
<option value="CO">Colombia</option>
<option value="KM">Comoros</option>
<option value="CG">Congo</option>
<option value="CD">Congo, Dem. Rep.</option>
<option value="CK">Cook Islands</option>
<option value="CR">Costa Rica</option>
<option value="CI">Cote D&#39;ivoire (ivory Coast)</option>
<option value="HR">Croatia</option>
<option value="CU">Cuba</option>
<option value="CW">Curacao</option>
<option value="CY">Cyprus</option>
<option value="CZ">Czech Republic</option>
<option value="DK">Denmark</option>
<option value="DJ">Djibouti</option>
<option value="DM">Dominica</option>
<option value="DO">Dominican Republic</option>
<option value="TP">East Timor</option>
<option value="EC">Ecuador</option>
<option value="EG">Egypt</option>
<option value="SV">El Salvador</option>
<option value="GQ">Equatorial Guinea</option>
<option value="ER">Eritrea</option>
<option value="EE">Estonia</option>
<option value="ET">Ethiopia</option>
<option value="FK">Falkland Islands</option>
<option value="FO">Faroe Islands</option>
<option value="FJ">Fiji</option>
<option value="FI">Finland</option>
<option value="FR">France</option>
<option value="GF">French Guiana</option>
<option value="PF">French Polynesia</option>
<option value="TF">French Southern Territories</option>
<option value="GA">Gabon</option>
<option value="GM">Gambia</option>
<option value="GZ">Gaza</option>
<option value="GE">Georgia</option>
<option value="DE">Germany</option>
<option value="GH">Ghana</option>
<option value="GI">Gibraltar</option>
<option value="GR">Greece</option>
<option value="GL">Greenland</option>
<option value="GD">Grenada</option>
<option value="GP">Guadeloupe</option>
<option value="GU">Guam</option>
<option value="GT">Guatemala</option>
<option value="GN">Guinea</option>
<option value="GW">Guinea-bissau</option>
<option value="GY">Guyana</option>
<option value="HT">Haiti</option>
<option value="HM">Heard &amp; McDonald Islands</option>
<option value="HN">Honduras</option>
<option value="HK">Hong Kong</option>
<option value="HU">Hungary</option>
<option value="IS">Iceland</option>
<option value="IN">India</option>
<option value="ID">Indonesia</option>
<option value="IR">Iran</option>
<option value="IQ">Iraq</option>
<option value="IE">Ireland</option>
<option value="IL">Israel</option>
<option value="IT">Italy</option>
<option value="JM">Jamaica</option>
<option value="JP">Japan</option>
<option value="JO">Jordan</option>
<option value="KZ">Kazakhstan</option>
<option value="KE">Kenya</option>
<option value="KI">Kiribati</option>
<option value="KS">Kosovo</option>
<option value="KW">Kuwait</option>
<option value="KG">Kyrgyzstan</option>
<option value="LA">Laos</option>
<option value="LV">Latvia</option>
<option value="LB">Lebanon</option>
<option value="LS">Lesotho</option>
<option value="LR">Liberia</option>
<option value="LY">Libya</option>
<option value="LI">Liechtenstein</option>
<option value="LT">Lithuania</option>
<option value="LU">Luxembourg</option>
<option value="MO">Macau</option>
<option value="MK">Macedonia, Yugoslavia</option>
<option value="MG">Madagascar</option>
<option value="MW">Malawi</option>
<option value="MY">Malaysia</option>
<option value="MV">Maldives</option>
<option value="ML">Mali</option>
<option value="MT">Malta</option>
<option value="MH">Marshall Islands</option>
<option value="MQ">Martinique</option>
<option value="MR">Mauritania</option>
<option value="MU">Mauritius</option>
<option value="YT">Mayotte</option>
<option value="MX">Mexico</option>
<option value="FM">Micronesia</option>
<option value="MD">Moldova</option>
<option value="MC">Monaco</option>
<option value="MN">Mongolia</option>
<option value="ME">Montenegro</option>
<option value="MS">Montserrat</option>
<option value="MA">Morocco</option>
<option value="MZ">Mozambique</option>
<option value="MM">Myanmar (Burma)</option>
<option value="NA">Namibia</option>
<option value="NR">Nauru</option>
<option value="NP">Nepal</option>
<option value="NL">Netherlands</option>
<option value="NC">New Caledonia</option>
<option value="NZ">New Zealand</option>
<option value="NI">Nicaragua</option>
<option value="NE">Niger</option>
<option value="NG">Nigeria</option>
<option value="NU">Niue</option>
<option value="NF">Norfolk Island</option>
<option value="KP">North Korea</option>
<option value="MP">Northern Ireland</option>
<option value="NO">Norway</option>
<option value="OM">Oman</option>
<option value="PK">Pakistan</option>
<option value="PW">Palau</option>
<option value="PA">Panama</option>
<option value="PG">Papua New Guinea</option>
<option value="PY">Paraguay</option>
<option value="PE">Peru</option>
<option value="PH">Philippines</option>
<option value="PN">Pitcairn</option>
<option value="PL">Poland</option>
<option value="PT">Portugal</option>
<option value="PR">Puerto Rico</option>
<option value="QA">Qatar</option>
<option value="RE">Reunion</option>
<option value="RO">Romania</option>
<option value="RU">Russia</option>
<option value="RW">Rwanda</option>
<option value="GS">S. Georgia &amp; South Sandwich</option>
<option value="KN">Saint Kitts And Nevis</option>
<option value="LC">Saint Lucia</option>
<option value="MF">Saint Martin</option>
<option value="PM">Saint Pierre and Miquelon</option>
<option value="VC">Saint Vincent &amp; Grenadines</option>
<option value="WS">Samoa</option>
<option value="SM">San Marino</option>
<option value="ST">Sao Tome And Principe</option>
<option value="SA">Saudi Arabia</option>
<option value="SN">Senegal</option>
<option value="RS">Serbia</option>
<option value="SC">Seychelles</option>
<option value="SL">Sierra Leone</option>
<option value="SG">Singapore</option>
<option value="SX">Sint Maarten</option>
<option value="SK">Slovakia</option>
<option value="SI">Slovenia</option>
<option value="SB">Solomon Islands</option>
<option value="SO">Somalia</option>
<option value="ZA">South Africa</option>
<option value="KR">South Korea</option>
<option value="SS">South Sudan</option>
<option value="ES">Spain</option>
<option value="LK">Sri Lanka</option>
<option value="SH">St. Helena</option>
<option value="SD">Sudan</option>
<option value="SR">Suriname</option>
<option value="SJ">Svalbard and Jan Mayen</option>
<option value="SZ">Swaziland</option>
<option value="SE">Sweden</option>
<option value="CH">Switzerland</option>
<option value="SY">Syria</option>
<option value="TW">Taiwan</option>
<option value="TJ">Tajikistan</option>
<option value="TZ">Tanzania</option>
<option value="TH">Thailand</option>
<option value="TG">Togo</option>
<option value="TK">Tokelau</option>
<option value="TO">Tonga</option>
<option value="TT">Trinidad And Tobago</option>
<option value="TN">Tunisia</option>
<option value="TR">Turkey</option>
<option value="TM">Turkmenistan</option>
<option value="TC">Turks and Caicos Islands</option>
<option value="TV">Tuvalu</option>
<option value="UG">Uganda</option>
<option value="UA">Ukraine</option>
<option value="AE">United Arab Emirates</option>
<option value="UK">United Kingdom</option>
<option value="US">United States</option>
<option value="UY">Uruguay</option>
<option value="UM">US Outlying Islands</option>
<option value="UZ">Uzbekistan</option>
<option value="VU">Vanuatu</option>
<option value="VA">Vatican City</option>
<option value="VE">Venezuela</option>
<option value="VN">Vietnam</option>
<option value="VI">Virgin Islands, U.S.</option>
<option value="WF">Wallis and Futuna</option>
<option value="WE">West Bank</option>
<option value="EH">Western Sahara</option>
<option value="YE">Yemen</option>
<option value="ZM">Zambia</option>
<option value="ZW">Zimbabwe</option>

														         </select>
																 <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															<input id="form:v4" name="form:v4" type="text" placeholder="Adresse/ province/commune/av" title="Votre Prenom" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															 <input id="form:v5" name="form:v5" type="text" placeholder="Téléphone" title="+243..." class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                             <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														<label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															     <input id="form:v6" name="form:v6" type="text" placeholder="email" title="xxx@xx.fr" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all form-control" />
                                                                <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														
														
                                                        <label class="block clearfix">
                                                            <span class="block input-icon input-icon-right">
															<input id="form:v7" name="form:v7" type="password" class="ui-inputfield ui-password ui-widget ui-state-default ui-corner-all form-control" placeholder="Mot de passe" aria-required="true" />
                                                            <i class="ace-icon fa fa-envelope"></i>
                                                            </span>
                                                        </label>
														
														<div class="clearfix">
														<button id="form:j_idt47" name="form:j_idt47" class="ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only width-35 pull-right btn btn-sm btn-danger" onclick="" type="submit">
														     <span class="ui-button-text ui-c">Inscrire</span>
														</button>
                                                        </div>





                                                </form>
                                            </div>
                                            <div class="toolbar center">
                                                <a href="#" data-target="#login-box" class="back-to-login-link">
                                                    <i class="ace-icon fa fa-arrow-left"></i>
                                                    Retour au principal
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
								
							
                            </div>
                        </div>
						<marquee style="font-size:17px ;color:#fff;width:100%; height=110%" direction ="up" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="1">
								<div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3"></h1>
        <p class="lead mb-0" style="color:#fff" >
		Abba-pere est une plateforme chretienne qui a pour but de : <br/>
		<i style="color:#e44d3a;font-size:35px">"s'unir autour de l'essentiel"</i><br/>
		Abba-pere permet :<br/>
		<a href="ephrata.apk" title="" style="color:#e44d3a">A TOUT LES CHRETIEN(NE)S :</a>
		+ D'etre rapprocher du Dieu d'amour et veriable<br/>
		+ D'apprendre à vivre ensemble comme recommander psaumes 133/1-2.<br/>				
		+ De partager la parole de Dieu, les témoignages , les exortations avec les freres des autres eglises.<br/>
        + De rechercher un homme de Dieu		
		+ De chercher les cordonnées d'une eglise et de le géolocalisé
        + D'etre notifié à chaque début du culte		
		</p>
		<p class="lead mb-0" style="color:#fff" ><br/>
		<a href="ephrata.apk" title="" style="color:#e44d3a"> AUX EGLISES:</a>
		+ De faire l'évagelisation en ligne
		+ De faire la publicité des leur événements (conference, Seminaire, Retraite etc )gratuitement;
       	+ De publier et archiver leur enseignement Audio et Video gratuitement ;
        + De faire un appel des dons ;
		+ De permettre aux gens de localiser et de s'informer sur les églises;
		+ De poster leur banderole ou leur campagne gratuitement;
		+ D'informer horaire des cultes aux freres et soeurs
		
		</p>
		
      </div>
    </div>
							
							</marquee>
                    </div>
                </div>
				
				
				
				

   				<div class="chatbox-list" style="z-index:1000;">
			<div class="chatbox" style="z-index:1000;">
				<div class="chat-mg" style="float:left;" >
					<a href="#" title=""><img src="images/chat.png" alt=""  /></a>
					<!--span>2</span-->
				</div>
				<div class="conversation-box">
					<div class="con-title mg-3">
						<div class="chat-user-info">
							<img src="images/resources/us-img1.png" alt="">
							<h3>Votre Question ici</h3>
						</div>
						<div class="st-icons">
							<a href="#" title=""><i class="la la-cog"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
							<a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
						</div>
					</div>
					<div class="chat-hist mCustomScrollbar" data-mcs-theme="dark" style="heigh:50%">
						<div class="date-nd">
							<span>25/01/2020</span>
						</div>
						<div class="chat-msg">
							<p>shalom, à qui j'ai l'honneur ?</p>
							<span>25/01/2020</span>
						</div>
						<!--div class="date-nd">
							<span>Sunday, August 24</span>
						</div>
						<div class="chat-msg st2">
							<p>Cras ultricies ligula.</p>
							<span>5 minutes ago</span>
						</div>
						<div class="chat-msg">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
							<span>Sat, Aug 23, 1:10 PM</span>
						</div-->
					</div><!--chat-list end-->
					<div class="typing-msg">
						<form>
							<textarea placeholder="Type a message here"  ></textarea>
							<button type="button" ><i class="la la-send"></i></button>
						</form>
						<ul class="ft-options">
							<li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
							<li><a href="#" title=""><i class="la la-camera"></i></a></li>
							<li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
						</ul>
					</div><!--typing-msg end-->
				</div><!--chat-history end-->
			</div>
		</div><!--chatbox-list end-->
		
    	
       
    
            </div>
        <!--/div-->
        
        <br />
        <style>       
            .footy-sec {
                float: left;
                margin-top: 70px;
                width: 100% !important;
                padding-top: 5px;
                position: relative;
            }
            .footy-sec ul {
                float: left;
                margin-top: 5px;
            }
            .footy-sec ul li {
                display: inline-block;
                padding: 0 10px;
                border-right: 1px solid #ffffff;
            }
            .footy-sec ul li:last-child {
                border-right: none;
            }
            .footy-sec ul li a {
                display: inline-block;
                color: #ffffff;
                font-size: 14px;
                font-weight: 500;
            }
            .footy-sec p {
                float: right;
                color: #ffffff;
                font-size: 14px;
                font-weight: 500;
            }
            footer {
                float: left;
                width: 100%;
                background-color: #fff;
            }
            .footy-sec.mn ul {
                padding: 10px 0;
            }
            .footy-sec.mn ul li a{
                color: #b2b2b2;
            }
            .footy-sec.mn ul li {
                border-color: #b2b2b2;
            }
            .footy-sec.mn p {
                color: #b2b2b2;
                margin-top:5px;
            }
            .fl-rgt {
                float: right;
                margin-top: 34px;
                padding-right: 30px;
            }
        </style>
	<br/>

		<div class="footy-sec" style="background-color:#e44d3a;position:absolute;bottom:0;left:0px">
				<div class="container">
					<ul>
						<li><a href="#" title="">Help Center</a></li>
						<li><a href="#" title="">Privacy Policy</a></li>
						<li><a href="#" title="">Community Guidelines</a></li>
						<li><a href="#" title="">Cookies Policy</a></li>
						<li><a href="#" title="">Career</a></li>
						<li><a href="#" title="">Forum</a></li>
						<li><a href="#" title="">Language</a></li>
						<li><a href="#" title="">Copyright Policy</a></li>
						<li><a href="ephrata.apk" title="">App Android</a></li>
					</ul>
					<!--p><img src="images/copy-icon.png" alt="">Copyright 2020</p-->
				</div>
			</div><!--footy-sec end-->	
		<script type="text/javascript" src="code.js?ln=js"></script>
		<script type="text/javascript" src="js/index.js?ln=js"></script>
			
		</div>
		
</div>


	
		
		



		
			
    
  </div>
</header>

	

		
		
		
		
		
		
        <div id="loader-wrapper">
            <div id="loader"></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
        
		
		
		
		
		
		
		
		
		



<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>
<script type="text/javascript" src="lib/slick/slick.min.js"></script>
<script type="text/javascript" src="js/scrollbar.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/disabled.js"></script>
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome.css">
<link rel="stylesheet" type="text/css" href="css/line-awesome-font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick.css">
<link rel="stylesheet" type="text/css" href="lib/slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">

<script type="text/javascript" src="mpungu.js"></script>


<script>'undefined'=== typeof _trfq || (window._trfq = []);'undefined'=== typeof _trfd && (window._trfd=[]),_trfd.push({'tccl.baseHost':'secureserver.net'}),_trfd.push({'ap':'cpsh'},{'server':'a2plcpnl0235'}) // Monitoring performance to make your website faster. If you want to opt-out, please contact web hosting support.</script>
<script src='../../../img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js'></script>	



	</body>
</html>
