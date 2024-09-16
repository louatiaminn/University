<?php  
 //login_ens.php  
 session_start();  
 if(isset($_SESSION["mail"])&&isset($_SESSION['password']))  
 {  
     $var=$_SESSION["mail"]; $mot=$_SESSION['password'];
      //echo '<h3>Login ens, Welcome - '.$_SESSION["username"].'</h3>';  
 }  
 else  
 {  
      header("location:authentification2.php");  
 }  
 $host = 'localhost';
 $dbname = 'projet';
 $username = 'root';
 $password = '';
   
 $dsn = "mysql:host=$host;dbname=$dbname"; 
 // récupérer tous les utilisateurs
 $sql = "SELECT * FROM enseignant WHERE mail='$var' AND password='$mot'";
  
 try{
  $pdo = new PDO($dsn, $username, $password);
  $stmt = $pdo->query($sql);
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
  if($stmt === false){
   die("Erreur");
  }
  
 }catch (PDOException $e){
   echo $e->getMessage();
 }

 ?> 
 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ISI KEF</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  
  <!-- Favicons -->
  <link href="assets/img/islain.gif" rel="icon">
  <link href="assets/img/islain.gif" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <img src="islain.gif" height="30px" width="=40px">
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="index.html">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#about">programme d'etude</a></li>
          <li><a class="nav-link scrollto" href="#erasmus">Erasmus+</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">4c</a></li>
          <li><a class="nav-link scrollto" href="#team">droit d'access aux information</a></li>
          <li class="dropdown"><a href="#"><span>notre bibliotheque</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="présentation.html">présentation du fond</a></li>
                <ul>
                  <li><a href="présentation.html">présentation du fond</a></li>
                  <li><a href="plandelabib.html">plan de la bibliothèque</a></li>
                  <li><a href="basedocumentaires.html">base documentaires</a></li>
                  <li><a href="espacetravailnumerique.html">espace travail numerique</a></li>
                </ul>
              </li>
              <li><a href="#">base documentaires</a></li>
              <li><a href="#">plan de la bibliothèque</a></li>
              <li><a href="#">reglement interne</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="logout.php" class="get-started-btn scrollto">DECONNECTER</a>
    </div>

    </div>
  </header><!-- End Header -->



  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Bienvenue a l'institut superieur de l'informatique de kef<span>.</span></h1>
          <h2 >bienvenue mr(s) <?php  echo htmlspecialchars($row['nom']); echo "  "; echo htmlspecialchars($row['prenom']); ?></h2>

        </div>
      </div>

      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="actualités.html">actualités</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-bar-chart-box-line"></i>
            <h3><a href="reglementinterne.html">regelemnet interne</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-calendar-todo-line"></i>
            <h3><a href="calendar.html">calendrier d'événement</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-paint-brush-line"></i>
            <h3><a href="">media room</a></h3>
          </div>
        </div>
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-database-2-line"></i>
            <h3><a href="">vie etudiant</a></h3>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- ======End Hero===== -->
  
  

    <!-- ======= formation Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Programme d'etude</h2>
          <p>Nos Formations</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2"  data-aos="fade-left" data-aos-delay="100" >
            <img src="assets/img/images/K.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
           
            <p class="fst-italic">
            voici les formation que notre institut offre  
            <ul>
              <li><i class="ri-check-double-line"></i>LSI: Cette licence intitulé "science de l'informatique" comprend deux spécialités :
                Génie Logiciel et Système d'Information : GL   
                Informatique et Multimédia : IM</li>
              <li><i class="ri-check-double-line"></i> LIRI: Cette Licence Contient une seule Spécialité : Ingénierie des réseaux et systèmes</li>
              <li><i class="ri-check-double-line"></i> SIW: Mastère de Recherche en Systèmes d'Informations et Web
                Plan d'études du Mastère de recherche en systèmes d'informations et web</li>
              <li><i class="ri-check-double-line"></i> ASRI: Mastère Professionnel en Administration et Sécurité des Réseaux Informatiques Pour plus de détails sur le parcours - ASRI</li>
              <li><i class="ri-check-double-line"></i> AWI: Mastère Professionnel en Application Web Intelligente</li>
              <li><i class="ri-check-double-line"></i>NTICDIA: Mastère Co-Construite en Nouvelles Technologies de l’Information et de la Communication dédiées à l'Innovation de l'Agriculture
                Pour plus de détails sur le Parcours - NTICDIA</li>
            </ul>
            <p>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End formation Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Clubs</h2>
        <p>Clubs de Isi Kef</p>
      </div>


      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/clubs/2.jpg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Artsy</h4>
            <div class="portfolio-links">
              <a href="assets/img/clubs/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Artsy"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details1.html" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
     

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="assets/img/clubs/1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>ENACTUS</h4>
              <div class="portfolio-links">
                <a href="assets/img/clubs/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ENACTUS"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details2.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
          <div class="portfolio-wrap">
            <img src="assets/img/clubs/4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>GDSC</h4>              <div class="portfolio-links">
                <a href="assets/img/clubs/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="GDSC"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>
       


        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/clubs/5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>ANT</h4>
              <div class="portfolio-links">
                <a href="assets/img/clubs/5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="ANT"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details5.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="assets/img/clubs/6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>TUNIVISION</h4>
              <div class="portfolio-links">
                <a href="assets/img/clubs/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="TUNIVISION"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details4.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section><!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
        <section id="erasmus" class="team">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>Erasmus+</h2>
              <p>Projet Erasmus+</p>
            </div>
        
        Le&nbsp; programme Erasmus + a pour objectif de soutenir des actions  dans les domaines de l'&eacute;ducation, de la formation, de la jeunesse et des  sports pour la p&eacute;riode 2014-2020.<br />
      <p>Erasmus+ soutient financi&egrave;rement une large gamme d&rsquo;actions et  d&rsquo;activit&eacute;s dans les domaines de l&rsquo;enseignement, de la formation, de la  jeunesse et du sport. Le programme vise &agrave; donner aux &eacute;tudiants, aux  stagiaires, au personnel et aux volontaires la possibilit&eacute; de s&eacute;journer &agrave;  l&rsquo;&eacute;tranger pour renforcer leurs comp&eacute;tences et accro&icirc;tre leur  employabilit&eacute;. Il aide les organisations &agrave; travailler dans le cadre de  partenariats internationaux et &agrave; partager les pratiques innovantes dans  les domaines de l&rsquo;&eacute;ducation, de la formation et de la jeunesse. Erasmus+  comporte &eacute;galement une importante dimension internationale (i.e.  coop&eacute;ration avec les Pays Partenaires) notamment dans le domaine de  l'enseignement sup&eacute;rieur. Cette dimension permet d'ouvrir le programme &agrave;  des activit&eacute;s de coop&eacute;ration institutionnelle, de mobilit&eacute; des jeunes  et du personnel et ce, au niveau mondial. La nouvelle action pour le  sport soutiendra les projets li&eacute;s aux sports de masse et contribuera &agrave;  la lutte contre les probl&egrave;mes transnationaux comme le trucage des  matchs, le dopage, la violence et le racisme.</p>
      <p>Les actions men&eacute;es au titre du programme Erasmus+ se r&eacute;partissent en actions d&eacute;centralis&eacute;es et en actions centralis&eacute;es.</p>
      <ul>
      <li>Les actions d&eacute;centralis&eacute;es sont g&eacute;r&eacute;es dans chaque pays membre  du programme par les agences nationales d&eacute;sign&eacute;es par les autorit&eacute;s  nationales concern&eacute;es.</li>
      <li>Les actions centralis&eacute;es sont g&eacute;r&eacute;es au niveau europ&eacute;en par  l&rsquo;Agence ex&eacute;cutive &Eacute;ducation, Audiovisuel et Culture , dont le si&egrave;ge est  &agrave; Bruxelles.</li>
      </ul>
      <p>Pour plus d'informations au programmes visitez <a href="http://eacea.ec.europa.eu/erasmus-plus_fr" target="_blank">le site du projet .</a></div>
            </div>
          </div>
  

   

      </div>
    </section><!-- End Services Section -->


    <!-- ======= 'c' Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <div class="section-title">
            <h2>4C</h2>
            <p>Centres de Carrières et de Certifications des Compétences</p>
          </div>
  
          <h1 class="title1">4C</h1>
          <div class="clear"><img src="assets/img/4c.png" /></div>
    <span style="font-size: small;">4C : Centres de Carri&egrave;res et de Certifications des Comp&eacute;tences <br /><br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Le <strong>C</strong>entre de <strong>C</strong>arri&egrave;res et de <strong>C</strong>ertification des <strong>C</strong>omp&eacute;tences (4C) est une  structure rattach&eacute;e &agrave; la pr&eacute;sidence de l&rsquo;Universit&eacute; ou au doyen  /directeur de l&rsquo;&eacute;tablissement d&rsquo;enseignement sup&eacute;rieur et de recherche  dont la mission est de pr&eacute;parer et d&rsquo;accompagner ses usagers, &eacute;tudiants  et dipl&ocirc;m&eacute;s, en vue de faciliter leur insertion sur le march&eacute; du  travail.<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Il tend &eacute;galement &agrave; jouer le r&ocirc;le du partenaire privil&eacute;gi&eacute; pour toute  entreprise d&eacute;sirant recruter un profil professionnel particulier ayant  obtenu un dipl&ocirc;me universitaire mais n&rsquo;ayant pas encore cumul&eacute; une  exp&eacute;rience confirm&eacute;e. Le 4C est le maillon entre l&rsquo;universit&eacute;,  l&rsquo;&eacute;tudiant et l&rsquo;entreprise.<br />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Le 4C &oelig;uvre &eacute;galement &agrave; faciliter la certification des comp&eacute;tences afin  de renforcer les chances de recrutement de nouveaux dipl&ocirc;m&eacute;s. Il met ses  services &agrave; la disposition des entreprises afin de renforcer et  valoriser les qualifications professionnelles de leurs employ&eacute;s.<br /><br />pour plus d'informations voir notre page facebook : <br /><br /><a href="https://www.facebook.com/4c-ISIKef-139462046783095/" target="_blank">https://www.facebook.com/4cisikef</a></span>
  <div><span style="font-size: x-small;"><a href="https://www.youtube.com/watch?v=bJwPR9QtZa0"><br /></a></span></div>
  <div><span style="font-size: x-small;"><a href="https://www.youtube.com/watch?v=bJwPR9QtZa0" target="_blank">https://www.youtube.com/watch?v=bJwPR9QtZa0</a></span></div>
