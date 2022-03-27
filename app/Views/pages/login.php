<head>
  <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css')?>" type="text/css" />
  <title>Sign In</title>
</head>
<div class="container-fluid m-0 d-flex align-items-center justify-content-center vh-100 row">
  <img src="<?php echo base_url('assets/img/bg-fundo-login.jpeg')?>" class="bg-login-img" alt="...">
  <div class="row  card d-flex align-items-center justify-content-center col-sm-7 ">
    <img src="<?php echo base_url('assets/img/logo-flash-preto.png')?>" class="card-img-top w-75 " alt="...">
    <div class="card-body col-md-12 col-lg-7 pb-0">

      <form action="/" method="post">
        <div class="form-group">
          <label>E-mail:</label>
          <input name="email" class="form-control " placeholder="E-mail" type="text" value="<?= set_value("email");?>">
        </div> <!-- form-group// -->
        <div class="form-group">

          <label>senha:</label>
          <input class="form-control" name="password" placeholder="******" type="password"
            value="<?= set_value("password");?>">
        </div> <!-- form-group// -->

        <?php if (isset($validation)): ?>
        <div class="col-12">
          <div class="alert alert-danger text-center p-1" role="alert">
            <?= $validation->listErrors() ?>
          </div>
        </div>
        <?php endif ?>
        <div class="col-12">
          <?php if(session()->getFlashData('msg')): ?>
          <div class="alert alert-danger text-center p-1" role="alert">
            <?= session()->getFlashData('msg') ?>
          </div>
          <?php endif;?>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-acessar btn-block"> Acessar </button>
        </div> <!-- form-group// -->

      </form>
    </div>



  </div>

</div>