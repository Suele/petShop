<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Vida Animal - Cad Categorias</title>
  </head>
  <body>

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top">
            <div class="container">
                    <a class="navbar-brand" href="{{ url('/homePet') }}">Vida Animal</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="{{ url('/homePet') }}">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="{{ url('/produtos') }}">Produtos</a>
                        <a class="nav-item nav-link" href="{{ url('/categorias') }}">Categorias</a>
                        <a class="nav-item nav-link" href="{{ url('/marcas') }}">Marcas</a>
                        <a class="nav-item nav-link" href="#">Compras</a>
                        <a class="nav-item nav-link" href="#">Estoque</a>
                        </div>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">usuário
                                </a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('/') }}">Sair
                                </a>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>


       <div class="container mt-5">
            <h2 class="h5 text-muted mt-2 pb-2">Cadastro de Novas Categorias</h2>
            <form>
                <div class="row mt-5">
                    <div class="col-3">
                        <label for="codigo" class="text-muted">Código da Categoria</label>
                        <input id="codigo" type="text" class="form-control" placeholder="Código da Categoria">
                    </div>
                    <div class="col-6">
                        <label for="nome" class="text-muted">Nome da Categoria</label>
                        <input id="nome" type="text" class="form-control" placeholder="Nome da Categoria">
                    </div>
                </div>
                <div class="form-group mt-4">
                    <button type="button" class="btn btn-outline-success btn-lg mt-3">Cadastrar</button>  
                    <a href="{{ url('/categorias') }}"><button type="button" class="btn btn-outline-danger btn-lg ml-3 mt-3">Voltar</button></a>        
                </div>  
            </form>
       </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>