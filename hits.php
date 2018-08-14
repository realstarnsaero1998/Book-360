<?php 
include('config.php');
if(isset($_POST['post']))
{
    $plist=$_POST['plist'];
    $song=$_POST['song'];
    $img=$_POST['img'];
$cate=$_POST['cate'];

	  $ins_qry=mysql_query("INSERT INTO `music`( `id`,`t_playlist_name`, `t_song`, `t_image`)VALUES (Null,'$plist','$song','$img')");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome | SongTreat 360</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Song Treat 360</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Today's Popular Hits</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Top Albums</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Category</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <h1>Music is the Universal language of MANKIND...</h1>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5"> MUSIC speaks what cannot be expressed soothes the mind and gives it rest heals the heart and makes it whole flows from heaven to the soul.</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="index.php">Find Out More</a>
          </div>
        </div>
      </div>
    </header>

   

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Top Albums</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
		
		
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                          <h2 class="card-inside-title">Name</h2>  <input type="text" class="form-control" name="plist" placeholder="playlist name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <h2 class="card-inside-title">Song</h2><input type="text" class="form-control" name="song" placeholder="song">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="form-line">
                                            <h2 class="card-inside-title">image</h2><input type="text" class="form-control" name="img" placeholder="image">
                                        </div>
                                    </div>
									
									
							
                                      
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                               
                                        <button type="submit" name="post" class="btn btn-primary btn-lg m-l-15 waves-effect">Post</button>
										<a href="index.php" class="btn btn-danger btn-lg m-l-15 waves-effect">Cancel</a>
                                    </div>
                                    
                                 
                                </div>
                            
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
          
          
         
        </div>
      </div>
    </section>

   

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>8778375504</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-nivethini281901@gmail.com">nivethini281901@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

  </body>

</html>