</div>
  
    </section><!-- End Portfolio Section -->


<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
  <div class="container" data-aos="fade-up">
    <div class="row no-gutters">
      <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right" data-aos-delay="100">
        <img src="assets/img/images/H.jpg" width="570px" alt="image description">
      </div>
      <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch" data-aos="fade-left" data-aos-delay="100">
        <div class="content d-flex flex-column justify-content-center">
          <h3>Nombre d'étudiants, d'enseignants, de laboratoires et d'amphithéâtres</h3>
          <p>
            Notre université accueille un grand nombre d'étudiants et d'enseignants qualifiés dans divers domaines de spécialisation. Nous disposons également de plusieurs laboratoires de recherche et d'amphithéâtres équipés pour garantir un environnement d'apprentissage de qualité.
          </p>
          <div class="row">
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span data-purecounter-start="0" data-purecounter-end="1165" data-purecounter-duration="2" class="purecounter"></span>
                <p><strong>Étudiants</strong> Nous sommes fiers d'accueillir un nombre élevé d'étudiants talentueux dans notre université.</p>
              </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-person"></i>
                <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="2" class="purecounter"></span>
                <p><strong>Enseignants</strong> Nous avons une équipe de plus de 45 enseignants hautement qualifiés.</p>
              </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-geo-alt"></i>
                <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="4" class="purecounter"></span>
                <p><strong>Laboratoires</strong> Nous disposons de plus de 10 laboratoires de recherche équipés de ordinateurs avec des moderne technologies.</p>
              </div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-stretch">
              <div class="count-box">
                <i class="bi bi-geo-alt"></i>
                <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="4" class="purecounter"></span>
                <p><strong>Amphi</strong> notre institut dispose des amphis spacieux et modernes pour des cours interactifs et stimulants. </p>
              </div>
            </div>
          </div>
        </div><!-- End .content-->
      </div>
    </div>
  </div>
