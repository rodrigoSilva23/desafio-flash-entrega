<head>
  <title>Registros </title>
  <link rel="stylesheet" type="text/css" href="/assets/css/register.css">
</head>
<main class="container my-3">
  <div class="  d-flex justify-content-center row">
    <div class="main-body  col-sm-11 ">
      <div class="page-body">
        <div class="card">
          <div class="card-title">
            <h2>Cadastro de Entregadores</h2>
            <h3>
              <p>*</p>Campos Obrigatórios
            </h3>
          </div>
          <div class="card-block">
            <form action="/registerCourier" method="post">
              <div class=" mt-3 ">
                <div class="row mx-2">
                  <div class=" col-sm-7  form-group">
                    <label>Nome:<p>*</p></label>
                    <input name="name" type="text" placeholder="Nome Completo" class="form-control" required>
                  </div>
                  <div class="col-sm-5  form-group ">
                    <label>E-mail<p>*</p></label>
                    <input name="email"type="text" placeholder="E-mail" class="form-control " required>
                  </div>
                </div>
              </div>
              <div class="row mx-2">

                <div class="col-sm-6    form-group">
                  <label>Data de nascimento:<p>*</p></label>
                  <input name="dataNas" type="date" placeholder="Vigência do contrato" class="form-control" required>
                </div>
              </div>
              <div class="row mx-2">
                <div class=" col-sm-3  form-group">
                  <label>CEP:<p>*</p></label>
                  <input type="text" placeholder="Cep" id="cep" name="cep" class="form-control inputCep " required>
                  <div class="invalid-feedback" id="cepValidacao"></div>
                </div>
                <div class="col-sm-5 form-group isCep">
                  <label>Rua:<p>*</p></label>
                  <input type="text" name="rua" id="rua" class="form-control" required>
                </div>
                <div class="col-sm-4  form-group isCep">
                  <label>Bairro:<p>*</p></label>
                  <input type="text" name="bairro" id="bairro" class="form-control" readonly required>
                </div>
              </div>
              <div class="row mx-2 isCep">
                <div class="col-sm-3 form-group isCep">
                  <label>Cidade:<p>*</p></label>
                  <input name="cidade" type="text" id="cidade" class="form-control" readonly required>
                </div>
                <div class="col-sm-2 form-group">
                  <label>Estado:<p>*</p></label>
                  <input name="uf" type="text" id="uf" class="form-control" readonly required>
                </div>
                <div class=" col-sm-7  form-group ">
                  <label>Complemento:<p>*</p></label>
                  <input name="complemento" type="text" id="complemento" class="form-control" required>
                </div>
              </div>
              <div class="d-flex justify-content-center my-2 ">
                <button type="submit" class="btn btn-lg btn-info mr-3">Cadastrar</button>
              </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
</main>