<?php $session = session();?>
<div class="container">
  <h1>Bem vindo,<?= $session->type_user ?>!!</h1>


  <div class="mt-3">Lista de Entregadores </div>
  <table class="table mt-1  table-striped table-responsive">
    <thead>
      <tr>
        <th scope="col" >nome</th>
        <th scope="col" class=" ">Data de Nascimento</th>
        <th scope="col" >E-mail</th>
        <th scope="col" >Endereço</th>
        <th scope="col"></th>
        <th scope="col"></th>
        
      </tr>
    </thead>
    <tbody>
      <?php foreach ($session->get('dataCouriers') as $courier):?>
        <tr>
          <th scope="row"><?= $courier->name?></th>
          <td><?= $courier->birth_date?></td>
          <td> <?= $courier->email?></td>
          <td>
          <?= $courier->rua?> -
          <?= $courier->bairro?> -
          <?= $courier->cidade?> -
          <?= $courier->uf?> -
          <?= $courier->complemento?>
          </td>
          <td>
            <a class="btn btn-danger" href="/delete/<?=$courier->id?>" onclick="return confirm('Realmente deseja apagar,<?=$courier->name?>')">delete</a>
          </td>
          <td>
            <a class="btn btn-info" href="/editPage/<?=$courier->id?>">editar</a>
          </td>
        </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>