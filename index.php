<!DOCTYPE html>
<html lang="pt br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD PHP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
            margin-top: 40px;
        }
        #botao{
            background-color: #ff1168;
            color: #ffffff;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <div class="container" id="tamanhoContainer">

        <h4>Formulario de cadastro</h4>
        <form action="" style="margin-top:20px;">
            <!-- numero do produto -->
            <div class="form-group">
                <label for="exampleInputEmail1">Nro do Produto</label>
                <input type="number" class="form-control" placeholder="Insira o Numero Do Produto">
            </div>
            <!-- Nome do Produto -->
            <div class="form-group">
                <label for="exampleInputEmail1">Nome do Produto</label>
                <input type="text" class="form-control" placeholder="Insira o Nome Do Produto">
            </div>
            <!-- Categoria -->
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control">
                    <option>Perifericos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Celulares</option>
                </select>
            </div>

            <!-- Quantidade -->
            <div class="form-group">
                <label for="exampleInputEmail1">Quantidade</label>
                <input type="number" class="form-control" placeholder="Insira a quantidade">
            </div>

            <!-- Lista Fornecedor -->
            <div class="form-group">
                <label>Lista de Fornecedores</label>
                <select class="form-control">
                    <option>Fornecedor A</option>
                    <option>Fornecedor B</option>
                    <option>Fornecedor c</option>
                </select>
            </div>
           
           
            <!-- botao cadastrar -->
            <div style="text-align:right">

                <button type="submit" class="btn  btn-sm" id="botao">Cadastrar</button>

            </div>
        </form>
    </div>




    <script type="text/javascript" src="js/bootstrap.js"></script>
</body>


</html>