<?php 


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>business</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      
      }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;

        
         
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .carousel-item{
        background-size: cover;
        background-repeat: no-repeat; 

      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/tomra.css" rel="stylesheet">
  </head>
  <body>
   <!-- autoplay donkey sound-->
    <iframe src="audio/zero_bit_dd.mp3" allow="autoplay" hidden="visually-hidden"id="audio"></iframe>
     <audio id="player" hidden="visually-hidden" autoplay controls loop>
      <source src="audio/donkey_sound.mp3" type="audio/mp3"></audio>

    

   



    


<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">business</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href=" https://www.google.com/search?q=home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="esel.php">Log out</a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="login.php">Log in</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators" >
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner" >
      <div class="carousel-item active" style="background-image: url(bilder/karousellbilde2.jpg)";>
        <!--<svg class="bd-placeholder-img" >
         width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
           
        <div class="container"  >
          <div class="carousel-caption text-start">
           <h1 style="color:black;">Hvordan starte din egen bedrift?</h1>
            <p style="color:black;">Her gir vi deg en skreddersydd guide tilpasset din bedrift</p>
            <p><a class="btn btn-lg btn-primary" href="login.php">Registrer nå</a></p>


          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(bilder/slide2.jpg)";>
      

        <div class="container">
          <div class="carousel-caption">
            <h1>Ekspertenes råd</h1>
            <p>Vi hjelper deg med å navigere karrieren din ved hjelp av profesjonelle med erfaring.</p>
            <p><a class="btn btn-lg btn-primary" href="https://barbie.mattel.com/shop">Les mer</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(bilder/slide3.jpg)";>
        

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>10 gode tips</h1>
            <p>Les ekspertenes 10 tips for oppstart av din bedrift.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Les mer</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing"  >

    
    <div class="row">
      <div class="col-lg-4">



    </div>
  </div>

    
      

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="prøver her">Visste du at…  <span class="text-muted"></span></h2>
        <p class="lead">Lyden i websiden gjenspeiler din rolle i bedriften?</p>
      </div>

      <div class="col-md-5">
        <div class="container"><img src="bilder/sound.jpg" height="auto" width="100%"> </div>

      </div> 
    </div>

    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <div class="container"><img src="bilder/rabatt.jpg" height="auto" width="100%"> </div>
        
      </div>

      <div class="col-md-5">
        <h2 class="prøver her">Registrer deg nå og få rabatt nå <span class="text-muted"></span></h2>
        <p class="lead">Betal for 3 og få 2 på kjøpet</p>
        

      </div> 
    </div>


    
    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="prøver her">Vi gjennomfører bedrifts- og foretaksstatistikk<span class="text-muted"></span></h2>
        <p class="lead">Se hvordan du kan forbedre statistikken din nå. 
        </p>
<p><a class="btn btn-lg btn-primary" href="https://images.pexels.com/photos/2849308/pexels-photo-2849308.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260">Les mer</a></p>
</div>
      </div>

      <div class="col-md-5">
        <div class="container"><img src="bilder/firkant2.jpg" height="auto" width="100%"> </div>

      </div> 
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>


    <script src="js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
