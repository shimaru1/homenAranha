<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/estilo.css">
    <title>Comic-Show</title>
</head>
<body>
<header>

<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('home')}}">
      <img src="{{'/img/logo.png'}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Comic-Show
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/cadastrar-usuario'}}">cadastro</a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{'/editar-usuario'}}">gerenciar</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{'/img/Superior.jpg'}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{'/img/SuperiorHomemAranha.jpg'}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{'/img/SuperiorSpiderMan.jpg'}}" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

@yield('content')

<footer class="footer"> 
        <div class="text-center">
            <nav> 
                <h2>Fique conectado !</h2>
                <ul> 
                <a href="https://www.instagram.com/nerdallstars/">
                <img src="/img/insta.png" alt="">
                </a>
                 <a href="https://www.youtube.com/watch?v=G5d-mlrpv4M">
                  <img src="/img/youtube.png" alt="">
                 </a>
                <a href="https://www.facebook.com/nerdallstars">
                <img src="/img/facebook.png" alt="">
                </a>
                </ul> 
            </nav>
            <small>Copyright © 2010 </small>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </body>
</html>