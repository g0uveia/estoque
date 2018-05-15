<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" />
    <!-- Materialize Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <!-- jQuery v3.3.1 -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="js/script.js"></script>
  </head>
  <body>
    <nav class="row">
      <div class="nav-wrapper container">
        <a href="#" class="brand-logo">Estoque</a>
      </div>
    </nav>
    <div id="modal1" class="modal">
      <div class="modal-content">
        <div class="col s12">
        <ul class="tabs">
          <li class="tab col s5"><a href="#test1">Remover</a></li>
          <li class="tab col s5"><a class="active" href="#test2">Saída</a></li>
        </ul>
        </div>
        <div id="test1" class="col s12">
          <div class="modal-content">
            <h5>Nome</h5>
            <p>Excluir permanentemente esse item do estoque?</p>
          </div>
          <div class="modal-footer">
            <a href="#!" id="saidaOK" class="modal-action modal-close waves-effect waves-green btn-flat">Sim</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
          </div>
        </div>
        <div id="test2" class="col s12">
          <div class="modal-content">
            <h5>Nome</h5>
            <p>Registrar a saída do item no estoque</p>
            <p class="range-field">
              Quantidade:
              <input type="range" name="numIn" id="numIn" min="1" max="5" value="1" oninput="numOut.value = numIn.value" />
              <span class="spanRange badge teal white-text"><output name="numOut" id="numOut">1</output></span>
            </p>
          </div>
          <div class="modal-footer">
            <a href="#!" id="saidaOK" class="modal-action modal-close waves-effect waves-green btn-flat">OK</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="searchbox container">
        <div class="search chips chips-autocomplete"></div>
        <i class="material-icons">search</i>
      </div>
      <div class="col s10 container" id="pool-categorias">
        <a href="entrada.html" class="btn waves-effect">
          <i class="material-icons">add</i><span>Adicionar</span></a>
        <button id="btn-edit" class="btn orange waves-effect">
          <i class="material-icons">edit</i><span>Editar</span></button>
        <button id="btn-delete" class="btn red waves-effect">
          <i class="material-icons">remove</i><span>Remover</span></button>
      </div>
    </div>
    <div class="row">
      <div class="col s12 m8 push-m2 l6 push-l3 ">
        <ul class="collection">
          <li class="collection-item avatar">
            <i class="circle grey"></i>
            <span class="title">Nome</span>
            <p class="qnt">Quantidade: x</p>
            <label class="check">
              <input type="checkbox" class="filled-in" />
              <span></span>
              </label>
            </p>
            <p>
              <span class="chip orange white-text">Categoria 1</span>
              <span class="chip teal white-text">Categoria 2</span>
            </p>
          </li>
        </ul>
      </div>
    </div>
  </body>
</html>
