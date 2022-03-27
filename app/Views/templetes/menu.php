<?php $uri = service('uri');?>

<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/menu.css')?>" type="text/css" />

</head>
<div class="container-img-menu">
  <img src="<?php echo base_url('assets/img/logo-flash-preto.png')?>" alt="logo-flash-preto">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid menu">
    <a class="navbar-brand" href="#">

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">

          <a class="nav-link <?= $uri->getSegment(1) === 'Home' ? 'active' : null ?>" aria-current="page"
            href="/Home">Home</a>
        </li>
        <li class="nav-item">

          <a class="nav-link <?= $uri->getSegment(1) === 'register' ? 'active' : null ?>" href="/register">Cadastro</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href="/Login/logout">sair</a>
        </li>
      </ul>

    </div>
  </div>
</nav>