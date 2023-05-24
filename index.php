<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Register Address</title>
</head>

<body class="main">
  <div class="container">
    <div class="d-flex justify-content-center">
      <div class="panel panel-default border border-dark col-md-5 col-lg-4 col-sm-7 col-7 bg-secondary">
        <div class="panel-heading text-center text-uppercase text-light bg-secondary">Cadastro de Endereço</div>

        <div class="panel-body p-2 bg-secondary">
          <form class="form-address" action="connect.php" method="POST">
            <div class="input-group mt-2 mb-3">
              <input class="form-control" type="text" placeholder="Escreva seu nome completo" id="txtNome" name="txtNome"
                maxlength="125" required>
            </div>
            <div class="input-group mb-3">
              <input class="form-control" type="number" placeholder="CEP" id="txtCep" name="txtCep" maxlength="20"
                required>
            </div>
            <div class="input-group mb-3">
              <input class="form-control" type="text" placeholder="Endereço" id="txtLogradouro" name="txtLogradouro"
                maxlength="220" required>
            </div>
            <div class="input-group mb-3">
              <input class="form-control" type="text" placeholder="Número" name="txtNumero" maxlength="10" required>
            </div>
            <div class="input-group mb-3">
              <input class="form-control" type="text" placeholder="Bairro" id="txtBairro" name="txtBairro" maxlength="45"
                required>
            </div>
            <div class="input-group mb-3">
              <input class="form-control" type="text" placeholder="Cidade" id="txtCidade" name="txtCidade" maxlength="45"
                required>
            </div>
            <div class="input-group">
              <input class="form-control" type="text" placeholder="Estado" id="txtUf" name="txtUf" maxlength="45" required>
            </div>
            <br>
            <div class="text-center">
              <input class="btn btn-dark" type="submit" id="txtSubmit" name="submit" value="Cadastrar">
            </div>
            <br>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-5 col-lg-6 col-sm-7 col-7"></div>

  </div>
  <script type="text/javascript" src="searchCep.js"></script>
</body>

</html>