</section><!-- End Counts Section


     <!-- ======= Testimonials Section ======= -->
     <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                <h3>Mohamed Hayouni</h3>
                <h4>Directeur de l’Institut Supérieur d’Informatique du Kef</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Je vous souhaite la bienvenue sur le site web de l’Institut Supérieur d’Informatique du Kef.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                <h3>Mohamed Hayouni</h3>
                <h4>Directeur de l’Institut Supérieur d’Informatique du Kef</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Ce site s'enrichit régulièrement pour vous fournir les informations que vous cherchez. Que vous soyez visiteur, étudiant, personnel, enseignant, administratif ou technique, que vous cherchiez des informations sur notre offre de formation, sur les examens, sur les stages, sur l'actualité de l’institut, ... , ce site est fait pour vous.  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                <h3>Mohamed Hayouni</h3>
                <h4>Directeur de l’Institut Supérieur d’Informatique du Kef</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Notre Institut est reconnu pour la qualité de ses formations. Il attire chaque année plus d'étudiants et leur offre des cursus et débouchés variés.  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                <h3>Mohamed Hayouni</h3>
                <h4>Directeur de l’Institut Supérieur d’Informatique du Kef</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Notre plateforme est conçue pour être un espace d’échange vous donnant une image aussi fidèle que possible de ce que nous sommes et de ce qui vous attend. Votre opinion nous tient à cœur, car elle nous aidera à maintenir notre site vivant et à améliorer sa qualité.

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                <h3>Mohamed Hayouni</h3>
                <h4>Directeur de l’Institut Supérieur d’Informatique du Kef</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Nous espérons que la présente visite saura répondre à toutes vos attentes et interrogations, mais par-dessus tout aiguiser votre curiosité au point de communiquer avec nous. Il s’agit d’une première démarche, mais nous anticipons déjà le plaisir de vous accueillir au sein de notre institut. Il nous fera plaisir de vous accompagner tout au long de votre parcours à la recherche de l’information dont vous avez besoin. <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
  

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials.jpg" class="testimonial-img" alt="">
                <h3>Mohamed Hayouni</h3>
                <h4>Directeur de l’Institut Supérieur d’Informatique du Kef</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  L’équipe de direction de l’Institut Supérieur d’Informatique du Kef vous souhaite une bonne visite de ce site.

