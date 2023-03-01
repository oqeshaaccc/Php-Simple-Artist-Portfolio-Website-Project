<!DOCTYPE html>
<html lang="en">
<head>
<title>Portfolio</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Portfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Art By Me
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#pencilart">Pencil Art</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#paintings">Paintings</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#speritual">Speritual Art</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>   
    </ul>   
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/artwork/art28.jpg" alt="First Artwork">
      <div class="carousel-caption d-none d-md-block">
            <h5>This is a title for the first artwork</h5>
            <p>This is a discription for the first artwork</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/artwork/art4.jpg" alt="Second Artwork">
      <div class="carousel-caption d-none d-md-block">
            <h5>This is a title for the Second artwork</h5>
            <p>This is a discription for the Second artwork</p>
      </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/artwork/art11.jpg" alt="Third Artwork">
      <div class="carousel-caption d-none d-md-block">
            <h5>This is a title for the Third artwork</h5>
            <p>This is a discription for the Third artwork</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<a id="pencilart">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Pecil Art</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art5.jpg" class="img-fluid pd-3"/>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art2.jpg" class="img-fluid pd-3"/>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art3.jpg" class="img-fluid pd-3"/>
        </div>
    </div>
    </div>
</section>
</a>
<a id="paintings">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Paintings</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art29.jpg" class="img-fluid pd-3"/>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art12.jpg" class="img-fluid pd-3"/>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art9.jpg" class="img-fluid pd-3"/>
        </div>
</div>
    </div>
</section>
</a>

<a id="speritual">
<section class="my-4">
    <div class="py-4">
        <h2 class="text-center">Speritual Art</h2>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art22.jpg" class="img-fluid pd-3"/>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art15.jpg" class="img-fluid pd-3"/>
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <img src="images/artwork/art21.jpg" class="img-fluid pd-3"/>
        </div>
    </div>
    </div>
</section>
</a>


<a id="contact">
<section class="my-4">
    <div class="py-4">
    <h2 class="text-center">Contact</h2>
    </div>

    <div class="w-50 m-auto">
        <form action="about.php" method= "post">
            <div class="form-group">
                <label>Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>Number:</label>
                <input type="text" name="number" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
</a>


<a id="about">
<section>
<div class="py-4">
    <h2 class="text-center">About</h2>
</div>
<div class="container-fluid">
    <h3 class="text-center">Its me</h3>
    <p class="text-center">
        A soul riding a veichle called a body, wondering in life to fulfill the purpuse.
        Unitl one day... I woke up from a dream, realizing that life is just another dream, which my consiousness insists on waking up to.
    
        It was a journey nurished in my heart the knowledge of the truth about human beings. Who we are, and why we are here.
        Figured out that the only purpuse life has is the one that you give to it.
        
        Remebered past lives, and surrendered to the ONE, that we all... are.
        Founed out that I can paint, I can write, I can cook, I can do more than just to code... Yet... I still can be.
    </p>
</div>
</section>
</a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
</body>
</html>