Très cordialement

Hayouni Mohamed

Directeur de l’Institut Supérieur d’Informatique du Kef
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
    <br>
    <br>


    <!-- ======= Counts Section ======= -->
    <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Organigramme administratif</h2>
      <p>Voici l'Organigramme administratif de notre institut</p>
<img src="assets/img/orgad.jpg" height=500px>
    </div>
  </div>
   
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        

        <div class="section-title">
          <h2>isi kef</h2>
          <p>droit d'access aux information</p>
        </div>

        <div class="row">
          <div class="col-md-4 col-lg-4">
            <img src="assets/img/images/G.jpg" >
          </div>
	<div class="col-md-8 col-lg-8">
<div class="content_page">
<h1 class="titre_zone" style="text-align: center;"><span style="font-size: x-large;">&nbsp;: حق النفاذ إلى المعلومة بالمعهد العالي للإعلاميّة بالكاف</span></h1>
<div style="text-align: right;" dir="rtl">
<ul>
<li dir="rtl"> <span style="font-size: large;"><strong>سياسة النفاذ إلى المعلومة:</strong></span></li>
<span style="font-size: medium;"> </span> 
</ul>
<span style="font-size: medium;"> </span>
<p dir="rtl"><span style="font-size: medium;">تطبيقا للدستور(الفصل32) و مقتضيات <a class="lien_document" title="القانون الأساسي عدد 22 لسنــــــــــة 2016 مـــــــــؤرخ فــــــي 24 مارس 2016.pdf" href="image.php?id=2653" target="_blank">القانون الأساسي عدد 22 لسنــــــــــة 2016 مـــــــــؤرخ فــــــي 24 مارس 2016</a> والمتعلق  بالحق في النفاذ إلى المعلومة .يعمل المعهد العالي للإعلاميّة بالكاف على إرساء علاقات جديدة  مع المواطن من خلال وضع جميع المعلومات و الوثائق الإدارية على ذمة العموم .</span></p>
<span style="font-size: medium;"> </span>
<p dir="rtl"><span style="font-size: medium;">مراجع قانونية منظمة للنفاذ الدستور: الفصل 32 (الفقرة الأولى) تضمن الدولة الحق في الإعلام و الحق في النفاذ إلى المعلومة <a class="lien_document" title="القانون الأساسي عدد 22 لسنــــــــــة 2016 مـــــــــؤرخ فــــــي 24 مارس 2016.pdf" href="image.php?id=2653" target="_blank">القانون الأساسي عدد 22 لسنــــــــــة 2016 مـــــــــؤرخ فــــــي 24 مارس 2016</a>.</span></p>
<span style="font-size: medium;"> </span>
<p dir="rtl"><span style="font-size: medium;"><a class="lien_document" title="منشور رئيس الحكومة عدد 19 المؤرخ في 18 ماي 2018.pdf" href="image.php?id=2662" target="_blank">منشور رئيس الحكومة عدد 19 المؤرخ في 18 ماي 2018</a> والمتعلق بالحق في  النفاذ إلى المعلومة مطبوعات خاصة بالنفاذ  مطلب نفاذ إلى المعلومة.</span></p>
<span style="font-size: medium;"> </span>
<p dir="rtl"><span style="font-size: medium;">- <a class="lien_document" title="قائمة المكلّفين بالنّفاذ إلى المعلومة.pdf" href="image.php?id=2665" target="_blank">قائمة المكلّفين بالنّفاذ إلى المعلومة.</a></span></p>
<span style="font-size: medium;"> </span> 
<ul>
<li><span style="font-size: medium;">وثائق للتحميل:</span></li>
</ul>
<span style="font-size: medium;"> </span><ol><span style="font-size: medium;"> </span>
<li><span style="font-size: medium;"><a class="lien_document" title="مطلب نفاذ إلى المعلومة.pdf" href="info1.pdf" target="_blank">مطلب نفاذ إلى المعلومة</a></span></li>
<span style="font-size: medium;"> </span>
<li><span style="font-size: medium;"><a class="lien_document" title="مطلب تظلم لدى رئيس الهيكل.pdf" href="info2.pdf" target="_blank">مطلب تظلم لدى رئيس الهيكل</a></span></li>
</ol></div>
</div>
</div>   

      </div>
    </section><!-- End Team Section -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contactez nous</p>
        </div>

        <div>
          <iframe style="border:0; width: 100%; height: 270px ;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3220.5121421290924!2d8.70833621476092!3d36.17842461015173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fba44eb16009e5%3A0xea46e94b9ed2cde8!2sInstitut%20Sup%C3%A9rieur%20de%20l&#39;Informatique%20du%20Kef!5e0!3m2!1sfr!2stn!4v1679225656075!5m2!1sfr!2stn" frameborder="0" allowfullscreen></iframe>        </div>

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>5 Rue Saleh Ayech - 7100 Kef</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>isikef@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+(216) 78 201 056</p>
                <br>
                <h4>Fax :</h4>
                <p>+ (216) 78 200 237</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>ISI KEF<span>.</span></h3>
              <p>
                Institut Supérieur d'Informatique du Kef
                <br>
                5 Rue Saleh Ayech - 7100 Kef <br><br>
                <strong>Phone:</strong> +(216) 78 201 056<br>
                <strong>Email:</strong> isikef@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/profile.php?id=100057592473413" class="facebook"><i class="bx bxl-facebook"></i></a>
                
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>liens utiles</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.orientation.tn/orient/">Orientation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.uj.rnu.tn/Ar/%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D8%AC%D8%AF%D8%A7%D8%AA_46_4">université Jendouba</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www3.inscription.tn/">inscription</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="http://www.mes.tn/?langue=fr">Ministère de l'Enseignement Supérieur et de la Recherche Scientifique</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://best.rnu.tn/dgaemuet/index.jsp">Affaires estudiantines en ligne</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://info.erasmusplus.fr/">Erasmus+</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>vie étudiante</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Activités culturelles</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Activités sportives</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#"></a>Media Room</li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">plan de l'institut</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Plan de la Bibliothèque</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Recevez les dernières actualités et offres exclusives directement dans votre boîte de réception.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Newsletter">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ISI KEF</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       

        Designed by Mohamed Amine Louati
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>